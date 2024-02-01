@extends('admin.admin-panel.main')

@section('content')
    <div class="container">
        <h1>Total Students</h1>

        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>

                <!-- Add more table headers as needed -->
            </tr>
            </thead>
            <tbody>
            <?php $serial = 0 ?>
            @forelse($students as $order)
                <tr>
                    <td>{{ $serial += 1 }}</td>
                    <td>{{ optional($order['user'])->name }}</td>
                    <td>{{ $order['phone'] }}</td>
                    <td>{{ optional($order['user'])->email }}</td>
                    <td>{{ $order['status'] }}</td>
                    <!-- Add more table data cells as needed -->
                </tr>
            @empty
                <tr>
                    <td colspan="5">No students found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection



