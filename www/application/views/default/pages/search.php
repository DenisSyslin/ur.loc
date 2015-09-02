<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo View::factory($TMP_PATH . '/block/header', array('slogan' => $slogan)); ?>

<div class="row">
	<p><?php echo $searchWord; ?></p>
</div>
