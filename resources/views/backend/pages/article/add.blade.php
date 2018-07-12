@extends('backend.master')
@section('title', 'Add Category')
@section('content')
<section class="panel">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>Add Category</h3>
            </div>
            
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <form action="{{url('backend/article/add')}}" method="post" enctype="multipart/form-data">
                <p class="p-error" style="color: red; font-size: 17px; text-align: center; display: none;">Không để trống</p>
                
                <div class="col-md-6">
                    <!-- Vertical Form -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="l30">Category name</label>
                        <input type="text" class="form-control title" id="title" name="title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="l30">Slug</label>
                        <input type="text" class="form-control slug" id="slug" name="slug">
                    </div>
                </div>
                <div class="col-md-12">
                    
                    <div class="form-group">
                        <label for="l30">Seo Title</label>
                        <input type="text" class="form-control seo_title" name="seo_title">
                    </div>
                    <div class="form-group">
                        <label for="l30">Seo Description</label>
                        <textarea class="form-control seo_descriptions" name="seo_descriptions"></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label for="l30">Seo Keywords</label>
                        <input type="text" class="form-control seo_keywords" name="seo_keywords">
                    </div> -->
                    
                    <div class="form-group">
                        <label for="l30">Schema Active</label>
                        <select name="schema" class="form-control schema">
                            <option value="0">Off</option>
                            <option value="1">On</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group" style="margin-top: 40px;">
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

    $('#title').keyup(function() {

        $(this).val($(this).val().replace(/\s+/g,' '));

        $('#slug').val($(this).val().toLowerCase());
        $('#slug').val($('#slug').val().replace(/\W/g, ' '));
        $('#slug').val($.trim($('#slug').val()));
        $('#slug').val($('#slug').val().replace(/\s+/g, '-'));
    });
    $('.action-article').click(function(){
        var name                 = $('.title').val();
        var slug                 = $('.slug').val();

        if(name == "" || slug == ""){
            $('.p-error').show();
            return false;
        }
    })
</script>

@endsection