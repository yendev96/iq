@extends('backend.master')
@section('title', 'Info user')
@section('content')
<section class="panel">

    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">

                <div class="container">
                  <div class="row">

                    <div class="col-md-10 col-md-offset-1" >


                      <div class="panel panel-info">
                        <div class="panel-heading heading-profile">
                          <h3 class="panel-title">Thông tin thành viên</h3>
                      </div>
                      <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12"> 
                              <table class="table table-user-information">
                                <tbody>
                                  <tr>
                                    <td>ID:</td>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>{{$data->username}}</td>
                                </tr>

                                <tr>
                                 <tr>
                                    <td>Gender</td>
                                    <td>
                                        @if($data->gender == 1)
                                        {{'Male'}}
                                        @elseif($data->gender == 0)
                                        {{'Female'}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Home Address</td>
                                    <td>{{$data->address}}</td>
                                </tr>
                                
                                <td>Phone Number</td>
                                <td>{{$data->phone_number}}</td>

                            </tr>

                        </tbody>
                    </table>

                    <a href="{{url('backend/users/edit', $data->id)}}" class="btn btn-primary">Edit profile</a>
                </div>
            </div>
        </div>
        

    </div>
</div>
</section>
@endsection
