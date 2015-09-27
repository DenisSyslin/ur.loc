<?php defined('SYSPATH') or die('No direct script access.');?>

<?php echo View::factory($TMP_PATH . '/block/carousel'); ?>

<div class="row main-row">
	<?php foreach($otherPages as $item) : ?>
		<div class="col-lg-4">
			<h5 class="sub-h5"><?php echo $item[ 'title' ]; ?></h5>
			<div class="top-buffer">
				<?php $content = explode(Config::getSiteParam('pagebreak'), $item[ 'content' ]); ?>
				<?php echo current($content); ?>
			</div>
			<p><a class="btn btn-primary btn-black" href="<?php echo URL::site('pages/show/' . $item[ 'id' ]) ?>" role="button">Подробнее</a></p>
		</div>
	<?php endforeach; ?>
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
		<h5 class="sub-h5">Новости</h5>
		<?php if (!empty($lastNews)) : ?>
			<?php foreach($lastNews as $item) : ?>
				<div class="main-new-block">
					<h4 class="h4">
						<a href="<?php echo URL::site('news/show/' . $item[ 'id' ]) ?>" title="<?php echo $item[ 'name' ]; ?>"><?php echo $item[ 'name' ]; ?></a>
					</h4>
					<small><?php echo Date::formatted_time($item[ 'created' ], 'd-m-Y H:i'); ?></small>
					<article>
						<?php $content = explode(Config::getSiteParam('pagebreak'), $item[ 'content' ]); ?>
						<?php echo current($content); ?>
						<p class="read-more-wrap">
							<a href="<?php echo URL::site('news/show/' . $item[ 'id' ]) ?>" class="main-read-more">Подробнее ...</a>
						</p>
						<div class="clearfix"></div>
					</article>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
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