<?php 

$classes = [ 'testimonial-slider-block' ];
// Create class attribute allowing for custom "className" values.
$classes = ( ! empty( $block['className'] ) ) ?
	sprintf( 'testimonial-slider-block %s', $block['className'] ) :
	'testimonial-slider-block';
$id = 'testimonial-slider-' . $block['id'];

$testimonials = get_field('testimonials'); ?>

<section id="<?php echo esc_attr( $id ) ?>" class=" container <?php echo esc_attr( $classes ); ?> ">

	<div class="row">
		<div class="col-md-10 offset-md-1 slider-testimonial text-center">

			<?php if(is_array($testimonials)) : 
					foreach ($testimonials as $testimonial) :
					 	$quote = $testimonial['testmonial']; 
					 	$credit = $testimonial['citation']; ?>

						<div class=""> 
							<svg xmlns="http://www.w3.org/2000/svg" width="92.588" height="59.668" viewBox="0 0 92.588 59.668">
							  <g id="quotes-lime" transform="translate(-909.862 -3447.832)">
							    <path id="Path_1838" data-name="Path 1838" d="M592.942,30.208q7.211,0,10.959,3.509a12,12,0,0,1,3.748,9.179,12.839,12.839,0,0,1-4.565,10.189,17.256,17.256,0,0,1-23.407-1.346q-4.9-5.284-4.9-16.148A37.463,37.463,0,0,1,578.62,18.1a34.765,34.765,0,0,1,9.8-11.919,32.1,32.1,0,0,1,12.4-5.96,7.522,7.522,0,0,1,4.037.1,2.913,2.913,0,0,1,1.826,2.115,3.344,3.344,0,0,1-.673,2.739,8.988,8.988,0,0,1-4.037,2.451,29.174,29.174,0,0,0-8.747,5.047,22.274,22.274,0,0,0-5.479,6.681,14.772,14.772,0,0,0-1.827,6.728,4.283,4.283,0,0,0,1.01,3.075q1.009,1.059,3.8,1.058Z" transform="translate(335.315 3447.832)" fill="#bdb00f"/>
							    <path id="Path_1839" data-name="Path 1839" d="M574.547,38.144a21.523,21.523,0,1,1,21.524,21.524,21.524,21.524,0,0,1-21.524-21.524" transform="translate(335.315 3447.832)" fill="#bdb00f"/>
							    <path id="Path_1840" data-name="Path 1840" d="M642.483,30.208q7.211,0,10.959,3.509A12,12,0,0,1,657.19,42.9a12.839,12.839,0,0,1-4.565,10.189,17.256,17.256,0,0,1-23.407-1.346q-4.9-5.284-4.9-16.148A37.463,37.463,0,0,1,628.161,18.1a34.765,34.765,0,0,1,9.8-11.919,32.1,32.1,0,0,1,12.4-5.96,7.522,7.522,0,0,1,4.037.1,2.913,2.913,0,0,1,1.826,2.115,3.344,3.344,0,0,1-.673,2.739,8.989,8.989,0,0,1-4.037,2.451,29.175,29.175,0,0,0-8.747,5.047,22.274,22.274,0,0,0-5.479,6.681,14.772,14.772,0,0,0-1.827,6.728,4.283,4.283,0,0,0,1.01,3.075q1.009,1.059,3.8,1.058Z" transform="translate(335.315 3447.832)" fill="#bdb00f"/>
							    <path id="Path_1841" data-name="Path 1841" d="M624.088,38.144a21.523,21.523,0,1,1,21.524,21.524,21.524,21.524,0,0,1-21.524-21.524" transform="translate(335.315 3447.832)" fill="#bdb00f"/>
							  </g>
							</svg>

							<p class="ft-48 libre-baskerville font-weight-bold"><?php echo $quote; ?></p>
							<p class="ft-24 font-weight-bold"><?php echo $citation; ?></p>
						</div>
			<?php 	endforeach; ?>
		</div>
	</div>
</section>