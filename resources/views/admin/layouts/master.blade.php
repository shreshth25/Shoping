<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping</title>
    @include('admin.common.style')
</head>

<body class="hold-transition sidebar-mini">
    <div id="preloader">
        <div id="status"></div>
    </div>
    <div class="wrapper">
        @include('admin.common.navbar')
        @include('admin.common.sidebar')
        <div class="content-wrapper">
            @include('admin.common.header')  
            <section class="content">
             @yield('content')   
            </section>
            
            </div>
        
        @include('admin.common.footer')
    </div>

    @include('admin.common.scripts')
    @yield('script')
</body>

</html>
