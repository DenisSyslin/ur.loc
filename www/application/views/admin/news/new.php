<?php defined('SYSPATH') or die('No direct script access.');?>

<div id="container">
    <div class="container">
        <div class="row title">
            <div class="span12">
                <h1 class="pull-left"><?php echo __('Новая новость') ?></h1>
            </div>
		</div>
		<?php echo View::factory('admin/news/form', array('item' => $item)) ?>
    </div>
</div>

 