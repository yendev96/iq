@extends('backend.master')
@section('title', 'Add social')
@section('content')
<section class="panel">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>Add Social</h3>
            </div>

        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <!-- Vertical Form -->
                <form action="{{url('backend/social/edit', $data_social->id)}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="col-md-12 box-social">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-facebook-square"></i>
                            </span>
                            <input type="text" class="form-control" name="facebook" value="{{$data_social->facebook}}" placeholder="Facebook">
                        </div>
                    </div>
                    <div class="col-md-12 box-social">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-youtube-play"></i>
                            </span>
                            <input type="text" class="form-control" name="youtube" value="{{$data_social->youtube}}" placeholder="Youtube">
                        </div>
                    </div>
                    <div class="col-md-12 box-social">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-instagram"></i>
                            </span>
                            <input type="text" class="form-control" name="instagram" value="{{$data_social->instagram}}" placeholder="Instagram">
                        </div>
                    </div>
                    <div class="col-md-12 box-social">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-google-plus-official"></i>
                            </span>
                            <input type="text" class="form-control" name="google" value="{{$data_social->google}}" placeholder="Google +">
                        </div>
                    </div>
                    <div class="col-md-12 box-social">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-twitter"></i>
                            </span>
                            <input type="text" class="form-control" name="twitter" value="{{$data_social->twitter}}" placeholder="Twitter">
                        </div>
                    </div>
                    <div class="col-md-12 box-social">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-pinterest"></i>
                            </span>
                            <input type="text" class="form-control" name="pinterest" value="{{$data_social->pinterest}}" placeholder="Pinterest">
                        </div>
                    </div>
                    <div class="col-md-12 box-social">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-tumblr-square"></i>
                            </span>
                            <input type="text" class="form-control" name="tumblr" value="{{$data_social->tumblr}}" placeholder="Tumblr">
                        </div>
                    </div>
                    <div class="col-md-12 box-social">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-soundcloud"></i>
                            </span>
                            <input type="text" class="form-control" name="soundcloud" value="{{$data_social->soundcloud}}" placeholder="Soundcloud">
                        </div>
                    </div>
                    <div class="col-md-12 box-social">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-vk"></i>
                            </span>
                            <input type="text" class="form-control" name="vk" value="{{$data_social->vk}}" placeholder="Vk.com">
                        </div>
                    </div>
                    <div class="col-md-12 box-social">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-lastfm-square"></i>
                            </span>
                            <input type="text" class="form-control" name="lastfm" value="{{$data_social->lastfm}}" placeholder="Last.fm">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="action-social" class="btn btn-primary width-150">Submit</button>
                    </div>
                </form>
                <!-- End Vertical Form -->
            </div>
        </div>
    </div>
</section>
@endsection
