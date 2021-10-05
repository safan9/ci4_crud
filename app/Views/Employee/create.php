<div class="container">
	<h2 class="bg-dark text-white mt-2 p-2">Add New Employee</h2>
	<form class="row m-3" action="<?= base_url('Employee') . '/Store' ?>" method="POST">
		<div class="col-md-8">
		  <label for="Name" class="form-label">Employee Name</label>
		  <input type="text" name="name" class="form-control" id="name" placeholder="e.g. John Doe...">
		</div>
		<div class="col-md-8">
		  <label for="City" class="form-label">City</label>
		  <input type="text" name="city" class="form-control" id="city" placeholder="e.g. Mumbai...">
		</div>

		<div class="col-md-8 m-2">
			<input type="submit" name="btnSubmit" class="btn btn-primary btn-sm" value="ADD" />
		</div>
	</form>
</div>