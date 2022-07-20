<section class="who-we-are container-fluid ">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title"> 
						<h2 class="ft-52 txt-lime-dark text-uppercase">Who we are</h2>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="row bg-vw-mark-white">
		<div class="container">
			<!-- -->
			<div class="row">
				<div class="col-12">
					<h3 class="ft-40 font-weight-normal txt-lime-dark">Trustees</h3>
				</div>
				<?php 
				$coutner = 1;
				while($coutner <= 8) : ?>
					<div class="col-md-4">
						<div class="card card--trustees">
							<a href="" class="card-link">
							    <div class="card-image-wrapper">
							    	<div class="card-image"> 
							    		<?php echo wp_get_attachment_image(61, 'square@2x', false, array() ); ?>
							    	</div>
							    </div>
							</a>
							<div class="card-content text-left">
								<h3 class="card-title txt-lime-dark">Hugh Cobbe OBE, FSA</h3>
								<h4 class="role">Chairman</h4>
								<p class="card-excerpt">Chairman Curabitur ultricies viverra elit, non mattis velit pharetra id. Cras metus nulla, fermentum at sollicitudin eu, lacinia consequat orci. Lorem ipsum dolor sit amet, consectetur elit. Morbi lacinia tellus quis est imperdiet semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia tellus quis est imperdiet semper. Pellentesque ac orci viverra, consequat velit quis, efficitur velit. Curabitur maximus, sapien sed gravida scelerisque, velit neque interdum metus.</p>					
							</div>
					  	</div>
					</div>
				<?php $coutner++; endwhile; ?>
			</div>
			<div class="row">
				<div class="col-12">
					<h3 class="ft-40 font-weight-normal txt-lime-dark">Secretary and Administrator</h3>
				</div>
				<?php 
				$coutner = 1;
				while($coutner <= 1) : ?>
					<div class="col-md-4">
						<div class="card card--trustees">
							<a href="" class="card-link">
							    <div class="card-image-wrapper">
							    	<div class="card-image"> 
							    		<?php echo wp_get_attachment_image(61, 'square@2x', false, array() ); ?>
							    	</div>
							    </div>
							</a>
							<div class="card-content text-left">
								<h3 class="card-title txt-lime-dark">Hugh Cobbe OBE, FSA</h3>
								<h4 class="role">Chairman</h4>
								<p class="card-excerpt">Chairman Curabitur ultricies viverra elit, non mattis velit pharetra id. Cras metus nulla, fermentum at sollicitudin eu, lacinia consequat orci. Lorem ipsum dolor sit amet, consectetur elit. Morbi lacinia tellus quis est imperdiet semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia tellus quis est imperdiet semper. Pellentesque ac orci viverra, consequat velit quis, efficitur velit. Curabitur maximus, sapien sed gravida scelerisque, velit neque interdum metus.</p>					
							</div>
					  	</div>
					</div>
				<?php $coutner++; endwhile; ?>
			</div>
		</div>
	</div>
</section>