<?php
/*
	Template Name:Service-page
*/
?>
<?php $point = 'service-bg'; ?>
<?php include(locate_template('header.php')); ?>

		<div id="tab-contents">
            <div class="tab-pane" id="service">
                <div class="panel-blue">
                    <div class="container">
                        <h3>service</h3>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="service-grid">We are a One-Stop full serviced digital marketing consultancy solution. <br>Being we have many years of experiences as well as' <br>savvy know how. we can/will solve.</p>
                        </div>
                    </div>
                    <div class="row">
                    	<?php
							// WP_Query arguments
							$args = array (
								'post_type'              => 'service',
								'post_status'            => 'publish',
							);
							
							// The Query
							$i = 1;
							$temp = $wp_query;
							$wp_query= null;
							$wp_query = new WP_Query( $args );
							while ($wp_query->have_posts()) : $wp_query->the_post(); 
								$service_image = get_field('service_image');
						?>
                        		<div class="col-md-6">
                                   <div class="media service-grid2 service1">
                                       <img src="<?php echo $service_image['url']; ?>" alt="<?php echo $service_image['alt']; ?>">
                                       <div class="content-service">
                                           <h3><?php echo get_the_title(); ?></h3>
                                           <p><?php echo get_field('service_description'); ?></p>
                                       </div>
                                   </div>
                                </div>
                        <?php 
							$i++; 
							endwhile; 
						?>
                    </div>
                    
  
                </div>
            </div>
        </div>

    </div>
    
    
<?php get_footer(); ?>