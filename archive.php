<?php get_header(); ?>
        <div class="nine columns offset-by-one content" id="pagebody">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
						<hr class="large" />
						<div class="entry">
							<div class="postmetadata">
								<?php _e('Published at&#58;'); ?> <?php the_time(' h:m a - l F d Y') ?>
							</div>
							
							<?php the_excerpt(); ?>
							
							<div class="metabox">
								<span class="catlink"><?php _e('Posted in&#58;'); ?> <?php the_category(', ') ?></span> <?php _e('by'); ?> <?php  the_author(); ?> <span class="editcomment"><?php edit_post_link('Edit', '', ''); ?></span><?php if (get_the_tags()) : ?><span class="taglink"><?php the_tags(' ', ', ', ''); ?></span><?php endif; ?>
							</div>
							<div class="cle"></div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<div <?php post_class(); ?>>
					<h2><?php _e('Not Found'); ?></h2>
				</div>
			<?php endif; ?>
        </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>