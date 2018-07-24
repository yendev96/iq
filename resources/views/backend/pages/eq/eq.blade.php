@extends('backend.master')
@section('title', 'EQ Manager')
@section('content')
<section class="panel">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>EQ Manager ({{count($data)}})</h3>
            </div>
            <div class="button-addnew pull-right">
                <a href="{{url('backend/eq/add')}}" class="btn btn-danger margin-inline"><i class="fa fa-plus"></i> Add</a>
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
                            <form action="{{url('backend/eq/delete')}}" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="col-md-12" style="overflow: auto;">
                                    <table class="table table-hover" id="example2" width="100%" role="grid" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="check-table"><input type="checkbox" id="checkall" name="check_id" value=""></th>
                                                <th>ID</th>
                                                <th>Result</th>
                                                <th>Create</th>
                                                <th style="text-align: right; padding-right: 35px;">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($data as $item)
                                            <tr class="odd">
                                                <td><input type="checkbox" name="check_id[]" value="{{$item->id}}"></td>
                                                <td class="sort1">{{$item->id}}</td>
                                                <td>{{$item->content}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td style="text-align: right;">
                                                    <a href="{{url('backend/eq/edit', $item->id)}}" title=""><i class="fa fa-pencil-square-o my-fa-edit"></i></a>
                                                    <a href="{{url('backend/eq/delete', $item->id)}}" title=""><i class="fa fa-trash my-fa-delete delete-user"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <div class="row bottom-page">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-danger margin-inline delete-eq"><i class="icmn-bin"></i> Delete</button>
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
    $('.delete-eq').click(function(){
        if(confirm('Bạn có chắc chắn muốn xóa không?')){
            return true;
        }else{
            return false;
        }
    })
</script>
@endsection
