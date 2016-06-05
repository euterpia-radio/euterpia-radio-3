<?php
get_header();
?>
	<div class="main">
		<?php while ( have_posts() ) : the_post();
			get_template_part( 'single_top' );
		endwhile;
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
		?>
	</div>
	<div class="side-bar">
		<?php get_sidebar(); ?>
	</div>
<?php
get_footer();