<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>studybhai</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">

    <script src="https://cdn.tiny.cloud/1/3jyy1zmqqq1lgcadurv15vtpzdvttvplxnvgtpjqjicmj1h5/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
        </div>
        <div class="sidebar-brand-text mx-3">Profile</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">


        <a class="nav-link" href="{{route("home")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>

        <a class="nav-link" href="{{route("userprofile")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>

        <a class="nav-link" href="{{route("userprofile")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>About Me</span></a>

        <a class="nav-link" href="{{route("usercourse")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>My Courses</span>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


</ul>


@section('content')


@endsection

</body>
</html>
