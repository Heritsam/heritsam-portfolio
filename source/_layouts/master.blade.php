<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#3D5AFE">

    <title>HERITSAM &ndash; Mobile / Web Developer</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    
    <!-- Scripts -->
    <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
    @yield('body')

    <section class="bg-white py-4">
        <div class="container">
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                    <div class="col-12 col-md mb-4">
                        <h5 class="title">HERITSAM</h5>
                        <small class="d-block mb-3 text-muted">© 2019-2020</small>

                        <small class="text-muted">
                            <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                        </small>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Projects</h5>
                        <ul class="list-unstyled text-small">
                            @foreach ($projects as $project)
                                <li><a class="text-muted" href="{{ $project->link }}">{{ $project->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Contacts</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="mailto:ariqhm@gmail.com" target="_blank">Email</a></li>
                            <li><a class="text-muted" href="http://wa.me/6281808625505" target="_blank">WhatsApp</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Find me</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" target="_blank" href="http://github.com/Heritsam">Github</a></li>
                            <li><a class="text-muted" target="_blank" href="http://instagram.com/heritsam_">Instagram</a></li>
                            <li><a class="text-muted" target="_blank" href="http://medium.com/@heritsam">Medium</a></li>
                            <li><a class="text-muted" target="_blank" href="https://www.linkedin.com/in/ariq-heritsa-maalik-9b7968167">LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </section>
</body>
</html>
