<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 05-Nov-18
 * Time: 9:50 PM
 */

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<body>
<div class="container">
	<?php

	$added = false;

	if (!(is_null($this->input->get('quantity')))) {

		$newdata = array(
			'book_id' => $book['ID'],
			'qty' => $this->input->get('quantity'),
			'book_name' => $book['Title']

		);

		$temp = $this->session->cart_items;
		$temp[$book['ID']] = $newdata;

		$this->session->set_userdata('cart_items', $temp);

		$added = true;
		print_r($this->session->cart_items);
	}

	?>

	<div class="row">
		<div class="col-xs-4 item-photo">
			<img style="max-width:100%;"
				 src="https://ak1.ostkcdn.com/images/products/8818677/Samsung-Galaxy-S4-I337-16GB-AT-T-Unlocked-GSM-Android-Cell-Phone-85e3430e-6981-4252-a984-245862302c78_600.jpg"/>
		</div>
		<div class="col-xs-5" style="border:0px solid gray">
			<!-- Datos del vendedor y titulo del producto -->
			<h3><?php echo $book['Title'] ?></h3>
			<h5 style="color:#337ab7">written by <a href="#"><?php echo $book['Publisher'] ?></a> ·
				<small style="color:#337ab7">(<?php echo $book['CopiesHeld'] ?> copies left)</small>
			</h5>
			<h5 style="color:#337ab7">in category <a href="#"><?php echo $book['Genre'] ?></a>

				<!-- Precios -->
				<h6 class="title-price">
					<small>Price:</small>
				</h6>
				<h3 style="margin-top:0px;">U$S 399</h3>

				<!-- Detalles especificos del producto -->
				<div class="section">
					<h6 class="title-attr" style="margin-top:15px;">
						<small>Sold: <?php echo $book['CopiesOut'] ?></small>
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
						<div class="attr2"><?php echo $book['Band'] ?></div>
					</div>
				</div>
				<form action="" method="get">
					<input type="hidden" name="book_id" value="<?php echo $book['ID'] ?>">
					<div class="section" style="padding-bottom:20px;">
						<h6 class="title-attr">
							<small>Choose Qty</small>
						</h6>
						<div>
							<div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
							<input value="1" name="quantity"/>
							<div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
						</div>
					</div>

					<!-- Botones de compra -->
					<div class="section" style="padding-bottom:20px;">

						<button class="btn btn-success" type="submit">

							<span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart"
								  aria-hidden="true"></span>Add to Cart
						</button>
					</div>

				</form>
		</div>

		<div class="col-xs-9">
			<div style="width:100%;border-top:1px solid silver">
				<p style="padding:15px;">
					<small>
						Stay connected either on the phone or the Web with the Galaxy S4 I337 from Samsung. With 16 GB
						of memory and a 4G connection, this phone stores precious photos and video and lets you upload
						them to a cloud or social network at blinding-fast speed. With a 17-hour operating life from one
						charge, this phone allows you keep in touch even on the go.

						With its built-in photo editor, the Galaxy S4 allows you to edit photos with the touch of a
						finger, eliminating extraneous background items. Usable with most carriers, this smartphone is
						the perfect companion for work or entertainment.
					</small>
				</p>
				<small>
					<ul>
						<li>Super AMOLED capacitive touchscreen display with 16M colors</li>
						<li>Available on GSM, AT T, T-Mobile and other carriers</li>
						<li>Compatible with GSM 850 / 900 / 1800; HSDPA 850 / 1900 / 2100 LTE; 700 MHz Class 17 / 1700 /
							2100 networks
						</li>
						<li>MicroUSB and USB connectivity</li>
						<li>Interfaces with Wi-Fi 802.11 a/b/g/n/ac, dual band and Bluetooth</li>
						<li>Wi-Fi hotspot to keep other devices online when a connection is not available</li>
						<li>SMS, MMS, email, Push Mail, IM and RSS messaging</li>
						<li>Front-facing camera features autofocus, an LED flash, dual video call capability and a sharp
							4128 x 3096 pixel picture
						</li>
						<li>Features 16 GB memory and 2 GB RAM</li>
						<li>Upgradeable Jelly Bean v4.2.2 to Jelly Bean v4.3 Android OS</li>
						<li>17 hours of talk time, 350 hours standby time on one charge</li>
						<li>Available in white or black</li>
						<li>Model I337</li>
						<li>Package includes phone, charger, battery and user manual</li>
						<li>Phone is 5.38 inches high x 2.75 inches wide x 0.13 inches deep and weighs a mere 4.59 oz
						</li>
					</ul>
				</small>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12 ">


			<div class="panel panel-primary panel-body">

				<div class="panel-heading">
					<p>Viewers also viewed...</p>
				</div>

				<?php foreach ($also_viewed as $book): ?>

					<div class="col-sm-4">

						<div class="panel-body">
							<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive"
								 style="width:100%" alt="Image">
						</div>

						<div class="panel-footer">
							<a href="<?php echo "http://localhost/AdvancedServerCW/index.php/Product?book_id=" . $book['ID'] ?>"><?php echo $book['Title'] ?></a>
						</div>

					</div>

				<?php endforeach; ?>

			</div>


		</div>

	</div>
</div>
</body>
</html>

