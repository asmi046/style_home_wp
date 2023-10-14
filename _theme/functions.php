<?php

include "site-data.php";
include "helper-function.php";

define("COMPANY_NAME", "");
define("MAIL_RESEND", "");

add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 300);
add_post_type_support('page', 'excerpt');

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
add_action('wp_enqueue_scripts', 'my_assets');
function my_assets()
{

	// Подключение стилей 

	$style_version = "1.0.1119";
	$scrypt_version = "1.0.1119";

	wp_enqueue_style("null-css", get_template_directory_uri() . "/css/null.css", array(), $style_version, 'all'); 
	wp_enqueue_style("fonts-css", get_template_directory_uri() . "/css/fonts.css", array(), $style_version, 'all'); 
	wp_enqueue_style("main-css", get_template_directory_uri() . "/css/main.css", array(), $style_version, 'all'); 
	wp_enqueue_style("modal-win-css", get_template_directory_uri() . "/css/modal-win.css", array(), $style_version, 'all'); 
	wp_enqueue_style("swiper-css", get_template_directory_uri() . "/css/swiper-bundle.min.css", array(), null, 'all'); 
	
	wp_enqueue_style("mobile_catalog_menu-css",  get_template_directory_uri() . "/css/mobile_catalog_menu.css", array(), $style_version, 'all');
	wp_enqueue_style("section-header-css",  get_template_directory_uri() . "/css/section-header.css", array(), $style_version, 'all');
	wp_enqueue_style("section-menu-css",  get_template_directory_uri() . "/css/section-menu.css", array(), $style_version, 'all');
	wp_enqueue_style("section-mobile-menu-css",  get_template_directory_uri() . "/css/section-mobile-menu.css", array(), $style_version, 'all');
	wp_enqueue_style("section-vidi-remonta-i-ceni-css",  get_template_directory_uri() . "/css/section-vidi-remonta-i-ceni.css", array(), $style_version, 'all');
	wp_enqueue_style("section-text-blk-css",  get_template_directory_uri() . "/css/section-text-blk.css", array(), $style_version, 'all');
	wp_enqueue_style("section-preim-1-css",  get_template_directory_uri() . "/css/section-preim-1.css", array(), $style_version, 'all');
	wp_enqueue_style("section-uslugi-css",  get_template_directory_uri() . "/css/section-uslugi.css", array(), $style_version, 'all');
	wp_enqueue_style("section-portfolio-css",  get_template_directory_uri() . "/css/section-portfolio.css", array(), $style_version, 'all');
	wp_enqueue_style("section-ceni-pod-cluth-css",  get_template_directory_uri() . "/css/section-ceni-pod-cluth.css", array(), $style_version, 'all');
	wp_enqueue_style("section-dop-uslugi-css",  get_template_directory_uri() . "/css/section-dop-uslugi.css", array(), $style_version, 'all');
	wp_enqueue_style("section-komanda-css",  get_template_directory_uri() . "/css/section-komanda.css", array(), $style_version, 'all');
	wp_enqueue_style("section-remont-bez-nervov-css",  get_template_directory_uri() . "/css/section-remont-bez-nervov.css", array(), $style_version, 'all');
	wp_enqueue_style("section-uridiceskaya-zashita-css",  get_template_directory_uri() . "/css/section-uridiceskaya-zashita.css", array(), $style_version, 'all');
	wp_enqueue_style("section-etapi-rabot-css",  get_template_directory_uri() . "/css/section-etapi-rabot.css", array(), $style_version, 'all');
	wp_enqueue_style("section-direktor-css",  get_template_directory_uri() . "/css/section-direktor.css", array(), $style_version, 'all');
	wp_enqueue_style("section-otzivi-css",  get_template_directory_uri() . "/css/section-otzivi.css", array(), $style_version, 'all');
	wp_enqueue_style("section-vizov-mastera-css",  get_template_directory_uri() . "/css/section-vizov-mastera.css", array(), $style_version, 'all');
	wp_enqueue_style("section-faq-css",  get_template_directory_uri() . "/css/section-faq.css", array(), $style_version, 'all');
	wp_enqueue_style("section-moscow-card-css",  get_template_directory_uri() . "/css/section-moscow-card.css", array(), $style_version, 'all');
	wp_enqueue_style("section-footer-css",  get_template_directory_uri() . "/css/section-footer.css", array(), $style_version, 'all');

	// Подключение скриптов

	wp_enqueue_script('imask-js', get_template_directory_uri() . '/js/imask.js', array(), $scrypt_version, true);
	wp_enqueue_script('fslightbox-js', get_template_directory_uri() . '/js/fslightbox.js', array(), $scrypt_version, true);
	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), $scrypt_version, false);
	wp_enqueue_script('axios-js', get_template_directory_uri() . '/js/axios.min.js', array(), $scrypt_version, true);
	wp_enqueue_script('vue-js', get_template_directory_uri() . '/js/vue.global.js', array(), $scrypt_version, true);

	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), $scrypt_version, true);
	wp_enqueue_script('tabs_js', get_template_directory_uri() . '/js/tabs.js', array(), $scrypt_version, true);
	wp_enqueue_script('mobile_menu_js', get_template_directory_uri() . '/js/mobile-menu.js', array(), $scrypt_version, true);


	wp_localize_script('main', 'allAjax', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce'   => wp_create_nonce('NEHERTUTLAZIT')
	));
}


//-----Блок описания вывода меню

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'menu-1' => 'Меню в шапке',
		'menu-2' => 'Меню в подвале',
		'menu-3' => 'Меню услуг в подвале',
	] );
} ); 

// Заготовка для вызова ajax
add_action('wp_ajax_aj_fnc', 'aj_fnc');
add_action('wp_ajax_nopriv_aj_fnc', 'aj_fnc');

function aj_fnc()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}


// Универсальный отправщик
add_action('wp_ajax_newsendr', 'newsendr');
add_action('wp_ajax_nopriv_newsendr', 'newsendr');

function newsendr()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {
       
		
		wp_die(true);
		
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}

// Отправщик для калькулятора
add_action('wp_ajax_calc_sendr', 'calc_sendr');
add_action('wp_ajax_nopriv_calc_sendr', 'calc_sendr');

function calc_sendr()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {
       
		
		wp_die(true);
		
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}