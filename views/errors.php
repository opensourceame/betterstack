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