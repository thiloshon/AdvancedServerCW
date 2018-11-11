<div class="container-fluid text-center">
	<div class="row content">
		<div class="col-sm-2 sidenav">

			<?php foreach ($categories as $book): ?>
				<p>
					<a href="<?php echo site_url(array('Categories', $book->category_id)) ?>"><?php echo $book->category_name ?>
					</a>
				</p>
			<?php endforeach; ?>

		</div>

		<div class="col-sm-8 text-left">
			<h1><?php echo $this->Category_model->get_category_name($category) ?></h1>

			<?php foreach ($books as $book): ?>
				<div class="row">
					<div class="col-sm-3">
						<div class="well">
							<p><a href="<?php echo site_url(array('Books', $book->isbn)) ?>"><?php echo $book->title ?>
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

				<hr/>
			<?php endforeach; ?>


			<?php echo $links; ?>

			<!----------------------------------------->


		</div>

	</div>
</div>
