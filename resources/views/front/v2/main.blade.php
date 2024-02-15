<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>
        StudyBhai
    </title>
    <meta name="description" content/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="{{ asset('assets/img/logo/favicon.png') }}"
    />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_xoft.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"/>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css"
        rel="stylesheet"
    />




</head>
<body>
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
    </div>
</div>

<button class="scroll-top scroll-to-target" data-target="html">
    <i class="far fa-angle-double-up"></i>
</button>

<div class="it-offcanvas-area">
    <div class="itoffcanvas">
        <div class="it-offcanva-bottom-shape d-none d-xxl-block"></div>
        <div class="itoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="itoffcanvas__logo">
            <a href="index.html">
                <img src="{{ asset('assets/img/logo/logo-white.png') }}" alt/>
            </a>
        </div>
        <div class="itoffcanvas__text">
            <p>
                Suspendisse interdum consectetur libero id. Fermentum leo vel orci
                porta non. Euismod viverra nibh cras pulvinar suspen.
            </p>
        </div>
        <div class="it-menu-mobile"></div>
        <div class="itoffcanvas__info">
            <h3 class="offcanva-title">Get In Touch</h3>
            <div class="it-info-wrapper mb-20 d-flex align-items-center">
                <div class="itoffcanvas__info-icon">
                    <a href="#"><i class="fal fa-envelope"></i></a>
                </div>
                <div class="itoffcanvas__info-address">
                    <span>Email</span>
                    <a href="maito:hello@yourmail.com"
                    ><span
                            class="__cf_email__"
                            data-cfemail="58303d3434371821372d2a35393134763b3735"
                        >[email&#160;protected]</span
                        ></a
                    >
                </div>
            </div>
            <div class="it-info-wrapper mb-20 d-flex align-items-center">
                <div class="itoffcanvas__info-icon">
                    <a href="#"><i class="fal fa-phone-alt"></i></a>
                </div>
                <div class="itoffcanvas__info-address">
                    <span>Phone</span>
                    <a href="tel:(00)45611227890">(00) 456 1122 7890</a>
                </div>
            </div>
            <div class="it-info-wrapper mb-20 d-flex align-items-center">
                <div class="itoffcanvas__info-icon">
                    <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                </div>
                <div class="itoffcanvas__info-address">
                    <span>Location</span>
                    <a
                        href="htits://www.google.com/maps/@37.4801311,22.8928877,3z"
                        target="_blank"
                    >Riverside 255, San Francisco, USA
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>


{{-- ----------------------------------------- navbar ----------------------------------------- --}}

<x-user.v2.navbar></x-user.v2.navbar>

{{-- ----------------------------------------- navbar ----------------------------------------- --}}

{{-- ----------------------------------------- Extended Section ----------------------------------------- --}}


<div>
    @yield('content')
</div>


{{-- ----------------------------------------- Extended Section ----------------------------------------- --}}




{{-- ---------------------------------------------- Footer ---------------------------------------------- --}}


<x-user.v2.footer></x-user.v2.footer>

{{-- ---------------------------------------------- Footer ---------------------------------------------- --}}


<script
    data-cfasync="false"
    src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
></script>

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/purecounter.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
<script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
<script src="{{ asset('assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>


</body>
</html>
