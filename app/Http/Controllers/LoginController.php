<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function getLogin(){
    	return view('backend.pages.login.index');
    }

    public function postLogin(Request $request){
    	$data=[
    		'email'=>$request->email,
    		'password'=>$request->password,
    	];

    	if(Auth::attempt($data)){
    		return redirect(url('backend'));
    	}else{
    		return redirect(url('login'));
    	}
    }

    public function logout(){
    	Auth::guard('web')->logout();
		return redirect(url('/login'));
    }
}
