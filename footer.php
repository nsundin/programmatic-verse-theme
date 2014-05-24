        <div class="clear"></div>
        <div class="clear"></div>
        <div id="credits">
			Copyright &copy; 2011-<?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &middot; 
			<?php 
			if ($bnw_rss_feed) {
				?>
				<a href="<?php echo $bnw_rss_feed; ?>">
					<?php if ($bnw_rss_title) {
								echo $bnw_rss_title;
							} else {
								echo "RSS Feed";
							} ?></a>
				<?php } else { ?>
				<a href="<?php bloginfo('rss2_url'); ?>">RSS Feed</a>
				<?php
				} ?><br />
            Built on <a href="http://www.getskeleton.com/">Skeleton</a><br/>
            Powerered by <a href="http://wordpress.org/">Wordpress</a>
        </div><!-- content -->
    </div><!-- container -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts.js"></script>
</body>
</html>
