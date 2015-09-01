<?php defined('SYSPATH') or die('No direct script access.'); ?>
<form action="<?php echo URL::site('/admin/pages/save') ?>" method="post" name="role-form" class="role-form">
    <div class="row">
		<div class="span9">
	        <fieldset>
	            <legend><?php echo __('Основное') ?></legend>
				
                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'type')) : ?> error<?php endif; ?>">
		            <label for="type" class="control-label"><?php echo __('Тип страницы') ?>:</label>
	                <div class="controls">
						<?php $type = Arr::get($item, 'type'); ?>
						<select name="type" id="type" class="span7">
							<option <?php if (empty($type))        : echo 'selected="selected"'; endif;?> value="0">Выберите</option>
							<option <?php if ($type == 'main')     : echo 'selected="selected"'; endif;?> value="main">Главная</option>
							<option <?php if ($type == 'articles') : echo 'selected="selected"'; endif;?> value="articles">Аналитика</option>
							<option <?php if ($type == 'news')     : echo 'selected="selected"'; endif;?> value="news">Новости</option>
							<option <?php if ($type == 'help')     : echo 'selected="selected"'; endif;?> value="help">Помощь</option>
							<option <?php if ($type == 'about')    : echo 'selected="selected"'; endif;?> value="about">О нас</option>
						</select>
						<?php if (!empty($errors) AND Arr::get($errors, 'type')) : ?>
							<div class="help-block"><?php echo Arr::get($errors, 'type') ?></div>
						<?php endif; ?>
	                </div>
	            </div>

                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'title')) : ?> error<?php endif; ?>">
		            <label for="title" class="control-label"><?php echo __('Title окна') ?>:</label>
	                <div class="controls">
	                    <input type="text" name="title" id="title" class="span7" value="<?php echo str_replace('"', '&quot;', Arr::get($item, 'title')) ?>"/>
						<?php if (!empty($errors) AND Arr::get($errors, 'title')) : ?>
							<div class="help-block"><?php echo Arr::get($errors, 'title') ?></div>
						<?php endif; ?>
	                </div>
	            </div>
				
                <div class="control-group<?php if (!empty($errors) AND Arr::get($errors, 'content')) : ?> error<?php endif; ?>">
			        <label for="content" class="control-label"><?php echo __('Контент') ?>:</label>
                    <div class="controls">
		                <?php echo $contentAria; ?>
	                    <?php if (!empty($errors) AND Arr::get($errors, 'content')) : ?>
                            <div class="help-block"><?php echo Arr::get($errors, 'content') ?></div>
	                    <?php endif; ?>
	                </div>
	            </div>

		        <div class="control-group">
					<?php
						$checked = '';
						$visible = Arr::get($item, 'visible');

						if (!empty($visible)) {
							if ($visible == 'yes') {
								$checked = 'checked="checked"';
							}
						}
						else {
							$checked = 'checked="checked"';
						}
					?>
					<label class="checkbox inline">
						<input type="checkbox" name="visible" value="yes" <?php echo $checked; ?>/><?php echo __('Видимость страницы') ?>
					    <?php if (!empty($errors) AND Arr::get($errors, 'visible')) : ?>
							<div class="help-block"><?php echo Arr::get($errors, 'visible') ?></div>
						<?php endif; ?>
					</label>
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