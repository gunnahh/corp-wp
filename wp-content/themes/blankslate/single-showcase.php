<?php $point = 'showcase-detail'; ?>
<?php include(locate_template('header.php')); ?>
<?php
 	while (have_posts()) : $wp_query->the_post(); 
		$showcase_image_top = get_field('showcase_top_image');
		
	endwhile;
	
?>
	<div id="tab-contents">
            <div class="tab-pane" id="showcase">
                <div class="panel-blue">
                    <div class="container">
                        <h3>showcase</h3>
                    </div>
                </div>
                <div class="container showcase-detail">
                    <div class="row">
                        <div class="col-md-12">
                           <div class="banner">
                               <img src="<?php echo $showcase_image_top['url']; ?>" alt="<?php echo $showcase_image_top['alt']; ?>">
                           </div>
                        </div>
                    </div>
                    <div class="row control">
                        <div class="col-md-4 col-sm-4 col-xs-4 text-left">
                            <span><?php previous_post_link('%link', '<img src="'. get_template_directory_uri().'/images/prev.jpg">'); ?></span>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 text-center">
                            <span><a href="<?php echo site_url('showcase'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/showcase-icon.jpg"></a></span>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 text-right">
                            <span><?php next_post_link('%link', '<img src="'. get_template_directory_uri().'/images/next.jpg">'); ?></span>
                        </div>
                    </div>
                    <hr>
                    <h2><?php echo get_the_title(); ?></h2>
                    <p class="text-center"><span><?php echo get_field('showcase_subtitle');?></span></p>
                    <article>
                        <?php the_content(); ?>
                    </article>
                </div>
            </div>
        </div>
<?php get_footer(); ?>