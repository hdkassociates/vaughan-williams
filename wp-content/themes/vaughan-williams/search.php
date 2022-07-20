<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package vaughan_williams
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="row">
				<?php if ( have_posts() ) : ?>
					<div class="col-12">
						<header class="page-header">
							<h1 class="page-title underline text-center">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'vaughan_williams' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
						</header><!-- .page-header -->
					</div>
				</div>
			</div>

			<section class="search-results">
			<div class="container">
				<div class="row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post(); ?>

						<div class="col-md-4 col-lg-4 d-flex">
							<div class="card flex-fill">
								
								
							</div>
						</div>

					<?php endwhile;
				echo '</div>';
				echo '<div class="row">';
					the_posts_navigation();
				echo '</div>';
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
