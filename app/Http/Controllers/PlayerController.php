<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Player;
class PlayerController extends Controller
{
    public function index(){
    	$data = DB::table('player');
    	if(request()->has('show')){
    		$show = request('show');
    	}else{
    		$show = 10;
    	}

    	if(request()->has('iq')){
    		$iq = request('iq');
    		$data = $data->orderBy('iq', $iq);
    	}

    	if(request()->has('gender')){
    		$gender = request('gender');
    		$data = $data->where('gender', $gender);
    	}

    	if(request()->has('s')){
    		$s = request('s');
    		$data = $data->where('email', 'like', '%'.$s.'%');
    	}

    	$data = $data->paginate($show)->appends(['iq'=>request('iq'), 'age'=>request('age')]);
    	return view('backend.pages.player.player',compact('data'));
    }

    public function delete($id){
    	$del = DB::table('player')->where('id', $id)->delete();
    	Session::flash('success', 'Xóa thành công');
		return redirect(url('backend/player'));
    }

    public function deleteMul(Request $request){
    	$list_del = $request->check_id;
    	$del = DB::table('player')->whereIn('id', $list_del)->delete();
    	Session::flash('success', 'Xóa thành công');
		return redirect(url('backend/player'));
    }
}
