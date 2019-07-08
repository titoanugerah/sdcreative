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
            <a href="index.html" class="nav-brand"><img src="<?php echo base_url('./assets/template/pixel/'); ?>img/core-img/logo.png" alt=""></a>

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
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
                </ul>

                <!-- Top Social Info -->
                <div class="top-social-info ml-5">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-youtube"></i></a>
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
        <div class="slide-bg-img bg-img" style="background-image: url(<?php echo base_url('./assets/template/pixel/'); ?>img/bg-img/1.jpg);"></div>
        <!-- Welcome Text -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-9">
              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="300ms"><span>Digital Agency</span><br>of the year 2019</h2>
                <h4 data-animation="fadeInUp" data-delay="500ms">Visual Identity by John Doe Client: <span>Lorem ipsum</span></h4>
                <a href="#" class="btn pixel-btn mt-50" data-animation="fadeInUp" data-delay="700ms">View Project</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Slide -->
      <div class="single-slide">
        <!-- Background Image-->
        <div class="slide-bg-img bg-img" style="background-image: url(<?php echo base_url('./assets/template/pixel/'); ?>img/bg-img/2.jpg);"></div>
        <!-- Welcome Text -->
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-9">
              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="300ms"><span>Creative Agency</span><br>of the year 2019</h2>
                <h4 data-animation="fadeInUp" data-delay="500ms">Visual Identity by John Doe Client: <span>Lorem ipsum</span></h4>
                <a href="#" class="btn pixel-btn mt-50" data-animation="fadeInUp" data-delay="700ms">View Project</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- ##### Hero Area End ##### -->

  <!-- ##### Top Catagory Area Start ##### -->
  <div class="top-catagory-area d-flex flex-wrap">
    <!-- Single Catagory -->
    <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(<?php echo base_url('./assets/template/pixel/'); ?>img/bg-img/3.jpg);">
      <a href="#">Agency</a>
    </div>
    <!-- Single Catagory -->
    <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(<?php echo base_url('./assets/template/pixel/'); ?>img/bg-img/4.jpg);">
      <a href="#">What We Do?</a>
    </div>
  </div>
  <!-- ##### Top Catagory Area End ##### -->

  <!-- ##### Newsletter Area Start ###### -->
  <section class="nl-area section-padding-100-0">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-12 col-md-9">
          <div class="nl-form mb-100">
            <h4>Cek Progress Pesanan</h4>
            <form action="#" method="post">
              <input type="text" name="nl-email" id="nlEmail" placeholder="Masukan Pesanan">
              <button type="submit" class="d-none"></button>
            </form>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <div class="view-projects-btn text-right mb-100">
            <a href="#" class="btn pixel-btn">Cek Progress</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Newsletter Area End ###### -->

  <!-- ##### Portfolio Area Start ###### -->
  <div class="pixel-portfolio-area section-padding-100-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
            <h2>Made by pixel</h2>
            <img src="img/core-img/x.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Menu -->
    <div class="pixel-projects-menu wow fadeInUp" data-wow-delay="200ms">
      <div class="text-center portfolio-menu">
        <button class="btn active" data-filter="*">All Projects</button>
        <button class="btn" data-filter=".visual">Visual</button>
        <button class="btn" data-filter=".add">Advertising</button>
        <button class="btn" data-filter=".web">Web Development</button>
      </div>
    </div>

    <div class="pixel-portfolio">

      <!-- Single gallery Item -->
      <div class="single_gallery_item visual wow fadeInUp" data-wow-delay="0.2s">
        <img src="<?php echo base_url('./assets/template/pixel/'); ?>img/bg-img/5.jpg" alt="">
        <div class="hover-content text-center d-flex align-items-center justify-content-center">
          <div class="hover-text">
            <a href="img/bg-img/5.jpg" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
            <h4>Branding Identity</h4>
          </div>
        </div>
      </div>

      <!-- Single gallery Item -->
      <div class="single_gallery_item add wow fadeInUp" data-wow-delay="0.4s">
        <img src="<?php echo base_url('./assets/template/pixel/'); ?>img/bg-img/6.jpg" alt="">
        <div class="hover-content text-center d-flex align-items-center justify-content-center">
          <div class="hover-text">
            <a href="img/bg-img/5.jpg" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
            <h4>Branding Identity</h4>
          </div>
        </div>
      </div>

      <!-- Single gallery Item -->
      <div class="single_gallery_item web wow fadeInUp" data-wow-delay="0.6s">
        <img src="<?php echo base_url('./assets/template/pixel/'); ?>img/bg-img/7.jpg" alt="">
        <div class="hover-content text-center d-flex align-items-center justify-content-center">
          <div class="hover-text">
            <a href="img/bg-img/5.jpg" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
            <h4>Branding Identity</h4>
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
            <a href="index.html" class="footer-logo"><img src="<?php echo base_url('./assets/template/pixel/'); ?>img/core-img/logo.png" alt=""></a>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-md-9 col-lg-8 col-xl-7">
          <div class="row">
            <!-- Single Footer Widget -->
            <div class="col-sm-4">
              <div class="single-footer-widget mb-100">
                <h5 class="widget-title">Address</h5>
                <p>1530 Doverfield Ave <br> Hacienda Heights, California(CA), 91745</p>
              </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-sm-4">
              <div class="single-footer-widget mb-100">
                <h5 class="widget-title">Support</h5>
                <p><i class="fa fa-phone"></i> <br> +01 251 332 331</p>
              </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-sm-4">
              <div class="single-footer-widget mb-100">
                <h5 class="widget-title">Social</h5>
                <div class="footer-social-info">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-youtube"></i></a>
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
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h4 style="color:white;">slogan</h4>
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
