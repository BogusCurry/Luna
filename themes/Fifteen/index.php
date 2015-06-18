<?php

// Make sure no one attempts to run this view directly.
if (!defined('FORUM'))
	exit;

?>
<div class="row index">
	<div class="col-sm-3 col-xs-12">
		<div class="list-group list-group-forum">
			<?php draw_forum_list() ?>
		</div>
		<hr />
		<div class="list-group list-group-forum">
			<?php draw_mark_read('list-group-item', 'index') ?>
		</div>
	</div>
	<div class="col-sm-9 col-xs-12">
<?php
	// Announcement
	if ($luna_config['o_announcement'] == '1') {
?>
		<div class="alert alert-<?php echo $luna_config['o_announcement_type']; ?> announcement">
			<?php if (!empty($luna_config['o_announcement_title'])) { ?><h4><?php echo $luna_config['o_announcement_title']; ?></h4><?php } ?>
			<?php echo $luna_config['o_announcement_message']; ?>
		</div>
<?php
	}
?>
        <div class="alert alert-info alert-section alert-all">
            <h3><?php _e('Recent activity', 'luna') ?></h3>
        </div>
		<div class="list-group list-group-topic">
<?php
			draw_index_topics_list();
?>
		</div>
	</div>
</div>