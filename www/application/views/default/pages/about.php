<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo View::factory($TMP_PATH . '/block/header', array('slogan' => $slogan)); ?>


<div class="row">
	<div class="col-lg-8">
		<h5 class="sub-h5">История</h5>
		<div class="page-text">
			<p>С 2005 года портал Предание.ру помогает людям познакомиться со Словом Божьим, с творениями подвижников и мыслителей прошлого и современности. Важным двигателем нашей работы является желание поделиться с вами теми замечательными материалами, которые мы для себя открыли. Мы постоянно пополняем библиотеку, аудио и видеоархивы новыми материалами. </p>
			<p>Четыре года назад на нашем портале мы начали собирать средства для нуждающихся в помощи людей. Тогда же мы зарегистрировали благотворительный фонд «Предание». Согласно уставу фонда, мы помогаем людям независимо от гражданства, возраста, вероисповедания и той беды, которая с ними случилась, будь это болезнь близкого человека, наводнение, пожар, тяжелые жилищные условия или что-либо другое. Мы оказываем адресную конкретную помощь и постоянно публикуем отчеты о каждом потраченном на это дело рубле. Подробнее о принципах нашей работы можно узнать в разделе "о фонде". </p>
		</div>
		<h5 class="sub-h5">Адрес:</h5>
		<div class="office-addr">
			<?php echo __(Config::getSiteParam('site_addr')) ?>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d17966.06944663023!2d37.6101494!3d55.7453218!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54af8c2f06081%3A0x3be2800b2c66b8b3!2z0JHQsNC70YfRg9CzINCf0LvQsNC30LAsINGD0LsuINCR0LDQu9GH0YPQsywgNywg0JzQvtGB0LrQstCwLCAxMTUwMzU!5e0!3m2!1sru!2sru!4v1441026979249" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="col-lg-4">
		<h5 class="sub-h5 color_17">Телефон:</h5>
		<p class="about-tel color_17"><?php echo __(Config::getSiteParam('site_tel')) ?></p>
		<form class="form-horizontal" action="" method="post" id="contact_form">
			
			<!-- Success message -->
			<?php if (!empty($message) and $message_type == 'success') : ?>
				<div class="alert alert-success" role="alert" id="success_message"><?php echo $message; ?></div>
			<?php endif; ?>	
		
			<div class="form-group">
				<div class="col-md-12 inputGroupContainer">
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
				<div class="col-md-12 inputGroupContainer">
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
				<div class="col-md-12 inputGroupContainer">
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
					<button type="submit" class="btn btn-primary btn-black">Отправить</button>
				</div>
			</div>
		
		</form>
	</div>
</div>
