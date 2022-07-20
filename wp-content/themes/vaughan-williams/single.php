<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
		<div class="sub-header small container-fluid bg-periwinkle text-right" style=""> 
			<div class="row">
				<?php echo wp_get_attachment_image(57, 'full', false, array('class' => 'w-mark') ); ?>
			</div>
			<div class="abs-pos">
				<div class="container h-100"> 
					<div class="row h-100 text-left sub-header--content">
						<div class="col-md-6">
							<h1 class="ft-56">NEWS</h1>
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
		<div class="container"> 
			<div class="row"> 
				<?php
				while ( have_posts() ) :
					the_post();

						get_template_part( 'template-parts/content', get_post_type() ); ?>

					<?php
					
				endwhile;  ?>
			</div>
		</div>

		<section class="container-fluid with-header bg-light-periwinkle">
			<header class="row bg-periwinkle">
				<div class="container"> 
					<div class="row">
						<div class="col-12">
							<h2 class="ft-52">MORE NEWS...</h2>
						</div>
					</div>
				</div> 
			</header>
			<div class="header-detail row bg-periwinkle">
				<div class="detail bg-feature-header-light-periwinkle "> 
					<?php include (__DIR__ . '/dist/images/v-mark-small.svg'); ?>
				</div>
			</div>

			<div class="content-wrapper row">
				<div class="container"> 
					<div class="row">
						<?php 
						$coutner = 1;
						while($coutner <= 3) : ?>
							<div class="col-md-4">
								<div class="card card--news">
									<a href="" class="card-link">
									    <div class="card-image-wrapper">
									    	<div class="card-image"> 
									    		<?php echo wp_get_attachment_image(61, 'square@2x', false, array() ); ?>
									    	</div>
									    </div>
									</a>
									<div class="card-content text-left">
										<h3 class="card-title txt-dark-periwinkle">New Bursaries – Vaughan Williams Foundation</h3>
										<p class="card-excerpt">Chairman Curabitur ultricies viverra elit, non mattis velit pharetra id. Cras metus nulla, fermentum at sollicitudin eu, lacinia consequat orci.</p>
										<a href="#" class="read-more txt-dark-periwinkle">Read More</a>					
									</div>
							  	</div>
							</div>
						<?php $coutner++; endwhile; ?>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
