<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kelpie
 * Template Name: About Us Page
 */

get_header(); ?>

<!-- helpyou part start -->
		<section class="about-text">
			<?php $about_content = get_field('about_content');
				if($about_content): ?>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						 <div class="about-part text-center">
							<?php echo $about_content; ?>
							
						  </div>
					</div>							
				</div>					
			</div>
			<?php endif; ?>
		</section>	
		<div class="about-img"> 
			<div class="container"> 
			<?php $about_image = get_field('about_image');
				if($about_image): ?>
				<img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['title']; ?>" />
				<?php endif; ?>
			</div>
		</div>
		<!-- helpyou part end -->
		
		<?php get_template_part('template-parts/bottom-top'); ?>
		
		
<?php get_footer(); ?>