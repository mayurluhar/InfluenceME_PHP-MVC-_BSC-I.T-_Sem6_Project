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
         <div id="loading-center">
         </div>
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
                  <div class="col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-body p-0">
                           <div class="iq-edit-list">
                              <ul class="iq-edit-profile d-flex nav nav-pills">
                                 <li class="col-md-3 p-0">
                                    <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                    Personal Information
                                    </a>
                                 </li>
                                 <li class="col-md-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                    Change Password
                                    </a>
                                 </li>
                                 <li class="col-md-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#chang-img">
                                    Change Profile Image
                                    </a>
                                 </li>
                                 
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="iq-edit-list-data">
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                              <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Basic Information</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form action="<?php echo site_url("CmanageProfile/editBasic") ?>" name="basic-info" id="basic-info" class="form-inline" method="post">
                                       <div class=" row align-items-center">
                                          <div class="form-group col-sm-6">
                                             <label for="uname">User Name:</label>
                                             <input id="uname" class="form-control input-group-lg" type="text" name="txtUname" title="Enter username" placeholder="My username" value="<?php echo $companyinfo->Name; ?>" />
                                          </div>

                                          <div class="form-group col-sm-6">
                                             <label for="email">Email:</label>
                                             <input id="email" class="form-control input-group-lg" type="text" name="txtEmail" title="Enter Email" placeholder="My Email" value="<?php echo $companyinfo->Emailid; ?>" />
                                          </div>
                                       </div>
                                       <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                              <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Change Password</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form action="<?php echo site_url("CmanageProfile/editPassword") ?>" name="basic-info" id="basic-info" class="form-inline" method="post">
                                       <div class="form-group">
                                          <label for="cpass">Old Password:</label>
                                          
                                           <input id="" class="form-control input-group-lg" type="password" name="txtOpwd" title="Enter Old Password"  />
                                       </div>
                                       <div class="form-group">
                                          <label for="npass">New Password:</label>
                                          <input id="" class="form-control input-group-lg" type="password" name="txtNpwd" title="Enter new Password"  />
                                       </div>
                                       <div class="form-group">
                                          <label for="vpass">Verify Password:</label>
                                          <input id="" class="form-control input-group-lg" type="password" name="txtCpwd" title="Enter Confirm Password"  />
                                       </div>

                                        <?php
                                          if(isset($errMsg))
                                        {
                                        ?>
                                           <div class="row">
                                           <div class="form-group col-xs-12">
                                           <label style="color:red">
                                        <?php
                                             echo $errMsg;
                                          ?>
                                           </label>
                                           </div>
                                           </div> 
                                        <?php 
                                        }
                                        ?>

                                       <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                       
                                    </form>
                                 </div>
                              </div>
                           </div>




                           <div class="tab-pane fade" id="chang-img" role="tabpanel">
                              <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Change Image</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form action="<?php echo site_url("CmanageProfile/editImage") ?>" name="basic-info" id="basic-info" class="form-inline" method="post" enctype="multipart/form-data">
                                       
                                       <div class="form-group">
                                          <label for="npass">Select new image:</label>
                                          <input id="" class="form-control input-group-lg" type="file" name="fup" title="Add new Image"  />
                                       </div>

                                       <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                       
                                    </form>
                                 </div>
                              </div>
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
