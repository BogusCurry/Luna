<?php

// Make sure no one attempts to run this view directly.
if (!defined('FORUM'))
	exit;

?>

<form method="post" action="inbox.php">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo $lang['Confirm deletion'] ?><span class="pull-right"><button class="btn btn-danger" type="submit" name="delete"><span class="fa fa-fw fa-trash"></span> <?php echo $lang['Delete'] ?></button></span></h3>
		</div>
		<div class="panel-body">
			<input type="hidden" name="action" value="delete_multiple" />
			<input type="hidden" name="messages" value="<?php echo $idlist ?>" />
			<input type="hidden" name="delete_multiple_comply" value="1" />
			<p><?php echo $lang['Delete messages comply'] ?></p>
		</div>
	</div>
</form>