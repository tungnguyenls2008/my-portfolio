<nav id="colorlib-main-nav" role="navigation">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
    <div class="js-fullheight colorlib-table">
        <div class="colorlib-table-cell js-fullheight">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
                        <button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="{{route('work')}}">Work</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li> <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a></li>
                            @else
                                <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li>

                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="head-title">Works</h2>
                    <a href="images/work-1.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-1.jpg);">
                        <span><i class="icon-search3"></i></span>
                    </a>
                    <a href="images/work-2.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-2.jpg);">
                        <span><i class="icon-search3"></i></span>
                    </a>
                    <a href="images/work-3.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-3.jpg);">
                        <span><i class="icon-search3"></i></span>
                    </a>
                    <a href="images/work-4.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-4.jpg);">
                        <span><i class="icon-search3"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
