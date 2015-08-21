<?php defined('SYSPATH') or die('No direct script access.'); ?>
<form action="<?php echo URL::site('/admin/users/save') ?>" method="post" class="ctrl-s-form">
    <div class="row">
		<div class="span9">
	        <fieldset>
	            <legend><?php echo __('Основное') ?></legend>

                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'username')) : ?> error<?php endif; ?>">
		            <label for="username" class="control-label"><?php echo __('Имя пользователя') ?>:</label>
	                <div class="controls">
	                    <input type="text" name="username" class="span7" id="username" value="<?php echo Arr::get($item, 'username') ?>"/>
						<?php if (!empty($errors) AND Arr::get($errors, 'username')) : ?>
							<div class="help-block"><?php echo Arr::get($errors, 'username') ?></div>
						<?php endif; ?>
	                </div>
	            </div>

                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'email')) : ?> error<?php endif; ?>">
			        <label for="email" class="control-label"><?php echo __('Email') ?>:</label>
                    <div class="controls">
		                <input type="text" name="email" class="span7" id="email" value="<?php echo Arr::get($item, 'email') ?>"/>
	                    <?php if (!empty($errors) AND Arr::get($errors, 'email')) : ?>
                            <div class="help-block"><?php echo Arr::get($errors, 'email') ?></div>
	                    <?php endif; ?>
	                </div>
	            </div>

                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'password')) : ?> error<?php endif; ?>">
		            <label for="password" class="control-label"><?php echo __('Пароль') ?>:</label>
                    <div class="controls">
		                <input type="password" name="password" class="span7" id="password"/>
	                    <?php if (!empty($errors) AND Arr::get($errors, 'password')) : ?>
                            <div class="help-block"><?php echo Arr::get($errors, 'password') ?></div>
	                    <?php endif; ?>
                    </div>
                </div>

                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'password_confirm')) : ?> error<?php endif; ?>">
		            <label for="password_confirm" class="control-label"><?php echo __('Подтверждение пароля') ?>:</label>
                    <div class="controls">
		                <input type="password" name="password_confirm" class="span7" id="password_confirm"/>
	                    <?php if (!empty($errors) AND Arr::get($errors, 'password_confirm')) : ?>
                            <div class="help-block"><?php echo Arr::get($errors, 'password_confirm') ?></div>
	                    <?php endif; ?>
                    </div>
                </div>
	        </fieldset>
	    </div>
	    <div class="span3">
	        <fieldset>
	            <legend><?php echo __('Доступ') ?></legend>
		        <div class="control-group">
			        <label class="control-label"><?php echo __('Роли') ?></label>
					<?php foreach ($roles as $role) : ?>
					    <label class="checkbox">
							<?php echo $role -> name ?>
					        <input id="role<?php echo $role -> id ?>" type="checkbox" name="roles[]" value="<?php echo $role -> id ?>"
								<?php if (!empty($item[ 'roles' ]) AND in_array($role -> id, $item[ 'roles' ])) : ?> checked="checked" <?php endif ?>/>
					    </label>
			        <?php endforeach; ?>
		        </div>
	        </fieldset>
	    </div>
	</div>
	<div class="row">
		<div class="span12 form-actions">
            <div class="pull-right">
                <input type="submit" name="back" class="btn" value="<?php echo __('Назад') ?>" />
                <input type="submit" name="save" class="btn btn-primary" value="<?php echo __('Сохранить') ?>" />
            </div>
		</div>
        <input type="hidden" name="id" value="<?php echo Arr::get($item, 'id') ?>"/>
	</div>
</form>