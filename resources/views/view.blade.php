<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart</title>
	<style type="text/css">
		.pdf{
			width: 100%;
			height: 500px;
		}
		@media and screen (max-width: 600px){
			.col2{
				margin-top: 10px;
			}
		}
	</style>
</head>
<body>
	<center>
	<div class="bg-light" style="border-bottom: 1px solid black;">
		@include('navbar')
	</div>
</center><br/>
<div class="p-2">
	 @foreach($get_cart as $cart)
	 	<div class="container bg-primary" style="border:2px solid black;padding:10px;border-radius: 10px;">
	 		<div class="row">
	 			<div class="col-sm-6"><center><img src="images/{{ $cart->book_image }}" width="300px" height="300px"></center></div>
	 			<div class="col-sm-6 col2" style="margin-top:100px">
	 				<center>
	 					<h6 class="text-light">{{ $cart->book_name }}</h6>
	 				<a href="https://online.pubhtml5.com/upvtg/dezf/#p=1" class="btn btn-warning text-light" target="_blank">Open Book</a>
	 				</center>
	 			</div>
	 		</div>
	 	</div><br/>
	 @endforeach
	</div>
</body>
</html>