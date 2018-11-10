<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 08-Nov-18
 * Time: 11:09 PM
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
		.row.content {height: 550px}

		/* Set gray background color and 100% height */
		.sidenav {
			background-color: #f1f1f1;
			height: 100%;
		}

		/* On small screens, set height to 'auto' for the grid */
		@media screen and (max-width: 767px) {
			.row.content {height: auto;}
		}
	</style>
</head>
<body>

<div class="container-fluid">
	<div class="row content">
		<div class="col-sm-3 sidenav hidden-xs">
			<h2>Admin Book</h2>
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="http://localhost/AdvancedServerCW/index.php/Admin/category">Add Category</a></li>
				<li><a href="http://localhost/AdvancedServerCW/index.php/Admin/book">Add Book</a></li>
				<li><a href="http://localhost/AdvancedServerCW/index.php/Admin/search">Search Book</a></li>
				<!--<li><a href="http://localhost/AdvancedServerCW/index.php/Admin/view">Add Category</a></li>-->
			</ul><br>
		</div>
		<br>

		<div class="col-sm-9">
			<form action="">
				<div class="form-group">
					<h4>Add A New Book</h4>

					<label for="book_name">Name of the book</label>
					<input type="text" class="form-control form-control-lg" id="book_name" name="book_name" placeholder="Enter Name of New Book">

					<br/>


					<div class="form-group">
						<label for="category">Category</label>
						<select class="form-control" id="category" name="category">
							<?php foreach ($categories as $category): ?>

								<option value="<?php echo $category->category_id ?>"> <?php echo $category->category_name ?> </option>
							<?php endforeach; ?>

						</select>
					</div>


					<label for="author">Author</label>
					<input type="text" class="form-control form-control-lg" id="author" name="author" placeholder="Enter a Author Name">

					<br/>

					<label for="publisher">Publisher</label>
					<input type="text" class="form-control form-control-lg" id="publisher" name="publisher" placeholder="Enter Publisher Name">

					<br/>

					<label for="price">Price</label>
					<input type="text" class="form-control form-control-lg" id="price" name="price" placeholder="Enter Unit Price">

					<br/>

					<label for="isbn">ISBN</label>
					<input type="text" class="form-control form-control-lg" id="isbn" name="isbn" placeholder="Enter ISBN Number">

					<br/>

					<label for="copies">Copies in Stock</label>
					<input type="text" class="form-control form-control-lg" id="copies" name="copies" placeholder="Enter Copies left in stock">

				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>


	</div>
</div>

</body>
</html>
