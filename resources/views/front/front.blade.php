<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudyBhai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}" />

    <style>
        form {
            display: flex;
            justify-content: center;
        }

        input {
            margin-right: 0.5rem;
        }
    </style>
</head>

<body>
    <!-- ------------------------------------------------- navbar ------------------------------------------------- -->

    <x-user.navbar></x-user.navbar>

    <!-- ------------------------------------------------- navbar ------------------------------------------------- -->

    <!-- ------------------------------------------------- second section ------------------------------------------------- -->

    <section class="second-section">
        <div class="second-section-div">
            <div>
                <div class="row" style="margin: 0; padding: 0">
                    <div class="col"></div>

                    <div class="col-md-6 section-section_leftside_child_div">
                        <div>
                            <div>
                                <div>
                                    <p class="second_left_section_heading">
                                        Build a rewarding career in the Advanced technological era
                                        with our skills development programs.
                                    </p>
                                </div>
                                <div class="second_left_section_p_div">
                                    <p class="second_left_section_p">
                                        Our programs are aimed to creating tech generation. We
                                        enhance our commitment to skill development and growth in
                                        society by providing excellent instruction and analyzing
                                        real-world job circumstances through collaboration with
                                        tech professionals.
                                    </p>
                                </div>
                                <div class="second_left_section_p_div">
                                    <button class="start-learning-button">
                                        Start Learning
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div>
                            <img src="{{ asset('assets/images/second_container_image.png') }}" alt=""
                                class="img-fluid second-image-section" />
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------- second section ------------------------------------------------- -->

    <!-- ------------------------------------------------- third section ------------------------------------------------- -->

    <section class="third-section">
        <div class="third-section-title">
            <p class="third-section-title_p">Why StudyBhai?</p>
        </div>

        <div>
            <div class="third-section-margin">
                <div class="row" style="margin: 0; padding: 0">
                    <div class="col-md-4 mt-4">
                        <div class="card third-section-learning-box" style="width: auto">
                            <div class="card-body">
                                <h5 class="third-section-learning-box_p1">
                                    Overcome the Lack of <br />
                                    Academic Learning
                                </h5>
                                <p class="third-section-learning-box_p2">
                                    We are focused to teach the core concept of technology which
                                    is not depended on stuttering theoretical concepts we got at
                                    our universities.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="card third-section-learning-box" style="width: auto">
                            <div class="card-body">
                                <h5 class="third-section-learning-box_p1">
                                    Interaction with <br />
                                    Instructor
                                </h5>
                                <p class="third-section-learning-box_p2">
                                    Offline training allows students to interact face-to-face
                                    with instructors and peers. This can facilitate better
                                    understanding, networking, and the immediate resolution of
                                    queries.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="card third-section-learning-box" style="width: auto">
                            <div class="card-body">
                                <h5 class="third-section-learning-box_p1">
                                    Focused Learning <br />
                                    Environment
                                </h5>
                                <p class="third-section-learning-box_p2">
                                    Offline programs often provide on-site technical support,
                                    ensuring that equipment and software issues are promptly
                                    resolved.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="card third-section-learning-box" style="width: auto">
                            <div class="card-body">
                                <h5 class="third-section-learning-box_p1">
                                    Certification <br />
                                </h5>
                                <p class="third-section-learning-box_p2">
                                    Learners can earn industry-recognized certifications which
                                    can enhance their career prospects and validate skills to
                                    potential employers.
                                    <br /><br />
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="card third-section-learning-box" style="width: auto">
                            <div class="card-body">
                                <h5 class="third-section-learning-box_p1">
                                    Job Interview Support
                                </h5>
                                <p class="third-section-learning-box_p2">
                                    We understand that education is not complete without
                                    successful career transitions. We provide expert guidance on
                                    resume building, cover letter writing, and optimizing
                                    LinkedIn profiles to help you stand out to potential
                                    employers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------- third section ------------------------------------------------- -->

    <!-- ------------------------------------------------- forth section ------------------------------------------------- -->

    <section class="forth-section">
        <div class="forth-section-div">
            <div class="row" style="margin: 0; padding: 0">
                <div class="col-md-3">
                    <div>
                        <div>
                            <p class="center-class third-section-learning-box_p1">
                                Total Student
                            </p>
                        </div>
                        <div>
                            <p class="center-class third-section-learning-box_p1">100+</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div>
                        <div>
                            <p class="center-class third-section-learning-box_p1">
                                Mentors
                            </p>
                        </div>
                        <div>
                            <p class="center-class third-section-learning-box_p1">20+</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div>
                        <div>
                            <p class="center-class third-section-learning-box_p1">Course</p>
                        </div>
                        <div>
                            <p class="center-class third-section-learning-box_p1">2+</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div>
                        <div>
                            <p class="center-class third-section-learning-box_p1">
                                Active Students
                            </p>
                        </div>
                        <div>
                            <p class="center-class third-section-learning-box_p1">50+</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------- forth section ------------------------------------------------- -->

    <!-- ------------------------------------------------- fifth section ------------------------------------------------- -->

    <section class="fifth-section" id="fifth-section">
        <div class="fifth-section-div">
            <div class="third-section-title">
                <p class="third-section-title_p">Explore Our Course</p>
                <p class="fifth-section-learning-box_p3">
                    Find your preferred courses to develop your career
                </p>
            </div>

            <div class="courses-list-padding">
                <div class="row" style="margin: 0; padding: 0">
                    <div class="col"></div>


                    @foreach ($courses as $course)
                        <div class="col-md-3">
                            <div>
                                <div class="card cards-border" style="width: auto">
                                    <img class="card-img-top course-index-image"
                                        src="{{ asset('storage/' . $course->image) }}" alt="Card image cap" />
                                    <div class="card-body courses-paddng">
                                        <div class="card-flex-direction">
                                            <div>

                                            </div>
                                            <div>
                                                <p class="total-students">{{ $course->duration }}</p>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <p class="course-title">
                                                {{ $course->title }}
                                            </p>
                                        </div>

                                        <div class="">
                                            <p class="course-fee">Course Fee : {{ $course->price }} /-</p>
                                        </div>

                                        <br />
                                        <div class="card-flex-direction">
                                            {{--                                    <div> --}}
                                            {{--                                        <p class="total-students" style="font-weight: bold"> --}}
                                            {{--                                            Daniel Scott --}}
                                            {{--                                        </p> --}}
                                            {{--                                    </div> --}}
                                            <div>
                                                <a href="{{ route('single_course_info', $course->id) }}"
                                                    class="view_learning_anchor">
                                                    <button class="view-learning-button">View</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------- fifth section ------------------------------------------------- -->

    <!-- ------------------------------------------------- sixth section ------------------------------------------------- -->

    <section class="fifth-section">
        <div class="fifth-section-div">
            <div class="third-section-title">
                <p class="third-section-title_p">Our Graduates Feedback</p>
            </div>
        </div>
        <br />

        <div>
            <div class="main">
                <div class="testimonials">


                    {{--                <input type="radio" name="testimonial" id="input-testimonial1" checked/> --}}
                    {{--                <input type="radio" name="testimonial" id="input-testimonial2"/> --}}
                    {{--                <input type="radio" name="testimonial" id="input-testimonial3"/> --}}
                    {{--                <input type="radio" name="testimonial" id="input-testimonial4"/> --}}

                    <?php $id = 0; ?>
                    @foreach ($feedbacks as $feedback)
                        <?php $id += 1; ?>
                        <input type="radio" name="testimonial" id="input-testimonial{{ $id }}"
                            {{ $id == 1 ? 'checked' : '' }} />  //why
                    @endforeach

                    <div class="testimonials-inner">

                        @foreach ($feedbacks as $feedback)
                            <div class="testimonial">
                                <div class="testimonial-photo">
                                    <div class="photo-background"></div>
                                    <div class="photo-author"
                                        style="background-image: url({{ asset('storage/' . $feedback->image) }})"></div>
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        {{ $feedback->description }}
                                    </p>
                                </div>
                                <div class="testimonial-author">{{ $feedback->title }}</div>
                            </div>
                        @endforeach

                    </div>
                    <div class="testimonials-arrows">
                        <div class="arrow arrow-left">
                            <?php $id1 = 0; ?>
                            @foreach ($feedbacks as $feedback)
                                <?php $id1 += 1; ?>
                                <label for="input-testimonial{{ $id1 }}"></label>
                            @endforeach

                            <span></span>
                        </div>
                        <div class="arrow arrow-right">
                            <?php $id2 = 0; ?>
                            @foreach ($feedbacks as $feedback)
                                <?php $id2 += 1; ?>
                                <label for="input-testimonial{{ $id2 }}"></label>
                            @endforeach


                            <span></span>
                        </div>
                    </div>
                    <div class="testimonials-bullets">

                        <?php $id3 = 0; ?>
                        @foreach ($feedbacks as $feedback)
                            <?php $id3 += 1; ?>

                            <label for="input-testimonial{{ $id3 }}">
                                <div class="bullet">
                                    <div>
                                        <span></span>
                                    </div>
                                </div>
                            </label>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------- sixth section ------------------------------------------------- -->

    <!-- ------------------------------------------------- footer -seventh section ------------------------------------------------- -->

    <x-user.footer></x-user.footer>

    <!-- ------------------------------------------------- footer -seventh section ------------------------------------------------- -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>



<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>




</body>
</body>

</html>
