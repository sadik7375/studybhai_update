@extends('admin.admin-panel.main')

@section('content')
    <a href="{{ route('trainers.list') }}">Trainers List</a>
    <h1>Trainers List</h1>

    {{-- Display a table or other format for listing trainers --}}
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            {{-- Add other fields --}}
        </tr>
        </thead>
        <tbody>
        {{-- Loop through trainers and display information --}}
        @forelse($trainers as $trainer)
            <tr>
                <td>{{ $trainer->name }}</td>
                <td>{{ $trainer->email }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="2">No trainers available</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
