
    
    <footer class="wrapper">
    	<div class="container">
        	<div class="row">
            
            	<section class="footer-about col-md-4">
                	<h4 class="title-secondary">ETalent Scout</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a tellus neque. Cura bitur at risus quis eros eleifend iaculis.</p>
                    <ul>
                    	<li><strong>Email:</strong> info@etalentscout.com</li>
                        <li><strong>Phone:</strong> (123) 456-7890</li>
                   	</ul>
                </section><!--footer-about-->
                
                <section class="footer-news col-md-4">
                	<h4 class="title-secondary">Lastest News</h4>
                    <?php $my_query = new WP_Query( 'posts_per_page=3' ); ?>
					<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                  		<li>
                  			<a href="<?php the_permalink(); ?>" class="footer-post-title"><?php the_title();?></a>
                    		<p class="footer-post-date"><?php the_time('F j, Y'); ?></p>
                  		</li>
                	<?php endwhile; ?>
                </section><!--footer-news-->
                
                <section class="footer-info col-md-4">
                	<h4 class="title-secondary">Other Information</h4>
                    <ul>
                    	<li><a href="" title="">Send us feedback</a></li>
                        <li><a href="" title="">Privacy Policy</a></li>
                        <li><a href="" title="">Terms and Conditions</a></li>
                    </ul>
                </section><!--footer-info-->
                
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
  </body>
</html>