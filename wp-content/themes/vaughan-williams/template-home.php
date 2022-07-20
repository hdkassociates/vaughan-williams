<?php
/*
Template Name: Home
 */
 /**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vaughan_williams
 */

get_header();
?>

<header class="">
	<div class="row no-gutters hero-image">
		<?php echo wp_get_attachment_image(40, 'full', false, array('class' => 'header-full') ); ?>
		<div class="brand-overlay">
				<div class="row h-100 no-gutters">
					<div class="container">
						<div class="row">
							<div class="col-4">
								<?php echo wp_get_attachment_image(42, 'full', false, array('class' => 'logo-text') ); ?>
							</div>
						</div>
					</div>
					<?php echo wp_get_attachment_image(41, 'full', false, array('class' => 'logo-visual') ); ?>
				</div>
		</div>
	</div>
</header>
<main id="primary" class="site-main">

	<?php
				while ( have_posts() ) :
					the_post();

						get_template_part( 'template-parts/content', get_post_type() ); ?>

					<?php
					
				endwhile;  ?>
			</div>

</main><!-- #main -->


<?php
get_footer();
