<?php

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts_theme' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
add_action( 'widgets_init', 'register_my_widgets' );
add_action( 'widgets_init', 'register_my_widgets2' );
add_action( 'widgets_init', 'register_home_widgets' );
add_action( 'widgets_init', 'register_index_widgets' );
add_filter( 'the_content', 'test_content' );

function test_content($content) {
	$content.= "";
	return $content;
}

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type('portfolio', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'portfolio', // основное название для типа записи
			'singular_name'      => 'portfolio', // название для одной записи этого типа
			'add_new'            => 'Добавить portfolio', // для добавления новой записи
			'add_new_item'       => 'Добавление portfolio', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование portfolio', // дляышву редактирования типа записи
			'new_item'           => 'Новое portfolio', // текст новой записи
			'view_item'          => 'Смотреть portfolio', // для просмотра записи этого типа.
			'search_items'       => 'Искать portfolio', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Portfolio', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['skills'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

// Первые блюда

	register_post_type('first_meal', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'first_meal', // основное название для типа записи
			'singular_name'      => 'Первое блюдо', // название для одной записи этого типа
			'add_new'            => 'Добавить первое блюдо', // для добавления новой записи
			'add_new_item'       => 'Добавление первое блюда', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Первого блюда', // для редактирования типа записи
			'new_item'           => 'Новое Первое блюдо', // текст новой записи
			'view_item'          => 'Смотреть Первое блюдо', // для просмотра записи этого типа.
			'search_items'       => 'Искать Первое блюдо', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Первые блюда', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	//вторые блюда
	register_post_type('second_meal', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'second_meal', // основное название для типа записи
			'singular_name'      => 'Первое блюдо', // название для одной записи этого типа
			'add_new'            => 'Добавить первое блюдо', // для добавления новой записи
			'add_new_item'       => 'Добавление первое блюда', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Первого блюда', // для редактирования типа записи
			'new_item'           => 'Новое Первое блюдо', // текст новой записи
			'view_item'          => 'Смотреть Первое блюдо', // для просмотра записи этого типа.
			'search_items'       => 'Искать Первое блюдо', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Вторые блюда', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

//выпечка
	register_post_type('bakery', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'bakery', // основное название для типа записи
			'singular_name'      => 'Выпечка', // название для одной записи этого типа
			'add_new'            => 'Добавить выпечку', // для добавления новой записи
			'add_new_item'       => 'Добавление выпечки', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование выпечки', // для редактирования типа записи
			'new_item'           => 'Новое Первое блюдо', // текст новой записи
			'view_item'          => 'Смотреть Первое блюдо', // для просмотра записи этого типа.
			'search_items'       => 'Искать Первое блюдо', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Выпечка', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	
	//каши
	register_post_type('porridge', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'porridge', // основное название для типа записи
			'singular_name'      => 'Каша', // название для одной записи этого типа
			'add_new'            => 'Добавить Кашу', // для добавления новой записи
			'add_new_item'       => 'Добавление Каши', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Каши', // для редактирования типа записи
			'new_item'           => 'Новая Каша', // текст новой записи
			'view_item'          => 'Смотреть Кашу', // для просмотра записи этого типа.
			'search_items'       => 'Искать Каша', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Каша', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	//рыба
	register_post_type('fish', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'fish', // основное название для типа записи
			'singular_name'      => 'Рыба', // название для одной записи этого типа
			'add_new'            => 'Добавить рыбу', // для добавления новой записи
			'add_new_item'       => 'Добавление рыбы', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рыбы', // для редактирования типа записи
			'new_item'           => 'Новая Рыба', // текст новой записи
			'view_item'          => 'Смотреть Рыба', // для просмотра записи этого типа.
			'search_items'       => 'Искать Рыбу', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Рыба', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	//мясо
	register_post_type('meat', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'meat', // основное название для типа записи
			'singular_name'      => 'Мясо', // название для одной записи этого типа
			'add_new'            => 'Добавить мясо', // для добавления новой записи
			'add_new_item'       => 'Добавление мяса', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование мяса', // для редактирования типа записи
			'new_item'           => 'Новая мясо', // текст новой записи
			'view_item'          => 'Смотреть мясо', // для просмотра записи этого типа.
			'search_items'       => 'Искать мясо', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Мясо', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	//мясо-индейка
	register_post_type('indeika', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'indeika', // основное название для типа записи
			'singular_name'      => 'indeika', // название для одной записи этого типа
			'add_new'            => 'Добавить indeika', // для добавления новой записи
			'add_new_item'       => 'Добавление indeika', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование indeika', // для редактирования типа записи
			'new_item'           => 'Новая indeika', // текст новой записи
			'view_item'          => 'Смотреть indeika', // для просмотра записи этого типа.
			'search_items'       => 'Искать indeika', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Индейка', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

//мясо-курица
	register_post_type('kurica', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'kurica', // основное название для типа записи
			'singular_name'      => 'kurica', // название для одной записи этого типа
			'add_new'            => 'Добавить kurica', // для добавления новой записи
			'add_new_item'       => 'Добавление kurica', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование kurica', // для редактирования типа записи
			'new_item'           => 'Новая kurica', // текст новой записи
			'view_item'          => 'Смотреть kurica', // для просмотра записи этого типа.
			'search_items'       => 'Искать kurica', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Курица', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	//мясо-телятина
	register_post_type('telyatina', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'telyatina', // основное название для типа записи
			'singular_name'      => 'telyatina', // название для одной записи этого типа
			'add_new'            => 'Добавить telyatina', // для добавления новой записи
			'add_new_item'       => 'Добавление telyatina', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование telyatina', // для редактирования типа записи
			'new_item'           => 'Новая telyatina', // текст новой записи
			'view_item'          => 'Смотреть telyatina', // для просмотра записи этого типа.
			'search_items'       => 'Искать telyatina', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Телятина', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	//дети
	register_post_type('children', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'children', // основное название для типа записи
			'singular_name'      => 'Детское блюдо', // название для одной записи этого типа
			'add_new'            => 'Добавить детское', // для добавления новой записи
			'add_new_item'       => 'Добавление детского', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование детского', // для редактирования типа записи
			'new_item'           => 'Новая детское блюдо', // текст новой записи
			'view_item'          => 'Смотреть детское блюдо', // для просмотра записи этого типа.
			'search_items'       => 'Искать детское блюдо', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Детские рецепты', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	//актуальное

	register_post_type('relevant_posts', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'relevant', // основное название для типа записи
			'singular_name'      => 'Актуальный пост', // название для одной записи этого типа
			'add_new'            => 'Добавить Актуальный пост', // для добавления новой записи
			'add_new_item'       => 'Добавление Актуальный пост', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Актуальный пост', // для редактирования типа записи
			'new_item'           => 'Новая Актуальный пост', // текст новой записи
			'view_item'          => 'Смотреть Актуальный пост', // для просмотра записи этого типа.
			'search_items'       => 'Искать Актуальный пост', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Актуальные рецепты', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	
	register_post_type('relevant_newyear', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'relevant_newyear', // основное название для типа записи
			'singular_name'      => 'Актуальный пост', // название для одной записи этого типа
			'add_new'            => 'Добавить Актуальный пост', // для добавления новой записи
			'add_new_item'       => 'Добавление Актуальный пост', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Актуальный пост', // для редактирования типа записи
			'new_item'           => 'Новая Актуальный пост', // текст новой записи
			'view_item'          => 'Смотреть Актуальный пост', // для просмотра записи этого типа.
			'search_items'       => 'Искать Актуальный пост', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Актуальное новый год', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
//12 рожд блюд
register_post_type('christmas12', array(
		'label'  => null,
		'labels' => array(
			'name'               => '12 рождественских блюд', // основное название для типа записи
			'singular_name'      => '12 рождественских блюд', // название для одной записи этого типа
			'add_new'            => 'Добавить 12 рождественских блюд', // для добавления новой записи
			'add_new_item'       => 'Добавление 12 рождественских блюд', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование 12 рождественских блюд', // для редактирования типа записи
			'new_item'           => 'Новая 12 рождественских блюд', // текст новой записи
			'view_item'          => 'Смотреть 12 рождественских блюд', // для просмотра записи этого типа.
			'search_items'       => 'Искать 12 рождественских блюд', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => '12 рождественских блюд', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
//развлечения для детей
register_post_type('cake-child', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'cake-child', // основное название для типа записи
			'singular_name'      => 'Развлечение детям', // название для одной записи этого типа
			'add_new'            => 'Добавить Развлечение детям', // для добавления новой записи
			'add_new_item'       => 'Добавление Развлечение детям', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Развлечение детям', // для редактирования типа записи
			'new_item'           => 'Новая Развлечение детям', // текст новой записи
			'view_item'          => 'Смотреть Развлечение детям', // для просмотра записи этого типа.
			'search_items'       => 'Искать Развлечение детям', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Развлечение детям', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	//актуальное
	register_post_type('relevant_children', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'relevant_children', // основное название для типа записи
			'singular_name'      => 'Актуальный пост', // название для одной записи этого типа
			'add_new'            => 'Добавить Актуальный пост', // для добавления новой записи
			'add_new_item'       => 'Добавление Актуальный пост', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Актуальный пост', // для редактирования типа записи
			'new_item'           => 'Новая Актуальный пост', // текст новой записи
			'view_item'          => 'Смотреть Актуальный пост', // для просмотра записи этого типа.
			'search_items'       => 'Искать Актуальный пост', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Актуальное детям', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

register_post_type('international', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'international', // основное название для типа записи
			'singular_name'      => 'Актуальный пост', // название для одной записи этого типа
			'add_new'            => 'Добавить Актуальный пост', // для добавления новой записи
			'add_new_item'       => 'Добавление Актуальный пост', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Актуальный пост', // для редактирования типа записи
			'new_item'           => 'Новая Актуальный пост', // текст новой записи
			'view_item'          => 'Смотреть Актуальный пост', // для просмотра записи этого типа.
			'search_items'       => 'Искать Актуальный пост', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Вкусное из других стран', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

register_post_type('popular', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'popular', // основное название для типа записи
			'singular_name'      => 'Актуальный пост', // название для одной записи этого типа
			'add_new'            => 'Добавить Актуальный пост', // для добавления новой записи
			'add_new_item'       => 'Добавление Актуальный пост', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Актуальный пост', // для редактирования типа записи
			'new_item'           => 'Новая Актуальный пост', // текст новой записи
			'view_item'          => 'Смотреть Актуальный пост', // для просмотра записи этого типа.
			'search_items'       => 'Искать Актуальный пост', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Поулярные темы', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );






	//новогоднее
	register_post_type('christmas', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'christmas', // основное название для типа записи
			'singular_name'      => 'christmas', // название для одной записи этого типа
			'add_new'            => 'Добавить christmas', // для добавления новой записи
			'add_new_item'       => 'Добавление christmas', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование christmas', // для редактирования типа записи
			'new_item'           => 'Новая christmas', // текст новой записи
			'view_item'          => 'Смотреть christmas', // для просмотра записи этого типа.
			'search_items'       => 'Искать christmas', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Новогодние рецепты', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	//мультиварка
	register_post_type('shteba', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'shteba', // основное название для типа записи
			'singular_name'      => 'shteba', // название для одной записи этого типа
			'add_new'            => 'Добавить рецепт для shteba', // для добавления новой записи
			'add_new_item'       => 'Добавление рецепта для shteba', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рецепта для shteba', // для редактирования типа записи
			'new_item'           => 'Новый рецепт для shteba', // текст новой записи
			'view_item'          => 'Смотреть рецепт для shteba', // для просмотра записи этого типа.
			'search_items'       => 'Искать рецепт для shteba', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Рецепты для мультиварки', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	//глютен
	register_post_type('gluten', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'gluten', // основное название для типа записи
			'singular_name'      => 'gluten', // название для одной записи этого типа
			'add_new'            => 'Добавить рецепт для gluten', // для добавления новой записи
			'add_new_item'       => 'Добавление рецепта для gluten', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рецепта для gluten', // для редактирования типа записи
			'new_item'           => 'Новый рецепт для gluten', // текст новой записи
			'view_item'          => 'Смотреть рецепт для gluten', // для просмотра записи этого типа.
			'search_items'       => 'Искать рецепт для gluten', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Блюда без глютена', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	
	//глютен2
	register_post_type('gluten_allergy', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'gluten_allergy', // основное название для типа записи
			'singular_name'      => 'gluten_allergy', // название для одной записи этого типа
			'add_new'            => 'Добавить рецепт для gluten_allergy', // для добавления новой записи
			'add_new_item'       => 'Добавление рецепта для gluten_allergy', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рецепта для gluten_allergy', // для редактирования типа записи
			'new_item'           => 'Новый рецепт для gluten_allergy', // текст новой записи
			'view_item'          => 'Смотреть рецепт для gluten_allergy', // для просмотра записи этого типа.
			'search_items'       => 'Искать рецепт для gluten_allergy', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Аллергия на глютен', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	
	register_post_type('salat', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'salat', // основное название для типа записи
			'singular_name'      => 'salat', // название для одной записи этого типа
			'add_new'            => 'Добавить рецепт для salat', // для добавления новой записи
			'add_new_item'       => 'Добавление рецепта для salat', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рецепта для salat', // для редактирования типа записи
			'new_item'           => 'Новый рецепт для salat', // текст новой записи
			'view_item'          => 'Смотреть рецепт для salat', // для просмотра записи этого типа.
			'search_items'       => 'Искать рецепт для salat', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Салаты', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
) );

	//коктейли
	register_post_type('cocktail', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'cocktail', // основное название для типа записи
			'singular_name'      => 'cocktail', // название для одной записи этого типа
			'add_new'            => 'Добавить рецепт для cocktail', // для добавления новой записи
			'add_new_item'       => 'Добавление рецепта для cocktail', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рецепта для cocktail', // для редактирования типа записи
			'new_item'           => 'Новый рецепт для cocktail', // текст новой записи
			'view_item'          => 'Смотреть рецепт для cocktail', // для просмотра записи этого типа.
			'search_items'       => 'Искать рецепт для cocktail', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Коктейли', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	
	//низкокалорийные блюда
	register_post_type('smallkalory', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'smallkalory', // основное название для типа записи
			'singular_name'      => 'smallkalory', // название для одной записи этого типа
			'add_new'            => 'Добавить рецепт для smallkalory', // для добавления новой записи
			'add_new_item'       => 'Добавление рецепта для smallkalory', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рецепта для smallkalory', // для редактирования типа записи
			'new_item'           => 'Новый рецепт для smallkalory', // текст новой записи
			'view_item'          => 'Смотреть рецепт для smallkalory', // для просмотра записи этого типа.
			'search_items'       => 'Искать рецепт для smallkalory', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Низкокалорийные блюда', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	
	//завтрак
	register_post_type('breakfast', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'breakfast', // основное название для типа записи
			'singular_name'      => 'breakfast', // название для одной записи этого типа
			'add_new'            => 'Добавить рецепт для breakfast', // для добавления новой записи
			'add_new_item'       => 'Добавление рецепта для breakfast', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рецепта для breakfast', // для редактирования типа записи
			'new_item'           => 'Новый рецепт для breakfast', // текст новой записи
			'view_item'          => 'Смотреть рецепт для breakfast', // для просмотра записи этого типа.
			'search_items'       => 'Искать рецепт для breakfast', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Завтрак', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	//день валентина
	register_post_type('valentin', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'valentin', // основное название для типа записи
			'singular_name'      => 'valentin', // название для одной записи этого типа
			'add_new'            => 'Добавить рецепт для valentin', // для добавления новой записи
			'add_new_item'       => 'Добавление рецепта для valentin', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рецепта для valentin', // для редактирования типа записи
			'new_item'           => 'Новый рецепт для valentin', // текст новой записи
			'view_item'          => 'Смотреть рецепт для valentin', // для просмотра записи этого типа.
			'search_items'       => 'Искать рецепт для valentin', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Блюда на день Валентина', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	
	
	//ацетон

	register_post_type('azeton', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'azeton', // основное название для типа записи
			'singular_name'      => 'azeton', // название для одной записи этого типа
			'add_new'            => 'Добавить рецепт для azeton', // для добавления новой записи
			'add_new_item'       => 'Добавление рецепта для azeton', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рецепта для azeton', // для редактирования типа записи
			'new_item'           => 'Новый рецепт для azeton', // текст новой записи
			'view_item'          => 'Смотреть рецепт для azeton', // для просмотра записи этого типа.
			'search_items'       => 'Искать рецепт для azeton', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Ацетон', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
) );
//диетические блюда

	register_post_type('dieta', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'dieta', // основное название для типа записи
			'singular_name'      => 'dieta', // название для одной записи этого типа
			'add_new'            => 'Добавить рецепт для dieta', // для добавления новой записи
			'add_new_item'       => 'Добавление рецепта для dieta', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рецепта для dieta', // для редактирования типа записи
			'new_item'           => 'Новый рецепт для dieta', // текст новой записи
			'view_item'          => 'Смотреть рецепт для dieta', // для просмотра записи этого типа.
			'search_items'       => 'Искать рецепт для dieta', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'При непереносимости лактозы', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
) );

	//чешские блюда
	register_post_type('chehia', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'chehia', // основное название для типа записи
			'singular_name'      => 'chehia', // название для одной записи этого типа
			'add_new'            => 'Добавить рецепт для chehia', // для добавления новой записи
			'add_new_item'       => 'Добавление рецепта для chehia', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рецепта для chehia', // для редактирования типа записи
			'new_item'           => 'Новый рецепт для chehia', // текст новой записи
			'view_item'          => 'Смотреть рецепт для chehia', // для просмотра записи этого типа.
			'search_items'       => 'Искать рецепт для chehia', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Чешская кухня', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
) );

	//немецкие блюда
	register_post_type('germany', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'germany', // основное название для типа записи
			'singular_name'      => 'germany', // название для одной записи этого типа
			'add_new'            => 'Добавить рецепт для germany', // для добавления новой записи
			'add_new_item'       => 'Добавление рецепта для germany', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рецепта для germany', // для редактирования типа записи
			'new_item'           => 'Новый рецепт для germany', // текст новой записи
			'view_item'          => 'Смотреть рецепт для germany', // для просмотра записи этого типа.
			'search_items'       => 'Искать рецепт для germany', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Немецкая кухня', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
) );

//грузинские блюда
	register_post_type('georgia', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'georgia', // основное название для типа записи
			'singular_name'      => 'georgia', // название для одной записи этого типа
			'add_new'            => 'Добавить рецепт для georgia', // для добавления новой записи
			'add_new_item'       => 'Добавление рецепта для georgia', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование рецепта для georgia', // для редактирования типа записи
			'new_item'           => 'Новый рецепт для georgia', // текст новой записи
			'view_item'          => 'Смотреть рецепт для georgia', // для просмотра записи этого типа.
			'search_items'       => 'Искать рецепт для georgia', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Грузинская кухня', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
) );
}

	// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy( 'skills', [ 'portfolio', 'post' ], [ 
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Skills',
			'singular_name'     => 'Skill',
			'search_items'      => 'Search Skill',
			'all_items'         => 'All Skill',
			'view_item '        => 'View Skill',
			'parent_item'       => 'Parent Skill',
			'parent_item_colon' => 'Parent Skill:',
			'edit_item'         => 'Edit Skill',
			'update_item'       => 'Update Skill',
			'add_new_item'      => 'Add New Skill',
			'new_item_name'     => 'New Skill Name',
			'menu_name'         => 'Skills',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,
		'rewrite'               => true,

	] );
}
add_action( 'init', 'skills_for_portfolio' );
function skills_for_portfolio(){
	register_taxonomy_for_object_type( 'skills', 'portfolio');
}

add_action( 'init', 'register_group_post_type' );
function register_group_post_type() {

  // Слайдер - тип записи
  register_post_type('slider', array(
    'label'               => 'Слайдер',
    'labels'              => array(
      'name'          => 'Слайдер',
      'singular_name' => 'Слайдер',
      'menu_name'     => 'Слайдер',
      'all_items'     => 'Все слайды',
      'add_new'       => 'Добавить слайд',
      'add_new_item'  => 'Добавить новый слайд',
      'edit'          => 'Редактировать',
      'edit_item'     => 'Редактировать слайд',
      'new_item'      => 'Новый слайд',
    ),
    'description'         => 'Слайдер для главной страницы',
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_rest'        => true,
    'rest_base'           => '',
    'show_in_menu'        => true,
    'exclude_from_search' => false,
    'capability_type'     => 'post',
    'map_meta_cap'        => true,
    'menu_icon'           => 'dashicons-format-image',
    'hierarchical'        => false,
    'rewrite'             => true,
    'has_archive'         => false,
    'query_var'           => true,
    'supports'            => array('title','editor','author','thumbnail','excerpt','comments')
  ) );

}
function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'Left Sidebar',
		'id'            => "left_sidebar",
		'description'   => '',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n"
	) );
}
function register_my_widgets2(){
	register_sidebar( array(
		'name'          => 'Right Sidebar',
		'id'            => "right_sidebar",
		'description'   => '',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n"
	) );
}
function register_home_widgets(){
	register_sidebar( array(
		'name'          => 'home-sidebar',
		'id'            => "home_sidebar",
		'description'   => '',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n"
	) );
}

function register_index_widgets(){
	register_sidebar( array(
		'name'          => 'index-sidebar',
		'id'            => "index_sidebar",
		'description'   => '',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n"
	) );
}
function theme_register_nav_menu() {
	register_nav_menu( 'top', 'top-header' );
	register_nav_menu( 'bottom', 'bottom-footer' );
	register_nav_menu( 'page', 'header-page' );
	register_nav_menu( 'home', 'home-page' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails', array( 'post', 'portfolio', 'slider', 'first_meal', 'second_meal', 'bakery', 'porridge', 'fish', 'meat', 'children', 'relevant_posts','relevant_newyear', 'relevant_children','christmas', 'salat', 'shteba', 'gluten-free', 'cocktail', 'valentin', 'smallkalory', 'international', 'popular', 'breakfast', 'christmas12', 'cake-child', 'azeton', 'dieta', 'chehia', 'germany', 'georgia', 'gluten', 'indeika', 'kurica', 'gluten_allergy', 'telyatina') );
	add_theme_support( 'post-formats', array('video', 'aside', 'gallery', 'chat', 'audio', 'image', 'quote', 'status', 'link') );
	add_image_size( 'post_thumb', 1300, 500, true );
	add_image_size( 'single_thumb', 700, 400, true );
	//add_filter( 'excerpt_more', 'new_excerpt_more' );
	//function new_excerpt_more( $more ){
		//global $post;
		//return '<a href="'. get_permalink($post) . '"> Read more...</a>';
}
//}
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/
	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}
add_filter( 'document_title_separator', 'filter_function_name_1525' );
function filter_function_name_1525( $sep ){
	$sep = ' | ';

	return $sep;
}

function style_theme() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css' );
	wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
		wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css' );

}

function scripts_theme() {
	wp_deregister_script( 'jquery' );
	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', null, null, false);
	wp_enqueue_script( 'init',  get_template_directory_uri() . '/assets/js/init.js', ['jquery'], null, true);
	wp_enqueue_script( 'doubletaptogo',  get_template_directory_uri() . '/assets/js/doubletaptogo.js', ['jquery'], null, true);
	wp_enqueue_script( 'flexslider',  get_template_directory_uri() . '/assets/js/jquery.flexslider.js', ['jquery'], null, true);
}

//add_action( 'my_action', 'action_function');
//function action_function() {
	//echo 'Hello!';
//}
add_shortcode( 'my_short', 'short_function');
function short_function() {
	return 'ИНГРЕДИЕНТЫ:';
}

function Generate_iframe( $atts ) {
	$atts = shortcode_atts( array(
		'href'   => 'https://www.gutekueche.at/deutsche-kuchen-rezepte',
		'height' => '550px',
		'width'  => '600px',     
	), $atts );

	return '<iframe src="'. $atts['href'] .'" width="'. $atts['width'] .'" height="'. $atts['height'] .'"> <p>Your Browser does not support Iframes.</p></iframe>';
}
add_shortcode('iframe', 'Generate_iframe');
// использование: [iframe href="https://www.gutekueche.at/deutsche-kuchen-rezepte" height="480" width="640"]

// фотогалерея-слайдер

function pre_get_posts_more( $query ) {
if ( !is_admin() && $query->is_main_query() && is_search() ) {
$query->set( 'posts_per_page', 30 );
}
}
add_action( 'pre_get_posts', 'pre_get_posts_more' );

/* Подсчет количества посещений страниц
---------------------------------------------------------- */
/*add_action('wp_head', 'kama_postviews');
function kama_postviews() {

/* ------------ Настройки -------------- */
$meta_key       = 'views';  // Ключ мета поля, куда будет записываться количество просмотров.
$who_count      = 1;            // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
$exclude_bots   = 1;            // Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.

/*global $user_ID, $post;
	if(is_singular()) {
		$id = (int)$post->ID;
		static $post_views = false;
		if($post_views) return true; // чтобы 1 раз за поток
		$post_views = (int)get_post_meta($id,$meta_key, true);
		$should_count = false;
		switch( (int)$who_count ) {
			case 0: $should_count = true;
				break;
			case 1:
				if( (int)$user_ID == 0 )
					$should_count = true;
				break;
			case 2:
				if( (int)$user_ID > 0 )
					$should_count = true;
				break;
		}
		if( (int)$exclude_bots==1 && $should_count ){
			$useragent = $_SERVER['HTTP_USER_AGENT'];
			$notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
			$bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
			if ( !preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent) )
				$should_count = false;
		}

		if($should_count)
			if( !update_post_meta($id, $meta_key, ($post_views+1)) ) add_post_meta($id, $meta_key, 1, true);
	}
	return true;
}*/