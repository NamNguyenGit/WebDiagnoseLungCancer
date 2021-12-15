<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="/admin/plugins/toastr/toastr.min.css">
    @yield("css")

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="" class="brand-link">
                <img src="/manager/patients/dist/img/adminlg.png" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/manager/patients/dist/img/adminavata.png" class="img-circle elevation-2">
                    </div>
                    <div class="text-white text-center pt-1 ml-3">
                        Hi Admin
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-procedures"></i>
                                <p>
                                    Patients
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('patients.index')}}" class="nav-link">
                                        <i class="fas fa-id-card nav-icon"></i>
                                        <p>Profiles</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fas fa-blog nav-icon"></i>
                                <p>
                                    Blogs
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('blogs.index')}}" class="nav-link">
                                        <i class="far fa-list-alt nav-icon"></i>
                                        <p>Lists</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('blogs.create')}}" class="nav-link">
                                        <i class="fas fa-cog nav-icon"></i>
                                        <p>Add Blogs</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fas fa-exclamation-triangle nav-icon"></i>
                                <p>
                                    Risk Factors
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('riskfactors.index')}}" class="nav-link">
                                        <i class="far fa-list-alt nav-icon"></i>
                                        <p>Lists</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('riskfactors.create')}}" class="nav-link">
                                        <i class="fas fa-cog nav-icon"></i>
                                        <p>Add Risk Factors</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                </nav>
            </div>
        </aside>


        @yield("content")


        <footer class="main-footer">
            <strong>WebDiagnoseLungCancer</strong>

            <div class="float-right d-none d-sm-inline-block">
                <b>GroupProject</b> 2021
            </div>
        </footer>


        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>


    <script src="/admin/plugins/jquery/jquery.min.js"></script>

    <script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/admin/plugins/chart.js/Chart.min.js"></script>

    <script src="/admin/plugins/sparklines/sparkline.js"></script>

    <script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>

    <script src="/admin/plugins/moment/moment.min.js"></script>
    <script src="/admin/plugins/toastr/toastr.min.js"></script>
    <script src="/admin/plugins/moment/moment.min.js"></script>
    <script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>

    <script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="/admin/dist/js/adminlte.js"></script>

    <script src="/admin/dist/js/demo.js"></script>

    <script src="/admin/dist/js/pages/dashboard.js"></script>
    <script>
        toastr.options = {
            "debug": false,
            "positionClass": "toast-top-center",
            "fadeIn": 300,
            "fadeOut": 1000,
            "timeOut": 3000,
            "extendedTimeOut": 1000
        }
    </script>

    @if(Session::has('success'))
    <script>
        toastr.success("{{Session::get('success')}}", 'Success');
    </script>
    @endif

    @if(Session::has('fail'))
    <script>
        toastr.error("{{Session::get('fail')}}", 'Fail');
    </script>
    @endif

    @yield("js")

</body>

</html>
