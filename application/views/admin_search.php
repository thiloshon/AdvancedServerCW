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
			<h2>Admin Search</h2>
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
					<label for="keyword">Name of Title or Author</label>
					<input type="text" class="form-control form-control-lg" id="keyword" name="keyword" aria-describedby="emailHelp" placeholder="Enter a keyword to search">

				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

			<?php foreach ($results as $result): ?>

				<div class="row">
					<div class="col-sm-3">
						<div class="well">
							<p><a href="<?php echo "http://localhost/AdvancedServerCW/index.php/Admin/view_book?book_id=" . $result->isbn ?>">
									<?php echo $result->title ?>
								</a>
							</p>
							<img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
						</div>
					</div>
					<div class="col-sm-9">
						<div class="well">
							<p>Just Forgot that I had to mention something about someone to someone about how I forgot
								something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
						</div>
					</div>
				</div>


			<?php endforeach; ?>

		</div>


	</div>
</div>

</body>
</html>
