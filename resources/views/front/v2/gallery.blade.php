@extends('front.v2.main')

@section('content')

    <main>

        <main>

            <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="{{ asset('assets/img/index/background.png') }}">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="it-breadcrumb-content z-index-3 text-center">
                                <div class="it-breadcrumb-title-box">
                                    <h3 class="it-breadcrumb-title">blog</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="it-blog-area  pt-120 pb-90">
                <div class="container">
                    <div class="row">


                        @foreach ($galleries as $gallery)



                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="it-blog-item-box" data-background="assets/img/blog/bg-1.jpg">
                                <div class="it-blog-item">
                                    <div class="it-blog-thumb fix">
                                        <a href="{{ route('blog.details', $gallery->id) }}"><img src="{{ asset('storage/' . $gallery->image) }}"  alt></a>
                                    </div>
                                    <div class="it-blog-meta pb-15">
<span>
<i class="fa-solid fa-calendar-days"></i>
{{$gallery->created_at}}</span>
                                        <span>
<i class="fa-light fa-messages"></i>
Comment (06)</span>
                                    </div>
                                    <h4 class="it-blog-title"><a href="{{ route('blog.details', $gallery->id) }}">{{$gallery->title}}</a></h4>
                                    <a class="it-btn sm" href="{{ route('blog.details', $gallery->id) }}">
<span>
read more
<svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11 1.24023L16 7.24023L11 13.2402" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10"
      stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1 7.24023H16" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
      stroke-linejoin="round"/>
</svg>
</span>
                                    </a>
                                </div>
                            </div>
                        </div>






                        @endforeach


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
