@extends('front.v2.main')

@section('content')

    <main>

        <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="assets/img/breadcrumb/breadcrumb.jpg">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="it-breadcrumb-content z-index-3 text-center">
                            <div class="it-breadcrumb-title-box">
                                <h3 class="it-breadcrumb-title">TEACHER</h3>
                            </div>
                            <div class="it-breadcrumb-list-wrap">
                                <div class="it-breadcrumb-list">
                                    <span><a href="index.html">home</a></span>
                                    <span class="dvdr">//</span>
                                    <span>TEACHER</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="it-team-3-area it-team-3-style-2  it-team-3-style-3 pt-110 pb-90">
            <div class="container">
                <div class="row">

                    {{-- <div class="col"></div> --}}

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
                                        <span>{{ $team->profession }}</span><br>
                                        <span>{{ $team->expertise }}</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col"></div> --}}


                </div>
            </div>
        </div>

    </main>

@endsection
