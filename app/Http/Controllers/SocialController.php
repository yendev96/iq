<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Social;
use Session;
class SocialController extends Controller
{
    public function index(){
    	$data_social = DB::table('social')->first();
    	return view('backend.pages.social.social', compact('data_social'));
    }

    public function postSocial(Request $request, $id){
    	$addSocial = Social::find($id);
		$addSocial->facebook   = $request->facebook;
		$addSocial->youtube    = $request->youtube;
		$addSocial->instagram  = $request->instagram;
		$addSocial->google     = $request->google;
		$addSocial->twitter    = $request->twitter;
		$addSocial->pinterest  = $request->pinterest;
		$addSocial->tumblr     = $request->tumblr;
		$addSocial->soundcloud = $request->soundcloud;
		$addSocial->vk         = $request->vk;
		$addSocial->lastfm     = $request->lastfm;
    	$addSocial->save();
    	Session::flash('success', 'Thành công');
		return redirect(url('backend/social'));
    }

}
