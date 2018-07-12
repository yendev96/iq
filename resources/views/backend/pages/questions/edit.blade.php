@extends('backend.master')
@section('title', 'Edit question')
@section('content')
<section class="panel">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>Edit Question</h3>
            </div>
            
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <form action="{{url('backend/question/edit', $data->id)}}" method="post" enctype="multipart/form-data">
                <p class="p-error" style="color: red; font-size: 17px; text-align: center; display: none;">Không để trống</p>
                
                <div class="col-md-6">
                    <!-- Vertical Form -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="l30">Name Question</label>
                        <input type="text" class="form-control name_question" value="{{$data->question}}" name="name_question">
                    </div>
                    <div class="form-group">
                        <label for="l30">Image</label>
                        <input type="file" class="form-control img_question upload_img" name="img_question">
                        <div class="show-img">
                            <img src="{{asset('public/upload/img_question')}}/{{$data->img}}" class="" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="l30">Option 1</label>
                        <input type="text" class="form-control op1" value="{{$data->op1}}" name="op1">
                    </div>

                    <div class="form-group">
                        <label for="l30">Option 2</label>
                        <input type="text" class="form-control op2" value="{{$data->op2}}" name="op2">
                    </div>
                    <div class="form-group">
                        <label for="l30">Option 3</label>
                        <input type="text" class="form-control op3" value="{{$data->op3}}" name="op3">
                    </div>
                    <div class="form-group">
                        <label for="l30">Option 4</label>
                        <input type="text" class="form-control op4" value="{{$data->op4}}" name="op4">
                    </div>
                    <div class="form-group">
                        <label for="l30">Option 5</label>
                        <input type="text" class="form-control op5" value="{{$data->op5}}" name="op5">
                    </div>
                    <div class="form-group">
                        <label for="l30">Option 6</label>
                        <input type="text" class="form-control op6" value="{{$data->op6}}" name="op6">
                    </div>
                    
                    <div class="form-group">
                        <label for="l30">Anwser true</label>
                        <select name="anwser_true" class="form-control anwser_true">
                            <option value="a" @if($data->anwser == 'a') {{'selected'}} @endif>A</option>
                            <option value="b" @if($data->anwser == 'b') {{'selected'}} @endif>B</option>
                            <option value="c" @if($data->anwser == 'c') {{'selected'}} @endif>C</option>
                            <option value="d" @if($data->anwser == 'd') {{'selected'}} @endif>D</option>
                            <option value="e" @if($data->anwser == 'e') {{'selected'}} @endif>E</option>
                            <option value="f" @if($data->anwser == 'f') {{'selected'}} @endif>F</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="l30">Level</label>
                        <select name="level" class="form-control level">
                            <option value="1" @if($data->level == 1) {{'selected'}} @endif>Dễ</option>
                            <option value="2" @if($data->level == 2) {{'selected'}} @endif>Bình thường</option>
                            <option value="3" @if($data->level == 3) {{'selected'}} @endif>Khó</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="l30">Category</label>
                        <select name="category" class="form-control category">
                            @foreach($data_cat as $item)
                            <option value="{{$item->id}}" @if($data->cat_id == $item->id) {{'selected'}} @endif>{{$item->name_cat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" style="margin-top: 44px;">
                        <button type="submit" name="action-question" class="btn btn-primary width-150 action-question">Submit</button>
                    </div>
                    
                </div>

            </form>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $('.action-question').click(function(){
        var name_question = $('.name_question').val();
        var op1           = $('.op1').val();
        var op2           = $('.op2').val();
        var op3           = $('.op3').val();
        var op4           = $('.op4').val();
        var anwser_true   = $('.anwser_true').val();
        var level         = $('.level').val();
        var category      = $('.category').val();

        if(name_question == "" || op1 == "" || op2 == "" || op3 == "" || op4 == "" || anwser_true == "" || level == "" || category == ""){
            $('.p-error').show();
            return false;
        }
    })
</script>
@endsection