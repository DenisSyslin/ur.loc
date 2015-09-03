<div class="row">
	<div class="col-lg-6">
		<h2><?php echo $user -> username; ?></h2>
		<div>
			<img src="<?php echo $photo; ?>" class="img-rounded" />
			<p>E-mail: <?php echo $user -> email; ?></p>
			<p>Последнее посещение: <?php echo Date::fuzzy_span($user -> last_login); ?></p>
			<a href="/account/logout" class="btn btn-primary">Выйти</a>
		</div>
		<hr />
		<?php if (isset($_GET['changeok'])) : ?> 
			<div class="alert bg-info">
				<button type="button" class="close" aria-hidden="true">&times;</button>
				Новый пароль был успешно сохранен
			</div>
		<?php endif; ?> 

		<form method="post" action="/account/changepass" role="form">
			<div class="form-group">
				<label for="oldpassword">Смена пароля</label>
				<input id="oldpassword" type="password" name="oldpassword" class="form-control" placeholder="Старый пароль" />
				<?php if (!empty($errors[ 'oldpassword' ])) : ?>
					<p class="text-danger"><?php echo Arr::get($errors, 'oldpassword') ?></p>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<label for="newpassword">Новый пароля</label>
				<input id="newpassword" type="password" name="newpassword" class="form-control" placeholder="Новый пароль" />
				<?php if (!empty($errors[ 'newpassword' ])) : ?>
					<p class="text-danger"><?php echo Arr::get($errors, 'newpassword') ?></p>
				<?php endif; ?>
			</div>
			<button type="submit" class="btn btn-primary">Изменить пароль</button>
		</form>
	</div>
	<div class="col-lg-6">
		<h3>Аккаунты социальных сетей:</h3>
		
		<?php if (isset($networks) && count($networks) > 0) : ?>
			<?php foreach ($networks as $n) : ?> 
				<p><a href="<?php echo $n[ 'identity' ]; ?>" target="_blank"><?php echo $n[ 'identity' ]; ?></a></p>
			<?php endforeach; ?> 
		<?php else : ?>
			<p>Аккаунты социальных сетей еще не добавлены :(</p>
		<?php endif; ?>
		<hr />
		<p>Добавить другие аккаунты:</p>
		<?php echo $ulogin; ?>
		
	</div>
</div>