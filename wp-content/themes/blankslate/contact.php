<?php
/*
	Template Name:Contact-page
*/
?>
<?php $point = 'contactus-bg'; ?>
<?php include(locate_template('header.php')); ?>

		<div id="tab-contents">
            <div class="tab-pane" id="contactus">
                <div class="panel-blue">
                    <div class="container">
                        <h3>Contact</h3>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <?php
                              // WP_Query agrument
                              $args = array(
                                  'page_id'   => '77',
                                  'post_status'   => 'publish',
                              );
                              
                              //The Query
                              $temp = $wp_query;
                              $wp_query = null;
                              $wp_query = new WP_Query($args);
                                while ($wp_query->have_posts()) : $wp_query->the_post();
                                    $map_image = get_field('map_image');
                                    echo get_the_content();
                                endwhile; 
                            ?>
                                								
                           
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="pull-right">
                                <h4>Map</h4>
                                <p><img src="<?php echo $map_image['url']; ?>" alt="Map" ></p>
                            </div>
                        </div>
                    </div>
                                        
  
                </div>
            </div>
        </div>

    </div>
    
    
<?php get_footer(); ?>