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
                  <div class="col-lg-8 row m-0 p-0">
                     
                           
                    <div class="col-sm-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">

                               
                           <div class="iq-card-body">
                              <div class="user-post-data">
                                 <div class="d-flex flex-wrap">
                                    <div class="media-support-user-img mr-3">
                                       <img class="rounded-circle img-fluid" src="<?php  echo base_url('resources/shared/images/'.$postinfo->profilepic) ?>" alt="">
                                    </div>
                                    <div class="media-support-info mt-2">
                                       <h5 class="mb-0 d-inline-block"><a href="<?php echo site_url('userC/profileOU/'.$postinfo->userID) ?>" class=""><?php echo $postinfo->username ?></a></h5>
                                       <p class="mb-0 text-primary"><?php echo $postinfo->p_date  ?></p>
                                    </div>
                                    <div class="iq-card-post-toolbar">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                          <!--<div class="dropdown-menu m-0 p-0">
                                             <a class="dropdown-item p-3" href="<?php
                                               echo site_url("postC/editPost/$postinfo->postID") ?>">
                                                <div class="d-flex align-items-top">
                                                   <div class="icon font-size-20"><i class="ri-save-line"></i></div>
                                                   <div class="data ml-2">
                                                      <h6>Edit Post</h6>
                                                      <p class="mb-0">Add this to your saved items</p>
                                                   </div>
                                                </div>
                                             </a>
                                            
                                          </div>!-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="mt-3">
                                 <p class="h2 mb-3 text-center"><?php echo $postinfo->p_title  ?></p>
                              </div>
                              <div class="mt-3">
                                 <p><?php echo $postinfo->p_des  ?></p>
                              </div>
                               <div class="user-post">
                                 <?php if($postinfo->p_image!="") {?>
                                 <a href=""><img src="<?php echo base_url("resources/shared/images/$postinfo->p_image") ?>" alt="post-image" class="img-fluid rounded w-100"></a>
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
                                
                                 <div>
                                    <span class="pull-left">
                                    <?php
                                    if ($likeStatus=="no") {
                                    ?>
                                    <a href="<?php echo site_url("postC/Like/$postinfo->postID") ?>">
                                       
                                       <i class="fa fa-heart" ></i>
                                    </a>
                                    <?php
                                    }
                                    else
                                    {
                                       ?>
                                       <a href="<?php echo site_url("postC/Unlike/$postinfo->postID") ?>">
                                          
                                    <i class="fa fa-heart" style="color: red"></i>
                                       </a>
                                       <?php
                                    }

                                    ?>
                                       
                                    </span>      
                                 </div>

                                        <div>
                                         <span class="pull-right">
                                            <?php
                                           if ($saveStatus=="no") {
                                               ?>
                                              <a href="<?php echo site_url("postC/save/$postinfo->postID") ?>">
                                       
                                           <i class="ri-bookmark-line" ></i>
                                              </a>
                                               <?php
                                             }
                                             else
                                              {
                                             ?>
                                            <a href="<?php echo site_url("postC/Unsave/$postinfo->postID") ?>">
                                          
                                             <i class="ri-bookmark-fill" style="color: skyblue;"></i>
                                              </a>
                                            <?php
                                               }

                                             ?>
                                       
                                    </span>      
                                 </div>

                                 
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
                                 <br>
                                 <hr>
                                 <?php

                               foreach ($commentinfo as $c) {
                                    ?>

                                     <ul class="post-comments p-0 m-0">
                                    <li class="mb-2">
                                       
                                       <div class="d-flex flex-wrap">
                                          <div class="user-img">
                                             <img src="<?php  echo base_url('resources/shared/images/').$c->profilepic ?>" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                          </div>
                                          <div class="comment-data-block ml-3">
                                             <h6><a href="<?php echo site_url('userC/profileOU/'.$c->userID) ?>"><?php  echo $c->username ?></a></h6>
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

                                 ?>
                                 
                                 <form method="post" class="comment-text d-flex align-items-center mt-3" action="<?php echo site_url("postC/insertComment/$postinfo->postID");  ?>">
                                    <input type="text" class="form-control rounded" name="txtcomment">
                                    <div class="comment-attagement d-flex">
                                       <input type="submit" value="Add Comment" class="btn btn-primary">
                                       
                                    </div>
                                 </form>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                           
                    
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">People who like the post</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="media-story m-0 p-0">
                              <?php

                              foreach ($likers as $l) {
                                 
                              
                              ?>
                              <li class="d-flex mb-4 align-items-center active">
                                 <img src="<?php  echo base_url('resources/shared/images/').$l->profilepic ?>" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5><?php echo $l->username ?></h5>
                                    
                                 </div>
                              </li>
                              <?php
                           }
                              ?>
                              
                           </ul>
                           <!-- <a href="#" class="btn btn-primary d-block mt-3">See All</a> -->
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
