@extends('admin.admin-panel.main')

@section('content')

    @if(session('update') != null)
        <p>{{ session('update') }}</p>

    @elseif(session('delete') != null)
        <p>{{ session('delete') }}</p>
    @endif


    <h4>View All Course</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Duration</th>
            <th>image</th>
            <th>Price</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($courses as $course)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{!!$course->title !!}</td>
                <td>{{ $course->duration }}</td>
                <td><img src="{{ asset('storage/'.$course->image) }}" alt="" style="width: 100px"></td>
                <td>{{ $course->price }}</td>

                <td><a href="{{ route('course.edit',$course->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('course.destroy',$course->id) }}" method="post">
                        {{ csrf_field() }}
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
