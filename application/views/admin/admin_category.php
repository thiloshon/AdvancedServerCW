<div class="col-sm-6">
	<h4>Add A New Category</h4>
	<form action="<?php echo base_url()?>Admin/new_category">
		<div class="form-group">
			<label for="newCategory">Name For New Category</label>
			<input type="text" class="form-control form-control-lg" id="newCategory" name="newCategory"
				   aria-describedby="emailHelp" placeholder="Enter Name of New Category">

			<br/>

			<label for="newCategoryID">ID For New Category</label>
			<input type="text" class="form-control form-control-lg" id="newCategoryID" name="newCategoryID"
				   placeholder="Enter a ID for New Category">

			<small id="emailHelp" class="form-text text-muted">Please note this action is not reversible.</small>
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>





