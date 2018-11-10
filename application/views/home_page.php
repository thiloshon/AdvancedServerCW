<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Bookery!</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		/* Remove the navbar's default rounded borders and increase the bottom margin */
		.navbar {
			margin-bottom: 50px;
			border-radius: 0;
		}

		/* Remove the jumbotron's default bottom margin */
		.jumbotron {
			margin-bottom: 0;
		}

		/* Add a gray background color and some padding to the footer */
		footer {
			background-color: #f2f2f2;
			padding: 25px;
		}
	</style>
</head>
<body>

<div class="jumbotron">
	<div class="container text-center">
		<h1>The Bookery!</h1>
		<p>Online Store</p>
	</div>
</div>

<nav class="navbar navbar-inverse">
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
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Deals</a></li>
				<li><a href="#">Stores</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">


	<div class="row">
		<div class="col-sm-12 ">

			<?php foreach ($books as $key => $category): ?>


				<div class="panel panel-primary panel-body">

					<div class="panel-heading">
						<?php echo $key ?> <a
							href="<?php echo "http://localhost/AdvancedServerCW/index.php/Categories?category_id=" . $key ?>">Browse
							More</a>
					</div>

					<?php foreach ($category as $book): ?>

						<div class="col-sm-4">

							<div class="panel-body">
								<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive"
									 style="width:100%" alt="Image">
							</div>

							<div class="panel-footer">
								<a href="<?php echo "http://localhost/AdvancedServerCW/index.php/Product?book_id=" . $book->isbn ?>"><?php echo $book->title ?></a>
							</div>

						</div>

					<?php endforeach; ?>

				</div>

			<?php endforeach; ?>


		</div>
	</div>
</div>
<br>

<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading">Top Selling</div>
				<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive"
											 style="width:100%" alt="Image"></div>
				<div class="panel-footer">Buy 50 mobiles and get a gift card</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading">Most Gifted</div>
				<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive"
											 style="width:100%" alt="Image"></div>
				<div class="panel-footer">Buy 50 mobiles and get a gift card</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading">Browse All Categories</div>
				<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive"
											 style="width:100%" alt="Image"></div>
				<div class="panel-footer">Buy 50 mobiles and get a gift card</div>
			</div>
		</div>
	</div>
</div>
<br><br>

<footer class="container-fluid text-center">
	<p>Online Store Copyright</p>
	<form class="form-inline">Get deals:
		<input type="email" class="form-control" size="50" placeholder="Email Address">
		<button type="button" class="btn btn-danger">Sign Up</button>
	</form>
</footer>
</body>


</html>


