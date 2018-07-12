<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use Carbon\Carbon;
use Session;
class UserController extends Controller
{
	public function index(){
		$total_count = DB::table('users')->get()->count();
		if(request()->has('show')){
			$show = $_GET['show'];
		}else{
			$show = 10;
		}
		$data = DB::table('users');
		if(request()->has('s')){
			$s = $_GET['s'];
			$data = $data->where('email','like','%'.$s.'%')->orWhere('username','like','%'.$s.'%');
		}

		if(request()->has('rl')){
			$rl = request('rl');
			$data = $data->where('role', $rl);
		}
		else{
			$data = $data->orderBy('id',"DESC");
			
		}

		$data = $data->paginate($show)->appends(['show'=>request('show'), 's'=>request('s')]);
		return view('backend.pages.users.user', compact('data','total_count'));
	}

	public function addUser(){
		return view('backend.pages.users.add');
	}

	public function postAddUser(Request $request){
		$this->validate($request,
			[
				'email'    => 'required|email|unique:users',
				'username' => 'required|unique:users|min:6|max:30',
				'password' => 'required|min:6|max:30'
			],

			[
				'email.required'    => 'Email không để trống',
				'email.unique'      => 'Email đã tồn tại',
				'email.email'       => 'Nhập đúng địa chỉ email',
				'username.unique'   => 'Username đã tồn tại',
				'username.min'      => 'Username phải lớn hơn 6 kí tự',
				'username.max'      => 'Username phải nhỏ hơn 30 kí tự',
				'password.required' => 'Password không để trốnng',
				'password.min'      => 'Password phải lớn hơn 6 kí tự',
				'password.max'      => 'Password phải nhỏ hơn 30 kí tự',
			]

		);

		$email     = $request->email;
		$username  = $request->username;
		$password  = $request->password;
		$role      = $request->role;
		$created_at = Carbon::today();

		$addUser             = new User;
		$addUser->email      = $email;
		$addUser->username   = $username;
		$addUser->password   = bcrypt($password);
		$addUser->role       = $role;
		$addUser->created_at = $created_at;
		$addUser->save();
		Session::flash('success', 'Thêm mới thành công');
		return redirect(url('backend/user'));


	}

	public function editUser($id){
		$data = DB::table('users')->where('id', $id)->first();
		return view('backend.pages.users.edit', compact('data'));
	}


	public function postEditUser(Request $request, $id){
		$username  = $request->username;
		$password  = $request->password;
		$role      = $request->role;

		$old_data = User::find($id);
		$editUser               = User::find($id);



		if($username != $old_data->username){
			$this->validate($request,
				[
					'username' => 'required|unique:users|min:6|max:30',
				],

				[
					'username.unique'   => 'Username đã tồn tại',
					'username.min'      => 'Username phải lớn hơn 6 kí tự',
					'username.max'      => 'Username phải nhỏ hơn 30 kí tự',
				]

			);
			$editUser->username = $username;
		}

		if($password != ''){
			$this->validate($request,
				[
					'password' => 'min:6|max:30',
				],

				[
					'password.min'      => 'Password phải lớn hơn 6 kí tự',
					'password.max'      => 'Password phải nhỏ hơn 30 kí tự',
				]

			);
			$editUser->password     = bcrypt($password);

		}

		$this->validate($request,
			[
				'phone_number' => 'min:9|max:11',
			],

			[
				'phone_number.min'      => 'Phone number phải lớn hơn 6 kí tự',
				'phone_number.max'      => 'Phone number phải nhỏ hơn 30 kí tự',
			]

		);

		$editUser->username     = $username;
		$editUser->address      = $request->address;
		$editUser->phone_number = $request->phone_number;
		$editUser->role         = $role;
		$editUser->save();
		Session::flash('success', 'Chỉnh sửa thành công');
		return redirect(url('backend/user'));
		


	}

	public function deleteUser($id){
		$id_login = Auth::guard('web')->user()->id;
		if($id == $id_login){
			Session::flash('danger', 'Bạn không thể xóa chính bạn');
		}else{
			Session::flash('success', 'Xóa thành công');
			$delelte = DB::table('users')->where('id', $id)->delete();
		}

		return redirect(url('backend/user'));

	}

	public function deleteMul(Request $request){
		$id_login = Auth::guard('web')->user()->id;
		if(isset($request->check_id)){
			if(in_array($id_login, $request->check_id)){
				Session::flash('danger', 'Xóa không thành công');
			}else{
				DB::table('users')->whereIn('id', $request->check_id)->delete();
				Session::flash('success', 'Xóa thành công');
			}
		}
		return redirect(url('backend/user'));
		
	}

	public function getProfile($id){
		$data = DB::table('users')->where('id', $id)->first();
		return view('backend.pages.users.profile', compact('data'));
	}
}
