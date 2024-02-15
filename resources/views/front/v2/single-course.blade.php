@extends('front.v2.main')

@section('content')


    <main>





        <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="assets/img/breadcrumb/breadcrumb.jpg">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="it-breadcrumb-content z-index-3 text-center">
                            <div class="it-breadcrumb-title-box">
                                <h3 class="it-breadcrumb-title">{{$courses->title}}</h3>
                            </div>
{{--                            <div class="it-breadcrumb-list-wrap">--}}
{{--                                <div class="it-breadcrumb-list">--}}
{{--                                    <span><a href="index.html">home</a></span>--}}
{{--                                    <span class="dvdr">//</span>--}}
{{--                                    <span>course</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="it-course-details-area pt-120 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="it-course-details-wrap">
                            <div class="it-evn-details-thumb mb-35">
                                <img src="{{ asset('storage/' . $courses->image) }}" alt>
                            </div>

                            <h4 class="it-evn-details-title mb-0 pb-5">{{$courses->title}}</h4>
                            <div class="postbox__meta">
                                <span><i class="fa-light fa-file-invoice"></i>Lesson {{$courses->lesson}}</span>

                                <span><i class="fa-light fa-user"></i>Student {{$courses->student}}</span>
                            </div>
                            <div class="it-course-details-nav pb-60">
                                <nav>
                                    <div class="nav nav-tab" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">overview</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">curriculum</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">instructor</button>
                                        <button class="nav-link" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews" type="button" role="tab" aria-controls="nav-reviews" aria-selected="false">reviews</button>
                                    </div>
                                </nav>
                            </div>
                            <div class="it-course-details-content">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="it-course-details-wrapper">
                                            <div class="it-evn-details-text mb-40">
                                                <h6 class="it-evn-details-title-sm pb-5">Course Description</h6>
                                                <p>{!! $courses->description !!}
                                                </p>
                                            </div>
{{--                                            <div class="it-evn-details-text">--}}
{{--                                                <h6 class="it-evn-details-title-sm pb-5">What Will I Learn From This Course?</h6>--}}
{{--                                                <p>--}}
{{--                                                    {!! $courses->foundation !!} <br>--}}
{{--                                                    {!! $courses->intermediate !!} <br>--}}
{{--                                                    {!! $courses->advanced !!}--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="it-course-details-wrapper">
                                            <div class="it-evn-details-text mb-40">
                                                <h6 class="it-evn-details-title-sm pb-5">Basic</h6>
                                                <p>
                                                    {!! $courses->foundation !!}

                                                </p>
                                                <h6 class="it-evn-details-title-sm pb-5">Intermediate</h6>
                                                <p>{!! $courses->intermediate !!} </p>
                                                <h6 class="it-evn-details-title-sm pb-5">Advanced</h6>

                                                <p>   {!! $courses->advanced !!} </p>


                                            </div>
{{--                                            <div class="it-evn-details-text">--}}
{{--                                                <h6 class="it-evn-details-title-sm pb-5">What Will I Learn From This Course?</h6>--}}
{{--                                                <p>Himenaeos. Vestibulum sollicitudin varius mauris non dignissim. Sed quis iaculis--}}
{{--                                                    est. Nulla quam neque,--}}
{{--                                                    interdum vitae fermentum lacinia, interdum eu magna. Mauris non posuere tellus.--}}
{{--                                                    Donec quis euismod--}}
{{--                                                    tellus. Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id--}}
{{--                                                    magna hendrerit sagittis--}}
{{--                                                    Nullam sed mi non odio feugiat volutpat sit amet nec elit. Maecenas id hendrerit--}}
{{--                                                    ipsum--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="it-course-details-wrapper">
                                            <div class="it-evn-details-text mb-40">
                                                <h6 class="it-evn-details-title-sm pb-5">Instructor</h6>
                                                <div class="it-course-author pb-15">
                                                    @if($courses->teams->isNotEmpty())
                                                        @foreach($courses->teams as $team)
                                                            {{ $team->name }}

                                                        @endforeach
                                                    @else

                                                        No Trainer Assigned
                                                    @endif
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                                        <div class="it-course-details-wrapper">
                                            <div class="it-evn-details-text mb-40">
                                                <h6 class="it-evn-details-title-sm pb-5">Course Description</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore
                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                    nisi ut aliquip ex ea
                                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia deserunt mollit anim..
                                                </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore
                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                    nisi ut aliquip ex ea
                                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum..</p>
                                            </div>
                                            <div class="it-evn-details-text">
                                                <h6 class="it-evn-details-title-sm pb-5">What Will I Learn From This Course?</h6>
                                                <p>Himenaeos. Vestibulum sollicitudin varius mauris non dignissim. Sed quis iaculis
                                                    est. Nulla quam neque,
                                                    interdum vitae fermentum lacinia, interdum eu magna. Mauris non posuere tellus.
                                                    Donec quis euismod
                                                    tellus. Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id
                                                    magna hendrerit sagittis
                                                    Nullam sed mi non odio feugiat volutpat sit amet nec elit. Maecenas id hendrerit
                                                    ipsum
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="it-evn-sidebar-box it-course-sidebar-box">
                            <div class="it-evn-sidebar-thumb mb-30">
                                <img src="{{ asset('storage/' . $courses->image) }}" alt>
                            </div>





                            <div class="it-course-sidebar-rate-box pb-20">
                                <div class="it-course-sidebar-rate d-flex justify-content-between align-items-center">
                                    <span>course fee</span>
                                    <span class="rate">{{$courses->price}}</i> BDT</span>
                                </div>

                            </div>

                            @auth
                                @if(auth()->user()->role === 'a' || auth()->user()->role === 't')
                                    @csrf
                                    <p class="text-danger">Admins and trainers cannot enroll in courses.</p>

                                @else
                                   <form id="enrollForm" method="POST" action="{{ route('pay', ['course_id' => $courses->id]) }}">
                                     @csrf
                                     <input type="hidden" name="total_amount" id="total_amount" value="{{ $courses->price }}"/>

                            <input type="hidden" name="course_id" value="{{ $courses->id }}">
                            <input type="radio" id="fullPayment" name="payment_option" value="full" checked>
                            <label for="fullPayment">Full Payment</label><br>

                             <!-- Partial Payment -->
                            <input type="radio" id="partialPayment" name="payment_option" value="partial">
                            <label for="partialPayment">Partial Payment</label><br>

                            <button type="submit" class="it-btn w-100 text-center mb-20">
                                Enroll Now
                            </button>



                        </form>
                                @endif
                            @else

                                <p class="text-danger">You need to be logged in to enroll in the course.</p>
                            @endauth





                            <div class="it-evn-sidebar-list">
                                <ul>

                                    <li><span>Admision End:</span><span>{{ $courses->admission_ends }}</span></li>
                                    <li><span>Class Starts:</span><span>{{$courses->class_starts}}</span></li>
{{--                                    <li><span>skill level</span><span>Basic</span></li>--}}
                                    <li><span>class day</span><span>{{ $courses->classday }}</span></li>
                                    <li><span>language</span><span>Bangla</span></li>
                                </ul>
                            </div>
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

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('enrollForm').addEventListener('submit', function () {

            const paymentOption = document.querySelector('input[name="payment_option"]:checked').value;

            document.getElementById('total_amount').value = (paymentOption === 'partial') ? '{{ $courses->price / 2 }}' : '{{ $courses->price }}';
        });
    });
</script>


@endsection
