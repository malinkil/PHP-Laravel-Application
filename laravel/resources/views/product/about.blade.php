<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CRUD PAGE</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{asset('assets/css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset('assets/css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/stylelogin.css')}}" rel="stylesheet" type="text/css" />

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        About Page
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>Logoff<i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">

                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="<?php echo 'auth/logout/'?>" class="btn btn-primary">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left info">
                    <p>&nbsp Hello</p>
                    <a href="<?php echo '/productindex'?>" class="btn btn-primary"><b>Back to Products</b></a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">

                </div>
            </form>
            <ul class="sidebar-menu">

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="login">
            <h2 align="center">
              About the Project
            </h2>
            <h1>
                Created application based on Laravel Framework. The application consists of CRUD operation and basic user authentification, registration.
            </h1>
            <h3>
                <b><p>Features Of Application :</p></b>
                <p><b>1.</b> On opening the application a user has to first register. Once registered he will be redirected to the index page.</p>
                <p><b>2.</b> The index page consists of Basic CRUD operation where a user can Add, Read, Update and Delete the product.</p>
                <p><b>3.</b> I have also introduced pagination for the index page so that if the data is beyond a certain limit the rest of the data can
                   be forwarded to next page.</p>
                <p><b>4.</b> A user can add product. He can view individual product by clicking the show button .</p>
                <p><b>5.</b> In order to update the product the user has to click on the edit button and he will be redirected to a new page where he can update the product.</p>
                <p><b>6.</b> If a user wants to delete a product he will be prompted before deletion of the product whether he really wants to delete the product.</p>
                <p><b>7.</b>In order to see the about page the user has to click on the Home Page link provided on the top left hand corner and he will be redirected
                   on the index page.</p>
                <p><b>8.</b>For signing out the application I have introduced a dropdown button on the top Right hand corner .</p>
            </h3>
                </div>
        </section>

        <!-- Main content -->
        <section class="content">

            @yield('content')
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>


</body>
</html>