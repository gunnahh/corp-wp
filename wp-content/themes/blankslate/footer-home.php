<footer class="footer-main">
    <div class="panel-blue">
        <div class="container">
            <h3>showcase</h3>
        </div>
    </div>
    
    <ul class="showcase-preview">
        <li>
    <?php
      //WP Query agument
      $args = array(
            'page_id'               => 2,
            'post_status'           =>  'publish',
      );
            // The Query
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query( $args );
            while ($wp_query->have_posts()) : $wp_query->the_post();
                $youtube_id = get_field('youtube_id');
                $banner_p1 = get_field('showcase_banner_1');
				$banner_p2 = get_field('showcase_banner_2');
				$banner_p3 = get_field('showcase_banner_3');		
				$showcase_image1 = get_field('showcase_image', $banner_p1);
				$showcase_image2 = get_field('showcase_image', $banner_p2);
				$showcase_image3 = get_field('showcase_image', $banner_p3);

    ?>
                <div class="box">
                    <div class="flipcard v">
                        <div class="front">
                          <a href="<?php echo get_post_permalink( $banner_p1 ); ?>"><img src="<?php echo $showcase_image1['url']; ?>" alt="<?php echo $showcase_image1['alt']; ?>"></a>
                          <div class="text-hover">
                        	  <h5><?php echo get_the_title( $banner_p1 ); ?></h5>
                        	  <p><?php echo get_field('showcase_subtitle', $banner_p1); ?></p>
                    	  </div>
                        </div>
                        <div class="back">
                    	  <a href="<?php echo get_post_permalink( $banner_p1 ); ?>"><img src="<?php echo $showcase_image1['url']; ?>" alt="<?php echo $showcase_image1['alt']; ?>"></a>
                    	  <div class="text-hover">
                        	  <div class="text-hover">
                            	  <h5><?php echo get_the_title( $banner_p1 ); ?></h5>
                            	  <p><?php echo get_field('showcase_subtitle', $banner_p1); ?></p>
                        	  </div>

                    	  </div>
                        </div>
                    </div>
                </div>
                
                <div class="box">
                    <div class="flipcard v">
                        <div class="front">
                          <a href="<?php echo get_post_permalink( $banner_p2 ); ?>"><img src="<?php echo $showcase_image2['url']; ?>" alt="<?php echo $showcase_image2['alt']; ?>"></a>
                          <div class="text-hover">
                        	  <h5><?php echo get_the_title( $banner_p2 ); ?></h5>
                        	  <p><?php echo get_field('showcase_subtitle', $banner_p2); ?></p>
                    	  </div>
                        </div>
                        <div class="back">
                    	  <a href="<?php echo get_post_permalink( $banner_p2 ); ?>"><img src="<?php echo $showcase_image2['url']; ?>" alt="<?php echo $showcase_image2['alt']; ?>"></a>
                    	  <div class="text-hover">
                        	  <div class="text-hover">
                            	  <h5><?php echo get_the_title( $banner_p2 ); ?></h5>
                            	  <p><?php echo get_field('showcase_subtitle', $banner_p2); ?></p>
                        	  </div>

                    	  </div>
                        </div>
                    </div>
                </div>
                
                <div class="box">
                	
                    <div class="flipcard v">
                        <div class="front">
                          <a href="<?php echo get_post_permalink( $banner_p3 ); ?>"><img src="<?php echo $showcase_image3['url']; ?>" alt="<?php echo $showcase_image3['alt']; ?>"></a>
                          <div class="text-hover">
                        	  <h5><?php echo get_the_title( $banner_p3 ); ?></h5>
                        	  <p><?php echo get_field('showcase_subtitle', $banner_p3); ?></p>
                    	  </div>
                        </div>
                        <div class="back">
                    	  <a href="<?php echo get_post_permalink( $banner_p3 ); ?>"><img src="<?php echo $showcase_image3['url']; ?>" alt="<?php echo $showcase_image3['alt']; ?>"></a>
                    	  <div class="text-hover">
                        	  <div class="text-hover">
                            	  <h5><?php echo get_the_title( $banner_p3 ); ?></h5>
                            	  <p><?php echo get_field('showcase_subtitle', $banner_p3); ?></p>
                        	  </div>
                    	  </div>
                        </div>
                    </div>
                    
                </div>
                
                
            <?php endwhile; ?>
        </li>
    </ul>
    
    <ul class="social">
        <li><a href="#" class="fb-icon">facebook</a></li>
        <li><a href="#" class="tw-icon">twitter</a></li>
        <li><a href="#" class="in-icon">instagram</a></li>
    </ul>
    <p>Copyright 2015 DEMO Digital Advertising Agency. All right reserved</p>
</footer>
    
<script src="<?php echo get_template_directory_uri();?>/js/main.js" type="text/javascript"></script>
<script>
$(document).ready(function () {
   $('#video-bg').tubular({videoId: '<?php echo $youtube_id; ?>'});
})
</script>
</body>
</html>