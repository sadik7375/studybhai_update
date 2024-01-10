
@extends('userprofile')

@section('content')
    <div>
        <h2>About Me</h2>
        <form method="post" action="{{ route('update-profile') }}">
            @csrf
            @method('patch')

            <!-- Name -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control">
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <label>
                    <input type="email" name="email" value="{{ auth()->user()->email }}" class="form-control">
                </label>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control">
            </div>

            <!-- Reset Password -->
            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
@endsection
