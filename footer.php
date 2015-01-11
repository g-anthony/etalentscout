
    
    <footer class="wrapper">
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
			
			var testimonialSwiper = $('.swiper-container').swiper({
				'speed': 750, 
				'calculateHeight': true,
				'pagination': '.testimonial-pagination',
				'paginationClickable': true
			});
		
		})(jQuery);
   
   </script>
  </body>
</html>