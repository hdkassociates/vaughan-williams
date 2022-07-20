<?php 
$template = [
	[ 'core/paragraph', [ 
		'content' => 'Describe here.', 'align' => 'left' 
		]
	]
];
$allowed_blocks = ['core/paragraph'];
$classes = [ 'text-block' ];
// Create class attribute allowing for custom "className" values.
$classes = ( ! empty( $block['className'] ) ) ?
	sprintf( 'text-block %s', $block['className'] ) :
	'text-block';
$id = 'text-' . $block['id'];


$width = get_field('width') == 80 ? 'col-md-10 offset-md-1': 'col-md-8 offset-md-2'; ?>

<section id="<?php echo esc_attr( $id ) ?>" class=" container-fluid <?php echo esc_attr( $classes ); ?> ">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="<?php echo $width;?>">
					<InnerBlocks
						template="<?php echo esc_attr( wp_json_encode( $template ) ); ?>"
						allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"
						
					/>
			</div>
		</div>
	</div>
</section>