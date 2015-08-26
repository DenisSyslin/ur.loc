<div class="row">
	
	<div class="span4">
		<h4>Войти на сайт</h4>
		<?php if (isset($message)) : ?>
			<span class="label label-important"><?php echo $message; ?></span>
			<hr />
		<?php endif; ?>
		<form method="post" action="/account/login">
			
			<label>E-Mail адрес</label>
			<input type="email" name="email" value="<?php echo $email;?>" class="span3"/>
			
			<label>Пароль</label>
			<input type="password" name="password" class="span3">
			
			<label class="checkbox">
				<input type="checkbox" name="rememberme" value="true"/> Запомнить меня
			</label>
			<a href="/account/forgot" class="btn">Забыли пароль?</a>
			
			<input type="submit" value="Войти на сайт" class="btn btn-primary"/>
			
			<div class="clearfix"></div>
		</form>
	</div>
	
	<div class="span4">
		<h4>Вход через социальные сети</h4>
		<?php echo $ulogin; ?>
		<p>Теперь пользователи популярных сайтов («Вконтакте», Facebook, Twitter, «Одноклассники», Mail.ru, Google) могут авторизоваться у нас без регистрации и ввода пароля. То есть если у вас уже есть логин на одном из этих сайтов, вы можете войти к нам с помощью этого сайта.</p>
	</div>

	<div class="span4">
		<h4>Зарегистрироваться</h4>
		<?php if (isset($messageReg)) : ?>
			<span class="label label-important"><?php echo $messageReg; ?></span>
			<br />
		<?php endif; ?>	
		<?php if (isset($errors)) : ?> 
			<?php foreach ($errors as $error) : ?> 
				<?php echo $error; ?><br />
			<?php foreach; ?>	
			<hr /> 
		<?php endif; ?>	
		<form method="post" action="/account/registration">
		
			<label>Отображаемое имя</label>
			<input type="text" name="username" value="<?php echo $username;?>" class="span3"/>
			
			<label>E-Mail адрес</label>
			<input type="email" name="email" value="<?php echo $email;?>" class="span3"/>
			
			<label>Пароль</label>
			<input type="password" name="password" class="span3"/>
			
			<input type="submit" value="Зарегистрироваться" class="btn btn-primary"/>
			
			<div class="clearfix"></div>
		</form>
	</div>
</div>