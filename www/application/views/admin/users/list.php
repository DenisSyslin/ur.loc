<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div id="container">
    <div class="container">
        <div class="row title">
	        <div class="span12">
                <h1 class="pull-left"><?php echo __('Список пользователей') ?></h1>
                <a class="btn btn-success pull-right"
                   href="<?php echo URL::site('/admin/users/new') ?>"><i class="icon-plus"></i> <?php echo __('Новый') ?></a>
	        </div>
        </div>

	    <?php if ($message) : ?>
	        <div class="row">
		        <div class="span12">
                    <div class="alert alert-<?php echo $message_type ?>">
                        <a href="#" class="close" data-dismiss="alert">×</a>
				        <?php echo $message ?>
                    </div>
		        </div>
	        </div>
	    <?php endif; ?>

	    <div class="row">
		    <div class="span12">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
						<tr>
							<th><?php echo __('ID') ?></th>
							<th><?php echo __('Имя пользователя') ?></th>
							<th><?php echo __('Email') ?></th>
							<th><?php echo __('Логин') ?></th>
							<th><?php echo __('Последний вход') ?></th>
							<th><?php echo __('Действия') ?></th>
						</tr>
                    </thead>

                    <tbody>
				        <?php if ($items -> count()) : ?>
						    <?php foreach ($items as $item) : ?>
	                        <tr>
	                            <td><?php echo $item -> id ?></td>
	                            <td><?php echo $item -> username ?></td>
	                            <td><?php echo $item -> email ?></td>
	                            <td><?php echo $item -> logins ?></td>
	                            <td>
									<?php if (date('Y-m-d', $item -> last_login) < '2015-06-30') : ?>
										Входа еще не было
									<?php else: ?>
										<?php echo date('Y-m-d H:i:s', $item -> last_login) ?>
									<?php endif; ?>
								</td>
	                            <td class="actions">
		                            <div class="btn-group">
		                                <a class="btn" href="<?php echo URL::site('admin/users/delete/' . $item -> id) ?>">
											<i class="icon-remove"></i> <?php echo __('Удалить') ?>
										</a>
		                                <a class="btn btn-primary" href="<?php echo URL::site('admin/users/edit/' . $item -> id) ?>">
											<i class="icon-edit"></i> <?php echo __('Редактировать') ?>
										</a>
                                    </div>
	                            </td>
	                        </tr>
						    <?php endforeach; ?>
					    <?php else: ?>
		                    <tr>
		                        <td colspan="6"><?php echo __('Нет данных') ?></td>
		                    </tr>
					    <?php endif; ?>
                    </tbody>

                    <tfoot>
	                    <tr>
	                        <td colspan="5"><?php echo $pagination ?></td>
	                        <td class="cell-middle"><?php echo __('Всего: :count', array(':count' => $pagination -> total_items)) ?></td>
	                    </tr>
                    </tfoot>
                </table>
            </div>
	    </div>
    </div>
</div>

 