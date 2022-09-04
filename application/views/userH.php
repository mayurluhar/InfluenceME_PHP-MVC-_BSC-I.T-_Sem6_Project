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
                  <div class="col-lg-8 row m-0 p-0">
                     <div class="col-sm-12">
                        <div id="post-modal-data" class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Create Post</h4>
                              </div>
                           </div>
                           <div class="iq-card-body" data-toggle="modal" data-target="#post-modal">
                              <div class="d-flex align-items-center">
                                 <div class="user-img">
                                    <img src="<?php  echo base_url('resources/shared/images/'.$_SESSION['propic']) ?>" alt="userimg" class="avatar-60 rounded-circle">
                                 </div>
                                 <form class="post-text ml-3 w-100" action="javascript:void();">
                                    <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                                 </form>
                              </div>
                              <hr>
                              <ul class="post-opt-block d-flex align-items-center list-inline m-0 p-0">
                                 <li class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php  echo base_url('resources/user/') ?>images/small/07.png" alt="icon" class="img-fluid"> Photo/Video</li>
                                 
                                 
                              </ul>
                           </div>
                           <div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="post-modalLabel" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-fill m-0"></i></button>
                                    </div>
                                    <div class="modal-body">
                                       <div class="d-flex align-items-center">
                                          <div class="user-img">
                                             <img src="<?php  echo base_url('resources/user/') ?>images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                          </div>
                                          <!-- POST DATA -->
                                             <form method="post" enctype="multipart/form-data" class="post-text ml-3 w-100" action="<?php  echo site_url('postC/registerPost') ?>">
                                             <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;" name="txtDes">
                                         
                                       </div>
                                     <hr>

                                       <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                         
                                          <li class="col-md-6 mb-3">
                                             <div class=" row align-items-center">
                                          <div class="form-group col-sm-10">
                                             <label>Title</label>
                                             <input type="text" class="form-control" name="txtTitle" >
                                          </div>
                                       </div>
                                          </li>
                                         
                                          <li class="col-md-6 mb-3">
                                              <div class="row align-items-center">
                                            <label >Image Pic</label>
                                             <input  type="file"  class="form-control input-group-lg" name="fup" title="Upload Image"/>
                                             </div>
                                          </li>

                                            <li class="col-md-6 mb-3">
                                              <div class="row align-items-center">
                                            <label >video</label>
                                             <input  type="file"  class="form-control input-group-lg" name="txtURL" title="Upload Image"/>
                                             </div>
                                          </li>
                                         
                                          
                                       </ul>
                                       <hr>
                                      
                                       <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                        </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                           <?php
                              foreach ($post as $p) {
                                ?>
                                <!-- FOR POST HIDE -->
                                <?php    
                                if (!$p->status==78960) {
                                   ?>




                                    <div class="col-sm-12">
                        <div class="iq-card">

                               
                           <div class="iq-card-body">
                              <div class="user-post-data">
                                 <div class="d-flex flex-wrap">
                                    <div class="media-support-user-img mr-3">
                                       <img class="rounded-circle img-fluid" src="<?php  echo base_url('resources/shared/images/'.$p->profilepic) ?>" alt="">
                                    </div>
                                    <div class="media-support-info mt-2">
                                       <h5 class="mb-0 d-inline-block"><a href="<?php echo site_url('userC/profileOU/'.$p->userID) ?>" class=""><?php echo $p->username ?></a></h5>
                                       <p class="mb-0 text-primary"><?php echo $p->p_date  ?></p>
                                    </div>
                                    <div class="iq-card-post-toolbar">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                          <div class="dropdown-menu m-0 p-0">
                                             <a class="dropdown-item p-3" href="<?php
                                               echo site_url("userC/reportPost/").$p->postID."/".$p->status ?>">
                                                <div class="d-flex align-items-top">
                                                   <div class="icon font-size-20"><i class="ri-save-line"></i></div>
                                                   <div class="data ml-2">
                                                      <h6>Report</h6>
                                                      <p class="mb-0">Add this to your saved items</p>
                                                   </div>
                                                </div>
                                             </a>
                                            
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="mt-3">
                                 <p class="h2 mb-3 text-center"><?php echo $p->p_title  ?></p>
                              </div>
                              <div class="mt-3">
                                 <p><?php echo $p->p_des  ?></p>
                              </div>
                               <div class="user-post">
                                 <?php if($p->p_image!="") {?>
                                 <a href=""><img src="<?php echo base_url("resources/shared/images/$p->p_image") ?>" alt="post-image" class="img-fluid rounded w-100"></a>
                                 <?php
                                 }
                                 ?>
                              </div>
                              <div class="user-post">
                                 
                               <?php if($p->videourl!="") {?>
                                <video width="620" height="440" controls>
                                   
                                   <source src="<?php echo base_url("resources/shared/images/$p->videourl") ?>" type="video/mp4">
                                </video>
                                <?php
                             }
                                ?>
                                 
                              </div>
                              <div class="comment-area mt-3">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="like-block position-relative d-flex align-items-center">
                                       <div class="d-flex align-items-center">
                                          
                                         <!--  <div class="total-like-block ml-2 mr-3">
                                             <div class="dropdown">
                                                <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                140 Likes
                                                </span>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">Max Emum</a>
                                                   <a class="dropdown-item" href="#">Bill Yerds</a>
                                                   <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                   <a class="dropdown-item" href="#">Tara Misu</a>
                                                   <a class="dropdown-item" href="#">Midge Itz</a>
                                                   <a class="dropdown-item" href="#">Sal Vidge</a>
                                                   <a class="dropdown-item" href="#">Other</a>
                                                </div>
                                             </div>
                                          </div> -->
                                       </div>
                                      <!--  <div class="total-comment-block">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                             20 Comment
                                             </span>
                                             <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Max Emum</a>
                                                <a class="dropdown-item" href="#">Bill Yerds</a>
                                                <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                <a class="dropdown-item" href="#">Tara Misu</a>
                                                <a class="dropdown-item" href="#">Midge Itz</a>
                                                <a class="dropdown-item" href="#">Sal Vidge</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                             </div>
                                          </div>
                                       </div> -->
                                    </div>
                                   
                                 </div>
                                 <hr>
                                 <!-- <ul class="post-comments p-0 m-0">
                                    <li class="mb-2">
                                       <div class="d-flex flex-wrap">
                                          <div class="user-img">
                                             <img src="images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                          </div>
                                          <div class="comment-data-block ml-3">
                                             <h6>Monty Carlo</h6>
                                             <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                             <div class="d-flex flex-wrap align-items-center comment-activity">
                                                <a href="javascript:void();">like</a>
                                                <a href="javascript:void();">reply</a>
                                                <a href="javascript:void();">translate</a>
                                                <span> 5 min </span>
                                             </div>
                                          </div>

                                       </div>
                                    </li>
                                   
                                 </ul> -->
                                 <!-- <?php

                                 foreach ($commentinfo as $c) {
                                    ?>
                                     <ul class="post-comments p-0 m-0">
                                    <li class="mb-2">
                                       <div class="d-flex flex-wrap">
                                          <div class="user-img">
                                             <img src="images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                          </div>
                                          <div class="comment-data-block ml-3">
                                             <h6><?php  echo $c->username ?></h6>
                                             <p class="mb-0"><?php  echo $c->comment ?></p>
                                             <div class="d-flex flex-wrap align-items-center comment-activity">
                                                <a href="javascript:void();">like</a>
                                                <a href="javascript:void();">reply</a>
                                                <a href="javascript:void();">translate</a>
                                                <span> 5 min </span>
                                             </div>
                                          </div>

                                       </div>
                                    </li>
                                   
                                 </ul>
                                    <?php
                                 }

                                 ?> -->
                                 
                                <!--  <form method="post" class="comment-text d-flex align-items-center mt-3" action="<?php echo site_url("postC/insertComment/$p->postID");  ?>">
                                    <input type="text" class="form-control rounded" name="txtcomment">
                                    <div class="comment-attagement d-flex">
                                       <input type="submit" value="Add Comment" class="btn btn-primary">
                                       
                                    </div>
                                 </form> -->
                                 <a href="<?php echo site_url("postC/postInfo/$p->postID")  ?>">View more</a>
                              </div>
                           </div>
                        </div>
                     </div>


                                   <?php
                                }

                                ?>

                    
                            <?php
                              }
                           ?>
                    
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Stories</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="media-story m-0 p-0">
                              <li class="d-flex mb-4 align-items-center">
                                 <i class="ri-add-line font-size-18"></i>
                                 <div class="stories-data ml-3">
                                    <h5>Creat Your Story</h5>
                                    <p class="mb-0">time to story</p>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center active">
                                 <img src="<?php  echo base_url('resources/user/') ?>images/page-img/s2.jpg" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Anna Mull</h5>
                                    <p class="mb-0">1 hour ago</p>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <img src="<?php  echo base_url('resources/user/') ?>images/page-img/s3.jpg" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Ira Membrit</h5>
                                    <p class="mb-0">4 hour ago</p>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <img src="<?php  echo base_url('resources/user/') ?>images/page-img/s1.jpg" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Bob Frapples</h5>
                                    <p class="mb-0">9 hour ago</p>
                                 </div>
                              </li>
                           </ul>
                           <a href="#" class="btn btn-primary d-block mt-3">See All</a>
                        </div>
                     </div>
                    
                  </div>
                 


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
