<?php

/* * *
 * подкулючаем скрипты и стили  
 * * */

function load_styles_and_scripts() {
    if (!is_admin()) {
        wp_enqueue_script('newjquery', 'https://code.jquery.com/jquery-2.1.4.min.js');
        wp_enqueue_script('myScript', get_template_directory_uri() . '/js/script.js');
        wp_enqueue_script('bootstup', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');


        wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
        wp_enqueue_style('bootstrapTheme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css');
        wp_enqueue_style('style1', get_template_directory_uri() . '/css/l2.css');
        wp_enqueue_style('style2', get_template_directory_uri() . '/css/screen960.css');
        wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
    }

    //не работает подобное подключение 
//    if( is_single()){
//         wp_enqueue_script('myRaiting', get_template_directory_uri() . '/js/raiting.js');
//    }
}

add_action(wp_enqueue_scripts(), load_styles_and_scripts());


/* * *
 * подключаем меню  
 * * */
add_theme_support('menus');
register_nav_menus(array(
    "header-menu" => "Самое верхнее меню",
    "bottom-menu" => "Самое нижнее меню"
));

function topMenu() {
    wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'menu' => 'header-menu',
        'menu_class' => 'menuList_plusSub'
    ));
}

function bottomMenu() {
    wp_nav_menu(array(
        'theme_location' => 'bottom-menu',
        'menu' => 'bottom-menu',
        'menu_class' => 'menuList',
    ));
}

/* * *
 * делаем возможным подключение миниатюр записи   
 * * */
add_theme_support('post-thumbnails');

/**
 * генерируем стили 
 * */
function the_ThemeOptions() {
    if (function_exists('ot_get_option')) {
        $type_headers = ot_get_option('typeheaders', array());
        if (!empty($type_headers)) {
            foreach ($type_headers as $header) {
                $class = "";
                $className = $header['class_name'];
                $color = $header['color'];
                $fontSize = $header['size'];
                $family = "";

                if (!empty($header['font_style'])) {
                    //print_r($header['font_style']);
                    $fontFamily = $header['font_style'];
                    $family = $fontFamily[0]['family'];
                }
                echo ".$className{"
                . "color: $color;"
                . "font-size: $fontSize" . "px;"
                . "font-family: $family;"
                . "} ";
            }
        }
    }
}

/**
 * подключаем шрифты   
 * */
function loadFonts() {
    if (function_exists('ot_get_option')) {
        $type_headers = ot_get_option('typeheaders', array());
        if (!empty($type_headers)) {
            foreach ($type_headers as $header) {

                if (!empty($header['font_style'])) {
                    //print_r($header['font_style']);
                    $fontFamily = $header['font_style'];
                    $family = $fontFamily[0]['family'];
                    echo "<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=" . ucfirst($family) . "'/>\n";
                }
            }
        }
    }
}

/**
 * обрабатываем запросы о повышении  рейтинга 
 * */
function setRaiting() {
    $raiting = $_REQUEST['raiting'];
    $filmId = $_REQUEST['filmId'];
    $patern = "/^[0-9]+$/";
    //проверки на ввод 
    if (preg_match($patern, $raiting) && preg_match($patern, $filmId)) {
        add_to_bd($filmId, $raiting);
        die($raiting . " добавили к посту № " . $filmId);
    }
    die("Error");
}

add_action("wp_ajax_(add_to_raiting)", "setRaiting");
add_action("wp_ajax_nopriv_(add_to_raiting)", "setRaiting");

 

$table_name = $wpdb->prefix . "raiting_for_movies";

function add_to_bd($id, $raiting) {
    global $wpdb;
    global $table_name;
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        $sql = "CREATE TABLE IF NOT EXISTS `" . $table_name . "` (
                    `id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    `post_id` bigint(20) NOT NULL,
                    `raiting` tinyint(4) NOT NULL
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
        die( "создали бд");
    }
    $sql = $wpdb->prepare('INSERT INTO `wp_raiting_for_movies`(`post_id`, `raiting`) VALUES (%d,%d)'
            , [$id, $raiting]);
    $wpdb->query($sql);
}

function  getRaiting($id){
    global $wpdb;
    global $table_name;
    $array = $wpdb->get_results('SELECT AVG(`raiting`) as avg FROM `'.$table_name.'` WHERE post_id='.$id.';');
    //print_r($array);
    if($array==null){
        return 0;
    }
return $array[0]->avg;
}
