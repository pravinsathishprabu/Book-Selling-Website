<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@500&display=swap" rel="stylesheet">
	<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}
.slideshow-container {
  width: 100%;
  position: relative;
  overflow-x: hidden;
  margin: auto;
  font-family: 'Ibarra Real Nova', serif;
}
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 30%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  font-weight: bold;
  border: 1px solid black;
  font-size: 18px;
  border-radius: 80px;
  transition: 0.6s ease;
  user-select: none;
  margin: 10px;
}
.next {
  right: 0;
  margin-right: 10px;
}
.prev:hover, .next:hover {
  background-color: lightgreen;
}
.para{
  margin-top: 100px;
}
@media only screen and (max-width: 600px) {
  .prev, .next {font-size: 11px,top: 50%}
  .para{
    margin-top: -10px;
    text-align: center;
  }
  .text{
    font-size: 18px;
  }
  .img{
    width: 300px;
    height: 300px;
  }

}
</style>
</head>
<body>
	<center>
	<div style="border-bottom: 1px solid black;">
		@include('navbar')
	</div>
</center>
<div class="slideshow-container">
  <div class="mySlides">
    <div class="row">
      <div class="col-sm-6 para" style="padding: 60px;">
        <h1 class="text-success ml-4 text">Inspiration for every age.</h1>
        <p class="ml-4 text">Read your favourite book on any device wherever you have wifi.</p><br/>
        <a href="register" class="ml-4 text"><button class="btn btn-success">Create my free Account</button></a>
      </div>
      <div class="col-sm-6">
        <center><img src="asset/2.png" class="img" width="80%" height="90%"></center>
      </div>
    </div>
  </div>

  <div class="mySlides">
    <div class="row">
      <div class="col-sm-6 para" style="padding: 60px;">
         <h1 class="text-success ml-4 text">Passionate about books.</h1>
        <p class=" ml-4 text">Read your favourite book on any device wherever you have wifi.</p><br/>
        <a href="register" class="ml-4 text"><button class="btn btn-success">Create my free Account</button></a>
      </div>
      <div class="col-sm-6">
          <center><img src="asset/3.png" class="img"  width="80%" height="90%"></center>
      </div>
    </div>
  </div>

<div class="mySlides">
    <div class="row">
      <div class="col-sm-6 para" style="padding: 60px;">
        <h1 class="text-success ml-4 text">Discover something new.</h1>
        <p class="ml-4 text">Read your favourite book on any device wherever you have wifi.</p><br/>
        <a href="register" class="ml-4 text"><button class="btn btn-warning">Create my free Account</button></a>
      </div>
      <div class="col-sm-6">
          <center><img src="asset/4.png" class="img" width="80%" height="90%"></center>
      </div>
    </div>
  </div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<div style="border-bottom: 1px solid black;">
		@include('Sliders/slider1')
	</div>
  <div style="border-bottom: 1px solid black;">
    @include('Sliders/slider2')
  </div>
  <div style="border-bottom: 1px solid black;">
    @include('Sliders/slider3')
  </div>
   <div style="border-bottom: 1px solid black;">
    @include('Sliders/slider4')
  </div>
<div>
    @include('footer')
  </div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 4000);
}	

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>