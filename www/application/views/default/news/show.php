<?php defined('SYSPATH') or die('No direct script access.');?>
<?php echo View::factory($TMP_PATH . '/block/header', array('slogan' => $slogan)); ?>
<div id="item-wrap">
	<small><?php echo Date::formatted_time($item[ 'created' ], 'd-m-Y H:i'); ?></small>
	<article>
		<?php echo $item[ 'content' ]; ?>
		<div class="clearfix"></div>
	</article>
</div>