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
                <td>{{ optional($order['user'])['name'] }}</td>
                <td>{{ optional($order['user'])['email'] }}</td>
                <td>{{ $order['amount'] }}</td>
                <td>{{ $order['phone'] }}</td>
                <td>{{ $order['status'] }}</td>
                <td>{{ $order['course_ID'] }}</td>
                <td>{{ $order['transaction_id'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
