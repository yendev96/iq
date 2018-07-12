<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;
use Carbon\Carbon;
use Session;
class CategoryController extends Controller
{
    public function index(){
        if(isset($_GET['show']) && $_GET['show'] != ''){
          $show = $_GET['show'];
      }else{
        $show = 10;
    }

    $data_cat = DB::table('category');

    if(request()->has('s')){
        $s = $_GET['s'];
        $data_cat = $data_cat->where('name_cat','like','%'.$s.'%');
        
    }

    if(request()->has('view')){
        $view = $_GET['view'];
        $data_cat = $data_cat->orderBy('view', $view);
    }

    else{
        $data_cat = $data_cat->orderBy('id', 'desc');
    }

    $data_cat = $data_cat->paginate($show)->appends(['view'=> request('view'), 'show'=>request('show'), 's'=>request('s')]);
    $total = DB::table('category')->get();
    return view('backend.pages.category.category', compact('data_cat','total'));
}

public function getAdd(){
    return view('backend.pages.category.add');
}

public function postAdd(Request $request){
    $addCat                       = new Category;
    $this->validate($request,
        [
            'slug'    => 'unique:category',
        ],

        [
            'slug.unique'      => 'Slug đã tồn tại',
        ]

    );
    $addCat->name_cat             = $request->cat_name;
    $addCat->content              = $request->content_post;
    $addCat->seo_title            = $request->seo_title;
    $addCat->seo_description      = $request->seo_description;
    $addCat->slug                 = $request->slug;
    $addCat->active_schema        = $request->schema;
    $addCat->created_at           = Carbon::today();
    $img                          = $request->img_cat;
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

        $upload_success = $img->move('public/upload/img_cat/', $image_name);
        $addCat->img    = $image_name;
    }

    $addCat->save();
    Session::flash('success', 'Thêm thành công');
    return redirect(url('backend/category'));
}

public function getEditCat($id){
    $data = DB::table('category')->where('id', $id)->first();
    return view('backend.pages.category.edit', compact('data'));
}

public function postEditCat(Request $request, $id){
    $editQuestion = Category::find($id);
    $old_slug = $editQuestion->slug;
    if($request->slug != $old_slug){
        $this->validate($request,
            [
                'slug'    => 'unique:category',
            ],

            [
                'slug.unique'      => 'Slug đã tồn tại',
            ]

        );
        $editQuestion->slug                 = $request->slug;
        
    }
    $editQuestion->name_cat             = $request->cat_name;
    $editQuestion->content              = $request->content_post;
    $editQuestion->seo_title            = $request->seo_title;
    $editQuestion->seo_description      = $request->seo_description;
    $editQuestion->active_schema        = $request->schema;
    $img                        = $request->img_cat;
    if ($img != null) {
        if (file_exists('public/upload/img_cat/' . $editQuestion->img)) {
                // Nếu tồn tại thì tiến hành xóa
            unlink('public/upload/img_cat/' . $editQuestion->img);
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

        $upload_success = $img->move('public/upload/img_cat/', $image_name);
        $editQuestion->img  = $image_name;
    }
    $editQuestion->save();
    Session::flash('success', 'Sửa thành công');
    return redirect(url('backend/category'));
}

public function deleteCat($id){
    DB::table('category')->where('id', $id)->delete();
    Session::flash('success', 'Xóa thành công');
    return redirect(url('backend/category'));
}

public function deleteMul(Request $request){
    if(isset($request->check_id)){
        DB::table('category')->whereIn('id', $request->check_id)->delete();
        Session::flash('success', 'Xóa thành công');
    }
    
    return redirect(url('backend/category'));

}

}
