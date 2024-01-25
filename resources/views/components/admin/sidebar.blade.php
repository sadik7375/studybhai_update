

{{-- --------------------------------------------- Course --------------------------------------------- --}}
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
        {{-- <i class="fas fa-laugh-wink"></i> --}}
    </div>
    <div class="sidebar-brand-text mx-3">Admin Panel</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">

    <a class="nav-link" href="{{ url('/') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Home</span></a>

    <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
        aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Courses</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{ route('course.create') }}">Create Course</a>
            <a class="collapse-item" href="{{ route('course.index') }}">View Course</a>
            <a class="collapse-item" href="{{ route('assign.courses') }}">Assign Courses</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Orders" aria-expanded="true"
       aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Orders</span>
    </a>
    <div id="Orders" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
{{--            <h6 class="collapse-header">Custom Components:</h6>--}}
{{--            <a class="collapse-item" href="{{ route('course.create') }}">Create Course</a>--}}
            <a class="collapse-item" href="{{ route('order.index') }}">View Orders</a>
        </div>
    </div>
</li>

{{-- --------------------------------------------- Course --------------------------------------------- --}}

{{-- --------------------------------------------- Feedback --------------------------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Feedback" aria-expanded="true"
        aria-controls="Feedback">
        <i class="fas fa-fw fa-cog"></i>
        <span>Feedbacks</span>
    </a>
    <div id="Feedback" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{ route('feedback.create') }}">Create Feedback</a>
            <a class="collapse-item" href="{{ route('feedback.index') }}">View Feedbacks</a>
        </div>
    </div>
</li>

{{-- --------------------------------------------- Feedback --------------------------------------------- --}}

{{-- --------------------------------------------- Team --------------------------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#team" aria-expanded="true"
        aria-controls="team">
        <i class="fas fa-fw fa-cog"></i>
        <span>Team</span>
    </a>
    <div id="team" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{ route('team.create') }}">Create Team</a>
            <a class="collapse-item" href="{{ route('team.index') }}">View members</a>

        </div>
    </div>
</li>

{{-- --------------------------------------------- Team --------------------------------------------- --}}

{{-- --------------------------------------------- Footer --------------------------------------------- --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Footer" aria-expanded="true"
        aria-controls="Footer">
        <i class="fas fa-fw fa-cog"></i>
        <span>Footer</span>
    </a>
    <div id="Footer" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{ route('footer.create') }}">Create Footer</a>
            <a class="collapse-item" href="{{ route('footer.index') }}">View Footer</a>
        </div>
    </div>
</li>

{{-- --------------------------------------------- Footer --------------------------------------------- --}}
