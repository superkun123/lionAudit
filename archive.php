<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lion-audit
 */
?>

<?php
get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>
				<a class="victories-post" href="<?php the_permalink() ?>">
    <div class="victories-post__img"><?php the_post_thumbnail(); ?></div>
       <h3 class="victories-post__title"><?php the_title() ?></h3>
       <div class="victories-post__text"><?php the_excerpt()?>
       </div>
   </a>
   <?php

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			// the_posts_navigation();

		else :


		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
