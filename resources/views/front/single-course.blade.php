<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>StudyBhai</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />

    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}"/>

    <style>
        form {
            display: flex;
            justify-content: center;
        }

        .course-fee-design {
            background-color: #f8f9fa; /* Light gray background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .course-title {
            font-size: 32px;
            font-family: 'Cambria', sans-serif; /* Use Cambria font */
            font-weight: bold;
            color: darkblue; /* Bootstrap primary color */
            text-align: center;
        }

        .course-content {
            font-size: 20px;
            color: #343a40; /* Bootstrap dark color */
            text-align: center;
            margin-top: 15px;
        }

        .payment-buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .payment-buttons button {
            flex: 1;
            margin: 0 5px;
        }

        input {
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<x-user.navbar></x-user.navbar>

<!-- Main Section -->
<br/><br/><br/>

<section class="course-section">
    <div class="course-section-div">
        <div class="row" style="margin: 0; padding: 0">
            <div class="col-md-7">
                <div>
                    <p class="course-title">{{ $course->title }}</p>
                </div>

                <div>
                    <p class="course-content" style="font-weight: bold">
                        What you will learn from the course:
                    </p>

                    <p class="course-content">
                        {!! $course->description !!}
                    </p>
                </div>
            </div>

            <div class="col-md-5">
                <br/><br/>

                <div class="course-fee-design">
                    <div>
                        <p class="text-center third-section-learning-box_p1">
                            Course Fee
                        </p>
                        <p class="text-center third-section-learning-box_p1">{{ $course->price }}/-</p>
                    </div>
                    <div class="mt-4">
                        <p class="center-class">Admission Ends: {{ $course->admission_ends }}</p>
                        <p class="center-class">Class Starts: {{ $course->class_starts }}</p>
                    </div>

                    <div class="payment-buttons">
                        @auth
                            @if(auth()->user()->role === 'a' || auth()->user()->role === 't')
                                @csrf
                                <p class="text-danger">Admins and trainers cannot enroll in courses.</p>
                            @else
                                <form id="enrollForm" method="POST" action="{{ route('pay', ['course_id' => $course->id]) }}">
                                    @csrf
                                    {{-- <input type="hidden" name="total_amount" id="total_amount" value="{{ $course->price }}"/> --}}

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment_option" id="full" value="full" checked>
                                        <label class="form-check-label btn btn-outline-primary" for="fullPayment">Full Payment</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment_option" id="partialPayment" value="partial">
                                        <label class="form-check-label btn btn-outline-success" for="partialPayment">Partial Payment (50%)</label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        Enroll Now
                                    </button>
                                </form>
                            @endif
                        @else
                            <p class="text-danger">You need to be logged in to enroll in the course.</p>
                        @endauth
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>

<!-- Foundation Section -->
<section class="third-section">
    <div class="third-section-title">
        <p></p>
    </div>

    <div>
        <div class="third-section-margin">
            <div class="row" style="margin: 0; padding: 0">
                <div class="col-md-4 mt-4">
                    <div class="card third-section-learning-box" style="width: auto">
                        <div class="card-body">
                            <h5 class="third-section-learning-box_p1">Foundation</h5>
                            {!! $course->foundation !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="card third-section-learning-box" style="width: auto">
                        <div class="card-body">
                            <h5 class="third-section-learning-box_p1">Intermediate</h5>
                            {!! $course->intermediate !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="card third-section-learning-box" style="width: auto">
                        <div class="card-body">
                            <h5 class="third-section-learning-box_p1">Advanced</h5>
                            {!! $course->advanced !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer Section -->
<x-user.footer></x-user.footer>

<!-- Bootstrap JavaScript -->
<!-- Bootstrap JavaScript -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
></script>

{{-- pass course price  --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('enrollForm').addEventListener('submit', function () {

            const paymentOption = document.querySelector('input[name="payment_option"]:checked').value;

            document.getElementById('total_amount').value = (paymentOption === 'partial') ? '{{ $course->price / 2 }}' : '{{ $course->price }}';
        });
    });
</script>

</body>
</html>
