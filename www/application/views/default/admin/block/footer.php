<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div id="footer" class="well well-small">
	<div class="container">
		<div class="row">
			<div class="span12">
                <?php echo __('&copy; :date Cyber Applications. Developer: :developer.', 
						array(
							':date' => Date::formatted_time('now', 'Y'),
							':developer' => Config::getSiteParam('site_developer')
						)
					); 
				?>
            </div>
        </div>
    </div>
</div>