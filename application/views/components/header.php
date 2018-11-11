<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Bookery!</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/categories.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/welcome_page.css">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<style>
		body, html{
			font-family: 'Nunito Sans', sans-serif;
		}
	</style>

</head>



<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="<?php echo base_url(); ?>">The Bookery!</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
				aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
			<ul class="navbar-nav m-auto">
				<li class="nav-item m-auto">
					<a class="nav-link" href="<?php echo base_url() ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('Categories/action')?>">Categories</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('Cart')?>">Cart</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('Admin')?>">Admin</a>
				</li>
			</ul>

			<form class="form-inline my-2 my-lg-0">
				<a class="btn btn-success btn-sm ml-3" href="<?php echo site_url('Cart')?>">
					<i class="fa fa-shopping-cart"></i> Cart
					<span class="badge badge-light"><?php echo $this->cart_library->get_cart_count() ?></span>
				</a>
			</form>
		</div>
	</div>
</nav>
<section class="jumbotron text-center">
	<div class="container">
		<h1 class="jumbotron-heading"><?php echo $title ?></h1>
	</div>
</section>
