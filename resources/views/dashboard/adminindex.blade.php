@extends('admin.admin-panel.main')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>

                <!-- Cards Section -->
                <div class="row">
                    <!-- Total Students Card -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card custom-card bg-info text-white shadow">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            Total Students</div>
                                        <div class="h5 mb-0 font-weight-bold text-white">500</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Revenue Card -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card custom-card bg-success text-white shadow">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            Total Revenue</div>
                                        <div class="h5 mb-0 font-weight-bold text-white">$50,000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Courses Card -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card custom-card bg-primary text-white shadow">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            Total Courses</div>
                                        <div class="h5 mb-0 font-weight-bold text-white">50</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-book fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Enrollments Card -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card custom-card bg-warning text-white shadow">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            Total Enrollments</div>
                                        <div class="h5 mb-0 font-weight-bold text-white">1,000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-check-circle fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="row">
                    <!-- Revenue Chart -->
                    <div class="col-xl-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Revenue For The Last Five Months
                            </div>
                            <div class="card-body">
                                <canvas id="myAreaChart1" width="100%" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Total Sales Chart -->
                    <div class="col-xl-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Total Sales
                            </div>
                            <div class="card-body">
                                <canvas id="myAreaChart2" width="100%" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Class Attendance Chart -->
                    <div class="col-xl-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Class Attendance
                            </div>
                            <div class="card-body">
                                <canvas id="myBarChart1" width="100%" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DataTable Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Total Student List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatablesSimple" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Enrolled Course/s</th>
                                    <th>Address</th>
                                    <th>Paid Amount</th>
                                    <th>Due Amount</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>6998</td>
                                    <td>2011</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>6300</td>
                                    <td>400</td>
                                    <td>50%</td>
                                </tr>
                                <!-- Add more table rows if needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart Initialization Script -->
    <script>
        // Revenue Chart
        var ctx1 = document.getElementById('myAreaChart1').getContext('2d');
        var myAreaChart1 = new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Revenue',
                    backgroundColor: 'rgba(75,192,192,0.2)',
                    borderColor: 'rgba(75,192,192,1)',
                    data: [65, 59, 80, 81, 56, 55]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Total Sales Chart
        var ctx2 = document.getElementById('myAreaChart2').getContext('2d');
        var myAreaChart2 = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Total Sales',
                    backgroundColor: 'rgba(255,99,132,0.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    data: [28, 48, 40, 19, 86, 27]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Class Attendance Chart
        var ctx3 = document.getElementById('myBarChart1').getContext('2d');
        var myBarChart1 = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: ['Class 1', 'Class 2', 'Class 3', 'Class 4', 'Class 5'],
                datasets: [{
                    label: 'Attendance',
                    backgroundColor: 'rgba(255, 193, 7, 0.8)',
                    data: [65, 59, 80, 81, 56]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
