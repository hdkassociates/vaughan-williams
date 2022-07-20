<?php
/*
Template Name: Foundation -- History
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
	<div class="sub-header small container-fluid bg-white-out text-right" style=""> 
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
					<div class="col-md-10 offset-md-1">
						<div class="highlighted-text"> 
							<p class="ft-30"><span class="font-weight-semi-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit porta molestie ex, ac ullamcorper sem. </span>Aenean metus lorem, interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae sapien ipsum. Nunc cursus tortor nunc, in tristique neque laoreet eu. Sed porta molestie ex, ac ullamcorper sem. Aenean metus lorem, interdum nec risus at, ornare vehicula mauris. Ut placerat diam tempus sem pretium lobortis. Cras purus sem, auctor nec ullamcorper eget, imperdiet id lectus. </p>
						</div>

						<p class=""><span class="font-weight-semi-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit porta molestie ex, ac ullamcorper sem. </span>Aenean metus lorem, interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae sapien ipsum. Nunc cursus tortor nunc, in tristique neque laoreet eu. Sed porta molestie ex, ac ullamcorper sem. Aenean metus lorem, interdum nec risus at, ornare vehicula mauris. Ut placerat diam tempus sem pretium lobortis. Cras purus sem, auctor nec ullamcorper eget, imperdiet id lectus. </p>

						<?php echo wp_get_attachment_image(62, 'full', false, array('class' => 'standard-image') ); ?>
					</div>
					
					<div class="col-md-10 offset-md-1 text-center">
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('block-templates/includes/testimonial-slider.php'); ?>

	<section class="text-block container-fluid ">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<div class="highlighted-text"> 
							<p class="ft-30"><span class="font-weight-semi-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit porta molestie ex, ac ullamcorper sem. </span>Aenean metus lorem, interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae sapien ipsum. Nunc cursus tortor nunc, in tristique neque laoreet eu. Sed porta molestie ex, ac ullamcorper sem. Aenean metus lorem, interdum nec risus at, ornare vehicula mauris. Ut placerat diam tempus sem pretium lobortis. Cras purus sem, auctor nec ullamcorper eget, imperdiet id lectus. </p>
						</div>

						<p class=""><span class="font-weight-semi-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit porta molestie ex, ac ullamcorper sem. </span>Aenean metus lorem, interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae sapien ipsum. Nunc cursus tortor nunc, in tristique neque laoreet eu. Sed porta molestie ex, ac ullamcorper sem. Aenean metus lorem, interdum nec risus at, ornare vehicula mauris. Ut placerat diam tempus sem pretium lobortis. Cras purus sem, auctor nec ullamcorper eget, imperdiet id lectus. </p>

					</div>
					
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid with-header bg-lime-light">
		<header class="row white-out">
			<div class="container"> 
				<div class="row">
					<div class="col-12">
						<h2 class="ft-52">NEWS</h2>
					</div>
				</div>
			</div> 
		</header>
		<div class="header-detail row white-out">
			<div class="detail"> 
				<?php echo wp_get_attachment_image(49, 'full', false, array('class' => 'header-detail-visual')); ?>
			</div>
		</div>

		<div class="content-wrapper row">
			<div class="container"> 
				<div class="row">
					<?php 
					$coutner = 1;
					while($coutner <= 3) : ?>
						<div class="col-md-4">
							<div class="card card--trustees">
								<a href="" class="card-link">
								    <div class="card-image-wrapper">
								    	<div class="card-image"> 
								    		<?php echo wp_get_attachment_image(61, 'square@2x', false, array() ); ?>
								    	</div>
								    </div>
								</a>
								<div class="card-content text-left">
									<h3 class="card-title txt-lime-dark">Hugh Cobbe OBE, FSA</h3>
									<h4 class="role">Chairman</h4>
									<p class="card-excerpt">Chairman Curabitur ultricies viverra elit, non mattis velit pharetra id. Cras metus nulla, fermentum at sollicitudin eu, lacinia consequat orci.</p>
									<a href="#" class="read-more text-lime-dark">Read More</a>					
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
