<section class="navbar-section-class">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="navbar-logo"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 mx-auto">
                <input class="form-control mr-sm-2 input-box" type="search" placeholder="" aria-label="Search"/>
                <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                      Search
                    </button> -->
            </form>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('showcourses.index') }}">Course</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('team_info') }}">Team</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login/Register</a>
                </li>


            </ul>
        </div>
    </nav>
</section>
