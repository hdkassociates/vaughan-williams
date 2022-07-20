<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vaughan_williams
 */

get_header('split-vw-small');
?>

	<div class="sub-header small container-fluid bg-stillness text-right" style=""> 
		<div class="row">
			<?php echo wp_get_attachment_image(57, 'full', false, array('class' => 'w-mark') ); ?>
		</div>
		<div class="abs-pos">
			<div class="container h-100"> 
				<div class="row h-100 text-left sub-header--content">
					<div class="col-md-8">
						<h1 class="ft-56">THE LETTERS OF RALPH VAUGHAN WILLIAMS<?php // the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include( 'parts/breadcrumbs.php'); ?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

				// get_template_part( 'template-parts/content', get_post_type() ); ?>

			<?php
			
		endwhile;  ?>

		<section class="container-fluid with-header discover">
			<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
		</section>

	</main><!-- #main -->

<?php
get_footer();
