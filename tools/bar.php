<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <title>Clinic Management System</title>

    <!-- Custom fonts for this template-->
    <link
      href="../vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet" />
    

    
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.php"
        >
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Clinic Management System</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">
          Management
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a href="index.php" class="nav-link">
          <span>Schdule</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="namelist.php" class="nav-link">
          <span>Name List</span>
          </a>
        </li>

        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true" aria-controls="collapsePages1">
          <span>Inventory</span>
          </a>
        <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="inventory.php">View Inventory</a>
            <a class="collapse-item" href="add_inventory_detail.php">Add Item</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>

        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages2">
          <span>Patient Record</span>
          </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="patient_record.php">View Patient</a>
            <a class="collapse-item" href="add_patient.php">Add Patient</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
          
        </li>

        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="true" aria-controls="collapsePages3">
          <span>Staff Management</span>
        </a>
        <div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="staff_management.php">View Staff</a>
            <a class="collapse-item" href="add_staff_management.php">Add Staff</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      
      <li class="nav-item">
          <a href="payment_am.php" class="nav-link">
          <span>Payment</span>
          </a>
        </li>
         <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <!--
        <div class="sidebar-heading">
          User
        </div>
        <li class="nav-item">
          <a href="#"
            data-toggle="modal"
            data-target="#logoutModal"

          class="nav-link">
          <span>Logout</span>
          </a>
        </li>
    
-->
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->


      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
              data-toggle="collapse" data-target="#myNavbar"
            >
              <i class="fa fa-bars"></i>
            </button>



            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                 <i class="">
                 
                 <?php
                 echo "Welcome:";
                echo $_SESSION['username'];

                 ?>

                 </i>
                 
                </a>
                <!-- Nav Item - User Information -->
                
                 <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >

                <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li> 
              
              <div class="d-md-block">

              <li class="nav-item dropdown no-arrow d-md-block">
                <a
                  class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                >
                  <span class="mr-2 d-none d-md-inline d-lg-inline text-gray-600 small" 
                     >
<!--
                    Hello <?php

                    echo $_SESSION ['username'];

                    ?>! | Logout
-->
                  </span>
           
                </a>

              </li>

            </div>

            </ul>
          </nav>
    
          <!-- End of Topbar -->

    <!-- Logout Modal-->
    
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-primary" href="logut.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    
    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
  </body>
</html>