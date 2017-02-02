<?php get_header(); ?>
<?php get_search_form(); ?>
<div class = "container"> 
	<div class = "row">
			<?php get_template_part( 'loop', 'index' ); ?>
	</div> 
	<div id="true_loadmore"><button>Load more</button></div>
</div>
<?php get_footer(); ?>