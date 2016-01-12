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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="../../index.html" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        MyHome Page
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <!-- Tasks: style can be found in dropdown.less -->
                </li>
                <!-- User Account: style can be found in dropdown.less -->

            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->

            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">

                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
<div class="well well-sm text-center">
    <h1>Please Enter Your Details</h1>
</div>
<div class="container">
    <form method="POST" action="/auth/register">
        {!! csrf_field() !!}

        <div>
            <label>Name:  <input type="text"size= 80 style="margin-left: 80px" name="name" value="{{ old('name') }}"></label><br>
            <p style="color: red">{{$errors->first('name')}}</p>
            {{--Name--}}
            {{--<input type="text" name="name" value="{{ old('name') }}">--}}
        </div>

        <div>
            <label>Email:  <input type="text"size= 80 style="margin-left: 82px" name="email" value="{{ old('email') }}"></label><br>
            <p style="color: red">{{$errors->first('email')}}</p>
            {{--Email--}}
            {{--<input type="email" name="email" value="{{ old('email') }}">--}}
        </div>

        <div>
            <label> Password: <input type="password" size= 80 style="margin-left: 57px" name=" password"></label><br>
            <p style="color: red">{{$errors->first('password')}}</p>
            {{--Password--}}
            {{--<input type="password" name="password">--}}
        </div>

        <div>
            <label> Confirm Password: &nbsp  <input type="password" size= 80  name="password_confirmation"></label><br>
            <p style="color: red">{{$errors->first('password')}}</p>
            {{--Confirm Password--}}
            {{--<input type="password" name="password_confirmation">--}}
        </div>

        <div>
            <button  class="btn btn-primary"  type="submit">Register</button>
            <a href="<?php echo '/auth/login'?>" class="btn btn-primary" style="margin-left: 100px">Back to Login</a>
        </div>
    </form>
</div>
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>


</body>
</html>