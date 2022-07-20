<?php
/*
Template Name: Funding
 */
 /**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vaughan_williams
 */

get_header();

$children = get_children(get_the_ID()); 	
$children_ids = wp_list_pluck( $children, 'ID' );
?>
<main id="primary" class="site-main">
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

		<div class="sub-header container-fluid bg-intense-red text-right" style=""> 
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

	<section class="funding container-fluid ">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title"> 
							<h2 class="ft-52 txt-intense-red">Funding</h2>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="row bg-vw-mark-white deadlines">
			<div class="container">
				<!-- -->
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<h3 class="ft-40 font-weight-normal txt-dark-red">Deadlines</h3>
					</div>
					<div class="col-md-10 offset-md-1">
						<div class="row">
							<div class="col-md-6 image background-image" style="background-image: url('<?php echo wp_get_attachment_image_url(55, 'full', false); ?>');">
								
							</div>

							<div class="col-md-6 bg-white content-wrapper">
								<div class="wrap">
									<h3 class="ft-24 font-weight-bold">Grant application deadlines</h3>
									<hr>
									<p>Applications for the 2022 VW Bursaries are now closed. </p>
									<p>Five awards of £4000 will be made towards Masters studies in composition at British universities or conservatoires and will be announced in June. </p>
									<a href="#" class="txt-dark-red mt-2"><u><strong>Learn more here</strong></u></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid with-header red">
		<header class="row bg-intense-red">
			<div class="container"> 
				<div class="row">
					<div class="col-12">
						<h2 class="ft-52 text-intense-red">GRANTS</h2>
					</div>
				</div>
			</div> 
		</header>
		<div class="header-detail row bg-intense-red">
			<div class="detail bg-feature-header-light-red"> 
				<?php include (__DIR__ . '/dist/images/v-mark-small.svg'); ?>
			</div>
		</div>

		<div class="content-wrapper row bg-light-red children feed bg-vw-mark-white">
			<div class="container"> 
					<?php 
					foreach ($children_ids as $child_id) : ?>
						<div class="row">
							<div class="col-md-6">
								<h2 class="ft-40 font-weight-normal txt-dark-red"><?php echo get_the_title($child_id); ?></h2>
								<p><?php echo get_the_excerpt($child_id); ?></p>
								<a href="<?php echo get_permalink($child_id); ?>" class="button-design red">FIND OUT MORE</a>
							</div>
							<div class="col-md-6">
								<?php echo get_the_post_thumbnail( $child_id, 'standard' ); ?>
							</div>
							<div class="col-12">
								<hr>
							</div>
						</div>
					<?php endforeach;?>
			</div>
		</div>

	</section>

	<?php include('block-templates/includes/testimonial-slider.php'); ?>

	<section class="funding container-fluid ">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title"> 
							<h2 class="ft-52 txt-intense-red">PREVIOUS BURSARIES</h2>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="row bg-vw-mark-white deadlines">
			<div class="container">
				<div class="row">
					<?php 
						$coutner = 1;
						while($coutner <= 4) : ?>
							<div class="col-md-3">
								<div class="card card--news">
									<a href="" class="card-link">
									    <div class="card-image-wrapper">
									    	<div class="card-image"> 
									    		<?php echo wp_get_attachment_image(61, 'square@2x', false, array() ); ?>
									    	</div>
									    </div>
									</a>
									<div class="card-content text-left">
										<h3 class="card-title txt-dark-red">New Bursaries – Vaughan Williams Foundation</h3>
										<p class="card-excerpt">Chairman Curabitur ultricies viverra elit, non mattis velit pharetra id. Cras metus nulla, fermentum at sollicitudin eu, lacinia consequat orci.</p>
										<a href="#" class="read-more txt-dark-red"><u><strong>Read More</strong></u></a>					
									</div>
							  	</div>
							</div>
						<?php $coutner++; endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	</section>


</main><!-- #main -->


<?php
get_footer();
