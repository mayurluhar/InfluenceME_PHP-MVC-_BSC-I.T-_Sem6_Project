 <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">

            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?php echo base_url('resources/admin') ?>/assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $_SESSION['aname'] ?></span>
                  
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/Demo') ?>">
                <span class="menu-title" style="font-size: 17px;">Home</span>
                
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/Category') ?>">
                <span class="menu-title" style="font-size: 17px;">User Data</span>
                
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/Category/companyData') ?>">
                <span class="menu-title" style="font-size: 17px;">Company Data</span>
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/Category/postAllData') ?>">
                <span class="menu-title" style="font-size: 17px;">Post Report Data</span>
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/Category/allState') ?>">
                <span class="menu-title" style="font-size: 17px;">Add State</span>
                
              </a>
            </li>
            
      
          </ul>
        </nav>
        <!-- partial -->