<table id='users_table' class="table table-striped">
	<thead>
		<tr>
            <th>ID</th>
			<th>Name</th>
			<th>E-mail</th>
			<th>City</th>
			<th>Phone number</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $index => $user) { ?>
		<tr>
			<td><?= $user->getId() ?></td>
			<td><?= $user->getName() ?></td>
			<td><?= $user->getEmail() ?></td>
			<td><?= $user->getCity() ?></td>
			<td><?= $user->getPhoneNumber() ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<script type='text/javascript'>
    $.extend( $.fn.dataTable.defaults, {
    	searching: true,
    	ordering:  true
	} );

	function updateTable() {
		let table = new DataTable('#new_user_form');
	}
</script>
