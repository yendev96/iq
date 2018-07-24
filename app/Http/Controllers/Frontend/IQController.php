<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Author;
use Session;
use Carbon\Carbon;
use App\Player;
class IQController extends Controller
{

	
	public function testIq($code){

		$data_cat = DB::table('category')->where('slug', $code)->first();
		if($data_cat->active_schema == 1){
			$social = DB::table('social')->first();
		}
		$data = DB::table('question')->where('cat_slug', $code)->skip(0)->take(26)->get();
		$data_count = $data->count();
		return view('frontend.pages.iq.iq', compact('data','data_count', 'data_cat','social'));
	}

	public function checkIq(Request $request){
		$name    = $request->name;
		$age     = $request->age;
		$gender  = $request->gender;
		$country = $request->country;
		$email   = $request->email;
		$count   = $request->count_true;

		switch ($count) {
			case 1:
			$iq = 64;
			echo '64';
			break;
			case 2:
			$iq = 68;
			echo '68';
			break;
			case 3:
			$iq = 72;
			echo '72';
			break;
			case 4:
			$iq = 76;
			echo '76';
			break;
			case 5:
			$iq = 80;
			echo '80';
			break;
			case 6:
			$iq = 84;
			echo '84';
			break;
			case 7:
			$iq = 88;
			echo '88';
			break;
			case 8:
			$iq = 92;
			echo '92';
			break;
			case 9:
			$iq = 96;
			echo '96';
			break;
			case 10:
			$iq = 100;
			echo '0';
			break;
			case 11:
			$iq = 104;
			echo '104';
			break;
			case 12:
			$iq = 108;
			echo '108';
			break;
			case 13:
			$iq = 112;
			echo '112';
			break;
			case 14:
			$iq = 116;
			echo '116';
			break;
			case 15:
			$iq = 120;
			echo '120';
			break;
			case 16:
			$iq = 124;
			echo '124';
			break;
			case 17:
			$iq = 128;
			echo '128';
			break;
			case 18:
			$iq = 132;
			echo '132';
			break;
			case 19:
			$iq = 136;
			echo '136';
			break;
			case 20:
			$iq = 140;
			echo '140';
			break;
			case 21:
			$iq = 144;
			echo '144';
			break;
			case 22:
			$iq = 148;
			echo '148';
			break;
			case 23:
			$iq = 152;
			echo '152';
			break;
			case 24:
			$iq = 156;
			echo '156';
			break;
			case 25:
			$iq = 160;
			echo '160';
			break;
			case 26:
			$iq = 164;
			echo '164';
			break;
			default:
			$id= 60;
			echo '60';
			break;
		}

		$data_player = DB::table('player')->where('email', $email)->first();
		if(!empty($data_player)){
			$addplayder = Player::where('email', $email)->update(['iq'=> $iq]);
		}else{
			$addplayder             = new Player;
			$addplayder->name       = $name;
			$addplayder->age        = $age;
			$addplayder->gender     = $gender;
			$addplayder->email      = $email;
			$addplayder->country    = $country;
			$addplayder->created_at = Carbon::today();
			$addplayder->iq         = $iq;
			$addplayder->save();

		}
	}

	public function highIqMember(){
		$data = DB::table('player')->orderBy('iq', 'desc')->paginate(25);
		return view('frontend.pages.member', compact('data'));
	}
}
