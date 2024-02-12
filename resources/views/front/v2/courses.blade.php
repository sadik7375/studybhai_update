@extends('front.v2.main')

@section('content')


<main>

<div class="it-breadcrumb-area it-breadcrumb-bg" data-background= "{{ asset('assets/img/index/Course.png') }}">

<div class="container">
<div class="row ">
<div class="col-md-12">
<div class="it-breadcrumb-content z-index-3 text-center">
<div class="it-breadcrumb-title-box">
<h3 class="it-breadcrumb-title">COURSES</h3>
</div>
<div class="it-breadcrumb-list-wrap">
<div class="it-breadcrumb-list">
<!-- <span><a href="index.html">home</a></span>
<span class="dvdr">//</span>
<span>COURSE 01</span> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>



<div class="it-course-area p-relative grey-bg pt-120 pb-120">
<div class="container">
<div class="row">




    {{--    --------------------------------------start-----------------------------------}}

    @foreach ($courses as $course)
<div class="col-xl-4 col-lg-4 col-md-6 mb-30">
<div class="it-course-item">
<div class="it-course-thumb mb-20 p-relative">
<a href="course-details.html"><img src="{{ asset('storage/' . $course->image) }}" alt></a>

</div>
<div class="it-course-content">
{{--<div class="it-course-rating mb-10">--}}
{{--<i class="fa-sharp fa-solid fa-star"></i>--}}
{{--<i class="fa-sharp fa-solid fa-star"></i>--}}
{{--<i class="fa-sharp fa-solid fa-star"></i>--}}
{{--<i class="fa-sharp fa-solid fa-star"></i>--}}
{{--<i class="fa-sharp fa-regular fa-star"></i>--}}
{{--<span>(4.7)</span>--}}
{{--</div>--}}
<h4 class="it-course-title pb-5"><a href="{{ route('single_course_info', $course->id) }}">{{$course->title}}</a></h4>
<div class="it-course-info pb-15 mb-25 d-flex justify-content-between">
<span><i class="fa-light fa-file-invoice"></i>{{$course->lesson}} Lesson </span>
<span><i class="fa-sharp fa-regular fa-clock"></i>{{$course->duration}}</span>
 <span><i class="fa-light fa-user"></i>{{$course->student}} Student</span>
</div>
{{-- <div class="it-course-author pb-15">
    <img src="assets/img/course/avata-1.png" alt>
    <span>By <i>Angela</i> in <i>Development</i></span>
    </div> --}}
<div class="it-course-price-box d-flex justify-content-between">
<span><i>{{$course->price}} </i>BDT</span>
<a href="{{ route('single_course_info', $course->id) }}"><i class="fa-light fa-cart-shopping"></i>Enroll now</a>
</div>
</div>
</div>
</div>
    @endforeach





    {{--    --------------------------------------end-----------------------------------}}

</div>
</div>



</div>

</main>





@endsection
