@extends('backend.master')
@section('title', 'Article Manager')
@section('content')
<section class="panel">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>Article Manager ({{count($data)}})</h3>
            </div>
            <!-- <div class="button-addnew pull-right">
                <a href="{{url('backend/article/add')}}" class="btn btn-danger margin-inline"><i class="fa fa-plus"></i> Add Article</a>
            </div> -->
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap4">
                    <div class="row">
                        <form class="myformarticle" action="{{url('backend/article')}}" method="get" accept-charset="utf-8">
                            <div class="col-md-9">
                                <div class="dataTables_length" id="example1_length">
                                    <label>
                                        <select name="show" class="form-control showpage">
                                            <option value="">Show</option>}
                                            <option value="3" <?php if(isset($_GET['show'])){ if($_GET['show'] == 10){ echo 'selected';}} ?>>10</option>
                                            <option value="25" <?php if(isset($_GET['show'])){ if($_GET['show'] == 25){ echo 'selected';}} ?>>25</option>
                                            <option value="50" <?php if(isset($_GET['show'])){ if($_GET['show'] == 50){ echo 'selected';}} ?>>50</option>
                                            <option value="100" <?php if(isset($_GET['show'])){ if($_GET['show'] == 100){ echo 'selected';}} ?>>100</option>
                                        </select>
                                    </label>
                                    <label>
                                        <select name="view" class="form-control view">
                                            <option value="">View</option>}
                                            <option value="desc" <?php if(isset($_GET['view'])){ if($_GET['view'] == 'desc'){ echo 'selected';}} ?>>Most view</option>
                                            <option value="asc" <?php if(isset($_GET['view'])){ if($_GET['view'] == 'asc'){ echo 'selected';}} ?>>Least view</option>
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
                        <form action="{{url('backend/article/delete')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="col-md-12" style="overflow: auto;">
                                <table class="table table-hover nowrap dataTable dtr-inline" id="example2" width="100%" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="check-table"><input type="checkbox" id="checkall" name="check_id" value=""></th>
                                            <th class="sort1">Name</th>
                                            <th>Seo Title</th>
                                            <th>View</th>
                                            <th>Create</th>
                                            <th style="text-align: center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                        <tr class="odd">
                                            <td><input type="checkbox" name="check_id[]" value="{{$item->id}}"></td>
                                            <td class="sort1">{{$item->title}}</td>
                                            <td><p>{{$item->seo_title}}</p></td>
                                            <td>{{$item->view}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td style="text-align: center">
                                                <a href="{{url('backend/article/edit', $item->id)}}" title=""><i class="fa fa-pencil-square-o my-fa-edit"></i></a>
                                                <a href="{{url('backend/article/delete', $item->id)}}" title=""><i class="fa fa-trash my-fa-delete delete-ar"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row bottom-page">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-danger margin-inline delete-ar"><i class="icmn-bin"></i> Delete</button>
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
</section>
@endsection
@section('script')
<script>
    $('.delete-ar').click(function(){
        if(confirm('Bạn có chắc chắn muốn xóa không?')){
            return true;
        }else{
            return false;
        }
    })

    $('.showpage').change(function(){
        $('.myformarticle').submit();
    })

    $('.view').change(function(){
        $('.myformarticle').submit();
    })
</script>
@endsection