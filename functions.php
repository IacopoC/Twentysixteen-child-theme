<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'lemonade', get_stylesheet_directory_uri() . '/css/lemonade.css' );
    wp_enqueue_script( 'jquery-ui-autocomplete' );
    wp_enqueue_script( 'autocomplete', get_stylesheet_directory_uri() . '/js/autocomplete.js',array( 'jquery', 'jquery-ui-autocomplete' ), 1.0, true );
   if(is_page(8)) {
       wp_enqueue_script('more-results', get_stylesheet_directory_uri() . '/js/more-results.js', 1.0, true);
   }
    wp_enqueue_script('scroll-me', get_stylesheet_directory_uri() . '/js/jquery.scrollme.js', array( 'jquery', 'jquery-ui-autocomplete' ), 1.0, true);


}


function film_search_form() {

    include_once get_stylesheet_directory() . '/includes/handler-requests-class.php';

    $handler = new Handler();

    if(isset($_GET['t'])) {
        $search_field = $handler->sanitizeRequest($_GET['t']);

    }
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="/api-ricerca/" >
        <div><label class="screen-reader-text" for="s">' . __( 'Cerca film:' ) . '</label>
        <input type="text" value="' . ((!empty($search_field)) ? $search_field : "") . '" name="t" id="search-film-imdb" />
        <button type="submit" id="searchsubmit" value="search"><i class="fas fa-search"></i></button>
        </div>
    </form>';

    return $form;
}


function rating_stars($atts) {
	
	$star = '<span class="dashicons dashicons-star-filled"></span>';
    $star_half = '<span class="dashicons dashicons-star-half"></span>';
	$empty_star = '<span class="dashicons dashicons-star-empty"></span>';
	
   extract(shortcode_atts(array(
     'rate' => 'rating'
   ), $atts));

if(isset($rate)) {

    switch ($rate) {
        case 1:
            return str_repeat($star, 1) . str_repeat($empty_star, 4);
            break;
        case 2:
            return str_repeat($star, 2) . str_repeat($empty_star, 3);
            break;
        case 2.5:
            return str_repeat($star, 2) . $star_half . str_repeat($empty_star, 2);
            break;
        case 3:
            return str_repeat($star, 3) . str_repeat($empty_star, 2);
            break;
        case 3.5:
            return str_repeat($star, 3) . $star_half . str_repeat($empty_star, 1);
            break;
        case 4:
            return str_repeat($star, 4) . str_repeat($empty_star, 1);
            break;
        case 4.5:
            return str_repeat($star, 4) . $star_half;
            break;
        case 5:
            return str_repeat($star, 5);
            break;
    }
}
}

add_shortcode('rating_stars', 'rating_stars'); 

// Shortcode metabox

function rating_meta_box_markup() { ?>
   <p> [rating_stars rate="n.stelle"] </p>
<?php }


function add_rating_meta_box() {
    add_meta_box("rating-meta-box", "Box Rating Stars Shortcode", "rating_meta_box_markup", "post", "side", "high", null);
}

add_action("add_meta_boxes", "add_rating_meta_box");


// Metabox per votazione


add_action('add_meta_boxes','rating_stars_meta_box_init');

function rating_stars_meta_box_init() {
	add_meta_box("ratingstars-meta", "Votazione film", "rating_stars_meta_box", "post", "side", "high", null);
	
}

function rating_stars_meta_box($post,$box) {
	
	$rating_stars = get_post_meta($post->ID,'_rating_stars', true);
	
	wp_nonce_field( plugin_basename(__FILE__), 'rating_stars_save_meta_box');
	
	echo '<p>Voto: <input type="number" name="rating_stars" value="'.esc_attr($rating_stars).'" min="1" max="5" step=".5" /></p>';
	
}

add_action('save_post','rating_stars_save_meta_box');

function rating_stars_save_meta_box($post_id) {
	
	if(isset($_POST['rating_stars'])) {
	
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
		return;
	
	wp_verify_nonce( plugin_basename(__FILE__), 'rating_stars_save_meta_box');	
		
	update_post_meta($post_id,'_rating_stars',sanitize_text_field($_POST['rating_stars']));

	}
	
}

// Aggiungi variabile query placeholder id per singolo film

function add_custom_query_var( $vars ){
    $vars[] = "id";
    return $vars;
}
add_filter( 'query_vars', 'add_custom_query_var' );
