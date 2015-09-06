<hr />
<div class="row">
	<div class="col-lg-6">
		<div id="vk_comments"></div>
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?717"></script>
		<script type="text/javascript">
			VK.init({ apiId: <?php echo $cfg[ 'vk_key' ]; ?>, onlyWidgets: true});
		</script>
		<script type="text/javascript">
			VK.Widgets.Comments("vk_comments", {
				limit: <?php echo $cfg[ 'vk_messages' ]; ?>, 
				width: "<?php echo $cfg[ 'vk_width' ]; ?>", 
				attach: "*"
			});
		</script>
	</div>
	<div class="col-lg-6">
		<div class="fb-comments" 
			data-href="<?php echo $_SERVER[ 'HTTP_HOST' ]; ?>/<?php echo $_SERVER[ 'REQUEST_URI' ]; ?>" 
			data-width="<?php echo $cfg[ 'fb_width' ]; ?>" 
			data-num-posts="<?php echo $cfg[ 'fb_messages' ]; ?>"></div>
	</div>
</div>
