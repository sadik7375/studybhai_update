@extends('front.v2.main')

@section('content')



    <main>

        <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="{{ asset('assets/img/index/contract.png') }}">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="it-breadcrumb-content z-index-3 text-center">
                            <div class="it-breadcrumb-title-box">
                                <h3 class="it-breadcrumb-title">contact us</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="it-contact__area pt-120 pb-120">
            <div class="container">
                <div class="it-contact__wrap fix z-index-3 p-relative">
                    <div class="it-contact__shape-1 d-none d-xl-block">
                        <img src="assets/img/contact/shape-2-1.png" alt>
                    </div>
                    <div class="row align-items-end">
                        <div class="col-xl-7">
                            <div class="it-contact__right-box">
                                <div class="it-contact__section-box pb-20">
                                    <h4 class="it-contact__title pb-15">Get in Touch</h4>
                                    <p>Suspendisse ultrice gravida dictum fusce placerat <br>
                                        ultricies integer </p>
                                </div>
                                <div class="it-contact__content mb-55">
                                    <ul>
                                        <li>
                                            <div class="it-contact__list d-flex align-items-start">
                                                <div class="it-contact__icon">
                                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                                </div>
                                                <div class="it-contact__text">
                                                    <span>Our Address</span>
                                                    <a href="#">{{ \App\Models\Footer::first()->location ?? '' }}</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="it-contact__list d-flex align-items-start">
                                                <div class="it-contact__icon">
                                                    <span><i class="fa-solid fa-clock"></i></span>
                                                </div>
                                                <div class="it-contact__text">
                                                    <span>Email</span>
                                                    <a href="#">{{ \App\Models\Footer::first()->email ?? '' }}</a>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="it-contact__list d-flex align-items-start">
                                                <div class="it-contact__icon">
                                                    <span><i class="fa-solid fa-phone phone"></i></span>
                                                </div>
                                                <div class="it-contact__text">
                                                    <span>contact</span>
                                                    <a href="">{{ \App\Models\Footer::first()->phone ?? '' }}</a>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="it-contact__bottom-box d-flex align-items-center justify-content-between">
                                    <div class="it-contact__scrool smooth">
                                        <a href="#it-newsletter"><i class="fa-solid fa-arrow-down"></i>Customer Care</a>
                                    </div>
                                    <div class="it-footer-social">
                                        <a href="https://www.facebook.com/Studybhaibd"><i class="fa-brands fa-facebook-f"></i></a>
{{--                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>--}}
                                        <a href="https://www.linkedin.com/company/study-bhai-app/"><i class="fa-brands fa-linkedin"></i></a>
{{--                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-5">
                            <div class="it-contact__form-box">
                                <form action="{{route('message.store')}}"  method="POST" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 mb-25">
                                            <div class="it-contact-input-box">
                                                <label>Name*</label>
                                                <input type="text" name="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-12 mb-25">
                                            <div class="it-contact-input-box">
                                                <label>Email Address*</label>
                                                <input type="email" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12 mb-25">
                                            <div class="it-contact-input-box">
                                                <label>Phone*</label>
                                                <input type="text" name="phone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-12 mb-25">
                                            <div class="it-contact-input-box">
                                                <label>Subject*</label>
                                                <input type="text" name="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-12 mb-25">
                                            <div class="it-contact-textarea-box">
                                                <label>Message</label>
                                                <input type="text" name="message" placeholder="Message"></input>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="it-btn">
<span>
Send Message
<svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11 1.24023L16 7.24023L11 13.2402" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
<path d="M1 7.24023H16" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
</svg>
</span>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="it-newsletter" class="it-newsletter-area it-newsletter-height fix p-relative theme-bg">
            <div class="it-newsletter-shape-1 d-none d-lg-block">
                <img src="assets/img/newsletter/shape-1-1.png" alt>
            </div>
            <div class="it-newsletter-shape-2 d-none d-lg-block">
                <img src="assets/img/newsletter/shape-1-2.png" alt>
            </div>
            <div class="it-newsletter-shape-3 d-none d-xl-block">
                <img src="assets/img/newsletter/shape-1-3.png" alt>
            </div>
            <div class="it-newsletter-shape-4 d-none d-xl-block">
                <img src="assets/img/newsletter/shape-1-4.png" alt>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="it-newsletter-left">
                            <h4 class="it-section-title text-white pb-20">Join Our Newsletter</h4>
                            <span>Subscribe our newsletter to get our latest update & news.</span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="it-newsletter-right p-relative text-end">
                            <input type="text" placeholder="Enter your email:">
                            <button class="it-btn black-bg" type="submit"><span>subscribe now</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>




@endsection
