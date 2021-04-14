<li class="nav-item {{ Request::is('aboutMeV2s*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('aboutMeV2s.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>About Me V2S</span>
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



<li class="nav-item {{ Request::is('uploads*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('uploads.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Uploads</span>
    </a>
</li>
<li class="nav-item {{ Request::is('uploadDatatables*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('uploadDatatables.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Upload Datatables</span>
    </a>
</li>
<li class="nav-item {{ Request::is('crypt*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('crypt_index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Cryptography</span>
    </a>
</li>
