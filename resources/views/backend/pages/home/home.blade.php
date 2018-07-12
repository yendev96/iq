@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
<div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                    <div class="step-block ">
                        <span class="step-digit">
                            <i class="counter-icon icmn-users"><!-- --></i>
                        </span>
                        <div class="step-desc">
                            <span class="step-title">Users</span>
                            <p>
                                Total: {{$data['user_count']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                    <div class="step-block">
                        <span class="step-digit">
                            <i class="icmn-question4"><!-- --></i>
                        </span>
                        <div class="step-desc">
                            <span class="step-title">Question</span>
                            <p>Total: {{$data['question_count']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                    <div class="step-block step-warning">
                        <span class="step-digit">
                            <i class="icmn-folder-upload2"><!-- --></i>
                        </span>
                        <div class="step-desc">
                            <span class="step-title">Category</span>
                            <p>
                                Total: {{$data['category']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12">
                    <div class="step-block step-primary">
                        <span class="step-digit">
                            <i class="icmn-file-text3"><!-- --></i>
                        </span>
                        <div class="step-desc">
                            <span class="step-title">Posts</span>
                            <p>
                                Total: {{$data['post']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('script')
<script>
    
</script>
@endsection