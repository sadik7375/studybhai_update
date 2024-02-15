@extends('front.v2.main')

@section('content')

    <main>

        <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="{{ asset('assets/img/index/background.png') }}">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="it-breadcrumb-content z-index-3 text-center">
                            <div class="it-breadcrumb-title-box">
                                <h3 class="it-breadcrumb-title">{{$gallery->title}}</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="postbox__area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="postbox__details-wrapper">
                            <article>
                                <div class="postbox__thumb mb-30 w-img">
                                    <img src="{{ asset('storage/' . $gallery->image) }}"  alt>
                                </div>
                                <div class="postbox__details-title-box pb-40">
                                    <div class="postbox__meta">
                                        <span><i class="fa-solid fa-calendar-days"></i>{{$gallery->created_at}}</span>
                                        <span><i class="fa-regular fa-comments"></i>Comment (06)</span>
                                    </div>
                                    <h4 class="postbox__title mb-20">{{$gallery->title}}</h4>
                                    {{$gallery->description}}



                                </div>
{{--                                --}}
{{--                                <div class="postbox__content pb-20">--}}
{{--                                    <div class="postbox__content-img mb-40 d-flex justify-content-between">--}}
{{--                                        <img class="mr-30" src="assets/img/blog/blog-details-2.jpg" alt>--}}
{{--                                        <img src="assets/img/blog/blog-details-3.jpg" alt>--}}
{{--                                    </div>--}}
{{--                                    <div class="postbox__text">--}}
{{--                                        <h4 class="postbox__details-title">Latest Articles Updated Daily</h4>--}}
{{--                                        <p>With worldwide annual spend on digital advertising surpassing $325 billion,--}}
{{--                                            it’s no surprise that different approaches to online marketing are becoming--}}
{{--                                            available. One of these new approaches is performance marketing or digital--}}
{{--                                            performance marketing. Keep reading to learn all about performance marketing--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="postbox__item text-center">--}}
{{--                                    <i class="fas fa-quote-right"></i>--}}
{{--                                    <p>Diam luctus nostra dapibus varius et semper semper rutrum ad risus felis--}}
{{--                                        eros. Cursus libero viverra tempus netus diam vestibulum</p>--}}
{{--                                    <span>David Backhum</span>--}}
{{--                                </div>--}}
{{--                                <div class="postbox__details-share-wrapper">--}}
{{--                                    <div class="row align-items-center">--}}
{{--                                        <div class="col-xl-7 col-lg-7 col-md-7">--}}
{{--                                            <div class="postbox__details-tag">--}}
{{--                                                <span>Posted in:</span>--}}
{{--                                                <a href="#">Development</a>--}}
{{--                                                <a href="#">Digital</a>--}}
{{--                                                <a href="#">Tech</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-5 col-lg-5 col-md-5">--}}
{{--                                            <div class="postbox__details-share text-lg-end">--}}
{{--                                                <span>Share:</span>--}}
{{--                                                <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                                <a href="#"><i class="fa-brands fa-instagram"></i></a>--}}
{{--                                                <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="postbox__comment">--}}
{{--                                    <h3 class="postbox__comment-title">01 Comments</h3>--}}
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <div class="postbox__comment-box d-flex align-items-center">--}}
{{--                                                <div class="postbox__comment-info ">--}}
{{--                                                    <div class="postbox__comment-avater mr-20">--}}
{{--                                                        <img src="assets/img/avatar/avata-3.png" alt>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="postbox__comment-text">--}}
{{--                                                    <div class="postbox__comment-reply d-flex align-items-center justify-content-between">--}}
{{--                                                        <span class="post-meta">September 6, 2022 at 1:28 pm </span>--}}
{{--                                                        <a href="#">Reply</a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="postbox__comment-name">--}}
{{--                                                        <h5>Jonathon Lopez</h5>--}}
{{--                                                    </div>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet consectetur adipi vestibulum lectus--}}
{{--                                                        egestas cubilia nam sagittis, nulla posuere habitant</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}




{{--                                <div class="postbox__content-wrap">--}}
{{--                                    <div class="it-contact__wrap">--}}
{{--                                        <div class="it-contact__text pb-30">--}}
{{--                                            <h5 class="it-contact__title">Let’s Get in Touch</h5>--}}
{{--                                            <p>Your email address will not be published. Required fields are marked *</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="it-contact__form-box">--}}
{{--                                            <form action="#">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-xl-6 col-lg-6 col-12 mb-20">--}}
{{--                                                        <div class="it-contact__input-box">--}}
{{--                                                            <input type="text" placeholder="Your Name*">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-xl-6 col-lg-6 col-12 mb-20">--}}
{{--                                                        <div class="it-contact__input-box">--}}
{{--                                                            <input type="email" placeholder="Email Address*">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 mb-20">--}}
{{--                                                        <div class="it-contact__input-box">--}}
{{--                                                            <input type="email" placeholder="Website*">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 mb-20">--}}
{{--                                                        <div class="it-contact__textarea-box">--}}
{{--                                                            <textarea placeholder="Write Your Message*"></textarea>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                            <button type="submit" class="it-btn">--}}
{{--<span>Send Message--}}
{{--<svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--<path d="M11 1.24023L16 7.24023L11 13.2402" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--<path d="M1 7.24023H16" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--</svg>--}}
{{--</span>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                --}}












                            </article>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="it-sv-details-sidebar">
                            <div class="it-sv-details-sidebar-search mb-55">
                                <input type="text" placeholder="search">
                                <button type="submit">
                                    <i class="fal fa-search"></i>
                                </button>
                            </div>
                            <div class="it-sv-details-sidebar-widget mb-55">
                                <h4 class="it-sv-details-sidebar-title mb-30">service category</h4>
                                <div class="it-sv-details-sidebar-category mb-10">
                                    graphic design
                                    <span><i class="fa-light fa-angle-right"></i></span>
                                </div>
                                <div class="it-sv-details-sidebar-category active mb-10">
                                    web design
                                    <span><i class="fa-light fa-angle-right"></i></span>
                                </div>
                                <div class="it-sv-details-sidebar-category mb-10">
                                    it and software
                                    <span><i class="fa-light fa-angle-right"></i></span>
                                </div>
                                <div class="it-sv-details-sidebar-category mb-10">
                                    seles marketing
                                    <span><i class="fa-light fa-angle-right"></i></span>
                                </div>
                                <div class="it-sv-details-sidebar-category mb-10">
                                    art & humanities
                                    <span><i class="fa-light fa-angle-right"></i></span>
                                </div>
                                <div class="it-sv-details-sidebar-category mb-10">
                                    mobile application
                                    <span><i class="fa-light fa-angle-right"></i></span>
                                </div>
                            </div>





{{--                            <div class="sidebar__widget mb-55">--}}
{{--                                <div class="sidebar__widge-title-box">--}}
{{--                                    <h3 class="sidebar__widget-title pb-10">Recent Post</h3>--}}
{{--                                </div>--}}
{{--                                <div class="sidebar__widget-content">--}}
{{--                                    <div class="sidebar__post">--}}
{{--                                        <div class="rc__post mb-30 d-flex align-items-start">--}}
{{--                                            <div class="rc__post-thumb mr-20">--}}
{{--                                                <a href="blog-details.html"><img src="assets/img/blog/blog-sidebar-sm-1.jpg" alt></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="rc__post-content">--}}
{{--                                                <div class="rc__meta">--}}
{{--                                                    <span><i class="fa-solid fa-calendar-days"></i>14 June 2023</span>--}}
{{--                                                </div>--}}
{{--                                                <h3 class="rc__post-title">--}}
{{--                                                    <a href="blog-details.html">Interdum velit laoreet id donec ultrices tincidunt--}}
{{--                                                        arcu.</a>--}}
{{--                                                </h3>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="rc__post mb-30 d-flex align-items-start">--}}
{{--                                            <div class="rc__post-thumb mr-20">--}}
{{--                                                <a href="blog-details.html"><img src="assets/img/blog/blog-sidebar-sm-2.jpg" alt></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="rc__post-content">--}}
{{--                                                <div class="rc__meta">--}}
{{--                                                    <span><i class="fa-solid fa-calendar-days"></i>14 June 2023</span>--}}
{{--                                                </div>--}}
{{--                                                <h3 class="rc__post-title">--}}
{{--                                                    <a href="blog-details.html">Interdum velit laoreet id donec ultrices tincidunt--}}
{{--                                                        arcu.</a>--}}
{{--                                                </h3>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="rc__post mb-30 d-flex align-items-start">--}}
{{--                                            <div class="rc__post-thumb mr-20">--}}
{{--                                                <a href="blog-details.html"><img src="assets/img/blog/blog-sidebar-sm-3.jpg" alt></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="rc__post-content">--}}
{{--                                                <div class="rc__meta">--}}
{{--                                                    <span><i class="fa-solid fa-calendar-days"></i>14 June 2023</span>--}}
{{--                                                </div>--}}
{{--                                                <h3 class="rc__post-title">--}}
{{--                                                    <a href="blog-details.html">Interdum velit laoreet id donec ultrices tincidunt--}}
{{--                                                        arcu.</a>--}}
{{--                                                </h3>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="rc__post mb-30 d-flex align-items-start">--}}
{{--                                            <div class="rc__post-thumb mr-20">--}}
{{--                                                <a href="blog-details.html"><img src="assets/img/blog/blog-sidebar-sm-4.jpg" alt></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="rc__post-content">--}}
{{--                                                <div class="rc__meta">--}}
{{--                                                    <span><i class="fa-solid fa-calendar-days"></i>14 June 2023</span>--}}
{{--                                                </div>--}}
{{--                                                <h3 class="rc__post-title">--}}
{{--                                                    <a href="blog-details.html">Interdum velit laoreet id donec ultrices tincidunt--}}
{{--                                                        arcu.</a>--}}
{{--                                                </h3>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="rc__post mb-30 d-flex align-items-start">--}}
{{--                                            <div class="rc__post-thumb mr-20">--}}
{{--                                                <a href="blog-details.html"><img src="assets/img/blog/blog-sidebar-sm-5.jpg" alt></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="rc__post-content">--}}
{{--                                                <div class="rc__meta">--}}
{{--                                                    <span><i class="fa-solid fa-calendar-days"></i>14 June 2023</span>--}}
{{--                                                </div>--}}
{{--                                                <h3 class="rc__post-title">--}}
{{--                                                    <a href="blog-details.html">Interdum velit laoreet id donec ultrices tincidunt--}}
{{--                                                        arcu.</a>--}}
{{--                                                </h3>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}









{{--                            <div class="it-sv-details-sidebar-widget">--}}
{{--                                <h4 class="it-sv-details-sidebar-title mb-30">popular tag:</h4>--}}
{{--                                <div class="sidebar__widget-content">--}}
{{--                                    <div class="tagcloud">--}}
{{--                                        <a href="#"> Balance</a><a href="#">coaching</a><a href="#">Motivation</a><a href="#">courses</a><a href="#">Life guide</a><a href="#">strategy</a><a href="#">Education</a><a href="#">coach</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="it-newsletter-area it-newsletter-height fix p-relative theme-bg">
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
