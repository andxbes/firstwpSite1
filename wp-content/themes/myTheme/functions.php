<?php

/***
 * подкулючаем скрипты и стили  
 ***/
function load_styles_and_scripts() {
//	wp_enqueue_script('jquery','https://code.jquery.com/jquery-2.1.4.min.js');
//	wp_enqueue_script('myScript' , get_template_directory_uri().'/js/script.js');
//	wp_enqueue_script('bootstup' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');
	
//	
//	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
//	wp_enqueue_style('bootstrapTheme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css' );
//	wp_enqueue_style('style1', get_template_directory_uri().'/css/l2.css' );
//	wp_enqueue_style('style2', get_template_directory_uri().'/css/screen960.css' );
//	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
//	
}


add_action(wp_enqueue_scripts(), load_styles_and_scripts());


/***
 * подключаем меню  
 ***/
add_theme_support( 'menus' );
register_nav_menus( array(
	"header-menu"=>"Самое верхнее меню",
    "bottom-menu"=>"Самое нижнее меню"
	));



function topMenu() {
	wp_nav_menu(array(
		'theme_location'=>'header-menu',
		'menu' => 'header-menu',
		'menu_class'=> 'menuList_plusSub'
		));
}

function bottomMenu() {
	wp_nav_menu(array(
		'theme_location'=>'bottom-menu',
		'menu' => 'bottom-menu',
		'menu_class'=> 'menuList',
	));
}

/***
 * делаем возможным подключение миниатюр записи   
 ***/
add_theme_support('post-thumbnails');


