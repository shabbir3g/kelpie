<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kelpie
 */

get_header(); ?>

	
		<section class="helpyou">			
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
						 <div class="helpyou-part text-center">
							<h3><?php bloginfo('title'); ?></h3>
							<p><?php bloginfo('description'); ?></p>  
						  </div>
					</div>							
				</div>					
			</div>		
		</section>	
		<!-- helpyou part end -->
		<!-- main-top part start -->
		<section class="main">			
			<div class="container">
			
			
				
				
				<?php while(have_posts()):  the_post(); ?>
				<div class="box-home">
					<div class="boxs-half">
						<div class="main-part-left imagecommon">
							<a href="<?php the_permalink(); ?>">
								<div class="vans-image"> 
									<div class="image-top-text" style="padding-top: 50%;"> 
										<h3><?php the_title(); ?></h3>
										<p>Date: <?php the_time('F j, Y'); ?> | Time: <?php the_time('g:i a'); ?></p>
									</div> 
								</div>
								<?php the_post_thumbnail(); ?>
							</a>	
						</div>				
					</div>
					<div class="boxs-half">
						<div class="main-part-right text-center">
					
							<p><?php echo wp_trim_words(get_the_content(), 30, false); ?></p>		
						</div>				
					</div>						
				</div>
				<?php endwhile; ?>
				
				
				
				
			</div>		
		</section>


	

<?php get_footer();
