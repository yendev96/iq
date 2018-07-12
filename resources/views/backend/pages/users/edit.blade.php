@extends('backend.master')
@section('title', 'Edit user')
@section('content')
<section class="panel">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>Edit user</h3>
            </div>
            
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-bottom-50">
                    <!-- Vertical Form -->
                    <form action="{{url('backend/user/edit', $data->id)}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                            @if(count($errors) > 0)
                            <div class="thongbaoloi text-center">
                                @foreach($errors->all() as $err)
                                <div class="alert alert-danger">
                                    {{$err}}<br>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control name" name="email" value="{{$data->email}}" disabled="disabled">
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control username" name="username" value="{{$data->username}}">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control password" name="password">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control address" value="{{$data->address}}" name="address">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control phone_number" value="{{$data->phone_number}}" name="phone_number">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Role</label>
                            <select name="role" class="form-control">
                                <option value="1" @if($data->role == 1) {{'selected'}} @endif>Administrator</option>
                                <option value="2" @if($data->role == 2) {{'selected'}} @endif>Editor</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" name="action-question" class="btn btn-primary width-150">Submit</button>
                        </div>
                    </form>
                    <!-- End Vertical Form -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
