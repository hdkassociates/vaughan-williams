<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vaughan_williams
 */

?>

	<footer id="colophon" class="site-footer container-fluid">
		<div class="row">
			<div class="container site-footer--image">
				<div class="row">
					<?php echo wp_get_attachment_image(52, 'full', false, array('class' => 'footer-visual') ); ?>
					<div class="underlay">
						<?php echo wp_get_attachment_image(get_footer_image(), 'full', false, array('class' => 'footer-visual') ); ?>
					</div>
				</div>
			</div>
			<div class="site-footer--content">
				<div class="container">
					<div class="row">
						<div class="col-md-5 ">
							<?php echo wp_get_attachment_image(34, 'full', false, array('class' => 'logo-lime') ); ?>
						</div>
						<div class="col-md-2">
							<h4>DETAILS</h4>
							<address>
								<p>	13 Calico Row <br />
								 	London SW11 3YH <br />
								</p>
							</address>
								 <p>+44 (0)207 223 3385</p>
						</div>
						<div class="col-md-2">
							<h4>INFORMATION</h4>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'footer-1',
										'menu_id'        => 'footer-menu',
									)
								);
							?>
						</div>
						<div class="col-md-3 text-right">
							<div class="social-wrap">
								<span class="twitter">
									<?php echo wp_get_attachment_image(39, 'full', false, array('class' => 'icon') ); ?>
								</span>
								<span class="social-text twitter">
									FOLLOW US
								</span>
							</div>
						</div>
					</div>
					<div class="row secondary">
						<div class="col-5">
							<p>&copy;<?php echo date('Y'); ?></p>
						</div>
						<div class="col-5">
							<p>The Vaughan Williams Foundation, registered charity number 1234567</p>
						</div>
						<div class="col-2 text-right">
							<?php echo wp_get_attachment_image(37, 'full', false, array('class' => 'hdk-icon') ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
