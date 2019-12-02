<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AppLayers
 */
?>

<?php get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

<section class="post_blog_bg primary-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
        		<div class="col-md-8">
					<?php if ( have_posts() ) :?> 
						<?php while ( have_posts() ) : the_post();
							
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile; ?>
					<?php endif; ?>	

					<?php applayers_pagination(); ?>

				</div>	

				<!-- sidebar -->
				<?php get_sidebar(); ?>
				
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>



