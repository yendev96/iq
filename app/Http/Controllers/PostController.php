<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use Session;
use Carbon\Carbon;
use Auth;
class PostController extends Controller
{
	public function index(){
		if(isset($_GET['show']) && $_GET['show'] != ''){
			$show = $_GET['show'];
		}else{
			$show = 10;
		}

		$data = DB::table('post');

		if(request()->has('s')){
			$s = $_GET['s'];
			$data = $data->where('title','like','%'.$s.'%');

		}

		if(request()->has('view')){
			$view = $_GET['view'];
			$data = $data->orderBy('view', $view);
		}

		else{
			$data = $data->orderBy('id', 'desc');
		}
		$data = $data->paginate($show)->appends(['view'=> request('view'), 'show'=>request('show'), 's'=>request('s')]);
		$total_count = DB::table('post')->get()->count();
		return view('backend.pages.posts.post', compact('data','total_count'));
	}

	public function getAdd(){
		$article = DB::table('article')->get();
		return view('backend.pages.posts.add', compact('article'));
	}

	public function postAdd(Request $request){
		$addPost                  = new Post;
		$addPost->title           = $request->title_post;
		$addPost->slug            = $request->url;
		$addPost->content         = $request->content_post;
		$addPost->seo_title       = $request->seo_title;
		$addPost->seo_description = $request->seo_description;
		$addPost->article_id      = $request->article;
		$article_slug = DB::table('article')->where('id', $request->article)->first()->slug;
		$addPost->article_slug    = $article_slug;
		$addPost->created_at      = Carbon::today();
		$addPost->author          = Auth::guard('web')->user()->id;
		$addPost->active_schema   = $request->active_schema;
		$addPost->public          = $request->public;
		$addPost->save();
		Session::flash('success', 'Thêm mới thành công');
		return redirect(url('backend/post'));
	}


	public function getEdit($id){
		$article = DB::table('article')->get();
		$data = DB::table('post')->where('id', $id)->first();
		return view('backend.pages.posts.edit', compact('data','article'));
	}

	public function postEdit(Request $request, $id){
		$editPost                  = Post::find($id);
		$editPost->title           = $request->title_post;
		$editPost->slug            = $request->url;
		$editPost->content         = $request->content_post;
		$editPost->seo_title       = $request->seo_title;
		$editPost->seo_description = $request->seo_description;
		$editPost->article_id      = $request->article;
		$article_slug = DB::table('article')->where('id', $request->article)->first()->slug;
		$editPost->article_slug    = $article_slug;
		$editPost->active_schema   = $request->active_schema;
		$editPost->public          = $request->public;
		$editPost->save();
		Session::flash('success', 'Sửa thành công');
		return redirect(url('backend/post/edit', $id));
	}

	public function delete($id){
		$del = DB::table('post')->where('id', $id)->delete();
		Session::flash('success', 'Xóa thành công');
		return redirect(url('backend/post'));
	}

	public function deleteMul(Request $request){
		$list_del = $request->check_id;
		if(isset($request->check_id)){
			$del = DB::table('post')->whereIn('id', $list_del)->delete();
			Session::flash('success', 'Xóa thành công');
		}

		return redirect(url('backend/post'));


	}

}
