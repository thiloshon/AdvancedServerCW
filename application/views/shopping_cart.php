<div class="container mb-4">
	<div class="row">
		<div class="col-12">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
					<tr>
						<th scope="col"></th>
						<th scope="col">Product</th>
						<th scope="col">Available</th>
						<th scope="col" class="text-center">Quantity</th>
						<th scope="col" class="text-right">Price</th>
						<th></th>
					</tr>
					</thead>
					<tbody>

					<?php foreach ($cart_items as $cart_item): ?>
						<form action="<?php echo base_url(); ?>Cart/update_item">
							<tr>
								<td><img src="https://dummyimage.com/50x50/55595c/fff"/></td>
								<td><?php echo $cart_item['book_name'] ?></td>
								<td>In stock</td>
								<td><input class="form-control" type="text" name="new_qty"
										   value="<?php echo $cart_item['qty'] ?>"/></td>

								<td class="text-right"><?php echo $cart_item['price'] *  $cart_item['qty']?> $</td>

								<input type="hidden" name="book_id" value="<?php echo $cart_item['book_id'] ?>"/>


								<td class="text-right">
									<button class="btn btn-sm btn-success" type="submit"><i class="fa fa-refresh"></i>
									</button>
									<a href="<?php echo base_url() . "Cart/delete_item?item=" . $cart_item['book_id'] ?>">
										<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>
										</button>
									</a>
								</td>
							</tr>
						</form>

					<?php endforeach; ?>

					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>Sub-Total</td>
						<td class="text-right"><?php echo $this->cart_library->get_current_amount(); ?> $</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>Shipping</td>
						<td class="text-right">6,90 $</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><strong>Total</strong></td>
						<td class="text-right"><strong><?php echo ($this->cart_library->get_current_amount() + 6.90);?> $</strong></td>
					</tr>

					</tbody>
				</table>
			</div>
		</div>
		<div class="col mb-2">
			<div class="row">
				<div class="col-sm-12  col-md-6">
					<a href="<?php echo site_url('Categories/action') ?>"><button class="btn btn-block btn-light" type="button" >Continue Shopping</button></a>

				</div>
				<div class="col-sm-12 col-md-6 text-right">
					<button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
				</div>
			</div>
		</div>
	</div>
</div>

