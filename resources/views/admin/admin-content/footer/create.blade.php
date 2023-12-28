@extends('admin.admin-panel.main')


@section('content')
    <div>
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
    </div>

    <h4>Create Footer</h4>
    <hr>

    <form action="{{ route('footer.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Phone Number</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="phone"
                        class="form-control @error('phone') is-invalid @enderror">

                    @error('phone')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Email</label>

                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="email"
                        class="form-control @error('email') is-invalid @enderror">

                    @error('email')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Enter Location</label>

                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                        name="location" class="form-control @error('location') is-invalid @enderror">

                    @error('email')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Add other fields similarly -->
            <div class="col-md-12">
                <input type="submit" value="Add Footer Data" class="btn btn-success">
            </div>

            <br><br><br>

        </div>

        <!-- Add other form sections as needed -->

    </form>
@endsection
