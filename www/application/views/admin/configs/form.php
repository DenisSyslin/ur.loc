<?php defined('SYSPATH') or die('No direct script access.'); ?>
<form action="<?php echo URL::site('/admin/configs/save') ?>" method="post" name="config-form" class="config-form">
    <div class="row">
		<div class="span9">
	        <fieldset>
	            <legend><?php echo __('Основное') ?></legend>
                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'config_key')) : ?> error<?php endif; ?>">
		            <label for="config_key" class="control-label"><?php echo __('Ключ') ?>:</label>
	                <div class="controls">
	                    <input type="text" name="config_key" id="config_key" value="<?php echo Arr::get($item, 'config_key') ?>"/>
						<?php if (!empty($errors) AND Arr::get($errors, 'config_key')) : ?>
							<div class="help-block"><?php echo Arr::get($errors, 'config_key') ?></div>
						<?php endif; ?>
	                </div>
	            </div>

                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'config_ru_key')) : ?> error<?php endif; ?>">
		            <label for="config_ru_key" class="control-label"><?php echo __('Имя (по русски)') ?>:</label>
	                <div class="controls">
	                    <input type="text" name="config_ru_key" id="config_ru_key" value="<?php echo Arr::get($item, 'config_ru_key') ?>"/>
						<?php if (!empty($errors) AND Arr::get($errors, 'config_ru_key')) : ?>
							<div class="help-block"><?php echo Arr::get($errors, 'config_ru_key') ?></div>
						<?php endif; ?>
	                </div>
	            </div>

                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'config_value')) : ?> error<?php endif; ?>">
		            <label for="config_value" class="control-label"><?php echo __('Значение') ?>:</label>
	                <div class="controls">
	                    <input type="text" name="config_value" id="config_value" value="<?php echo Arr::get($item, 'config_value') ?>"/>
						<?php if (!empty($errors) AND Arr::get($errors, 'config_value')) : ?>
							<div class="help-block"><?php echo Arr::get($errors, 'config_value') ?></div>
						<?php endif; ?>
	                </div>
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