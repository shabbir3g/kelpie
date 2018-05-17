<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kelpie
 * Template Name: faq Page
 */

get_header(); ?>
<section class="faq-toppart">			
			 <div class="faq-content">
					
				<div class="panel-group" id="accordion">
				
				
				<?php $faq = get_field('faq');
				$faqnumber = 1;
				if($faq): 
				foreach($faq as $faqs): ?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
						<?php $coll = $faqnumber++ ?>
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $coll; ?>">
						 <?php echo $faqs['question']; ?>
						</a>
						</h4>
					</div>
					<div id="collapse<?php echo $coll; ?>" class="panel-collapse collapse in">
						<div class="panel-body">
						 <?php echo $faqs['answer']; ?>
						</div>
					</div>
				</div>
				<?php endforeach; endif; ?>
				
				
				
				</div>
			  </div>	
		</section>
<?php get_footer(); ?>