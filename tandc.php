<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kelpie
 * Template Name: T & C Template 
 */

get_header(); ?>
<section class="faq-toppart">			
			 <div class="tandc-content">
					
					<div class="tandc-left"> 
					
						<?php $left_text = get_field('left_text');
						if($left_text): ?>
							<?php echo $left_text; ?>
						<?php endif; ?>
						
						
						
					</div>
					<div class="tandc-right"> 
					
						<?php $right_text = get_field('right_text');
						if($right_text): ?>
							<?php echo $right_text; ?>
						<?php endif; ?>
						
					</div>
				
			  </div>	
		</section>
<?php get_footer(); ?>