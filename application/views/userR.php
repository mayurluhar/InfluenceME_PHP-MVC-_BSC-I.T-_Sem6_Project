<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/socialv/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 May 2021 07:20:58 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>InfluenceME</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php  echo base_url('resources/user/') ?>images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php  echo base_url('resources/user/') ?>css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="<?php  echo base_url('resources/user/') ?>css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?php  echo base_url('resources/user/') ?>css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?php  echo base_url('resources/user/') ?>css/responsive.css">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
          <div id="container-inside">
              <div id="circle-small"></div>
              <div id="circle-medium"></div>
              <div id="circle-large"></div>
              <div id="circle-xlarge"></div>
              <div id="circle-xxlarge"></div>
          </div>
            <div class="container p-0" style="overflow-x: scroll;">
                <div class="row no-gutters">
                   
                                     
                    <div class="offset-lg-6 col-lg-6 bg-white pt-5" >
                        <div class="sign-in-from" >
                            <h1 class="mb-0">Sign Up</h1>
                            
                            <form method="post" enctype="multipart/form-data" class="mt-4" action="<?php  echo site_url('userC/registerUser') ?>" >

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full Name</label>
                                    <input type="text" class="form-control mb-0" id="exampleInputEmail1" placeholder="fullname"
                                    name="txtfname" />
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">User Name</label>
                                    <input type="text" class="form-control mb-0" id="exampleInputEmail1" placeholder="username"
                                    name="txtUname" />
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password" name="txtPwd" />
                                </div>
                                <div class="form-group ">
                                    <label for="exampleInputEmail2">Email address</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter email" name="txtEmail" />
                                </div>
                                 <div class="form-group ">
                                    <label for="exampleInputEmail2">Mobile No</label>
                                    <input type="number" class="form-control mb-0"  placeholder="Enter No" name="txtMobileno" />
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail2"> Select State</label>
                                    <select class="form-control mb-0" id="" name="" onchange="loadCity(this.value)">
                                     <option value="-1" >select state</option>
                                        <?php
                                            foreach ($state as $s) {
                                        ?>
                                    <option value="<?php echo $s->stateID  ?>" ><?php  echo $s->state_name?></option>
                                        <?php 
                                         }
                                        ?> 
                                    </select>
                                </div>

                                <div class="form-group ">
                                  <label for="country">Select City</label>
                                    <select class="form-control" id="city" name="txtCity"> 
                                    </select>
                                </div>

                                <div class="form-group ">
                                    <label for="exampleInputEmail2">Gender</label>
                                    <input type="radio" name="gen" value="male">Male
                                    <input type="radio" name="gen" value="female">Female
                                </div>
                              
                                   <div class="form-group ">
                                    <label for="exampleInputEmail2">DOB</label>
                                    <input type="date" class="form-control mb-0"  placeholder="Enter email" name="txtDate" />
                                </div>



                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Profile Pic</label>
                                    <input id="image" class="form-control input-group-lg" type="file" name="fup" title="Upload Image"/>
                                  </div>

                                  <div class="form-group ">
                                    <label for="exampleInputEmail2">Bio</label>
                                    <input type="text" class="form-control mb-0"  placeholder="Enter Bio" name="txtBio" />
                                </div>
                              
                               <!--  <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile No</label>
                                    <input type="text" class="form-control mb-0"  placeholder="Mobile No" name="txtNum" />
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">CityID</label>
                                    <input type="text" class="form-control mb-0"  placeholder="Mobile No" name="txtcity" />
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">status</label>
                                    <input type="text" class="form-control mb-0"  placeholder="Mobile No" name="txtStatus" />
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">gender</label>
                                    <input type="text" class="form-control mb-0"  placeholder="Mobile No" name="txtGender" />
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">DOB</label>
                                    <input type="date" class="form-control mb-0"  placeholder="DOB" name="txtDate" />
                                </div>
                                 

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bio</label>
                                    <input type="text" class="form-control mb-0"  placeholder="Mobile No" name="txtBio" />
                                </div>
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">R_date</label>
                                    <input type="date" class="form-control mb-0"  placeholder="DOB" name="txtRdate"/>
                                </div>



 -->
                                 
                                <div class="d-inline-block w-100">
                                    
                                    <button type="submit" class="btn btn-primary float-right">Sign Up</button>

                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="<?php  echo site_url('userC/index') ?>">Log In</a></span>
                                    <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div>
                                 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php  echo base_url('resources/user/') ?>js/jquery.min.js"></script>
      <script src="<?php  echo base_url('resources/user/') ?>js/popper.min.js"></script>
      <script src="<?php  echo base_url('resources/user/') ?>js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/wow.min.js"></script>
      <!-- lottie JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/lottie.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/smooth-scrollbar.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="<?php  echo base_url('resources/user/') ?>js/custom.js"></script>


      <script type="text/javascript">
      function loadCity(sid){
          if(sid!=-1)
          {
            $.ajax({
              url:"<?php echo site_url('userC/loadCityByStateId/') ?>"+sid,
              success: function(result)
              {
                console.table(result)
                document.getElementById('city').innerHTML=result;
              }
            });
          }
         }
     </script>
   </body>

<!-- Mirrored from iqonic.design/themes/socialv/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 May 2021 07:20:58 GMT -->
</html>