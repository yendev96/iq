<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BackendController extends Controller
{
    public function index(){
		$data['user_count']     = DB::table('users')->get()->count();
		$data['question_count'] = DB::table('question')->get()->count();
		$data['category']       = DB::table('category')->get()->count();
		$data['post']           = DB::table('post')->get()->count();
    	return view('backend.pages.home.home', compact('data'));
    }
}
