<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('/public/backend')}}/assets/common/css/login.css">
	    <script src="{{asset('/public/backend')}}/assets/plugins/jquery/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="login">
			<div class="login-triangle"></div>

			<h2 class="login-header">Log in</h2>

			<form action="{{url('login')}}" method="post" class="login-container">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<p class="p-error">Không để trống</p>
				<p><input type="text" name="email" class="email" placeholder="Email"></p>
				<p><input type="password" name="password" class="password" placeholder="Password"></p>
				<p><input type="submit" class="btn-login" value="Log in"></p>
			</form>
		</div>
	</div>
</body>
<script>
	$(document).ready(function(){
		$('.btn-login').click(function(){
			var email = $('.email').val();
			var password = $('.password').val();
			if(email == '' || password == ''){
				$('.p-error').show();
				return false;
			}
		})
	})
</script>
</html>