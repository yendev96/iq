@extends('frontend.master')
@section('title'){{$data_cat->seo_title}}@endsection
@section('description'){{$data_cat->seo_description}}@endsection
@section('url'){{fullUrl()}}@endsection
@section('content')
<div class="box-content">
	<div class="box-item">
		<h1>Free psychological tests</h1>
		<p>Find out how smart you are, what you like to do, and what makes you happy with our free IQ tests, 
			career tests, and personality tests. All tests at 123test.com are designed to help you find serious 
		answers to your questions about IQ, personality, or career assessment.</p>
		<p>Tests are free, valid, and accurate. Although these tests are always fun to take, 
			they are much more than just for fun. We focus on giving you scientifically valid results 
		and reliable psychometrics that measure your personal preferences, mental traits, abilities, and processes.</p>
	</div>
	<div class="box-item">
		<h2>Personality test</h2>
		<p>
			Take our free personality test and find out more about who you are and 
			your strengths. This is valuable information for choosing a career and how to develop 
			yourself for personal growth. Five key personality dimensions are explored in 
			depth in a complete textual and graphical report.
		</p>
		<p>
			Choose a career that matches your preferences and you will 
			increase your chances of being successful! Take the career test now to learn more.
		</p>
		<button class="btn-play" title="">Play Test</button>
	</div>
</div>
<div class="box-play">

	<?php 
	$i = 0;
	?>
	@foreach($data as $item)
	<?php 
	$i++;
	?>
	<div class="item-play" id="id{{$i}}">
		<div class="text-qus text-center">
			<p>{{$i.'/26'.' - '}}{{$item->question}}</p>
		</div>
		<div class="img-qus">
			<img style="" src="{{asset('public/upload/img_question')}}/{{$item->img}}" alt="">
		</div>
		<div class="anwser">
			<div class="row">
				<div class="col-md-4 col-xs-6">
					<div class="anwser-item" data-id="{{$i}}" data-anwser="a" data-true="{{$item->anwser}}">{{$item->op1}}</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="anwser-item" data-id="{{$i}}" data-anwser="b" data-true="{{$item->anwser}}">{{$item->op2}}</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="anwser-item" data-id="{{$i}}" data-anwser="c" data-true="{{$item->anwser}}">{{$item->op3}}</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="anwser-item" data-id="{{$i}}" data-anwser="d" data-true="{{$item->anwser}}">{{$item->op4}}</div>
				</div>
				@if($item->op5 != '')
				<div class="col-md-4 col-xs-6">
					<div class="anwser-item" data-id="{{$i}}" data-anwser="e" data-true="{{$item->anwser}}">{{$item->op5}}</div>
				</div>
				@endif
				@if($item->op6 != '')
				<div class="col-md-4 col-xs-6">
					<div class="anwser-item" data-id="{{$i}}" data-anwser="f" data-true="{{$item->anwser}}">{{$item->op6}}</div>
				</div>
				@endif
			</div>
		</div>
	</div>
	@endforeach
	<div class="box-info">
		<form action="{{url('check-iq')}}" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" class="count_true" name="count_true" value="0">
			<div class="row error-info text-center">
				<p>Do not leave empty</p>
			</div>
			<div class="form-group">
				<label for="l30">Full Name</label>
				<input type="text" class="form-control name" name="name">
			</div>
			<div class="form-group">
				<label for="l30">Email</label>
				<input type="email" class="form-control email" name="email">
			</div>
			<div class="form-group">
				<label for="l30">Age</label>
				<input type="text" class="form-control age" name="age">
			</div>
			<div class="form-group">
				<label class="form-label">Gender</label>
				<select name="gender" class="form-control gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</div>

			<div class="form-group">
				<button type="button" name="action-play" class="btn-result">View</button>
			</div>
		</form>
	</div>
	<div class="box-result">
		<p class="p-result1">Congratulations <span class="name-play"></span> your IQ is:</p>
		<p class="p-iq"><span class="result-iq"></span>/200</p>
		
		<p class="p-result1">You answered correctly <span class="count-true-play"></span>/26 questions</p>
	</div>
	<div class="box-social">
		<button type="button" name="action-play" class="btn-reload">Test Again</button>
		<button type="button" name="action-play" class="btn-fb"><i class="fa fa-facebook-square"></i>Share</button>
	</div>
</div>
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){

			// var seconds = 20;
			// countDiv = document.getElementById('countdown'),
			// secondPass,
			// countDown = setInterval(function () {
			// 	"use strict";
			// 	secondPass();
			// }, 1000);
			// function secondPass() {
			// 	"use strict";
			// 	var minutes = Math.floor((seconds / 60)),
			// 	remSeconds = seconds % 60;
			// 	if (seconds < 10) {
			// 		remSeconds = "0" + remSeconds;
			// 	}
			// 	countDiv.innerHTML = minutes + ":" + remSeconds;
			// 	if (seconds > 0) {
			// 		seconds = seconds - 1;
			// 	} else {
			// 		clearInterval(countDown);
			// 		$('.item-play').hide();
			// 		$('.box-info').show();
			// 		$('#countdown').text('Time up');
			// 	}
			// }


			$('.btn-play').click(function(){
				$('.box-content').slideUp();
				$('#id1').show();
				//$('.box-countdown').show();

			})



			$('.anwser-item').click(function(){
				var a = $(this).attr('data-id');
				var get_anwser = $(this).attr('data-true');
				var get_select = $(this).attr('data-anwser');
				if(get_anwser == get_select){
					var count_true = $('.count_true').attr('value');
					$('.count_true').attr('value', Number(count_true)+1);
				}

				$('#id'+ a).hide();
				var b = Number(a)+ 1;
				if(b <= <?php echo $data_count;?>){
					$('#id'+ b).show();
				}else{
				//clearInterval(countDown);
				$('.box-info').show();
			}
		})

			$('.btn-result').click(function(){
				var host       = window.location.protocol + "//" + window.location.host;
				var name       = $('.name').val();
				var age        = $('.age').val();
				var gender     = $('.gender').val();
				var email     = $('.email').val();
				var count_true = $('.count_true').val();
				if(name == '' ||age == '' || gender == '' || email == ''){
					$('.error-info p').show();
				}else{
					$(this).html('Loading...');

					$.post(host + '/iq/check-iq',
					{
						"_token": "{{ csrf_token() }}",
						name: name,
						age: age,
						gender: gender,
						email: email,
						count_true: count_true
					},
					function(data){

						setTimeout(function(){
							$('.box-info').hide();
							$('.name-play').text(name);
							$('.result-iq').text(data);
							$('.count-true-play').text(count_true);
							$('.box-result').show();
							$('.box-social').show();
						}, 3000);

					});
				}

			})

			$('.btn-reload').click(function(){
				$('.btn-play').click();
				$('.box-result').hide();
				$('.box-social').hide();
				$('.count_true').attr('value', 0);
			})


		})

	</script>
	@endsection