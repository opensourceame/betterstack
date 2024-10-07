<link rel='stylesheet' href='https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css'/>
<script type='text/javascript' src='https://cdn.datatables.net/2.1.8/js/dataTables.min.js'></script>

<h1 class="text-center">PHP Test Application</h1>

<p>

<table id='users_table' class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>E-mail</th>
			<th>City</th>
			<th>Phone number</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $index => $user) { ?>
		<tr>
			<td><?= $user->getName() ?></td>
			<td><?= $user->getEmail() ?></td>
			<td><?= $user->getCity() ?></td>
			<td><?= $user->getPhoneNumber() ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<?= $pageErrors ?>
<?php if ($pageErrors) { ?>
	<div class='alert alert-warning'>
		<p>Could not add record:</p>
		<ul>
			<?php foreach($pageErrors as $field => $error) { ?>
			<li><?= $field ?> - <?= $error ?></li>
			<?php } ?>
		</ul>
	</div>
<?php } ?>

<form method="post" action="index.php" class="form-horizontal">
	<div class="form-group">
		<label for="name" class="col-sm-4 control-label">Name:</label>
		<div class="col-sm-8">
			<input name="name" type="text" id="name" class="form-control" value="<?= $params['name'] ?>" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-4 control-label">E-mail:</label>
		<div class="col-sm-8">
			<input name="email" type="text" id="email" class="form-control" value="<?= $params['email'] ?>" />
		</div>
	</div>
	<div class="form-group">
		<label for="city" class="col-sm-4 control-label">City:</label>
		<div class="col-sm-8">
			<input name="city" type="text" id="city" class="form-control" value="<?= $params['city'] ?>" />
		</div>
	</div>
	<div class="form-group">
		<label for="phone_number" class="col-sm-4 control-label">Phone Number:</label>
		<div class="col-sm-8">
			<input name="phone_number" type="text" id="phone_number" class="form-control" value="<?= $params['phone_number'] ?>" />
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Create new row</button>
</form>

<script type='text/javascript'>
	$.extend( $.fn.dataTable.defaults, {
    	searching: true,
    	ordering:  true
	} );

	let table = new DataTable('#users_table');
</script>