@extends('admin.admin-panel.main')
@section('content')
    <div>
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
    </div>

    <h4>Assign course</h4>
    <hr>

    <form action="{{ route('assign.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {{-- <label for="exampleInputEmail1">Course Id</label> --}}
                    <input type="text" value="{{ request('course_id') }}" aria-describedby="emailHelp" placeholder="" name="course_id"
                           class="form-control "  hidden>
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Trainer Name</label>

                    <select name="trainer_id" id="trainer_id" class="form-control" required>
                        @foreach($trainers as $trainer)
                            <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
                        @endforeach
                    </select>

                    @error('trainer name')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <!-- Add other fields similarly -->
            <div class="col-md-12">
                <input type="submit" value="Assign" class="btn btn-success">
            </div>

            <br><br><br>

        </div>

        <!-- Add other form sections as needed -->

    </form>
@endsection
