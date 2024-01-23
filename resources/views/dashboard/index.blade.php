@extends('userprofile.umain')

@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-primary"><b>Welcome to Your Dashboard</b></h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Your Enrolled Course/s -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card bg-primary text-white shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                         Your Enrolled Course/s</div>
                                    <div class="h6 mb-0 font-weight-bold text-white">Machine Learning and Algorithm</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-book-reader fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Duration -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card bg-success text-white shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                        Course Duration</div>
                                    <div class="h5 mb-0 font-weight-bold text-white">Jan23 - July23</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar-alt fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Completion Percentage -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card bg-info text-white shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                        Completion Percentage</div>
                                    <div class="h5 mb-0 font-weight-bold text-white">25%</div>
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-white" role="progressbar" style="width: 25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chart-pie fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pending Assignment and Quizzes -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card bg-success text-white shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                        Pending Assignment and Quizzes</div>
                                    <div class="h5 mb-0 font-weight-bold text-white">18</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-tasks fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Row -->
            <div class="row">
                <!-- Your Result and Activities -->
                <div class="col-lg-6 mb-4">
                    <div class="card bg-white shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Your Result and Activities</h6>
                        </div>
                        <div class="card-body">
                            <div class="progress-info mb-4">
                                <h4 class="small font-weight-bold text-info">Quiz Marks <span class="float-right">20%</span></h4>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-info mb-4">
                                <h4 class="small font-weight-bold text-success">Assignment Marks <span class="float-right">40%</span></h4>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-info mb-4">
                                <h4 class="small font-weight-bold text-primary">Customer Database <span class="float-right">60%</span></h4>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 60%"
                                         aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-info mb-4">
                                <h4 class="small font-weight-bold text-info">Your Attendance <span class="float-right">80%</span></h4>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                         aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-info mb-4">
                                <h4 class="small font-weight-bold text-success">Account Setup <span class="float-right">Complete!</span></h4>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Your Certificates -->
                <div class="col-lg-6 mb-4">
                    <div class="card bg-white shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Your Certificates</h6>
                        </div>
                        <div class="card-body text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                 src="img/undraw_posting_photo.svg" alt="...">
                            <p>Unlock your potential with online courses at <a target="_blank" rel="nofollow"
                                                                               href="https://studybhai.app/">Studybhai</a>! Explore a world of knowledge and skills.</p>
                            <a target="_blank" rel="nofollow" href="https://studybhai.app/">Discover more courses!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
