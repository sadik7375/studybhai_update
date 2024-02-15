@extends('admin.admin-panel.main')

@section('content')
    @if (session('update') != null)
        <p>{{ session('update') }}</p>
    @elseif(session('delete') != null)
        <p>{{ session('delete') }}</p>
    @endif


    <h4>View All Feedback</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Serial</th>
                <th>Title</th>
                <th>image</th>
                <th>Description</th>

                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php $id = 0; ?>
            @foreach ($galleries as $gallery)
                <tr>
                    <td>{{ $id += 1 }}</td>
                    <td>{!! $gallery->title !!}</td>
                    <td><img src="{{ asset('storage/' . $gallery->image) }}" alt="" style="width: 100px"></td>
                    <td>{!! $gallery->description !!}</td>

                    <td><a href="{{ route('edit.gallery', $gallery->id) }}" class="btn btn-info">Update</a></td>
                    <td>
                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="post">
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
