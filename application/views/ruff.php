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
                                    <img src="<?php  echo base_url('resources/user/') ?>images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle">
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
                    <div class="col-sm-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">

                               
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
                                 <a href=""><img src="<?php echo base_url("resources/shared/images/$p->p_image") ?>" alt="post-image" class="img-fluid rounded w-100"></a>
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
                    
                  </div>

                                    <div class="iq-card">
                                       <div class="iq-card-body">
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>