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
</head>
<body>

<div id="wrapper">
    <!-- Sidebar -->
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
            <a class="nav-link" href="{{route("userprofile")}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>

            <a class="nav-link" href="{{route("userprofile")}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>About Me</span></a>

            <a class="nav-link" href="{{route("usercourse")}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>My Courses</span>
            </a>
        </li>
        <hr class="sidebar-divider">
    </ul>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <div class="container-fluid">
                <div class="profile-container">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="purchasedCoursesTable">
                            <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Title</th>
                                <th>Duration</th>
                                <th>Image</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $id = 0; ?>
                            @foreach ($purchasedCourses as $course)
                                    <?php $courseDetails = \App\Models\admin\Course::find($course->course_id)->first(); ?>
                                <tr>
                                    <td>{{ ++$id }}</td>
                                    <td>{{ optional($courseDetails)->title ?? "No Data Found" }}</td>
                                    <td>{{ optional($courseDetails)->duration ?? "No Data Found" }}</td>
                                    <td>
                                        <img src="{{ optional($courseDetails)->image ? asset('storage/'.$courseDetails->image) : 'no-image.jpg' }}" alt="" class="img-fluid" style="max-width: 100px; height: auto;">
                                    </td>
                                    <td>{{ $course->amount }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/scripts/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/scripts/dataTables.rowReorder.min.js') }}"></script>
<script src="{{ asset('assets/scripts/dataTables.responsive.min.js') }}"></script>

<script>
    $(document).ready(function () {
        $('#purchasedCoursesTable').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)' // Assuming the second column is draggable (you can change this)
            },
            responsive: true
            // Add more DataTables configurations as needed
        });
    });
</script>

</body>
</html>
