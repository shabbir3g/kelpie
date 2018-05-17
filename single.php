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
						 <div class="single-page text-center">
							<h3><?php the_title(); ?></h3>
							<hr />
							<?php the_post_thumbnail(); ?>
							<p><?php the_content(); ?></p>  
						  </div>
					</div>							
				</div>					
			</div>		
		</section>	
		<?php endwhile; ?>
	

<?php get_footer();
