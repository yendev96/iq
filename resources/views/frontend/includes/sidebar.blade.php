<div class="list-group">
	<a href="#" class="my-list-group-title">
		Categoies
	</a>
	<a href="{{url('iq-test/for-kid')}}" class="list-group-item list-group-item-action">Test IQ for kid</a>
	<a href="{{url('iq-test/for-adults')}}" class="list-group-item list-group-item-action">Test IQ for Adults</a>
	<a href="{{url('eq-test/for-free')}}" class="list-group-item list-group-item-action">Test EQ</a>
	<a href="{{url('member/high-iq')}}" class="list-group-item list-group-item-action">High IQ Member</a>
</div>
<div class="list-group">

	<a href="#" class="my-list-group-title">
		Articles
	</a>
	@foreach($post_aside as $item)
	<a href="{{url('/', $item->slug)}}" class="list-group-item list-group-item-action">{{$item->title}}
	</a>
	
	@endforeach
</div>