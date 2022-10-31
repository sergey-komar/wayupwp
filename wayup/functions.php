<?php
/**
 * wayup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wayup
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Замените номер версии темы в каждом выпуске.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Настраивает темы по умолчанию и регистрирует поддержку различных функций WordPress.
  *
  * Обратите внимание, что эта функция подключена к хуку after_setup_theme, который
  * выполняется перед хуком инициализации. Хук инициализации слишком поздно для некоторых функций, таких как
  * как указание на поддержку миниатюр сообщений.
 */
function wayup_setup() {
		/*
		* Сделайте тему доступной для перевода.
		* Переводы могут храниться в каталоге /languages/.
		* Если вы создаете тему на основе wayup, используйте поиск и замену
		* изменить «wayup» на название вашей темы во всех файлах шаблонов.
		*/
	load_theme_textdomain( 'wayup', get_template_directory() . '/languages' );

	// Добавьте ссылки RSS-канала сообщений и комментариев по умолчанию в заголовок.
	add_theme_support( 'automatic-feed-links' );

		/*
		* Позвольте WordPress управлять заголовком документа.
		* Добавляя поддержку темы, мы заявляем, что эта тема не использует
		* жестко запрограммированный тег <title> в заголовке документа и ожидайте, что WordPress
		* предоставить его для нас.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Включите поддержку миниатюр сообщений в сообщениях и на страницах.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );



	// Эта тема использует wp_nav_menu() в одном месте..
	register_nav_menus(
		array(
			'menu-header' => esc_html__( 'Шапка', 'wayup' ),
			'menu-footer-1' => esc_html__( 'Подвал-1', 'wayup' ),
			'menu-footer-2' => esc_html__( 'Подвал-2', 'wayup' )
		)
	);

		/*
		* Переключить базовую разметку по умолчанию для формы поиска, формы комментариев и комментариев
		* для вывода действительного HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Настройте основную функцию пользовательского фона WordPress.
	add_theme_support(
		'custom-background',
		apply_filters(
			'wayup_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Добавлена поддержка тем для выборочного обновления виджетов.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Добавить поддержку основного пользовательского логотипа.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// СВОИ РАЗМЕРЫ ДЛЯ КАРТИНОК СВОИ РАЗМЕРЫ ДЛЯ КАРТИНОК СВОИ РАЗМЕРЫ ДЛЯ КАРТИНОК
	add_image_size( 'testimonial-thumb', 225, 231, true );



	

}
add_action( 'after_setup_theme', 'wayup_setup' );

/**
 * Задайте ширину содержимого в пикселях на основе дизайна темы и таблицы стилей.
  *
  * Приоритет 0, чтобы сделать его доступным для обратных вызовов с более низким приоритетом.
 *
 * @global int $content_width
 */
function wayup_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wayup_content_width', 640 );
}
add_action( 'after_setup_theme', 'wayup_content_width', 0 );

/**
 * Зарегистрируйте область виджета.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */



/**
 * Реализуйте функцию пользовательского заголовка.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Пользовательские теги шаблона для этой темы.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Функции, которые улучшают тему, подключаясь к WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Дополнения кастомайзера.
 */
require get_template_directory() . '/inc/customizer.php';




/**
 * Загрузите файл совместимости Jetpack.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}










// Подключаем woocommerce
require get_template_directory() . '/inc/functions/woo.php';
// Подключаем woocommerce

// Подключаем REDUX 
require get_template_directory() . '/inc/options-panel-redux.php';

// Подключение ХЛЕБНЫХ КРОШЕК
require get_template_directory() . '/inc/breadcrumbs.php';

// Подключение МЕТАБОКСОВ
require get_template_directory() . '/inc/metaboxes.php';

// Подключение файл socail СТРАНИЦА ОДНОЙ НОВОСТИ ПОДЕЛИТЬСЯ И СОЦ ИКОНКИ
require get_template_directory() . '/inc/social.php';

// Подключение ВИДЖЕТОВ
require get_template_directory() . '/inc/widgets/widgets.php';
require get_template_directory() . '/inc/widgets/widget-about.php';
require get_template_directory() . '/inc/widgets/widget-customcategory.php';

// Подключаем WPBakery 
require get_template_directory() . '/inc/functions/wpbakery.php';
// Подключаем WPBakery 










//  Подключение стилей и скриптов
function wayup_scripts() {
	wp_enqueue_style( 'wayup-style', get_stylesheet_uri());
	wp_enqueue_style( 'wayap-main', get_template_directory_uri() . '/assets/css/main.min.css', [], 1.0);
	wp_enqueue_style( 'wayap-vendor', get_template_directory_uri() . '/assets/css/vendor.min.css', [], 1.0);

	// wp_enqueue_script('jquery');
	wp_enqueue_script('jquery3.6.0', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	// wp_enqueue_script('goodshare', 'https://cdn.jsdelivr.net/npm/goodshare.js@4/goodshare.min.js', [], '', true);

	wp_enqueue_script( 'wayup-common', get_template_directory_uri() . '/assets/js/common.min.js', ['jquery3.6.0'], 1.0, true );
	wp_enqueue_script( 'wayup-vendor', get_template_directory_uri() . '/assets/js/vendor.min.js', [], 1.0, true );
	wp_enqueue_script( 'wayup-svg-sprite', get_template_directory_uri() . '/assets/img/svg-sprite/svg-sprite.js', [], 1.0, false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wayup_scripts' );
//  Подключение стилей и скриптов



// ВЫВОДИМ МЕТАБОКСЫ В АДМИНКУ
function wayup_admin_scripts($hook) {
	
	// Add scripts for metaboxes
  	if ( $hook == 'post.php' || $hook == 'post-new.php' || $hook == 'page-new.php' || $hook == 'page.php' ) {
		wp_enqueue_style( 'wayap-metabox', get_template_directory_uri() . '/assets/css/metaboxes.css', [], 1.0);
		wp_enqueue_script( 'wayup_metaboxes', get_template_directory_uri() . '/assets/js/metaboxes.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox') );
  	}
	
}
add_action( 'admin_enqueue_scripts', 'wayup_admin_scripts', 10 );
// ВЫВОДИМ МЕТАБОКСЫ В АДМИНКУ








// Добавляем свой класс для body ,потом можно при помощи условия добавить свой класс для других страниц
add_filter( 'body_class','wayup_body_class' );
function wayup_body_class( $classes ) {

// добавим класс 'is-home' для главной странице
	if( is_page_template('template-home.php') ){
		$classes[] = 'is-home';
// На странице контакты класс test 
	}else if(is_page_template('template-contact.php')){
		$classes[] = 'test';
// Во всех остальныхх случаях inner-page
	}else{
		$classes[] = 'inner-page';
	}
	return $classes;
}



// РЕГИСТИРИРУЕМ СВОИ ТИПЫ ЗАПИСЕЙ
add_action( 'init', 'wayup_register_custom_post_types' );
function wayup_register_custom_post_types (){
	register_post_type( 'testimonial', [
		'labels' => [
			'name'               => 'Отзывы', // основное название для типа записи
			'singular_name'      => 'Отзыв', // название для одной записи этого типа
			'add_new'            => 'Добавить Отзыв', // для добавления новой записи
			'add_new_item'       => 'Добавление Отзыва', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Отзыва', // для редактирования типа записи
			'new_item'           => 'Новое ____', // текст новой записи
			'view_item'          => 'Смотреть Отзыв', // для просмотра записи этого типа.
			'search_items'       => 'Искать Отзыв', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Отзывы', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-quote',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'testimonials'),
		'query_var'           => true,
	] );


	register_post_type( 'service', [
		'label'  => null,
		'labels' => [
			'name'               => 'Услуги', // основное название для типа записи
			'singular_name'      => 'Услуга', // название для одной записи этого типа
			'add_new'            => 'Добавить Услугу', // для добавления новой записи
			'add_new_item'       => 'Добавление Услуги', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Услуги', // для редактирования типа записи
			'view_item'          => 'Смотреть Услугу', // для просмотра записи этого типа.
			'search_items'       => 'Искать Услугу', // для поиска по этим типам записи
			'menu_name'          => 'Услуги', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		'menu_icon'           => 'dashicons-admin-tools',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		// 'rewrite'             => array('slug' => 'service'),
		'query_var'           => true,
	] );



	
	register_post_type( 'news', [
		'label'  => null,
		'labels' => [
			'name'               => 'Новости', // основное название для типа записи
			'singular_name'      => 'Новость', // название для одной записи этого типа
			'add_new'            => 'Добавить Новость', // для добавления новой записи
			'add_new_item'       => 'Добавление Новости', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Новости', // для редактирования типа записи
			'view_item'          => 'Смотреть Новость', // для просмотра записи этого типа.
			'search_items'       => 'Искать Новости', // для поиска по этим типам записи
			'menu_name'          => 'Новости', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		'menu_icon'           => 'dashicons-format-aside',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'news'),
		'query_var'           => true,
	] );



	register_post_type( 'feature', [
		'label'  => null,
		'labels' => [
			'name'               => 'Кейсы', // основное название для типа записи
			'singular_name'      => 'Кейс', // название для одной записи этого типа
			'add_new'            => 'Добавить Кейсы', // для добавления новой записи
			'add_new_item'       => 'Добавление Кейса', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Кейса', // для редактирования типа записи
			'view_item'          => 'Смотреть Кейсы', // для просмотра записи этого типа.
			'search_items'       => 'Искать Кейсы', // для поиска по этим типам записи
			'menu_name'          => 'Кейсы', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		'menu_icon'           => 'dashicons-dashboard',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		// 'rewrite'             => true,
		'rewrite'             => array('slug' => 'features'),
		'query_var'           => true,
	] );



// Регистрируем таксономии
// Для услуг
register_taxonomy( 'service-type', [ 'service' ], [
	'label'                 => '', // определяется параметром $labels->name
	'labels'                => [
		'name'              => 'Категории',
		'add_new_item'      => 'Добавить категорию',
		'menu_name'         => 'Категории',
	
	],
	'description'           => '', // описание таксономии
	'public'                => true,
	'hierarchical'          => true,
	// 'rewrite'             => array('slug' => 'service-type'),
	'rewrite'               => true,
] );


// ДЛЯ НОВОСТЕЙ
register_taxonomy( 'news-category', [ 'news' ], [
	'label'                 => '', // определяется параметром $labels->name
	'labels'                => [
		'name'              => 'Категория Новости',
		'add_new_item'      => 'Добавить новость',
		'menu_name'         => 'Категории',
	
	],
	'description'           => '', // описание таксономии
	'public'                => true,
	'hierarchical'          => true,
	// 'rewrite'             => array('slug' => 'service-type'),
	'rewrite'               => true,
] );


// ДЛЯ FEATURED
register_taxonomy( 'feature-type', [ 'feature' ], [
	'label'                 => '', // определяется параметром $labels->name
	'labels'                => [
		'name'              => 'Категория Кейсы',
		'add_new_item'      => 'Добавить кейс',
		'menu_name'         => 'Категории Кейсы',
	
	],
	'description'           => '', // описание таксономии
	'public'                => true,
	'hierarchical'          => true,
	// 'rewrite'             => array('slug' => 'service-type'),
	'rewrite'               => true,
] );


}










// Подключение МЕТАБОКСОВ
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "wayup_";

    $meta_boxes[] = array(
        'id'         => 'testiminial_metaboxes',
        'title'      => 'Данные для отзыва',
        'pages'      => array( 'testimonial', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        // 'show_on'    => array( 'key' => 'page-template', 'value' => array('template-press.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Социальная сеть',
                'desc' => 'Введите ссылку',
                'id'   => $prefix . 'social_link',
                'type' => 'text',
			),
			array(
                'name' => 'Дата отзыва',
                'desc' => 'Введите дату',
                'id'   => $prefix . 'testy_date',
                'type' => 'text_date',
            )
        )
    );


	$meta_boxes[] = array(
        'id'         => 'service_metaboxes',
        'title'      => 'Данные для отзыва',
        'pages'      => array( 'service', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        // 'show_on'    => array( 'key' => 'page-template', 'value' => array('template-press.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Цена',
                'desc' => 'Введите цену услуги',
                'id'   => $prefix . 'service_cost',
                'type' => 'text',
			),
		)
    );


	return $meta_boxes;
}




// Выводим описание в картинки на странице одной записи сервис-это описание пишется в админки при установки изображения
function wayup_get_attachment($attachment_id){
	$attachment = get_post($attachment_id);
	return array(
		'description' => $attachment->post_content,
	);
}





