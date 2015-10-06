<?php $T_P = get_template_directory_uri();?>
<!DOCTYPE html>
<html<?php language_attributes(); ?>>
    <head>
        <title><?=the_title()?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
                <link rel="stylesheet" href="<?=$T_P?>/css/l2.css"/>
                <link rel="stylesheet" href="<?=$T_P?>/css/screen960.css"/>
	    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
		<?php wp_admin_bar_header()?>
        <header class="fullscrtoWidth">
           
			<a href="/">  <img  id="logo"  src="<?=$T_P?>/pic/logo.png" alt="logo"/></a>
			<!--<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">-->
			<?php 
			   topMenu();
			?>

		<?php get_sidebar(); ?>	
			
        </header>

