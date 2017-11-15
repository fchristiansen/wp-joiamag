<?php // custom functions.php template @ digwp.com

// Woocommerce functions
  if (class_exists('woocommerce')) {
    require_once(get_template_directory() . '/woocommerce/cmsms-woo-functions.php');
  }

  // remueve adminbar en front
    add_filter( 'show_admin_bar', '__return_false' );


function iniciarTema(){

    // ACTIVA IMAGENES DESTACADAS
    add_theme_support( 'post-thumbnails' );
    add_image_size('preview_programacion', 400, 289, true);
    add_image_size('imagen-destacada-secundaria', 600, 400, true);
    add_image_size('store-item', 600, 400, true);
    add_image_size('related-thumb', 400, 400, true);
/*     add_image_size('galeria', 200); */

    // Activar Titulo
    add_theme_support( 'title-tag' );
    register_nav_menu( 'primary', __( 'Menú Principal', 'menu_principal' ) );
  }
  // Cuando ocurra 'after_setup_theme, invocar "iniciarTema"
  add_action( 'after_setup_theme', 'iniciarTema' );

// carga css
function theme_styles() {
    wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1', 'screen' );
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1', 'screen' );
    wp_enqueue_style('style-joia', get_template_directory_uri() . '/assets/css/main.css', array(), '1', 'screen' );
    wp_enqueue_style('style-tienda', get_template_directory_uri() . '/assets/css/tienda.css', array(), '1', 'screen' );
    wp_enqueue_style('style-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1', 'screen' );
}

// carga js
function jquery_cdn() {
   if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', true, '2.2.4');
        wp_enqueue_script('jquery');
   }
}


function theme_js(){
/*

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfb8y5fLrqf0xiysVqZqPzqAghs6hKPu8" async defer></script>
    wp_enqueue_script('tether-js', 'http://maps.google.com/maps/api/js?sensor=false', array('jquery'),'', true);
*/
    wp_enqueue_script('gamaps-js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCybKSYiwSR3qmjv718Hj5KpNkCQ0lD7TA', array('jquery'),'', true);
    wp_enqueue_script('tether-js', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'),'', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'),'', true);
    wp_enqueue_script('workaround-js', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', array('jquery'),'', true);
    wp_enqueue_script('owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'),'2.2.1', true);
    wp_enqueue_script('jquery_easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'),'1.2.2', true);
    wp_enqueue_script('scrolling-nav', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array('jquery'),'1', true);
    wp_enqueue_script('nexprev-js', get_template_directory_uri() . '/assets/js/nextprev.js', array('jquery'),'1', true);
    wp_enqueue_script('tweenmax-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.1/TweenMax.min.js', array('jquery'),'', true);
    wp_enqueue_script('joiajs', get_template_directory_uri() . '/assets/js/script.js', array('jquery'),'1', true);
    wp_enqueue_script('cmsms-woo-js', get_template_directory_uri() . '/assets/js/cmsms-woo.js', array('jquery'),'1', true);

}
  add_action('wp_enqueue_scripts', 'theme_styles');
  add_action('init', 'jquery_cdn');
  add_action('wp_enqueue_scripts', 'theme_js');


remove_action('welcome_panel', 'wp_welcome_panel');



// add feed links to header
if (function_exists('automatic_feed_links')) {
	automatic_feed_links();
} else {
	return;
}


// enable threaded comments
function enable_threaded_comments(){
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
			wp_enqueue_script('comment-reply');
		}
}
add_action('get_header', 'enable_threaded_comments');


// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


// add google analytics to footer
function add_google_analytics() {
	echo '<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>';
	echo '<script type="text/javascript">';
	echo 'var pageTracker = _gat._getTracker("UA-XXXXX-X");';
	echo 'pageTracker._trackPageview();';
	echo '</script>';
}
add_action('wp_footer', 'add_google_analytics');


// custom excerpt length
function custom_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');


// custom excerpt ellipses for 2.9+
function custom_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

/* custom excerpt ellipses for 2.8-
function custom_excerpt_more($excerpt) {
	return str_replace('[...]', '...', $excerpt);
}
add_filter('wp_trim_excerpt', 'custom_excerpt_more');
*/


// no more jumping for read more link
function no_more_jumping($post) {
	return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading'.'</a>';
}
add_filter('excerpt_more', 'no_more_jumping');


// add a favicon to your
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');


// add a favicon for your admin
function admin_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.png" />';
}
add_action('admin_head', 'admin_favicon');


// custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/custom-login-logo.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');


// disable all widget areas
function disable_all_widgets($sidebars_widgets) {
	//if (is_home())
		$sidebars_widgets = array(false);
	return $sidebars_widgets;
}
add_filter('sidebars_widgets', 'disable_all_widgets');


// kill the admin nag
if (!current_user_can('edit_users')) {
	add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
	add_filter('pre_option_update_core', create_function('$a', "return null;"));
}


// category id in body and post class
function category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
		$classes [] = 'cat-' . $category->cat_ID . '-id';
		return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');


// get the first category id
function get_first_category_ID() {
	$category = get_the_category();
	return $category[0]->cat_ID;
}

// disable all feeds
function fb_disable_feed() {
	wp_die(__('<h1>Feed not available, please visit our <a href="'.get_bloginfo('url').'">Home Page</a>!</h1>'));
}
add_action('do_feed',      'fb_disable_feed', 1);
add_action('do_feed_rdf',  'fb_disable_feed', 1);
add_action('do_feed_rss',  'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);

// remove version info from head and feeds
function complete_version_removal() {
	return '';
}
add_filter('the_generator', 'complete_version_removal');

// customize admin footer text
function custom_admin_footer() {
	echo '<a href="http://example.com/">Website Design by Awesome Example</a>';
}
add_filter('admin_footer_text', 'custom_admin_footer');

// admin link for all settings
function all_settings_link() {
	add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
}
add_action('admin_menu', 'all_settings_link');

function oddeven_post_class ( $classes ) {
   global $current_class;
   $classes[] = $current_class;
   $current_class = ($current_class == 'odd') ? 'even' : 'odd';
   return $classes;
}
add_filter ( 'post_class' , 'oddeven_post_class' );
global $current_class;
$current_class = 'odd';

function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );

	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

//para multiple  post_thumbnails
if (class_exists('MultiPostThumbnails')) {
            $types = array('post', 'mixtape');
            foreach($types as $type) {
                new MultiPostThumbnails(array(
                    'label' => 'Secondary Image',
                    'id' => 'secondary-image',
                    'post_type' => $type
                    )
                );
            }
        }
////////////////////////////////////

function clean_custom_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
 
        $menu_list  = '<div class="row">' ."\n";
       
 
        $count = 0;
        $submenu = false;
         
        foreach( $menu_items as $menu_item ) {
             
            $link = $menu_item->url;
            $title = $menu_item->title;
             
            if ( !$menu_item->menu_item_parent ) {
                $parent_id = $menu_item->ID;
                 
                $menu_list .= '<div class="col-categoria col-sm-3">' ."\n";
                $menu_list .= '<h2>'.$title.'</h2>' ."\n";
            }
 
            if ( $parent_id == $menu_item->menu_item_parent ) {
 
                if ( !$submenu ) {
                    $submenu = true;
                    $menu_list .= '<ul>' ."\n";
                }
 
                $menu_list .= '<li>' ."\n";
                $menu_list .= '<a href="'.$link.'">'.$title.'</a>' ."\n";
                $menu_list .= '</li>' ."\n";
                     
 
                if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
                    $menu_list .= '</ul>' ."\n";
                    $submenu = false;
                }
 
            }
 
            if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) { 
                $menu_list .= '</div>' ."\n";      
                $submenu = false;
            }
 
            $count++;
        }
         
        
        $menu_list .= '</div>' ."\n";
 
    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }
    echo $menu_list;
}

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'Menu Categorias' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

function misha_my_load_more_scripts() {
 
    global $wp_query; 
 
    // In most cases it is already included on the page and this line can be removed
    wp_enqueue_script('jquery');
 
    // register our main script but do not enqueue it yet
    wp_register_script( 'my_loadmore', get_template_directory_uri() . '/assets/js/myloadmore.js', array('jquery'), false );
 
    // now the most interesting part
    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ) );
 
    wp_enqueue_script( 'my_loadmore' );
}
 
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );

function misha_loadmore_ajax_handler(){
 
    // prepare our arguments for the query
    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';
 
    // it is always better to use WP_Query but not here
    query_posts( $args );
 
    if( have_posts() ) :
 
        // run the loop
        while( have_posts() ): the_post();
 
            // look into your theme code how the posts are inserted, but you can use your own HTML of course
            // do you remember? - my example is adapted for Twenty Seventeen theme
            get_template_part( 'template-parts/post/content', get_post_format() );
            // for the test purposes comment the line above and uncomment the below one
            // the_title();
 
 
        endwhile;
 
    endif;
    die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}