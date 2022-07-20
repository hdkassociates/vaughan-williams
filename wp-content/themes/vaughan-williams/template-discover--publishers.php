<?php
/*
Template Name: Discover -- Publishers
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

	<section class="image-text switch p-0">
		<div class="row no-gutters">
			<div class="col-md-6 offset-md-6 triangle-overlay background-image" style="background-image: url('<?php echo wp_get_attachment_image_url(55, 'full', false); ?>');">
			</div>
			
			<div class="container-fluid content-wrapper">
				<div class="row">
					<div class="container">
						<div class="row no-gutters">
							<div class="col-md-6 text-left">
								<div class="section-title"> 
									<h2 class="ft-40 text-left txt-evergreen">The UK publishers for each of Vaughan Williams’s works are shown in our catalogue.</h2>
								</div>
								<div class="col-md-8 p-0">
									<p class="content--excerpt">Each publisher oversees, for their own titles, the distribution and sale of sheet music and study scores; hire of materials for performance, and licencing of music for recording, copying, stage performance or synchronisation.</p>

									<p>If you are outside the UK you may have to contact the publisher’s agent in your territory – please see below for full details.</p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid with-header discover">
		<header class="row bg-stillness">
			<div class="container"> 
				<div class="row">
					<div class="col-12">
						<h2 class="ft-52 text-stillness">VAUGHAN WILLIAMS’S PUBLISHERS</h2>
					</div>
				</div>
			</div> 
		</header>
		<div class="header-detail row bg-stillness">
			<div class="detail bg-feature-header-light-stillness"> 
				<?php include (__DIR__ . '/dist/images/v-mark-small.svg'); ?>
			</div>
		</div>

		<div class="content-wrapper row publishers">
			<div class="container"> 
				<div class="row">
					<?php 
					$coutner = 1;
					while($coutner <= 6) : ?>
						<div class="col-md-6">
							<div class="image-wrapper"> 
								<?php echo wp_get_attachment_image(89, 'full', false, array() ); ?>
							</div>
							<div class="content-wrapper"> 
								<div class="row">
									<div class="col-md-4">
										<ul>
											<li>Principle RVW Page</li>
											<li>Licensing</li>
											<li>Hire</li>
											<li>Agents Worldwide</li>
										</ul>
									</div>
									<div class="col-md-8">
										<p>OUP Archive works may be distributed by other specialist publishers, but all licensing and copyright questions should be addressed as above.</p>
									</div>
								</div>
							</div>
						</div>
					<?php $coutner++; endwhile; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="fullwidth-image search-letters container-fluid">
		<div class="row background-image" style="background-image: url('<?php echo wp_get_attachment_image_url(83, 'full', false); ?>');"> 
			<div class="container"> 
				<div class="row">
					<div class="col-12">
						<form role="search" id="searchform" class="site-form text-right text-lg-left" method="post" action="">
							<div class="form-group">
								<label for="search_term" class="ft-52 txt-white">SEARCH THE WORKS</label>
								<div class="d-flex">
									<input type="text" id="search-term" name="search_term" placeholder="Search...">
									<button type="submit" id="search-submit" class="button-design">SEARCH</button>
								</div>
							</div>
 						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



</main><!-- #main -->


<?php
get_footer();
