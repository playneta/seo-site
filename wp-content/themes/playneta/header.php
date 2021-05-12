<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/images/favicon.ico" type="image/x-icon">
    
    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Themify -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/plugins/slick-carousel/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/plugins/slick-carousel/slick.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/plugins/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/plugins/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/plugins/magnific-popup/magnific-popup.css">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
</head>
<body>

<header class="header-top bg-grey justify-content-center">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-2 col-md-4 text-center d-none d-lg-block">
          <a class="navbar-brand " href="<?php bloginfo('url'); ?>">
            <!-- <img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="" class="img-fluid"> -->
            <?php bloginfo('name'); ?>
          </a>
      </div>

      <div class="col-lg-8 col-md-12">
        <nav class="navbar navbar-expand-lg navigation-2 navigation">
          <a class="navbar-brand text-uppercase d-lg-none" href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="" class="img-fluid">
          </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="ti-menu"></span>
            </button>

              <div class="collapse navbar-collapse" id="navbar-collapse">

              	
              	<?php wp_nav_menu( array(
              		'theme_location'  => 'head_menu',
              		'menu'            => '',
              		'container'       => 'ul',
              		'container_class' => 'menu navbar-nav mx-auto',
              		'container_id'    => '',
              		'menu_class'      => 'menu navbar-nav mx-auto',
              		'menu_id'         => '',
              		'echo'            => true,
              		'fallback_cb'     => 'wp_page_menu',
              		'before'          => '',
              		'after'           => '',
              		'link_before'     => '',
              		'link_after'      => '',
              		'items_wrap'      => '<ul id = "%1$s" class = " %2$s">%3$s </ul>',
              		'depth'           => 0,
              		'walker'          => '',
              	) ); ?>

                  <ul class="list-inline mb-0 d-block d-lg-none">
                    <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-pinterest"></i></a></li>
                  </ul>
              </div>
          </nav>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="header-socials-2 text-right d-none d-lg-block">
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="ti-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
    </div>
  </div>
</header>