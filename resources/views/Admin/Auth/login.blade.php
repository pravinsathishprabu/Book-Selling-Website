<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
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
		margin-top: 50px;
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
	  .footer{
	  	display: none;
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
		<h1 style="font-family: 'Ibarra Real Nova', serif;">Admin Login</h1>
		<form action="adminauth" method="post" autocomplete="off">
			<div class="component">
				<input type="text" name="id" class="form-control" placeholder="Admin ID" />
			</div><br/>
			<div class="component">
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div><br/>
			<div class="component">
				<a href="#" style="float: left;">Forgot Password?</a>
			</div>
			<br/><br/>
			<input type="submit" value="Continue" class="btn btn-primary"><br/><br/>
			<p class="text-dark p-2 text-center">Don't have a vivid Account? <a href="register">Sign Up</a></p>
			@csrf
		</form>
	</center>
</body>
</html>