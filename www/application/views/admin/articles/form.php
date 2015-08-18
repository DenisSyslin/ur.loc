<?php defined('SYSPATH') or die('No direct script access.'); ?>
<form action="<?php echo URL::site('/admin/articles/save') ?>" method="post" name="role-form" class="role-form">
    <div class="row">
		<div class="span9">
	        <fieldset>
	            <legend><?php echo __('Основное') ?></legend>
				
                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'name')) : ?> error<?php endif; ?>">
		            <label for="name" class="control-label"><?php echo __('Имя статьи') ?>:</label>
	                <div class="controls">
	                    <input type="text" name="name" id="name" value="<?php echo Arr::get($item, 'name') ?>"/>
						<?php if (!empty($errors) AND Arr::get($errors, 'name')) : ?>
							<div class="help-block"><?php echo Arr::get($errors, 'name') ?></div>
						<?php endif; ?>
	                </div>
	            </div>

                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'title')) : ?> error<?php endif; ?>">
		            <label for="title" class="control-label"><?php echo __('Title окна') ?>:</label>
	                <div class="controls">
	                    <input type="text" name="title" id="title" value="<?php echo Arr::get($item, 'title') ?>"/>
						<?php if (!empty($errors) AND Arr::get($errors, 'title')) : ?>
							<div class="help-block"><?php echo Arr::get($errors, 'title') ?></div>
						<?php endif; ?>
	                </div>
	            </div>
				
                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'content')) : ?> error<?php endif; ?>">
			        <label for="content" class="control-label"><?php echo __('Контент') ?>:</label>
                    <div class="controls">
		                <textarea rows="3" name="content" id="content"><?php echo Arr::get($item, 'content') ?></textarea>
	                    <?php if (!empty($errors) AND Arr::get($errors, 'content')) : ?>
                            <div class="help-block"><?php echo Arr::get($errors, 'content') ?></div>
	                    <?php endif; ?>
	                </div>
	            </div>

		        <div class="control-group">
			        <label for="visible" class="control-label"><?php echo __('Видимость статьи') ?></label>
					<div class="controls">
						<?php
							$selected = '';
							$visible  = Arr::get($item, 'visible');
							if (!empty($visible)) {
								if ($visible == 'yes') {
									$selected = 'selected="selected"';
								}
							}
							else {
								$selected = 'selected="selected"';
							}
						?>
					    <input id="visible" type="checkbox" name="visible" value="yes" <?php echo $selected; ?>/>
					    <?php if (!empty($errors) AND Arr::get($errors, 'visible')) : ?>
							<div class="help-block"><?php echo Arr::get($errors, 'visible') ?></div>
						<?php endif; ?>
			        </div>
		        </div>

	        </fieldset>
	    </div>

	    <div class="span3">
	        <fieldset>
	            <legend><?php echo __('Параметры SEO') ?></legend>
		        				
                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'keywords')) : ?> error<?php endif; ?>">
		            <label for="keywords" class="control-label"><?php echo __('Ключевые слова (keywords)') ?>:</label>
	                <div class="controls">
	                    <input type="text" name="keywords" id="keywords" value="<?php echo Arr::get($item, 'keywords') ?>"/>
						<?php if (!empty($errors) AND Arr::get($errors, 'keywords')) : ?>
							<div class="help-block"><?php echo Arr::get($errors, 'keywords') ?></div>
						<?php endif; ?>
	                </div>
	            </div>
				
                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'description')) : ?> error<?php endif; ?>">
			        <label for="description" class="control-label"><?php echo __('Описание страницы (Description)') ?>:</label>
                    <div class="controls">
		                <textarea rows="3" name="description" id="description"><?php echo Arr::get($item, 'description') ?></textarea>
	                    <?php if (!empty($errors) AND Arr::get($errors, 'description')) : ?>
                            <div class="help-block"><?php echo Arr::get($errors, 'description') ?></div>
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