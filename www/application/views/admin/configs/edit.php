<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div id="container">
    <div id="content" class="container">
        <div class="row title">
			<div class="span12">
				<h1 class="pull-left"><?php echo __('Редактировать параметр: :config', array(':config' => Arr::get($item, 'name'))) ?></h1>
			</div>
        </div>
        <?php echo View::factory('admin/configs/form', array('item' => $item)) ?>
    </div>
</div>