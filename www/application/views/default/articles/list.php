<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo View::factory($TMP_PATH . '/block/header', array('slogan' => $slogan)); ?>
<div id="list-wrap">
	<?php if (!empty($items)) : ?>
		
		<?php foreach($items as $item) : ?>
			<div class="list-item">
				<h4 class="h4">
					<a href="<?php echo URL::site('articles/show/' . $item[ 'id' ]) ?>" title="<?php echo $item[ 'name' ]; ?>"><?php echo $item[ 'name' ]; ?></a>
				</h4>
				<small><?php echo Date::formatted_time($item[ 'created' ], 'd-m-Y H:i'); ?></small>
				<article>
					<?php $content = explode('<div style="page-break-after: always;"><span style="display: none;">&nbsp;</span></div>', $item[ 'content' ]); ?>
					<?php echo current($content); ?>
					<div class="clearfix"></div>
				</article>
			</div>
			<hr/>
		<?php endforeach; ?>

	<?php endif; ?>
</div>
<?php echo $pagination ?> 