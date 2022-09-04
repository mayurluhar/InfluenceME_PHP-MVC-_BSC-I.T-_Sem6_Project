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
         <div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
               <div class="col-lg-3">
                  <div class="iq-card">
                     <div class="iq-card-body">
                        <div class="">
                           <div class="iq-email-list">
                              
                              <div class="iq-email-ui nav flex-column nav-pills">
                                 <?php
                                 foreach ($requirementBox as $rb) {
                                    ?>
                                    <li class="nav-link" role="tab" data-toggle="pill" href="#H<?php  echo $rb->appID ?>"><?php echo $rb->title ?></li>
                                   
                                
                           
                                 <?php
                                 }
                                 ?>
                                 
                              </div>
                               

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 mail-box-detail">
                  <div class="iq-card">
                     <div class="iq-card-body p-0">
                        <div class="">
                           
                           <div class="iq-email-listbox">
                              <div class="tab-content">
                                 <?php
                                 foreach ($requirementBox as $rb) {
                                    ?>
                                 <div class="tab-pane fade"  id="H<?php echo $rb->appID  ?>" role="tabpanel">
                                    <ul class="iq-email-sender-list" >

                                       <li class="iq-read">
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" name="">
                                                   </div>
                                                </div>
                                                
                                                <a href="javascript: void(0);" class="iq-email-title"><?php echo $rb->username ?></a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">
                                                   <?php echo $rb->emailID ?>
                                                </a>
                                                <div class="iq-email-date"><?php echo $rb->app_date ?></div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="<?php echo $rb->appID ?>"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details" style= "overflow-y: scroll; height: 660px;">
                                          <div class="iq-card" >
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                           
                                                         </ul>
                                                        
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0" align="center">InfluencerME Team</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="<?php echo base_url("resources/shared/images/".$rb->profilepic);  ?>" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0"><?php echo $rb->emailID ?></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  Time
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           
                                                                           <tr>
                                                                              <td>Username:</td>
                                                                              <td><?php echo $rb->username  ?></td>
                                                                           </tr>
                                                                           
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td><?php echo $rb->app_date  ?></td>
                                                                           </tr>
                                                                           
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center"><?php echo $rb->app_date  ?></span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi,</p>
                                                            <p><?php echo $rb->des  ?></p>
                                                            <center>
                                                            <div class="col-md-6">
                                                                <div class="iq-card">
                                                                  <div class="iq-card-body profile-page p-0">
                                                                   <div class="profile-header-image">
                                                                     <div class="cover-container">
                                                                        <img src="<?php  echo base_url('resources/user/') ?>images/page-img/profile-bg2.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                                                     </div>
                                                                       <div class="profile-info p-4">
                                                                            <div class="user-detail">
                                                                              <div class="d-flex flex-wrap justify-content-between align-items-start">
                                       <div class="profile-detail d-flex">
                                          <div class="profile-img pr-4">
                                             <img src="<?php  echo base_url('resources/shared/images/'.$rb->profilepic) ?>" alt="profile-img" class="avatar-130 img-fluid" />
                                          </div>
                                          <div class="user-data-block">
                                             <h4><a href="friend-profile.html"><?php echo $rb->username ?></a></h4>
                                             <h6>Influencer</h6>
                                             <p><?php echo $rb->bio ?></p>
                                          </div>
                                       </div>
                                       <a href="<?php echo site_url('userC/profileOU/'.$rb->userID) ?>" class="btn btn-primary col-lg-12">Visit Profile</a>
                                                                             </div>
                                                                                  </div>
                                                                      </div>
                                                                   </div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                            </center>
                                                            
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100"><?php echo $rb->username ?></span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                                                 
                                                                   <?php  
                                                                   if ($rb->status==0) {
                                                                     ?>
                                                                      
                                                                     <form method="post" enctype="multipart/form-data" class="post-text ml-3 w-100" action="<?php echo site_url("company/companyC/insertApproval/".$rb->appID);  ?>">
                                                                    
                                                                   <button type="submit" class="btn btn-primary d-block w-100 mt-3">Approve</button>
                                                                   </form>

                                                                     <?php
                                                                  }
                                                                    ?>
                                                                   <br>
                                                                   <br>
                                                                   <?php  
                                                                   if ($rb->status==4) {
                                                                     ?>
                                                                      <h4>Deal Status:</h4>
                                                                     <p><?php echo $rb->username  ?> Accept your Deal Request,Click on Lock Deal button to make it done.</p>
                                                                     
                                                                  <a href="<?php echo site_url("company/companyC/updateAppFinal/".$rb->appID); ?>" class="btn btn-success mb-3 col-md-6">Lock Deal</a>
                                                                     <?php
                                                                  }
                                                                    ?>
                                                                    <br>
                                                                     <?php  
                                                                   if ($rb->status==5) {
                                                                     ?>
                                                                      <h4>Deal Status:</h4>
                                                                     <p>Click On Finish Deal to Finish Contract.</p>
                                                                     
                                                                  <a href="<?php echo site_url("userC/unableReviewButton/".$rb->appID); ?>" class="btn btn-success mb-3 col-md-6">Finish Deal</a>
                                                                     <?php
                                                                  }
                                                                    ?>

                                                                   <?php  
                                                                   if ($rb->status==6) {
                                                                     ?>
                                                                     <h4>Give Review To <?php echo $rb->username  ?></h4>
                                                                      
                                                                     <form method="post" action="<?php echo site_url("company/companyC/insertuserReview/").$rb->userID."/".$rb->appID; ?>">

                                                                     <div class="rate">
                                                                       <input type="radio" id="star5" name="rate" value="5" />
                                                                       <label  for="star5" title="text" >5 ★★★★★</label>
                                                                       <br>
                                                                       <input type="radio" id="star4" name="rate" value="4" />
                                                                       <label for="star4" title="text">4 ★★★★</label>
                                                                       <br>
                                                                       <input type="radio" id="star3" name="rate" value="3" />
                                                                       <label for="star3" title="text">3 ★★★</label>
                                                                       <br>
                                                                       <input type="radio" id="star2" name="rate" value="2" />
                                                                       <label for="star2" title="text">2 ★★</label>
                                                                       <br>
                                                                       <input type="radio" id="star1" name="rate" value="1" />
                                                                       <label for="star1" title="text">1 ★</label>
                                                                      </div>
                
                                                                     <input type="text" name="txtReview" class="form-control" placeholder="Review">
                                                                     <br>
                                                                     <input type="submit" name="btnAddReview" value="Add Review" class="btn btn-primary">
                                                                      </form>
                                                                      <?php
                                                                   }
                                                                    ?>
                                                                    <?php  
                                                                   if ($rb->status==7) {
                                                                     ?>
                                                                      <h4 ></h4>
                                                                     <h6 class="iq-bg-primary pt-5 pb-5 text-center rounded font-size-18">Team InfluenceME:<br>Thank you For Using Our Website.</h6>
                                                                     
                                                                  
                                                                     <?php
                                                                  }
                                                                    ?>

                                                                   
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                   
                                    </ul>
                                 </div>
                                 <?php
                                 }
                                 ?>
                                 
                                 
                              </div>
                           </div>
                        </div>
                     </div>
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
