<script>
	window.onload = function () {

		var chart = new CanvasJS.Chart("chartContainer", {
			animationEnabled: true,
			theme: "light2",
			backgroundColor: "transparent",
			title: {
				text: "Book Visits Over Time",
				fontFamily: "Oxygen",
				fontWeight: "normal",
				fontSize: 20,
			},
			axisX: {
				crosshair: {
					enabled: true,
					snapToDataPoint: true
				}
			},
			axisY: {
				title: "Number of Views",
				crosshair: {
					enabled: true,
					snapToDataPoint: true
				}
			},
			toolTip: {
				enabled: false
			},
			data: [{
				type: "area",
				dataPoints: <?php echo json_encode($statistics, JSON_NUMERIC_CHECK); ?>
			}]
		});
		chart.render();
	}
</script>


<div class="col-sm-9">
	<div class="row ">
		<div class="col-sm-3 item-photo">
			<img class="img-responsive book_image" src="<?php echo base_url() . $book->image_url ?>" width="100%"/>
		</div>
		<div class="col-sm-8" style="border:0px solid gray">
			<h3><?php echo $book->title ?></h3>
			<h5 style="color:#bfbfbf">written by <span style="color:#525252"><?php echo $book->author ?></span> ·
				<small style="color:#337ab7">(<?php echo $book->copies_held ?> copies left)</small>
			</h5>
			<h5 style="color:#bfbfbf">in category <a
					href="<?php echo site_url(array('Categories', $book->category)) ?>"><?php echo $this->Category_model->get_category_name($book->category) ?></a>

				<!-- Precios -->
				<h6 class="title-price">
					<small>Price:</small>
				</h6>
				<h3 style="margin-top:0px;">U$S <?php echo $book->price ?></h3>

				<!-- Detalles especificos del producto -->
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

				<div style="margin-top:5%;width:100%;border-top:1px solid silver">
					<p style="padding:15px;">
						<small>
							Stay connected either on the phone or the Web with the Galaxy S4 I337 from Samsung. With 16
							GB
							of memory and a 4G connection, this phone stores precious photos and video and lets you
							upload
							them to a cloud or social network at blinding-fast speed. With a 17-hour operating life from
							one
							charge, this phone allows you keep in touch even on the go.

							With its built-in photo editor, the Galaxy S4 allows you to edit photos with the touch of a
							finger, eliminating extraneous background items. Usable with most carriers, this smartphone
							is
							the perfect companion for work or entertainment.
						</small>
					</p>
					<small>
						<ul>
							<li>Super AMOLED capacitive touchscreen display with 16M colors</li>
							<li>Available on GSM, AT T, T-Mobile and other carriers</li>
							<li>Compatible with GSM 850 / 900 / 1800; HSDPA 850 / 1900 / 2100 LTE; 700 MHz Class 17 /
								1700 /
								2100 networks
							</li>
							<li>MicroUSB and USB connectivity</li>
							<li>Interfaces with Wi-Fi 802.11 a/b/g/n/ac, dual band and Bluetooth</li>
							<li>Wi-Fi hotspot to keep other devices online when a connection is not available</li>
							<li>SMS, MMS, email, Push Mail, IM and RSS messaging</li>
							<li>Front-facing camera features autofocus, an LED flash, dual video call capability and a
								sharp
								4128 x 3096 pixel picture
							</li>
							<li>Features 16 GB memory and 2 GB RAM</li>
							<li>Upgradeable Jelly Bean v4.2.2 to Jelly Bean v4.3 Android OS</li>
							<li>17 hours of talk time, 350 hours standby time on one charge</li>
							<li>Available in white or black</li>
							<li>Model I337</li>
							<li>Package includes phone, charger, battery and user manual</li>
							<li>Phone is 5.38 inches high x 2.75 inches wide x 0.13 inches deep and weighs a mere 4.59
								oz
							</li>
						</ul>
					</small>
				</div>
		</div>

		<br/>

		<div class="col-xs-9">

		</div>

		<hr/>
		<hr/>
		<hr/>
		<hr/>
		<hr/>
		<hr/>
		<hr/>
		<hr/>


	</div>

	<h3>Visitor Statistics</h3>
	<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>


