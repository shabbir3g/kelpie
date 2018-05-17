
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kelpie
 * Template Name: Contact Us Page
 */

get_header(); ?>

<div class="fotter-top">			
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5">
						 <div class="fotter-top-left">
							<?php $contact_form = get_field('contact_form');
							if($contact_form): ?>
								<?php echo $contact_form; ?>
							<?php endif; ?>
						  </div>
					</div>	
					<div class="col-lg-2 col-md-2">
						 <div class="fotter-top-meddle">
							<span></span>
						  </div>
					</div>
					<div class="col-lg-5 col-md-5">
						 <div class="address">
							<?php $address_text = get_field('address_text');
							if($address_text): ?>
								<?php echo $address_text; ?>
							<?php endif; ?>
							

						  </div>
					</div>						
				</div>					
			</div>		
		</div>	
		
		
		<?php get_template_part('template-parts/bottom-top'); ?>
		
		
<?php get_footer(); ?>