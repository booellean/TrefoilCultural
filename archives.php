<?php
/*
Template Name: Archives
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) :  ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				 ?>
				
				</header><!-- .page-header -->

				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					 if ($category=='Whitewashed Tomb'): ?>
						<h3><?php the_category(); ?></h3>
						<?php wp_get_archives('type=postbypost');
					elseif ($category=='Isaacisms'): ?>
						<h3><?php the_category(); ?></h3>
						<?php wp_get_archives('type=postbypost');
					endif;

				// End the loop.
				endwhile;

			endif;?>

			</main><!-- .site-main -->
		</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
