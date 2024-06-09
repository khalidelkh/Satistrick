<?php

    function udesly_theme_utils_get_term_id_by_slug( $slug, $type ) {
        $term = get_term_by("slug", $slug, $type);

        if ($term) {
            return $term->term_id;
        }
        return 0;
    }

    function udesly_theme_utils_get_post_id_by_slug( $slug, $type ) {
        $post = get_page_by_path($slug, OBJECT, $type);

        if ($post) {
            return $post->ID;
        }
        return 0;
    }

        
    function udesly_adils_awesome_site_9727fe_setup() {
        
/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
        add_theme_support(
            'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
        );
        
        add_theme_support('woocommerce');

        // This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
            'menu-1' => esc_html__('Primary', 'udesly'),
            'header-menu' => esc_html__('Header menu', 'udesly'),
			'about-us' => esc_html__('About us', 'udesly'),
            'useful' => esc_html__('Useful', 'udesly'),
		)
	);

    function attribute_add_nav_menu($item_output, $item) { 
        return preg_replace('/(<a.*?>[^<]*?)(<\/a>)/', '$1' . '<span class="sub-title">' . $item->attr_title . '</span>$2', $item_output); 
    } 
    add_filter('walker_nav_menu_start_el', 'attribute_add_nav_menu', 10, 2);
/**
 * Add support for core custom logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 */
        $logo_width  = 300;
        $logo_height = 100;

        add_theme_support(
            'custom-logo',
                array(
                    'height'               => $logo_height,
                    'width'                => $logo_width,
                    'flex-width'           => true,
                    'flex-height'          => true,
                    'unlink-homepage-logo' => true,
                )
        );

        add_theme_support( 'title-tag' );
        
        add_theme_support( 'menus' );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );
        
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
         
        add_theme_support( 'post-thumbnails' ); 
    }
    
    add_action( 'after_setup_theme', 'udesly_adils_awesome_site_9727fe_setup' );

    add_action( 'admin_notices', function() {
        if (function_exists("udesly_define_post_type")) {
            return;
        }
        $class = 'notice notice-error';
        $message = 'The theme will not work properly without the Udesly App plugin installed!';
        printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
    });
    
    add_action('wp_loaded', function() {
    
        if (!function_exists("udesly_define_post_type") && !is_admin()) {
                wp_die('The theme will not work properly without the Udesly App plugin installed!');
        }
    
    });

    
    
    require_once get_template_directory() . '/tgm-plugin/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'udesly_register_required_plugins' );

function udesly_register_required_plugins() {

    $plugins = array(

        array(
            'name'      => 'Udesly App',
            'slug'      => 'udesly-wp-app',
            'source'    => 'https://github.com/udesly-adapter/udesly-wp-app/archive/master.zip',
        ),
        
    );

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = array(
        'id'           => 'udesly',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );
}




   

    function define_post_types_for_adils_awesome_site_9727fe() {

        if (!function_exists('udesly_define_post_type')) {
            return;
        }
        
        
        
        
    
    }
    
    add_action('init', 'define_post_types_for_adils_awesome_site_9727fe');

    /**
 * Register Custom Post Type "Our Clients"
 *
 * @return void
 */
function register_Our_Client_post_type()
{
	$labels = array(
		'name'               => _x('Our Clients', 'Post Type General Name', 'udesly'),
		'singular_name'      => _x('Our_Client', 'Post Type Singular Name', 'udesly'),
		'menu_name'          => __('Our Clients', 'udesly'),
		'parent_item_colon'  => __('Parent Our_Client:', 'udesly'),
		'all_items'          => __('All Our Clients', 'udesly'),
		'view_item'          => __('View Our_Client', 'udesly'),
		'add_new_item'       => __('Add New Our_Client', 'udesly'),
		'add_new'            => __('Add New', 'udesly'),
		'edit_item'          => __('Edit Our_Client', 'udesly'),
		'update_item'        => __('Update Our_Client', 'udesly'),
		'search_items'       => __('Search Our Clients', 'udesly'),
		'not_found'          => __('Not Found', 'udesly'),
		'not_found_in_trash' => __('Not Found in Trash', 'udesly'),
	);
	$args = array(
		'label'               => __('Our_Client', 'udesly'),
		'description'         => __('Our Clients', 'udesly'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-media-document',
		'menu_position'       => 5,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array('slug' => 'Our Clients'),
		'capability_type'     => 'post',
	);
	register_post_type('Our_Client', $args);
}
add_action('init', 'register_Our_Client_post_type');

    
