<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="panel panel-default content-wrap">
    <?php echo View::factory('default/block/header', array('slogan' => $slogan)) ?>
	<form class="form-horizontal" action="" method="post" id="contact_form">
	
		<!-- Success message -->
		<!--<div class="alert alert-success" role="alert" id="success_message">Спасибо за интерес проявленный к нашей компании. Мы свяжемся с вами в ближайшее время.</div>-->
	
		<div class="form-group">
			<label class="col-md-3 control-label">Ваше ФИО</label>  
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input  name="name" placeholder="Ваше ФИО" class="form-control" type="text"/>
				</div>
			</div>
		</div>
	
		<div class="form-group">
			<label class="col-md-3 control-label">Ваш email</label>  
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
					<input name="email" placeholder="Ваш email" class="form-control" type="text"/>
				</div>
			</div>
		</div>
	
		<div class="form-group">
			<label class="col-md-3 control-label">Сообщение</label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
					<textarea rows="6" class="form-control" name="comment" placeholder="Сообщение"></textarea>
				</div>
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