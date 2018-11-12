<div class="col-sm-6">
	<h4>Search for a Book</h4>
	<form action="">
		<div class="form-group">
			<label for="keyword">Name of Title or Author</label>
			<input type="text" class="form-control form-control-lg" id="keyword" name="keyword" aria-describedby="emailHelp" placeholder="Enter a keyword to search">

		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<hr/>

	<?php foreach ($results as $result): ?>

		<div class="row">
			<div class="col-sm-3">
				<div class="well">
					<p><a href="<?php echo base_url() . "Admin/view_book?book_id=" . $result->isbn ?>">
							<?php echo $result->title ?>
						</a>
					</p>
					<img src="<?php echo base_url().$result->image_url ?>" class="img-circle" width="55" alt="Avatar">
				</div>
			</div>
			<div class="col-sm-9">
				<div class="well">
					<p>Just Forgot that I had to mention something about someone to someone about how I forgot
						something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
				</div>
			</div>
		</div>

		<hr/>


	<?php endforeach; ?>

</div>
