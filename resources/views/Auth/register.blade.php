<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@500&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	strong{
		float: left;
		font-family: "Times New Roman", Times, serif;
	}
	form{
		padding: 20px;
		margin-top: 10px;
		width: 40%;
		background-color: white;
		font-family: "Times New Roman", Times, serif;
	}
	@media screen and (max-width: 600px) {
	  form{
	    width: 90%;
	  }
	  .errors{
	  	min-width: 90%;
	  }
	}
	.errors{
		margin-top: 2px;
		width: 40%;
		border-radius: 10px;
	}
	.form-control{
		padding: 13px;
	}
	.form-control:hover{
		border-color: blue;
	}
	.btn {
		border-radius: 50px;
		width: 30%;
		padding: 10px;
	}
</style>
<body>
	<header class="text-center p-4"><h3 class="text-primary" style="font-family: 'Ibarra Real Nova', serif;">VIVID</h3><hr style="color: black;background-color: black;height:1px;width: 100%;" /></header>
	<center>
		<b style="font-family: 'Ibarra Real Nova', serif;">SIGN UP TO VIVID</b>
		<h1 style="font-family: 'Ibarra Real Nova', serif;">Create account</h1>
		<form action="/store" method="post" autocomplete="off">
			<div class="component"> 
				<input type="text" name="name" class="form-control" placeholder="Name" />
			</div><br/>
			<div class="component">
				<input type="text" name="email" class="form-control" placeholder="Email" />
			</div><br/>
			<div class="component">
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div><br/>
			<div class="component">
				<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
			</div><br/>
			<div style="float:left"><p>By signing up you agree to our Terms of Service and Privacy Policy</p></div>
			<input type="submit" value="Register" class="btn btn-primary"><br/>
			<p class="text-dark p-2 text-center">Already have an Account <a href="login">login here</a></p>
			@csrf
		</form>
	</center>
	<div>
		@include('footer')
	</div>
</body>
</html>