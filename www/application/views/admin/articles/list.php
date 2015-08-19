<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div id="container">
    <div class="container">
        <div class="row title">
	        <div class="span12">
                <h1 class="pull-left"><?php echo __('Список статей') ?></h1>
                <a class="btn btn-success pull-right"
                   href="<?php echo URL::site('/admin/articles/new') ?>"><i class="icon-plus"></i> <?php echo __('Новая') ?></a>
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
                <table class="table table-bordered table-hover table-hover">
                    <thead>
                    <tr>
                        <th><?php echo __('ID') ?></th>
                        <th><?php echo __('Имя') ?></th>
                        <th><?php echo __('Дата создания') ?></th>
                        <th><?php echo __('Видимость') ?></th>
                        <th><?php echo __('Действия') ?></th>
                    </tr>
                    </thead>

                    <tbody>
				        <?php if (!empty($items)) : ?>
						    <?php foreach ($items as $item) : ?>
	                        <tr>
	                            <td><?php echo $item[ 'id' ] ?></td>
	                            <td><?php echo $item[ 'name' ] ?></td>
	                            <td><?php echo $item[ 'created' ]; ?></td>
	                            <td>
									<div class="btn-group">
										<?php if ($item[ 'visible' ] == 'yes'): ?>
											<a href="#" class="btn btn-success btn-lg"><span class="icon-white icon-ok"></span> </a>
										<?php else: ?>
											<a href="#" class="btn btn-danger btn-lg"><span class="icon-white icon-remove"></span> </a>
										<?php endif; ?>
									</div>

								</td>
	                            <td class="actions">
		                            <div class="btn-group">
		                                <a class="btn" href="<?php echo URL::site('admin/articles/delete/' . $item[ 'id' ]) ?>">
											<i class="icon-remove"></i> <?php echo __('Удалить') ?>
										</a>
		                                <a class="btn btn-primary" href="<?php echo URL::site('admin/articles/edit/' . $item[ 'id' ]) ?>">
											<i class="icon-edit"></i> <?php echo __('Редактировать') ?>
										</a>
                                    </div>
	                            </td>
	                        </tr>
						    <?php endforeach; ?>
					    <?php else: ?>
		                    <tr>
		                        <td colspan="5"><?php echo __('Нет статей') ?></td>
		                    </tr>
					    <?php endif; ?>
                    </tbody>

                    <tfoot>
	                    <tr>
	                        <td colspan="4"><?php echo $pagination ?></td>
	                        <td class="cell-middle"><?php echo __('Total: :count', array(':count' => $pagination -> total_items)) ?></td>
	                    </tr>
                    </tfoot>
                </table>
            </div>
	    </div>
    </div>
</div>

 