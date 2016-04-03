<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/collapse.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.tubular.1.0.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flip.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js" type="text/javascript"></script>
        <script src="js/respond.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body class="<?php echo $point;?>">
<div class="wrapper" >
        <div class="loading">
                <p>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                        <rect x="0" y="8.60703" width="4" height="12.7859" fill="#333" opacity="0.2">
                          <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                          <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                          <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                        </rect>
                        <rect x="8" y="6.10703" width="4" height="17.7859" fill="#333" opacity="0.2">
                          <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                          <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                          <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                        </rect>
                        <rect x="16" y="6.39297" width="4" height="17.2141" fill="#333" opacity="0.2">
                          <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                          <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                          <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                        </rect>
                    </svg>
                </p>
                
            </div>
        <header class="header-main">
            <div class="container">
                <a class="toggleNav">
                    <span class="slice1"></span>
                    <span class="slice2"></span>
                    <span class="slice3"></span>
                </a>
                <a href="<?php echo get_bloginfo('url'); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/demo-logo-small.png" alt="" class="show-device"  >
                    <img src="<?php echo get_template_directory_uri(); ?>/images/demo-logo.png" alt="" class="hidden-device">
                </a>
                <nav class="top-nav">
                	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </nav>
            </div>
            <nav id="mobile">
            	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
            <div class="overlayNav"></div>
        </header>