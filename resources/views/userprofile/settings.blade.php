@extends('userprofile.umain')

@section('content')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
    <div id="content">
        <div class="container-fluid">
            <!-- Page content for settings -->
            <div class="profile-container">
                <!-- Settings content goes here -->

                <h4>Password Settings</h4>
                <hr>
                <div class="row">
                    <div class="col-md-9 personal-info">
                        <!-- Your existing settings form code -->
                        <form class="form-horizontal" role="form" action="{{ route('update.password') }}"
                              method="post">
                            @csrf
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input class="form-control" type="password" name="old_password"
                                           placeholder="old password" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input class="form-control" name="password" type="password"
                                           placeholder="new password" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input class="form-control" name="password_confirmation" type="password"
                                           placeholder="confirm password" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
@endsection
