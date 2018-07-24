@extends('backend.master')
@section('title', 'Add user')
@section('content')
<section class="panel">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>Add user</h3>
            </div>
           
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-bottom-50">
                    <!-- Vertical Form -->
                    <form action="{{url('backend/user/add')}}" method="post" enctype="multipart/form-data">
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
                            <label for="l30">Email</label>
                            <input type="text" class="form-control name" name="email" placeholder="Nhập email" id="l30">
                        </div>

                        <div class="form-group">
                            <label for="l30">Username</label>
                            <input type="text" class="form-control name" name="username" placeholder="Nhập username" id="l30">
                        </div>

                        <div class="form-group">
                            <label for="l30">Password</label>
                            <input type="text" class="form-control name" name="password" placeholder="Nhập password" id="l30">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Role</label>
                            <select name="role" class="form-control">
                                <option value="1">Administrator</option>
                                <option value="2">Editor</option>
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
