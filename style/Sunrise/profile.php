<?php

// Make sure no one attempts to run this view directly.
if (!defined('FORUM'))
    exit;

?>
<div class="col-sm-3 profile-nav">
	<div class="user-card-profile">
		<h3 class="user-card-title"><?php echo luna_htmlspecialchars($luna_user['username']) ?></h3>
		<span class="user-card-avatar thumbnail">
			<?php echo $user_avatar ?>
		</span>
	</div>
<?php
	load_me_nav('profile');
?>
</div>
<div class="col-sm-9">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">About user</h3>
		</div>
		<div class="panel-body">
			<?php echo implode("\n\t\t\t\t\t\t\t".'<br />', $user_personality)."\n" ?>
		</div>
	</div>
<?php if (!empty($user_messaging)): ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo $lang['Contact']; ?></h3>
		</div>
		<div class="panel-body">
			<p><?php echo implode("\n\t\t\t\t\t\t\t".'<br />', $user_messaging)."\n" ?></p>
		</div>
	</div>
<?php
endif;

if ($luna_config['o_signatures'] == '1') {
	if (isset($parsed_signature)) {
?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo $lang['Signature']; ?></h3>
		</div>
		<div class="panel-body">
			<?php echo $user_signature ?>
		</div>
	</div>
<?php
	}
}
?>
</div>