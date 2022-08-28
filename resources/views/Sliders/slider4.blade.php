<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
.flex-container {
  display: none;
}
.scroll{
  overflow: auto;
  white-space: nowrap;
}
.scroll::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.example {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
.poster{
	width: 400px;
	height: 450px;
	color: black;
}
.poster-img{
	width:230px;
	height: 300px;
	border:2px solid black;
}
.poster-img:hover{
	width: 240px;
	height: 310px;
}
.card-text{
	text-align: center;
	font-style: bold;
	font-family: 'Ibarra Real Nova', serif;
}
.Author{
	position: relative;
	top: -20px;
	float: left;
	font-family: 'Ibarra Real Nova', serif;
}
.img1{
	width:40px;
	height: 40px;
	margin: 10px;
	left: -50px;
	position: relative;
}
.img2{
	width:40px;
	height: 40px;
	margin: 10px;
	left: -50px;
	position: relative;
}
	</style>
</head>
<body>
	<h3 class="text-success p-4" style="font-family: 'Ibarra Real Nova', serif;">The internet’s largest bookstore</h3>
	<div class="scroll">
<div class="d-flex justify-content-start">
	 @foreach ($get_books as $book)
		<div class="container poster">
 		<form action="/getbook" method="post">
 			@csrf
 			<input type="number" name="id" value="{{ $book->id }}" style="display: none;" />
	 		<img src='images/{{ $book ->book_image }}' class="poster-img" /></a>
	 		<p class="card-text">{{ $book->book_name }}</p>
	 		<p class="Author text-primary">By {{ $book->book_author }}</p><br/>
	 		<div class="float-right" >
	 			<button class="btn btn-outline-success" type="submit">View &nbsp;<img src='asset/book.png' width="15" height="15" /></button>
 		</div>
 	</form>
 	</div>
 	@endforeach
</div>
</div>
</body>
</html>