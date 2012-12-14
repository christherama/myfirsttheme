<?php
// Register a single navigation menu, to be
// constructed in the admin panel, and
// displayed in nav.php
register_nav_menus(array(
	'primary' => 'Primary Navigation'
));

function iheartfood_comment_form() {
	global $post;
	?>
	<form class="form-comment" method="post" action="<?php bloginfo('url');?>/wp-comments-post.php">
		<h3><?php _e('Leave a Comment');?></h3>
		<input type="hidden" name="comment_post_ID" value="<?php echo $post->ID;?>" />
		<input type="hidden" name="comment_parent" id="comment_parent" value="0"/>
		<div class="row-fluid">
			<div class="field span4">
				<label for="author"><?php _e('Name');?></label>
				<input id="author" name="author" type="text" value="" size="30" aria-required="true" placeholder="required"/>
			</div>
			<div class="field span4">
				<label for="email"><?php _e('Email');?></label>
				<input id="email" name="email" type="text" value="" size="30" aria-required="true" placeholder="required"/>
			</div>
			<div class="field span4">
				<label for="website"><?php _e('Website');?></label>
				<input id="website" name="website" type="text" value="" size="30" aria-required="true" placeholder="optional"/>
			</div>
		</div>
		<div class="row-fluid">
			<div class="field span12">
				<label for="comment"><?php _e('Comment');?></label>
				<textarea class="span12" rows="10" id="comment" name="comment" aria-required="true" placeholder="required"></textarea>
			</div>
		</div>
		
		<input class="btn" name="submit" type="submit" id="submit" value="Post Comment">
	</form>
	<?php
}