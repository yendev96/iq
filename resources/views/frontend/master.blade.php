<!DOCTYPE html>
<html lang="en-US">
<head>
	@include('frontend.includes.head')
</head>
<body>
	<div class="wrap">
		<header id="header" class="header text-center">
			@include('frontend.includes.header')
		</header><!-- /header -->

		<section id="main-website">
			<div class="container">
				<div class="row">
					<div class="col-md-9 main-content">
						@yield('content')
					</div>
					<div class="col-md-3 sidebar">
						@include('frontend.includes.sidebar')
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="box-countdown"><p id="countdown"></p></div>
	<!-- FOOTER -->
	<footer id="myfooter" class="text-center">

		<p>Copyright by iqtestonline.net</p>
	</footer>
	@yield('js')
</body>
</html>