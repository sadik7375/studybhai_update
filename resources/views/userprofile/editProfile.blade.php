@extends('userprofile.umain')

@section('content')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        {{--        <hr>--}}
        <div id="content">
            <div class="container-fluid">
                <!-- Page content for settings -->
                <div class="profile-container">
                    <!-- Settings content goes here -->


                    <h4 class="text-center mb-4"><b>Edit Your Personal Information</b></h4>
                    <hr>
                    <div class="row">
                        <!-- left column -->
{{--                         <div class="col-md-3">--}}
{{--                            <div class="text-center">--}}
{{--                                <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">--}}
{{--                                <h6>Upload your photo here</h6>--}}
{{--                                <label for="profile-picture" class="btn btn-primary btn-upload">Choose File</label>--}}
{{--                                <input type="file" id="profile-picture" class="form-control" style="display: none;">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!-- edit form column -->
                        <div class="col-md-9 personal-info">
                            <!-- Your existing settings form code -->
                            <form method="POST" action="{{ route('profile.update') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Full Name:</b></label>
                                    <div class="col-lg-8">
                                        @if(auth()->user()->profile)
                                            <input type="text" class="form-control" name="full_name" value="{{ auth()->user()->profile->full_name }}" />
                                        @else
                                            <input type="text" class="form-control" name="full_name" value="" />
                                        @endif
                                    </div>
                                </div>

                                <!-- Other form fields... -->
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Institute Name:</b></label>
                                    <div class="col-lg-8">
                                        @if(auth()->user()->profile)
                                            <input type="text" class="form-control" name="institute_name" value="{{ auth()->user()->profile->institute_name }}" />

                                        @else
                                            <input type="text" class="form-control" name="institute_name" value="" />
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Phone Number:</b></label>
                                    <div class="col-lg-8">
                                        @if(auth()->user()->profile)
                                            <input type="text" class="form-control" name="phone_number" value="{{ auth()->user()->profile->phone_number }}" />
                                        @else
                                            <input type="text" class="form-control" name="phone_number" value=" " />
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Address:</b></label>
                                    <div class="col-lg-8">
                                    @if(auth()->user()->profile)
                                        <input type="text" class="form-control" name="address" value="{{ auth()->user()->profile->address }}" />

                                        @else
                                            <input type="text" class="form-control" name="address" value="" />
                                    @endif

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b> status:</b></label>
                                    <div class="col-lg-8">
                                        @if(auth()->user()->profile)
                                            <input type="text" class="form-control" name="current_status" value="{{ auth()->user()->profile->current_status }}" />
                                        @else
                                            <input type="text" class="form-control" name="current_status" value="" />

                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary">Update Info</button>
                                        <span></span>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .btn-upload {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-upload:hover {
            background-color: #2980b9;
        }
    </style>
@endsection
