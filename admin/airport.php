<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Admin Exploresavana</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
          <i class="fab fa-etsy"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Exploresavana</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Interface</div>

        <!-- Nav Item - flights -->
        <li class="nav-item">
          <a class="nav-link" href="flights.php">
            <i class="fas fa-fw fa-plane-departure"></i>
            <span>Flights</span></a
          >
        </li>

        <!-- Nav Item - airport -->
        <li class="nav-item">
          <a class="nav-link" href="airport.php">
            <i class="fas fa-fw fa-map-marked-alt"></i>
            <span>Airport</span></a
          >
        </li>

        <!-- Nav Item - airline -->
        <li class="nav-item">
          <a class="nav-link" href="airlines.php">
            <i class="fas fa-fw fa-plane"></i>
            <span>Airlines</span></a
          >
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a
          >
        </li>

        <!-- Nav Item - site -->
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a
          >
        </li>

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
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
          <?php include "koneksi.php"; ?>
          <!-- Form Table -->
          <div class="container-fluid">
            <div class="col-lg-12">

                <!-- Table Panel -->
                <div class="col-md-15">
                
                  <div class="card">
                  <div class="card-header">
                    <large class="card-title">
                      <b>Airport List</b>
                    </large>
                        <a href = "tambah_bandara.php" class="btn btn-sm btn-primary col-sm-2 offset-md-2 float-right"><i class="fa fa-plus"></i> Tambah</a>
                    
                    <!-- <button class="btn btn-primary btn-block col-md-2 float-right"  id="new_airport"><i class="fa fa-plus"></i> New Airport</button> -->
                  </div>
                    <div class="card-body">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Airport</th>
                            <th class="text-center">Locoation</th>
                            <th class="text-center">Action</th>
                          </tr>
                        </thead>
                        <?php
                        $sql = "SELECT * FROM airport_list";
                        $query = mysqli_query($db, $sql);

                        while ($air = mysqli_fetch_array($query)){
                          echo "<tr>";

                          echo "<td>".$air['id']."</td>";
                          echo "<td>".$air['airport']."</td>";
                          echo "<td>".$air['location']."</td>";

                          echo "<td>";
                          echo "<a href='ubah_bandara.php?id=".$air['id']."'>Edit</a> | ";
                          echo "<a href='hapus_bandara.php?id=".$air['id']."'>Hapus</a>";
                          echo "</td>";

                          echo "</tr>";
                      }
                      ?>

                    </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end table panel-->
              </div>
            </div>
          </div>
          <!--end form table-->          

        <!-- End of Main Content -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×x</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  </body>
</html>
