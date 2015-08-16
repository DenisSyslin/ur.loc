<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div id="container">
	<div id="content" class="container">
		<div class="row">
            <div class="span12">
                <h1><?php echo __('Панель управления') ?></h1>
                <div class="row-fluid">
                    <div class="span3">
                        <h3><?php echo __('Безопасность') ?></h3>
                        <table class="dashboard">
                            <tr>
                                <td><img src="<?php echo URL::site('/asserts/default/images/security.png') ?>" alt=""/></td>
                                <td>
									<i class="icon-user"></i><a href="<?php echo URL::site('/admin/users') ?>"><?php echo __('Список пользователей') ?></a><br/>
                                    <i class="icon-plus"></i><a href="<?php echo URL::site('/admin/users/new') ?>"><?php echo __('Новый пользователь') ?></a><br/>
                                    <i class="icon-film"></i><a href="<?php echo URL::site('/admin/roles') ?>"><?php echo __('Список Ролей') ?></a><br/>
                                    <i class="icon-plus"></i><a href="<?php echo URL::site('/admin/roles/new') ?>"><?php echo __('Новая роль') ?></a>
								</td>
                            </tr>
                        </table>
                    </div>
                    <div class="span3">
                        <h3><?php echo __('Тэги') ?></h3>
                        <table class="dashboard">
                            <tr>
                                <td><img src="<?php echo URL::site('/asserts/default/images/tag.png') ?>" alt=""/></td>
                                <td>
									<i class="icon-tag"></i><a href="<?php echo URL::site('/admin/tags') ?>"><?php echo __('Список тэгов') ?></a><br/>
                                    <i class="icon-plus"></i><a href="<?php echo URL::site('/admin/tags/new') ?>"><?php echo __('Новый тэг') ?></a><br/>
								</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>

 