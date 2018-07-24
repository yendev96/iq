@extends('frontend.master')
@section('title', $data->seo_title)
@section('description', $data->seo_description)
@section('url'){{fullUrl()}}@endsection
@section('content')
<div class="title-post">
	<h1>{{$data->title}}</h1>
	<div class="info-post">
		<span>Yen Nguyen</span> |
		<span>2018-07-19</span> |
		<span>Test IQ</span>
	</div>
</div>
<div class="content-post">
	{!!$data->content!!}
</div>
@endsection