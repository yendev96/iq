<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Setting;
class SettingController extends Controller
{
    public function index(){
    	$data = DB::table('setting')->first();
    	return view('backend.pages.setting.setting', compact('data'));
    }

    public function postSetting(Request $request, $id){
		$setting                   = Setting::find($id);
		$setting->site_title       = $request->site_title;
		$setting->site_description = $request->site_description;
		$setting->lang             = $request->lang;
		$setting->site_url         = $request->site_url;
		$setting->active_schema    = $request->active_schema;
    	$setting->save();
    	Session::flash('success', 'Thành công');
		return redirect(url('backend/setting'));
    }
}
