@extends('admin.admin-panel.main')

    @section('content')
        <div class="container">
            <h1>Total Students</h1>

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Enrolled Courses</th>
                    <th>Registration Date</th>
                    <th>Enroll Date</th>
                    <th>Completion Date</th>
                </tr>
                </thead>
                <tbody>
                <!-- Loop through students data to populate the table -->
{{--                @foreach ($students as $student)--}}
{{--                    <tr>--}}
{{--                        <td>{{ $student->id }}</td>--}}
{{--                        <td>{{ $student->name }}</td>--}}
{{--                        <td>{{ $student->phone }}</td>--}}
{{--                        <td>{{ $student->email }}</td>--}}
{{--                        <td>{{ $student->enrolled_courses }}</td>--}}
{{--                        <td>{{ $student->registration_date }}</td>--}}
{{--                        <td>{{ $student->enroll_date }}</td>--}}
{{--                        <td>{{ $student->completion_date }}</td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
                <tr>
                    <td>1</td>
                    <td>Ridita</td>
                    <td>01879589416</td>
                    <td>ridita@gmail.com</td>
                    <td>enrolled</td>
                    <td>Machine Learning</td>
                    <td>23/01/24</td>
                    <td>23/01/24</td>
                    <td>23/08/24</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Sadia</td>
                    <td>01879589416</td>
                    <td>ridita@gmail.com</td>
                    <td>enrolled</td>
                    <td>Machine Learning</td>
                    <td>23/01/24</td>
                    <td>23/01/24</td>
                    <td>23/08/24</td>
                </tr>
                </tbody>
            </table>
        </div>
    @endsection
