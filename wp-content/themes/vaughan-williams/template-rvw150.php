<?php
/*
Template Name: RVW150
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

	<div class="sub-header container-fluid bg-rich-depth text-right" style=""> 
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
					
					<div class="col-md-10 offset-md-1 text-center">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid with-header red">
		<header class="row bg-rich-depth">
			<div class="container"> 
				<div class="row">
					<div class="col-12">
						<h2 class="ft-52 text-intense-red">RVW150 EVENTS</h2>
					</div>
				</div>
			</div> 
		</header>
		<div class="header-detail row bg-rich-depth">
			<div class="detail bg-feature-header-light-rich-depth"> 
				<?php include (__DIR__ . '/dist/images/v-mark-small.svg'); ?>
			</div>
		</div>

		<div class="content-wrapper row feed bg-light-rich-depth bg-v-mark-rich-depth">
			<div class="container"> 
				
					<?php 
					$coutner = 1;
					while($coutner <= 3) : ?>
						<div class="row">
							<div class="col-md-6">
								<h2 class="ft-40 font-weight-normal txt-rich-depth">Support for Professional Composers from the last 100 years</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia tellus quis est imperdiet semper. Pellentesque ac orci viverra, consequat velit quis, efficitur velit. Curabitur maximus, sapien sed gravida scelerisque, velit neque interdum metus, ut tincidunt tellus ante vitae erat. Nullam condimentum a nisi quis porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia tellus quis est imperdiet semper. Pellentesque ac orci viverra, consequat velit quis, efficitur velit. Curabitur maximus, sapien sed gravida scelerisque, velit neque interdum metus, ut tincidunt tellus ante vitae erat. Nullam condimentum a nisi quis porttitor.</p>

								<a href="" class="button-design rich-depth">FIND OUT MORE</a>
							</div>
							<div class="col-md-6">
								<?php echo wp_get_attachment_image(55, 'full', false, array('class' => 'header-detail-visual')); ?>
							</div>
							<div class="col-12">
								<hr>
							</div>
						</div>
					<?php $coutner++; endwhile; ?>
				</div>
			</div>
		</div>

	</section>

	<?php include('block-templates/includes/testimonial-slider.php'); ?>

	<?php include('block-templates/includes/in-the-news.php'); ?>

	</section>


</main><!-- #main -->


<?php
get_footer();
