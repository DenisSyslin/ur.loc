<div class="row">
	<div class="col-lg-4">
		<?php if (isset($message)) : ?>
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php echo $message ?>
			</div>
		<?php endif; ?>
		<form method="post" action="/account/forgot">
			<div class="form-group">
				<label for="input-email">E-Mail адрес</label>
				<input id="input-email"  type="email" name="email" value="<?php echo $email ?>" class="form-control" placeholder="E-Mail адрес"/>
				<?php if (!empty($errors[ 'email' ])) : ?>
					<p class="text-danger"><?php echo Arr::get($errors, 'email') ?></p>
				<?php endif; ?>
			</div>	
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Восстановить пароль</button>
			</div>	
		</form>
	</div>
</div>