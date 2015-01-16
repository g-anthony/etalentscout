
    
    <footer class="site-footer wrapper">
    	<div class="container">
        	<div class="row">
            
            	<section class="footer-about col-sm-4">
                	<h3 class="title-secondary">ETalent Scout</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a tellus neque. Cura bitur at risus quis eros eleifend iaculis.</p>
                    <ul class="flat list">
                    	<li><strong>Email:</strong> info@etalentscout.com</li>
                        <li><strong>Phone:</strong> (123) 456-7890</li>
                   	</ul>
                </section><!--footer-about-->
                
                <section class="footer-news col-sm-4">
                	<h3 class="title-secondary">Lastest News</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a tellus neque. Cura bitur at risus quis eros eleifend iaculis.</p>
                    <ul class="flat list">
                    <?php $my_query = new WP_Query( 'posts_per_page=3' ); ?>
					<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                  		<li>
                  			<h4 class="title-secondary"><a href="<?php the_permalink(); ?>" class="footer-post-title"><?php the_title();?></a></h4>
                    		<p class="footer-post-date"><?php the_time('F j, Y'); ?></p>
                  		</li>
                	<?php endwhile; ?>
                    </ul>
                </section><!--footer-news-->
                
                <section class="footer-info col-sm-4">
                	<h3 class="title-secondary">Information</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a tellus neque. Cura bitur at risus quis eros eleifend iaculis.</p>
                    <ul class="flat list">
                    	<li><a href="" title="">Send us feedback</a></li>
                        <li><a href="" title="">Privacy Policy</a></li>
                        <li><a href="" title="">Terms and Conditions</a></li>
                    </ul>
                </section><!--footer-info-->
                
            </div>
        </div>
        
        
        
        <div class="subfooter">
        	<div class="container">
            	<div class="row">
                
                    <div class="copyright col-sm-8">
                        <p>Copyright &copy <?php echo date('Y'); ?>. ETalent Scout. All rights reserved.</p>
                    </div><!--copyright-->
                
                    <div class="social-profiles col-sm-4 clearfix">
                        <ul class="list-floated flat">
                            <li><a href="" title="Like us on Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" title="Follow us on Twitter"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div><!--social-profiles-->
                      
                </div><!--row-->
            </div><!--container-->
        </div><!--subfooter-->
        
        
        
        
        
    </footer>
    
    <?php wp_footer(); ?>
    
   <script>
   
   	(function($){
			
		var testimonialSwiper = $('.swiper-testimonials').swiper({
			'speed': 750, 
			'calculateHeight': true,
			'pagination': '.testimonial-pagination',
			'paginationClickable': true
		});
		
	})(jQuery);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	(function($){
		
		var mobileView = 559;
		var windowWidth = $(window).width();
		var swiperExists = $('.swiper-featured-players').length;
		var playersTitle = $('.featured-players-container .title-section');
		var playersPagination = $('.featured-players-pagination');
		var playersList = $('.featured-players-list');
		var player = $('.featured-player');
		var removeCounter = 0;
		var displayCounter = 0;
		
		checkSwiperExists();

		function displaySwiper(){
			
			playersList.addClass('swiper-wrapper');
			player.addClass('swiper-slide flat');
			$('.featured-player-inner-wrap').css('margin', 15);
		
			
			window.featuredPlayerSwiper = $('.swiper-featured-players').swiper({
				'speed': 750, 
				'calculateHeight': true,
				'pagination': '.featured-players-pagination',
				'paginationClickable': true
			});
			
			
			
			displayCounter++;

		}//displaySwiper
		
		
		function removeSwiper(){
			
			playersPagination.remove();
			
			playersTitle.unwrap();
			
			playersList.removeClass('swiper-wrapper');
			playersList.removeAttr('style'); 
			
			player.removeClass('flat swiper-slide swiper-slide-visible swiper-slide-active');
			player.removeAttr('style');
				
			$('.featured-player-inner-wrap').css('margin', 0);
			
			

			removeCounter++;
			
		}//removeSwiper
			

		function checkSwiperExists(){
			
			if( windowWidth > mobileView && playersList.parent().is('.swiper-featured-players') ){
				playersList.unwrap();
				swiperExists = $('.swiper-featured-players').length;
				
			}else if( windowWidth <= mobileView && playersList.parent().is('.featured-players-container') ){
				playersList.wrap('<div class="swiper-featured-players"></div>');
				swiperExists = $('.swiper-featured-players').length;
			}
			
			if( windowWidth <= mobileView && swiperExists > 0 && displayCounter == 0){
				//swiper exists, display swiper
				displaySwiper();
				
			}else if( swiperExists == 0 && removeCounter == 0){
				//swiper does not exists, remove swiper and loop through once
				removeSwiper();
			}

		}//checkSwiperExists
		
		
		$(window).resize(function(){
			windowWidth = $(this).width();
			checkSwiperExists();
		});
		
	})(jQuery);
		
		
	
	
	
	
	
	
	
	
	
	
		
		(function($){
			
			var featuredSwiper = $('.swiper-featured-container').swiper({
				'speed': 750, 
				'calculateHeight': true,
				'pagination': '.featured-pagination',
				'paginationClickable': true
			});
			
			
		
		})(jQuery);
		
		(function($){	
		
		$('.accordion-js').accordion({
			active: false, 
			header: '.faq-block-question', 
			heightStyle: 'content',
			collapsible: true,
			icons: {
				header: 'fa fa-plus', 
				activeHeader: 'fa fa-minus'
			}, 
			animate: {
				easing: 'swing', 
				duration: 350
			}
		
		});
		
	})(jQuery);
   
   </script>
   
   
   
  </body>
</html>