<?php
/*
Template Name: Clean
*/
?>
<?php get_header(); ?>
        <div class="nine columns offset-by-one content" id="pagebody">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<?php the_content(); ?>
						<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<div class="post">
					<h2><?php _e('Not Found'); ?></h2>
				</div>
			<?php endif; ?>
		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

