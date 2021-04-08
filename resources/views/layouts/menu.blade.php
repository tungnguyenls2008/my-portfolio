<li class="nav-item {{ Request::is('abouts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('abouts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Abouts</span>
    </a>
</li>
<li class="nav-item {{ Request::is('stories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('stories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Stories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('goals*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('goals.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Goals</span>
    </a>
</li>
<li class="nav-item {{ Request::is('testimonies*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('testimonies.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Testimonies</span>
    </a>
</li>
<li class="nav-item {{ Request::is('skills*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('skills.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Skills</span>
    </a>
</li>
<li class="nav-item {{ Request::is('skillDetails*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('skillDetails.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Skill Details</span>
    </a>
</li>
<li class="nav-item {{ Request::is('doneProjects*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('doneProjects.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Done Projects</span>
    </a>
</li>
<li class="nav-item {{ Request::is('blogs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('blogs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Blogs</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('welcome') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Back to Frontend</span>
    </a>
</li>
