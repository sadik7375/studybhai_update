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
    <h4>Profile Settings</h4>
    <hr>
    <div class="row">

        <div class="col-md-9 personal-info">

            <h3>Change Information</h3>

            <form class="form-horizontal" role="form" action="{{ route('update.password') }}" method="post">
                @csrf

                <div class="form-group">
                    <div class="col-md-8">
                        <input class="form-control" type="password" name="old_password" placeholder="old password" value="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <input class="form-control" name="password" type="password" placeholder="new password" value="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <input class="form-control" name="password_confirmation" type="password" placeholder="confirm password" value="">
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
<hr>







</body>
</html>
