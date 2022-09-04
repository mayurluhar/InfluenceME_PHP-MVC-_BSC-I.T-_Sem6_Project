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
                                                if ($linkStatus=="yes") {
                                                 ?>
                                                 <div class="col-lg-6 offset-lg-3">
                                             <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Social Media</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="acc-edit">
                              <form method="post" action="<?php echo site_url('userC/linkUpdate') ?>">
                                 <div class="form-group">
                                    <label for="facebook">Facebook:</label>
                                    <input type="text" class="form-control"  name="txtFacebook" value="<?php echo $linkinfo->facebook  ?>">
                                 </div>
                                 <div class="form-group">
                                    <label for="twitter">Twitter:</label>
                                    <input type="text" class="form-control" id="twitter" name="txtTwitter" value="<?php echo $linkinfo->twitter  ?>">
                                 </div>
                                 <div class="form-group">
                                    <label for="google">Google +:</label>
                                    <input type="text" class="form-control" id="google" name="txtGoogle" value="<?php echo $linkinfo->google  ?>">
                                 </div>
                                 <div class="form-group">
                                    <label for="instagram">Instagram:</label>
                                    <input type="text" class="form-control" id="instagram" name="txtInstagram" value="<?php echo $linkinfo->instagram  ?>">
                                 </div>
                                 <div class="form-group">
                                    <label for="youtube">You Tube:</label>
                                    <input type="text" class="form-control" id="youtube" name="txtYoutube" value="<?php echo $linkinfo->youtube  ?>">
                                 </div>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                 <button type="reset" class="btn iq-bg-danger">Cancle</button>
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
                                           <div class="col-lg-6 offset-lg-3">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Social Media</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="acc-edit">
                              <form method="post" action="<?php echo site_url('userC/profileLink') ?>">
                                 <div class="form-group">
                                    <label for="facebook">Facebook:</label>
                                    <input type="text" class="form-control"  name="txtFacebook">
                                 </div>
                                 <div class="form-group">
                                    <label for="twitter">Twitter:</label>
                                    <input type="text" class="form-control" id="twitter" name="txtTwitter">
                                 </div>
                                 <div class="form-group">
                                    <label for="google">Google +:</label>
                                    <input type="text" class="form-control" id="google" name="txtGoogle">
                                 </div>
                                 <div class="form-group">
                                    <label for="instagram">Instagram:</label>
                                    <input type="text" class="form-control" id="instagram" name="txtInstagram">
                                 </div>
                                 <div class="form-group">
                                    <label for="youtube">You Tube:</label>
                                    <input type="text" class="form-control" id="youtube" name="txtYoutube">
                                 </div>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                 <button type="reset" class="btn iq-bg-danger">Cancle</button>
                              </form>
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
