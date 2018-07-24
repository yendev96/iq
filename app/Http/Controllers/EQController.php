<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EQ;
use DB;
use Session;
use Carbon\Carbon;
class EQController extends Controller
{
	public function index(){
		$data = DB::table('eq')->paginate(20);
		return view('backend.pages.eq.eq', compact('data'));
	}

	public function getAdd(){
		return view('backend.pages.eq.add');
	}

	public function postAdd(Request $request){
		$content = $request->content;
		$add = new EQ;
		$add->content = $request->content;
		$add->created_at = Carbon::today();
		$add->save();
		Session::flash('success', 'Thêm mới thành công');
		return redirect(url('backend/eq'));
	}

	public function getEdit($id){
		$data = DB::table('eq')->where('id', $id)->first();
		return view('backend.pages.eq.edit', compact('data'));
	}

	public function delete($id){
		$del = DB::table('eq')->where('id', $id)->delete();
		if($del){
			Session::flash('success', 'Xóa thành công');
			return redirect(url('backend/eq'));
		}
	}

	public function deleteMul(Request $request){
		$list = $request->check_id;
		if(count($list) > 0){
			$del = DB::table('eq')->whereIn('id', $list)->delete();
			Session::flash('success', 'Xóa thành công');
			return redirect(url('backend/eq'));
		}
	}
}
