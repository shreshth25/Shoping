<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('customer.common.style')

</head>

<body>
    @yield('content')

@include('customer.common.scripts')
    @yield('scripts')
</body>

</html>
