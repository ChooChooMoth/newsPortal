<?php get_header(); ?>
<div class = "container">
	<h2 class="content-heading"><?php printf( __('Search by \'%s\'', 'default'), get_search_query() ); ?></h2>
	<?php if (have_posts()): ?>
		<div class = "row">
			<? while (have_posts()): ?>
			<div class="col-md-4"> 
				<? the_post(); 
				get_template_part( 'content', 'min' ); ?>
			</div>
		    <?endwhile;	else:?>
		</div>
		<p>Sorry, no results found</p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>