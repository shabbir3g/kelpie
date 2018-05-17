
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kelpie
 * Template Name: Hire Van Page
 */

get_header(); ?>
                                                                             
<div class="fotter-top">			
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						  <div class="hires">
						  
						  
							<?php $hire_page_left = get_field('hire_page_left');
							if($hire_page_left): 
							foreach($hire_page_left as $hire_page): ?>
							<div class="hires-top">
								<h2><?php echo $hire_page['title']; ?></h2>
								<ul>
									<?php $lists =  $hire_page['list_all'];
									
									
										if($lists): 
										foreach($lists as $list): ?>
											<li><?php echo $list['list_get']; ?></li>
									<?php endforeach; endif; ?>
								</ul>
							</div>
							<?php endforeach; endif; ?>
							
						  </div>
					</div>	
					<div class="col-lg-1 col-md-1">
						 <div class="fotter-top-meddle">
							<span></span>
						  </div>
					</div>
					<div class="col-lg-7 col-md-7">
						<div class="fotter-top-left">
							<?php $contact_form = get_field('contact_form');
							if($contact_form): ?>
								<?php echo $contact_form; ?>
							<?php endif; ?>
							
						  </div>
						
					</div>						
				</div>					
			</div>		
		</div>	
		<?php get_template_part('template-parts/bottom-top'); ?>
		
<?php get_footer(); ?>