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
            <form action="{{url('backend/category/add')}}" method="post" enctype="multipart/form-data">
                <p class="p-error" style="color: red; font-size: 17px; text-align: center; display: none;">Không để trống</p>
                
                <div class="col-md-6">
                    <!-- Vertical Form -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="l30">Category name</label>
                        <input type="text" class="form-control name" id="cat_name" name="cat_name">
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
                        <textarea class="form-control seo_description" name="seo_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="l30">Seo Keywords</label>
                        <input type="text" class="form-control seo_keywords" name="seo_keywords">
                    </div>
                    <div class="form-group">
                        <label for="l30">Content</label>
                        <textarea class="form-control content_post" id="editor1" rows="19" name="content_post"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="l30">Image</label>
                        <input type="file" class="form-control img_cat upload_img" name="img_cat">
                        <div class="show-img">
                            <img style="width: 100px" src="" class="" alt="">
                        </div>
                    </div>
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

    $('#cat_name').keyup(function() {

        $(this).val($(this).val().replace(/\s+/g,' '));

        $('#slug').val($(this).val().toLowerCase());
        $('#slug').val($('#slug').val().replace(/\W/g, ' '));
        $('#slug').val($.trim($('#slug').val()));
        $('#slug').val($('#slug').val().replace(/\s+/g, '-'));
    });
    $('.action-question').click(function(){
        var name                 = $('.name').val();
        var heading              = $('.heading').val();
        var content_heading      = $('.content_heading').val();
        var seo_title            = $('.seo_title').val();
        var seo_description      = $('.seo_description').val();
        var slug                 = $('.slug').val();

        if(name == "" || heading == "" || content_heading == "" || seo_title == "" || seo_description == "" || slug == ""){
            $('.p-error').show();
            return false;
        }
    })
</script>
<script src="{{ asset('/public/backend/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/public/backend/ckfinder/ckfinder.js') }}"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{asset('public/backend')}}/ckfinder/ckfinder.html',
        filebrowserUploadUrl: '{{asset('public/backend')}}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserWindowWidth: '1300',
        filebrowserWindowHeight: '900'
    } );
</script>
@endsection