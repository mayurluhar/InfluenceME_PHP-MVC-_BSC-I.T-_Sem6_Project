<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/socialv/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 May 2021 07:20:54 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>InfluenceME</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php  echo base_url('resources/user/') ?>images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php  echo base_url('resources/user/') ?>css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="<?php  echo base_url('resources/user/') ?>css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?php  echo base_url('resources/user/') ?>css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?php  echo base_url('resources/user/') ?>css/responsive.css">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
          <div id="container-inside">
              <div id="circle-small"></div>
              <div id="circle-medium"></div>
              <div id="circle-large"></div>
              <div id="circle-xlarge"></div>
              <div id="circle-xxlarge"></div>
          </div>
            <div class="container p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center pt-5">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="" class="img-fluid" alt=""></a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="<?php  echo base_url('resources/user/') ?>images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Find new friends</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <img src="<?php  echo base_url('resources/user/') ?>images/login/2.png" class="img-fluid mb-4" alt="logo"> 
                                    <h4 class="mb-1 text-white">Connect with the world</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <img src="<?php  echo base_url('resources/user/') ?>images/login/3.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Create new events</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-white pt-5">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Sign in</h1>
                            <p>Enter your Username and password to access user panel.</p>
                            <form class="mt-4" method="post" action="<?php
                           echo site_url('userC/validateLogin') ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Usernname</label>
                                    <input type="text" class="form-control mb-0"  placeholder="Enter Username" name="txtUname" 
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <a href="#" class="float-right">Forgot password?</a>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Enter Password" name="txtPwd">
                                </div>
                                 <?php
                                if(isset($loginErr))
                                {
                                  ?>
                                  <p style="color: red"><?php echo $loginErr  ?></p>
                                  <?php
                                }

                                ?>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Sign in</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="<?php  echo site_url('userC/loaduserR') ?>">Sign up</a></span>
                                    <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php  echo base_url('resources/user/') ?>js/jquery.min.js"></script>
      <script src="<?php  echo base_url('resources/user/') ?>js/popper.min.js"></script>
      <script src="<?php  echo base_url('resources/user/') ?>js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/waypoints.min.js"></script>
      <script src="<?php  echo base_url('resources/user/') ?>js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/apexcharts.js"></script>
      <!-- lottie JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/lottie.js"></script>
      <!-- Slick JavaScript --> 
      <script src="<?php  echo base_url('resources/user/') ?>js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/smooth-scrollbar.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/custom.js"></script>
   </body>

<!-- Mirrored from iqonic.design/themes/socialv/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 May 2021 07:20:58 GMT -->
</html>
