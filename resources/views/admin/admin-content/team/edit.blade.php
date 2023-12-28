@extends('admin.admin-panel.main')


@section('content')
    <div>
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
    </div>

    <h4>Edit Team</h4>
    <hr>

    <form action="{{ route('team.update', $team->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @method('put')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="title"
                        class="form-control @error('title') is-invalid @enderror" value="{{ $team->title }}">

                    @error('title')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Image [130px x 130px]</label>
                    <input type="file" id="formFile" name="image"
                        class="form-control-file @error('image') is-invalid @enderror">

                    @error('image')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>



            <div class="col-md-4">
                <div class="form-group">
                    <label for="profession">Profession</label>
                    <input type="text" id="profession" name="profession"
                        class="form-control @error('profession') is-invalid @enderror" value="{{ $team->profession }}">

                    @error('profession')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="profession">Expertise</label>
                    <input type="text" id="expertise" name="expertise"
                        class="form-control @error('expertise') is-invalid @enderror" value="{{ $team->expertise }}">

                    @error('expertise')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="profession">Category</label>
                    {{-- <input type="text" id="category" name="category"
                        class="form-control @error('category') is-invalid @enderror" value="{{ $team->category }}"> --}}

                    <select id="" class="form-control" name="category">
                        <option value="team" @if ($team->category == 'team') selected @endif>Team</option>
                        <option value="advisor" @if ($team->category == 'advisor') selected @endif>Advisor</option>
                        <option value="trainer" @if ($team->category == 'trainer') selected @endif>Trainer</option>
                        <option value="special_trainer" @if ($team->category == 'special_trainer') selected @endif>Special Trainer
                        </option>
                        <option value="guest_trainer" @if ($team->category == 'guest_traineram') selected @endif>Guest Trainer
                        </option>
                        <option value="alumni" @if ($team->category == 'alumni') selected @endif>Alumni</option>
                    </select>

                    @error('category')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Add other fields similarly -->
            <div class="col-md-12">
                <input type="submit" value="Edit Team Member" class="btn btn-success">
            </div>

            <br><br><br>

        </div>

        <!-- Add other form sections as needed -->

    </form>
@endsection
