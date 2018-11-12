<style>
	#pagination {
		display: inline-block;
	}

	#pagination a, strong {
		border: 1px solid #b3b3b3; /* Gray */
		padding: 8px 16px;
		text-decoration: none;
		text-align: center !important;
	}

	#pagination strong {
		background: #007bff; /* Gray */

	}
</style>

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

			<hr/>

			<?php foreach ($books as $book): ?>
				<div class="row">
					<div class="col-sm-4">
						<div class="well">
							<h4><a href="<?php echo site_url(array('Books', $book->isbn)) ?>"><?php echo $book->title ?>
								</a>
							</h4>
							<img src="<?php echo base_url() . $book->image_url ?>" class="img-responsive" height="50%"
								 width="50%" alt="Avatar">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="well">
							<p> A novel—inspired by the most celebrated regiment in the Red Army—about a woman’s sacrifice, courage, and love in a time of war.
							<br/>

								Russia, 1941. Katya Ivanova is a young pilot in a far-flung military academy in the Ural Mountains. From childhood, she’s dreamed of taking to the skies to escape her bleak mountain life. With the Nazis on the march across Europe, she is called on to use her wings to serve her country in its darkest hour. Not even the entreaties of her new husband—a sensitive artist who fears for her safety—can dissuade her from doing her part as a proud daughter of Russia.
							</p>
						</div>
					</div>
				</div>

				<hr/>
			<?php endforeach; ?>

			<div class="row">
				<div class="col-sm-12 text-center">
					<div id="pagination">
						<?php echo $links; ?>
					</div>
				</div>
			</div>
			<br/>
			<br/>
		</div>
	</div>
</div>
