<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Author;
use Session;
use Carbon\Carbon;
use App\Player;
class EQController extends Controller
{

	public function index(){
		$social = DB::table('social')->first();
		return view('frontend.pages.eq.eq', compact('social'));
	}

	public function checkEQ(Request $request){
		$name    = $request->name;
		$age     = $request->age;
		$gender  = $request->gender;
		$country = $request->country;
		$email   = $request->email;
		$eq      = $request->eq;

		$result = DB::table('eq')->where('start', '<', $eq)->where('end', '>=', $eq)->first();
		$content = $result->content;
		if($content){
			echo $content;
		}

		$data_player = DB::table('player')->where('email', $email)->first();
		if(!empty($data_player)){
			$addplayder = Player::where('email', $email)->update(['eq'=> $eq]);
		}else{
			$addplayder             = new Player;
			$addplayder->name       = $name;
			$addplayder->age        = $age;
			$addplayder->gender     = $gender;
			$addplayder->email      = $email;
			$addplayder->country    = $country;
			$addplayder->created_at = Carbon::today();
			$addplayder->eq         = $eq;
			$addplayder->save();

		}
	}


	public function highEqMember(){
		$data = DB::table('player')->orderBy('eq', 'desc')->paginate(25);
		return view('frontend.pages.member.high_eq', compact('data'));
	}
}
