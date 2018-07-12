@extends('backend.master')
@section('title', 'Add question')
@section('content')
<section class="panel">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>Add question</h3>
            </div>
            
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <form action="{{url('backend/question/add')}}" method="post" enctype="multipart/form-data">
                <p class="p-error" style="color: red; font-size: 17px; text-align: center; display: none;">Không để trống</p>
                
                <div class="col-md-12">
                    <!-- Vertical Form -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="l30">Name question</label>
                        <input type="text" class="form-control name_question" name="name_question">
                    </div>
                    <div class="form-group">
                        <label for="l30">Image</label>
                        <input type="file" class="form-control img_question upload_img" name="img_question">
                        <div class="show-img">
                            <img src="" class="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label for="l30">Option 1</label>
                        <input type="text" class="form-control op1" name="op1">
                    </div>

                    <div class="form-group">
                        <label for="l30">Option 2</label>
                        <input type="text" class="form-control op2" name="op2">
                    </div>
                     <div class="form-group">
                        <label for="l30">Option 3</label>
                        <input type="text" class="form-control op3" name="op3">
                    </div>
                </div>
                <div class="col-md-6">
                   
                    <div class="form-group">
                        <label for="l30">Option 4</label>
                        <input type="text" class="form-control op4" name="op4">
                    </div>
                    <div class="form-group">
                        <label for="l30">Option 5</label>
                        <input type="text" class="form-control op5" name="op5">
                    </div>
                    <div class="form-group">
                        <label for="l30">Option 6</label>
                        <input type="text" class="form-control op6" name="op6">
                    </div>
                </div>
                <div class="col-md-6">
                    
                    
                    <div class="form-group">
                        <label for="l30">Anwser true</label>
                        <select name="anwser_true" class="form-control anwser_true">
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="l30">Level</label>
                        <select name="level" class="form-control level">
                            <option value="1">Dễ</option>
                            <option value="2">Bình thường</option>
                            <option value="3">Khó</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="l30">Category</label>
                        <select name="category" class="form-control category">
                            @foreach($data_cat as $item)
                            <option value="{{$item->id}}">{{$item->name_cat}}</option>
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
    // $('.action-question').click(function(){
    //     var name_question = $('.name_question').val();
    //     var img_question  = $('.img_question').val();
    //     var op1           = $('.op1').val();
    //     var op2           = $('.op2').val();
    //     var op3           = $('.op3').val();
    //     var op4           = $('.op4').val();
    //     var anwser_true   = $('.anwser_true').val();
    //     var level         = $('.level').val();
    //     var category      = $('.category').val();

    //     if(name_question == "" || img_question == "" || op1 == "" || op2 == "" || op3 == "" || op4 == "" || anwser_true == "" || level == "" || category == ""){
    //         $('.p-error').show();
    //         return false;
    //     }
    // })
</script>
@endsection