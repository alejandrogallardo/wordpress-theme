<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
    <?php 
        if ( is_home () ){
            echo get_bloginfo('name');
        } else if ( is_single() ){
            echo the_title();
        } else {
            echo get_bloginfo('name');
        }
        ?>
    </title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<?php wp_head(); ?>

</head>
<body style="background-color: #f6fbfe;">
	<header>
		<div class="menu">
			<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #563d7c;">
			<div class="container">
				<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Blog</a>
					</li>
					</ul>
                </div> -->
                <?php
                wp_nav_menu( array(
                    'theme_location'  => 'header-menu',
                    'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbarSupportedContent',
                    'menu_class'      => 'navbar-nav ml-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
			</div>
			</nav>
	</header>