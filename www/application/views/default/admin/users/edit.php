<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div id="container">
    <div class="container">
        <div class="row title">
			<div class="span12">
                <h1 class="pull-left"><?php echo __('Редактировать пользователя :user', array(':user' => Arr::get($item, 'username'))) ?></h1>
			</div>
        </div>
        <?php echo View::factory('default/admin/users/form', array('item' => $item, 'roles' => $roles)) ?>
    </div>
</div>