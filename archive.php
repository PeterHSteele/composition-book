<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chocolate_passion
 */

get_header();
?>

	<div id="primary" class="content-area">
		<div class="col-80"> 
			<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php

				global $post;

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					if ( get_post_meta( $post->ID , 'chocolate_passion_post_view', true ) == 'background_image' ){
						get_template_part( 'template-parts/content-post/content', 'post-background-image' );
					} else {
					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
						get_template_part( 'template-parts/content-post/content', get_post_type() );
					}

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			</main><!-- #main -->
		the_posts_navigation();
		</div><!--.col-80-->
	</div><!-- #primary -->

<?php
get_footer();
