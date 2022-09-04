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
      <!-- loader END -->1
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
         <div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <?php
                  foreach ($notification as $nt) {

                    ?>
                     <div class="col-sm-12" >
                     <div class="iq-card">
                        <div class="iq-card-body">
                           <ul class="notification-list m-0 p-0">
                              <li class="d-flex align-items-center">
                                 <div class="user-img img-fluid"></div>
                                 <div class="media-support-info ml-3">
                                    <h6 <?php
                        if($nt->status==0)
                        {
                           ?>
                        style="background-color:skyblue ;"
                        <?php
                        }
                      ?>><?php echo $nt->notification ?></h6>
                                    <p class="mb-0"><?php echo $nt->notification_date ?></p>
                                 </div>
                                 <div class="d-flex align-items-center">
                                    <a href="javascript:void();" class="mr-3 iq-notify iq-bg-primary rounded"><i class="ri-award-line"></i></a>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-toggle="dropdown">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                             <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                             <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul> 
                        </div>
                     </div>
                  </div>
                    <?php
                  }
                  ?>
                  
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
