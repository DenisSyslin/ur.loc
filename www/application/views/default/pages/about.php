<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="panel panel-default content-wrap">
    <?php echo View::factory('default/block/header', array('slogan' => $slogan)) ?>
	<form class="form-horizontal" action="" method="post" id="contact_form">
		
		<!-- Success message -->
		<?php if (!empty($message) and $message_type == 'success') : ?>
			<div class="alert alert-success" role="alert" id="success_message"><?php echo $message; ?></div>
		<?php endif; ?>	
	
		<div class="form-group">
			<label class="col-md-3 control-label">Ваше ФИО</label>  
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" name="name" class="form-control" value="<?php echo Arr::get($item, 'name') ?>" placeholder="Ваше ФИО"/>
				</div>
				<?php if (!empty($errors) AND Arr::get($errors, 'name')) : ?>
					<p class="text-danger">
						<i class="glyphicon glyphicon-asterisk"></i>&nbsp;
						<?php echo Arr::get($errors, 'name') ?>
					</p>
				<?php endif; ?>				
			</div>
		</div>
	
		<div class="form-group">
			<label class="col-md-3 control-label">Ваш email</label>  
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
					<input name="email" type="text" class="form-control" value="<?php echo Arr::get($item, 'email') ?>" placeholder="Ваш email"/>
				</div>
				<?php if (!empty($errors) AND Arr::get($errors, 'email')) : ?>
					<p class="text-danger">
						<i class="glyphicon glyphicon-asterisk"></i>&nbsp;
						<?php echo Arr::get($errors, 'email') ?>
					</p>
				<?php endif; ?>
			</div>
		</div>
	
		<div class="form-group">
			<label class="col-md-3 control-label">Сообщение</label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
					<textarea rows="6" class="form-control" name="comment" placeholder="Сообщение">
						<?php echo Arr::get($item, 'comment') ?>
					</textarea>
				</div>
				<?php if (!empty($errors) AND Arr::get($errors, 'comment')) : ?>
					<p class="text-danger">
						<i class="glyphicon glyphicon-asterisk"></i>&nbsp;
						<?php echo Arr::get($errors, 'comment') ?>
					</p>
				<?php endif; ?>
			</div>
		</div>
	
		<!-- Button -->
		<div class="form-group">
			<label class="col-md-3 control-label"></label>
			<div class="col-md-6"> 
				<button type="submit" class="btn btn-default" >Отправить</button>
			</div>
		</div>
	
	</form>
</div>