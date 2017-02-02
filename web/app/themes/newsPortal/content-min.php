<div class="min">
<h3><?php the_title(); ?></h3>
	<div class="image">
	<?php
		$thumb = get_post_thumbnail_id();                   // Получение ID изображения установленного как миниатюра
		$img_url = wp_get_attachment_url( $thumb,'full' );  // Получение ссылки на полный формат изображения
		$image = aq_resize( $img_url, 170, 120, true );     // Уменьшение изображения до размеров 170х120.
	?>
	<img src="<?php echo $image ?>"/>
	</div>
			<?php echo mb_substr( strip_tags( get_the_content() ), 0, 100 ); ?>
	<a href="<?php the_permalink(); ?>">More</a>
	</div>
</a>