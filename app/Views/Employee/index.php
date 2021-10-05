<div class="container">
	<a href="<?= base_url('Employee') . '/Create' ?>" class="btn btn-success float-end mt-2">
		Add New Employee
	</a>
	<?php 
		if(session()->getFlashdata('status'))
		{
			echo "<div class='text-danger m-2'>" . session()->getFlashdata('status') . "</div>";
		}
	?>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Name</th>
	      <th scope="col">City</th>
	      <th scope="col">Actions</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($employees as $emp) : ?>
		    <tr>
		      <th scope="row"><?= $emp['id'] ?></th>
		      <td><?= $emp['name'] ?></td>
		      <td><?= $emp['city'] ?></td>
		      <td>
		      	<a class="btn btn-primary" href="<?= base_url('Employee') . '/Edit/' . $emp['id'] ?>">
		      		Edit
		      	</a>
		      	<form class="d-inline" action="<?= base_url('Employee') . '/Delete/' . $emp['id'] ?>" method="POST">
		      		<input type="submit" name="btnDelete" class="btn btn-danger" value="DELETE" />
		      	</form>	
		      </td>
		    </tr>
	  	<?php endforeach; ?>
	  </tbody>
	</table>
	<div class="p-2 m-2">
		<?= $pager->links() ?>
	</div>
</div>



