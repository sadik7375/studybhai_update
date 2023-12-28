<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudyBhai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />


    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <!-- ------------------------------------------------- team section -------------------------------------------------  -->

    <br /><br /><br />

    <section class="course-seection">
        <div class="course-seection-div">
            <div>


                <p class="our_team_members_paragraph_text">Our Team Members</p>
                <hr>

                {{-- ------------------------- new team code -------------------------  --}}


                @php
                    $categories = ['team', 'advisor', 'trainer', 'special_trainer', 'guest_trainer', 'alumni'];

                    $categoryNames = [
                        'team' => 'Team',
                        'advisor' => 'Advisor',
                        'trainer' => 'Trainer',
                        'special_trainer' => 'Special Trainer',
                        'guest_trainer' => 'Guest Trainer',
                        'alumni' => 'Alumni',
                    ];
                @endphp

                @foreach ($categories as $category)
                    <br>
                    @php
                        $categoryTeams = $teams->where('category', $category);
                    @endphp

                    @if ($categoryTeams->isNotEmpty())
                        <div class="row">
                            <div class="col-12">
                                <h2 class="our_team_secondary_line">{{ $categoryNames[$category] }}</h2>
                            </div>
                            @foreach ($categoryTeams as $team)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="our-team">
                                        <div class="picture">
                                            <img class="img-fluid"
                                                src="https://upload.wikimedia.org/wikipedia/commons/1/10/Ruizanglada_-_Picador_Caballo_y_Toro_130x130..jpg">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="name">{{ $team->title }}</h3>
                                            <h4 class="title">{{ $team->profession }}</h4>
                                            <h4 class="title">{{ $team->expertise }}</h4>
                                        </div>
                                        <ul class="social">
                                            <br>
                                            {{-- <li><a href="https://codepen.io/collection/XdWJOQ/"
                                                    class="fa-brands fa-facebook" style="color: white"
                                                    aria-hidden="true"></a></li> --}}
                                            {{-- <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter"
                                                    aria-hidden="true"></a></li>
                                            <li><a href="https://codepen.io/collection/XdWJOQ/"
                                                    class="fa fa-google-plus" aria-hidden="true"></a></li>
                                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin"
                                                    aria-hidden="true"></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @endforeach



                {{-- <div class="container">

                    <p class="our_team_paragraph">Advisor</p>

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="our-team">
                                <div class="picture">
                                    <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
                                </div>
                                <div class="team-content">
                                    <h3 class="name">Michele Miller</h3>
                                    <h4 class="title">Web Developer</h4>
                                    <h4 class="title">Expertise</h4>
                                </div>
                                <ul class="social">
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook"
                                            aria-hidden="true"></a></li>
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter"
                                            aria-hidden="true"></a></li>
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus"
                                            aria-hidden="true"></a></li>
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin"
                                            aria-hidden="true"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="our-team">
                                <div class="picture">
                                    <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
                                </div>
                                <div class="team-content">
                                    <h3 class="name">Patricia Knott</h3>
                                    <h4 class="title">Web Developer</h4>
                                    <h4 class="title">Expertise</h4>
                                </div>
                                <ul class="social">
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook"
                                            aria-hidden="true"></a></li>
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter"
                                            aria-hidden="true"></a></li>
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus"
                                            aria-hidden="true"></a></li>
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin"
                                            aria-hidden="true"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="our-team">
                                <div class="picture">
                                    <img class="img-fluid" src="https://picsum.photos/130/130?image=856">
                                </div>
                                <div class="team-content">
                                    <h3 class="name">Justin Ramos</h3>
                                    <h4 class="title">Web Developer</h4>
                                    <h4 class="title">Expertise</h4>
                                </div>
                                <ul class="social">
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook"
                                            aria-hidden="true"></a></li>
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter"
                                            aria-hidden="true"></a></li>
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus"
                                            aria-hidden="true"></a></li>
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin"
                                            aria-hidden="true"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="our-team">
                                <div class="picture">
                                    <img class="img-fluid" src="https://picsum.photos/130/130?image=836">
                                </div>
                                <div class="team-content">
                                    <h3 class="name">Mary Huntley</h3>
                                    <h4 class="title">Web Developer</h4>
                                    <h4 class="title">Expertise</h4>
                                </div>
                                <ul class="social">
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook"
                                            aria-hidden="true"></a></li>
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter"
                                            aria-hidden="true"></a></li>
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus"
                                            aria-hidden="true"></a></li>
                                    <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin"
                                            aria-hidden="true"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}


                {{-- ------------------------- new team code -------------------------  --}}

            </div>
        </div>
    </section>

    <!-- ------------------------------------------------- team section -------------------------------------------------  -->


    <!-- ------------------------------------------------- footer -seventh section ------------------------------------------------- -->

    <x-user.footer></x-user.footer>

    <!-- ------------------------------------------------- footer -seventh section ------------------------------------------------- -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
