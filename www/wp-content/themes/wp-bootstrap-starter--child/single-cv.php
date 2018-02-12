<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">
			<h2><?php the_field('titre'); ?></h2>
			<div>
				
			<div class="col-4 p-0 col">
			<?php 

	$image = get_field('ma_photo');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)

	if( $image ) {

	echo wp_get_attachment_image( $image, $size );

}

?>
				</div>
				<div class="mt-4">					
			<?php the_field('mes_formations'); ?>
			</div>
				<div class="mt-4">
			<?php the_field('mes_competences'); ?>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
