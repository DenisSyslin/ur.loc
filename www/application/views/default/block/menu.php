<?php defined('SYSPATH') or die('No direct script access.');?>

<nav class="navbar-collapse collapse">
	<ul class="nav navbar-nav navbar-right">
		<li <?php if ($current == 'main') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/') ?>">Главная</a>
		</li>
		<li <?php if ($current == 'articles') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/articles') ?>">Аналитика</a>
		</li>
		<li <?php if ($current == 'news') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/news') ?>">Новости</a>
		</li>
		<li <?php if ($current == 'help') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/pages/help') ?>">Помощь</a>
		</li>
		<li <?php if ($current == 'about') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo URL::site('/pages/about') ?>">О нас</a>
		</li>
		<li>
			<a title="Перейти на форум" target="_blank" href="<?php echo URL::site('/forum') ?>">Форум</a>
		</li>
	</ul>
	<form class="navbar-form navbar-right" action="<?php echo URL::site('/pages/search') ?>" method="POST">
		<input id="site-search-text" name="query" type="text" class="form-control" placeholder="Поиск..."/>
	</form>
</nav>
