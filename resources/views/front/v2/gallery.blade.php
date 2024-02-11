@extends('front.v2.main')

@section('content')

    <main>

        <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="{{ asset('assets/img/index/breadcrumb.jpg') }}">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="it-breadcrumb-content z-index-3 text-center">
{{--                            <div class="it-breadcrumb-title-box">--}}
{{--                                <h3 class="it-breadcrumb-title">Gallery</h3>--}}
{{--                            </div>--}}

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
                                <div class="it-blog-thumb fix"><img src="{{ asset('storage/' . $gallery->image) }}"  alt>
                                </div>
                                <div class="it-blog-meta pb-15">
<span>
<i class="fa-solid fa-calendar-days"></i>
{{$gallery->created_at}}</span>
{{--                                    <span>--}}
{{--<i class="fa-light fa-messages"></i>--}}
{{--Comment (06)</span>--}}
                                </div>
                                <h4 class="it-blog-title">{{$gallery->title}}</h4>
{{--                                <a class="it-btn sm" href="blog-details.html">--}}
{{--<span>--}}
{{--read more--}}
{{--<svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--<path d="M11 1.24023L16 7.24023L11 13.2402" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10"--}}
{{--      stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--<path d="M1 7.24023H16" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"--}}
{{--      stroke-linejoin="round"/>--}}
{{--</svg>--}}
{{--</span>--}}
{{--                                </a>--}}
                            </div>
                        </div>
                    </div>

                    @endforeach













                </div>


            </div>
        </div>


    </main>

@endsection
