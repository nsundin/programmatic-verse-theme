<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js" ></script>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/skeleton/base.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/skeleton/skeleton.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/skeleton/layout.css" type="text/css" />	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
	
</head>

<body>
<body>
    <div class="container">
        <div class="three columns">
            <nav>
                <h3 id="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h3>
				<ul>
					<?php
						wp_list_pages('sort_column=menu_order&depth=1&title_li=');
						wp_list_categories('sort_column=menu_order&depth=1&title_li=');
					?>
				</ul>
                <div class="clear"></div>
                <div id="expand-tab">Menu</div>
            </nav>
        </div>
