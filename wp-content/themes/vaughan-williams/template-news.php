<?php
/*
Template Name: News
 */
 /**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vaughan_williams
 */

get_header();

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
						<h1 class="ft-56"><?php the_title(); ?></h1>
						<p class="lead-text ft-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae sapien ipsum. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<main id="primary" class="site-main">
	<section class="container-fluid news-feed bg-periwinkle bg-v-mark">
		<div class="content-wrapper row">

			<?php include( 'parts/breadcrumbs.php'); ?>
			
			<div class="container"> 
				<div class="row">
					<?php 
					$coutner = 1;
					while($coutner <= 3) : ?>
						<div class="col-md-6">
							<h2 class="ft-40 font-weight-normal txt-dark-periwinkle">Support for Professional Composers from the last 100 years</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia tellus quis est imperdiet semper. Pellentesque ac orci viverra, consequat velit quis, efficitur velit. Curabitur maximus, sapien sed gravida scelerisque, velit neque interdum metus, ut tincidunt tellus ante vitae erat. Nullam condimentum a nisi quis porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia tellus quis est imperdiet semper. Pellentesque ac orci viverra, consequat velit quis, efficitur velit. Curabitur maximus, sapien sed gravida scelerisque, velit neque interdum metus, ut tincidunt tellus ante vitae erat. Nullam condimentum a nisi quis porttitor.</p>

							<a href="" class="button-design periwinkle">FIND OUT MORE</a>
						</div>
						<div class="col-md-6">
							<?php echo wp_get_attachment_image(55, 'full', false, array('class' => 'header-detail-visual')); ?>
						</div>
						<div class="col-12">
							<hr>
						</div>
					<?php $coutner++; endwhile; ?>
				</div>
			</div>
		</div>
	</section>

	<?php include('block-templates/includes/testimonial-slider.php'); ?>


	</section>


</main><!-- #main -->


<?php
get_footer();
