<style>
	.alert {
		position: relative;
		padding: 0rem 1.25rem 0rem 1.25rem;
		margin-bottom: 1rem;
		border: 0px solid transparent;
		border-radius: .25rem;
	}
</style>

<div class="container">

	<div class="alert alert-danger" role="alert">
		<?php echo validation_errors(); ?>
		<?php if (isset($error_message)) echo $error_message; ?>
	</div>

	<div class="main-login main-center">
		<form class="form-horizontal" method="post" action="<?php echo site_url('Admin/login') ?>">

			<div class="form-group">
				<label for="name" class="cols-sm-2 control-label">Admin ID</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name"/>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="cols-sm-2 control-label">Password</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
						<input type="password" class="form-control" name="password" id="password"
							   placeholder="Enter your Password"/>
					</div>
				</div>
			</div>

			<div class="form-group ">
				<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Login</button>
			</div>
		</form>
	</div>
</div>
