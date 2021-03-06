<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="Anthony Rivera & Anthony Gomez">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/etalentscout.ico">

    <title><?php echo get_bloginfo( 'title' ); ?></title>
    
    <?php wp_head(); ?>
    
  </head>

  <body <?php body_class();?> >

    <nav class="navbar navbar-inverse" role="navigation">
    
        <div class="container">
        
                <div class="navbar-header">
                
                    <div class="navbar-brand">
                        <a href="<?php bloginfo( 'url' ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="LoL Talent Scout Logo" title="LoL Talent Scout Logo">
                        </a>
                    </div><!--navbar-brand-->
                  
                	<div class="navbar-mobile">
                     <button type="button" class="navbar-toggle collapsed btn" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <i class="fa fa-navicon"></i>
                    </button>
                   </div><!--navbar-mobile-->
                    
                </div><!--navbar-header-->
    
            
                <div id="navbar" class="navbar-collapse collapse">
					 <?php 
                           $args = array(
                           'menu'			=> 'header-menu',
                           'menu_class' 	    => 'nav navbar-nav',
                           'container'	    => 'false'
                           );
                           wp_nav_menu( $args );
                     ?>
                     <div class="navbar-cta">
                        <a class="btn navbar-cta-signup" href="">Sign up</a>
                        <a class="btn navbar-cta-login" href="">Login</a>
                    </div><!--navbar-cta-->
               </div><!--/.navbar-collapse -->
               
           </div><!--container-->
	</nav>