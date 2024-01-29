@extends('admin.admin-panel.main')


@section('content')
    <div>
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
    </div>

    <h4>Create Team</h4>
    <hr>

    <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Name</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="name" class="form-control @error('name') is-invalid @enderror">


                    @error('name')
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





            <div class="col-md-4">
                <div class="form-group">
                    <label for="profession">Profession</label>
                    <input type="text" id="profession" name="profession"
                        class="form-control @error('profession') is-invalid @enderror">

                    @error('profession')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="profession">Address</label>
                    <input type="text" id="profession" name="address"
                           class="form-control @error('address') is-invalid @enderror">

                    @error('address')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="profession">Expertise</label>
                    <input type="text" id="expertise" name="expertise"
                        class="form-control @error('expertise') is-invalid @enderror">

                    @error('expertise')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="profession">Category</label>

                    <select id="" class="form-control" name="category">
                        <option value="" selected disabled>Select Category</option>
                        <option value="team">Team</option>
                        <option value="advisor">Advisor</option>
                        <option value="trainer">Trainer</option>
                        <option value="special_trainer">Special Trainer</option>
                        <option value="guest_trainer">Guest Trainer</option>
                        <option value="alumni">Alumni</option>
                    </select>

                    @error('category')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label for="profession">Email</label>
                    <input type="text" id="expertise" name="email"
                        class="form-control @error('expertise') is-invalid @enderror">

                    @error('expertise')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="profession">Password</label>
                    <input type="text" id="expertise" name="password"
                        class="form-control @error('expertise') is-invalid @enderror">

                    @error('expertise')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>



            <div class="col-md-4">
                <div class="form-group">
                    <label for="profession">Phone Number</label>
                    <input type="text" id="expertise" name="phone_number"
                        class="form-control @error('expertise') is-invalid @enderror">

                    @error('expertise')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>







            <!-- Add other fields similarly -->
            <div class="col-md-12">
                <input type="submit" value="Add Team Member" class="btn btn-success">
            </div>

            <br><br><br>

        </div>
    </form>
@endsection
