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

				<div style="margin-top:5%;width:100%;border-top:1px solid silver">
					<p style="padding:15px;">
						<small>
							Description!
						</small>
					</p>
					<small>
						<ul>
							More Description!
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


