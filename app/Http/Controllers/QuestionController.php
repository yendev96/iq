<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Question;
use Session;
use Auth;
use Carbon\Carbon;
class QuestionController extends Controller
{
    public function index(){
        $data_cat = DB::table('category')->get();
        $total_count = DB::table('question')->get()->count();
        if(request()->has('show')){
            $show = $_GET['show'];
        }else{
            $show = 10;
        }
        $data = DB::table('question')
        ->select(
                'question.id',
                'question.question',
                'question.img',
                'question.op1',
                'question.op2',
                'question.op3',
                'question.op5',
                'question.op6',
                'question.op4',
                'question.anwser',
                'category.name_cat'
            )
        ->join('category', 'category.id', '=', 'question.cat_id');

        if(request()->has('s')){
            $s    = $_GET['s'];
            $data = $data->where('question.question','like','%'.$s.'%');
        }

        if(request()->has('cat')){
            $cat  = request('cat');
            $data = $data->where('question.cat_id', $cat);
        }

        if(request()->has('anwser')){
            $anwser = request('anwser');
            $data   = $data->where('question.anwser', $anwser);
        }

        if(request()->has('lv')){
            $lv   = request('lv');
            $data = $data->where('question.level', $lv);
        }
        $data = $data->orderBy('id', 'desc')->paginate($show)->appends(['s'=>request('s'), 'show'=>request('show'), 'cat'=>request('cat'), 'anwser_true'=>request('anwser')]);
        return view('backend.pages.questions.question', compact('data','total_count','data_cat'));
    }

    public function getAdd(){
        $data_cat = DB::table('category')->get();
        return view('backend.pages.questions.add', compact('data_cat'));
    }

    public function postAdd(Request $request){
        $addQuestion           = new Question;
        $addQuestion->question = $request->name_question;
        $addQuestion->op1      = $request->op1;
        $addQuestion->op2      = $request->op2;
        $addQuestion->op3      = $request->op3;
        $addQuestion->op4      = $request->op4;
        $addQuestion->op5      = $request->op5;
        $addQuestion->op6      = $request->op6;
        $addQuestion->anwser   = $request->anwser_true;
        $addQuestion->level    = $request->level;
        $addQuestion->cat_id   = $request->category;
        $addQuestion->author   = Auth::guard('web')->user()->id;
        $addQuestion->date_add = Carbon::today();
        $cat_slug              = DB::table('category')->where('id', $request->category)->first()->slug;
        $addQuestion->cat_slug = $cat_slug;
        $img                   = $request->img_question;
        //Nếu file ảnh tồn tại
        if ($img != null) {
            // Lấy tên ảnh
            $file_name  = $img->getClientOriginalName();
            // gán tên ảnh
            $image_name = str_random(15) . '.' . $file_name;
            
            // Kiểm trả neu ten anh ton tai
            if (file_exists($image_name)) {
                // thì gán tiếp tên vs các kí tự ramdom
                $image_name = str_random(15) . '.' . $file_name;
            }
            // Upload ảnh
            
            $upload_success = $img->move('public/upload/img_question/', $image_name);
            $addQuestion->img  = $image_name;
        }

        $addQuestion->save();
        Session::flash('success', 'Thêm thành công');
        return redirect(url('backend/question'));
    }

    public function getEdit($id){
        $data = DB::table('question')->where('id', $id)->first();
        $data_cat = DB::table('category')->get();
        return view('backend.pages.questions.edit', compact('data','data_cat'));
    }

    public function postEdit(Request $request, $id){
        $editQuestion           = Question::find($id);
        $editQuestion->question = $request->name_question;
        $editQuestion->op1      = $request->op1;
        $editQuestion->op2      = $request->op2;
        $editQuestion->op3      = $request->op3;
        $editQuestion->op4      = $request->op4;
        $editQuestion->op5      = $request->op5;
        $editQuestion->op6      = $request->op6;
        $editQuestion->anwser   = $request->anwser_true;
        $editQuestion->level    = $request->level;
        $editQuestion->cat_id   = $request->category;
        $cat_slug              = DB::table('category')->where('id', $request->category)->first()->slug;
        $editQuestion->cat_slug = $cat_slug;
        $img                   = $request->img_question;
        if ($img != null) {
            if (file_exists('public/upload/img_question/' . $editQuestion->img)) {
                // Nếu tồn tại thì tiến hành xóa
                unlink('public/upload/img_question/' . $editQuestion->img);
            }
            
            $file_name  = $img->getClientOriginalName();
            // gán tên ảnh
            $image_name = str_random(15) . '.' . $file_name;
            
            // Kiểm trả neu ten anh ton tai
            if (file_exists($image_name)) {
                // thì gán tiếp tên vs các kí tự ramdom
                $image_name = str_random(15) . '.' . $file_name;
            }
            // Upload ảnh
            
            $upload_success = $img->move('public/upload/img_question/', $image_name);
            $editQuestion->img  = $image_name;
        }
        

        $editQuestion->save();
        Session::flash('success', 'Sửa thành công');
        return redirect(url('backend/question'));
    }



    public function delete($id){
        $del = DB::table('question')->where('id', $id)->delete();
        Session::flash('success', 'Xóa thành công');
        return redirect(url('backend/question'));
    }

    public function deleteMul(Request $request){
        if(isset($request->check_id)){
            DB::table('question')->whereIn('id', $request->check_id)->delete();
            Session::flash('success', 'Xóa thành công');
        }
        return redirect(url('backend/question'));
        
    }
}
