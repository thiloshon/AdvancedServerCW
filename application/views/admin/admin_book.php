<div class="col-sm-6">
	<form action="<?php echo site_url('Admin/new_book') ?>" method="post">
		<div class="form-group">
			<h4>Add A New Book</h4>

			<label for="book_name">Name of the book</label>
			<input type="text" class="form-control form-control-lg" id="book_name" name="book_name" placeholder="Enter Name of New Book">

			<br/>


			<div class="form-group">
				<label for="category">Category</label>
				<select class="form-control" id="category" name="category">
					<?php foreach ($categories as $category): ?>

						<option value="<?php echo $category->category_id ?>"> <?php echo $category->category_name ?> </option>
					<?php endforeach; ?>

				</select>
			</div>


			<label for="author">Author</label>
			<input type="text" class="form-control form-control-lg" id="author" name="author" placeholder="Enter a Author Name">

			<br/>

			<label for="publisher">Publisher</label>
			<input type="text" class="form-control form-control-lg" id="publisher" name="publisher" placeholder="Enter Publisher Name">

			<br/>

			<label for="price">Price</label>
			<input type="text" class="form-control form-control-lg" id="price" name="price" placeholder="Enter Unit Price">

			<br/>

			<label for="isbn">ISBN</label>
			<input type="text" class="form-control form-control-lg" id="isbn" name="isbn" placeholder="Enter ISBN Number">

			<br/>

			<label for="copies">Copies in Stock</label>
			<input type="text" class="form-control form-control-lg" id="copies" name="copies" placeholder="Enter Copies left in stock">

		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
