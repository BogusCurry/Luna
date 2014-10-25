<div id="p<?php echo $cur_post['id'] ?>" class="row comment <?php echo ($post_count % 2 == 0) ? ' roweven' : ' rowodd' ?><?php if ($cur_post['id'] == $cur_topic['first_post_id']) echo ' firstpost'; ?><?php if ($post_count == 1) echo ' onlypost'; ?><?php if ($cur_post['marked'] == true) echo ' marked'; ?>">
    <div class="col-xs-12">
        <div class="panel panel-default level<?php echo $cur_post['level'] ?>">
            <div class="panel-body">
                <div class="media">
                    <a class="pull-left <?php echo $is_online; ?>" href="#">
                        <?php echo $user_avatar; ?>
                    </a>
                    <div class="media-body">
                        <h2><?php echo $username ?> <small><?php echo $user_title ?></small></h2>
                        <a class="posttime" href="viewtopic.php?pid=<?php echo $cur_post['id'].'#p'.$cur_post['id'] ?>"><?php echo format_time($cur_post['posted']) ?></a>
                    </div>
                </div>
                <hr />
                <?php echo $cur_post['message']."\n" ?>
                <?php if ($cur_post['edited'] != '') echo '<p class="postedit"><em>'.$lang['Last edit'].' '.luna_htmlspecialchars($cur_post['edited_by']).' ('.format_time($cur_post['edited']).')</em></p>'; ?>
                <?php if (($signature != '') || (!$luna_user['is_guest'])) echo '<hr />'; ?>
                <?php if ($signature != '') echo "\t\t\t\t\t".'<div class="postsignature">'.$signature.'</div>'."\n"; ?>
                <?php if (!$luna_user['is_guest']) { ?><div class="pull-right post-actions btn-group"><?php if (count($post_actions)) echo implode(" &middot; ", $post_actions) ?></div><?php } ?>
            </div>
        </div>
    </div>
</div>