<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Violation Types</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/dash')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i><i class="fa-solid fa-face-sunglasses"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/dash')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Fines</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Fines:</h6>
                        <a class="collapse-item active" href="{{url('/nfine')}}">New Fines</a>
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Master</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Master:</h6>
                        <a class="collapse-item" href="{{url('/vtypes')}}">Violation Types</a>
                        <a class="collapse-item" href="{{url('/cities')}}">Police Stations</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Verification
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>SignUp Requests</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom SignUp Requests:</h6>
                        <a class="collapse-item" href="{{url('/nsr')}}">New Requests</a>
                        
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


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

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
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
                                        <div class="small text-gray-500">December 12, 2023</div>
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
                                        <div class="small text-gray-500">December 7, 2023</div>
                                        <span class="font-weight-bold"> 05 new signup requests fo this week.</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2023</div>
                                        <span class="font-weight-bold"> Overdue Alert: 06 overude fine payments for this month.</span>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nipuni</span>
                                <img class="img-profile rounded-circle" src="img/profile.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{url('/profile')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </form>

                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Violation Types</h1>


                    <div class="card shadow mb-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">

                            <a href="{{url('/addnewvln')}}" class="h3 mb-0 d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Violation Type</th>
                                            <th>Fine Amount (RS)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach($violationtypes as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->violation_name }}</td>
                                            <td>{{ $item->fine_amount }}</td>


                                            <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{ route('editvln', $item->id) }}" title="Edit "><button class="btn btn-success btn-sm btn-icon-text mr-3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>


                                                <form action="{{ route('vtypesdelete', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm btn-icon-text">Delete </button>
                                                </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <!-- <tbody>
                                        <tr>
                                            <td>001</td>
                                            <td>Identification Plates</td>
                                            <td>1000.00</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('/editvln')}}" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>Contravening speed Limits </td>
                                            <td>3000.00</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="{{url('/editvln')}}" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>003</td>
                                            <td>Halting or Parking</td>
                                            <td>1000.00</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="{{url('/editvln')}}" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>004</td>
                                            <td>Not wearing protective helmets</td>
                                            <td>1000.00</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="{{url('/editvln')}}" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>005</td>
                                            <td>Disobeying Road Rules</td>
                                            <td>2000.00</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="{{url('/editvln')}}" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>006</td>
                                            <td>Compliance with Traffic Signals</td>
                                            <td>1000.00</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="{{url('/editvln')}}" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>007</td>
                                            <td>Excessive use of Noise</td>
                                            <td>1000.00</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="{{url('/editvln')}}" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>008</td>
                                            <td>Not carrying D.L</td>
                                            <td>1000.00</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="{{url('/editvln')}}" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>009</td>
                                            <td>Sound or Lights Warnings</td>
                                            <td>1000.00</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="{{url('/editvln')}}" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>010</td>
                                            <td>Sound or Lights Warnings</td>
                                            <td>1000.00</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="{{url('/editvln')}}" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>011</td>
                                            <td>Non-use of seat belts</td>
                                            <td>1000.00</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="{{url('/editvln')}}" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                        Edit
                                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                        Delete
                                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody> -->
                                </table>
                            </div>
                        </div>


                    </div>


                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; 2024.All rights reserved</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

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
                            <span aria-hidden="true">×</span>
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
    </div>
</body>

</html>
