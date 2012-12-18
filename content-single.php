<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post() ?>
		<div class="post">
			<h2><?php the_title() ?></h2>
			<div class="meta">
				<span class="author">by <?php the_author()?></span>
				<span class="date">Published on <?php the_time(get_option('date_format')); ?></span>
				<span class="num-comments"><?php comments_number( 'no comments', 'one comment', '% comments' ); ?></span>
			</div>
			<div class="story-content">
				<?php the_content() ?>
			</div>
		</div>
		<?php if(comments_open()) {
			comments_number( 'Be the first to comment', 'Somebody is talking about this', 'People are talking about this' );
			
			// Display list of comments
			$comments = get_comments(array('post_id'=>$post->ID));
			wp_list_comments(null,$comments);
			
			// Display comment form
			iheartfood_comment_form();
		}
		?>
	<?php endwhile ?>
<?php endif ?>