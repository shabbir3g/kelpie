<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kelpie
 * Template Name: Home Page
 */

get_header(); ?>

<!-- helpyou part start -->
	<section class="helpyou">			
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
					 <div class="helpyou-part text-center">
						<?php $services_title = get_field('services_title');
						if($services_title): ?>
						<h3><?php echo $services_title; ?></h3>
						<?php endif; ?>
						
						<?php $services_description = get_field('services_description');
						if($services_description): ?>
						<p><?php echo $services_description; ?></p>  
						<?php endif; ?>
					  </div>
				</div>							
			</div>					
		</div>		
	</section>	
	<!-- helpyou part end -->
	<!-- main-top part start -->
	<section class="main">			
		<div class="container">
		
		
		
			<?php $all_services = get_field('all_services');
				if($all_services): 
				foreach($all_services as $services): ?>
			<div class="box-home">
				<div class="boxs-half">
					<div class="main-part-left imagecommon">
						<a href="<?php echo $services['service_image']['url']; ?>" data-lightbox="homeservices" data-title="<?php echo $services['service_image']['title']; ?>">
							<div class="blur-image"></div>
							<img src="<?php echo $services['service_image']['url']; ?>" class="img-fluid" alt="<?php echo $services['service_image']['title']; ?>" />
						</a>	
					</div>				
				</div>
				<div class="boxs-half">
					<div class="main-part-right text-center">
				
						<p><?php echo $services['service_content']; ?></p>		
					</div>				
				</div>						
			</div>
			<?php endforeach; endif; ?>
			
		</div>		
	</section>
	
	<?php get_template_part('template-parts/bottom-top'); ?>
<?php get_footer(); ?>