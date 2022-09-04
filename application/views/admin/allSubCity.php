<?php

?>
<!DOCTYPE html>
<html lang="en">
  

<head>
    <title>InfluenceME</title>
    <?php include_once("topscripts.php");  ?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
   <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="https://www.bootstrapdash.com/demo/purple/jquery/template/assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="https://www.bootstrapdash.com/demo/purple/jquery/template/assets/images/logo-mini.svg" alt="logo" /></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        
        <?php  include_once("header.php"); ?>
        
      </nav> 
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html  color change-->
        
      

        
        <!-- partial -->
       <?php  include_once("nav.php"); ?>

       <!--   main content  -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- header -->
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                   <i class="mdi mdi-home"></i> 
                </span>State</h3>
             
            </div>
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">State Data</h4>
                  <a href="<?php  echo site_url("admin/Category/loadAddCity/$stateID") ?>" class="btn btn-primary">Add City</a>
              <table class="table table-bordered">
                <thead>
                  <tr class="table-primary">
                    <th>City ID</th>
                    <th>City Name</th>
                    <th>Delete</th>
                    
                   
                  </tr>
                </thead>
                <tbody class="table-info">
                  <tr>
                    <?php

                    foreach ($subcity as $c) {
                      ?>

                      <tr class="table-success">
                        <td><?php  echo $c->cityID ?></td>
                        <td><?php  echo $c->city_name ?></td>
                      <td><a href="<?php echo site_url("admin/Category/removeSubCity/$c->cityID/$c->stateID") ?>">DELETE</a></td>
                      
                       
                        
                        
                        
                      </tr>
                      <?php
                    }

                    ?>
                  </tr>
                </tbody>
              </table>
                </div>


            
            
           
    
          </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once("footer.php"); ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?php  include_once("bottomscripts.php"); ?>
  </body>

<!-- Mirrored from www.bootstrapdash.com/demo/purple/jquery/template/demo_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 May 2021 19:40:47 GMT -->
</html>