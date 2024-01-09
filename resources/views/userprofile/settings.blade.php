<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>studybhai</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <title>studybhai - Profile Settings</title>
</head>
<body>
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15"></div>
            <div class="sidebar-brand-text mx-3">Profile</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('userprofile') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('usercourse') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>My Courses</span>
            </a>
        </li>
        <!-- Add more navigation links as needed -->
        <li class="nav-item">
        <a class="nav-link" href="{{route("editprofile")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Edit Profile</span>
        </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('settings') }}">
                <i class="fas fa-fw fa-cog"></i>
                <span>Settings</span>
            </a>
        </li>
        <!-- Add more navigation links as needed -->
        <hr class="sidebar-divider">
    </ul>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <hr>
        <div id="content">
            <div class="container-fluid">
                <!-- Page content for settings -->
                <div class="profile-container">
                    <!-- Settings content goes here -->

                    <h4>Password Settings</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-9 personal-info">
                            <!-- Your existing settings form code -->
                            <form class="form-horizontal" role="form" action="{{ route('update.password') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <input class="form-control" type="password" name="old_password" placeholder="old password" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <input class="form-control" name="password" type="password" placeholder="new password" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <input class="form-control" name="password_confirmation" type="password" placeholder="confirm password" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts and additional HTML if needed -->

</body>
</html>
