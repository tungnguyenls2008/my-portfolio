<li class="nav-item dropdown models">
    <a class="nav-link" style="margin-right: 10px" data-toggle="dropdown" href="#" role="button"
       aria-haspopup="true" aria-expanded="false">
        <i class="nav-icon icon-cursor"></i>
        Models configuration
    </a>
    <div class="dropdown-menu">
    <a class="dropdown-item {{ Request::is('aboutMeV2s*') ? 'active' : '' }}" href="{{ route('aboutMeV2s.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>About Me V2S</span>
    </a>
    <a class="dropdown-item {{ Request::is('stories*') ? 'active' : '' }}" href="{{ route('stories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Stories</span>
    </a>
    <a class="dropdown-item {{ Request::is('goals*') ? 'active' : '' }}" href="{{ route('goals.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Goals</span>
    </a>
    <a class="dropdown-item {{ Request::is('testimonies*') ? 'active' : '' }}" href="{{ route('testimonies.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Testimonies</span>
    </a>
    <a class="dropdown-item {{ Request::is('skills*') ? 'active' : '' }}" href="{{ route('skills.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Skills</span>
    </a>
    <a class="dropdown-item {{ Request::is('skillDetails*') ? 'active' : '' }}" href="{{ route('skillDetails.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Skill Details</span>
    </a>
    <a class="dropdown-item {{ Request::is('doneProjects*') ? 'active' : '' }}" href="{{ route('doneProjects.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Done Projects</span>
    </a>
    <a class="dropdown-item {{ Request::is('blogs*') ? 'active' : '' }}" href="{{ route('blogs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Blogs</span>
    </a>

</div>
</li>


<li class="nav-item dropdown">
    <a class="nav-link" style="margin-right: 10px" data-toggle="dropdown" href="#" role="button"
       aria-haspopup="true" aria-expanded="false">
        <i class="nav-icon icon-cursor"></i>
        Miscellaneous tools
    </a>
    <div class="dropdown-menu">
    <a class="dropdown-item {{ Request::is('uploads*') ? 'active' : '' }}" href="{{ route('uploads.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Uploads</span>
    </a>

    <a class="dropdown-item {{ Request::is('uploadDatatables*') ? 'active' : '' }}" href="{{ route('uploadDatatables.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Upload Datatables</span>
    </a>

    <a class="dropdown-item {{ Request::is('crypt*') ? 'active' : '' }}" href="{{ route('crypt_index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Cryptography</span>
    </a>

    </div>
</li>


