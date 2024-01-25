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

                @if (auth()->user() == null)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login/Sign up</a>
                    </li>
                @elseif(auth()->user() != null)
                @if(auth()->user()->role=='a')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">Panel</a>
        </li>
            {{-- trainer profile --}}
          @elseif(auth()->user()->role=='t')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('trainer.profile') }}"> trainer profile</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">Profile</a>
        </li>
    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('log_out') }}">Logout</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</section>
