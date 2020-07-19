<?php if(count($error)>=0): ?>
	<span>
		<?php foreach ($error as $error): ?>
			<p style="font-weight:600;color:red;"><?php echo $error; ?></p>
		<?php endforeach ?>
	</span>
<?php endif ?>	