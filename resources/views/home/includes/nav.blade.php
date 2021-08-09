<div class="bg-light fixed-top py-1">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container position-relative">
            <div class="logo_img navbar-brand">
                <a href="/"><img src="{{asset('images/home/logo.png')}}" alt="Logo" class="logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav menu">

                    <li class="nav-item"><a class="active" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a href="{{route('about')}}">About</a></li>
                    <li class="nav-item position-relative dropdown-parent"><a href="jsvascript:void(0)">Services <i class="fas fa-sort-down"></i></a>
                        <ul class="dropdown position-absolute">
                            <li>
                                <a href="{{route('software-development')}}">Software Development</a>
                            </li>
                            <li>
                                <a href="{{route('web-development')}}">Web Development</a>
                            </li>
                            <li>
                                <a href="{{route('mobile-app')}}">Mobile APP Development</a>
                            </li>
                            <li>
                                <a href="{{route('eCommerce')}}">E-Commerce development</a>
                            </li>
                            <li>
                                <a href="{{route('seo')}}">Search Engine Optimization</a>
                            </li>
                            <li>
                                <a href="{{route('itConsultancy')}}">IT consultancy</a>
                            </li>
                            <li>
                                <a href="{{route('digitalMarketing')}}">Digital Marketing <!-- & Advertising Campaign--></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="blog.html">Blog</a></li>
                    <li class="nav-item"><a href="contact.html">Contact</a></li>
{{--                    <li class="nav-item"><a class="cart" href="#"><i class="fas fa-shopping-cart"></i> <span class="cart_value">0</span></a></li>--}}
                    <div class="d-none d-md-inline-block top-btn">
                        <button id="login_btn" class="primary-btn text-dark support-btn">Log In</button>
                        <button id="signup" class="primary-btn text-dark support-btn">Sign Up</button>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</div>
