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
                  
                      <?php 
                         foreach ($requirementByData as $req) {
                        ?>


                         

                  <div class="col-lg-12">
                                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height blog-list">
                       
                       <div class="iq-inbox-subject p-3">
                           <h3 class="mt-0" align="center">Application of Requirement</h3>            <div class="iq-inbox-subject-info">
                                         <div class="iq-subject-info">
                                             <img src="<?php  echo base_url('resources/shared/images/'.$req->profilepic) ?>" class="img-fluid rounded-circle" alt="#">
                                                <div class="iq-subject-status align-self-center">
                                                    <h6 class="mb-0"><?php echo $req->emailID  ?></h6>
                                                         <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  Time
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td><?php echo $req->requir_date ?></td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td><?php echo $req->title ?></td>
                                                                           </tr>
                                                                           
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center"><?php echo $req->requir_date ?></span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi <?php echo $_SESSION['uname'] ?>,</p>
                                                            <h3 align="center"><?php echo $req->title ?></h3>
                                                            <p><?php echo $req->description ?></p>

                                                            

                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>




                                                       </div>
                                                      
                                                       <?php

                                                       if ($appStatus=="yes") {
                                                         ?>
                                                          
                                                         <?php echo $appByData->des ?>
                                                         <hr>
                                                            <div class="col-sm-12">
                                           <div id="post-modal-data">
                           
                                                   <div class="iq-card-body" data-toggle="modal" data-target="#post-modal">
                                             <div class="col-md-12">
                                                <a href="#" class="btn btn-outline-primary mb-3 col-md-12">Update</a>
                                                  </div>
                              
                              
                                             </div>
                                     <div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="post-modalLabel" aria-hidden="true" style="display: none;">
                               <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="post-modalLabel">Application</h5>
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-fill m-0"></i></button>
                                    </div>
                                    <div class="modal-body">
                                       <div class="d-flex align-items-center">
                                          <div class="user-img">
                                             <img src="<?php  echo base_url('resources/user/') ?>images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                          </div>

                                         <!--  POST DATA --> 
                                             <form method="post" enctype="multipart/form-data" class="post-text ml-3 w-100" action="<?php echo site_url("userC/updateApp/$req->requirID");  ?>">
                                             <input type="textarea" class="form-control rounded" value="<?php echo $appByData->des ?>" style="border:none;" name="txtDes">
                                         
                                       </div>
                                     <hr>

                                       
                                      
                                       <button type="submit" class="btn btn-primary d-block w-100 mt-3">Update</button>
                                        </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                                                          <?php
                                                       }
                                                       else
                                                       {
                                                         ?>
                                                        <div class="col-sm-12">
                                          <div id="post-modal-data">
                           
                                                   <div class="iq-card-body" data-toggle="modal" data-target="#post-modal">
                                             <div class="col-md-12">
                                                <a href="#" class="btn btn-outline-primary mb-3 col-md-12">Apply</a>
                                                  </div>
                              
                              
                                             </div>
                                     <div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="post-modalLabel" aria-hidden="true" style="display: none;">
                               <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="post-modalLabel">Application</h5>
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-fill m-0"></i></button>
                                    </div>
                                    <div class="modal-body">
                                       <div class="d-flex align-items-center">
                                          <div class="user-img">
                                             <img src="<?php  echo base_url('resources/user/') ?>images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                          </div>

                                         <!--  POST DATA --> 
                                             <form method="post" enctype="multipart/form-data" class="post-text ml-3 w-100" action="<?php echo site_url("userC/insertApp/$req->requirID");  ?>">
                                             <input type="textarea" class="form-control rounded" placeholder="Write here..." style="border:none;" name="txtDes">
                                         
                                       </div>
                                     <hr>

                                       
                                      
                                       <button type="submit" class="btn btn-primary d-block w-100 mt-3">Apply</button>
                                        </form>
                                    </div>
                                 </div>
                              </div>
                           </div>

                                                         <?php
                                                       }

                                                       ?>
                                                          

                          
                        </div>
                     </div>
                                                   </div>


                     </div>
                  </div>

                           <?php
                           }
                           ?>

                  
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
