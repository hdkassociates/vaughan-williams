<?php
/*
Template Name: Search
 */
 /**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vaughan_williams
 */

get_header('split-vw-small');

?>

<div class="sub-header small container-fluid bg-white-out text-right" style=""> 
	<div class="row">
		<?php echo wp_get_attachment_image(57, 'full', false, array('class' => 'w-mark') ); ?>
	</div>
	<div class="abs-pos">
		<div class="container h-100"> 
			<div class="row h-100 text-left sub-header--content">
				<div class="col-md-6">
					<h1 class="ft-56">SEARCH VWF <?php // the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="breadcrumb-wrapper"> 
	<?php include( 'parts/breadcrumbs.php'); ?>
</div>


<main id="primary" class="site-main">

	<section class="container"> 
		<div class="row">
			<div class="col-12">
				<form role="search" id="searchform" class="site-form text-right text-lg-left" method="post" action="">
					<div class="form-group">
						<label for="search_term" class="ft-52 txt-white">SEARCH</label>
						<div class="d-flex">
							<input type="text" id="search-term" name="search_term" placeholder="Search...">
							<button type="submit" id="search-submit" class="button-design">SEARCH</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

</main><!-- #main -->


<?php
get_footer();
