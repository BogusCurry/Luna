<?php

// Make sure no one attempts to run this view directly.
if (!defined('FORUM'))
	exit;

?>

<h2><?php _e('Forum rules', 'luna') ?></h2>
<?php draw_rules_form(); ?>