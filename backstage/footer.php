<?php

/*
 * Copyright (C) 2013-2015 Luna
 * Based on code by FluxBB copyright (C) 2008-2012 FluxBB
 * Based on code by Rickard Andersson copyright (C) 2002-2008 PunBB
 * Licensed under GPLv3 (http://getluna.org/license.php)
 */

// Make sure no one attempts to run this script "directly"
if (!defined('FORUM'))
	exit;

// Display debug info (if enabled/defined)
if (defined('FORUM_DEBUG')) {
	echo '<p id="debug">[ ';

	// Calculate script generation time
	$time_diff = sprintf('%.3f', get_microtime() - $luna_start);
	echo sprintf(__('Generated in %1$s seconds, %2$s queries executed', 'luna'), $time_diff, $db->get_num_queries());

	if (function_exists('memory_get_usage')) {
		echo ' - '.sprintf(__('Memory usage: %1$s', 'luna'), file_size(memory_get_usage()));

		if (function_exists('memory_get_peak_usage'))
			echo ' '.sprintf(__('(Peak: %1$s)', 'luna'), file_size(memory_get_peak_usage()));
	}

	echo ' ]</p>'."\n";
}


// End the transaction
$db->end_transaction();

?>
			</div>
		</div>
		<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>
<?php

// Close the db connection (and free up any result data)
$db->close();
