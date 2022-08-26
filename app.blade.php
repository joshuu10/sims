        <!DOCTYPE html>
        <html lang="en">
            <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>SIMS| Dashboard</title>

                <link rel="stylesheet" href="/css/all.min.css">

                <link rel="stylesheet"css/tempusdominus-bootstrap-4.min.css">
                <!-- iCheck -->
                <link rel="stylesheet" href="css/icheck-bootstrap.min.css">
                <!-- JQVMap -->
                <link rel="stylesheet" href="css/jqvmap.min.css">
                <!-- Theme style -->
                <link rel="stylesheet" href="css/adminlte.min.css">
                <!-- overlayScrollbars -->
                <link rel="stylesheet" href="css/OverlayScrollbars.min.css">
                <!-- Daterange picker -->
                <link rel="stylesheet" href="css/daterangepicker.css">
                <!-- summernote -->
                <link rel="stylesheet" href="css/summernote-bs4.min.css">
            </head>
        <body class="hold-transition sidebar-mini layout-fixed">
            <div class="wrapper">



            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/home" class="nav-link">Home</a>
                </li>
               <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="./"></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="">normal</a>
                </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-1" alt="User Image">
                    </div>
                    <div class="info">
                    <a href="#" class="d-block"> </a>
                    </div>
                </div>

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                            </button>
                        </div>
                        </div>
                    </form>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                    </a>
                </li>
                
                     <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                <img src="https://sims.mustnet.ac.tz/images/logo.jpg" alt="Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
                <span class="brand-text font-weight-light">SIMS</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
 


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                        
                        <p>
                            Dashboard
                            
                        </p>
                        </a>
                        
                    </li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                        
                        <p>
                        <i class="fa fa-registered"></i> Payments
                           
                        </p>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/createInvo" class="nav-link">
                            
                            <p>Create invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            
                            <p>Invoice List</p>
                            </a>
                        </li>
                        </ul>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        
                        <p>
                            Insurance (NHIF)
                    
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                            
                            <p>Card aApplication</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">

                        <p>
                            Course Registration
                          
                        </p>
                        </a>
                   </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                      
                        <p>
                           Examination Results
                        
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/general.html" class="nav-link">
                            
                            <p>General</p>
                            </a>
                        </li>
                       </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/profile" class="nav-link">
                        <p>
                            My full profile
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/messages" class="nav-link">
                       
                        <p>
                           Messages
                           
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/news">
                       
                        <p>
                           News
                            
                        </p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/security">
                       
                        <p>
                           Security
                            
                        </p>
                        </a>
                    </li>
 
  
                </ul>
                        </li>

 
                <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>


            <!--rightnavbar-->
            
         



            <!-- Content Wrapper. Contains page content -->
        



            <!-- /.content-wrapper -->



            @section('body')
            @show 
            
            @section('notifications')
                @show    

            @section('payments')
                @show        
            
            @section('messages')
            @show    

            <right> @section('news')
                @show
            </right> 















            <footer class="main-footer">
                
                <div class="float-right d-none d-sm-inline-block">
               
                </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
            </div>
            <!-- ./wrapper -->

            <!-- jQuery -->
            <script src="js/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="js/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
            $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="js/bootstrap.bundle.min.js"></script>
            
            <script src="js/Chart.min.js"></script>
            <!-- Sparkline -->
            <script src="js/sparkline.js"></script>
            
            <script src="js/jquery.vmap.min.js"></script>
            <script src="js/jquery.vmap.usa.js"></script>
        
            <script src="js/jquery.knob.min.js"></script>
          
            <script src="js/moment.min.js"></script>
            <script src="js/daterangepicker.js"></script>
      
            <script src="js/tempusdominus-bootstrap-4.min.js"></script>

            <script src="js/summernote-bs4.min.js"></script>
 
            <script src="js/jquery.overlayScrollbars.min.js"></script>

            <script src="js/adminlte.js"></script>
 
            <script src="js/demo.js"></script>

            <script src="js/dashboard.js"></script>
        </body>

        </html>
