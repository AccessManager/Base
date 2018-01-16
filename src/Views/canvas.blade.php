<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Access Manager - The Hotspot Management System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
{!! HTML::style('assets/css/bootstrap-3.3.7.min.css') !!}
{!! HTML::style('assets/css/font-awesome-4.7.0.min.css') !!}
{!! HTML::style('assets/css/AdminLT.min.css') !!}
{!! HTML::style('assets/css/_all-skins.min.css') !!}
{!! HTML::style('assets/css/select-picker.css') !!}
@stack('css')
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    <![endif]-->
</head>
<body class="hold-transition skin-purple-light sidebar-mini" onload="startTime()">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{url('/')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><strong>AM</strong></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><strong>Access Manager</strong></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a>
                            <span id="navbar-clock"></span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{route('logout')}}" onclick="return confirm('Are you sure, you want to logout?')">
                            <i class="fa fa-power-off"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <i class="fa fa-3x fa-user"></i>
                    {{--<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}
                </div>
                <div class="pull-left info">
                    <p>
                        {{--{{auth()->user()->name}}--}}
                    </p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Accounts</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{!! route('accounts.index') !!}">
                                <i class="fa fa-circle-o"></i> List Accounts</a>
                        </li>
                        <li>
                            <a href="{!! route('accounts.add') !!}">
                                <i class="fa fa-circle-o"></i> Add Account</a>
                        </li>
                    </ul>
                </li>
                <li>
                <li class="treeview">
                    <a href="">
                        <i class="fa fa-user"></i>
                        <span>Prepaid</span>
                        <i class="fa fa-angle-left pull-right"> </i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{route('vouchers.index')}}">
                                <i class="fa fa-circle-o"></i>
                                <span>Recharge Vouchers</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('vouchers.generate')}}">
                                <i class="fa fa-circle-o"></i>
                                <span>Generate Vouchers</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('prepaid.recharge')}}">
                                <i class="fa fa-circle-o"></i>
                                <span>Recharge Account</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-shopping-basket"></i> <span>Services</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="#"><i class="fa fa-chevron-circle-right"></i> <span>Service Plans</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="{{route('plans.index')}}">
                                        <i class="fa fa-circle-o"></i>
                                        List Plans
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('plans.add')}}">
                                        <i class="fa fa-circle-o"></i>
                                        New Plan
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-chevron-circle-right"></i> <span>BW Policies</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="{{route('policies.index')}}">
                                        <i class="fa fa-circle-o"></i>
                                        List Policies
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('policies.add')}}">
                                        <i class="fa fa-circle-o"></i>
                                        New Policy
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="">
                        <i class="fa fa-th-large"></i>
                        <span>Zones</span>
                        <i class="fa fa-angle-left pull-right"> </i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{route("zones.index")}}">
                                <i class="fa fa-circle-o"></i>
                                <span>List Zones</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route("zones.add")}}">
                                <i class="fa fa-circle-o"></i>
                                <span>Add Zone</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-connectdevelop"></i> <span>Network</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="#"><i class="fa fa-chevron-circle-right"></i> <span>Routers</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="{{route("routers.index")}}">
                                        <i class="fa fa-circle-o"></i> List Routers
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route("routers.add")}}">
                                        <i class="fa fa-circle-o"></i> Add Router
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-chevron-circle-right"></i> <span>Subnet</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="{{route("subnet.index")}}">
                                        <i class="fa fa-circle-o"></i> List Subnet
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route("subnet.add")}}">
                                        <i class="fa fa-circle-o"></i> Add Subnet
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="">
                        <i class="fa fa-info"></i>
                        <span>System</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{route('system.change-password')}}">
                                <i class="fa fa-circle-o"></i>
                                <span>Change Password</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
                <li>
                    <a href="">
                        <i class="fa fa-send-o"></i>
                        <span>Provide Feedback</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('header')
                <span class="pull-right">
                    @yield('canvas-header-right')
            </span>
            </h1>
            <ol class="breadcrumb">
                @yield('breadcrumb')
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            @yield('main-content')

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer class="main-footer">
        <p class="text-muted">
            <strong>Access</strong>Manager &copy; All Rights Reserved.
        </p>
    </footer>
</div><!-- ./wrapper -->

<!-- jQuery 3.2.1 -->
{!! HTML::script('assets/js/jQuery-3.2.1.min.js') !!}
<!-- Bootstrap 3.3.7 -->
{!! HTML::script('assets/js/bootstrap-3.3.7.min.js') !!}
<!-- AdminLTE App -->
{!! HTML::script('assets/js/app.min.js') !!}
<!-- script to show clock in the navbar -->
{!! HTML::script('assets/js/navbar-clock.js') !!}
{!! HTML::script('assets/js/select-picker.js') !!}
<script>
    $('select').selectpicker();
</script>
@stack('javascripts')
</body>
</html>
