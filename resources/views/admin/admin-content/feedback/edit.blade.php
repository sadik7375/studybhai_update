@extends('admin.admin-panel.main')


@section('content')

    <div>
        @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
    </div>

    <h4>Edit Feedback</h4>
    <hr>

    <form action="{{ route('feedback.update', $feedback->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @method('put')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="title"
                           class="form-control @error('title') is-invalid @enderror" value="{{ $feedback->title }}">

                    @error('title')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="formFile" name="image"
                           class="form-control-file @error('image') is-invalid @enderror">

                    @error('image')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Description</label>

                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="description"
                           class="form-control @error('description') is-invalid @enderror" value="{{ $feedback->description }}">

                    @error('description')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Add other fields similarly -->
            <div class="col-md-12">
                <input type="submit" value="Add Feedback" class="btn btn-success">
            </div>

            <br><br><br>

        </div>

        <!-- Add other form sections as needed -->

    </form>

@endsection
