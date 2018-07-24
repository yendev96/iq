<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Author;
use Session;
use Carbon\Carbon;
use App\Player;
class FrontendController extends Controller
{
	public function index(){
		$setting = DB::table('setting')->first();
		return view('frontend.pages.home', compact('setting'));
	}

	public function getPost($slug){
		$data = DB::table('post')->where('slug', $slug)->first();
		return view('frontend.pages.post.post', compact('data'));
	}
}
