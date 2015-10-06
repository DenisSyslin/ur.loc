<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo strip_tags(Config::getSiteParam('site_name')) . '::' . (isset($pagetitle) ? $pagetitle : '') ;  ?></title>

        <!-- Base URL -->
        <base href="<?php echo URL::base(true, false) ?>">
		
        <!-- System -->
        <meta name="author"  content="<?php echo isset($author) ? $author : Arr::path($config, 'blog.author') ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="image/png" rel="shortcut icon" href="/favicon.png" />
        
		<!-- Twitter Bootstrap -->
        <link type="text/css" rel="stylesheet"     href="/asserts/default/bootstrap-old/css/bootstrap.min.css" media="all" />

		<?php if (!empty($styles)) : ?>
			<?php foreach ($styles as $style) : ?>
				<?php if ($style[ 'isUrl' ]) : ?>
					<link href="<?php echo $style[ 'file' ]; ?>" type="text/css" rel="stylesheet" media="<?php echo $style[ 'media' ]; ?>" />
				<?php else: ?>
					<link href="/asserts/<?php echo Config::getSiteParam('site_template'); ?>/<?php echo $style[ 'file' ]; ?>" type="text/css" rel="stylesheet" media="<?php echo $style[ 'media' ]; ?>" />
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>
		
		<link type="text/css"  rel="stylesheet"    href="/asserts/default/css/admin.css" media="all" />
		
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script type="text/javascript" src="html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Template Content  -->
        <?php echo isset($content) ? $content : '' ?>

        <!-- JS Code -->
        <script type="text/javascript" src="/asserts/default/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="/asserts/default/bootstrap-old/js/bootstrap.min.js"></script>
		
		<?php if (!empty($scripts)) : ?>
			<?php foreach ($scripts as $script) : ?>
				<?php if ($script[ 'isUrl' ]) : ?>
					<script type="text/javascript" src="<?php echo $script[ 'file' ]; ?>"></script>
				<?php else: ?>
					<script type="text/javascript" src="/asserts/<?php echo Config::getSiteParam('site_template'); ?>/<?php echo $script[ 'file' ]; ?>"></script>
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>
		
        <script type="text/javascript" src="/asserts/default/js/admin.js"></script>
    </body>
</html>