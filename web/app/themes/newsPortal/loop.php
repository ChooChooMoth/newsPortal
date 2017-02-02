	<?php 
	$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$params = array(
	'posts_per_page' => 3, // количество постов на странице
	'post_type'       => 'news', // тип постов
	'paged'           => $current_page // текущая страница
	);
	query_posts($params); ?>

	<?php while(have_posts()): ?>
	<div class="col-md-4 col-xs-4">
	<?php the_post(); 
	get_template_part( 'content', 'min' ); ?>
	</div>

    <?php endwhile; ?>

 	<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<script>
	var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
	var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
	var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
	var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
	</script>
	<?php endif; ?>
