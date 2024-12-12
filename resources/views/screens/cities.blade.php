<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Police Stations</title>

    <!-- Custom fonts for cities page-->
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
                <div class="mx-3 sidebar-brand-text">Admin </div>
            </a>

            <!-- Divide by line -->
            <hr class="my-0 sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/dash')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divide by line -->
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
                    <div class="py-2 bg-white rounded collapse-inner">
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
                    <div class="py-2 bg-white rounded collapse-inner">
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
                    <div class="py-2 bg-white rounded collapse-inner">
                        <h6 class="collapse-header">Custom SignUp Requests:</h6>
                        <a class="collapse-item" href="{{url('/nsr')}}">New Requests</a>

                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>



            <!-- Divide by line -->
            <hr class="sidebar-divider d-none d-md-block">


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="mr-3 btn btn-link d-md-none rounded-circle">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="my-2 mr-auto d-none d-sm-inline-block form-inline ml-md-3 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="border-0 form-control bg-light small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="ml-auto navbar-nav">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="p-3 shadow dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="mr-auto form-inline w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="border-0 form-control bg-light small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 text-gray-600 d-none d-lg-inline small">Nipuni</span>
                                <img class="img-profile rounded-circle" src="img/profile.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{url('/profile')}}">
                                    <i class="mr-2 text-gray-400 fas fa-user fa-sm fa-fw"></i>
                                    Profile
                                </a>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <i class="mr-2 text-gray-400 fas fa-sign-out-alt fa-sm fa-fw"></i>
                                        Logout
                                    </a>
                                </form>

                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content in this page -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="mb-4 text-gray-800 h3">Police Stations</h1>


                    <div class="mb-4 shadow card">
                        <div class="mb-4 d-sm-flex align-items-center justify-content-between">

                            <a href="{{url('/addnewpls')}}" class="mb-0 shadow-sm h3 d-none d-sm-inline-block btn btn-sm btn-primary"><i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Police Division</th>
                                            <th>Police Station</th>
                                            <th>Court</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach($policestations as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->police_division }}</td>
                                            <td>{{ $item->police_station }}</td>
                                            <td>{{ $item->court }}</td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{ route('editpls', $item->id) }}" title="Edit "><button class="mr-3 btn btn-success btn-sm btn-icon-text"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>


                                                    <form action="{{ route('citiesdelete', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm btn-icon-text">Delete </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                    <!--  <tbody>
                                        <tr>
                                            <td>001</td>
                                            <td>Colombo Central Division</td>
                                            <td>Maradana</td>
                                            <td>Maradana</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('/editpls')}}" class="mr-3 btn btn-success btn-sm btn-icon-text">
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
                                            <td>Colombo North Division </td>
                                            <td>Dematagoda</td>
                                            <td>Dematagoda</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('/editpls')}}" class="mr-3 btn btn-success btn-sm btn-icon-text">
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
                                            <td>Colombo South Division </td>
                                            <td>Borella</td>
                                            <td>Borella</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('/editpls')}}" class="mr-3 btn btn-success btn-sm btn-icon-text">
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
                                            <td>Kelaniya Division</td>
                                            <td>Wattala</td>
                                            <td>Wattala</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('/editpls')}}" class="mr-3 btn btn-success btn-sm btn-icon-text">
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
                                            <td>Nugegoda Division</td>
                                            <td>Malabe</td>
                                            <td>Malabe</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('/editpls')}}" class="mr-3 btn btn-success btn-sm btn-icon-text">
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
                                            <td>Mount Lavinia Division</td>
                                            <td>Dehiwala</td>
                                            <td>Dehiwala</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('/editpls')}}" class="mr-3 btn btn-success btn-sm btn-icon-text">
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
                                            <td>Nugegoda Division</td>
                                            <td>Kaduwela</td>
                                            <td>Kaduwela</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{url('/editpls')}}" class="mr-3 btn btn-success btn-sm btn-icon-text">
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
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="my-auto text-center copyright">
                            <span>Copyright &copy; 2024.All rights reserved</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper in this page -->

        <!-- Scroll to Top Button-->
        <a class="rounded scroll-to-top" href="#page-top">
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

</body>

</html>