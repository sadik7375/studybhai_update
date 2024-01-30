
    @extends('admin.admin-panel.main')




    @section('content')

        @if(session('update') != null)
            <p>{{ session('update') }}</p>

        @elseif(session('delete') != null)
            <p>{{ session('delete') }}</p>
        @endif


        <h4>My Courses</h4>
        <hr>

        <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
                <th>Serial</th>

                <th>Course Name</th>
                <th>Number of Student</th>






            </tr>
            </thead>
            <tbody>

            <?php $id = 0 ?>
            @foreach($courseCounts as $courseCount)
                <tr>
                    <td>{{ $id += 1 }}</td>
                    <td>{{ $courseCount['course']->title }}</td>
                    <td>{{ $courseCount['numberOfStudents'] }}</td>









                </tr>
            @endforeach
            </tbody>
        </table>

    @endsection

