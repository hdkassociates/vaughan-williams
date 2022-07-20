<?php
/*
Template Name: Grants
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
	<div class="sub-header small container-fluid bg-intense-red text-right" style=""> 
		<div class="row">
			<?php echo wp_get_attachment_image(57, 'full', false, array('class' => 'w-mark') ); ?>
		</div>
		<div class="abs-pos">
			<div class="container h-100"> 
				<div class="row h-100 text-left sub-header--content">
					<div class="col-md-6">
						<h1 class="ft-56">GRANTS</h1>
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
						<h1 class="ft-52 txt-intense-red text-uppercase"><?php the_title(); ?></h1>
						<div class="highlighted-text"> 
							<p class="ft-40 font-weight-semi-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae sapien ipsum.</p>
						</div>

						<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae sapien ipsum. Nunc cursus tortor nunc, in tristique neque laoreet eu. Sed porta molestie ex, ac ullamcorper sem. Aenean metus lorem, interdum nec risus at, ornare vehicula mauris. Ut placerat diam tempus sem pretium lobortis. Cras purus sem, auctor nec ullamcorper eget, imperdiet id lectus. Pellentesque porttitor, urna quis tincidunt fermentum, augue felis lacinia eros, et mollis massa augue eget lacus. Maecenas eget ex eget erat sagittis tincidunt. Pellentesque nec porttitor turpis. Sed varius, risus vitae gravida mattis, ligula metus rutrum leo, quis laoreet diam lorem quis justo. Fusce mollis gravida lobortis.</p>

						<h2 class="ft-40 txt-dark-red font-weight-normal">Guidelines for applying</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae sapien ipsum. Nunc cursus tortor nunc, in tristique neque laoreet eu. Sed porta molestie ex, ac ullamcorper sem. Aenean metus lorem, interdum nec risus at, ornare vehicula mauris. Ut placerat diam tempus sem pretium lobortis. Cras purus sem, auctor nec ullamcorper eget, imperdiet id lectus. Pellentesque porttitor, urna quis tincidunt fermentum, augue felis lacinia eros, et mollis massa augue eget lacus. Maecenas eget ex eget erat sagittis tincidunt. Pellentesque nec porttitor turpis. Sed varius, risus vitae gravida mattis, ligula metus rutrum leo, quis laoreet diam lorem quis justo. Fusce mollis gravida lobortis.</p>

						<div class="button-wrapper">
							<a href="" class="button-design red downloads">
								<span class="button-icon">
									<?php include (__DIR__ . '/dist/images/download-icon.svg'); ?>
								</span>
								Download guidlines
							</a>
						</div>
					</div>
					
					<div class="col-md-10 offset-md-1 text-center">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="text-block container-fluid bg-light-red how-to-apply">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-10 offset-md-1">

						<h2 class="ft-52 txt-intense-red text-center">HOW TO APPLY</h2>

						<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae sapien ipsum. Nunc cursus tortor nunc, in tristique neque laoreet eu. Sed porta molestie ex, ac ullamcorper sem. Aenean metus lorem, interdum nec risus at, ornare vehicula mauris. Ut placerat diam tempus sem pretium lobortis. Cras purus sem, auctor nec ullamcorper eget, imperdiet id lectus. Pellentesque porttitor, urna quis tincidunt fermentum, augue felis lacinia eros.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae sapien ipsum. Nunc cursus tortor nunc, in tristique neque laoreet eu. Sed porta molestie ex, ac ullamcorper sem. Aenean metus lorem, interdum nec risus at, ornare vehicula mauris. Ut placerat diam tempus sem pretium lobortis. Cras purus sem, auctor nec ullamcorper eget, imperdiet id lectus. Pellentesque porttitor, urna quis tincidunt fermentum, augue felis lacinia eros, et mollis massa augue eget lacus. Maecenas eget ex eget erat sagittis tincidunt. Pellentesque nec porttitor turpis. Sed varius, risus vitae gravida mattis, ligula metus rutrum leo, quis laoreet diam lorem quis justo. Fusce mollis gravida lobortis.</p>

							<a href="" class="button-design red">APPLY NOW</a>
					</div>
				</div>
			</div>
		</div>
	</section>



</main><!-- #main -->


<?php
get_footer();
