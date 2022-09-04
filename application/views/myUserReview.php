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

              <div class="col-sm-12">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Notification</h4>
                        </div>
                     </div>
                  </div>
                      <?php 
                  foreach ($review as $r)
                  {
                ?>
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-body">
                           <ul class="notification-list m-0 p-0">
                              <li class="d-flex align-items-center">
                                 <div class="user-img img-fluid"><img src="<?php  echo base_url('resources/shared/images/'.$r->profilepic) ?>" alt="story-img" class="rounded-circle avatar-90"></div>
                                 <div class="media-support-info ml-3">
                                    <h4><b><?php echo $r->com_name  ?></b></h4>
                                     <div class="details">
                            <div class="tc_content">
                              
                                 <?php if($r->rating==0){ ?>
                                <h4> Rating : No Stars 
                                <div >
                                ★★★★★
                                </div></h4>
                              <?php } 
                              else
                                {?>
                              <h4> Rating=<?php echo $r->rating; ?> stars 
                                <?php if($r->rating==5){ ?>
                                <div style="color: #ffc700">
                                ★★★★★
                                </div>
                              <?php } ?>

                                <?php if($r->rating==4){ ?>
                                <div style="color: #ffc700">
                                ★★★★
                                </div>
                              <?php } ?>

                                <?php if($r->rating==3){ ?>
                                <div style="color: #ffc700">
                                ★★★
                                </div>
                              <?php } ?>

                                <?php if($r->rating==2){ ?>
                                <div style="color: #ffc700">
                                ★★
                                </div>
                              <?php } ?>

                                <?php if($r->rating==1){ ?>
                                <div style="color: #ffc700">
                                ★
                                </div>
                              <?php } ?>
                              </h4>
                                                            <?php } ?>
                              <p> <?php echo $r->review; ?> </p>
                              <br>
                            </div>
                          </div>
                                 </div>
                                 <div class="d-flex align-items-center">
                                    
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                       <p> Uploaded on <?php echo $r->re_date; ?> </p>
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
