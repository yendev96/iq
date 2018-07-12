@extends('backend.master')
@section('title', 'Edit Post')
@section('content')
<section class="panel">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>Edit Post</h3>
            </div>
            
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <form action="{{url('backend/post/edit',$data->id)}}" method="post" enctype="multipart/form-data">
                <p class="p-error" style="color: red; font-size: 17px; text-align: center; display: none;">Không để trống</p>
                
                <div class="col-md-6">
                    <!-- Vertical Form -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="l30">Title</label>
                        <input type="text" class="form-control title_post" value="{{$data->title}}" id="title" name="title_post">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="l30">Url</label>
                        <input type="text" class="form-control url" value="{{$data->slug}}" id="url" name="url">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="l30">Seo Title</label>
                        <input type="text" class="form-control seo_title" value="{{$data->seo_title}}" name="seo_title">
                    </div>
                    <div class="form-group">
                        <label for="l30">Seo Description</label>
                        <textarea class="form-control seo_description" name="seo_description">{{$data->seo_description}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="l38">Content</label>
                        <textarea class="form-control content_post" id="editor1" rows="19" name="content_post">{{$data->content}}</textarea>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="form-group">
                        <label for="l30">Category</label>
                        <select name="article" class="form-control article">
                            <option value="">Select</option>}
                            @foreach($article as $item)
                            <option value="{{$item->id}}" <?php if($item->id == $data->article_id){ echo 'selected';} ?>>{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="l30">Schema Active</label>
                        <select name="active_schema" class="form-control active_schema">
                            <option value="0" @if($data->active_schema == 0){{'selected'}} @endif>Off</option>
                            <option value="1" @if($data->active_schema == 1){{'selected'}} @endif>On</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="l30">Public</label>
                        <select name="public" class="form-control public">
                            <option value="0" @if($data->public == 0){{'selected'}} @endif>Off</option>
                            <option value="1" @if($data->public == 1){{'selected'}} @endif>On</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
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

        $('#url').val($(this).val().toLowerCase());
        $('#url').val($('#url').val().replace(/\W/g, ' '));
        $('#url').val($.trim($('#url').val()));
        $('#url').val($('#url').val().replace(/\s+/g, '-'));
    });

    $('.action-question').click(function(){
        var title              = $('.title_post').val();

        if(title == ""){
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