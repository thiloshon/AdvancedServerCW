<style>
	.alert {
		position: relative;
		padding: 0rem 1.25rem 0rem 1.25rem;
		margin-bottom: 1rem;
		border: 0px solid transparent;
		border-radius: .25rem;
	}

	.book_image {
		max-width: 100%;
	}
</style>


<div class="container">
	<div class="alert alert-success" role="alert">
		<?php echo $success_message; ?>
	</div>
	<div class="alert alert-danger" role="alert">
		<?php echo validation_errors(); ?>
	</div>

	<div class="row">
		<div class="col-sm-4 item-photo">
			<img class="img-responsive book_image" src="<?php echo base_url() . $book->image_url ?>"/>
		</div>
		<div class="col-sm-8" style="border:0px solid gray">
			<h3><?php echo $book->title ?></h3>
			<h5 style="color:#bfbfbf">written by <span style="color:#525252"><?php echo $book->author ?></span> ·
				<small style="color:#337ab7">(<?php echo $book->copies_held ?> copies left)</small>
			</h5>
			<h5 style="color:#bfbfbf">in category <a
					href="<?php echo site_url(array('Categories', $book->category)) ?>"><?php echo $this->Category_model->get_category_name($book->category) ?></a>

				<h6 class="title-price">
					<small>Price:</small>
				</h6>
				<h3 style="margin-top:0px;">U$S <?php echo $book->price ?></h3>
				<div class="section">
					<h6 class="title-attr" style="margin-top:15px;">
						<small>Sold: <?php echo $book->copies_out ?></small>
					</h6>
					<div>
						<div class="attr" style="width:25px;background:#5a5a5a;"></div>
						<div class="attr" style="width:25px;background:white;"></div>
					</div>
				</div>
				<div class="section" style="padding-bottom:5px;">
					<h6 class="title-attr">
						<small>Paper back color:</small>
					</h6>
					<div>
						<div class="attr2"><?php echo $book->band ?></div>
					</div>
				</div>

				<?php echo form_open() ?>

				<input type="hidden" name="book_id" value="<?php echo $book->isbn ?>">
				<div class="section" style="padding-bottom:20px;">
					<h6 class="title-attr">
						<small>Choose Qty</small>
					</h6>
					<div>
						<input type="text" value="1" name="quantity"/>
					</div>
				</div>


				<div class="section" style="padding-bottom:20px;">
					<button class="btn btn-success" type="submit">
						<span
						<i class="fa fa-shopping-cart"> Add to Cart </i> </span>
					</button>
				</div>

				<?php echo form_close(); ?>
		</div>
		<br/>
		<div class="col-xs-9">
			<div style="margin-top:5%;width:100%;border-top:1px solid silver">
				<p style="padding:15px;">
					<small>
						A novel—inspired by the most celebrated regiment in the Red Army—about a woman’s sacrifice, courage, and love in a time of war.

						Russia, 1941. Katya Ivanova is a young pilot in a far-flung military academy in the Ural Mountains. From childhood, she’s dreamed of taking to the skies to escape her bleak mountain life. With the Nazis on the march across Europe, she is called on to use her wings to serve her country in its darkest hour. Not even the entreaties of her new husband—a sensitive artist who fears for her safety—can dissuade her from doing her part as a proud daughter of Russia.

						</small>
				</p>
				<small>
					<ul>
						After years of arduous training, Katya is assigned to the 588th Night Bomber Regiment—one of the only Soviet air units composed entirely of women. The Germans quickly learn to fear nocturnal raids by the daring fliers they call “Night Witches.” But the brutal campaign will exact a bitter toll on Katya and her sisters-in-arms. When the smoke of war clears, nothing will ever be the same—and one of Russia’s most decorated military heroines will face the most agonizing choice of all.

					</ul>
				</small>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12 ">

			<div class="card">
				<div class="card-header">
					Viewers also viewed...
				</div>
				<div class="card-body">
					<div class="row">
						<?php $val = 0; ?>
						<?php foreach ($also_viewed as $book): ?>
							<?php if ($val > 4) break; ?>
							<div class="col-sm-3">
								<div class="card">
									<img class="card-img-top img-responsive"
										 src="<?php echo base_url() . $book->image_url ?>"
										 alt="Card image cap">
									<div class="card-body">
										<a href="<?php echo site_url(array('Books', $book->isbn)) ?>"><?php echo $book->title ?></a>
									</div>
								</div>
							</div>
							<?php $val++; endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

