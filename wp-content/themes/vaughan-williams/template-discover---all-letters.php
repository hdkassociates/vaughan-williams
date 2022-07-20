<?php
/*
Template Name: Discover -- Letters - All Letters
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
		<div class="row no-gutters hero-image v-mark-layout small">
			<div class="image-wrapper">
				<?php if ( has_post_thumbnail() ) : ?>
	    			<?php the_post_thumbnail('full', array('class' => 'header-img-vmark')); ?>
				<?php endif; ?>
			</div>
			<div class="brand-overlay">
				<?php echo wp_get_attachment_image(56, 'full', false, array('class' => 'v-mark') ); ?>
			</div>
		</div>
	</div>
	<div class="sub-header small container-fluid bg-stillness text-right" style=""> 
		<div class="row">
			<?php echo wp_get_attachment_image(57, 'full', false, array('class' => 'w-mark') ); ?>
		</div>
		<div class="abs-pos">
			<div class="container h-100"> 
				<div class="row h-100 text-left sub-header--content">
					<div class="col-md-6">
						<h1 class="ft-56"><?php the_title(); ?></h1>
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


	<section class="fullwidth-image search-letters container-fluid">
		<div class="row background-image" style="background-image: url('<?php echo wp_get_attachment_image_url(83, 'full', false); ?>');"> 
			<div class="container"> 
				<div class="row">
					<div class="col-12">
						<form role="search" id="searchform" class="site-form text-right text-lg-left" method="post" action="">
							<div class="form-group">
								<label for="search_term" class="ft-52 txt-white">SEARCH THE LETTERS</label>
								<div class="d-flex">
									<input type="text" id="search-term" name="search_term" placeholder="Type a name, musical work, place or subject">
									<button type="submit" id="search-submit" class="button-design">SEARCH</button>
								</div>
 						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('block-templates/includes/testimonial-slider.php'); ?>



</main><!-- #main -->


<?php
get_footer();
