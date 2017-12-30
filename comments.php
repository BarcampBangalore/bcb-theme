
<a id="comments"></a>
<h2 id="sessionpage_commentshead">Comments</h2>
<ul class="commentlist"><?php wp_list_comments(array('style' => 'ul', 'callback' => 'mytheme_comment')); ?></ul>
<?php
$new_defaults = array(
    'cancel_reply_link' => '(Cancel Reply)',
    'comment_notes_after' => '',
    'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment"  aria-required="true"></textarea></p>');
comment_form($new_defaults);
?>