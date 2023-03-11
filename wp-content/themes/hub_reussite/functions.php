<?php
/**
 * Hub de la Réussite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hub_de_la_Réussite
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'hub_reussite_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hub_reussite_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Hub de la Réussite, use a find and replace
		 * to change 'hub_reussite' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hub_reussite', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'hub_reussite' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'hub_reussite_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
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
	}
endif;
add_action( 'after_setup_theme', 'hub_reussite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hub_reussite_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hub_reussite_content_width', 640 );
}

add_action( 'after_setup_theme', 'hub_reussite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hub_reussite_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hub_reussite' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hub_reussite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'hub_reussite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hub_reussite_scripts() {
	wp_enqueue_style( 'hub_reussite-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'hub_reussite-style', 'rtl', 'replace' );
	//add a bootstrap css
	wp_enqueue_style( 'hub_reussite-fontawesome', get_template_directory_uri() . '/css/fontawesome/css/all.css', array(), 1, 'all' );
	wp_enqueue_style( 'hub_reussite-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all' );
	wp_enqueue_style( 'hub_reussite-custom-css', get_template_directory_uri() . '/css/styles.css?v=' . time(), array(), array( '' ) );
	wp_enqueue_style( 'hub_reussite-video-css', get_template_directory_uri() . '/css/video/videopreviw/videopreviw.css?v=' . time(), array(), array( '' ) );
	wp_enqueue_style( 'hub_reussite-select-css', get_template_directory_uri() . '/css/form/css/select2.min.css?v=' . time(), array(), array( 'hub_reussite-bootstrap-css' ) );
	wp_enqueue_script( 'hub_reussite-videopreviw-jqjs', get_template_directory_uri() . '/css/video/videopreviw/jquery.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'hub_reussite-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'hub_reussite-select-js', get_template_directory_uri() . '/css/form/js/select2.full.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'hub_reussite-filter-actuality', get_template_directory_uri() . '/js/filter-actuality.js', array( 'hub_reussite-select-js' ), _S_VERSION, true );
	wp_enqueue_script( 'hub_reussite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'hub_reussite-custom-js', get_template_directory_uri() . '/js/customizer.js', array( 'jquery' ), '20170710', true );
	wp_enqueue_script( 'hub_reussite-videopreviw-js', get_template_directory_uri() . '/css/video/videopreviw/videopreviw.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'hub_reussite-videopreviwinit-js', get_template_directory_uri() . '/css/video/videopreviw/videopreviw-init.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'hub_reussite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'hub_reussite_scripts' );


function my_admin_enqueue_scripts() {
	wp_enqueue_script( 'my-admin-js', get_template_directory_uri() . '/js/dynamic-select-on-select.js', array(), '1.0.0', true );
}

add_action( 'acf/input/admin_enqueue_scripts', 'my_admin_enqueue_scripts' );


// end public function enqueue_script
/**
 *add image size
 */

add_image_size( 'large-actuality-list', 708, 496, true );
add_image_size( 'small-actuality-list', 340, 238, true );

function getAllcat( $add_name = false, $sorted = true ) {
	$cat_ids      = [];
	$taxonomy     = 'actuality_thematique';
	$show_count   = 0;
	$pad_counts   = 0;
	$hierarchical = 1;
	$title        = '';
	$empty        = 0;

	$args           = array(
		'taxonomy'     => $taxonomy,
		'show_count'   => $show_count,
		'pad_counts'   => $pad_counts,
		'hierarchical' => $hierarchical,
		'title_li'     => $title,
		'hide_empty'   => $empty
	);
	$all_categories = get_categories( $args );
	if ( ! empty( $all_categories ) ) {
		foreach ( $all_categories as $cat ) {
			if ( $cat->category_parent == 0 ) {
				$category_id = $cat->term_id;

				$args2    = array(
					'taxonomy'     => $taxonomy,
					'child_of'     => 0,
					'parent'       => $category_id,
					'show_count'   => $show_count,
					'pad_counts'   => $pad_counts,
					'hierarchical' => $hierarchical,
					'title_li'     => $title,
					'hide_empty'   => $empty
				);
				$sub_cats = get_categories( $args2 );
				$key      = $sorted ? $cat->slug : 'tags';
				if ( $sub_cats ) {
					foreach ( $sub_cats as $sub_category ) {
						if ( $add_name ) {
							$cat_ids[ $key ][ $sub_category->term_id ] = $sub_category->name;
						} else {
							$cat_ids[ $key ][] = $sub_category->name;
						}

					}
				}
			}
		}

		return $cat_ids;
	}

	return $cat_ids;
}
function getName($tag_id) {
	get_term( $tag_id );
	return get_term( $tag_id )->name;
}

function getColor( $slug) {
	switch ( $slug ) {
		case 'accelerate':
			return 'blue';
			break;
		case 'form':
			return 'red';
			break;
		case 'reveal':
			return 'orange';
			break;
			case 'hub':
			return 'grey-tag';
			break;
		default:
			return 'orange';
	}

}




function wpbeginner_numeric_posts_nav($wp_query) {


	/*d($wp_query);
	d($wp_query->max_num_pages);
	d(get_query_var( 'paged' ));*/
	/** Stop execution if there's only 1 page */
	if ( $wp_query->max_num_pages <= 1 ) {
		return;
	}

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );
	$links = [];
	/** Add current page to the array */
	if ( $paged >= 1 ) {
		$links[] = $paged;
	}

	/** Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 1;
		$links[] = $paged + 2;
	}

	echo '<nav aria-label="Page navigation post-paginate" class="aligncenter">
			<ul class="pagination pagination-post">' . "\n";

	/** First Post Link */
	$class = 1 != $paged ? 'class="page-item"' : 'class="page-item disabled"';
	$link  = 1 != $paged ? esc_url( get_pagenum_link( 1 ) ) : "#";
	printf( '<li %s><a href="%s" class="page-link first"><i class="fas fa-angle-double-left"></i>' . "\n", $class, $link );

	/** Previous Post Link */
	$class = 1 != $paged ? 'class="page-item"' : 'class="page-item disabled"';
	$link  = 1 != $paged ? esc_url( get_pagenum_link( $paged - 1 ) ) : "#";
	printf( '<li %s><a href="%s" class="page-link prev"><i class="fas fa-angle-left"></i>' . "\n", $class, $link );


	/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? 'class="page-item active"' : 'class="page-item"';

		printf( '<li %s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) ) {
			echo '<li class="page-item"><a class="page-link" href="#">...</a></li>';
		}
	}


	/** Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? 'class="page-item active"' : 'class="page-item"';
		printf( '<li %s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}


	/** Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) ) {
			echo '<li class="page-item"><a class="page-link" href="#">...</a></li>' . "\n";
		}

		$class = $paged == $max ? 'class="page-item active"' : 'class="page-item"';
		printf( '<li %s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/** Next Post Link */
	$class = $paged != $max ? 'class="page-item"' : 'class="page-item inactive"';
	$link  = $paged != $max ? esc_url( get_pagenum_link( $paged + 1 ) ) : "";
	printf( '<li %s><a href="%s" class="page-link next"><i class="fas fa-angle-right"></i></a></li>' . "\n", $class, $link );

	/** Last Post Link */
	$class = $paged != $max ? 'class="page-item"' : 'class="page-item inactive"';
	$link  = $paged != $max ? esc_url( get_pagenum_link( $max ) ) : "";
	printf( '<li %s><a href="%s" class="page-link last"><i class="fas fa-angle-double-right"></i></a></li>' . "\n", $class, $link );

	echo '</ul></nav>' . "\n";

}

;


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// state field on post
add_action( 'acf/load_field/name=tag', 'load_tag_choices' );
add_action('wp_ajax_load_tag_choices',  'ajax_load_tag_choices');
function load_tag_choices( $field ) {
	global $post;
	if ( ! $post ||
	     ! isset( $post->ID ) ||
	     get_post_type( $post->ID ) != 'actuality'
	) {
		return $field;
	}
	$field_value = get_field( 'thematique', $post->ID );

	$cat_array = getAllcat( true );
	$slug_name = $field_value === null ? 'accelerate' : $field_value['value'];

	if ( array_key_exists( $slug_name, $cat_array ) ) {
		$field['choices'] = $cat_array[ $slug_name ];
	}

	return $field;
}

function ajax_load_tag_choices() {

	if ( ! wp_verify_nonce( $_POST['nonce'], 'acf_nonce' ) ) {
		die();
	}
	$state = 0;
	if (isset($_POST['state'])) {
		$state = $_POST['state'];
	}

	$choices   = [];
	$cat_array = getAllcat( true );
	$slug_name =  $state;
	if ( array_key_exists( $slug_name, $cat_array ) ) {
		foreach ( $cat_array[ $slug_name ] as $value => $label ) {
			$choices[] = array( 'value' => $value, 'label' => $label );
		}
	}
	echo json_encode( $choices);
	exit;
}


/* Remove Custom Taxonomy Meta Boxes */
function hub_remove_tax_meta() {
	remove_meta_box( 'actuality_thematiquediv', false, 'normal' );
}

add_action( 'add_meta_boxes' , 'hub_remove_tax_meta' );


