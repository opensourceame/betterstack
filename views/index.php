<link rel='stylesheet' href='https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css'/>
<script type='text/javascript' src='https://cdn.datatables.net/2.1.8/js/dataTables.min.js'></script>

<h1 class="text-center">PHP Test Application</h1>

<p>

<div id='users_container'>
	<?php $app->renderPartial('users', ['users' => $users]) ?>
</div>

<div id='errors_container'></div>

<form id="new_user_form" method="post" action="" class="form-horizontal">
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

<script type='text/javascript'>
	function submitForm() {
		let form = $("#new_user_form");

		$('#errors_container')[0].innerHTML = '';

		$.ajax({
                    type: "POST",
                    url: '/create',
                    data: form.serialize(), // Serialize form data
                    success: function (data) {
						$('#users_container')[0].innerHTML = data;
						$("#new_user_form")[0].reset()
                    },
                    error: function (data) {
						console.log(data);
						$('#errors_container')[0].innerHTML = data.responseText;
                    }
                });
	}

	$(document).ready(function() {
		$('#new_user_submit_btn').click(function(event) {
			event.preventDefault();

			submitForm();
		});
	});
</script>