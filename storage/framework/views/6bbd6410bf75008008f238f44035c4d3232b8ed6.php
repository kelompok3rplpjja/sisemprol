<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('img/logo.svg')); ?>"/>
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/logo.svg')); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title><?php echo e(config('app.name', '')); ?></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet"/>


    <!--  Material Dashboard CSS    -->
    <link href="<?php echo e(asset('css/material-dashboard.css?v=1.3.0')); ?>" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo e(asset('css/demo.css')); ?>" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


    <style>
        .container {
            width: 100%;
        }

    </style>

    <?php echo $__env->yieldPushContent('css'); ?>



</head>


<body>
<div class="wrapper">

    <div class="sidebar" data-active-color="rose" data-background-color="black">
        <!--
            Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
            Tip 2: you can also add an image using data-image tag
            Tip 3: you can change the color of the sidebar with data-background-color="white | black"
        -->

        <div class="logo">
            <a href="" class="simple-text logo-mini">
                <img src="<?php echo e(asset('img/logo.svg')); ?>">
            </a>

            <a href="" class="simple-text logo-normal">
                SISEMPROL POLINEMA
            </a>
        </div>

        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <i class="fas fa-user"
                       style="margin: 4px; font-size: 32px; color: white"
                    ></i>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                         <?php echo auth('web')->user()->name; ?>

                        <b class="caret"></b>
                    </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="<?php echo e(route('user.show',auth()->user()->id)); ?>">
                                    
                                    <i class="fa fa-user"></i>
                                    <span class="sidebar-normal"> My Profile </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('user.edit',auth()->user()->id)); ?>">
                                    <i class="fa fa-edit"></i>
                                    <span class="sidebar-normal"> Edit Profile </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span class="sidebar-normal"> Logout </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">

                <li class="<?php echo e((Request::segment(1) == '' || Request::segment(1) == 'home') ? 'active' : null); ?>">
                    <a href="<?php echo e(route('home')); ?>">
                        <i class="material-icons">dashboard</i>
                        <p> Dashboard </p>
                    </a>
                </li>

                <li class="<?php echo e(Request::segment(1) == 'category' ? 'active' : null); ?>">
                    <a href="<?php echo e(route('category.index')); ?>">
                        <i class="material-icons">category</i>
                        <p> Data Gelombang
                        </p>
                    </a>
                </li>

                <li class="<?php echo e(Request::segment(1) == 'jadwal' ? 'active' : null); ?>">
                    <a href="<?php echo e(route('jadwal.index')); ?>">
                        <i class="fa fa-newspaper"></i>
                        <p> Data Jadwal
                        </p>
                    </a>
                </li>

                <li class="<?php echo e(Request::segment(1) == 'notification' ? 'active' : null); ?>">
                    <a href="<?php echo e(route('notification.index')); ?>">
                        <i class="material-icons">notifications</i>
                        <p> Manage Notification </p>
                    </a>
                </li>

                <li class="<?php echo e(Request::segment(1) == 'reader' ? 'active' : null); ?>">
                    <a href="<?php echo e(route('reader.index')); ?>">
                        <i class="fa fa-users"></i>
                        <p> Data Mahasiswa </p>
                    </a>
                </li>

                <li class="<?php echo e(Request::segment(1) == 'user' ? 'active' : null); ?>">
                    <a href="<?php echo e(route('user.index')); ?>">
                        <i class="fa fa-users-cog"></i>
                        <p> Data Admin </p>
                    </a>
                </li>

                <li class="<?php echo e(Request::segment(1) == 'settings' ? 'active' : null); ?>">
                    <a href="<?php echo e(route('settings.index')); ?>">
                        <i class="material-icons">settings</i>
                        <p> Settings </p>
                    </a>
                </li>

                <li>
                    <a type="submit" onclick="document.getElementById('navbar_logout').submit();">
                        <i class="material-icons" style="font-size: 24px ">power_settings_new</i>
                        <p style="color: #FFFFFF; font-size: 14px;margin: 0;height: auto; white-space: nowrap;">
                            Logout </p>
                    </a>
                    <form id="navbar_logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none">
                        <?php echo csrf_field(); ?>


                    </form>
                </li>

            </ul>
        </div>
    </div>


    <div class="main-panel">

        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                        <i class="material-icons visible-on-sidebar-mini">view_list</i>
                    </button>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"> Dashboard </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">settings</i>
                                <p class="hidden-lg hidden-md">
                                    Settings
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(route('user.show',auth()->user()->id)); ?>"><i class="material-icons" style="margin-right: 16px">account_circle</i>Profile</a>
                                </li>
                                <li>
                                    <a type="submit" onclick="document.getElementById('menu_logout').submit();"><i
                                                class="material-icons"
                                                style="margin-right: 16px">power_settings_new</i>
                                        Logout</a>
                                    <form id="menu_logout" action="<?php echo e(route('logout')); ?>" method="post"
                                          style="display: none;">
                                        <?php echo csrf_field(); ?>

                                    </form>
                                </li>

                            </ul>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>


                </div>
            </div>
        </nav>


        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    <a href="http://sadmansarar.github.io"> Sadman Sarar</a>, made with love for a better webf
                </p>
            </div>
        </footer>


    </div>
</div>
</body>

<!--   Core JS Files   -->

<script src="<?php echo e(asset('js/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/material.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/perfect-scrollbar.jquery.min.js')); ?>" type="text/javascript"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
<!-- Library for adding dinamically elements -->
<script src="<?php echo e(asset('js/arrive.min.js" type="text/javascript')); ?>"></script>

<!-- Forms Validations Plugin -->
<script src="<?php echo e(asset('js/jquery.validate.min.js')); ?>"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo e(asset('js/moment.min.js')); ?>"></script>

<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="<?php echo e(asset('js/chartist.min.js')); ?>"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?php echo e(asset('js/jquery.bootstrap-wizard.js')); ?>"></script>

<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="<?php echo e(asset('js/bootstrap-notify.js')); ?>"></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="<?php echo e(asset('js/bootstrap-datetimepicker.js')); ?>"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="<?php echo e(asset('js/jquery-jvectormap.js')); ?>"></script>

<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="<?php echo e(asset('js/nouislider.min.js')); ?>"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?php echo e(asset('js/jquery.select-bootstrap.js')); ?>"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="<?php echo e(asset('js/jquery.datatables.js')); ?>"></script>

<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="<?php echo e(asset('js/sweetalert2.js')); ?>"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo e(asset('js/jasny-bootstrap.min.js')); ?>"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="<?php echo e(asset('js/fullcalendar.min.js')); ?>"></script>

<!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="<?php echo e(asset('js/jquery.tagsinput.js')); ?>"></script>

<!-- Material Dashboard javascript methods -->
<script src="<?php echo e(asset('js/material-dashboard.js?v=1.3.0')); ?>"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo e(asset('js/demo')); ?>.js"></script>


<script type="text/javascript">
    $(document).ready(function () {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>

<?php echo $__env->yieldPushContent('js'); ?>


</html>
