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
        /* Add some custom styles to enhance the visual appeal */

        body {
            background-color: #f8f9fa;
        }

        .team-card {
            background-color: #bee3db; /* Default card background color */
            border: 1px solid #dee2e6;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
            margin-bottom: 20px;
        }
        .team-card:hover {
            transform: scale(1.05);
            background-color: #be4dff; /* Card background color on hover */
        }
        .card-body {
            padding: 15px;
            text-align: center;
        }
        .course-seection {
            padding: 60px 0;
            background-color: #ffffff;
        }

        .our_team_members_paragraph_text {
            font-size: 36px;
            font-weight: bold;
            color: rgb(64, 64, 64);
            text-align: center;
        }

        .our_team_secondary_line {
            font-size: 28px;
            font-weight: bold;
            color: #343a40;
        }

        .our-team {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .our-team:hover {
            transform: scale(1.05);
        }

        .picture img {
            width: 100%;
            height: auto;
            border-bottom: 2px solid #007bff;
        }

        .team-content {
            padding: 20px;
            text-align: center;
        }

        .name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #343a40;
        }

        .title {
            font-size: 16px;
            color: #6c757d;
        }

        .social {
            list-style: none;
            padding: 0;
            margin: 15px 0 0 0;
        }

        .social li {
            display: inline-block;
            margin-right: 10px;
            font-size: 20px;
            color: #007bff;
        }
    </style>
</head>

<body>
<!-- ------------------------------------------------- navbar ------------------------------------------------- -->

<x-user.navbar></x-user.navbar>

<!-- ------------------------------------------------- navbar ------------------------------------------------- -->

<!-- ------------------------------------------------- team section -------------------------------------------------  -->

{{--<br /><br /><br />--}}

<section class="course-seection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-4">
                <p class="our_team_members_paragraph_text">Our Team Members</p>
                <hr class="mb-4">
            </div>
            @php
                $categories = ['team', 'advisor', 'trainer', 'special_trainer', 'guest_trainer', 'alumni'];
            @endphp

            @php
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
              <div class="col-12 text-center mb-4">
                        <h2 class="our_team_secondary_line">{{ $categoryNames[$category] }}</h2>
                    </div>
                    @foreach ($categoryTeams as $team)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                            <div class="our-team">
                                <div class="picture">
                                    <img class="img-fluid"
                                         src="{{ asset('storage/' . $team->image) }}">
                                </div>
                                <div class="team-content">
                                    <h4 class="name">{{ $team->name }}</h4>
                                    <h4 class="title">{{ $team->profession }}</h4>
                                    <h4 class="title">Expertise: {{ $team->expertise }}</h4>
                                </div>
                                <ul class="social">
                                    <!-- Add your social media links here -->
                                </ul>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endforeach
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
