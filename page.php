<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kelpie
 */

get_header(); ?>

		<?php while(have_posts()):  the_post(); ?>
		<section class="helpyou">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						 <div class="single-page text-left">
						 
							<?php the_content(); ?>
						  </div>
					</div>							
				</div>					
			</div>		
		</section>	
		<?php endwhile; ?>
	

<?php get_footer();
