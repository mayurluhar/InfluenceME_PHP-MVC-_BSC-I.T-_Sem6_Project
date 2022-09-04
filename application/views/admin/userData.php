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
                </span>User</h3>
              </div>
             
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User Data</h4>
              <table class="table table-bordered " >
                <thead>
                  <tr class="table-primary col-lg-12">
                    <th>UserID</th>
                    <th>Username</th>
                    <th>EmailID</th>
                    <th>MobileNo</th>
                    <th>Cityname</th>
                    <th>Status</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Pic</th>
                    <th>Bio</th>
                    <th>Registration Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="table-info">
                  <tr>
                    <?php

                    foreach ($users as $c) {
                      ?>

                      <tr class="table-success">
                        <td><?php  echo $c->userID ?></td>
                        <td><?php  echo $c->username ?></td>
                        <td><?php  echo $c->emailID ?></td>
                        <td><?php  echo $c->mobileno ?></td>
                        <td><?php  echo $c->city_name ?></td>
                        <td><?php  echo $c->status ?></td>
                        <td><?php  echo $c->gender ?></td>
                        <td><?php  echo $c->dob ?></td>
                        <td><img src="<?php echo base_url("resources/shared/images/$c->profilepic") ?>" height="100px"></td>
                        <td><?php  echo $c->bio ?></td>
                        <td><?php  echo $c->r_date ?></td>
                        <?php
                        if ($c->status==0) {
                          ?>
                           <td><a href="<?php echo  site_url("admin/Category/userBlock/".$c->userID);  ?>" class="btn btn-danger">Block</a></td>
                           <?php
                        }
                        ?>
                        <?php
                        if ($c->status==1) {
                          ?>
                           <td><a href="<?php echo  site_url("admin/Category/userUnblock/".$c->userID);  ?>" class="btn btn-success">Unblock</a></td>
                           <?php
                        }
                        ?>
                       
                        
                      </tr>
                      <?php
                    }

                    ?>
                  </tr>
                </tbody>
              </table>
                </div>
                

<!--               <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Table with contextual classes</h4>
                    <p class="card-description"> Add class <code>.table-{color}</code>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> First name </th>
                          <th> Product </th>
                          <th> Amount </th>
                          <th> Deadline </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-info">
                          <td> 1 </td>
                          <td> Herman Beck </td>
                          <td> Photoshop </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
                        <tr class="table-warning">
                          <td> 2 </td>
                          <td> Messsy Adam </td>
                          <td> Flash </td>
                          <td> $245.30 </td>
                          <td> July 1, 2015 </td>
                        </tr>
                        <tr class="table-danger">
                          <td> 3 </td>
                          <td> John Richards </td>
                          <td> Premeire </td>
                          <td> $138.00 </td>
                          <td> Apr 12, 2015 </td>
                        </tr>
                        <tr class="table-success">
                          <td> 4 </td>
                          <td> Peter Meggik </td>
                          <td> After effects </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
                        <tr class="table-primary">
                          <td> 5 </td>
                          <td> Edward </td>
                          <td> Illustrator </td>
                          <td> $ 160.25 </td>
                          <td> May 03, 2015 </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div> -->
            
            
           
    
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