<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div id="container">
    <div class="container">
        <div class="row title">
			<div class="span12">
				<h1 class="pull-left"><?php echo __('Редактировать роль: :role', array(':role' => Arr::get($item, 'name'))) ?></h1>
			</div>
        </div>
        <?php echo View::factory('default/admin/roles/form', array('item' => $item)) ?>
    </div>
</div>