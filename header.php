<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>Claudia De Leon Blank Template</title>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	</head>
	<body>
		<div class="container"> <!-- ends in footer -->
			<header class="row">
				<div class="nine columns">
					<h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1>
					<p><?php bloginfo('description'); ?></p>
				</div>
        <!-- Add Search Form -->
      	<div class="site-search twelve columns">
      		<?php get_search_form(); ?>
      	</div>
			</header>
      <!-- end of header | begin section content -->
      <!-- Menu -->
      <div class="row">
      	<div id="cd-logo" class="twelve columns">
      		<?php

            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
            }

            wp_nav_menu(array(
      			'sort_column' => 'menu_order',
      			'container_class' => 'blank-menu-header'
      			));?>
      	</div>
      </div>
