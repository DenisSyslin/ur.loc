<div class="row">
	<div class="span6">
	<h2><?php echo $user -> username; ?></h2>
	<ul>
		<li>Аватарка: <img src="<?php echo $photo; ?>" class="img-rounded" /></li>
		<li>E-mail: <?php echo $user -> email; ?></li>
		<li>Последнее посещение: <?php echo Date::fuzzy_span($user -> last_login); ?></li>
	</ul>
	<hr />
	<?php if (isset($_GET['changeok']))    : ?> Новый пароль был успешно сохранен<hr /><?php endif; ?> 
	<?php if (isset($_GET['changefalse'])) : ?> Старый пароль введен не верно или новый пароль слишком слабый<hr /><?php endif; ?>
	<form action="/account/changepass" method="post">
		Смена пароля: <input type="password" name="oldpassword" placeholder="Старый пароль" /><br />
		Новый пароль: <input type="password" name="newpassword" placeholder="Новый пароль" /><br />
		<input type="submit" class="btn" value="Изменить пароль" />
	</form>
	</div>
	<div class="span6">
		<h3>Аккаунты социальных сетей:</h3>
		
		<? if (isset($networks) && count($networks) > 0) : ?>
			<?php foreach ($networks as $n) : ?> 
				<a href="<?php echo $n[ 'identity' ]; ?>" target="_blank"><?php echo $n[ 'identity' ]; ?></a><br />
			<?php endforeach; ?> 
		<?php else : ?>
			Аккаунты социальных сетей еще не добавлены :( 
		<?php endif; ?>
		<hr />
		Добавить другие аккаунты:
		<br />
		<?php echo $ulogin; ?>
		<hr />
		<a href="/account/logout" class="btn">Выйти</a>
	</div>
</div>