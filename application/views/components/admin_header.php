<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin | Bookery!</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin_login.css">

	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

	<style>
		p{
			margin-top: 10px;
		}
	</style>



</head>

<?php


if (!isset($this->session->admin_logged_in) & !($this->session->admin_logged_in)) {
	?>
	<style type="text/css">#admin_nav{
			display:none;
		}</style>
	<?php
}
?>


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="<?php echo base_url(); ?>Admin">The Bookery! Admin Panel</a>

		<p class="text-info">Dear Admin!</p>
	</div>
</nav>
<section class="jumbotron text-center">
	<div class="container">
		<h1 class="jumbotron-heading"><?php echo $title ?></h1>
	</div>
</section>

<div class="container-fluid">
	<div class="row content">

		<div class="col-sm-2" id="admin_nav">
			<h3>Settings</h3>
			<nav class="nav flex-column nav-pills nav-fill">
				<a class="nav-link " href="<?php echo base_url(); ?>Admin">Add Category</a>
				<a class="nav-link" href="<?php echo base_url(); ?>Admin/new_book">Add Book</a>
				<a class="nav-link" href="<?php echo base_url(); ?>Admin/search">Search Book</a>
			</nav>

		</div>
		<br>
