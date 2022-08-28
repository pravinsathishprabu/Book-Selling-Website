<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add New Book</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		label{
			float: left;
			margin-top: 10px;
		}
		.d1{
			padding: 13px;
		}
		.d2{
			border: 0px;
			border: none;
			outline: none;
		}
		/*.contain{
			margin-top: 100px;
		}
		@media screen and (max-width: 600px){
			.contain{
				margin-top: 0px;
			}
		}*/
	</style>
</head>
<body>
	<header class="text-center p-4 "><h3 class="text-primary" style="font-family: 'Ibarra Real Nova', serif;">VIVID<span class="text-dark"> - Add New Book</span></h3>
		<hr style="color: black;background-color: black;height:1px;width: 100%;" />
	 	<a href="{{ url('admin/logout') }}" class="btn btn-outline-danger float-right">Logout</a>
	</header>

<div class="container text-primary" class="ml-4" style="border-radius:10px;">
		<center>
	<div class="row contain">
  	<div class="col-sm-6">
  		<form action="/book" method="post" enctype="multipart/form-data" autocomplete="off">
  			@csrf
			<div>
				<label>Book Name</label>
				<input type="text" class="form-control d1" placeholder="Enter Book Name" name="book_name" />
			</div>
			<div>
				<label>Author Name</label>
				<input type="text" class="form-control d1" placeholder="Enter Author Name" name="book_author" />
			</div>
			<div>
				<label>Categories</label>
				<select class="form-control" style="height: 50px;" name="category">
					<option>Select Category</option>
					<option value="Art">Art</option>
					<option value="Music">Music</option>
					<option value="Medical">Medical</option>
					<option value="Science">Science</option>
					<option value="Nature">Nature</option>
					<option value="Pets">Pets</option>
					<option value="Psycology">Psycology</option>
					<option value="Sports">Sports</option>
					<option value="Romantic">Romantic</option>
				</select>
			</div>
			<div>
				<label>Rate</label>
				<input type="number" class="form-control d1" placeholder="Enter Book Amount" name="rate" />
			</div>
			<div>
				<label>Description</label>
				<textarea class="form-control d1" placeholder="Enter the Book description" name="desc"></textarea>
			</div>
		</div>
  	<div class="col-sm-6">
  			<div>
				<label>Book Image</label>
				<input type="file" class="form-control d2"  name="book_image" accept="image/*"/>
			</div>
			<div>
				<label>Book</label>
				<input type="file" class="form-control d2"  name="pdf" accept="application/pdf" />
			</div><br/>
			<div class="mt-2">
				<button type="submit" class="btn btn-success">Add Book</button>
			</div>
			<br/>
			<img src="../asset/Book_shelve.png" width="50%" height="50%" />
		</center>
		</form>

	</div>
</div>
</body>
</html>