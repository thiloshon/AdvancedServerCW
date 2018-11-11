<div class="container">
	<div class="row">
		<div class="col-sm-12 ">
			<?php foreach ($books as $key => $category): ?>
				<div class="card">
					<div class="card-header">
						<?php echo $key ?> <a
							href="<?php echo base_url() . "Categories/list_categories?category_id=" . $key ?>">Browse More</a>
					</div>
					<div class="card-body">
						<div class="row">
							<?php foreach ($category as $book): ?>
								<div class="col-sm-3">
									<div class="card">
										<img class="card-img-top img-responsive"
											 src="https://placehold.it/150x80?text=IMAGE"
											 alt="Card image cap">
										<div class="card-body">
											<h5 class="card-title"><?php echo $book->title ?></h5>
											<p class="card-text">Some quick example text to build on the card title and
												make up the bulk of the card's content.</p>
										</div>
										<ul class="list-group list-group-flush">
											<li class="list-group-item"> $ <?php echo $book->price ?></li>
										</ul>
										<div class="card-body">
											<a href="<?php echo base_url() . "Product?book_id=" . $book->isbn ?>"
											   class="card-link">View Book</a>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
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
