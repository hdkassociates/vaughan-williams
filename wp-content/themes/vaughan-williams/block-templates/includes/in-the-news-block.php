
<section class="in-the-news container-fluid max-width-1920 ">
	<div class="row background-image" style="background-image: url('');"> 
		<div class="container"> 
			<div class="row justify-content-center">
				<div class="col-12 section-title"> 
					<h2 class="ft-52 text-center txt-lime-dark text-uppercase">In The News</h2>
				</div>

				<div class="col-11 col-md-11 slider-news">
					<?php if (is_admin()) : //show three ?>
						<div class="card card--in-the-news">
							<a href="" class="card-link">
							    <div class="card-image-wrapper">
							    	<div class="card-image"> 
							    		<?php echo wp_get_attachment_image(47, 'thumbnail', false, array() ); ?>
							    	</div>
							    </div>
							</a>
							<div class="card-content text-center">
								<h3 class="card-title mb-0">Vaughan Williams Foundation</h3>
								<h4 class="twitter-handle">@VWF</h4>
								<?php include (__DIR__ . '/../../dist/images/twitter.svg'); ?>
								<p class="card-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget pretium lorem, in rhoncus sem. Ut at lacinia magna. Phasellus vel nisi ligula. </p>			
							</div>
					  	</div>

					  	<div class="card card--sitewide">
							<a href="" class="card-link">
							    <div class="card-image-wrapper">
							    	<div class="card-image"> 
							    		<?php echo wp_get_attachment_image(47, 'thumbnail', false, array() ); ?>
							    	</div>
							    </div>
							</a>
							<div class="card-content text-center">
								<h3 class="card-title mb-0">Vaughan Williams Foundation</h3>
								<h4 class="twitter-handle">@VWF</h4>
								<?php include (__DIR__ . '/../../dist/images/twitter.svg'); ?>				
								<p class="card-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget pretium lorem, in rhoncus sem. Ut at lacinia magna. Phasellus vel nisi ligula. </p>				
							</div>
					  	</div> 
					  	<div class="card card--sitewide">
							<a href="" class="card-link">
							    <div class="card-image-wrapper">
							    	<div class="card-image"> 	
							    		<?php echo wp_get_attachment_image(47, 'thumbnail', false, array() ); ?>
							    	</div>
							    </div>
							</a>
							<div class="card-content text-center">
								<h3 class="card-title mb-0">Vaughan Williams Foundation</h3>
								<h4 class="twitter-handle">@VWF</h4>
								<?php include (__DIR__ . '/../../dist/images/twitter.svg'); ?>
								<p class="card-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget pretium lorem, in rhoncus sem. Ut at lacinia magna. Phasellus vel nisi ligula. </p>					
							</div>
					  	</div> 
					  <? else : //show all?>

					  	 
					  		<div class="card card--in-the-news">
							<a href="" class="card-link">
							    <div class="card-image-wrapper">
							    	<div class="card-image"> 
							    		<?php echo wp_get_attachment_image(47, 'thumbnail', false, array() ); ?>
							    	</div>
							    </div>
							</a>
							<div class="card-content text-center">
								<h3 class="card-title mb-0">Vaughan Williams Foundation</h3>
								<h4 class="twitter-handle">@VWF</h4>
								<?php include (__DIR__ . '/../../dist/images/twitter.svg'); ?>
								<p class="card-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget pretium lorem, in rhoncus sem. Ut at lacinia magna. Phasellus vel nisi ligula. </p>			
							</div>
					  	</div>

					  	<div class="card card--sitewide">
							<a href="" class="card-link">
							    <div class="card-image-wrapper">
							    	<div class="card-image"> 
							    		<?php echo wp_get_attachment_image(47, 'thumbnail', false, array() ); ?>
							    	</div>
							    </div>
							</a>
							<div class="card-content text-center">
								<h3 class="card-title mb-0">Vaughan Williams Foundation</h3>
								<h4 class="twitter-handle">@VWF</h4>
								<?php include (__DIR__ . '/../../dist/images/twitter.svg'); ?>				
								<p class="card-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget pretium lorem, in rhoncus sem. Ut at lacinia magna. Phasellus vel nisi ligula. </p>				
							</div>
					  	</div> 
					  	<div class="card card--sitewide">
							<a href="" class="card-link">
							    <div class="card-image-wrapper">
							    	<div class="card-image"> 	
							    		<?php echo wp_get_attachment_image(47, 'thumbnail', false, array() ); ?>
							    	</div>
							    </div>
							</a>
							<div class="card-content text-center">
								<h3 class="card-title mb-0">Vaughan Williams Foundation</h3>
								<h4 class="twitter-handle">@VWF</h4>
								<?php include (__DIR__ . '/../../dist/images/twitter.svg'); ?>
								<p class="card-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget pretium lorem, in rhoncus sem. Ut at lacinia magna. Phasellus vel nisi ligula. </p>					
							</div>
					  	</div> 
					<?php  endif; ?>

				 </div>
			</div>
		</div>
	</div>
</section>
