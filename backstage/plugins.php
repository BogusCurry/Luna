<?php

/*
 * Copyright (c) 2013-2015 Luna
 * Licensed under MIT
 */
define('FORUM_ROOT', '../');
require FORUM_ROOT.'include/common.php';

// include_once FORUM_ROOT.'include/class/hooks.php';

if (!$luna_user['is_admmod'])
	header("Location: login.php");

/* if (isset ( $_GET ['action'] ))
	switch ($_GET ['action']) {
		case "deactivate" :
			$data ['action'] = 0;
			$db->query_update ( "plugins", $data, "filename='" . $_GET ['filename'] . "'" );
			break;
		case "activate" :
			$sql = "SELECT * FROM " . $table_prefix . "plugins WHERE filename = '" . $db->escape ( $_GET ['filename'] ) . "'";
			$count = count ( $db->fetch_all_array ( $sql ) );
			if ($count < 1) {
				$data ['filename'] = $_GET ['filename'];
				$data ['action'] = 1;
				$db->query_insert ( "plugins", $data );
			} else {
				$data ['action'] = 1;
				$db->query_update ( "plugins", $data, "filename='" . $_GET ['filename'] . "'" );
			}
			break;
	} */

$action = isset($_GET['action']) ? $_GET['action'] : null;
$page_title = array(luna_htmlspecialchars($luna_config['o_board_title']), __('Admin', 'luna'), __('Index', 'luna'));
define('FORUM_ACTIVE_PAGE', 'admin');
require 'header.php';
	load_admin_nav('backstage', 'index');
?>
<div class="panel panel-primary hidden-xs">
	<div class="panel-heading">
		<h3 class="panel-title"><?php _e('Available plugins', 'luna') ?>
		</h3>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Plugin</th>
				<th scope="col" class="num">Version</th>
				<th scope="col">Description</th>
				<th scope="col" class="action-links">Action</th>
			</tr>
		</thead>
	
		<tbody class="plugins">
<?php
/* foreach ( $plugin_headers as $plugin_header ) {
	$action = false;
	foreach ( $result_rows as $result_row )
		if ($plugin_header ['filename'] == $result_row ['filename'] && $result_row ['action'] == 1)
			$action = true;
	?>
		<tr <?php
	if ($action)
		echo "class='active'";
	?>>
			<td class='name'><a
				href="<?php
	echo $plugin_header ['PluginURI'];
	?>"
				title="<?php
	echo $plugin_header ['Title'];
	?>"><?php
	echo $plugin_header ['Name'];
	?></a></td>
			<td class='vers'><?php
	echo $plugin_header ['Version'];
	?></td>
			<td class='desc'>
				<p class="nopadbot"><?php
	echo $plugin_header ['Description'];
	?> by <a href="<?php
	echo $plugin_header ['AuthorURI'];
	?>"
						title="Visit author homepage"><?php
	echo $plugin_header ['Author'];
	?></a>.
				</p>
			</td>
			<td>
				<?php
	if (! $action)
		echo '<a href="control.php?action=activate&filename=' . $plugin_header ['filename'] . '" title="activate this plugin">Activate</a>';
	else
		echo '<a href="control.php?action=deactivate&filename=' . $plugin_header ['filename'] . '" title="deactivate this plugin">Deactivate</a>';
	?>
			</td>
		</tr>
<?php
} */
?>
		</tbody>
	</table>
</div>
<?php
$db->close ();
?>