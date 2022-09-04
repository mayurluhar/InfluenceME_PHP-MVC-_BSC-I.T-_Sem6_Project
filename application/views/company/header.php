<div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href="index.html">
                     <img src="<?php  echo base_url('resources/user/') ?>images/logo.png" class="img-fluid" alt="">
                     <span>InfluenceME</span>
                     </a>
                     <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-menu-line"></i></div>
                     </div>
                  </div>
                  </div>
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li>
                           <a href="<?php  echo site_url('company/companyC/companyPro/'.$_SESSION['uid']) ?>" class="iq-waves-effect d-flex align-items-center">
                               <img src="<?php  echo base_url('resources/shared/images/'.$_SESSION['propic']) ?>" class="img-fluid rounded-circle mr-3" alt="user">
                              <div class="caption">
                                 <h6 class="mb-0 line-height"><?php echo $_SESSION['uname']  ?></h6>
                              </div>
                           </a>
                        </li>
                       
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect" href="#"><i class="ri-group-line"></i></a>
                           <div class="iq-sub-dropdown iq-sub-dropdown-large">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">Friend Request<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Jaques Amole</h6>
                                                <p class="mb-0">40  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                          </div>
                                       </div>
                                    </div>
                                   
                                   
                                          
                                    <div class="text-center">
                                       <a href="#" class="mr-3 btn text-primary">View More Request</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                                                
                     <ul class="navbar-list">
                        <li>
                           <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <i class="ri-arrow-down-s-fill"></i>
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3 line-height">
                                       <h5 class="mb-0 text-white line-height"><?php echo $_SESSION['uname']  ?></h5>
                                       <span class="text-white font-size-12">Available</span>
                                    </div>
                                    <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-file-user-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">My Profile</h6>
                                             <p class="mb-0 font-size-12">View personal profile details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="<?php echo site_url("company/editProfileC/editProfile"); ?>" class="iq-sub-card iq-bg-warning-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-warning">
                                             <i class="ri-profile-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Edit Profile</h6>
                                             <p class="mb-0 font-size-12">Modify your personal details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="account-setting.html" class="iq-sub-card iq-bg-info-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-info">
                                             <i class="ri-account-box-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Account settings</h6>
                                             <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                          </div>
                                       </div>
                                    </a>
                                    
                                    <div class="d-inline-block w-100 text-center p-3">
                                       <a class="bg-primary iq-sign-btn" href="<?php  echo site_url('company/companyC/logout') ?>" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>