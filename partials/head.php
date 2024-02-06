<head>
    <title><?php bloginfo('name'); ?> | <?php  is_front_page() ? bloginfo( 'description' ) : wp_title(''); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <style>
        .showcase {
            height: 700px;
            background: url('./img/showcase.jpg');
        }

        .banner {
            background: url('./img/banner.jpg') no-repeat center center;
        }
    </style>
</head>
