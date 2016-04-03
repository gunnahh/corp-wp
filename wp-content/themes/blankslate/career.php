<?php
/*
	Template Name:Career-page
*/
?>
<?php $point = 'career-bg'; ?>
<?php include(locate_template('header.php')); ?>

		<div id="tab-contents">
            <div class="tab-pane" id="career">
                <div class="panel-blue">
                    <div class="container">
                        <h3>career</h3>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                              // WP_Query agrument
                              $args = array(
                                  'page_id'   => '39',
                                  'post_status'   => 'publish',
                              );
                              
                              //The Query
                              $temp = $wp_query;
                              $wp_query = null;
                              $wp_query = new WP_Query($args);
                             while ($wp_query->have_posts()) : $wp_query->the_post(); 
                              
                            ?>
                                <div class="title-text"><?php echo get_field('career_info'); ?></div>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <?php 
                                    if(get_field('career_description')): 
                                        $i = 1;
                                        while(has_sub_field('career_description')):
                                            if( get_row_layout() == 'career' ):
                                    ?>
    
                                    	<div class="panel">
                                        	<div class="panel-heading" role="tab" id="headingOne">
                                              <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                                  <label><?php echo get_sub_field('career_name'); ?></label><span class="close-arrow pull-right"></span>
                                                </a>
                                              </h4>
                                            </div>
                                            
                                            <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                                                <div class="panel-body">
                                                    <?php echo get_sub_field('career_description'); ?>
                                                    <p class="text-center">
                                                        <a href="mailto:<?php echo get_sub_field('career_apple_to_email');?>?subject=<?php echo get_sub_field('career_name'); ?>" class="apply-btn">
                                                            Apply now
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                    	</div>
                                            <?php
                                            endif;
                                            $i++;
                                        endwhile;
                                    endif;
                                    
                                endwhile;  
                                ?>
								
                            </div>
                        </div>
                    </div>
                                        
  
                </div>
            </div>
        </div>

    </div>
    
    
<?php get_footer(); ?>