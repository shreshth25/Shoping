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
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="container-center">
                @include('admin.common.message')
            <div class="login-area">
 
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                                
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>        <!-- Content Wrapper -->
                                <input type="email" placeholder="example@gmail.com" title="Please enter you username"  name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" name="password" id="password" class="form-control" required>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-add">Login</button>
                                <a class="btn btn-warning" href="{{route('register')}}">Register</a>
                            </div>
                        </form>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <script src="{{asset('adminFiles/assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminFiles/assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    </body>
</html>

