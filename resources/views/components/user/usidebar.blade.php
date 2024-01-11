
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">




    <li class="nav-item">

        {{-------------------My Courses--------------------}}
        <a class="nav-link" href="{{route("usercourse")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>My Courses</span>
        </a>
{{-------------------Edit Profile--------------------}}
        <a class="nav-link" href="{{route("editprofile")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Edit Profile</span>
        </a>
        {{-------------------Settings--------------------}}
        <a class="nav-link" href="{{ route('settings') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span>
        </a>
    </li>
    <hr class="sidebar-divider">
</ul>
