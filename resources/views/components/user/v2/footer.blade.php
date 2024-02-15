{{-- ---------------------------------------------- Footer ---------------------------------------------- --}}

<footer>
    <div id="footer"
        class="it-footer-area it-footer-bg black-bg pt-120 pb-70"
        data-background="assets/img/footer/bg-1-1.jpg"
    >
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-50">
                    <div class="it-footer-widget footer-col-1">
                        <div class="it-footer-logo pb-25">
                            <a href="index-html"
                            ><img src="{{ asset('assets/logo/StudyBhai.png') }}" alt
                                  style="width: 252px"/></a>
                        </div>
                        <div class="it-footer-text pb-5">
                            <p>
                                Come along with us and experience a learning journey that blends flexibility, excellence, and practical use, putting you on the road to success in the rapidly evolving field of information technology.
                            </p>
                        </div>
                        <div class="it-footer-social">
                            <a href="https://www.facebook.com/Studybhaibd"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/company/study-bhai-app/"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>







                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">
                    <div class="it-footer-widget footer-col-2">
                        <h4 class="it-footer-title">our services:</h4>
                        <div class="it-footer-list">
                            <ul>
                                <li>
                                    <a href="#upcourse"
                                    ><i class="fa-regular fa-angle-right"></i>Web
                                        development</a
                                    >
                                </li>
                                <li>
                                    <a href="#upcourse"
                                    ><i class="fa-regular fa-angle-right"></i>Machine Learing</a
                                    >
                                </li>
                                <li>
                                    <a href="#upcourse"
                                    ><i class="fa-regular fa-angle-right"></i>Data Analysis</a
                                    >
                                </li>
                                <li>
                                    <a href="#upcourse"
                                    ><i class="fa-regular fa-angle-right"></i>Iot</a
                                    >
                                </li>
                                <li>
                                    <a href="#upcourse"
                                    ><i class="fa-regular fa-angle-right"></i>SQA</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>














                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-50">
                    <div class="it-footer-widget footer-col-3">
                        <h4 class="it-footer-title">quick links:</h4>
                        <div class="it-footer-list">
                            <ul>

                                <li>
                                    <a href="#aboutus"
                                    ><i class="fa-regular fa-angle-right"></i>About Us</a
                                    >
                                </li>
                                <li>
                                    <a href="{{route("show.courses")}}"
                                    ><i class="fa-regular fa-angle-right"></i
                                        >Courses</a
                                    >
                                </li>
                                <li>
                                    <a href="{{route("team_info")}}"
                                    ><i class="fa-regular fa-angle-right"></i>Team</a
                                    >
                                </li>

                                <li>
                                    <a href="{{route("contact.info")}}"
                                    ><i class="fa-regular fa-angle-right"></i>Contact Us</a
                                    >
                                </li>


                                <li>
                                    <a href="{{route('gallery.index')}}"
                                    ><i class="fa-regular fa-angle-right"></i>Gallery</a
                                    >
                                </li>
                                <!-- <li>
                                    <a href="#"
                                    ><i class="fa-regular fa-angle-right"></i>privacy &
                                        policy</a
                                    >
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">
                    <div class="it-footer-widget footer-col-4">
                        <h4 class="it-footer-title">Gallery</h4>

                        <a href="{{route('gallery.index')}}">
                        <div class="it-footer-gallery-box">
                            <div class="row gx-5">
                                <div class="col-md-4 col-4">
                                    <div class="it-footer-thumb mb-10">
                                        <img src="{{ asset('assets/img/index/Teacher 1.png') }}" alt/>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="it-footer-thumb mb-10">
                                        <img src="{{ asset('assets/img/index/Group 1.png') }}" alt/>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4 mb-10">
                                    <div class="it-footer-thumb">
                                        <img src="{{ asset('assets/img/index/Group 2.png') }}" alt/>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="it-footer-thumb">
                                        <img src="{{ asset('assets/img/index/Student 1.png') }}" alt/>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="it-footer-thumb">
                                        <img src="{{ asset('assets/img/index/Student 2.png') }}" alt/>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="it-footer-thumb">
                                        <img src="{{ asset('assets/img/index/Teacher 2.png') }}" alt/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="it-copyright-area it-copyright-height">
        <div class="container">
            <div class="row">
                <div
                    class="col-12 wow itfadeUp"
                    data-wow-duration=".9s"
                    data-wow-delay=".3s"
                >
                    <div class="it-copyright-text text-center">
                        <p>
                            Copyright © 2023 <a href="#">Inflexionpoint Technologies (BD) Ltd </a> || All Rights
                            Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- ---------------------------------------------- Footer ---------------------------------------------- --}}
