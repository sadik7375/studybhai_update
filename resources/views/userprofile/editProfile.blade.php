<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>studybhai</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">

    <script src="https://cdn.tiny.cloud/1/3jyy1zmqqq1lgcadurv15vtpzdvttvplxnvgtpjqjicmj1h5/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body>


<div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
            <div class="text-center">
                <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                <h6>Upload a different photo...</h6>

                <input type="file" class="form-control">
            </div>
        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info">

            <h3>Personal Info</h3>

            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                <div class="form-group">
                    <label class="col-lg-3 control-label">Full Name:</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="full_name" value="{{ Auth::user()->profile->full_name }}" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Institute Name:</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="institute_name" value="{{ Auth::user()->profile->institute_name }}" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Phone Number:</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="phone_name" value="{{ Auth::user()->profile->phone_number }}" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Address:</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="address" value="{{ Auth::user()->profile->address }}" />
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-lg-3 control-label">Current status:</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="current_status" value="{{ Auth::user()->profile->current_status }}" />
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
<hr>






</body>
</html>
