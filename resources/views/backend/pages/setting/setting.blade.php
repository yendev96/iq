@extends('backend.master')
@section('title', 'Setting')
@section('content')
<section class="panel">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>Setting</h3>
            </div>

        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <!-- Vertical Form -->
                <form action="{{url('backend/setting/edit', $data->id)}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="l30">Site Title</label>
                        <input type="text" class="form-control site_title" id="cat_name" value="{{$data->site_title}}" name="site_title">
                    </div>
                    <div class="form-group">
                        <label for="l30">Site Description</label>
                        <input type="text" class="form-control site_description" id="site_description" value="{{$data->site_description}}" name="site_description">
                    </div>
                    <div class="form-group">
                        <label for="l30">Site URL</label>
                        <input type="text" class="form-control site_url" id="site_url" value="{{$data->site_url}}" name="site_url">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Language</label>
                        <select name="lang" class="form-control">
                            <option value="en-US" @if($data->lang == 'en-US') {{'selected'}} @endif>English</option>
                            <option value="vi" @if($data->lang == 'vi') {{'selected'}} @endif>Vietnamese</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Active Schema</label>
                        <select name="lang" class="form-control">
                            <option value="1" @if($data->lang == 1) {{'selected'}} @endif>On</option>
                            <option value="0" @if($data->lang == 0) {{'selected'}} @endif>Off</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="action-setting" class="btn btn-primary width-150">Submit</button>
                    </div>
                </form>
                <!-- End Vertical Form -->
            </div>
        </div>
    </div>
</section>
@endsection
