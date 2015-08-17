<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
	        <div class="row">
		        <div class="span12">
                    <a class="brand" href="<?php echo URL::site('/admin') ?>"><?php echo __(Config::getSiteParam('site_name')) ?></a>

                    <ul class="nav">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Безопасность <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="<?php echo URL::site('/admin/users') ?>"><i class="icon-user"></i> <?php echo __('Список пользователей') ?></a></li>
                                <li><a href="<?php echo URL::site('/admin/users/new') ?>"><i class="icon-plus"></i> <?php echo __('Новый пользователь') ?></a></li>
                                <li><a href="<?php echo URL::site('/admin/roles') ?>"><i class="icon-film"></i> <?php echo __('Список Ролей') ?></a></li>
                                <li><a href="<?php echo URL::site('/admin/roles/new') ?>"><i class="icon-plus"></i> <?php echo __('Новая роль') ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Статьи <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="<?php echo URL::site('/admin/articles') ?>"><i class="icon-font"></i> <?php echo __('Список статей') ?></a></li>
                                <li><a href="<?php echo URL::site('/admin/articles/new') ?>"><i class="icon-plus"></i> <?php echo __('Добавить статью') ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Сайт <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="<?php echo URL::site('/admin/main') ?>"><i class="icon-cog"></i> <?php echo __('Содержимое главной') ?></a></li>
                                <li><a href="<?php echo URL::site('/admin/configs') ?>"><i class="icon-cog"></i> <?php echo __('Настройки') ?></a></li>
                            </ul>
                        </li>
                    </ul>
									
                    <div class="btn-group pull-right">
                        <a href="<?php echo URL::site('/admin/users/edit/' . $user -> id) ?>" class="btn">
                            <?php echo __('Вы вошли как: :user', array(':user' => $user -> username)) ?>
                        </a>
                        <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo URL::site('/admin/auth/logout') ?>"><i class="icon-off"></i> <?php echo __('Выход') ?></a></li>
                        </ul>
                    </div>
		        </div>
            </div>
        </div>
    </div>
</div>