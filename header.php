<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kelpie
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Meta setup -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="keywords" content="">
		<meta name="decription" content="">
		<meta name="author" content="Mostafiz Shabbir">
		
		<!-- Fav Icon -->
		<?php $favicon_uploader = get_field('favicon_uploader','options'); 
			if($favicon_uploader): ?>
		<link rel="icon" href="<?php echo $favicon_uploader['url']; ?>" />	
		<?php endif; ?>
		
		<style type="text/css"> 
		
		.parallax-bg{
			<?php $home_page_banner =  get_field('home_page_banner','options'); 
			
			if($home_page_banner): ?>
			  background: url(<?php echo $home_page_banner['url']; ?>) no-repeat;
			  <?php endif; ?>
		}
		
		.parallax-page-bg, body.page-template-faq .parallax-page-bg, body.page-template-tandc .parallax-page-bg {
			<?php $others_page_banner =  get_field('others_page_banner','options'); 
			
			if($others_page_banner): ?>
			background: url(<?php echo $others_page_banner['url']; ?>) no-repeat;
			  <?php endif; ?>
		}
		
		.whats-included, .tandc-content ul li span, .tandc-content p span, .footer-top, .header-top-fixed.shrink {
			background: <?php echo get_field('theme_color','options'); ?>;
		}
		
		</style>
		
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		<!-- header part start -->
		<header>	
			<div class="
			
			<?php if(is_front_page()){echo "parallax-bg";}else{echo "parallax-page-bg";} ?>
			
			
			">
				<div class="top-menu  header-top-fixed"> 
					<div class="container">
					<div class="row">
					   <div class="col-lg-12 col-md-12">
						 <div class="main-menu">
						    <nav id="navigation">
							<a href="<?php echo home_url(); ?>" class="logo">
							<?php $logo_uploader = get_field('logo_uploader','options'); 
								if($logo_uploader): ?>
								<img src="<?php echo $logo_uploader['url']; ?>" alt="<?php echo $logo_uploader['title']; ?>" />
								<?php endif; ?>
							</a> <a aria-label="mobile menu" class="nav-toggle"> <span></span> <span></span> <span></span> </a>
							
								<?php wp_nav_menu(
								[
									'theme_location'		=> 'main-menu',
									'menu_class'			=> 'menu-left kk',
									'container'				=> '',
								]); ?>
								
								
						    </nav>						  
						  </div>
						</div>							
					</div>					
				</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">						
							 <div class="main-menu-bottom text-center">
							 
								<?php if(is_front_page()): ?>
								
								<?php $home_banner_text = get_field('home_banner_text','options'); 
								if($home_banner_text): ?>
								<h3><?php echo $home_banner_text; ?></h3>
								<?php endif; ?>
								
								<?php $home_banner_image = get_field('home_banner_image','options'); 
								if($home_banner_image): ?>
								<img src="<?php echo $home_banner_image['url']; ?>" alt="<?php echo $home_banner_image['title']; ?>" />
								<?php endif; ?>
								
								
								<?php else: ?>
								<?php while(have_posts()): the_post() ?>
								<h3><?php the_title(); ?></h3>
								<?php endwhile; ?>
								
								<?php endif; ?>
							 </div>						 
						</div>							
					</div>					
				</div>
			</div>
		</header>
		<!-- header part end -->
