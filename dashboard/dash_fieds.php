<?php
include_once ("../Backend/License/query.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dash_fieds.css">
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./ajax/field.js"></script>


</head>
<body id="page-top">
   <div id="wrapper">

    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <a class="sidebar-brand bg-gradient-primary d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-crow fa-2x me-3 pt-5 mb-xl-4"></i>
            </div>
            <div class="sidebar-brand-text mx-3">KENADMIN</div>
        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item active">
            <a class="nav-link" href="./dash_handle.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Interface
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Document Management</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">License Management:</h6>
                    <a class="collapse-item" href="../dashboard/dash_sec.php">Secretariate</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-users"></i>
                <span>Applicants</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">To be approved:</h6>
                    <a class="collapse-item" href="../dashboard/dash_participant.php">Waiting for Approval</a>
                    <a class="collapse-item"  href="../dashboard/dash_approved.php">Approved</a>
                    <a class="collapse-item" href="#">Not Approved</a>

                </div>
            </div>
        </li>
         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse"
                aria-expanded="true" aria-controls="collapse">
                <i class="fas fa-fw fa-list "></i>
                <span>Fields Data</span>
            </a>
            <div id="collapse" class="collapse" aria-labelledby="heading" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">List of Data:</h6>
                    <a class="collapse-item" href="../dashboard/dash_fieds.php">Fields</a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Addons
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Login Screens:</h6>
                    <a class="collapse-item" href="login.html">Login</a>
                    <a class="collapse-item" href="register.html">Register</a>
                    <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Other Pages:</h6>
                    <a class="collapse-item" href="404.html">404 Page</a>
                    <a class="collapse-item" href="blank.html">Blank Page</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">

        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-success topbar mb-4 static-top shadow">

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

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    khs.290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily ker ?? 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                        alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun ?? 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                        alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez ?? 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog ?? 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-white-600 small">Kenadmin</span>
                            <img class="img-profile rounded-circle"
                                src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

        <!-- Begin Page Content -->
         <div class="container">
            <h2>Land Survey Data</h2>
            <hr>

            <button class="btn btn-success">Data Entered</button>
            <p id="success"></p>
            <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Data</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">???</i> <span>Send for Manipulation</span></a>

                        <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">???</i> <span>Delete</span></a>
                    </div>
                </div>
            </div>
           <div class="row">
             <table class="table table-striped table-hover fixed-table-body">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>

                      
                         <td class="col-md-1">#</td>
                        <td class="col-md-1">Field Ms</td>
                        <td class="col-md-1">Constant</td>
                        <td class="col-md-1">Measured(Lm)</td>

                        <td class="col-md-1">Instru Used</td>
                        <td class="col-md-1">Mean Temp(??C)</td>
                        <td class="col-md-1">Tension (N)</td>

                        <td class="col-md-1">Angle(??)</td>
                        <td class="col-md-1">OPUS</td>
                        <td class="col-md-1">Converted</td>
                  
                        <td class="col-md-1">Anten-Height</td>
                        <td class="col-md-1">AntennaT</td>
                        <td class="col-md-1">Email</td>

                        <td class="col-md-1">Processor</td>
                        <td class="col-md-1">Solution </td>
                        <td class="col-md-1">Base.sta</td>

                         <td class="col-md-1">Base.staIn</td>
                        <td class="col-md-1">State</td>
                        <td class="col-md-1">GeoidModel</td>

                         <td class="col-md-1">Project ID</td>
                         <td class="col-md-1">sitename</td>
                          <td class="col-md-1">StationNo</td>
                       
                        <td class="col-md-1">Reading by</td>
                       <td class="col-md-1">Gauge by</td>
                        <td class="col-md-1">SurveyDate</td>
                                                <td class="col-md-1">SurveyTime</td>

                        <td class="col-md-1">Action</td>
                   
                    </tr>
                </thead>
              <tbody>


<?php
$result = mysqli_query($conn, "SELECT * FROM field_set");
$i      = 1;
while ($row = mysqli_fetch_array($result)) {
    ?>
                    <tr data-toggle="collapse" data-target="#demo"
                     class="accordion-toggle" id="<?php echo $row["id"];?>">

                        <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" class="user_checkbox" id="<?php echo $row["id"];?>">
                                    <label for="checkbox2"></label>
                                </span>
                        </td>

                        <td><?php echo $i;?></td>
                        
                           
                            <td><?php echo $row["line"];?></td>
                            <td><?php echo $row["constant"];?></td>
                            <td><?php echo $row["mearsured"];?></td>

                            <td><?php echo $row["instrument"];?></td>
                            <td><?php echo $row["mean"];?></td>
                            <td><?php echo $row["tension"];?></td>

                            <td><?php echo $row["angle"]?></td>
                            <td><?php echo $row["position"];?></td>
                            <td><?php echo $row["converted"];?></td>
                         

                          <td><?php echo $row["antenna_type"];?></td>
                          <td><?php echo $row["antenna_height"];?></td>
                            <td><?php echo $row["email"];?></td>   
                            
                            <td><?php echo $row["processor"];?></td>
                            <td><?php echo $row["solutio_type"];?></td>
                            <td><?php echo $row["base_height"];?></td>

                            <td><?php echo $row["base"]?></td>
                            <td><?php echo $row["zone"];?></td>
                            <td><?php echo $row["geoid"];?></td>
                               
                           
                            
                            
                            <td><?php echo $row["projectid"];?></td>
                            <td><?php echo $row["sitename"];?></td>
                            <td><?php echo $row["sitation"];?></td>

                            <td><?php echo $row["firstname"];?></td>
                            <td><?php echo $row["fname"]?></td>
                            <td><?php echo $row["expyear"]?></td> 
                            <td><?php echo $row["appt"]?></td>
                            
               

                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                <i class="material-icons update" data-toggle="tooltip"
                                id="<?php echo $row["id"];?>"
                                line="<?php echo $row["line"];?>"
                                constant="<?php echo $row["constant"];?>"
                                mearsured="<?php echo $row["mearsured"];?>"
                                mean="<?php echo $row["mean"];?>"
                                tension="<?php echo $row["tension"];?>"
                                angle="<?php echo $row["angle"];?>"
                                antenna_type="<?php echo $row["antenna_type"];?>"
                                antenna_height="<?php echo $row["antenna_height"];?>"
                                email="<?php echo $row["email"];?>"
                                processor="<?php echo $row["processor"];?>"
                                solutio_type="<?php echo $row["solutio_type"];?>"
                                base_height="<?php echo $row["base_height"];?>"
                                base="<?php echo $row["base"];?>"
                                zone="<?php echo $row["zone"];?>"
                                geoid="<?php echo $row["geoid"];?>"
                                projectid="<?php echo $row["projectid"];?>"
                                sitename="<?php echo $row["sitename"];?>"
                                sitation="<?php echo $row["sitation"];?>"
                                firstname="<?php echo $row["firstname"];?>"
                                fname="<?php echo $row["fname"];?>"
                                expyear="<?php echo $row["expyear"];?>"
                                appt="<?php echo $row["appt"];?>"
                                title="Edit">???</i>
                            </a>
                            <a href="#deleteEmployeeModal" class="delete" id="<?php echo $row["id"];?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                             title="Delete">???</i></a>
                        </td>
                    </tr>

                 <?php
                 $i++;
                    }
                    ?>


            </tbody>
            </table>
               
           </div>

        </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="../Backend/dashboard/dash_approv_reg.php">
                    <div class="modal-header">
                        <h4 class="modal-title">Send user for verification</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                    </div>
                    <div class="modal-body">
                        <div class="md-form">
                            <label data-error="wrong" data-success="right" for="form3">First Name</label>
                            <input type="text" id="form3" name="firstname" class="form-control validate">
                        </div>


                        <div class="md-form">
                            <label data-error="wrong" data-success="right" for="form3">Last Name</label>
                            <input type="text" id="form3" name="lastname" class="form-control validate">
                        </div>

                        <div class="md-form">
                            <label data-error="wrong" data-success="right" for="form3">Address</label>
                            <input type="text" id="form3" name="address" class="form-control validate">
                        </div>

                        <div class="md-form">
                            <label data-error="wrong" data-success="right" for="form3">Gender</label>
                            <input type="text" id="form3" name="gender" class="form-control validate">
                        </div>

                        <div class="md-form">
                            <label data-error="wrong" data-success="right" for="form3">Email</label>
                            <input type="email" id="form3" name="email" class="form-control validate">
                        </div>

                        <div class="md-form">
                            <label data-error="wrong" data-success="right" for="form3">Phone</label>
                            <input type="text" id="form3" name="phone" class="form-control validate">
                        </div>

                       <!--  <div class="md-form">
                            <label data-error="wrong" data-success="right" for="form3">Ref No</label>
                            <input type="text" id="form3" name="ref_no" class="form-control validate">
                        </div>  -->
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" value="1" name="type">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="submit" class="btn btn-success" id="btn-add">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="update_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id_u" name="id" class="form-control" required>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" id="fname_u" name="firstname" class="form-control" required>
                        </div>
                         <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" id="lname_u" name="lastname" class="form-control" required>
                        </div>
                         <div class="form-group">
                            <label>Address</label>
                            <input type="text" id="address_u" name="address" class="form-control" required>
                        </div>
                         <div class="form-group">
                            <label>Gender</label>
                            <input type="text" id="gender_u" name="gender" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email_u" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="phone" id="phone_u" name="phone" class="form-control" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                    <input type="hidden" value="2" name="type">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-info" id="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>

                    <div class="modal-header">
                        <h4 class="modal-title">Delete User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id_d" name="id" class="form-control">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="button" class="btn btn-danger" id="delete">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>




        <!-- End of Main Content -->

        <footer class="sticky-footer bg-gradient-dark">

            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span class="text-white" href ="#"> Musinakennedy@gmail.com Copyright &copy; MyWebsite 2022</span>
                </div>
            </div>
        </footer>

    </div>

</body>
</html>
