<!DOCTYPE html>
<html lang="en">
  

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('resources/admin') ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('resources/admin') ?>/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('resources/admin') ?>/assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('resources/admin') ?>/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
          <div class="row flex-grow">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
              <div class="auth-form-transparent text-left p-3">
                <div class="brand-logo">
                  <img src="https://www.bootstrapdash.com/demo/purple/jquery/template/assets/images/logo.svg" alt="logo">
                </div>
                <h4>Welcome back!</h4>
                <h6 class="font-weight-light">Happy to see you again!</h6>
                <form method="post" class="pt-3" action="<?php echo site_url('admin/Login/validateLogin');  ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-account-outline text-primary"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control form-control-lg border-left-0" id="" placeholder="Username" name="txtUname">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-lock-outline text-primary"></i>
                        </span>
                      </div>
                      <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password" name="txtPwd">

                    </div>





                  </div>
<?php

if(isset($loginErr))
{

 

?>
                  <div class="form-group">
                     <p style="color: red"><?php echo $loginErr ?></p>
                  </div>
<?php
  }
?>
              
                  <div class="my-4">
                   <input type="submit"  class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" value="Login">
                  </div>
        
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register-2.html" class="text-primary">Create</a>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6 login-half-bg d-flex flex-row">
              <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2021 All rights reserved.</p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('resources/admin') ?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('resources/admin') ?>/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url('resources/admin') ?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url('resources/admin') ?>/assets/js/misc.js"></script>
    <script src="<?php echo base_url('resources/admin') ?>/assets/js/settings.js"></script>
    <script src="<?php echo base_url('resources/admin') ?>/assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>

<!-- Mirrored from www.bootstrapdash.com/demo/purple/jquery/template/demo_1/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 19:42:02 GMT -->
</html>