@extends('backend.master')
@section('title', 'Question manager')
@section('content')
<section class="panel">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>Question Manager ({{$total_count}})</h3>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-bottom-50">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap4">
                        <div class="row">
                            <form action="{{url('/backend/question')}}" class="myforquestion" method="get" enctype="multipart/form-data">
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
                                            <select name="cat" class="form-control filter-category">
                                                <option value="">Category</option>}
                                                @foreach($data_cat as $item)
                                                <option value="{{$item->id}}" <?php if(request()->has('cat') && request('cat') == $item->id){ echo 'selected';} ?>>{{$item->name_cat}}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                        <label>
                                            <select name="anwser" class="form-control filter-anwser">
                                                <option value="">Anwser</option>}
                                                <option value="a" <?php if(isset($_GET['anwser'])){ if($_GET['anwser'] == 'a'){ echo 'selected';}} ?>>A</option>
                                                <option value="b" <?php if(isset($_GET['anwser'])){ if($_GET['anwser'] == 'b'){ echo 'selected';}} ?>>B</option>
                                                <option value="c" <?php if(isset($_GET['anwser'])){ if($_GET['anwser'] == 'c'){ echo 'selected';}} ?>>C</option>
                                                <option value="d" <?php if(isset($_GET['anwser'])){ if($_GET['anwser'] == 'd'){ echo 'selected';}} ?>>D</option>
                                                <option value="e" <?php if(isset($_GET['anwser'])){ if($_GET['anwser'] == 'e'){ echo 'selected';}} ?>>E</option>
                                                <option value="f" <?php if(isset($_GET['anwser'])){ if($_GET['anwser'] == 'f'){ echo 'selected';}} ?>>F</option>
                                            </select>
                                        </label>
                                        <label>
                                            <select name="lv" class="form-control filter-anwser">
                                                <option value="">Level</option>}
                                                <option value="1" <?php if(isset($_GET['lv'])){ if($_GET['lv'] == 1){ echo 'selected';}} ?>>Dễ</option>
                                                <option value="2" <?php if(isset($_GET['lv'])){ if($_GET['lv'] == 2){ echo 'selected';}} ?>>Vừa</option>
                                                <option value="3" <?php if(isset($_GET['lv'])){ if($_GET['lv'] == 3){ echo 'selected';}} ?>>Khó</option>
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
                            <form action="{{url('backend/question/delete')}}" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="col-md-12" style="overflow: auto;">
                                    <table class="table table-hover nowrap dataTable dtr-inline" id="example2" role="grid" aria-describedby="example1_info" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="check-table"><input type="checkbox" id="checkall" name="check_id" value=""></th>
                                                <th class="sort1">Question</th>
                                                <th>Image</th>
                                                <th>Op 1</th>
                                                <th>Op 2</th>
                                                <th>Op 3</th>
                                                <th>Op 4</th>
                                                <th>Op 5</th>
                                                <th>Op 6</th>
                                                <th>Category</th>
                                                <th style="text-align: right; padding-right: 35px;">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($data as $item)
                                            <tr class="odd">
                                                <td><input type="checkbox" name="check_id[]" value="{{$item->id}}"></td>
                                                <td class="sort1">{{$item->question}}</td>
                                                <td style="width: 100px;"><img src="{{asset('public/upload/img_question').'/'.$item->img}}" style="width:50%;"></td>
                                                <td <?php if($item->anwser == 'a'){ echo 'style="border-bottom:solid 3px #1aa603;"';} ?>>{{$item->op1}}</td>
                                                <td <?php if($item->anwser == 'b'){ echo 'style="border-bottom:solid 3px #1aa603;"';} ?>>{{$item->op2}}</td>
                                                <td <?php if($item->anwser == 'c'){ echo 'style="border-bottom:solid 3px #1aa603;"';} ?>>{{$item->op3}}</td>
                                                <td <?php if($item->anwser == 'd'){ echo 'style="border-bottom:solid 3px #1aa603;"';} ?>>{{$item->op4}}</td>
                                                <td <?php if($item->anwser == 'e'){ echo 'style="border-bottom:solid 3px #1aa603;"';} ?>>{{$item->op5}}</td>
                                                <td <?php if($item->anwser == 'f'){ echo 'style="border-bottom:solid 3px #1aa603;"';} ?>>{{$item->op6}}</td>
                                                <td>{{$item->name_cat}}</td>
                                                <td style="text-align: right;">
                                                    <a href="{{url('backend/question/edit', $item->id)}}" title=""><i class="fa fa-pencil-square-o my-fa-edit"></i></a>
                                                    <a href="{{url('backend/question/delete', $item->id)}}" title=""><i class="fa fa-trash my-fa-delete delete-question"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="row bottom-page">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-danger margin-inline delete-question"><i class="icmn-bin"></i> Delete</button>
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
    $('.delete-question').click(function(){
        if(confirm('Bạn có chắc chắn muốn xóa không?')){
            return true;
        }else{
            return false;
        }
    })

    $('.showpage').change(function(){
        $('.myforquestion').submit();
    })

    $('.filter-category').change(function(){
        $('.myforquestion').submit();
    })

    $('.filter-anwser').change(function(){
        $('.myforquestion').submit();
    })

</script>
@endsection