<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=get_bloginfo('template_directory');?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?=get_bloginfo('template_directory');?>/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="<?=get_bloginfo('template_directory');?>/js/jquery-ui-timepicker-addon.css" />
	<?php wp_head(); ?>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<header id="header" role="banner">
			<section id="branding">
				<a href="/"><img id="logo" src="<?=get_bloginfo('template_directory');?>/images/logo.png" height="40" /></a>
                <div id="signin">
                	<!-- <a class="fade" href="#">Join</a> / <a href="#" class="fade">Login</a> -->
                    <nav id="menu" role="navigation"><?php
//if the user is logged in, members only menu appears, if not, global menu appears
if ( is_user_logged_in() ) :?>
<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'members' ) ); ?>
<?php else :?>
<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
<?php endif;?></nav>
                </div>
			</section>
            
		</header>
        <!-- end #header -->