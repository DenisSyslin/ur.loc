<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo (isset($pagetitle) ? $pagetitle : '') ;  ?></title>

        <!-- Base URL -->
        <base href="<?php echo URL::base(true, false) ?>">
        <link rel="shortcut icon" href="/favicon.png" type="image/png"/>

        <!-- System -->
        <meta name="author" content="Денис Суслин (programist1985@gmail.com)" />
        <meta name="description" content="<?php echo isset($description) ? $description : ''; ?>" />
        <meta name="keywords" content="<?php echo isset($keywords) ? $keywords : ''; ?>" />
		
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<!-- Twitter Bootstrap -->
        <link href="/asserts/<?php echo $TMP_PATH; ?>/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all" />
        <link href="/asserts/<?php echo $TMP_PATH; ?>/bootstrap/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" media="all" />
		
		<?php if (!empty($styles)) : ?>
			<?php foreach ($styles as $style) : ?>
				<?php if ($style[ 'isUrl' ]) : ?>
					<link href="<?php echo $style[ 'file' ]; ?>" type="text/css" rel="stylesheet" media="<?php echo $style[ 'media' ]; ?>" />
				<?php else: ?>
					<link href="/asserts/<?php echo $TMP_PATH; ?>/<?php echo $style[ 'file' ]; ?>" type="text/css" rel="stylesheet" media="<?php echo $style[ 'media' ]; ?>" />
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>
		
		<link href="/asserts/<?php echo $TMP_PATH; ?>/css/style.css" type="text/css" rel="stylesheet" media="all" />
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script type="text/javascript" src="html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body>
	
		<header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<section class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Меню</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1>
						<a class="navbar-brand" href="/">
							<?php echo __(Config::getSiteParam('site_name')) ?>
						</a>
					</h1>	
				</div>
				<?php echo isset($menu) ? $menu : '' ?>
			</section>
		</header>

		<section class="main-container container">

			<?php echo isset($content) ? $content : '' ?>

		</section> 

		<?php echo isset($footer) ? $footer : '' ?>

        <!-- JS Code -->
        <script type="text/javascript" src="/asserts/<?php echo $TMP_PATH; ?>/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="/asserts/<?php echo $TMP_PATH; ?>/bootstrap/js/bootstrap.min.js"></script>
		
		<?php if (!empty($scripts)) : ?>
			<?php foreach ($scripts as $script) : ?>
				<?php if ($script[ 'isUrl' ]) : ?>
					<script type="text/javascript" src="<?php echo $script[ 'file' ]; ?>"></script>
				<?php else: ?>
					<script type="text/javascript" src="/asserts/<?php echo $TMP_PATH; ?>/<?php echo $script[ 'file' ]; ?>"></script>
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>
		
        <script type="text/javascript" src="/asserts/<?php echo $TMP_PATH; ?>/js/custom.js"></script>
		
    </body>
</html>