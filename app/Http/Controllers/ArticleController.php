<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;
use Carbon\Carbon;
use Session;
use App\Article;
class ArticleController extends Controller
{
	public function index(){
		$data = DB::table('article');
		if(request()->has('show')){
			$show = request('show');
		}else{
			$show = 10;
		}


		if(request()->has('view')){
			$view = request('view');
			$data = $data->orderBy('view', $view);
		}

		if(request()->has('s')){
			$s = request('s');
			$data = $data->where('title', 'like', '%'.$s.'%');
		}
		$data = $data->paginate($show)->appends(['show'=>$show, 'view'=>request('view'), 's'=> request('s')]);
		return view('backend.pages.article.article', compact('data'));
	}

	public function getAdd(){
		return view('backend.pages.article.add');
	}

	public function postAdd(Request $request){
		$addArticle                      = new Article;
		$this->validate($request,
			[
				'slug'    => 'unique:article',
			],

			[
				'slug.unique'      => 'Slug đã tồn tại',
			]

		);
		$addArticle->title             	  = $request->title;
		$addArticle->seo_title            = $request->seo_title;
		$addArticle->seo_descriptions      = $request->seo_descriptions;
		$addArticle->slug                 = $request->slug;
		$addArticle->active_schema        = $request->schema;
		$addArticle->created_at           = Carbon::today();

		$addArticle->save();
		Session::flash('success', 'Thêm thành công');
		return redirect(url('backend/article'));
	}

	public function getEdit($id){
		$data = DB::table('article')->where('id', $id)->first();
		return view('backend.pages.article.edit', compact('data'));
	}

	public function postEdit(Request $request, $id){
		$edit                   = Article::find($id);
		$edit->title            = $request->title;
		$edit->slug             = $request->slug;
		$edit->seo_title        = $request->seo_title;
		$edit->seo_descriptions = $request->seo_descriptions;
		$edit->active_schema    = $request->schema;
		$edit->save();
		Session::flash('success', 'Thêm thành công');
		return redirect(url('backend/article/edit', $id));

	}

	public function delete($id){
		$delete = DB::table('article')->where('id', $id)->delete();
		Session::flash('success', 'Xóa thành công');
		return redirect(url('backend/article'));
	}

	public function deleteMul(Request $request){
		$list_del = $request->check_id;
		$del = DB::table('article')->whereIn('id', $list_del)->delete();
		Session::flash('success', 'Xóa thành công');
		return redirect(url('backend/article'));
	}
}
