@extends('frontend.master')
@section('title','High IQ Members')
@section('description', 'High IQ Members')
@section('url'){{fullUrl()}}@endsection
@section('content')
<div class="title-high-member text-center">
	<h1><i class="fa fa-star"></i> High IQ Member</h1>
</div>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Country</th>
			<th class="tr-iq">IQ</th>
			<th class="tr-iq">EQ</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $item)
		<tr>
			<td>{{$item->name}}</td>
			<td>{{$item->age}}</td>
			<td>{{$item->gender}}</td>
			<td>{{$item->country}}</td>
			<td class="td-iq">{{$item->iq}}</td>
			<td class="td-iq">{{$item->eq}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<div class="row pull-right">
	<div class="col-sm-12">
		{{$data->links()}}
	</div>
</div>
@endsection