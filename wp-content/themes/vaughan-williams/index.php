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
 * @package vaughan_williams
 */

get_header();
global $wp_query;
?>
	<header class="">
		<div class="wrap">
			<div class="row no-gutters hero-image v-mark-layout">
			<div class="image-wrapper">
				<?php if ( has_post_thumbnail() ) : ?>
	    			<?php the_post_thumbnail('full', array('class' => 'header-img-vmark')); ?>
				<?php endif; ?>
			</div>
			<div class="brand-overlay">
				<?php echo wp_get_attachment_image(56, 'full', false, array('class' => 'v-mark') ); ?>
			</div>
		</div>

		<div class="sub-header container-fluid bg-periwinkle text-right" style=""> 
			<div class="row">
				<?php echo wp_get_attachment_image(57, 'full', false, array('class' => 'w-mark') ); ?>
			</div>
			<div class="abs-pos">
				<div class="container h-100"> 
					<div class="row h-100 text-left sub-header--content">
						<div class="col-md-6">
							<h1 class="ft-56">NEWS</h1>
							<p class="lead-text ft-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae sapien ipsum. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<main id="primary" class="site-main">
		<section class="container-fluid news-feed bg-periwinkle bg-vw-mark-periwinkle">
			<div class="content-wrapper row">

				<?php include( 'parts/breadcrumbs.php'); ?>
				
				<div class="container posts feed"> 
					
					<?php
					if ( have_posts() ) :
							while ( have_posts() ) : the_post();?>
								<div class="row">
									<div class="col-md-6">
										<h2 class="ft-40 font-weight-normal txt-dark-periwinkle"><?php the_title(); ?></h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia tellus quis est imperdiet semper. Pellentesque ac orci viverra, consequat velit quis, efficitur velit. Curabitur maximus, sapien sed gravida scelerisque, velit neque interdum metus, ut tincidunt tellus ante vitae erat. Nullam condimentum a nisi quis porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia tellus quis est imperdiet semper. Pellentesque ac orci viverra, consequat velit quis, efficitur velit. Curabitur maximus, sapien sed gravida scelerisque, velit neque interdum metus, ut tincidunt tellus ante vitae erat. Nullam condimentum a nisi quis porttitor.</p>

										<a href="<?php the_permalink(); ?>" class="button-design periwinkle">FIND OUT MORE</a>
									</div>
									<div class="col-md-6">

										<?php if ( has_post_thumbnail() ) {
										    the_post_thumbnail('standard');
										}?>
									</div>
									<div class="col-12">
										<hr>
									</div>
								</div>
							<?php
							endwhile;
						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div>
			</div>
		</section>

		<?php include('block-templates/includes/testimonial-slider.php'); ?>

	</main><!-- #main -->

<?php
get_footer();
