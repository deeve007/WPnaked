<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title><?php 
		if( !is_home() && !is_front_page() ) : wp_title( '', true ); echo ' | '; endif; 
		?><?php bloginfo('name'); ?><?php 
		if( is_home() || is_front_page() ) : echo ' | '; bloginfo( 'description' ); endif; 
	?></title>

	<meta name="description" content="<?php bloginfo( 'description' ); ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
	<!--         This is the traditional favicon.
					- size: 16x16 or 32x32
					- transparency is OK -->
					 
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png" />
	<!--        - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for retina display (IMHO, just go ahead and use the biggest one)
					- To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
					- Transparency is not recommended (iOS will put a black BG behind the icon) -->
			
	<!-- css + javascript -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!-- header -->
	<header class="header" role="banner">
		<h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name'); ?></a></h1>
		<h2><?php bloginfo( 'description' ); ?></h2>
			
		<nav class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .main-navigation -->
	</header>
	<!-- end header -->
	
	<!-- start main content area -->
	<main class="content" role="main">
	