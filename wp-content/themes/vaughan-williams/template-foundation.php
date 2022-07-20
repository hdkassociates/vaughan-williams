<?php
/*
Template Name: Foundation
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

	<div class="sub-header container-fluid bg-white-out text-right" style=""> 
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

<div class="breadcrumb-wrapper"> 
	<?php include( 'parts/breadcrumbs.php'); ?>
</div>

<main id="primary" class="site-main">

	<?php include('block-templates/includes/image-text--basic.php'); ?>

	<?php include('block-templates/includes/who-we-are.php'); ?>


</main><!-- #main -->


<?php
get_footer();
