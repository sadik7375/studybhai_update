@extends('admin.admin-panel.main')

@section('content')
    @if (session('update') != null)
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
                <th>Phone</th>
                <th>Email</th>
                <th>Location</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php $id = 0; ?>
            @foreach ($footers as $feedback)
                <tr>
                    <td>{{ $id += 1 }}</td>
                    <td>{!! $feedback->phone !!}</td>
                    <td>{!! $feedback->email !!}</td>
                    <td>{{ $feedback->location }}</td>

                    <td><a href="{{ route('footer.edit', $feedback->id) }}" class="btn btn-info">Update</a></td>
                    <td>
                        <form action="{{ route('footer.destroy', $feedback->id) }}" method="post">
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
