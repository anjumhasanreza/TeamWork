<nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ asset('/ramk') }}">
            <img src="{{ asset('assets/images/Logo.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="47">
            <img src="{{ asset('assets/images/Logo.png') }}" class="card-logo card-logo-light" alt="logo light" height="47">
        </a>
        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                <li class="nav-item">
                    <a class="nav-link active" href="#hero">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#plans">Plans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reviews">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>

            <div class="">
                <a href="{{ asset('/signin') }}" class="btn btn-link fw-medium text-decoration-none text-body">Sign
                    in</a>
                <a href="{{ asset('/signup') }}" class="btn btn-primary">Sign Up</a>
            </div>

            <!-- Profile  -->
            @include('frontend.ims.components.profile_Btn')


            
            
        </div>

    </div>
</nav>
<!-- end navbar -->
<div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>