@extends('admin.admin-panel.main')

@section('content')
    <h1>Trainer Profile</h1>

    {{-- Display trainer's profile information --}}
    <div>
        @if(isset($trainer))
            <p>Name: {{ $trainer->name }}</p>
            <p>Email: {{ $trainer->email }}</p>
            {{-- Add other fields --}}
        @else
            <p>No trainer profile available</p>
        @endif
    </div>
@endsection
