<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo View::factory($TMP_PATH . '/block/header', array('slogan' => $slogan)); ?>
<div class="row">
	<div class="col-lg-8">
		<h5 class="sub-h5">История</h5>
		<div class="page-text"><?php echo $text; ?></div>
		<h5 class="sub-h5">Платежные системы</h5>
		<img src="/asserts/default/images/sistemi.png" style="max-width: 640px">
	</div>
	<div class="col-lg-4">
		<h5 class="sub-h5">Реквизиты</h5>
		<p class="bold">Назначение платежа:</p>
		<p>&quot;Пожертвование согласно ст.582 ГК РФ на уставную деятельность. Без налога (НДС).&quot;</p>
		<p class="bold">Получатель:</p>
		<p>Региональный благотворительный общественный фонд содействия духовному развитию общества &quot;Предание&quot;.</p>
		<p>Р/с: 40703 81040 00000 04744</p>
		<p>ИНН: 7706413901</p>
		<p>КПП: 770901001</p>
		<p>ОГРН: 1087799040383</p>
		<p>Название банка: ВТБ 24 (ПАО)</p>
		<p>К/с: 30101 81010 00000 00716</p>
		<p>БИК: 044525716</p>
	</div>
</div>