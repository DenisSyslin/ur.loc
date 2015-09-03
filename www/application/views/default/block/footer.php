<?php defined('SYSPATH') or die('No direct script access.'); ?>
<footer>
	<div class="container">
		<p class="text-muted">
		<?php echo __('&copy; :date Developer: :developer', array(
					':date' => Date::formatted_time('now', 'Y'),
					':developer' => Config::getSiteParam('site_developer')
				)
			); 
		?>
		</p>
	</div>
</footer>