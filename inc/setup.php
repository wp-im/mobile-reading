<?php
/**
 * Reading native theme functions.
 *
 * @package Reading
 */

/**
 * Setup.
 */
function reading_setup() {
	load_theme_textdomain( 'reading', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_editor_style( 'assets/css/editor.css' );
	register_nav_menus(
		array(
			'primary' => __( '主导航抽屉', 'reading' ),
			'topics'  => __( '专题抽屉', 'reading' ),
			'footer'  => __( '页脚', 'reading' ),
		)
	);
}
add_action( 'after_setup_theme', 'reading_setup' );
/**
 * Content width.
 */
function reading_content_width() {
	$GLOBALS['content_width'] = 680; }
add_action( 'after_setup_theme', 'reading_content_width', 0 );
/**
 * Widgets init.
 */
function reading_widgets_init() {
	foreach ( array(
		'navigation'    => '主导航抽屉补充',
		'topics'        => '专题抽屉补充',
		'tools'         => '小工具抽屉',
		'header'        => '页首',
		'home-before'   => '首页列表前',
		'home-after'    => '首页列表后',
		'article-after' => '文章后',
		'footer'        => '页脚',
	) as $id => $label ) {
		register_sidebar(
			array(
				'id'            => 'reading-' . $id,
				'name'          => $label,
				'description'   => __( '可选区域，留空不显示。', 'reading' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
}
add_action( 'widgets_init', 'reading_widgets_init' );
/**
 * Sanitize skin.
 *
 * @param string $value Requested skin identifier.
 */
function reading_sanitize_skin( $value ) {
	if ( ! is_string( $value ) ) {
		return 'reading-platinum'; }
	$skins = reading_skins();
	return isset( $skins[ $value ] ) ? $value : 'reading-platinum'; }
/**
 * Skin.
 */
function reading_skin() {
	return reading_sanitize_skin( get_theme_mod( 'reading_skin', 'reading-platinum' ) ); }
/**
 * Customize.
 *
 * @param WP_Customize_Manager $manager Native Customizer manager.
 */
function reading_customize( $manager ) {
	$manager->add_section(
		'reading_design',
		array(
			'title'    => __( 'Reading 皮肤', 'reading' ),
			'priority' => 30,
		)
	);
	$manager->add_setting(
		'reading_skin',
		array(
			'default'           => 'reading-platinum',
			'sanitize_callback' => 'reading_sanitize_skin',
			'transport'         => 'refresh',
		)
	);
	$manager->add_control(
		'reading_skin',
		array(
			'section'     => 'reading_design',
			'label'       => __( '选择皮肤', 'reading' ),
			'description' => __( '只改变外观，保留文章、菜单与小工具。', 'reading' ),
			'type'        => 'select',
			'choices'     => array_map(
				static function ( $skin ) {
							return $skin['name'];
				},
				reading_skins()
			),
		)
	);
}
add_action( 'customize_register', 'reading_customize' );
/**
 * Assets.
 */
function reading_assets() {
	wp_enqueue_style( 'reading', get_stylesheet_uri(), array(), READING_VERSION );
	wp_enqueue_style( 'reading-skin', get_template_directory_uri() . '/assets/css/skins/' . reading_skin() . '.css', array( 'reading' ), READING_VERSION );
	wp_enqueue_style( 'reading-wordpress', get_template_directory_uri() . '/assets/css/wordpress.css', array( 'reading-skin' ), READING_VERSION );
	wp_enqueue_style( 'reading-adapter', get_template_directory_uri() . '/assets/css/adapters/' . reading_skin() . '.css', array( 'reading-wordpress' ), READING_VERSION );
	wp_enqueue_script( 'reading-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), READING_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' ); }
}
add_action( 'wp_enqueue_scripts', 'reading_assets' );
add_filter(
	'body_class',
	static function ( $classes ) {
		$classes[] = 'reading-wp';
		$classes[] = reading_skin();
		return $classes;
	}
);
