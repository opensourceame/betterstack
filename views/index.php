<link rel='stylesheet' href='https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css'/>
<script type='text/javascript' src='https://cdn.datatables.net/2.1.8/js/dataTables.min.js'></script>

<h1 class="text-center">PHP Test Application</h1>

<p>

<div id='users_container'>
	<?php $app->renderPartial('users', ['users' => $users]) ?>
</div>

<div id='errors_container'></div>

<?php include('form.php'); ?>

<script type='text/javascript'>
	function submitForm() {
		let form = $("#new_user_form");

		$('#errors_container')[0].innerHTML = '';

		$.ajax({
                    type: "POST",
                    url: '/index.php',
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