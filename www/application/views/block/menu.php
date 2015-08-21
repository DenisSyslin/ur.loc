<?php defined('SYSPATH') or die('No direct script access.');?>
<!-- URL http://www.bootstrapzero.com/bootstrap-templates -->
<nav class="navbar navbar-default">
	<div class="container">
		<h1 class="navbar-brand">
			<a href="<?php echo URL::site('/') ?>">
				<?php echo __(Config::getSiteParam('site_name')) ?>
			</a>
		</h1>
		<ul class="nav navbar-nav">
			<li <?php if ($current == 'main') : ?>class="active"<?php endif; ?>>
				<a href="<?php echo URL::site('/') ?>">Главная</a>
			</li>
			<li class="divider-vertical"></li>
			<li <?php if ($current == 'articles') : ?>class="active"<?php endif; ?>>
				<a href="<?php echo URL::site('/articles') ?>">Анатомия</a>
			</li>
			<li class="divider-vertical"></li>
			<li <?php if ($current == 'help') : ?>class="active"<?php endif; ?>>
				<a href="<?php echo URL::site('/pages/help') ?>">Помощь</a>
			</li>
			<li class="divider-vertical"></li>
			<li <?php if ($current == 'about') : ?>class="active"<?php endif; ?>>
				<a href="<?php echo URL::site('/pages/about') ?>">О нас</a>
			</li>
		</ul>
	</div>
</nav>