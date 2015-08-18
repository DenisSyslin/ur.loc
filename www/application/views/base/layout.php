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

		<link href="/asserts/default/css/style.css" type="text/css" rel="stylesheet" media="all" />
		
		<!-- Twitter Bootstrap -->
        <link href="/asserts/default/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all" />
        <link href="/asserts/default/bootstrap/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" media="all" />
		
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script type="text/javascript" src="html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body>

		<!-- URL http://www.bootstrapzero.com/bootstrap-templates -->
		<div class="navbar navbar-default">
			<div class="container">
				<a class="navbar-brand" href="#">Brand</a>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li class="divider-vertical"></li>
					<li><a href="#">More</a></li>
					<li><a href="#">Options</a></li>
				</ul>
			</div>
		</div>

		<div class="container">
			<div class="jumbotron text-center">
				<h1>Fixed Width Layout</h1>
				<p class="lead">The Bootstrap 3 grid is fluid only. This example shows how to use a custom container to create a fixed width layout.</p>
				<p><a class="btn btn-large btn-success" href="http://bootply.com/tagged/bootstrap-3" target="ext">More Examples</a></p>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<h4>Mobile First</h4>
					<p>Responsive by default, and a clean "flat" design.</p>
					
					<h4>Powerful Grid</h4>
					<p>3 responsive grid sizes to control the grid layout on tiny, small and large displays.</p>
				</div>
			
				<div class="col-lg-6">
					<h4>New Elements</h4>
					<p>New panels, list groups, glyphicons and justified navigation.</p>
					
					<h4>Less Bloat</h4>
					<p>The optimized CSS is in a single file. Glyphicons are now separate.</p>
				</div>
			</div>

			<hr/>
			<div class="jumbotron text-center">
				<h2>Moving from Bootstrap 2.x to 3.0?</h2>
				<p class="lead">Everything has changed, so you can't just replace the 2.x with the 3.0 files. The folks at Bootply, the Bootstrap Playground have created a migration guide to help.</p>
				<p><a class="btn btn-large btn-success" href="http://www.bootply.com/bootstrap-3-migration-guide" target="ext">Migration Guide</a></p>
			</div>

		</div> 
		<!-- /container -->
        <!-- Template Content  -->
        <?php echo isset($content) ? $content : '' ?>

        <!-- JS Code -->
        <script type="text/javascript" src="/asserts/default/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="/asserts/default/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>