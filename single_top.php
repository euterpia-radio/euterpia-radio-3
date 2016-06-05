<article class="featured">
	<div class="the-thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<div class="the-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		<div class="the-date"><?php the_date(); ?></div>
		<div class="the-thumbnail-title"><?php $title = get_post( get_post_thumbnail_id() )->post_title;
			echo $title; ?></div>
	</div>
	<div class="body">
		<?php the_content(); ?>
	</div>
</article>
