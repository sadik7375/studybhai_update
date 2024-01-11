@extends('userprofile.umain')

@section('content')

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
                                <th>Transaction ID</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $id = 0; ?>
                            @foreach ($purchasedCourses as $course)

                                <tr>
                                        <?php $courseDetails = \App\Models\admin\Course::find($course->course_id)?>
                                    <td>{{ ++$id }}</td>
                                    <td>{{ optional($courseDetails)->title ?? "No Data Found" }}</td>
                                    <td>{{ optional($courseDetails)->duration ?? "No Data Found" }}</td>
                                    <td>
                                        <img src="{{ optional($courseDetails)->image ? asset('storage/'.$courseDetails->image) : 'no-image.jpg' }}" alt="" class="img-fluid" style="max-width: 100px; height: auto;">
                                    </td>
                                    <td>{{ $course->amount }}</td>
                                    <td>{{ $course->transaction_id }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
