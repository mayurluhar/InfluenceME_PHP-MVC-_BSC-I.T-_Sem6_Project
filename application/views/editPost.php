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
                                 <li class="col-md-12 p-0">
                                    <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                    Post Information
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
                                       <h4 class="card-title">Personal Information</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form method="post" enctype="multipart/form-data" action="<?php echo site_url("postC/editBasic/$postinfo->postID") ?>">
                                       
                                       <div class=" row align-items-center">
                                          <div class="form-group col-sm-6">
                                             <label>Title</label>
                                             <input type="text" class="form-control" name="txtTitle" value="<?php echo $postinfo->p_title ?>">
                                          </div>
                                 
                                          <div class="form-group col-sm-12">
                                             <label>Description</label>
                                             <textarea class="form-control" name="txtDes" rows="5" style="line-height: 10px;">
                                            <?php echo $postinfo->p_des ?>
                                             </textarea>
                                          </div>


<!-- 
                                       <div class="form-group row align-items-center">
                                          <div class="col-md-12">
                                             <div class="profile-img-edit">
                                                <img class="profile-pic" src="images/user/11.png" alt="New Profile-Pic">
                                                <div class="p-image">
                                                   <i class="ri-pencil-line upload-button"></i>
                                                   <input class="file-upload" type="file" name="fup" />
                                                </div>
                                             </div>
                                          </div>
                                       </div>  -->
                                     
                                    
                                           
                                         

                                          <!-- 
                                          <div class="form-group col-sm-6">
                                             <label class="d-block">Gender:</label>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input" checked="">
                                                <label class="custom-control-label" for="customRadio6"> Male </label>
                                             </div>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio7"> Female </label>
                                             </div>
                                          </div>
                                          
                                          <div class="form-group col-sm-6">
                                             <label>Marital Status:</label>
                                             <select class="form-control" id="exampleFormControlSelect1">
                                                <option selected="">Single</option>
                                                <option>Married</option>
                                                <option>Widowed</option>
                                                <option>Divorced</option>
                                                <option>Separated </option>
                                             </select>
                                          </div> -->
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
