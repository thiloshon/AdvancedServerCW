<style>
	.card-title {
		min-height: 50px;
	}

	.card {
		margin-bottom: 5%;
	}

</style>

<div class="container">
	<div class="row">
		<div class="col-sm-12 ">
			<?php $cat = 0; foreach ($books as $key => $category): if ($cat>2) break; ?>
				<div class="card">
					<div class="card-header">
						<?php echo $this->Category_model->get_category_name($key) ?> | <a href="<?php echo site_url(array('Categories', $key)) ?>">Browse More</a>

					</div>
					<div class="card-body">
						<div class="row">
							<?php $val = 0; ?>
							<?php foreach ($category as $book): ?>
								<?php if ($val>3) break; ?>
								<div class="col-sm-3">
									<div class="card">
										<img class="card-img-top img-responsive"
											 src="https://placehold.it/150x80?text=IMAGE"
											 alt="Card image cap">
										<div class="card-body">
											<h5 class="card-title"><?php echo $book->title ?></h5>
											<p class="card-text">By <?php echo $book->author ?></p>
										</div>
										<ul class="list-group list-group-flush">
											<li class="list-group-item"> $ <?php echo $book->price ?></li>
										</ul>
										<div class="card-body">
											<a href="<?php echo site_url(array('Books', $book->isbn)) ?>"
											   class="card-link">View Book</a>
										</div>
									</div>
								</div>
							<?php $val++; endforeach; ?>
						</div>
					</div>
				</div>
			<?php $cat++; endforeach; ?>
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
