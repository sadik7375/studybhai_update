@extends('admin.admin-panel.main')

@section('content')

    @if(session('update') != null)
        <p>{{ session('update') }}</p>

    @elseif(session('delete') != null)
        <p>{{ session('delete') }}</p>
    @endif


    <h4>View All Assign Courses</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>

            <th>Course Name</th>
            <th>Trainer</th>




            <th>Delete</th>

        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($assignedCourses as $assignedCourse)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $assignedCourse->course->title }}</td>
                <td>{{ $assignedCourse->trainer->name }}</td>




                <td>
                    <form action="{{ route('assign.course.delete', ['assignedCourse' => $assignedCourse->id]) }}" method="POST">
                        {{ csrf_field() }}
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>

                <td>



            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
