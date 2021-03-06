<?php

class Snippets
{

    //==================== initializers / setters =============================//
    private function head($title){
        return
        '
        <!DOCTYPE html>
        <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>Koder Pay - '.$title.'</title>

            <!-- Custom fonts for this template-->
            <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link
                href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                rel="stylesheet">

            <!-- Custom styles for this template-->
            <link href="css/style.css" rel="stylesheet">

        </head>
        <body id="page-top">
        <div id="wrapper">
        ';
    }
    private function scripts(){
        return
        '
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
                <script src="js/demo/validate.js"></script>
            
            </body>
            </html>
        ';
    }
    private function sidebar(){
        return
        '
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./">
                <div class="sidebar-brand-icon">
                    <img src="img/logo-w.png" alt="" width="100">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="./">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item -Fees -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#fees"
                    aria-expanded="true" aria-controls="fees">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Fees</span>
                </a>
                <div id="fees" class="collapse" aria-labelledby="Fees" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Fess Components:</h6>
                        <a class="collapse-item" href="fees.php">Tuition Fees</a>
                        <a class="collapse-item" href="fees.php">Extra Dues</a>
                        <a class="collapse-item" href="fees.php">Paid</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Make payment-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#makepayment"
                    aria-expanded="true" aria-controls="makepayment">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Make Payment</span>
                </a>
                <div id="makepayment" class="collapse" aria-labelledby="Make Payment"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Payment components:</h6>
                        <a class="collapse-item" href="payment.php">Information</a>
                        <a class="collapse-item" href="payment.php">Selection</a>
                        <a class="collapse-item" href="payment.php">Proceed to Pay</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Refund-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#refund"
                    aria-expanded="true" aria-controls="refund">
                    <i class="fas fa-fw fa-history"></i>
                    <span>Refund</span>
                </a>
                <div id="refund" class="collapse" aria-labelledby="Refund"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Refund components:</h6>
                        <a class="collapse-item" href="refund.php">Select Transaction</a>
                        <a class="collapse-item" href="refund.php">Account Details</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="notifications.php">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Notifications</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="transactions.php">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Transactions</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="contact.php">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Contact Us</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
                <p class="text-center mb-2"><strong>KODER PAY</strong><br> Seamles Transaction</p>
            </div>

        </ul>
        ';
    }
    private function navbar($user, $img)
    {
        return
        '
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class = "nav-item p-3">
                <a href="checkout.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Check Out</a>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">'.$user.'</span>
                    <img class="img-profile rounded-circle"
                        src="img/'.$img.'">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="profile.php">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="settings.php">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>
        ';
    }
    private function profile($name, $id, $email, $img)
    {
        return'
        <div class="row">
      <div class="offset-lg-4 col-lg-4 col-sm-6 col-12 main-section text-center">
          <div class="row">
              <div class="col-lg-12 col-sm-12 col-12 profile-header"></div>
          </div>
          <div class="row user-detail">
              <div class="col-lg-12 col-sm-12 col-12">
                  <img src="img/'.$img.'" class="rounded-circle img-thumbnail">
                  <form method="POST" enctype="multipart/form-data">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" name = "userPhoto" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose photo....</label>
                  </div>
                  <button name="changePhoto" class="btn btn-primary btn-block">Upload</button>
              </form>
                  <h5>'.$name.'</h5>
                  <p><i class="fa fa-envelope" aria-hidden="true"></i> Email: '.$email.'</p>
                  <p> Student ID: '.$id.' </p>

              </div>
          </div>
      </div>
    </div>
        ';
    }

    private function topBar($userName, $img)
    {
        return 
        '
        
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

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    '.$this->navbar($userName, $img).'

                </nav>
                <!-- End of Topbar -->
        ';   
    }
    private function innerpageTitle($title)
    {
        return
        '
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">'.$title.'</h1>
            </div>
        ';
    }
    private function logoutModal()
    {
        return 
        '
        </div>
        <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">??</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="?logout=1">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }
    private function footer()
    {
        return
        '
        

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; KODER '.date("Y").'</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
        '.$this->logoutModal().$this->scripts();
        
    }

    private function getSidebar()
    {
        return $this->sidebar();
    }

    private function getTopBar($user, $img)
    {
        return $this->topBar($user, $img);
    }
    private function getInTitle($title)
    {
        return $this->innerpageTitle($title);
    }


    //========================== getters===============================//
    public function getHead($pageTitle, $user, $userImg, $innerTitle)
    {
        return 
            $this->head($pageTitle)// html head with css links
            .$this->getSidebar()//dashboard sibebar menu
            .$this->getTopBar($user, $userImg)  //top navbar bar menu
            .$this->getInTitle($innerTitle); // included (inner) page title
    }
    // footers
    public function getFooter()
    {
        return $this->footer();
    }

    public function getProfile($name, $id, $email, $img)
    {
        return $this->profile($name, $id, $email, $img);
    }
}