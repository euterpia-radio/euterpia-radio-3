<?php
get_header();
?>
	<div class="main">
		<h2 class="section-title"><?php the_title(); ?></h2>
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="featured">
				<div class="body">
					<?php the_content(); ?>
				</div>
			</article>
			<?php
		endwhile;
		?>
	</div>
	<div class="side-bar">
	</div>
<?php
get_footer();