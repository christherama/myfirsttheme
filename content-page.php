<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post() ?>
		<div class="post">
			<h2><?php if(!is_page('about-me'))the_title() ?></h2>
			<div class="story-content">
				<?php the_content() ?>
			</div>
		</div>
	<?php endwhile ?>
<?php endif ?>