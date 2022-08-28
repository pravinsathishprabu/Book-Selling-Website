<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Description</title>
	<style type="text/css">
		@media only screen and (max-width: 600px){
			.img{
				width: 350px;
				height: 350px;
			}
		} 
	</style>
</head>
<body>
@foreach($get_details as $details)
<center>
	<div style="border-bottom: 1px solid black;">
		@include('navbar')
	</div>
</center><br/>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<center>
			<img src='images/{{ $details->book_image }}' class="img" width="350px" height="350px" style="margin-top:50px" />
		</center>
		</div>
		<div class="col-sm-6 mt-4 mb-4">
			<div style="border-bottom:2px solid black;font-family: 'Ibarra Real Nova', serif;">
				<h1 class="text-center">{{ $details->book_name }}</h1>
				<b class="float-right text-success">-{{ $details->book_author }}</b><br/>
			</div><br/>
			<center>
			<div style="border-bottom:2px solid black;font-family: 'Ibarra Real Nova', serif;">
				<b class="text-primary" style="margin-top: 10px;">Category : <span class="text-dark">{{ $details->category }}</span></b><br/><br/>
				<b class="text-success">Special price :</b>
				₹ {{ $details->rate }}<br/><br/>

				<form action="payment" method="post">
					@csrf
					@if (Auth::check())
					<input type="number" value="{{ Auth::user()->id }}" name="uid" style="display: none;" >
					<input type="number" value="{{ $details->id }}" name="bid" style="display: none;">
					<input type="text" value="{{ $details->book_name }}" name="bname" style="display: none;">
					<input type="text" value="{{ $details->book_image }}" name="image" style="display: none;">
					<input type="text" value="{{ $details->pdf }}" name="pdf" style="display: none;">
					<input type="number" value="{{ $details->rate }}" name="rate" style="display: none;">
						<script src="https://checkout.razorpay.com/v1/checkout.js"
	                        data-key="rzp_test_Miky1kbKFDHLgs"
	                        data-amount = "{{ $details->rate *100}}"
	                        data-buttontext="Buy"
	                        data-name="book"
	                        data-description="test"
	                        data-theme.color="white">
	                    </script>
				</form><br/>
				 <button class="btn btn-primary mb-2" onclick="history.back()">Back</button>
					@else
					Login
					@endif
			</div><br/>
			<div style="font-family: 'Ibarra Real Nova', serif;">
				<h3 class="text-primary">Description</h3><br/>
				<b>{{ $details->desc }}</b>
			</div>	
			</center>
		</div>
	</div>
</div>
@endforeach
</body>
</html>