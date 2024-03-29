<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shotrcut icon" href="{{ asset('assets/images/logo.svg') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>
<body>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            {{--            <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo.svg') }}" alt="Edica"></a>--}}
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mr-2 mt-2 mt-lg-0 ">
                    <li class="btn btn-outline-warning mr-3">
                        <a class="nav-link" href="{{ route('post.index') }}" style="width: 120px">Main</a>
                    </li>
                    <li class="btn btn-outline-info mr-3">
                        <a class="nav-link" href="{{ route('category.index') }}">Categories</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-4 mt-2 mt-lg-0">
                    <li>
                        <form class="d-flex" action="{{ route('post.index') }}" method="get">
                            <select name="category_id" class="form-select border-secondary
                            rounded" style="color: grey;">
                                <option value="0" selected>All categories</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ isset($_GET['category_id']) && $_GET['category_id'] == $category->id ? ' selected' : '' }}>{{ $category->title }}</option>
                                @endforeach
                            </select>
                            <input type="text" name="search" @if(isset($_GET['search'])) value="{{$_GET['search']}}" @endif class="border-secondary rounded" placeholder="Search"
                                   aria-label="Search" aria-describedby="basic-addon2">
                            <button class="btn btn-outline-secondary rounded" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    @auth()
                        <li>
                            <a class="mr-3 nav-link btn btn-outline-primary" href="{{ route('personal.main.index') }}" style="width: 100px"><i class="fas fa-user"></i></a>
                            {{--nav-link - default black color text--}}
                        </li>
                        <form action="{{ route('logout') }}" class="nav-item" method="post">
                            @csrf
                            <button type="submit" class="nav-link btn btn-outline-warning" style="width: 100px">
                                <i class="fas fa-sign-out-alt" role="button"></i>
                            </button>
{{--                            <input type="submit" class="btn font-weight-bold" value="Logout">--}}
                        </form>
                    @endauth
                    @guest()
                        <li class="mr-3">
                            <a class="nav-link btn btn-primary" href="{{ route('login') }}"> {{ __('Sign in') }}</a>
                        </li>
                        <li class="">
                            <a class="nav-link btn btn-warning" href="{{ route('register') }}"> {{ __('Sign up') }}</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<section class="mt-5 edica-footer-banner-section">
    <div class="container">
        <div class="footer-banner" data-aos="fade-up">
            <h1 class="banner-title">Download it now.</h1>
            <div class="banner-btns-wrapper">
                <button class="btn btn-success"><img src="{{ asset('assets/images/apple@1x.svg') }}" alt="ios"
                                                     class="mr-2"> App Store
                </button>
                <button class="btn btn-success"><img src="{{ asset('assets/images/android@1x.svg') }}" alt="android"
                                                     class="mr-2"> Google Play
                </button>
            </div>
            <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or
                service.</p>
        </div>
    </div>
</section>
<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="#" class="footer-brand-wrapper">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="edica logo">
                </a>
                <p class="contact-details">hello@edica.com</p>
                <p class="contact-details">+23 3000 000 00</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!"><i class="fab fa-twitter"></i></a>
                    <a href="#!"><i class="fab fa-behance"></i></a>
                    <a href="#!"><i class="fab fa-dribbble"></i></a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">Company</a>
                    <a href="#!" class="nav-link">Android App</a>
                    <a href="#!" class="nav-link">ios App</a>
                    <a href="#!" class="nav-link">Blog</a>
                    <a href="#!" class="nav-link">Partners</a>
                    <a href="#!" class="nav-link">Careers</a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">FAQ</a>
                    <a href="#!" class="nav-link">Reporting</a>
                    <a href="#!" class="nav-link">Block Storage</a>
                    <a href="#!" class="nav-link">Tools & Integrations</a>
                    <a href="#!" class="nav-link">API</a>
                    <a href="#!" class="nav-link">Pricing</a>
                </nav>
            </div>
            <div class="col-md-3">
                <div class="dropdown footer-country-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-gb flag-icon-squared"></span> United Kingdom <i
                            class="fas fa-chevron-down ml-2"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-us flag-icon-squared"></span> United States
                        </button>
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-au flag-icon-squared"></span> Australia
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-content">
            <nav class="nav footer-bottom-nav">
                <a href="#!">Privacy & Policy</a>
                <a href="#!">Terms</a>
                <a href="#!">Site Map</a>
            </nav>
            <p class="mb-0">© Edica. 2020 <a href="https://www.bootstrapdash.com" target="_blank"
                                             rel="noopener noreferrer" class="text-reset">bootstrapdash</a> . All rights
                reserved.</p>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
