@extends('backend.master')
@section('title', 'Add EQ')
@section('content')
<section class="panel">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>Add EQ Result</h3>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-bottom-50">
                    <!-- Vertical Form -->
                    <form action="{{url('backend/eq/add')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                        <div class="form-group">
                            <label for="l30">Content</label>
                            <textarea name="content" class="form-control content" rows="5">{{$data->content}}</textarea>
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
