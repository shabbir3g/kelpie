<section class="footer-toppart">			
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				 <div class="footer-topparts text-center">
					
					<?php $get_started_text = get_field('get_started_text','options'); 
						if($get_started_text): ?>
						<?php echo $get_started_text; ?>
					<?php endif; ?>
					
				  </div>
			</div>							
		</div>					
	</div>		
</section>