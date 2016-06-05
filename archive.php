<?php
get_header();
?>
	<div class="main">
		<h2 class="section-title"><?php the_archive_title(); ?></h2>
		<div class="previous-posts">
			<?php
			while ( have_posts() ) : the_post(); ?>
				<article class="previous-post">
					<div class="the-thumbnail">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 300, 170 ) ); ?></a>
						<div class="the-date">
							<?php echo get_the_date(); ?>
						</div>
						<div class="the-thumbnail-title"><?php $title = get_post( get_post_thumbnail_id() )->post_title;
							echo( $title != '' ? $title : the_title() ); ?></div>
					</div>
					<div class="the-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<div class="the-excerpt">
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php endwhile; ?>

			<?php
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => '&larr;',
				'next_text'          => '&rarr;',
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );
			?>

		</div>
	</div>
	<div class="side-bar">
		<?php get_sidebar(); ?>
	</div>
<?php
get_footer();