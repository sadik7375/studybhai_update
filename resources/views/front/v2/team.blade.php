@extends('front.v2.main')

@section('content')

    <main>

        <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="assets/img/index/background.png">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="it-breadcrumb-content z-index-3 text-center">
                            <div class="it-breadcrumb-title-box">
                                <h3 class="it-breadcrumb-title">TEAM</h3>
                            </div>
{{--                            <div class="it-breadcrumb-list-wrap">--}}
{{--                                <div class="it-breadcrumb-list">--}}
{{--                                    <span><a href="index.html">home</a></span>--}}
{{--                                    <span class="dvdr">//</span>--}}
{{--                                    <span>Team</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="it-team-3-area it-team-3-style-2  it-team-3-style-3 pt-110 pb-90">
            <div class="container">


                <div class="row">
                    @foreach($teams as $team)
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                            <div class="it-team-3-item text-center">
                                <div class="it-team-3-thumb fix" style="height: 200px; overflow: hidden;">
                                    <img src="{{ asset('storage/' . $team->image) }}" alt style="height: 100%; width: 100%; object-fit: cover;">
                                </div>
                                <div class="it-team-3-content" style="height: 240px;">
                                    <div class="it-team-3-social-box p-relative">
                                        <button>
                                            <i class="fa-light fa-share-nodes"></i>
                                        </button>
                                        <div class="it-team-3-social-wrap">
                                            {{-- Add social media links here if needed --}}
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="it-team-3-author-box">
                                        <h4 class="it-team-3-title">{{$team->name}}</h4>
                                        <span>Profession:{{ $team->profession }}</span><br>
                                        <span>Expertise:{{ $team->expertise }}</span>
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
