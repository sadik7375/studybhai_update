<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Studybhai Footer</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- Your custom CSS -->
    <link rel="stylesheet" href="path/to/your/custom.css" />
</head>
<body>
<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: hwb(167 5% 71%);">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4" style="background-color: rgba(0,0,0,0.23);">
        <!-- Left -->
        <div class="me-5">
            <span><b>Get connected with us on social networks :</b></span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div class="social-media-icons">
            <a href="https://www.linkedin.com/company/study-bhai-app/" target="_blank"><img src="{{ asset('assets/images/linkedin-icon.png') }}" alt="LinkedIn" class="social-icon"></a>
            <a href="#" target="_blank"><img src="{{ asset('assets/images/facebook-icon.png') }}" alt="Facebook" class="social-icon"></a>
            <a href="#" target="_blank"><img src="{{ asset('assets/images/instagram-icon.png') }}" alt="Instagram" class="social-icon"></a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <div>
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid" />
                    </div>
                    <br />
                    <div>
                        <p class="footer-paragraph-state">
                            Online live skill development platform
                        </p>
                    </div>
                    <br />
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">ABOUT US</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p><a href="#" class="text-white">Terms and Conditions</a></p>
                    <p><a href="#" class="text-white">Privacy Policy</a></p>
{{--                    <p><a href="#!" class="text-white">BrandFlow</a></p>--}}
{{--                    <p><a href="#!" class="text-white">Bootstrap Angular</a></p>--}}
                </div>
                <!-- Grid column -->
                @php
                    $categoryNames = [
                        'team' => 'Team',
                        'advisor' => 'Advisor',
                        'trainer' => 'Trainer',
                        'special_trainer' => 'Special Trainer',
                        'guest_trainer' => 'Guest Trainer',
                        'alumni' => 'Alumni',
                    ];
                @endphp
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold"><a href="{{ route('team_info') }}" style="text-decoration: none; color: white">{{ $categoryNames['team'] }}</a></h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p><a href="{{ route('team_info') }}" style="text-decoration: none; color: white">{{ $categoryNames['advisor'] }}</a></p>
                    <p><a href="{{ route('team_info') }}" style="text-decoration: none; color: white">{{ $categoryNames['trainer'] }}</a></p>
                    <p><a href="{{ route('team_info') }}" style="text-decoration: none; color: white">{{ $categoryNames['special_trainer'] }}</a></p>
                    <p><a href="{{ route('team_info') }}" style="text-decoration: none; color: white">{{ $categoryNames['guest_trainer'] }}</a></p>
                    <P><a href="{{ route('team_info') }}" style="text-decoration: none; color: white">{{ $categoryNames['alumni'] }}</a></P>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p><i class="fa-solid fa-house"></i> House 88, Road 7, Block C, Mansurabad Housing Society, Adabar, Dhaka-1207</p>
                    <p><i class="fas fa-envelope mr-3"></i> info@studybhai.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright :
        <a class="text-white" href="https://studybhai.app/">info@studybhai.app</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

<style>
    .social-media-icons {
        display: flex;
    }

    .social-icon {
        width: 30px;
        margin-bottom: 5px;
        margin-right: 10px;
    }
</style>
</body>
</html>
