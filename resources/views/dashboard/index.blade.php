<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
</head>
<body id="page-top">

<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15"></div>
            <div class="sidebar-brand-text mx-3">Profile</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="{{route("home")}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Home</span>
            </a>
            <a class="nav-link" href="{{route("dashboard")}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
            <a class="nav-link" href="{{route("usercourse")}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>My Courses</span>
            </a>
            <a class="nav-link" href="{{route("editprofile")}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Edit Profile</span>
            </a>
            <a class="nav-link" href="{{ route('settings') }}">
                <i class="fas fa-fw fa-cog"></i>
                <span>Settings</span>
            </a>
        </li>
        <hr class="sidebar-divider">
    </ul>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <div class="container-fluid">
                <h1>Dashboard</h1>

                <h2>Courses</h2>
                <ul>
                    @foreach($courses as $course)
                        <li>
                            Course Name: {{ $course->name }}
                            Instructor: {{ $course->instructor }}
                            Completion: {{ $course->completion_percentage }}%
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/scripts/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/scripts/dataTables.rowReorder.min.js') }}"></script>
<script src="{{ asset('assets/scripts/dataTables.responsive.min.js') }}"></script>
</body>
</html>
