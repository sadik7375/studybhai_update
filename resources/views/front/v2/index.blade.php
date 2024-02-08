@extends('front.v2.main')

@section('content')

    <main>
        <div class="it-hero-3-area theme-bg-2">
            <div class="it-hero-3-shape-1">
                <img src="assets/img/hero/hero-3-shape1.png" alt/>
            </div>
            <div class="it-hero-3-shape-2">
                <img src="assets/img/hero/hero-3-shape2.png" alt/>
            </div>
            <div class="it-hero-3-shape-3 d-none d-lg-block">
                <img src="assets/img/hero/hero-3-shape3.png" alt/>
            </div>
            <div class="it-hero-3-shape-4 d-none d-xxl-block">
                <img src="assets/img/hero/hero-3-shape4.png" alt/>
            </div>
            <div class="it-hero-3-shape-5 d-none d-xxl-block">
                <img src="assets/img/hero/hero-3-shape5.png" alt/>
            </div>
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-6">
                        <div class="it-hero-3-title-wrap it-hero-3-ptb">
                            <div class="it-hero-3-title-box">
                                <h1 class="it-hero-3-title">
                                    Learn new skills with <span>studybhai</span>
                                </h1>
                                <p>
                                Blended learning combines traditional classroom instruction with online learning, providing a flexible, interactive environment for diverse learning styles, self-paced study and enhanced student experience through resources and multimedia content.
                                </p>
                            </div>
                            <div class="it-hero-3-btn-box d-flex align-items-center">
                                <a class="it-btn-white" href="course-details.html">
                    <span>
                      Find The Course
                      <svg
                          width="17"
                          height="14"
                          viewBox="0 0 17 14"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                            d="M11 1.24023L16 7.24023L11 13.2402"
                            stroke="currentcolor"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M1 7.24023H16"
                            stroke="currentcolor"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                      </svg>
                    </span>
                                </a>
{{--                                <div class="it-hero-3-client-box d-flex align-items-center">--}}
{{--                    <span--}}
{{--                    >Happy <br/>--}}
{{--                      Students</span--}}
{{--                    >--}}
{{--                                    <img src="assets/img/hero/Happy Students.png" alt/>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="it-hero-3-thumb">

                            <img src="{{ asset('assets/img/career/demo.png') }}" alt/>
                        </div>
                    </div>


                </div>
            </div>
        </div>




        <div class="it-about-3-area pt-120 pb-120 p-relative">
            <div class="it-about-3-left-shape-4 d-none d-lg-block">
                <img src="{{ asset('assets/img/about/benefit-shap-4.png') }}" alt/>
            </div>
            <div class="it-about-3-left-shape-5 d-none d-lg-block">
                <img src="{{ asset('assets/img/about/about-3-shap-5.png') }}" alt/>
            </div>
            <div class="container">
                <div class="row g-0 align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="it-about-3-left-box text-end p-relative">
                            <div class="it-about-3-left-shape-1 d-none d-lg-block">
                                <img src="{{ asset('assets/img/about/about-3-shap-1.png') }}" alt/>
                            </div>
                            <div class="it-about-3-left-shape-2 d-none d-lg-block">
                                <img src="{{ asset('assets/img/about/about-3-shap-2.png') }}" alt/>
                            </div>
                            <div class="it-about-3-thumb">
                                <img src="{{ asset('assets/img/index/benefit.png') }}" alt/>
                            </div>
                        </div>
                    </div>



                    <div id="aboutus" class="col-xl-6 col-lg-6">
                        <div class="it-about-3-title-box">
                <span class="it-section-subtitle-3">
                  <img src="{{ asset('assets/img/about/bg.svg') }}" alt/>
                  about us
                </span>
                            <h2 class="it-section-title-3 pb-30">
                                Benefit from our blended learning expertise and earn valuable
                                <span> know-how to gain essential professional skills.</span>
                            </h2>
                            <p>
                                Unlock valuable professional skills with our expertise in blended learning.Tap into our blended learning <br/>

                            </p>
                        </div>
                        <div class="it-about-3-mv-box">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="it-about-3-mv-item">
                                        <span class="it-about-3-mv-title">OUR MISSION:</span>
                                        <p>
                                            Our goal is to close the achievement gap that exists between ambition and actuality. Our objective is to create a group of tech enthusiasts who can manage the opportunities and challenges brought about by the rapidly changing technological environment.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="it-about-3-mv-item">
                                        <span class="it-about-3-mv-title">OUR VISSION:</span>
                                        <p>
                                            At StudyBhai, we envision everyone not only joining the industry but also succeeding there. Our ideal community for the digital industry is one where dreams come true and enthusiasm is united with purpose.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="it-about-3-btn-box p-relative">
                            <a class="it-btn-yellow" href="{{route("show.courses")}}">
                  <span>
                    Explore
                    <svg
                        width="17"
                        height="14"
                        viewBox="0 0 17 14"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                          d="M11 1.24023L16 7.24023L11 13.2402"
                          stroke="currentcolor"
                          stroke-width="1.5"
                          stroke-miterlimit="10"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                      <path
                          d="M1 7.24023H16"
                          stroke="currentcolor"
                          stroke-width="1.5"
                          stroke-miterlimit="10"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                            </a>
                            <div class="it-about-3-left-shape-3 d-none d-md-block">
                                <img src="{{ asset('assets/img/about/about-3-shap-3.png') }}" alt/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!------------------------ course section -------------------------->


        <div
            class="it-course-area it-course-style-3 it-course-bg p-relative grey-bg pt-120 pb-120"
            data-background="assets/img/course/course-bg.png"
        >
            <div class="container">
                <div class="it-course-title-wrap mb-60">
                    <div class="row align-items-end">
                        <div class="col-xl-7 col-lg-7 col-md-8">
                            <div class="it-course-title-box">
                  <span class="it-section-subtitle-3">
                    <img src="{{ asset('assets/img/about/bg.svg') }}" alt/>
                    Top Popular Course
                  </span>
                                <h4 class="it-section-title-3">
                                    Check out best <span>courses</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-4">
                            <div class="it-course-button text-start text-md-end pt-25">
                                <a class="it-btn-theme-2" href="{{route('show.courses')}}">
                    <span>
                      see More Course
                      <svg
                          width="17"
                          height="14"
                          viewBox="0 0 17 14"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                            d="M11 1.24023L16 7.24023L11 13.2402"
                            stroke="currentcolor"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M1 7.24023H16"
                            stroke="currentcolor"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                      </svg>
                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">

                    @foreach ($courses as $course)
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="it-course-item">
                                <div class="it-course-thumb mb-20 p-relative">
                                    <a href="course-details.html"
                                    ><img src="{{ asset('storage/' . $course->image) }}" alt
                                        /></a>
                                </div>
                                <div class="it-course-content">
                                    {{--                                    <div class="it-course-rating mb-10">--}}
                                    {{--                                        <i class="fa-sharp fa-solid fa-star"></i>--}}
                                    {{--                                        <i class="fa-sharp fa-solid fa-star"></i>--}}
                                    {{--                                        <i class="fa-sharp fa-solid fa-star"></i>--}}
                                    {{--                                        <i class="fa-sharp fa-solid fa-star"></i>--}}
                                    {{--                                        <i class="fa-sharp fa-regular fa-star"></i>--}}
                                    {{--                                        <span>(4.7)</span>--}}
                                    {{--                                    </div>--}}
                                    <h4 class="it-course-title pb-5">
                                        <a href="course-details.html"
                                        >{{ $course->title }}</a
                                        >
                                    </h4>
                                    <div
                                        class="it-course-info pb-15 mb-25 d-flex justify-content-between"
                                    >
                    <span
                    ><i class="fa-light fa-file-invoice"></i>{{ $course->lesson }} Lesson</span
                    >
                                        <span
                                        ><i class="fa-sharp fa-regular fa-clock"></i>{{ $course->duration }}</span
                                        >
                                        <span><i class="fa-light fa-user"></i>{{ $course->student }} Student</span>
                                    </div>

                                    {{-- <div class="it-course-author pb-15">
                                        <img src="assets/img/course/avata-1.png" alt>
                                        <span>By <i>Angela</i> in <i>Development</i></span>
                                        </div> --}}
                                    <div
                                        class="it-course-price-box d-flex justify-content-between"
                                    >
                                        <span><i>{{ $course->price }} </i>BDT</span>
                                        <a href="{{ route('single_course_info', ['id' => $course->id]) }}"
                                        ><i class="fa-light fa-cart-shopping"></i>Enroll Now</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


            </div>
        </div>


        </div>


        <!------------------------ course section end -------------------------->


        <div class="it-value-area pt-120 pb-120 p-relative fix">
            <div class="it-value-shape-1 d-none d-xxl-block">
                <img src="{{ asset('assets/img/value/value-shape-3.jpg') }}" alt/>
            </div>
            <div class="it-value-shape-2 d-none d-xl-block">
                <img src="{{ asset('assets/img/value/value-shape-4.jpg') }}" alt/>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="it-value-title-box">
                <span class="it-section-subtitle-3">
                  <img src="{{ asset('assets/img/about/bg.svg') }}" alt/>
                  Top Popular Course
                </span>
                            <h4 class="it-section-title-3 pb-25">
                                Our Blended E-Learning Platform Is A Very Different <span>Platform</span> Than All
                                <br/>
                                The Others
                            </h4>
                            <p>
                                "Experience the difference with our blended e-learning platform <br/>
                                Stand out from the rest with our innovative approach to education!"



                            </p>
                        </div>
                        <div class="it-progress-bar-wrap">
                            <div class="it-progress-bar-item">
                                <label>Case study success</label>
                                <div class="it-progress-bar">
                                    <div class="progress">
                                        <div
                                            class="progress-bar wow slideInLeft"
                                            data-wow-delay=".1s"
                                            data-wow-duration="2s"
                                            role="progressbar"
                                            data-width="90%"
                                            aria-valuenow="90"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                            style="
                          width: 90%;
                          visibility: visible;
                          animation-duration: 2s;
                          animation-delay: 0.1s;
                          animation-name: slideInLeft;
                        "
                                        >
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="it-progress-bar-item">
                                <label>Happy student</label>
                                <div class="it-progress-bar">
                                    <div class="progress">
                                        <div
                                            class="progress-bar wow slideInLeft"
                                            data-wow-delay=".1s"
                                            data-wow-duration="2s"
                                            role="progressbar"
                                            data-width="82%"
                                            aria-valuenow="82"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                            style="
                          width: 82%;
                          visibility: visible;
                          animation-duration: 2s;
                          animation-delay: 0.1s;
                          animation-name: slideInLeft;
                        "
                                        >
                                            <span>82%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="it-progress-bar-item">
                                <label>Engaging</label>
                                <div class="it-progress-bar">
                                    <div class="progress">
                                        <div
                                            class="progress-bar wow slideInLeft"
                                            data-wow-delay=".1s"
                                            data-wow-duration="2s"
                                            role="progressbar"
                                            data-width="65%"
                                            aria-valuenow="58"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                            style="
                          width: 65%;
                          visibility: visible;
                          animation-duration: 2s;
                          animation-delay: 0.1s;
                          animation-name: slideInLeft;
                        "
                                        >
                                            <span>65%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="it-progress-bar-item">
                                <label>Student Community</label>
                                <div class="it-progress-bar">
                                    <div class="progress">
                                        <div
                                            class="progress-bar wow slideInLeft"
                                            data-wow-delay=".1s"
                                            data-wow-duration="2s"
                                            role="progressbar"
                                            data-width="58%"
                                            aria-valuenow="58"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                            style="
                          width: 58%;
                          visibility: visible;
                          animation-duration: 2s;
                          animation-delay: 0.1s;
                          animation-name: slideInLeft;
                        "
                                        >
                                            <span>98%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="it-value-right-wrap text-end p-relative">
                            <div class="it-value-right-img p-relative">
                                {{-- <img src="{{ asset('assets/img/value/value-1.jpg') }}" alt/> --}}
                                <img src="{{ asset('assets/img/index/classroom.png') }}" alt/>
                                {{-- <a class="it-value-play-btn" href="#"
                                ><i class="fa-sharp fa-solid fa-play"></i
                                    ></a> --}}
                            </div>
                            <div class="it-value-img-shape d-none d-xl-block">
                                <img src="{{ asset('assets/img/value/value-shape-2.jpg') }}" alt/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="it-feature-3-area it-feature-3-bg grey-bg pt-120 pb-90"
            data-background="assets/img/feature/feature-bg.png"
        >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-7 col-md-8">
                        <div class="it-feature-3-title-box text-center mb-60">
                <span class="it-section-subtitle-3">
                  <img src="{{ asset('assets/img/about/bg.svg') }}" alt/>
                  HISTUDY FEATURE
                  <img src="{{ asset('assets/img/about/bg.svg') }}" alt/>
                </span>
                            <h4 class="it-section-title-3">
                                Our best services <br/>

                            </h4>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="it-feature-3-item mb-30 text-center">

                            <div class="it-feature-3-content">
                                <h4 class="it-feature-3-title">
                                    Interactive <br> Learning
                                </h4>
                                <p>
                                    Engaging materials for active participation.Videos, quizzes, and interactive
                                    content.

                                </p>
                            </div>
                            {{--                            <div class="it-feature-3-btn">--}}
                            {{--                                <a class="it-btn-theme-sm" href="service-details.html">--}}
                            {{--                    <span>--}}
                            {{--                      view details--}}
                            {{--                      <svg--}}
                            {{--                          width="17"--}}
                            {{--                          height="14"--}}
                            {{--                          viewBox="0 0 17 14"--}}
                            {{--                          fill="none"--}}
                            {{--                          xmlns="http://www.w3.org/2000/svg"--}}
                            {{--                      >--}}
                            {{--                        <path--}}
                            {{--                            d="M11 1.24023L16 7.24023L11 13.2402"--}}
                            {{--                            stroke="currentcolor"--}}
                            {{--                            stroke-width="1.5"--}}
                            {{--                            stroke-miterlimit="10"--}}
                            {{--                            stroke-linecap="round"--}}
                            {{--                            stroke-linejoin="round"--}}
                            {{--                        />--}}
                            {{--                        <path--}}
                            {{--                            d="M1 7.24023H16"--}}
                            {{--                            stroke="currentcolor"--}}
                            {{--                            stroke-width="1.5"--}}
                            {{--                            stroke-miterlimit="10"--}}
                            {{--                            stroke-linecap="round"--}}
                            {{--                            stroke-linejoin="round"--}}
                            {{--                        />--}}
                            {{--                      </svg>--}}
                            {{--                    </span>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="it-feature-3-item mb-30 text-center">
                            <!-- <div class="it-feature-3-icon">
                                <span><i class="flaticon-study"></i></span>
                            </div> -->
                            <div class="it-feature-3-content">
                                <h4 class="it-feature-3-title">
                                    Experienced Instructors
                                </h4>
                                <p>
                                    Qualified teachers with practical knowledge.Experts in their respective fields.
                                </p>
                            </div>
                            {{--                            <div class="it-feature-3-btn">--}}
                            {{--                                <a class="it-btn-theme-sm" href="service-details.html">--}}
                            {{--                    <span>--}}
                            {{--                      view details--}}
                            {{--                      <svg--}}
                            {{--                          width="17"--}}
                            {{--                          height="14"--}}
                            {{--                          viewBox="0 0 17 14"--}}
                            {{--                          fill="none"--}}
                            {{--                          xmlns="http://www.w3.org/2000/svg"--}}
                            {{--                      >--}}
                            {{--                        <path--}}
                            {{--                            d="M11 1.24023L16 7.24023L11 13.2402"--}}
                            {{--                            stroke="currentcolor"--}}
                            {{--                            stroke-width="1.5"--}}
                            {{--                            stroke-miterlimit="10"--}}
                            {{--                            stroke-linecap="round"--}}
                            {{--                            stroke-linejoin="round"--}}
                            {{--                        />--}}
                            {{--                        <path--}}
                            {{--                            d="M1 7.24023H16"--}}
                            {{--                            stroke="currentcolor"--}}
                            {{--                            stroke-width="1.5"--}}
                            {{--                            stroke-miterlimit="10"--}}
                            {{--                            stroke-linecap="round"--}}
                            {{--                            stroke-linejoin="round"--}}
                            {{--                        />--}}
                            {{--                      </svg>--}}
                            {{--                    </span>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="it-feature-3-item mb-30 text-center">
                            <!-- <div class="it-feature-3-icon">
                                <span><i class="flaticon-booking"></i></span>
                            </div> -->
                            <div class="it-feature-3-content">
                                <h4 class="it-feature-3-title">
                                    Live Q&A Sessions
                                </h4>
                                <p>
                                    Real-time Live discussions with instructors.Students can ask questions and get
                                    immediate answers.
                                </p>
                            </div>
                            {{--                            <div class="it-feature-3-btn">--}}
                            {{--                                <a class="it-btn-theme-sm" href="service-details.html">--}}
                            {{--                    <span>--}}
                            {{--                      view details--}}
                            {{--                      <svg--}}
                            {{--                          width="17"--}}
                            {{--                          height="14"--}}
                            {{--                          viewBox="0 0 17 14"--}}
                            {{--                          fill="none"--}}
                            {{--                          xmlns="http://www.w3.org/2000/svg"--}}
                            {{--                      >--}}
                            {{--                        <path--}}
                            {{--                            d="M11 1.24023L16 7.24023L11 13.2402"--}}
                            {{--                            stroke="currentcolor"--}}
                            {{--                            stroke-width="1.5"--}}
                            {{--                            stroke-miterlimit="10"--}}
                            {{--                            stroke-linecap="round"--}}
                            {{--                            stroke-linejoin="round"--}}
                            {{--                        />--}}
                            {{--                        <path--}}
                            {{--                            d="M1 7.24023H16"--}}
                            {{--                            stroke="currentcolor"--}}
                            {{--                            stroke-width="1.5"--}}
                            {{--                            stroke-miterlimit="10"--}}
                            {{--                            stroke-linecap="round"--}}
                            {{--                            stroke-linejoin="round"--}}
                            {{--                        />--}}
                            {{--                      </svg>--}}
                            {{--                    </span>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="it-feature-3-item mb-30 text-center">
                            <!-- <div class="it-feature-3-icon">
                                <span><i class="flaticon-video"></i></span>
                            </div> -->
                            <div class="it-feature-3-content">
                                <h4 class="it-feature-3-title">
                                    24/7 Technical Support
                                </h4>
                                <p>
                                    Technical Support will be available 24/7.Helps with any technical issues or
                                    concerns.
                                </p>
                            </div>
                            {{--                            <div class="it-feature-3-btn">--}}
                            {{--                                <a class="it-btn-theme-sm" href="service-details.html">--}}
                            {{--                    <span>--}}
                            {{--                      view details--}}
                            {{--                      <svg--}}
                            {{--                          width="17"--}}
                            {{--                          height="14"--}}
                            {{--                          viewBox="0 0 17 14"--}}
                            {{--                          fill="none"--}}
                            {{--                          xmlns="http://www.w3.org/2000/svg"--}}
                            {{--                      >--}}
                            {{--                        <path--}}
                            {{--                            d="M11 1.24023L16 7.24023L11 13.2402"--}}
                            {{--                            stroke="currentcolor"--}}
                            {{--                            stroke-width="1.5"--}}
                            {{--                            stroke-miterlimit="10"--}}
                            {{--                            stroke-linecap="round"--}}
                            {{--                            stroke-linejoin="round"--}}
                            {{--                        />--}}
                            {{--                        <path--}}
                            {{--                            d="M1 7.24023H16"--}}
                            {{--                            stroke="currentcolor"--}}
                            {{--                            stroke-width="1.5"--}}
                            {{--                            stroke-miterlimit="10"--}}
                            {{--                            stroke-linecap="round"--}}
                            {{--                            stroke-linejoin="round"--}}
                            {{--                        />--}}
                            {{--                      </svg>--}}
                            {{--                    </span>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="it-video-area it-video-bg it-video-color p-relative fix pt-100 pb-95"
            data-background="assets/img/video/bg-1-1.jpg"
        >
            <div class="it-video-shape-1 d-none d-lg-block">
                <img src="{{ asset('assets/img/video/shape-1-1.png') }}" alt/>
            </div>
            <div class="it-video-shape-2 d-none d-lg-block">
                <img src="{{ asset('assets/img/video/shape-1-8.png') }}" alt/>
            </div>
            <div class="it-video-shape-3 d-none d-xl-block">
                <img src="{{ asset('assets/img/video/shape-1-3.png') }}" alt/>
            </div>
            <div class="it-video-shape-4 d-none d-lg-block">
                <img src="{{ asset('assets/img/video/shape-1-4.png') }}" alt/>
            </div>
            <div class="it-video-shape-5 d-none d-lg-block">
                <img src="{{ asset('assets/img/video/shape-1-5.png') }}" alt/>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                        <div class="it-video-content">
                            <span>Join Our Session</span>
                            <h3 class="it-video-title">
                                Call for Admission <br/>
                                <a href="tel:+91958423452">019XXXXXX</a>
                            </h3>



                            {{-- <div class="it-video-button">
                                <a class="it-btn-theme-2" href="contact.html">
                    <span>
                      Join With us
                      <svg
                          width="17"
                          height="14"
                          viewBox="0 0 17 14"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                            d="M11 1.24023L16 7.24023L11 13.2402"
                            stroke="currentcolor"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M1 7.24023H16"
                            stroke="currentcolor"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                      </svg>
                    </span>
                                </a>
                            </div> --}}




                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-3 col-sm-3">
                        <div
                            class="it-video-play-wrap d-flex justify-content-start justify-content-md-end align-items-center"
                        >
                            <div class="it-video-play text-center">
                                <a
                                    class="popup-video play"
                                    href=""
                                ><i class="fas fa-play"></i
                                    ></a>
                                <a class="text" href="#">watch now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div
            class="it-career-area it-career-style-3 it-career-bg p-relative pb-100 pt-120"
        >
            <div class="it-career-shape-3 d-none d-xl-block">
                <img src="{{ asset('assets/img/career/shape-1-2.png') }}" alt/>
            </div>
            <div class="it-career-shape-6 d-none d-xl-block">
                <img src="{{ asset('assets/img/career/shape-1-5.png') }}" alt/>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="it-course-title-box text-center mb-60">
                <span class="it-section-subtitle-3">
                  <img src="{{ asset('assets/img/about/bg.svg') }}" alt/>
                  Top Popular Course
                  <img src="{{ asset('assets/img/about/bg.svg') }}" alt/>
                </span>
                            <h4 class="it-section-title-3">Annual Exam Preparation</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="it-career-item p-relative fix">
                            <div class="it-career-content">
                                <span>Medical Exam</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit sed.
                                </p>
                                <a class="it-btn-yellow mr-15" href="contact.html">
                    <span>
                      Join now
                      <svg
                          width="17"
                          height="14"
                          viewBox="0 0 17 14"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                            d="M11 1.24023L16 7.24023L11 13.2402"
                            stroke="currentcolor"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M1 7.24023H16"
                            stroke="currentcolor"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                      </svg>
                    </span>
                                </a>
                            </div>
                            <div class="it-career-thumb">
                                <img src="{{ asset('assets/img/index/medical.png') }}" alt/>
                            </div>
                            <div class="it-career-shape-1">
                                <img src="{{ asset('assets/img/career/shape-1.png') }}" alt/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="it-career-item p-relative fix">
                            <div class="it-career-content">
                                <span>BCS Exam</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit sed.
                                </p>
                                <a class="it-btn-yellow mr-15" href="contact.html">
                    <span>
                      Join now
                      <svg
                          width="17"
                          height="14"
                          viewBox="0 0 17 14"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                            d="M11 1.24023L16 7.24023L11 13.2402"
                            stroke="currentcolor"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M1 7.24023H16"
                            stroke="currentcolor"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                      </svg>
                    </span>
                                </a>
                            </div>
                            <div class="it-career-thumb">
                                <img src="{{ asset('assets/img/index/bcs.png') }}" alt/>
                            </div>
                            <div class="it-career-shape-1">
                                <img src="{{ asset('assets/img/career/shape-1.png') }}" alt/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div
            class="it-testimonial-3-area"
            data-background="assets/img/testimonial/bg-2.png"
        >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                        <div class="it-testimonial-3-thumb">
                            <img src="{{ asset('assets/img/index/comment.png') }}" alt/>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="it-testimonial-3-box z-index p-relative">
                            <div class="it-testimonial-3-shape-1">
                                <img src="{{ asset('assets/img/testimonial/shape-3-1.png') }}" alt/>
                            </div>
                            <div
                                class="it-testimonial-3-wrapper p-relative"
                                data-background="assets/img/testimonial/bg-3.png"
                            >
                                <div class="it-testimonial-3-quote d-none d-md-block">
                                    <img src="{{ asset('assets/img/testimonial/quot.png') }}" alt/>
                                </div>
                                <div class="swiper-container it-testimonial-3-active">
                                    <div class="swiper-wrapper">
                                        @foreach($feedbacks as $feedback)
                                            <div class="swiper-slide">
                                                <div class="it-testimonial-3-item">
                                                    <div class="it-testimonial-3-content">
                                                        <p>
                                                            {{$feedback->description}}
                                                        </p>
                                                        <div
                                                            class="it-testimonial-3-author-box d-flex align-items-center"
                                                        >
                                                            <div class="it-testimonial-3-avata">
                                                                <img
                                                                    src="{{ asset('storage/' . $feedback->image) }}"
                                                                    alt
                                                                />
                                                            </div>
                                                            <div class="it-testimonial-3-author-info">
                                                                <h5>{{$feedback->title}}</h5>
                                                                <span>student</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="test-slider-dots d-none d-sm-block"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="it-event-area p-relative pt-120 pb-120">
            <div class="it-event-shape-3 d-none d-xxl-block">
                <img src="{{ asset('assets/img/event/shape-1-1.png') }}" alt/>
            </div>
            <div class="it-event-shape-4 d-none d-xl-block">
                <img src="{{ asset('assets/img/event/shape-1-2.png') }}" alt/>
            </div>
            <div class="it-event-shape-5">
                <img src="{{ asset('assets/img/event/shape-1-3.png') }}" alt/>
            </div>
            <div class="it-event-shape-6">
                <img src="{{ asset('assets/img/event/shape-1-4.png') }}" alt/>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="it-event-left">
                            <div class="it-event-title-box">
                  <span class="it-section-subtitle-3">
                    <img src="{{ asset('assets/img/about/bg.svg') }}" alt/>
                    explore Events
                  </span>
                                <h2 class="it-section-title-3 pb-20">
                                    our best events
                                </h2>
                            </div>
                            <div class="it-event-content">
                  {{-- <span
                  >Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod <br/>
                    tempor incididunt ut labore.</span
                  > --}}
                                <p>
                                    Introduction to Machine Learning<br>
                                    IoT Essentials Workshop<br>
                                    Data Analysis Bootcamp<br>
                                    Web Development Crash Course<br>
                                    Project Showcase<br>
                                    Web Development Hackathon<br>
                                    Data Visualization Workshop

                                </p>


                                {{-- <a class="it-btn-theme-2" href="contact.html">
                    <span>
                      admission open
                      <svg
                          width="17"
                          height="14"
                          viewBox="0 0 17 14"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                            d="M11 1.24023L16 7.24023L11 13.2402"
                            stroke="currentcolor"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M1 7.24023H16"
                            stroke="currentcolor"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                      </svg>
                    </span>
                                </a> --}}



                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div
                            class="it-event-thumb-box text-center text-lg-start p-relative"
                        >
                            <div class="it-event-shape-1 d-none d-lg-block">
                                <img src="{{ asset('assets/img/event/shape-1-5.png') }}" alt/>
                            </div>
                            <div class="it-event-shape-2">
                                <img src="{{ asset('assets/img/event/shape-1-6.png') }}" alt/>
                            </div>
                            <div class="it-event-thumb">
                                <img src="{{ asset('assets/img/index/events.png') }}" alt/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="it-team-3-area p-relative z-index pt-110 pb-90">
            <div
                class="it-team-3-bg"
                data-background="assets/img/team/bg-3.png"
            ></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="it-event-title-box text-center pb-40">
                <span class="it-section-subtitle-3">
                  <img src="{{ asset('assets/img/about/bg-2.svg') }}" alt/>
                  Teacher
                  <img src="{{ asset('assets/img/about/bg-2.svg') }}" alt/>
                </span>
                            <h2 class="it-section-title-3">
                                meet our expert Instructor
                            </h2>
                        </div>
                    </div>
                </div>


                {{--                --------------------------trainer show-----------------------------------------}}

                <div class="row">


                    @foreach($teams as $team)
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                            <div class="it-team-3-item text-center">
                                <div class="it-team-3-thumb fix">
                                    <img src="{{ asset('storage/' . $team->image) }}" alt>
                                </div>
                                <div class="it-team-3-content">
                                    <div class="it-team-3-social-box p-relative">
                                        <button>
                                            <i class="fa-light fa-share-nodes"></i>
                                        </button>
                                        <div class="it-team-3-social-wrap">
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="it-team-3-author-box">
                                        <h4 class="it-team-3-title"><a href="teacher-details.html">{{$team->name}}</a>
                                        </h4>
                                        <span>{{ $team->profession }}</span>
                                        <span>{{ $team->expertise }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach











            </div>
        </div>


        </div>
    </main>
@endsection
