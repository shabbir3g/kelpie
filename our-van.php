<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kelpie
 * Template Name: Our Van Page
 */

get_header(); ?>
<!-- main-top part start -->
		<section class="main">		
				<div class="our-vans-title"> 
					<?php $vans_section_title = get_field('vans_section_title');
					if($vans_section_title): ?>
					<h2><?php echo $vans_section_title; ?></h2>
					<?php endif; ?>
				</div>
				<div class="box-home">
				
				
					<?php $vans_list = get_field('vans_list');
					if($vans_list): 
					foreach($vans_list as $vans): ?>
					<div class="vans-half">
						<div class="main-part-left imagecommon">
							<a href="<?php echo $vans['image_vn']['url']; ?>" data-lightbox="vans-image" data-title="<?php echo $vans['image_vn']['title']; ?>">
								<div class="vans-image"> 
									<div class="image-top-text"> 
										<h3><?php echo $vans['title_vn']; ?></h3>
										<p><?php echo $vans['description_vn']; ?></p> 
									</div> 
								</div>
								<img src="<?php echo $vans['image_vn']['url']; ?>" class="img-fluid" alt="<?php echo $vans['image_vn']['title']; ?>" />
							</a>	
						</div>				
					</div>	
					<?php endforeach; endif; ?>
					
				</div>
		</section>
		
		
		
		
		<!-- main-top part start -->
		<section class="whats-included">		
				<div class="our-included-title"> 
					<?php $title_inclu = get_field('title_inclu');
					if($title_inclu): ?>
						<h2><?php echo $title_inclu; ?></h2>  
					<?php endif; ?>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						
							<?php $left_part = get_field('left_part');
							if($left_part): ?>
								<?php echo $left_part; ?>
							<?php endif; ?>
							
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<?php $right_part = get_field('right_part');
							if($right_part): ?>
								<?php echo $right_part; ?>
							<?php endif; ?>
								
						</div>						
					</div>					
				</div>		
		</section>
		
		
		
		<?php get_template_part('template-parts/bottom-top'); ?>
		
		
<?php get_footer(); ?>