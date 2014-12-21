<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Build/Join Your Ideal Team with LoL Talent Scout">
    <meta name="author" content="Anthony Rivera & Anthony Gomez">
    <link rel="icon" href="../../favicon.ico">

    <title>LoL Talent Scout - Build/Join Your Ideal Team</title>
    
    <?php wp_head(); ?>
    
  </head>

  <body <?php body_class();?> >

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="LoL Talent Scout Logo" title="LoL Talent Scout Logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <!--sign up and log in btn's -->
          <div class="navbar-btns pull-right">
          		<a class="btn btn-default" href="">Sign up</a>
         		<a class="btn btn-default" href="">Log in</a>
          </div>
      
         
		 <?php 
		 	$args = array(
				'menu'			=> 'header-menu',
				'menu_class' 	=> 'nav navbar-nav pull-right',
				'container'		=> 'false'
			);
			wp_nav_menu( $args );
		 ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>