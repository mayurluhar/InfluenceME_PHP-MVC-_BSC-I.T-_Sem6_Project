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
                  foreach ($notification as $ut) {

                    ?>
                     <div class="col-sm-12" >
                     <div class="iq-card">
                        <div class="iq-card-body">
                           <ul class="notification-list m-0 p-0">
                              <li class="d-flex align-items-center">
                                 <div class="user-img img-fluid"></div>
                                 <div class="media-support-info ml-3">
                                    <h6 <?php
                        if($ut->status==0)
                        {
                           ?>
                        style="background-color:skyblue ;"
                        <?php
                        }
                      ?>><?php echo $ut->notification ?></h6>
                                    <p class="mb-0"><?php echo $ut->noti_date ?></p>
                                 </div>
                                 <div class="d-flex align-items-center">
                                    <?php  
                                    if ($ut->status==1 || $ut->status==0) {
                                       ?>
                                      <a href="<?php echo site_url("userC/updateAppFinal/".$ut->appID); ?>" class="btn btn-success mb-3">Accept</a>
                                      <?php
                                    }
                                    ?>
                                    <?php  
                                    if ($ut->status==2) {
                                       ?>
                                      <p class="alert alert-warning">Wait for the company response</p>
                                      <?php
                                    }
                                    ?>
                                     <?php  
                                    if ($ut->status==3) {
                                       ?>
                                      <p class="alert alert-success"><b>Congratulations!!</b>,Company Contact you soon</p>
                                      <?php
                                    }
                                    ?>
                                    <?php  
                                    if ($ut->status==4) {
                                       ?>
                                      <p class="alert alert-info">Company Finish the Deal.</p>
                                      <?php
                                    }
                                    ?>
                                   
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
