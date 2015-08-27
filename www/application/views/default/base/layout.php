<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * @var array       $config      Global blog configuration
	 * @var string      $title       Page Title
	 * @var string      $author      Material author
	 * @var string      $description Meta description tag content
	 * @var string      $keywords    Meta keywords tag content
	 * @var string|View $content     Page content
	 *
	 * @author     Syslin Denis <syslin@vand.ru>
	 * @copyright  Copyrights (c) 2015 Syslin Denis
	 */
 
?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo (isset($pagetitle) ? $pagetitle : '') ;  ?></title>

        <!-- Base URL -->
        <base href="<?php echo URL::base(true, false) ?>">
        <link rel="shortcut icon" href="/favicon.png" type="image/png"/>

        <!-- System -->
        <meta name="author" content="<?php echo isset($author) ? $author : Arr::path($config, 'blog.author') ?>" />
        <meta name="description" content="<?php echo isset($description) ? $description : Arr::path($config, 'blog.description') ?>" />
        <meta name="keywords" content="<?php echo isset($keywords) ? $keywords : Arr::path($config, 'blog.keywords') ?>" />
		
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

		<section id="wrapper" class="container">
			<?php echo isset($menu) ? $menu : '' ?>

			<?php echo isset($content) ? $content : '' ?>

			<?php echo isset($footer) ? $footer : '' ?>

		</section> 

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