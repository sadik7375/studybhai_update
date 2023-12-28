@extends('admin.admin-panel.main')

@section('content')
    <h4>View All Orders</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Email</th>
            <th>Amount</th>
            <th>Currency</th>
            <th>Status</th>
            <th>Course Id</th>
            <th>Transaction ID</th>
        </tr>
        </thead>
        <tbody>

        <?php $serial = 0 ?>
        @foreach($orders as $order)
            <tr>
                <td>{{ $serial += 1 }}</td>
                <td>{{ $order['user']['name']  }}</td>
                <td>{{ $order['user']['email']  }}</td>
                <td>{{ $order['amount']  }}</td>
                <td>{{ $order['currency']  }}</td>
                <td>{{ $order['status']  }}</td>
                <td>{{ $order['course_ID']  }}</td>
                <td>{{ $order['transaction_id']  }}</td>

{{--                <td>{{ $course->price }}</td>--}}

{{--                <td><a href="{{ route('course.edit',$course->id) }}" class="btn btn-info">Update</a></td>--}}
{{--                <td>--}}
{{--                    <form action="{{ route('course.destroy',$course->id) }}" method="post">--}}
{{--                        {{ csrf_field() }}--}}
{{--                        @method('delete')--}}
{{--                        <input type="submit" value="Delete" class="btn btn-danger">--}}
{{--                    </form>--}}
{{--                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
