<?php get_header(); ?>

<div class="subpage-banner"></div><!--subpage-banner-->

    
<div class="container">
    <main class="wrapper post-wrapper">
    	<?php if ( have_posts() ) : ?>

        	<?php while ( have_posts() ) : the_post();?>
            
                <article <?php post_class(); ?>>
                    <header class="post-header"> 
                        <h2><a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>"><?php the_title();?></a></h2>
                        <span class="post-date"> <?php the_date();?> </span>
                    </header><!--post-header-->
                
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div><!--post-content-->
                    
                    <footer class="post-footer">
                    
                    	<?php
							$categories = get_the_category();
							$separator = '';
							$output = '';
						?>
                        
                        <?php if( count( $categories ) < 2): ?>
                        	
                    		<div class="post-category">
                            	<a href="<?php echo get_category_link( $categories[0]->term_id );?>" title="<?php echo esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ); ?>">
									<?php echo $categories[0]->cat_name ?>
                               	</a>
                            </div><!--post-category-->
                            
                        <?php else:?>
                        	<ul class="post-category-list">
							<?php
								foreach($categories as $category) {
									$output .= '<li><a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a></li>'.$separator;
                                }
								
                                echo trim($output, $separator);
                       	endif; ?>
                        	</ul>

                    </footer><!--post-footer-->
                
                </article>
            
        	<?php endwhile; ?>
        
    	<?php endif; ?>
	</main><!--wrapper-->
</div><!--container-->
   
	
<?php get_footer(); ?>