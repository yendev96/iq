@extends('frontend.master')
@section('title', 'Test eq')
@section('description', 'Test eq')
@section('url'){{fullUrl()}}@endsection
@section('schema')
<script type="application/ld+json">{
	"@context": "http://schema.org",
	"@type": "Professionalservice",
	"@id":"https://ringtonefreedownload.net/",
	"url": "https://ringtonefreedownload.net/",
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
"description": "Free download ringtone for your mobile, Best ringtones mp3 for Android, iPhone",
"name": "Best Ringtones",
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

@endsection
@section('content')
<div class="box-content">
	<div class="box-item">
		<h1>What is Emotional intelligence?</h1>
		<p>Emotional intelligence (EQ) is a number that is used to measure your emotional, also known as Emotional quotient (EQ) and Emotional Intelligence Quotient (EIQ)
			People with high EQ are able to recognize, evaluate, control and regulate the emotions of themselves and those of others, so they can become a good leaders.
		Similar to IQ, EQ is also one of the important indicators to help you become successful.</p>
		<p>At the end of the twentieth century, in many Western countries, people were more interested in EQ and educated it to the younger generation.
			EQ is also hot in USA when Daniel Goleman published a first book about emotional intelligence in 1995. He posits that emotional intelligence is as important as IQ for success.
			Goleman presented the problem very well and convincing argument.
		Nowadays, Psychologists appreciate the role of emotions and their impact on human life. The EQ is measured through the EQ test.</p>
	</div>
	<div class="box-item">
		
		<h2>Structure of Emotional intelligence tests</h2>
		<p>To determine EQ more accurately. These are the 5 most popular models: the Ability model, the Trait model, the Mixed model, the Bar-On model and the Genos model.
			The Ability Model and the Trait Model are the most popular models in the world.
		</p>
		<p>
			The Ability Model recognizes that EI includes four distinct types of ability: Emotional perception, use of emotion, understanding emotions and managing emotions
			The Trait Model was first developed by psychologist Konstantin Vasily Petrides, Include questions about emotional self-perception.
		</p>

	</div>
	<div class="box-rule">
		<ul>
			<li>- A test consists of 10 questions</li>
			<li>- Time: 25 minutes</li>
			<li>- Model: The Ability Model</li>
			<li>Source: Emotional Intelligence by Daniel Goleman in 1995 </li>
		</ul>
	</div>
	<div>
		<h2>How much is your EQ?</h2>
		<button class="btn-play" title="">Play Test</button>
	</div>
	
</div>
<div class="box-play" data-time="0">

	<div class="item-play" id="id1" data-mot="2" data-hai="3" data-ba="1" data-bon="4">
		<div class="text-qus text-center">
			<p>1/10 : You're on an airplane which suddenly hits extremely bad turbulence and begins rocking from side to side. What do you do?</p>
		</div>
		<div class="anwser anwser-eq">
			<div class="row">
				<div class="col-xs-12">
					<div class="anwser-item" data-id="1" data-anwser="1">A: Continue to read your book or magazine, or watch the movie, paying little attention to the turbulence.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="1" data-anwser="2">B: Become wary of an emergency, carefully monitoring the flight attendants and reading the emergency instructions card.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="1" data-anwser="3">C: A little of both above.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="1" data-anwser="4">D: I’m not sure; I’ve never noticed.</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="item-play" id="id2" data-mot="2" data-hai="4" data-ba="3" data-bon="1">
		<div class="text-qus text-center">
			<p>2/10 : You've taken a group of 4-year-olds to the park, and one of them starts crying because the others won't play with her. What do you do?</p>
		</div>
		<div class="anwser anwser-eq">
			<div class="row">
				<div class="col-xs-12">
					<div class="anwser-item" data-id="2" data-anwser="1">A: Stay out of it; let the kids deal with it on their own.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="2" data-anwser="2">B: Talk to her and help her to figure out ways in which to get the other kids to play with her.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="2" data-anwser="3">C: Tell her in a kind voice not to cry.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="2" data-anwser="4">D: Try to distract the crying girl by showing her some other things she could play with.</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="item-play" id="id3" data-mot="2" data-hai="3" data-ba="1" data-bon="4">
		<div class="text-qus text-center">
			<p>3/10 : Assume you had hoped to get an A in one of your courses, but you have just found out you got a C– on the midterm. What do you do?</p>
		</div>
		<div class="anwser anwser-eq">
			<div class="row">
				<div class="col-xs-12">
					<div class="anwser-item" data-id="3" data-anwser="1">A: Sketch out a specific plan for ways to improve your grade and resolve to follow through on your plans.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="3" data-anwser="2">B: Resolve to do better in the future.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="3" data-anwser="3">C: Tell yourself it really doesn't matter much how you do in that particular course, and concentrate instead on other classes where your grades are higher.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="3" data-anwser="4">D: Go to the professor and try to talk her into giving you a better grade.</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="item-play" id="id4" data-mot="2" data-hai="3" data-ba="1" data-bon="4">
		<div class="text-qus text-center">
			<p>4/10 : Imagine you are an insurance salesman calling prospective clients. Fifteen people in a row have hung up on you, and you are getting discouraged. What do you do?</p>
		</div>
		<div class="anwser anwser-eq">
			<div class="row">
				<div class="col-xs-12">
					<div class="anwser-item" data-id="4" data-anwser="1">A: Call it a day and hope you have better luck tomorrow.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="4" data-anwser="2">B: Reassess what you are doing that may be undermining your ability to make a sale.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="4" data-anwser="3">C: Try something new on the next call, and keep plugging away.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="4" data-anwser="4">D: Consider another line of work.</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="item-play" id="id5" data-mot="2" data-hai="3" data-ba="1" data-bon="4">
		<div class="text-qus text-center">
			<p>5/10 : You are a manager in an organization that is trying to encourage respect for racial and ethnic diversity. You overhear someone telling a racist joke. What do you do?</p>
		</div>
		<div class="anwser anwser-eq">
			<div class="row">
				<div class="col-xs-12">
					<div class="anwser-item" data-id="5" data-anwser="1">A: Ignore it—it's only a joke.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="5" data-anwser="2">B: Call the person into your office for a reprimand.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="5" data-anwser="3">C: Speak up on the spot, saying that such jokes are inappropriate and will not be tolerated in your organization.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="5" data-anwser="4">D: Suggest to the person telling the joke he go through a diversity training program.</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="item-play" id="id6" data-mot="2" data-hai="3" data-ba="1" data-bon="4">
		<div class="text-qus text-center">
			<p>6/10 : You are trying to calm down a friend who has worked himself up into a fury at a driver in another car who has cut dangerously close in front of him. What do you do?</p>
		</div>
		<div class="anwser anwser-eq">
			<div class="row">
				<div class="col-xs-12">
					<div class="anwser-item" data-id="6" data-anwser="1">A: Tell him to forget it; he's okay now and it's no big deal.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="6" data-anwser="2">B: Put on one of his favourite tapes and try to distract him.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="6" data-anwser="3">C: Join him in putting down the other driver, but exaggerate your reaction.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="6" data-anwser="4">D: Tell him about a time something like this happened to you and how you felt as mad as he does now, but then you saw that the other driver was on the way to the hospital emergency room.</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="item-play" id="id7" data-mot="2" data-hai="3" data-ba="1" data-bon="4">
		<div class="text-qus text-center">
			<p>7/10 : You and your boyfriend/girlfriend have gotten into an argument that has escalated into a shouting match. In the heat of the moment, you are both making personal attacks that you don't really mean. What's the best thing to do?</p>
		</div>
		<div class="anwser anwser-eq">
			<div class="row">
				<div class="col-xs-12">
					<div class="anwser-item" data-id="7" data-anwser="1">A: Take a 20-minute break and then continue the discussion.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="7" data-anwser="2">B: Stop the argument - stay silent, no matter what your partner says.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="7" data-anwser="3">C: Say that you're sorry and ask your partner to apologize too.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="7" data-anwser="4">D: Stop for a moment, collect your thoughts, and then state your side of the argument as clearly as you can.</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="item-play" id="id8" data-mot="2" data-hai="3" data-ba="1" data-bon="4">
		<div class="text-qus text-center">
			<p>8/10 : You have been assigned to lead a work group that is trying to come up with a creative solution to a nagging problem at work. What is the first thing you do?</p>
		</div>
		<div class="anwser anwser-eq">
			<div class="row">
				<div class="col-xs-12">
					<div class="anwser-item" data-id="8" data-anwser="1">A: Draw up an agenda and allot time for discussion of each item so you make best use of your time together.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="8" data-anwser="2">B: Have people take the time to get to know each other better.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="8" data-anwser="3">C: Begin by asking each person for ideas about how to solve the problem, while ideas are fresh.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="8" data-anwser="4">D: Start with a brainstorming session, encouraging everyone to say whatever comes to mind, no matter how wild their idea is.</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="item-play" id="id9" data-mot="2" data-hai="3" data-ba="1" data-bon="4">
		<div class="text-qus text-center">
			<p>9/10 : Imagine that you have a 5-year-old son who is extremely timid, and has been hypersensitive about—and a bit fearful of—new people and places since he was born. What do you do?</p>
		</div>
		<div class="anwser anwser-eq">
			<div class="row">
				<div class="col-xs-12">
					<div class="anwser-item" data-id="9" data-anwser="1">A: Accept that he has a shy temperament and think of ways to shelter him from situations that would upset him.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="9" data-anwser="2">B: Take him to a child psychiatrist for help.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="9" data-anwser="3">C: Deliberately expose him to lots of new people and places so he can get over his fear.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="9" data-anwser="4">D: Engineer an ongoing series of challenging but manageable experiences that will teach him that he can handle new people and places.</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="item-play" id="id10" data-mot="2" data-hai="3" data-ba="1" data-bon="4">
		<div class="text-qus text-center">
			<p>10/10 : For some time now, you have wanted to return to playing the musical instrument you learned to play when you were younger. You have finally gotten around to practicing again, and want to make the best use of your time. What do you do?</p>
		</div>
		<div class="anwser anwser-eq">
			<div class="row">
				<div class="col-xs-12">
					<div class="anwser-item" data-id="10" data-anwser="1">A: Hold yourself to a strict practice time every day.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="10" data-anwser="2">B: Choose pieces that stretch your abilities a bit.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="10" data-anwser="3">C: Practice only when you are really in the mood.</div>
				</div>
				<div class="col-xs-12">
					<div class="anwser-item" data-id="10" data-anwser="4">D: Pick pieces that are far beyond your current ability, but that you can master with diligent effort.</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="box-info">
		<form action="" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" id="point" name="point" value="0">
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
				<button type="button" name="action-play" class="btn-result">View EQ</button>
			</div>
		</form>
	</div>
	<div class="box-result text-center">
		<p class="p-result1">Congratulations <span class="name-play"></span> your EQ is:</p>
		<p class="p-iq"><span class="result-iq"></span>/200</p>
		<p class="p-result2">"<span class="aubout-you"></span>"</p>
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

		$('.anwser-item').click(function(){
			var a = $(this).attr('data-id');
			$('#id'+ a).hide();
			var b = Number(a)+ 1;
			if(b <= 10){
				$('#id'+ b).show();
				var l1 = $('#id'+ a).attr('data-mot');
				var l2 = $('#id'+ a).attr('data-hai');
				var l3 = $('#id'+ a).attr('data-ba');
				var l4 = $('#id'+ a).attr('data-bon');
				var tl = $(this).attr('data-anwser');
				var point = $('#point').attr('value');
				
				if(tl == l1){
					$('#point').attr('value', Number(point)+20);
				}
				if(tl == l2){
					$('#point').attr('value', Number(point)+15);
				}
				if(tl == l3){
					$('#point').attr('value', Number(point)+10);
				}
				if(tl == l4){
					$('#point').attr('value', Number(point)+5);
				}
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
			var eq         = $('#point').val();
			if(name == '' ||age == '' || gender == '' || email == ''){
				$('.error-info p').show();
			}else{
				$(this).html('Loading...');
				$('.result-iq').text($('#point').val());

				$.post(host + '/iq/eq-test/check-eq',
				{
					"_token": "{{ csrf_token() }}",
					name: name,
					age: age,
					country: country,
					gender: gender,
					email: email,
					eq: eq
				},
				function(data){

					setTimeout(function(){
						$('.box-info').hide();
						$('.name-play').text(name);
						$('.aubout-you').text(data);
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