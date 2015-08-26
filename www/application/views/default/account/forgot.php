<div class="row">
	<div class="span4">
		<?php if (isset($message)) : ?>
			<span class="label label-important"><?php echo $message; ?></span>
			<hr /> 
		<?php endif; ?>
		<form method="post" action="/account/forgot">
			<label>E-Mail адрес</label>
				<input type="email" name="email" value="<?php echo $email; ?>" class="span3"/>
			</label>
			<input type="submit" value="Восстановить пароль" class="btn btn-primary"/>
			<div class="clearfix"></div>
		</form>
      </div>
</div>