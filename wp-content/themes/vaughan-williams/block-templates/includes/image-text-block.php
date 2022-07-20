<?php
$template = [
	[ 'core/paragraph', [ 'content' => 'Describe here.', 'align' => 'left' ] ],

];

$allowed_blocks = ['core/paragraph'];
$classes = [ 'image-text-block' ];
// Create class attribute allowing for custom "className" values.
$classes = ( ! empty( $block['className'] ) ) ?
	sprintf( 'image-text-block %s', $block['className'] ) :
	'image-text-block';
$id = 'image-text-' . $block['id'];  

//Layout
$options = get_field('options');
$switch = !empty($options['image_right']) ? 'switch': '';
$cols_content = !empty($options['image_right']) ? '': 'offset-md-6 col-add-3 offset-subtract-3';
$cols_image = !empty($options['image_right']) ? 'offset-md-6': 'col-add-3';
$txt_pos = !empty($options['image_right']) ? 'text-left' : 'text-right';
$order_image_standard = !empty($options['image_right']) ? 'order-12' : 'order-1';
$order_text_standard = !empty($options['image_right']) ? 'order-1' : 'order-12';
$image_display_options = $options['image_display_options'];

//Content
$image = get_field('image') ?: 55;
$header = get_field('header');
$link =  get_link_url($block['data'], 'field_62d67e3d80a71');
?>

<section id="<?php echo esc_attr( $id ) ?>" class="<?php echo esc_attr( $classes ); ?> <?php echo $switch; ?> <?php echo strtolower($image_display_options); ?>">
	<div class="row no-gutters">
		<?php 	if ($image_display_options == 'Background') : ?>
					<div class="col-md-6 <?php echo $cols_image; ?> triangle-overlay brand-overlay background-image" style="background-image: url('<?php echo wp_get_attachment_image_url($image, 'full', false); ?>');">
					</div>
		
					<div class="container-fluid content-wrapper">
						<div class="row">
							<div class="container">
								<div class="row no-gutters">
									<div class="col-md-6 <?php echo $cols_content; ?> <?php echo $txt_pos; ?>">
										<?php 	if($header) : ?>
													<div class="section-title"> 
														<h2 class="ft-52 text-right"><?php echo $header; ?></h2>
													</div>
										<?php endif; ?>
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
								</div>
							</div>
						</div>
					</div>

		<?php 	else : ?>
				
				<div class="container"> 
					<div class="row">
						<div class="col-md-6 <?php echo $order_image_standard; ?>">
							<?php echo wp_get_attachment_image($image, 'full', false); ?>
						</div>
						<div class="col-md-6 content-wrapper <?php echo $order_text_standard; ?> <?php echo $txt_pos; ?>">
							<?php 	if($header) : ?>
										<div class="section-title"> 
											<h2 class="ft-52 text-right"><?php echo $header; ?></h2>
										</div>
							<?php endif; ?>
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
					</div>
				</div>

		<?php endif; ?>
	</div>
</section>