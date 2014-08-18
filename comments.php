<?php if ( have_comments() ) : ?>
    <h4 id="comments"><?php comments_number('No Comments', 'One Comments', '% Comments'); ?></h4>
    <ol class="comment-list">
		<?php wp_list_comments('callback=SocialSpark_comments'); ?>
	</ol>
<?php endif; ?>
<div class="comment-form-box">
	<?php
		$comments_args = array(
		'label_submit'=>'Submit Comment',
		'title_reply'=>'Leave your thoughts',
		'comment_notes_after' => '',
		);
		comment_form($comments_args); 
	?>
</div>