<?php
/*
	Template Name:home-page
*/
?>
<?php $point ='home-bg';?>
<?php include(locate_template('header.php')); ?>

    <div id="tab-contents" class="tab-content">
        <div class="tab-pane" id="home">
            <div id="video-bg"></div>
                <h2><?php bloginfo('description');?></h2>
        </div>
    </div>

</div>

<?php get_footer('home'); ?>