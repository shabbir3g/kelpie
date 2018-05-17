<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kelpie
 */

?>


	<!-- footer part start -->
		<div class="footer-top">			
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="footer-left">
							<?php $footer_logo = get_field('footer_logo','options'); 
						if($footer_logo): ?>
						
						<a href="<?php echo home_url(); ?>"><img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['url']; ?>" /></a>		
					<?php endif; ?>
								
						</div>				
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="footer-right">
							<?php wp_nav_menu(
								[
									'theme_location'		=> 'footer-menu',
								]); ?>
								
						</div>				
					</div>						
				</div>					
			</div>		
		</div>	
		<!-- footer part end -->
		<div class="footer-bottom"> 
				<?php $copyright_text = get_field('copyright_text','options'); 
					if($copyright_text): ?>
					<?php echo $copyright_text; ?>
				<?php endif; ?>
			
		</div>
		
		<?php wp_footer(); ?>
	</body>
</html>