<?php
/*
Template Name: Discover -- Letters
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
									<h2 class="ft-52 text-left txt-stillness">ABOUT THE LETTERS</h2>
								</div>
								<p class="ft-40 content--intro font-weight-semi-bold">Ralph Vaughan Williams’s vibrant correspondence is a treasure trove of his opinions, and advice to other composers.</p>
								<div class="col-md-8 p-0">
									<p class="content--excerpt">Transcripts of 5,103 items of correspondence, fully indexed, can be read online in an ongoing collection, supported by the Foundation.</p>

									<a href="" class="button-design stillness">FIND OUT MORE</a>
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
						<h2 class="ft-52 text-stillness">LETTER OF THE DAY</h2>
					</div>
				</div>
			</div> 
		</header>
		<div class="header-detail row bg-stillness">
			<div class="detail bg-feature-header-light-stillness"> 
				<?php include (__DIR__ . '/dist/images/v-mark-small.svg'); ?>
			</div>
		</div>

		<div class="content-wrapper row">
			<div class="container"> 
				<div class="row">

					<div class="col-md-8">
						<h3 class="ft-40 txt-stillness">from Ralph Vaughan Williams to Roy Douglas</h3>
						<p class="letter-number">Letter No. VWL2289</p>
						<div class="letter-frame libre-baskerville"> 
							<header class="row">
								<div class="col-md-7">
									<p class="ft-20 mb-0"><i>Letter from Ralph Vaughan Williams to Roy Douglas</i></p>
								</div>
								<div class="col-md-5">
									<p class="ft-14 mb-0 text-right">Letter No.: VWL2289</p>
								</div>
							</header>		
							<hr>						
							<div class="row">
								<div class="col-md-6">
									<p>The White Gates, <br>Westcott Road, <br>Dorking</p>
								</div>
								<div class="col-md-6">
									<p class="text-right">24th October, 1951</p>
								</div>
								<div class="col-md-12">
									<p>Dear Roy </p>
									<p>Do you think I could have your comments on my No.5. fairly soon?1 I think Barbirolli would like to have my corrected version. </p>
									<p>By the way, I don’t know how much I owe you for your work on the “Pastoral”.2 This is a guess, if it is not enough let me know.3 </p>
									<hr>

									<ol> 
										<li>Symphony no.5. See VWL2283. </li>
										<li>Pastoral Symphony, no.3. </li>
										<li>A generous cheque was enclosed. </li>
										<li>The Pilgrim’s Progress.</li>
									</ol>
								</div>
							</div>
						</div>

						<div class="letter-information"> 
							<p>
								<span class="letter-detail">From:</span>
								<span class="detail-information">Information</span>
							</p>

							<p>
								<span class="letter-detail">To: </span>
								<span class="detail-information">Information</span>
							</p>

							<p>
								<span class="letter-detail">Scribe: </span>
								<span class="detail-information">Information</span>
							</p>

							<p>
								<span class="letter-detail">Names: </span>
								<span class="detail-information">Information</span>
							</p>

							<p>
								<span class="letter-detail">Subjects: </span>
								<span class="detail-information">Information</span>
							</p>

							<p>
								<span class="letter-detail">Musical works: </span>
								<span class="detail-information">Information</span>
							</p>

							<p>
								<span class="letter-detail">Location of original letter: </span>
								<span class="detail-information">Information</span>
							</p>

							<p>
								<span class="letter-detail">Shelfmark of original letter: </span>
								<span class="detail-information font-weight-500">Information</span>
							</p>

							<p>
								<span class="letter-detail">General notes: </span>
								<span class="detail-information font-weight-500">Information</span>
							</p>

							<p>
								<span class="letter-detail">Format: </span>
								<span class="detail-information font-weight-500">Information</span>
							</p>

							<p>
								<span class="letter-detail">Citation: </span>
								<span class="detail-information font-weight-500">Information</span>
							</p>

							<p>
								<span class="letter-detail">Original database number:</span>
								<span class="detail-information font-weight-500">Information</span>
							</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="wrap">
							<h3>Related images</h3>
							<?php echo wp_get_attachment_image(55, 'full', false, array() ); ?>

							<a href="" class="button-design stillness back">
								<span class="button-icon">
									<?php include (__DIR__ . '/dist/images/back-arrow-icon.svg'); ?>
								</span>
								Back to all letters
							</a>
						</div>


					</div>
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
								<label for="search_term" class="ft-52 txt-white">SEARCH THE LETTERS</label>
								<div class="d-flex">
									<input type="text" id="search-term" name="search_term" placeholder="Type a name, musical work, place or subject">
									<button type="submit" id="search-submit" class="button-design">SEARCH</button>
								</div>
							</div>
							
 						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('block-templates/includes/testimonial-slider.php'); ?>



</main><!-- #main -->


<?php
get_footer();
