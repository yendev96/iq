@extends('backend.master')
@section('title', 'User Manager')
@section('content')
<section class="panel">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>User Manager ({{$total_count}})</h3>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-bottom-50">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap4">
                        <div class="row">
                            <form action="{{url('backend/user')}}" class="myformuser" method="get" accept-charset="utf-8">
                                <div class="col-md-9">
                                    <div class="dataTables_length" id="example1_length">
                                        <label>
                                            <select name="show" class="form-control showpage">
                                                <option value="">Show</option>}
                                                <option value="10" <?php if(isset($_GET['show'])){ if($_GET['show'] == 10){ echo 'selected';}} ?>>10</option>
                                                <option value="25" <?php if(isset($_GET['show'])){ if($_GET['show'] == 25){ echo 'selected';}} ?>>25</option>
                                                <option value="50" <?php if(isset($_GET['show'])){ if($_GET['show'] == 50){ echo 'selected';}} ?>>50</option>
                                                <option value="100" <?php if(isset($_GET['show'])){ if($_GET['show'] == 100){ echo 'selected';}} ?>>100</option>
                                            </select>
                                        </label>
                                        <label>
                                            <select name="rl" class="form-control filter-role" style="padding-right: 20px;">
                                                <option value="">Role</option>}
                                                <option value="1" <?php if(isset($_GET['rl'])){ if($_GET['rl'] == 1){ echo 'selected';}} ?>>Administrator</option>
                                                <option value="2" <?php if(isset($_GET['rl'])){ if($_GET['rl'] == 2){ echo 'selected';}} ?>>Editor</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div id="example1_filter" class="dataTables_filter">
                                        <input type="text" name="s" value="<?php if(isset($_GET['s'])){ echo $_GET['s'];} ?>" class="form-control input-sm">
                                        <button class="btn btn-success btn-search" type="submit"><i class="icmn-search"></i></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="row">
                            <form action="{{url('backend/user/delete')}}" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="col-md-12" style="overflow: auto;">
                                    <table class="table table-hover" id="example2" width="100%" role="grid" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="check-table"><input type="checkbox" id="checkall" name="check_id" value=""></th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                                <th>Create at</th>
                                                <th style="text-align: right; padding-right: 35px;">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($data as $item)
                                            <tr class="odd">
                                                <td><input type="checkbox" name="check_id[]" value="{{$item->id}}"></td>
                                                <td class="sort1">{{$item->email}}</td>
                                                <td>{{$item->username}}</td>
                                                <td>
                                                    @if($item->role == 1) 
                                                    {{'Administrator'}}
                                                    @elseif($item->role == 2)
                                                    {{'Editor'}}
                                                    @endif
                                                </td>
                                                <td>{{$item->created_at}}</td>
                                                <td style="text-align: right;">
                                                    <a href="{{url('backend/user/edit', $item->id)}}" title=""><i class="fa fa-pencil-square-o my-fa-edit"></i></a>
                                                    <a href="{{url('backend/user/delete', $item->id)}}" title=""><i class="fa fa-trash my-fa-delete delete-user"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <div class="row bottom-page">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-danger margin-inline delete-user"><i class="icmn-bin"></i> Delete</button>
                                        </div>
                                        <div class="col-md-6">{{$data->links()}}</div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script type="text/javascript">
    $('.delete-user').click(function(){
        if(confirm('Bạn có chắc chắn muốn xóa không?')){
            return true;
        }else{
            return false;
        }
    })

    $('.showpage').change(function(){
        $('.myformuser').submit();
    })

    $('.filter-role').change(function(){
        $('.myformuser').submit();
    })
</script>
@endsection
