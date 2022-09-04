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
                 <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                           <div class="profile-header">
                              <div class="cover-container">
                                 <img src="<?php  echo base_url('resources/user/') ?>images/page-img/profile-bg1.jpg" alt="profile-bg" class="rounded img-fluid">
                                 <ul class="header-nav d-flex flex-wrap justify-end p-0 m-0">
                                    <li><a href="javascript:void();"><i class="ri-pencil-line"></i></a></li>
                                    <li><a href="javascript:void();"><i class="ri-settings-4-line"></i></a></li>
                                    
                                 </ul>
                              </div>
                              <div class="user-detail text-center mb-3">
                                 <div class="profile-img">
                                    <img src="<?php  echo base_url('resources/shared/images/'.$companyinfo->profilepic) ?>" alt="profile-img" class="avatar-130 img-fluid" />
                                 </div>
                                 <div class="profile-detail">
                                    <h3 class=""><?php echo $companyinfo->com_name  ?></h3>
                                 </div>
                              </div>
                              <div class="profile-info p-4 d-flex align-items-center justify-content-between position-relative">
                                 <div class="social-links">
                                    <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                       <li class="text-center pr-3">
                                          <a href="https://www.facebook.com"><img src="<?php  echo base_url('resources/user/') ?>images/icon/08.png" class="img-fluid rounded" alt="facebook"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="https://twitter.com"><img src="<?php  echo base_url('resources/user/') ?>images/icon/09.png" class="img-fluid rounded" alt="Twitter"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="https://www.instagram.com"><img src="<?php  echo base_url('resources/user/') ?>images/icon/10.png" class="img-fluid rounded" alt="Instagram"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="https://en.wikipedia.org/wiki/Google+"><img src="<?php  echo base_url('resources/user/') ?>images/icon/11.png" class="img-fluid rounded" alt="Google plus"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="https://www.youtube.com/"><img src="<?php  echo base_url('resources/user/') ?>images/icon/12.png" class="img-fluid rounded" alt="You tube"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="https://in.linkedin.com"><img src="<?php  echo base_url('resources/user/') ?>images/icon/13.png" class="img-fluid rounded" alt="linkedin"></a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="social-info">
                                    <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                       <li class="text-center pl-3">
                                          <h6>Posts</h6>
                                          <!-- <p class="mb-0"><?php echo $uPost  ?></p> -->
                                       </li>
                                       <li class="text-center pl-3">
                                          <h6>Followers</h6>
                                          <!-- <p class="mb-0"><?php echo $uFollow  ?></p> -->
                                       </li>
                                       <li class="text-center pl-3">
                                          <h6>Following</h6>
                                          <!-- <p class="mb-0"><?php echo $uFollowing  ?></p> -->
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-body p-0">
                           <div class="user-tabing">
                              <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                                 <li class="col-sm-3 p-0">
                                    <a class="nav-link active" data-toggle="pill" href="#timeline">Timeline</a>
                                 </li>
                                 
                                 <li class="col-sm-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#about">About</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div> 
                  
               </div>

               <div class="col-sm-12">
                     <div class="tab-content">
                        <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                           <div class="iq-card-body p-0">
                              <div class="row">
                                 <div class="col-lg-4">
                                    
                                    
                                    <div class="iq-card">
                                       <div class="iq-card-header d-flex justify-content-between">
                                          <div class="iq-header-title">
                                             <h4 class="card-title">Photos</h4>
                                          </div>
                                          <div class="iq-card-header-toolbar d-flex align-items-center">
                                             <p class="m-0"><a href="javacsript:void();">Add Photo </a></p>
                                          </div>
                                       </div>
                                       <div class="iq-card-body">
                                          <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                                             <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="<?php  echo base_url('resources/user/') ?>images/page-img/g1.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                             
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="iq-card">
                                       <div class="iq-card-header d-flex justify-content-between">
                                          <div class="iq-header-title">
                                             <h4 class="card-title">Friends</h4>
                                          </div>
                                          <div class="iq-card-header-toolbar d-flex align-items-center">
                                             <p class="m-0"><a href="javacsript:void();">Add New </a></p>
                                          </div>
                                       </div>
                                       <div class="iq-card-body">
                                          <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                                             <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                                <a href="javascript:void();">
                                                <img src="<?php  echo base_url('resources/user/') ?>images/user/05.jpg" alt="gallary-image" class="img-fluid" /></a>
                                                <h6 class="mt-2">Anna Rexia</h6>
                                             </li>
                                             
                                             <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                                <a href="javascript:void();"><img src="<?php  echo base_url('resources/user/') ?>images/user/05.jpg" alt="gallary-image" class="img-fluid" /></a>
                                                <h6 class="mt-2">Greta Life</h6>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>   
                                 </div>
                                 <div class="col-lg-8">
                                             
                           <div id="post-modal-data" class="iq-card">          
                         <?php
                           foreach ($requirementinfo as $r) {
                          ?>
                         <div class="iq-card">
                           <div class="iq-card-body">
                              <div class="user-post-data">
                                 <div class="d-flex flex-wrap">
                                    <div class="media-support-user-img mr-3">
                                       <img class="rounded-circle img-fluid" src="<?php  echo base_url('resources/shared/images/'.$r->profilepic)?>" alt="">
                                    </div>
                                    <div class="media-support-info mt-2">
                                       <h5 class="mb-0 d-inline-block"><a href="<?php echo site_url('company/companyC/profileOU/'.$r->companyID) ?>" class=""><?php echo $r->com_name ?></a></h5>
                                        <p class="mb-0 text-primary"><?php echo $r->requir_date  ?></p>

                                    </div>
                                    <div class="iq-card-post-toolbar">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="mt-3">
                                 <p class="h2 mb-3 text-center"><?php echo $r->title  ?></p>
                              </div>
                              <div class="mt-3">
                                 <p><?php echo $r->description  ?></p>
                              </div>
                              <div class="mt-3">
                                 <p><?php echo $r->budget  ?></p>
                              </div>
                            </div>
                              <div class="comment-area mt-3">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="like-block position-relative d-flex align-items-center">
                                       <div class="d-flex align-items-center">
                                       </div>
                                    </div>
                                 <hr>
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
                                               
                        
                        <div class="tab-pane fade" id="about" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-body">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                                          <li>
                                             <a class="nav-link active" data-toggle="pill" href="#basicinfo">Contact and Basic Info</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" data-toggle="pill" href="#family">Family and Relationship</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" data-toggle="pill" href="#work">Work and Education</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" data-toggle="pill" href="#lived">Places You've Lived</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" data-toggle="pill" href="#details">Details About You</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="col-md-9 pl-4">
                                       <div class="tab-content">
                                          <div class="tab-pane fade active show" id="basicinfo" role="tabpanel">
                                             <h4>Contact Information</h4>
                                             <hr>
                                             <div class="row">
                                                <div class="col-3">
                                                   <h6>Email</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><a href="https://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f6b4989f9c999e98b6919b979f9ad895999b">[email&#160;protected]</a></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Mobile</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0">(001) 4544 565 456</p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Address</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0">United States of America</p>
                                                </div>
                                             </div>
                                             <h4 class="mt-3">Websites and Social Links</h4>
                                             <hr>
                                             <div class="row">
                                                <div class="col-3">
                                                   <h6>Website</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0">www.bootstrap.com</p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Social Link</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0">www.bootstrap.com</p>
                                                </div>
                                             </div>
                                             <h4 class="mt-3">Basic Information</h4>
                                             <hr>
                                             <div class="row">
                                                <div class="col-3">
                                                   <h6>Birth Date</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0">24 January</p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Birth Year</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0">1994</p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Gender</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0">Female</p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>interested in</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0">Designing</p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>language</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0">English, French</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tab-pane fade" id="family" role="tabpanel">
                                             <h4 class="mb-3">Relationship</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add Your Relationship Status</h6>
                                                   </div>
                                                </li>
                                             </ul>
                                             <h4 class="mt-3 mb-3">Family Members</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add Family Members</h6>
                                                   </div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Paul Molive</h6>
                                                      <p class="mb-0">Brother</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Anna Mull</h6>
                                                      <p class="mb-0">Sister</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Paige Turner</h6>
                                                      <p class="mb-0">Cousin</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="tab-pane fade" id="work" role="tabpanel">
                                             <h4 class="mb-3">Work</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add Work Place</h6>
                                                   </div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Themeforest</h6>
                                                      <p class="mb-0">Web Designer</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>iqonicdesign</h6>
                                                      <p class="mb-0">Web Developer</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>W3school</h6>
                                                      <p class="mb-0">Designer</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                             </ul>
                                             <h4 class="mb-3">Professional Skills</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add Professional Skills</h6>
                                                   </div>
                                                </li>
                                             </ul>
                                             <h4 class="mt-3 mb-3">College</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add College</h6>
                                                   </div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Lorem ipsum</h6>
                                                      <p class="mb-0">USA</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="tab-pane fade" id="lived" role="tabpanel">
                                             <h4 class="mb-3">Current City and Hometown</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Georgia</h6>
                                                      <p class="mb-0">Georgia State</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Atlanta</h6>
                                                      <p class="mb-0">Atlanta City</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                             </ul>
                                             <h4 class="mt-3 mb-3">Other Places Lived</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add Place</h6>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="tab-pane fade" id="details" role="tabpanel">
                                             <h4 class="mb-3">About You</h4>
                                             <p>Hi, I’m Bni, I’m 26 and I work as a Web Designer for the iqonicdesign.</p>
                                             <h4 class="mt-3 mb-3">Other Name</h4>
                                             <p>Bini Rock</p>
                                             <h4 class="mt-3 mb-3">Favorite Quotes</h4>
                                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
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
            <div class="col-sm-12 text-center">
                     <img src="<?php  echo base_url('resources/user/') ?>images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
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
