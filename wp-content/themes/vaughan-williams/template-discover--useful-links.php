<?php
/*
Template Name: Discover -- Useful Links
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

	<section class="text-block container-fluid ">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="highlighted-text"> 
							<p class="ft-40 font-weight-semi-bold">The following links will help you to explore the compositions and life of Ralph Vaughan Williams:</p>
						</div>
					</div>
					<div class="col-md-6">
						<p>The Letters of RVW – transcripts of 5,088 items of correspondence, fully indexed, can be read online in an ongoing collection, supported by the Trust. </p>
						<p>RVW’s Publishers – worldwide contact details. Each publisher oversees, for their own titles, the distribution and sale of sheet music and study scores; hire of materials for performance, and licencing of music for recording, copying, stage performance or synchronisation. The UK publishers for each of Vaughan Williams’s works are detailed in our catalogue. </p>

						<p>British Library houses an extensive collection of manuscripts, letters and articles about RVW. </p>

						<p>Leith Hill Place in Surrey was the childhood home of RVW who gave it to the National Trust in 1944. Open to the public for part of the year. </p>

						<p>The Lark Ascending – Daily Telegraph music critic, Ivan Hewett, delves into the enduring popularity of the work which celebrates the centenary of its premiere in 2020. </p>

						<p>The Hampsong Foundation – An exploration of RVW’s vocal music </p>

						<p>Ralph Vaughan Williams Society is an active membership society dedicated to learning about the life and music of RVW. Their website has many useful resources including a discography. </p>

						<h3>150th Anniversary Celebrations </h3>

						<p>RVW 150 – 2022 marks the 150th anniversary of the composer’s birth and VWCT is coordinating the efforts of the key organisations promoting his legacy during the anniversary year.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('block-templates/includes/testimonial-slider.php'); ?>



</main><!-- #main -->


<?php
get_footer();
