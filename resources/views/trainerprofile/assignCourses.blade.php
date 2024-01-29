
    @extends('admin.admin-panel.main')
    @section('content')


    <div class="container-fluid mt-4">
        <h2>Assign Courses and Number of student</h2>
        <div class="row">

            @foreach($courseCounts as $courseCount)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $courseCount['course']->title }}</h5>
                            <p class="card-text">
                                {{ $courseCount['numberOfStudents'] }} students Enroll this course
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


@endsection

