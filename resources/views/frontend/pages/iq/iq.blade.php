@extends('frontend.master')
@section('title'){{$data_cat->seo_title}}@endsection
@section('description'){{$data_cat->seo_description}}@endsection
@section('url'){{fullUrl()}}@endsection
@section('schema')
@if($data_cat->active_schema == 1)
<script type="application/ld+json">{
	"@context": "http://schema.org",
	"@type": "Professionalservice",
	"@id":"https://ringtonefreedownload.net/",
	"url": "{{fullUrl()}}",
	"logo": "https://ringtonefreedownload.net/logo.png",
	"image":"https://ringtonefreedownload.net/logo.png",
	"priceRange":"0$-28000$",
	"hasMap": "https://www.google.com/maps/place/Ng%C3%B5+41,+%C4%90%E1%BB%93ng+Cao,+Tr%C3%A1ng+Vi%E1%BB%87t,+M%C3%AA+Linh,+H%C3%A0+N%E1%BB%99i,+Vietnam/@21.1448028,105.7340582,19z/data=!4m18!1m12!4m11!1m3!2m2!1d105.7344331!2d21.1449144!1m5!1m1!2s21.157422836150516,+105.7276086928903!2m2!1d105.7276087!2d21.1574228!3e0!3m4!1s0x3134ff09d4d5a297:0x942930dc7eb7fde7!8m2!3d21.1429631!4d105.7347224",	
	"email": "tuevannguyen690.com",
	"founder": "Nguyen Van Yen",
	"address": {
	"@type": "PostalAddress",
	"addressLocality": "Mê Linh",
	"addressCountry": "VIỆT NAM",
	"addressRegion": "Hà Nội",
	"postalCode":"142152",
	"streetAddress": "Ngõ 41, Đồng Cao, Tráng Việt, Mê Linh, Hà Nội, Vietnam 142152"
},
"description": "{{$data_cat->seo_description}}",
"name": "IQ Test Online",
"telephone": "+841679190035",
"openingHoursSpecification": [
{
	"@type": "OpeningHoursSpecification",
	"dayOfWeek": [
	"Monday",
	"Tuesday",
	"Wednesday",
	"Thursday",
	"Friday"
	],
	"opens": "00:00",
	"closes": "23:59"
},
{
	"@type": "OpeningHoursSpecification",
	"dayOfWeek": [
	"Saturday"
	],
	"opens": "00:00",
	"closes": "23:59"
}
],
"geo": {
"@type": "GeoCoordinates",
"latitude": "21.1448028",
"longitude": "105.7340582"
}, 			
"potentialAction": {
"@type": "ReserveAction",
"target": {
"@type": "EntryPoint",
"urlTemplate": "https://ringtonefreedownload.net/",
"inLanguage": "en",
"actionPlatform": [
"http://schema.org/DesktopWebPlatform",
"http://schema.org/IOSPlatform",
"http://schema.org/AndroidPlatform"
]
},
"result": {
"@type": "Reservation",
"name": "About Best Ringtone Download"
}
},

"sameAs" : [ 
"{{$social->facebook}}",
"{{$social->youtube}}",
"{{$social->instagram}}",
"{{$social->google}}",
"{{$social->twitter}}",
"{{$social->pinterest}}",
"{{$social->tumblr}}",
"{{$social->soundcloud}}",
"{{$social->vk}}"],
"{{$social->lastfm}}"],
"{{$social->myspace}}"]
}
</script>
<script type="application/ld+json">{
	"@context": "http://schema.org",
	"@type": "Person",
	"name": "Nguyen Van yen",
	"jobTitle": "Ceo",
	"image" : "https://ringtonefreedownload.net/nguyenvanyen.jpg",
	"worksFor" : "Best Ringtones",
	"url": "https://www.facebook.com/yendev96",
	"sameAs":["https://www.instagram.com/yencotien96/",
	"https://github.com/yendev96",
	"https://www.flickr.com/photos/151589988@N08" ], 
	"AlumniOf" : [ "I'm a web developer in Hanoi",
	"RMIT university" ],
	"address": {
	"@type": "PostalAddress",
	"addressLocality": "Hanoi",
	"addressRegion": "vietnam"
}}
</script>
@endif

@endsection
@section('content')
<div class="row box-content">
	<div class="box-item">
		<h1>What is IQ?</h1>
		<p>IQ (Intelligence Quotient) is a number that is used to measure your intelligence. It was a concept given in the late 19th century by British scientist Francis Galton. 
		People with high IQ are able to manipulate, process and analyze information faster than normal people.</p>
		
	</div>
	<div class="box-item">
		<h2>What is the definition of an intelligent person?</h2>
		<p>
			The average IQ of a normal person is between 90 and 110. So, a person is called smart if the IQ is higher than 110.
		</p>
		<p>This is IQ range table IQ Percent Interpretation</p>
		<ul>
			<li>70-79 6.5% Cognitively impaired</li>
			<li>80-89 15.5% Below average intelligence</li>
			<li>90-120 67.3% Nomal Person (Average intelligence)</li>
			<li>121-130 6.4% Gifted</li>
			<li>130 2.2% Very gifted & Genius</li>
		</ul>
		
	</div>
	<div class="box-item">
		<h2>How is IQ calculated formula?</h2>
		<p>To measure IQ, psychometricians designed the test IQ to test the logic of each person. 
			For the first time, IQ was used in France in the early 20th century when people wanted to overcome their difficulties for kids at the beginning of school. Hans Aizenk modified it and became the most complete IQ test. The test became extremely popular in Europe in the 1950s. 
		People calculate their IQ scores everywhere</p>
	</div><div class="box-item">
		<h2>How much is your IQ?</h2>
		<button class="btn-play" title="">Play Test</button>
	</div>
</div>
<div class="box-play" data-time="0">

	<?php 
	$i = 0;
	?>
	@foreach($data as $item)
	<?php 
	$i++;
	?>
	<div class="item-play" id="id{{$i}}" data-true="{{$item->anwser}}">
		<div class="text-qus text-center">
			<p>{{$i.'/26'.' - '}}{{$item->question}}</p>
		</div>
		<div class="img-qus">
			<img style="" src="{{asset('public/upload/img_question')}}/{{$item->img}}" alt="">
			<div class="progress-counter"></div>
		</div>
		<div class="anwser">
			<div class="row">
				<div class="col-md-4 col-xs-6">
					<div class="anwser-item" data-id="{{$i}}" data-anwser="a">{{$item->op1}}</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="anwser-item" data-id="{{$i}}" data-anwser="b">{{$item->op2}}</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="anwser-item" data-id="{{$i}}" data-anwser="c">{{$item->op3}}</div>
				</div>
				<div class="col-md-4 col-xs-6">
					<div class="anwser-item" data-id="{{$i}}" data-anwser="d">{{$item->op4}}</div>
				</div>
				@if($item->op5 != '')
				<div class="col-md-4 col-xs-6">
					<div class="anwser-item" data-id="{{$i}}" data-anwser="e">{{$item->op5}}</div>
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
				<label for="l30">Country</label>
				<input type="text" class="form-control country" name="country">
			</div>
			<div class="form-group">
				<label for="l30">Year of Birth</label>
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
				<button type="button" name="action-play" class="btn-result">View IQ</button>
			</div>
		</form>
	</div>
	<div class="box-result text-center">
		<p class="p-result1">Congratulations <span class="name-play"></span> your IQ is:</p>
		<p class="p-iq"><span class="result-iq"></span>/200</p>
		
		<p class="p-result1">You answered correctly <span class="count-true-play"></span>/26 questions</p>
	</div>
	<div class="box-social">
		<div class="col-md-4 col-xs-12 item-social">
			<button type="button" name="action-play" class="btn-fb"><i class="fa fa-facebook-square"></i>Share</button>
		</div>
		<div class="col-md-4 col-xs-12 item-social">
			<a href="{{url('eq-test/for-free')}}" class="btn-social btn-high-member"><i class="fa fa-users"></i> Test EQ</a>
		</div>
		<div class="col-md-4 col-xs-12 item-social">
			<button type="button" name="action-play" class="btn-social btn-reload"><i class="fa fa-play"></i> Test Again</button>
		</div>
	</div>
</div>
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){




		$('.btn-play').click(function(){
			$('.box-content').slideUp();
			$('#id1').show();
			var seconds = 20;
			countDiv = document.getElementById('countdown'),
			secondPass,
			countDown = setInterval(function () {
				"use strict";
				secondPass();
			}, 1000);
			function secondPass() {
				"use strict";
				var minutes = Math.floor((seconds / 60)),
				remSeconds = seconds % 60;
				var my_time = $('.box-play').attr('data-time');
				if (seconds < 10) {
					remSeconds = "0" + remSeconds;
				}
				countDiv.innerHTML = minutes + ":" + remSeconds;
				if(my_time == 1){
					clearInterval(countDown);
					$('#countdown').text('Done');
				}
				if (seconds > 0) {
					seconds = seconds - 1;
				} else {
					clearInterval(countDown);
					$('.item-play').hide();
					$('.box-info').show();
					$('#countdown').text('Time up');
				}
			}
			$('.box-countdown').show();

		})


		var progress = 3.846153846153846;

		$('.anwser-item').click(function(){
			var a = $(this).attr('data-id');
			var get_anwser = $('#id' + a).attr('data-true');
			var get_select = $(this).attr('data-anwser');
			if(get_anwser == get_select){
				var count_true = $('.count_true').attr('value');
				$('.count_true').attr('value', Number(count_true)+1);
			}

			$('#id'+ a).hide();
			var b = Number(a)+ 1;
			progress += 3.846153846153846;
			if(b <= <?php echo $data_count;?>){
				$('#id'+ b).show();
				$(".progress-counter").attr('style', 'width:' + progress + '%');
			}else{
				$('.box-play').attr('data-time', 1);
				$('.box-info').show();
			}
		})

		$('.btn-result').click(function(){
			var host       = window.location.protocol + "//" + window.location.host;
			var name       = $('.name').val();
			var age        = $('.age').val();
			var gender     = $('.gender').val();
			var country    = $('.country').val();
			var email      = $('.email').val();
			var count_true = $('.count_true').val();

			if(name == '' ||age == '' || gender == '' || email == ''){
				$('.error-info p').show();
			}else{
				$(this).html('Loading...');

				$.post(host + '/iq/iq-test/check-iq',
				{
					"_token": "{{ csrf_token() }}",
					name: name,
					age: age,
					country: country,
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
						$('.box-countdown').hide();
					}, 3000);

				});
			}

		})

		$('.btn-reload').click(function(){
			location.reload();
		})


	})

</script>
@endsection