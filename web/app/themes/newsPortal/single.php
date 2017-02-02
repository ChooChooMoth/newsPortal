<?php get_header(); ?>
<div class = "container">
			<?php while(have_posts()): ?>
					<h1> <? the_title(); ?> </h1>
					<? the_post(); ?>
					<div class = "row">
					<div class="col-md-6">
					<? the_tags(); ?>
					<div class="col-md-6">
					<? the_time('j.m.Y') ?>,
					<? the_author_link(); ?>
					</div>
					</div>
					</div>
					<? the_post_thumbnail(); ?>
					<? the_content(); ?>
			<?php endwhile;?>
</div>
<?php get_footer();
