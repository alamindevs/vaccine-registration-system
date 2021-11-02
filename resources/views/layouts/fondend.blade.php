<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Metrica - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('contents/fondend') }}/assets/images/favicon.ico" />
        <link href="{{ asset('contents/fondend') }}/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet" type="text/css" />
        <!-- DataTables -->
        <link href="{{ asset('contents/fondend') }}/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('contents/fondend') }}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('contents/fondend') }}/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{ asset('contents/fondend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('contents/fondend') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('contents/fondend') }}/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('contents/fondend') }}/assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- Top Bar Start -->
        <x-fondend.topbar />
        <!-- Top Bar End -->
        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    
                    <x-backend.page-title titleGenerate='true'/>

                    <!--end row--><!-- end page title end breadcrumb -->
                    @yield('content')
                    <!--end row-->
                </div>
                <!-- container -->
            </div>
            <!-- end page content -->
            <footer class="footer text-center text-sm-left">
                <div class="boxed-footer">
                    &copy; 2019 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </div>
            </footer>
            <!--end footer-->
        </div>
        <!-- end page-wrapper --><!-- jQuery  -->
        <script src="{{ asset('contents/fondend') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('contents/fondend') }}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('contents/fondend') }}/assets/js/metisMenu.min.js"></script>
        <script src="{{ asset('contents/fondend') }}/assets/js/waves.min.js"></script>
        <script src="{{ asset('contents/fondend') }}/assets/js/jquery.slimscroll.min.js"></script>
        <script src="{{ asset('contents/fondend') }}/assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="{{ asset('contents/fondend') }}/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="{{ asset('contents/fondend') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('contents/fondend') }}/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="{{ asset('contents/fondend') }}/assets/pages/jquery.hospital_dashboard.init.js"></script>
        <!-- App js -->
        <script src="{{ asset('contents/fondend') }}/assets/js/app.js"></script>
    </body>
</html>
