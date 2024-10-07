<form id="new_user_form" method="post" action="/users/create" class="form-horizontal">
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

	<button id='new_user_submit_btn' type="submit" class="btn btn-primary">Create new row</button>
</form>
