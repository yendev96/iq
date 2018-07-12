@extends('frontend.master')
@section('title', 'Test IQ Online')
@section('des', 'Test IQ Online')
@section('content')
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
	<a href="{{url('test-iq/for-kid')}}" class="btn-play" title="">Play Test</a>
</div>
<div class="box-item">
	<h2>Free IQ test</h2>
	<p>
		This IQ test has all components that are standard in most IQ tests. 
		It includes questions related to spatial intelligence, logical reasoning,
		verbal intelligence and math.
	</p>
	<p>
		Our free DISC personality test, based on the DISC types, determines your 
		personality profile in just five minutes. Are you ready for a free DISC assesment? 
		Find out how the DISC factors, Dominance, Influence, Steadiness and Compliance predict 
		your behavior towards others and the everyday things you do.
	</p>
	<a href="" class="btn-play" title="">Play Test</a>
</div>
<div class="box-item">
	<h2>IQ test training</h2>
	<p>
		Do you like taking IQ tests and quizzes? Want to do proper job test prep for an assessment? 
		We got just what you want. We got loads of free IQ tests lined up in an online IQ test training. 
		You get fast short tests that explain what are the correct answers and show you how many questions you answered correctly.
	</p>
	<p>
		This IQ test has all components that are standard in most IQ tests. 
		It includes questions related to spatial intelligence, logical reasoning,
		verbal intelligence and math.
	</p>
	<a href="" class="btn-play" title="">Play Test</a>
</div>
@endsection