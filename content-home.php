<div class="alert">
	<p>Welcome back!</p>
</div>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post() ?>
	<div class="post">
		<div class="story-content">
			<?php the_content() ?>
		</div>
	</div>
	<?php endwhile ?>
<?php endif ?>