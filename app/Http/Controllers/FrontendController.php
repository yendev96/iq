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
		return view('frontend.pages.home');
	}

	public function testIq($code){
		$data = DB::table('question')->where('cat_slug', $code)->get();
		$data_count = $data->count();
		return view('frontend.pages.play', compact('data','data_count'));
	}

	public function checkIq(Request $request){
		$name   = $request->name;
		$age    = $request->age;
		$gender = $request->gender;
		$email = $request->email;
		$count  = $request->count_true;

		if($count > 0 && $count <= 2){
			echo 50;
		}
		elseif($count > 2 && $count <= 4){
			echo 50;
		}
		elseif($count > 4 && $count <= 6){
			echo 50;
		}
		elseif($count > 6 && $count <= 8){
			echo 60;
		}
		elseif($count > 8 && $count <= 10){
			echo 70;
		}
		elseif($count > 10 && $count <= 12){
			echo 80;
		}
		elseif($count > 12 && $count <= 14){
			echo 90;
		}
		elseif($count > 14 && $count <= 16){
			echo 100;
		}
		elseif($count > 16 && $count <= 18){
			echo 105;
		}
		elseif($count > 18 && $count <= 20){
			echo 110;
		}
		elseif($count > 20 && $count <= 22){
			echo 115;
		}
		elseif($count > 22 && $count <= 24){
			echo 120;
		}
		elseif($count > 24 && $count <= 26){
			echo 125;
		}else{
			echo 0;
		}
		
		$addplayder = new Player;
		$addplayder->name       = $name;
		$addplayder->age        = $age;
		$addplayder->gender     = $gender;
		$addplayder->email      = $email;
		$addplayder->created_at = Carbon::today();
		$addplayder->iq         = $count;
		$addplayder->save();
		
	}
}
