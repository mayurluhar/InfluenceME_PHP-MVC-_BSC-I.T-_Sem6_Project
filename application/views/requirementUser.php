<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/socialv/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 May 2021 07:16:04 GMT -->
<head>
   
      <!-- Required meta tags -->
      <?php  include_once("topscripts.php") ?>
   </head>
   <body class="right-column-fixed">

      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center" style="display: none;">
            
         </div>
         <img src="<?php  echo base_url('resources/user/') ?>images/load.jpg" height="1455" width="339">
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
       <?php include_once("nav.php") ?>
         <!-- TOP Nav Bar -->
         
                        
         <?php include_once("header.php") ?>
         
         <!-- TOP Nav Bar END -->
         <!-- Right Sidebar Panel Start-->
         <?php  include_once("Rnav.php") ?>
         <!-- Right Sidebar Panel End-->
         <!-- Page Content  -->
              <div class="header-for-bg">
                           <div class="background-header position-relative">
                           <img src="<?php  echo base_url('resources/user/') ?>images/page-img/profile-bg6.jpg" class="img-fluid w-100 rounded rounded" alt="profile-bg">
                        <div class="title-on-header">
                        <div class="data-block">
                            <h2>Company Requirement</h2>
                           </div>
                     </div>
               </div>
         </div>
         <div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  
                      <?php 
                         foreach ($requirementAllData as $req) {
                        ?>


                        

                  <div class="col-lg-12">
                                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height blog-list">
                        <div class="iq-card-body">
                           <div class="row align-items-center">
                              <div class="col-md-6">
                                 <div class="image-block" >
                                    <img src="<?php  echo base_url('resources/shared/images/'.$req->profilepic) ?> "  class="img-fluid rounded w-100" alt="blog-img" style=" height: 330px;" >
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="blog-description p-2">
                                    <div class="blog-meta d-flex align-items-center justify-content-between mb-2">
                                       <div class="date"><a href="#" tabindex="-1"><?php echo $req->requir_date ?></a>
                                       </div>
                                    </div>
                                    <h5 class="mb-2"><?php echo $req->title ?></h5>
                                    <p><?php echo $req->description ?></p> 
                                    <div class="group-smile mt-4 d-flex flex-wrap align-items-center justify-content-between">
                                       <div class="iq-media-group">
                                          <a href="#" class="iq-media">
                                          <img class="img-fluid rounded-circle" src="images/icon/01.png" alt="">
                                          </a>
                                          <a href="#" class="iq-media">
                                          <img class="img-fluid rounded-circle" src="images/icon/02.png" alt="">
                                          </a>
                                          <a href="#" class="iq-media">
                                          <img class="img-fluid rounded-circle" src="images/icon/03.png" alt="">
                                          </a>
                                          <a href="#" class="iq-media">
                                          <img class="img-fluid rounded-circle" src="images/icon/07.png" alt="">
                                          </a>
                                       </div>                                 
                                       <div class="col-md-12">
                                         <a href="<?php echo site_url("userC/requirementById/$req->requirID")  ?>" class="btn btn-outline-primary mb-3 col-md-12">View More</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                           <?php
                           }
                           ?>

                  <div class="col-sm-12 text-center">
                     <img src="<?php  echo base_url('resources/user/') ?>images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <?php include_once("footer.php") ?>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <?php  include_once("bottomscripts.php") ?>
   </body>

<!-- Mirrored from iqonic.design/themes/socialv/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 May 2021 07:18:11 GMT -->
</html>
