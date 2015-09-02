<?php defined('SYSPATH') or die('No direct script access.');?>

<?php echo View::factory($TMP_PATH . '/block/carousel'); ?>

<div class="row main-row">
	<div class="col-lg-4">
		<h5 class="sub-h5">Наша команда</h5>
		<p class="top-buffer">Это текст. Нажмите здесь, чтобы отредактировать его и добавить свой текст. Сделать это просто: нажмите «Редактировать текст» либо дважды нажмите на сам текст – и можете вставлять свое содержимое и задавать шрифт.</p>
		<p>Здесь замечательно будет смотреться длинный текст о вашей компании и тех услугах, которые вы предоставляете. Все это место можно использовать, чтобы более подробно описать вашу компанию.</p>
		<p><a class="btn btn-primary btn-black" href="#" role="button">Подробнее</a></p>
	</div>
	<div class="col-lg-4">
		<h5 class="sub-h5">Услуги</h5>
		<p class="top-buffer">Это текст. Нажмите здесь, чтобы отредактировать его и добавить свой текст. Сделать это просто: нажмите «Редактировать текст» либо дважды нажмите на сам текст – и можете вставлять свое содержимое и задавать шрифт.</p>
		<p>Здесь замечательно будет смотреться длинный текст о вашей компании и тех услугах, которые вы предоставляете. Все это место можно использовать, чтобы более подробно описать вашу компанию.</p>
		<p> 
			<a class="btn btn-primary btn-black" href="#" role="button">Подробнее</a>
		</p>
	</div>
	<div class="col-lg-4 kons-banner">
		<h5>Запишитесь</h5>
		<h6>на бесплатную консультацию</h6>
		<p class="tel"><?php echo __(Config::getSiteParam('site_tel')) ?></p>
		<?php echo __(Config::getSiteParam('site_addr')) ?>
		<p>EMAIL: <?php echo __(Config::getSiteParam('site_email')) ?></p>
	</div>
</div>

<div class="row main-row">
	<div class="col-lg-8">
		<h5 class="sub-h5">Новости и публикации</h5>
		<div class="main-new-block">
			<div class="left-block">
				<img src="/uploads/news/new1.jpg"/>
			</div>
			<div class="right-block">
				<p class="date-block">25.10.2023</p>
				<div>
					<p>Это текст. Нажмите здесь, чтобы отредактировать его и добавить свой текст. Сделать это просто: нажмите «Редактировать текст» либо дважды нажмите на сам текст – и можете вставлять свое содержимое и задавать шрифт. Если хотите, его можно перетащить в любое место на странице. Это место отлично подходит, чтобы рассказать пользователям о себе.</p>
				</div>
				<p class="read-more-wrap">
					<a href="#" class="main-read-more">Подробнее ...</a>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="main-new-block">
			<div class="left-block">
				<img width="130px" src="/uploads/news/new2.jpg"/>
			</div>
			<div class="right-block">
				<p class="date-block">25.10.2023</p>
				<div class="text-block">
					<p>Это текст. Нажмите здесь, чтобы отредактировать его и добавить свой текст. Сделать это просто: нажмите «Редактировать текст» либо дважды нажмите на сам текст – и можете вставлять свое содержимое и задавать шрифт. Если хотите, его можно перетащить в любое место на странице. Это место отлично подходит, чтобы рассказать пользователям о себе.</p>
				</div>
				<p class="read-more-wrap">
					<a href="#" class="main-read-more">Подробнее ...</a>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>	
	<div class="col-lg-4">
		<h5 class="sub-h5">Отрасли</h5>
		<ul class="list-unstyled branches-list">
			<li>Трудовое право​</li>
			<li>Семейное право​</li>
			<li>Уголовное право​</li>
			<li>Финансовое право</li>
			<li>Составление актов</li>
			<li>Жилищное право​</li>
			<li>Услуги нотариуса</li>
		</ul>
	</div>	
</div>