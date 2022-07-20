<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vaughan_williams
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- LOADER -->

<div itemscope itemtype="https://schema.org/LocalBusiness">
	<meta itemprop="name" content="">
	<div itemprop="logo" itemtype="https://schema.org/ImageObject">
		<meta itemprop="url" content="">
		<meta itemprop="width" content="">
		<meta itemprop="height" content="">
	</div>
	<link itemprop="sameAs" href="<?php echo site_url(); ?>">
</div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'vaughan_williams' ); ?></a>

	<header id="masthead" class="site-header container-fluid">
		<div class="row header-wrapper">
			<div class="container">
				<div class="row">
					<div class="">
						<div class="site-branding">
							<?php
							the_custom_logo();
							?>
						</div>
					</div>
					<div class="nav-wrapper">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle hamburger hamburger--slider" type="button" aria-label="Menu" aria-controls="navigation">
							   <span class="hamburger-box">
							    <span class="hamburger-inner"></span>
							  </span>
							</button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</nav><!-- #site-navigation -->
						<div class="social-search"> 
							<span class="icon twitter"> <?php echo wp_get_attachment_image(39, 'full', false, array('class' => 'icon') ); ?></span>
							<span class="icon search"><?php echo wp_get_attachment_image(38, 'full', false, array('class' => 'icon') ); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->


