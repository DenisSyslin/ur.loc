<?php defined('SYSPATH') or die('No direct script access.');?>

<div class="masthead">
	<h1 class="text-muted">			
		<a href="<?php echo URL::site('/') ?>">
			<?php echo __(Config::getSiteParam('site_name')) ?>
		</a>
	</h1>
	<nav>
	  <ul class="nav nav-justified">
			<li <?php if ($current == 'main') : ?>class="active"<?php endif; ?>>
				<a href="<?php echo URL::site('/') ?>">Главная</a>
			</li>
			<li <?php if ($current == 'articles') : ?>class="active"<?php endif; ?>>
				<a href="<?php echo URL::site('/articles') ?>">Анатомия</a>
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
		</ul>
	</nav>
</div>
