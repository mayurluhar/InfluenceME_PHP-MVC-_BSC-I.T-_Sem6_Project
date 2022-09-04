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
                                    <img src="<?php  echo base_url('resources/shared/images/'.$_SESSION['propic']) ?>" alt="profile-img" class="avatar-130 img-fluid" height="150" width ="150" />
                                 </div>
                                 <div class="profile-detail">
                                    <h3 class=""><?php echo $_SESSION['uname']  ?></h3>
                                 </div>
                              </div>
                              <div class="profile-info p-4 d-flex align-items-center justify-content-between position-relative">
                                 <div class="social-links">
                                    <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                       <li class="text-center pr-3">
                                          <a href="<?php echo $linkData->facebook ?> "  target="_blank"><img src="<?php  echo base_url('resources/user/') ?>images/icon/08.png" class="img-fluid rounded" alt="facebook"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="<?php echo $linkData->twitter ?>" target="_blank"><img src="<?php  echo base_url('resources/user/') ?>images/icon/09.png" class="img-fluid rounded" alt="Twitter"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="<?php echo $linkData->instagram ?>" target="_blank"><img src="<?php  echo base_url('resources/user/') ?>images/icon/10.png" class="img-fluid rounded" alt="Instagram"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="<?php echo $linkData->google ?>" target="_blank"><img src="<?php  echo base_url('resources/user/') ?>images/icon/11.png" class="img-fluid rounded" alt="Google plus"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="<?php echo $linkData->youtube ?>" target="_blank">
                                             <img src="<?php  echo base_url('resources/user/') ?>images/icon/12.png" class="img-fluid rounded" alt="You tube"></a>
                                       </li>
                                       
                                    </ul>
                                 </div>
                                 <div class="social-info">
                                    <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                       <li class="text-center pl-3">
                                          <h5>Posts</h5>
                                          <p class="mb-0" ><?php echo $uPost; ?></p>
                                       </li>
                                       <li class="text-center pl-3">
                                          <h5>Followers</h5>
                                          <p class="mb-0"><?php echo $uFollow; ?></p>
                                       </li>
                                       <li class="text-center pl-3">
                                          <h5>Following</h5>
                                          <p class="mb-0"><?php echo $uFollowing; ?></p>
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
                                    <a class="nav-link" data-toggle="pill" href="#friends">friends</a>
                                 </li>
                                 <li class="col-sm-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#Saved">Saved</a>
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
                                            <label >Profile Pic</label>
                                             <input  type="file"  class="form-control input-group-lg" name="fup" title="Upload Image"/>
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
                                             <?php
                                              foreach ($post as $p) {
                                              ?>
                                          <div class="iq-card">

                               
                           <div class="iq-card-body">
                              <div class="user-post-data">
                                 <div class="d-flex flex-wrap">
                                    <div class="media-support-user-img mr-3">
                                       <img class="rounded-circle img-fluid" src="<?php  echo base_url('resources/shared/images/'.$p->profilepic) ?>" alt="">
                                    </div>
                                    <div class="media-support-info mt-2">
                                       <h5 class="mb-0 d-inline-block"><a href="#" class=""><?php echo $p->username ?></a></h5>
                                       <p class="mb-0 text-primary"><?php echo $p->p_date  ?></p>
                                    </div>
                                    <div class="iq-card-post-toolbar">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                          <div class="dropdown-menu m-0 p-0">
                                             <a class="dropdown-item p-3" href="<?php
                                               echo site_url("postC/editPost/$p->postID") ?>">
                                                <div class="d-flex align-items-top">
                                                   <div class="icon font-size-20"><i class="ri-save-line"></i></div>
                                                   <div class="data ml-2">
                                                      <h6>Edit Post</h6>
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
                                             <?php
                                                 }
                                             ?>
                                 </div>
                              </div>
                           </div>
                        </div>                        
                        
                        <div class="tab-pane fade" id="friends" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-body">
                                 <h2>Friends</h2>
                                 <div class="friend-list-tab mt-2">
                                    <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-3 mb-3">
                                       <li class="col-sm-6 p-0">
                                          <a class="nav-link active" data-toggle="pill" href="#all-friends">Following</a>
                                       </li>
                                       <li class="col-sm-6 p-0">
                                          <a class="nav-link" data-toggle="pill" href="#recently-add">Follower</a>
                                       </li>
                                       
                                    </ul>
                                    <div class="tab-content">
                                       <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                                          <div class="iq-card-body p-0">
                                             <div class="row">
                                                
                                                 <?php
                                                   foreach ($profilefollow as $pf) {
                                                    ?>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php  echo base_url('resources/shared/images/').$pf->profilepic ?>" alt="profile-img" class="img-fluid" height="150
                                                            "
                                                            width ="150"
                                                            >
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>
                                                         <?php echo
                                                       $pf->username
                                                               ?>
                                                               </h5>
                                                              
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <a href="<?php echo site_url("userC/profileUnfollowPP/$pf->followerID") ?>">
                                                                  <span class="dropdown-toggle btn btn-secondary mr-2" >
                                                                <i class="ion-close-circled text-white text-white font-size-16"></i> Unfollow
                                                               </span>
                                                               </a>
                                                            
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
                                       <div class="tab-pane fade" id="recently-add" role="tabpanel">
                                          <div class="iq-card-body p-0">
                                             <div class="row">
                                               <?php

                                               foreach ($profilefollowing as $fi) 
                                               {
                                                  ?>

                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php  echo base_url('resources/shared/images/').$fi->profilepic ?>" alt="profile-img" class="img-fluid"
                                                            height="150
                                                            "
                                                            width ="150">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5><?php echo
                                                               $fi->username
                                                            ?></h5>
                                                               
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <a href="<?php echo site_url("userC/profileUnfollowingPP/$fi->userID") ?>">
                                                                <span class="dropdown-toggle btn btn-secondary mr-2" >
                                                                <i class="ion-close-circled text-white text-white font-size-16"></i> Remove
                                                               </span>
                                                               
                                                                 </a> 
                                                                  
                                                            
                                                                  
                                                                  
                                                               
                                                           
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
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="Saved" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-body">
                                 <h2>Saved</h2>
                                 <div class="friend-list-tab mt-2">
                                    <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-3 mb-3" >
                                       <li class="col-sm-6">
                                          <a class="nav-link active" data-toggle="pill" href="#Post">Post</a>
                                       </li>
                                       <li class="col-sm-6">
                                          <a class="nav-link" data-toggle="pill" href="#UProfile">Profile</a>
                                       </li>
                                    </ul>

                                    <div class="tab-content">
                                                                
                                      <div class="tab-pane fade active show" id="Post" role="tabpanel"  >
                                          <div class="iq-card-body p-0">
                                             <div class="row">
                                                  <?php
                                                 foreach ($postsave as $s) {
                                                               ?>
                                                <div class="col-md-6 col-lg-3 mb-3" >

                                                   <div class="user-images position-relative overflow-hidden" >
                                                              
                                                                  

                                                                 
                                                      
                                                      <a href="<?php echo site_url('postC/postInfo/'.$s->postID) ?>">
                                                         <img src="<?php  echo base_url('resources/shared/images/').$s->p_image ?>" class="img-fluid rounded" alt="No image" width="230" height="149" >
                                                      </a>

                                                      <div class="image-hover-data" >
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> <?php
                                                               echo $s->p_title  ?>  </a></li>
                                                              
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="<?php echo site_url("userC/Unsave/$s->postID") ?>" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="ion-close-circled"></i></a>

                                                   </div>   
                                                </div>
                                                               <?php
                                                                     }
                                                                   ?>
                                                                   
                                                
                                                
                                             </div>
                                          </div>
                                       </div>

                                                              

                                       <div class="tab-pane fade" id="UProfile" role="tabpanel">
                                          <div class="iq-card-body p-0">
                                             <div class="row">

                                                    <?php
                                                       foreach ($profileSave as $ps) {
                                                               ?>
                                                <div class="col-md-6 col-lg-6 mb-3">

                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                             <img src="<?php  echo base_url('resources/shared/images/').$ps->profilepic ?>" alt="profile-img" class="img-fluid" width="150" height="150">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <a href="<?php echo site_url('userC/profileOU/'.$ps->userproID) ?>">
                                                               <h5><?php echo  $ps->username?></h5>
                                                               </a>
                                                               <p class="mb-0">
                                                                  

                                                               </p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            
                                                            <a href="<?php echo site_url("userC/profilePunsave/$ps->userproID") ?>" class="btn btn-secondary mr-2" >
                                                                <i class="ion-close-circled text-white font-size-16"></i> Remove
                                                               </a>
                                                               
                                                            
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
                                          
                                    
                                          
                                       </ul>
                                    </div>
                                    <div class="col-md-9 pl-4">
                                       <div class="tab-content">
                                          <?php  
                                          foreach ($userAbout as $p) {
                                             ?>

                                             <div class="tab-pane fade active show" id="basicinfo" role="tabpanel">
                                             <h4>Contact Information</h4>
                                             <hr>
                                             <div class="row">
                                                <div class="col-3">
                                                   <h6>Email</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $p->emailID  ?></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Mobile</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $p->mobileno  ?></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Address</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $p->city_name  ?>,<?php echo $p->state_name  ?></p>
                                                </div>
                                             </div>
                                             <h4 class="mt-3">Websites and Social Links</h4>
                                             <hr>
                                             <div class="row">
                                                <div class="col-3">
                                                   <h6>Instagram</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $p->instagram   ?></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Facebook</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $p->facebook ?></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Twitter</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $p->twitter ?></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Google</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $p->google ?></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Youtube</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $p->youtube ?></p>
                                                </div>
                                             </div>
                                             <h4 class="mt-3">Basic Information</h4>
                                             <hr>
                                             <div class="row">
                                                <div class="col-3">
                                                   <h6>Birth Date</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $p->dob  ?></p>
                                                </div>
                                             
                                                <div class="col-3">
                                                   <h6>Gender</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php 
                                                   if ($p->dob==1) {
                                                      ?>
                                                      Female
                                                      <?php
                                                   }
                                                   else
                                                   {
                                                      ?>
                                                      Male
                                                      <?php
                                                   }

                                                     ?></p>
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
