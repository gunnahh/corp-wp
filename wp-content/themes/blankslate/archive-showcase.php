<?php
/*
	Template Name:Showcase-page
*/
?>
<?php $point = 'showcase-bg showcase-detail'; ?>
<?php include(locate_template('header.php')); ?>

<div id="tab-contents">
            <div class="tab-pane" id="showcase">
                <div class="panel-blue">
                    <div class="container">
                        <h3>showcase</h3>
                    </div>
                </div>
                
                <div class="container">
                <ul class="showcase-list row">
                    <li>
			  	<?php
                  // WP_Query arguments
                  $args = array (
                      'post_type'        => 'showcase',
                      'post_status'    => 'publish',
                      'order'    => 'ASC',
                  );
                  
                  // The Query
                  $temp = $wp_query;
                  $wp_query= null;
                  $wp_query = new WP_Query( $args );
                  while ($wp_query->have_posts()) : $wp_query->the_post(); 
				  $showcase_image = get_field('showcase_image');
                  ?>
                      
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 thumb">
                            <div class="flipcard v">
                                <div class="front">
                                  <a href="<?php the_permalink(); ?>"><img src="<?php echo $showcase_image['url']; ?>" alt="<?php echo $showcase_image['alt']; ?>"></a>
                                  <div class="text-hover">
                                      <h5><?php echo get_the_title(); ?></h5>
                                      <p><?php echo get_field('showcase_subtitle'); ?></p>
                                  </div>
                                </div>
                                <div class="back">
                                  <a href="<?php the_permalink(); ?>"><img src="<?php echo $showcase_image['url']; ?>" alt="<?php echo $showcase_image['alt']; ?>"></a>
                                  <div class="text-hover">
                                      <div class="text-hover">
                                          <h5><?php echo get_the_title(); ?></h5>
                                          <p><?php echo get_field('showcase_subtitle'); ?></p>
                                      </div>
        
                                  </div>
                                </div>
                            </div>
                        </div>
                    
                  <?php endwhile; ?>
                
                  </li>
        		</ul>
                </div>        
            </div>
        </div>

    </div>
    
    
<?php get_footer(); ?>