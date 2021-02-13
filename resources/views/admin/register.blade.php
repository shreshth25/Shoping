<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRM AdminFiles Panel</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{asset('adminFiles/assets/dist/img/ico/favicon.png')}}" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="{{asset('adminFiles/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="('adminFiles/assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="{{asset('adminFiles/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="{{asset('adminFiles/assets/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="('adminFiles/assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <div class="login-wrapper">

            <div class="container-center lg">
                @include('admin.common.message')
             <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
 
                            </div>
                            <div class="header-title">
                                <h3>Register</h3>
                                <small><strong>Please enter your data to register.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Username</label>
                                    <input type="text" id="username" class="form-control" name="name" required>
                                </div><div></div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password"  id="password" class="form-control" name="password" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-warning">Register</button>
                                <a class="btn btn-add" href="{{route('login')}}">Login</a>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="{{asset('adminFiles/assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="{{asset('adminFiles/assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    </body>

<!-- Mirrored from thememinister.com/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:09:03 GMT -->
</html>

