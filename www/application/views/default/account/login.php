<div class="row">
	
	<div class="col-lg-4">
		<h4>Войти на сайт</h4>
		<?php if (isset($message)) : ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php echo $message ?>
			</div>
		<?php endif; ?>
		
		<form method="post" action="/account/login" role="form">
			<div class="form-group">
				<label for="input-email">E-Mail адрес</label>
				<input id="input-email" type="email" name="email" value="<?php echo Arr::get($item, 'email') ?>" class="form-control" placeholder="E-Mail адрес"/>
				<?php if (!empty($login_errors[ 'email' ])) : ?>
					<p class="text-danger"><?php echo Arr::get($login_errors, 'email') ?></p>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<label for="input-pass">Пароль</label>
				<input id="input-pass"  type="password" name="password" class="form-control" placeholder="Пароль"/>
				<?php if (!empty($login_errors[ 'password' ])) : ?>
					<p class="text-danger"><?php echo Arr::get($login_errors, 'password') ?></p>
				<?php endif; ?>
			</div>			
			<div class="checkbox">
				<label>
					<input type="checkbox" name="rememberme" value="true"/> Запомнить меня
				</label>
			</div>
			<a href="/account/forgot" class="btn btn-default">Забыли пароль?</a>
			<button type="submit" class="btn btn-primary">Войти на сайт</button>
		</form>
	</div>
	
	<div class="col-lg-4">
		<h4>Вход через социальные сети</h4>
		<?php echo $ulogin; ?>
		<p>Теперь пользователи популярных сайтов («Вконтакте», Facebook, Twitter, «Одноклассники», Mail.ru, Google) могут авторизоваться у нас без регистрации и ввода пароля. То есть если у вас уже есть логин на одном из этих сайтов, вы можете войти к нам с помощью этого сайта.</p>
	</div>

	<div class="col-lg-4">
		<h4>Зарегистрироваться</h4>
		<form method="post" action="/account/registration">
			<div class="form-group">
				<label for="reg-name">Отображаемое имя</label>
				<input id="reg-name" type="text" name="username" value="<?php echo Arr::get($item, 'username') ?>" class="form-control" placeholder="Отображаемое имя"/>
				<?php if (!empty($errors[ 'username' ])) : ?>
					<p class="text-danger"><?php echo Arr::get($errors, 'username') ?></p>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<label for="reg-email">E-Mail адрес</label>
				<input id="reg-email" type="email" name="email" value="<?php echo Arr::get($item, 'email') ?>" class="form-control" placeholder="E-Mail адрес"/>
				<?php if (!empty($errors[ 'email' ])) : ?>
					<p class="text-danger"><?php echo Arr::get($errors, 'email') ?></p>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<label for="reg-pass">Пароль</label>
				<input id="reg-pass" type="password" name="password" class="form-control" placeholder="Пароль"/>
				<?php if (!empty($errors[ 'password' ])) : ?>
					<p class="text-danger"><?php echo Arr::get($errors, 'password') ?></p>
				<?php endif; ?>
			</div>
			<button type="submit" class="btn btn-primary">Зарегистрироваться</button>
		</form>
	</div>
</div>