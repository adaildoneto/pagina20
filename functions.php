<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Odin Classes.
 */
require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
//require_once get_template_directory() . '/core/classes/class-shortcodes-menu.php';
require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
require_once get_template_directory() . '/core/classes/class-theme-options.php';
require_once get_template_directory() . '/core/classes/class-options-helper.php';
// require_once get_template_directory() . '/core/classes/class-post-type.php';
// require_once get_template_directory() . '/core/classes/class-taxonomy.php';
// require_once get_template_directory() . '/core/classes/class-metabox.php';
// require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
// require_once get_template_directory() . '/core/classes/class-contact-form.php';
// require_once get_template_directory() . '/core/classes/class-post-form.php';
// require_once get_template_directory() . '/core/classes/class-user-meta.php';
// require_once get_template_directory() . '/core/classes/class-post-status.php';
//require_once get_template_directory() . '/core/classes/class-term-meta.php';

/**
 * Odin Widgets.
 */
require_once get_template_directory() . '/core/classes/widgets/class-widget-like-box.php';

if ( ! function_exists( 'odin_setup_features' ) ) {

	/**
	 * Setup theme features.
	 *
	 * @since 2.2.0
	 */
	function odin_setup_features() {

		/**
		 * Add support for multiple languages.
		 */
		load_theme_textdomain( 'odin', get_template_directory() . '/languages' );

		/**
		 * Register nav menus.
		*/

		// register_nav_menus(
		//	array(
		//		'menu-pagina20' => __( 'Menu Pagina20', 'odin' )
		//	)
		// );*/

		function register_my_menus() {
  register_nav_menus(
    array(
      'menu-pagina20' => __( 'Menu Página 20' ),
			  'menu-colunas' => __( 'Menu Colunas' ),
          )
  );
}
add_action( 'init', 'register_my_menus' );

		 /* Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support Custom Header.
		 */
		$default = array(
			'width'         => 0,
			'height'        => 0,
			'flex-height'   => false,
			'flex-width'    => false,
			'header-text'   => false,
			'default-image' => '',
			'uploads'       => true,
		);

		add_theme_support( 'custom-header', $default );

		/**
		 * Support Custom Background.
		 */
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);

		add_theme_support( 'custom-background', $defaults );

		/**
		 * Support Custom Editor Style.
		 */
		add_editor_style( 'assets/css/editor-style.css' );

		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type'           => 'scroll',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => get_option( 'posts_per_page' )
			)
		);

		/**
		 * Add support for Post Formats.
		 */
		// add_theme_support( 'post-formats', array(
		//     'aside',
		//     'gallery',
		//     'link',
		//     'image',
		//     'quote',
		//     'status',
		//     'video',
		//     'audio',
		//     'chat'
		// ) );

		/**
		 * Support The Excerpt on pages.
		 */
		// add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for custom logo.
		 *
		 *  @since Odin 2.2.10
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );
	}
}

add_action( 'after_setup_theme', 'odin_setup_features' );

/**
 * Register widget areas.
 *
 * @since 2.2.0
 */
function odin_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'odin' ),
			'id' => 'main-sidebar',
			'description' => __( 'Site Main Sidebar', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'odin_widgets_init' );

/**
 * Criando uma area de widgets
 *
 */
 function menumobile_widgets_init() {

 	register_sidebar( array(
 		'name' => 'Menu para Tablets e Celular',
 		'id' => 'menutc',
		'before_widget' => '<div class="no-padding">',
		'after_widget' => '</div>',
		'before_title' => '<span class="wdtitle">',
		'after_title' => '</span>',
 			) );
 }
 add_action( 'widgets_init', 'menumobile_widgets_init' );


function publicidade300x300_widgets_init() {

	register_sidebar( array(
		'name' => 'publicidade300x300',
		'id' => 'publicidade300x300s',
		'before_widget' => '<div id="item" class="col s12 m6 l3"><div class="painel-noticias2 card">',
		'after_widget' => '</div></div>',
			) );
}
add_action( 'widgets_init', 'publicidade300x300_widgets_init' );

function capa20_widgets_init() {

	register_sidebar( array(
		'name' => 'Capa Página 20',
		'id' => 'capa20',
		'before_widget' => '<div class="no-padding">',
		'after_widget' => '</div>',
		'before_title' => '<span class="wdtitle">',
		'after_title' => '</span>',
			) );
}
add_action( 'widgets_init', 'capa20_widgets_init' );

function banner_slider_widgets_init() {

	register_sidebar( array(
		'name' => 'Banner abaixo do slider',
		'id' => 'banner_slider',
		'before_widget' => '<div class="card">',
		'after_widget' => '</div>',
		'before_title' => '<span class="wdtitle">',
		'after_title' => '</span>',
			) );
}
add_action( 'widgets_init', 'banner_slider_widgets_init' );

function banner_slider_big_widgets_init() {

	register_sidebar( array(
		'name' => 'Banner abaixo das noticias',
		'id' => 'banner_slider_big',
		'before_widget' => '<div class="card">',
		'after_widget' => '</div>',
		'before_title' => '<span class="wdtitle">',
		'after_title' => '</span>',
			) );
}
add_action( 'widgets_init', 'banner_slider_big_widgets_init' );

function footer_widgets_init() {

	register_sidebar( array(
		'name' => 'Widgets do Footer',
		'id' => 'wdfooter',
		'before_widget' => '<div class="col s12 m6 l4">',
		'after_widget' => '</div>',
		'before_title' => '<span class="wdtitle">',
		'after_title' => '</span>',
			) );
}
add_action( 'widgets_init', 'footer_widgets_init' );

function video_init() {

	register_sidebar( array(
		'name' => 'Video Destaque',
		'id' => 'videodestaque',
		'before_widget' => '<div class="col s12 m12 l8">',
		'after_widget' => '</div>',
		'before_title' => '<span class="wdtitle">',
		'after_title' => '</span>',
			) );
}
add_action( 'widgets_init', 'video_init' );
/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 *
 * @since 2.2.0
 */
function odin_flush_rewrite() {
	flush_rewrite_rules();
}

add_action( 'after_switch_theme', 'odin_flush_rewrite' );

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function odin_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// Loads Odin main stylesheet.
	wp_enqueue_style( 'odin-style', get_stylesheet_uri(), array(), null, 'all' );

	// jQuery.
	wp_enqueue_script( 'jquery' );

	// Html5Shiv
	wp_enqueue_script( 'html5shiv', $template_url . '/assets/js/html5.js' );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	// General scripts.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		// Bootstrap.
		wp_enqueue_script( 'bootstrap', $template_url . '/assets/js/libs/bootstrap.min.js', array(), null, true );

		// FitVids.
		wp_enqueue_script( 'fitvids', $template_url . '/assets/js/libs/jquery.fitvids.js', array(), null, true );

		// Main jQuery.
		wp_enqueue_script( 'odin-main', $template_url . '/assets/js/main.js', array(), null, true );
	} else {
		// Grunt main file with Bootstrap, FitVids and others libs.
		wp_enqueue_script( 'odin-main-min', $template_url . '/assets/js/main.min.js', array(), null, true );
	}

	// Grunt watch livereload in the browser.
	// wp_enqueue_script( 'odin-livereload', 'http://localhost:35729/livereload.js?snipver=1', array(), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'odin_enqueue_scripts', 1 );

function myprefix_enqueue_scripts() {
		// Pull Masonry from the core of WordPress
		 wp_enqueue_style( 'materializecss', get_template_directory_uri() . '/materialize/css/materialize.css');
		  wp_enqueue_style( 'slickcss', get_template_directory_uri() . '/slick/slick.css');
	 wp_enqueue_style( 'slickcss-theme', get_template_directory_uri() . '/slick/slick-theme.css');
	 wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_script( 'masonry', get_template_directory_uri() . '/assets/js/masonry.pkgd.js' , array(), true );
		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/slick/slick.js', array(), true );
		wp_enqueue_script( 'material-java', get_stylesheet_directory_uri() . '/materialize/js/materialize.min.js', array(), true );
wp_enqueue_script( 'custom-java', get_stylesheet_directory_uri() . '/custom.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'myprefix_enqueue_scripts' );


/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function odin_stylesheet_uri( $uri, $dir ) {
	return $dir . '/assets/css/style.css';
}

add_filter( 'stylesheet_uri', 'odin_stylesheet_uri', 10, 2 );

/**
 * Query WooCommerce activation
 *
 * @since  2.2.6
 *
 * @return boolean
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		return class_exists( 'woocommerce' ) ? true : false;
	}
}

/**
 * Core Helpers.
 */
require_once get_template_directory() . '/core/helpers.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Comments loop.
 */
require_once get_template_directory() . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
require_once get_template_directory() . '/inc/optimize.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * WooCommerce compatibility files.
 */
if ( is_woocommerce_activated() ) {
	add_theme_support( 'woocommerce' );
	require get_template_directory() . '/inc/woocommerce/hooks.php';
	require get_template_directory() . '/inc/woocommerce/functions.php';
	require get_template_directory() . '/inc/woocommerce/template-tags.php';
}


/*
 Customizando a area de login
 */

function custom_login_css() {
echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/assets/css/style.css"/>';
}
add_action('login_head', 'custom_login_css');

// Vai com tudo shortcodes agora tá liberado via widget de texto
add_filter('widget_text','do_shortcode');

function odin_theme_settings_example() {

    $settings = new Odin_Theme_Options(
        'odin-settings', // Slug/ID of the Settings Page (Required)
        'Opções do tema', // Settings page name (Required)
        'manage_options' // Page capability (Optional) [default is manage_options]
    );

    $settings->set_tabs(
        array(
            array(
                'id' => 'odin_html5', // Slug/ID of the Settings tab (Required)
                'title' => __( 'Configuraçoes da Capa', 'odin' ), // Settings tab title (Required)
            ),
          )
    );

    $settings->set_fields(
        array(
            'odin_html5_fields_section' => array( // Slug/ID of the section (Required)
                'tab'   => 'odin_html5', // Tab ID/Slug (Required)
                'title' => __( 'Resolvendo o joelho na capa', 'odin' ), // Section title (Required)
                'fields' => array( // Section fields (Required)

                    /**
                     * Default input examples.
                     */

                    // Text Field.
										// HTML5 number field.
                     array(
                         'id'          => 'materiasP20', // Required
                         'label'       => __( 'Quantidade de Matérias', 'odin' ), // Required
                         'type'        => 'input', // Required
                         // 'default'  => 'Default text', // Optional
                         'description' => __( 'use com responsabilidade', 'odin' ), // Optional
                         'attributes'  => array( // Optional (html input elements)
                             'type' => 'number',
                             'max'  => 20,
                             'min'  => 10
                         )
                     ),

                    )
                )
        	)
    );
}

add_action( 'init', 'odin_theme_settings_example', 1 );
