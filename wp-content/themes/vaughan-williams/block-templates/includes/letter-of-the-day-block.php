<?php
$template = [
	[ 'core/paragraph', [ 
		'content' => 'Add your text', 'align' => 'left' 
		]
	], 
	/*[ 'core/button', [ 
		'content' => 'FIND OT MORE', 'align' => 'left' 
		]
	], */
];
$allowed_blocks = ['core/paragraph'/*, 'core/button'*/];
$classes = [ 'featured-letter' ];
// Create class attribute allowing for custom "className" values.
$classes = ( ! empty( $block['className'] ) ) ?
	sprintf( 'featured-letter-block %s', $block['className'] ) :
	'featured-letter-block';
$id = 'featured-letter-' . $block['id'];

//Hack as link field location changes
if(array_key_exists('link_url', $block['data'])) :
	if(is_array($block['data']['link_url'])) :
		$link = $block['data']['link_url']['url'];
	else : 
		$link = null;
	endif;
elseif (array_key_exists('field_62d5286250407', $block['data'])) : 
 	if(is_array($block['data']['field_62d5286250407'])) :
		$link = $block['data']['field_62d5286250407']['url']; 
	else : 
		$link = null;
	endif;
endif;
//echo $link;
//echo '<pre>';
//print_r($block);
?>

<section id="<?php echo esc_attr( $id ) ?>" class=" container-fluid with-header <?php echo esc_attr( $classes ); ?> ">
		<header class="row white-out">
			<div class="container"> 
				<div class="row">
					<div class="col-12">
						<h2 class="ft-52">THE LETTERS OF RALPH VAUGHAN WILLIAMS</h2>
					</div>
				</div>
			</div> 
		</header>
		<div class="header-detail row white-out">
			<div class="detail bg-lime"> 
				<?php echo wp_get_attachment_image(49, 'full', false, array('class' => 'header-detail-visual')); ?>
			</div>
		</div>

		<div class="content-wrapper row">
			<div class="container"> 
				<div class="row">
					<div class="col-md-6 offset-md-6">
						<div class="section-title">
							<h2 class="ft-40 text-right txt-lime-dark">Letter of the Day</h2>
						</div>
					</div>
					<div class="col-md-6 ">
						<div class=""> 
							<InnerBlocks
								template="<?php echo esc_attr( wp_json_encode( $template ) ); ?>"
								allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"
							/>

						</div>
						<div class=""> 
							<?php if ($link != null) : ?>
										<a href="<?php echo $link; ?>" class="button-design">FIND OUT MORE</a>
							<?php endif; ?>
							
						</div>
							
						
					</div>
					<div class="col-md-6">
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
									<p>The White Gates, <br />Westcott Road, <br />Dorking</p>
								</div>
								<div class="col-md-6">
									<p class="text-right">24th October, 1951</p>
								</div>
								<div class="col-md-12">
									<p>Dear Roy </p>
									<p>Do you think I could have your comments on my No.5. fairly soon?1 I think Barbirolli would like to have my corrected version. </p>
									<p>By the way, I don’t know how much I owe you for your work on the “Pastoral”.2 This is a guess, if it is not enough let me know.3 </p>
								</div>
								<div class="col-12 expand"> 
									<p>Expand to read all </p>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>