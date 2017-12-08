<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/morris/morris.css') }}">
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/core.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/components.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/pages.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/menu.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/responsive.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('admin/js/modernizr.min.js') }}"></script>
</head>
<body class="fixed-left">
<div id="wrapper">
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo"><span>Admin<span>to</span></span><i class="zmdi zmdi-layers"></i></a>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Page title -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>
                    <li>
                        <h4 class="page-title">Dashboard</h4>
                    </li>
                </ul>

                <!-- Right(Notification and Searchbox -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <!-- Notification -->
                        <div class="notification-box">
                            <ul class="list-inline m-b-0">
                                <li>
                                    <a href="javascript:void(0);" class="right-bar-toggle">
                                        <i class="zmdi zmdi-notifications-none"></i>
                                    </a>
                                    <div class="noti-dot">
                                        <span class="dot"></span>
                                        <span class="pulse"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Notification bar -->
                    </li>
                    <li class="hidden-xs">
                        <form role="search" class="app-search">
                            <input type="text" placeholder="Search..."
                                   class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!-- User -->
            <div class="user-box">
                <div class="user-img">
                    <img src="admin/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme"
                         class="img-circle img-thumbnail img-responsive">
                    <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                </div>
                <h5><a href="#">Mat Helme</a></h5>
                <ul class="list-inline">
                    <li>
                        <a href="#">
                            <i class="zmdi zmdi-settings"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-custom">
                            <i class="zmdi zmdi-power"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End User -->

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                    <li class="text-muted menu-title">Navigation</li>

                    <li>
                        <a href="index.html" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="/import" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Import Contract </span>
                        </a>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i
                                    class="zmdi zmdi-collection-text"></i><span
                                    class="label label-warning pull-right">7</span><span> Forms </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="form-elements.html">General Elements</a></li>
                            <li><a href="form-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>

    </div>
    @yield('content')
</div>

<!-- Scripts -->
<script>
    var resizefunc = [];
</script>
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/detect.js') }}"></script>
<script src="{{ asset('admin/js/fastclick.js') }}"></script>
<script src="{{ asset('admin/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('admin/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('admin/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.js') }}"></script>

<!-- App js -->
<script src="{{ asset('admin/js/jquery.core.js') }}"></script>
<script src="{{ asset('admin/js/jquery.app.js') }}"></script>
<script src="{{ asset('admin/plugins/fileuploads/js/dropify.min.js')}}"></script>
<script type="text/javascript">
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong appended.'
        },
        error: {
            'fileSize': 'The file size is too big (1M max).'
        }
    });
</script>
</body>
</html>
