<?php include ( 'aq_resizer.php' );
function true_loadmore_scripts() {
	wp_enqueue_script('jquery'); // скорее всего он уже будет подключен, это на всякий случай
 	wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/loadmore.js', array('jquery') );
}
 
add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );

function true_load_posts(){
	$args = unserialize(stripslashes($_POST['query']));
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	$q = new WP_Query($args);
	if( $q->have_posts() ):?>
		<div class = "row">
		<?php while($q->have_posts()): ?>  
			<div class="col-md-4 col-xs-4">
			<?php $q->the_post(); ?>
			<?php get_template_part( 'content', 'min' ) ?>
			</div>
			<?php
		endwhile;?>
		</div> 
	<? endif;
	wp_reset_postdata();
	die();
}
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function load_bootstrap(){
wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js');
wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');
?>