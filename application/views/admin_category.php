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

<nav class="navbar navbar-inverse visible-xs">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Logo</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Dashboard</a></li>
				<li><a href="#">Age</a></li>
				<li><a href="#">Gender</a></li>
				<li><a href="#">Geo</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container-fluid">
	<div class="row content">
		<div class="col-sm-3 sidenav hidden-xs">
			<h2>Admin Portal</h2>
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
					<label for="newCategory">Name For New Category</label>
					<input type="text" class="form-control form-control-lg" id="newCategory" name="newCategory" aria-describedby="emailHelp" placeholder="Enter Name of New Category">

					<br/>

					<label for="newCategoryID">ID For New Category</label>
					<input type="text" class="form-control form-control-lg" id="newCategoryID" name="newCategoryID" placeholder="Enter a ID for New Category">

					<small id="emailHelp" class="form-text text-muted">Please note this action is not reversible.</small>
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>
