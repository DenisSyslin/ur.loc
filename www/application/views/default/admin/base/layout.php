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
		<link type="text/css"  rel="stylesheet"    href="/asserts/default/css/admin.css" media="all" />
        
		<!-- Twitter Bootstrap -->
        <link type="text/css" rel="stylesheet"     href="/asserts/default/bootstrap-old/css/bootstrap.min.css" media="all" />
		
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
        <script type="text/javascript" src="/asserts/default/js/admin.js"></script>
    </body>
</html>