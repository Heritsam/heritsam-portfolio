@extends('_layouts.master')

@section('body')
<section class="hero bg-gradient-pattern text-center">
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent">
        <div class="container py-2">
            <a class="navbar-brand text-left" href="/">
                <h4 class="mb-1">HERITSAM</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <a class="nav-item ml-3">
                        <a href="mailto:ariqhm@outlook.com" target="_blank" class="btn btn-light">
                            <i class="fas fa-envelope"></i>
                            <span class="ml-2">ariqhm@outlook.com</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <main class="d-flex align-items-center h-100" style="margin-top: -70px">
        <div class="container">
            <h1 class="display-3 text-white">Hello Travellers</h1>
            <h3 class="text-white-50">I build websites and mobile apps using Laravel and Flutter.</h3>
        </div>
    </main>
</section>

<section style="margin-top: -75px">
    <div class="container">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row justify-content-center py-3">
                    <div class="col-md-4 text-center my-3">
                        <img src="assets/images/bridge.png" alt="image" class="img-fluid mb-3 w-25">

                        <h4>Lavish Kreate</h4>
                        <h6 class="text-primary">Organization</h6>
                    </div>

                    <div class="col-md-4 text-center my-3">
                        <img src="assets/images/mountains-1.png" alt="image" class="img-fluid mb-3 w-25">

                        <h4>Open For A Treat</h4>
                        <h6 class="text-primary">Mood</h6>
                    </div>

                    <div class="col-md-4 text-center my-3">
                        <img src="assets/images/mountains.png" alt="image" class="img-fluid mb-3 w-25">

                        <h4>Kota Bogor, Indonesia</h4>
                        <h6 class="text-primary">Location</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5" style="background: linear-gradient(0deg, #ffffff, #ffffff33)">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <img src="assets/images/heritsam.jpg" alt="heritsam" class="img-fluid rounded-circle w-25 mb-4">
                
                <h1>Ariq Heritsa Maalik</h1>

                <p class="h5 mt-3">I build websites and mobile apps using Laravel and Flutter. Founded Lavish Kreate, a team that consist of several developers to develop applications.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container text-center">
        <h1>Projects</h1>

        <div class="row justify-content-center mt-4">
            @foreach ($projects as $project)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="hovereffect shadow">
                        <img src="assets/images/{{ $project->image }}" alt="{{ $project->title }}" class="img-fluid">
                        <div class="overlay">
                            <p>
                                <a class="info" href="{{ $project->link }}" target="_blank">
                                    <span class="h4 my-0 title">{{ $project->title }}</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container mb-4">
        <h1>Find me</h1>
        <div class="row">
            <div class="col-md-6 mb-4">
                <p class="h5 mt-3">In case you are curious about what i am doing online.</p>
            </div>

            <div class="col-md-6">
                <div class="row mb-4">
                    <div class="col-auto">
                        <i class="fab fa-github fa-2x text-primary-light"></i>
                    </div>

                    <div class="col">
                        <h4 class="text-primary">
                            <a href="http://github.com/Heritsam" target="_blank">Github</a>
                        </h4>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-auto">
                        <i class="fab fa-instagram fa-2x text-primary-light"></i>
                    </div>

                    <div class="col">
                        <h4 class="text-primary">
                            <a href="http://instagram.com/heritsam_" target="_blank">Instagram</a>
                        </h4>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-auto">
                        <i class="fab fa-medium fa-2x text-primary-light"></i>
                    </div>

                    <div class="col">
                        <h4 class="text-primary">
                            <a href="http://medium.com/@heritsam" target="_blank">Medium</a>
                        </h4>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-auto">
                        <i class="fab fa-linkedin fa-2x text-primary-light"></i>
                    </div>

                    <div class="col">
                        <h4 class="text-primary">
                            <a href="https://www.linkedin.com/in/ariq-heritsa-maalik-9b7968167" target="_blank">LinkedIn</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-gradient-dark text-white">
    <div class="container pb-4">
        <h1 class="mt-5">Contacts</h1>
        <div class="row">
            <div class="col-md-6 mb-4">
                <p class="h5 mt-3">We humans are social beings; so why don't you try to contacting me and share your problems?</p>
            </div>

            <div class="col-md-6 mb-4">
                <div class="row mb-4">
                    <div class="col-auto">
                        <i class="fas fa-envelope fa-2x text-white-50"></i>
                    </div>

                    <div class="col">
                        <h4>Email Address</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="mailto:ariqhm@outlook.com" target="_blank" class="text-white">ariqhm@outlook.com (work)</a>
                            </li>
                            <li>
                                <a href="mailto:ariqhm@gmail.com" target="_blank" class="text-white">ariqhm@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-auto">
                        <i class="fab fa-whatsapp fa-2x text-white-50"></i>
                    </div>

                    <div class="col">
                        <h4>WhatsApp</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="http://wa.me/6281808625505" target="_blank" class="text-white">+62 818 0862 5505</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container text-center mt-4">
        <h1 class="text-center">This Site Is Powered By</h1>

        <div class="row justify-content-center my-5">
            <div class="col-md-3">
                <div class="h-50 d-flex align-items-center justify-content-center mb-3">
                    <img src="assets/images/jigsaw.png" alt="jigsaw" class="img-fluid w-50">
                </div>
                
                <h4>Jigsaw</h4>
                <p>Static site generator for Laravel developers.</p>
            </div>
            <div class="col-md-3">
                <div class="h-50 d-flex align-items-center justify-content-center mb-3">
                    <img src="assets/images/bootstrap.png" alt="bootstrap" class="img-fluid w-25">
                </div>

                <h4>Bootstrap 4</h4>
                <p>The most popular CSS Framework for developing responsive and mobile-first websites.</p>
            </div>

            <div class="col-md-3">
                <div class="h-50 d-flex align-items-center justify-content-center mb-3">
                    <img src="assets/images/netlify.png" alt="netlify" class="img-fluid w-25">
                </div>

                <h4>Netlify</h4>
                <p>A service for quickly rolling out static websites.</p>
            </div>
        </div>
    </div>
</section>

@endsection
