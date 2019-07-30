<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="icon" href="<?php echo base_url('./assets/template/pixel/'); ?>img/core-img/favicon.ico">
  <link rel="stylesheet" href="<?php echo base_url('./assets/template/pixel/'); ?>style.css">
  <!-- Title -->
  <title> <?php echo $content['webconf']->website_name; ?>  </title>

</head>

<body>

  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="lds-ellipsis">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Navbar Area -->
    <div class="pixel-main-menu" id="sticker">
      <div class="classy-nav-container breakpoint-off">
        <div class="container-fluid">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="pixelNav">
            <!-- Nav brand -->
            <a href="<?php echo base_url('') ?>" class="nav-brand"><img src="<?php echo base_url('./assets/upload/'.$content['webconf']->logo); ?>" alt="" style="width:100px"></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>

              <!-- Nav Start -->
              <div class="classynav">
                <ul>
                  <li><a href="<?php echo base_url(); ?>">Home</a></li>
                  <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
                </ul>

                <!-- Top Social Info -->
                <div class="top-social-info ml-5">
                  <a href="<?php echo 'http://www.facebook.com/'.$content['webconf']->facebook; ?>"><i class="fa fa-facebook"></i></a>
                  <a href="<?php echo 'http://www.instagram.com/'.$content['webconf']->instagram; ?>"><i class="fa fa-instagram"></i></a>
                  <a href="<?php echo 'http://www.youtube.com/'.$content['webconf']->youtube; ?>"><i class="fa fa-youtube"></i></a>
                </div>
              </div>
              <!-- Nav End -->
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->

  <!-- ##### Hero Area Start ##### -->
  <section class="hero-area">
    <div class="hero-slideshow owl-carousel">

      <!-- Single Slide -->
      <div class="single-slide">
        <!-- Background Image-->
        <div class="slide-bg-img bg-img" style="background-image: url(<?php echo base_url('./assets/upload/testcat.png'); ?>);"></div>
        <!-- Welcome Text -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-9">
              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="300ms"><span>Welcome fellas</span><br></h2>
                <h4 data-animation="fadeInUp" data-delay="500ms">SDCreative: <span>Capturing The Right Golden Moment</span></h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Slide -->
      <div class="single-slide">
        <!-- Background Image-->
        <div class="slide-bg-img bg-img" style="background-image: url(<?php echo base_url('./assets/upload/testcat2.png'); ?>);"></div>
        <!-- Welcome Text -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-9">
              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="300ms"><span>Welcome fellas</span><br></h2>
                <h4 data-animation="fadeInUp" data-delay="500ms">SDCreative: <span>Capturing The Right Golden Moment</span></h4>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- ##### Hero Area End ##### -->

  <!-- ##### Top Catagory Area Start ##### -->

  <!-- ##### Top Catagory Area End ##### -->
  <section class="team-member-area section-padding-100-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
            <h2>Our Team</h2>
            <img class="mb-30" src="img/core-img/x.png" alt="">
            <p>.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Single Team Member -->
        <?php foreach ($content['staff'] as $item): ?>


        <div class="col-12 col-md-6 col-lg-4">
          <div class="single-team-member mb-100">
            <img src="<?php echo base_url('assets/upload/'.$item->display_picture); ?>" alt="">
            <!-- Hover Text -->
            <div class="hover-text d-flex align-items-end justify-content-center text-center">
              <div class="hover--">
                <h4><?php echo $item->fullname; ?></h4>
                <h6>Digital Designer</h6>
                <div class="social-info">
                  <a href="mailto:<?php echo $item->email; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                  <a href="tel:<?php echo $item->phone_number; ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- ##### Newsletter Area Start ###### -->

  <!-- ##### Newsletter Area End ###### -->

  <!-- ##### Portfolio Area Start ###### -->

  <div class="pixel-portfolio-area section-padding-100-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
            <h2>Made by SD Creative</h2>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Menu -->
    <div class="pixel-projects-menu wow fadeInUp" data-wow-delay="200ms">
      <div class="text-center portfolio-menu">
        <button class="btn active" data-filter="*">All Projects</button>
        <button class="btn" data-filter=".photography">Photography</button>
        <button class="btn" data-filter=".wedding">Wedding</button>
        <button class="btn" data-filter=".prewedding">Prewedding</button>
      </div>
    </div>

    <div class="pixel-portfolio">

      <!-- Single gallery Item -->
      <div class="single_gallery_item photography wow fadeInUp" data-wow-delay="0.2s">
        <img src="<?php echo base_url('./assets/catalogue/catalogue(1).jpeg'); ?>" alt="" style="height: 562px;">
        <div class="hover-content text-center d-flex align-items-center justify-content-center">
          <div class="hover-text">
            <a href="<?php echo base_url('./assets/catalogue/catalogue(1).jpeg'); ?>" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
            <h4>Photography</h4>
          </div>
        </div>
      </div>

      <!-- Single gallery Item -->
      <div class="single_gallery_item wedding wow fadeInUp" data-wow-delay="0.4s">
        <img src="<?php echo base_url('./assets/catalogue/catalogue(27).jpeg'); ?>" alt="">
        <div class="hover-content text-center d-flex align-items-center justify-content-center">
          <div class="hover-text">
            <a href="<?php echo base_url('./assets/catalogue/catalogue(27).jpeg'); ?>" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
            <h4>Wedding</h4>
          </div>
        </div>
      </div>

      <!-- Single gallery Item -->
      <div class="single_gallery_item event prewedding fadeInUp" data-wow-delay="0.6s">
        <img src="<?php echo base_url('./assets/catalogue/catalogue(4).jpeg'); ?>" alt="">
        <div class="hover-content text-center d-flex align-items-center justify-content-center">
          <div class="hover-text">
            <a href="<?php echo base_url('./assets/catalogue/catalogue(4).jpeg'); ?>" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
            <h4>Prewedding</h4>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- ##### Portfolio Area End ###### -->

  <!-- ##### Contact Area Start #####-->

  <!-- ##### Contact Area End #####-->

  <!-- ##### Footer Area Start ##### -->
  <footer class="footer-area section-padding-100-0">
    <div class="container-fluid">
      <div class="row justify-content-between">

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="single-footer-widget mb-100">
            <!-- Footer Logo -->
            <a href="index.html" class="footer-logo"><img src="<?php echo base_url('./assets/upload/'.$content['webconf']->logo); ?>" alt="" style="width:200px;"></a>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-md-9 col-lg-8 col-xl-7">
          <div class="row">
            <!-- Single Footer Widget -->
            <div class="col-sm-4">
              <div class="single-footer-widget mb-100">
                <h5 class="widget-title">Address</h5>
                <p><?php echo $content['webconf']->address.$content['webconf']->office_number; ?><br> Indonesia</p>
              </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-sm-4">
              <div class="single-footer-widget mb-100">
                <h5 class="widget-title">Support</h5>
                <div class="row">

                  <p><i class="fa fa-phone"></i> <br> <h6 style="color:white;font-size:18pt;"><?php echo $content['webconf']->phone_number; ?></h6></p>
                </div>
              </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-sm-4">
              <div class="single-footer-widget mb-100">
                <h5 class="widget-title">Social</h5>
                <div class="footer-social-info">
                  <a href="<?php echo 'http://www.facebook.com/'.$content['webconf']->facebook; ?>"><i class="fa fa-facebook"></i></a>
                  <a href="<?php echo 'http://www.instagram.com/'.$content['webconf']->instagram; ?>"><i class="fa fa-instagram"></i></a>
                  <a href="<?php echo 'http://www.youtube.com/'.$content['webconf']->youtube; ?>"><i class="fa fa-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Copywrite Area -->
    <div class="copywrite-area">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">
            <div class="copywrite-content">
              <!-- Copywrite Text -->
              <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
          <div class="col-12 col-md-2">
          </div>
          <div class="col-12 col-md-4">
            <h6 style="color:white;"><i>"Capturing The Right Golden Moment"</i></h6>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <!-- ##### Footer Area Start ##### -->

  <!-- ##### All Javascript Script ##### -->
  <!-- jQuery-2.2.4 js -->
  <script src="<?php echo base_url('./assets/template/pixel/'); ?>js/jquery/jquery-2.2.4.min.js"></script>
  <!-- Popper js -->
  <script src="<?php echo base_url('./assets/template/pixel/'); ?>js/bootstrap/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="<?php echo base_url('./assets/template/pixel/'); ?>js/bootstrap/bootstrap.min.js"></script>
  <!-- All Plugins js -->
  <script src="<?php echo base_url('./assets/template/pixel/'); ?>js/plugins/plugins.js"></script>
  <!-- Active js -->
  <script src="<?php echo base_url('./assets/template/pixel/'); ?>js/active.js"></script>
</body>

</html>
