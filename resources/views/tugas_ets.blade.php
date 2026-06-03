<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mercedes-AMG PETRONAS F1 Team</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        .navmenu .navmenu a:hover,
        .navmenu a:focus,
        .navmenu .active,
        .navmenu .active:focus,
        .navmenu li:hover>a {
            color: #00A19B;
        }

        .section-title h2::after {
            background-color: #00A19B;
        }

        .btn-custom {
            background-color: #00A19B;
            color: white;
            border-radius: 50px;
            padding: 10px 25px;
            text-decoration: none;
            transition: .3s;
        }

        .btn-custom:hover {
            background-color: #007a75;
            color: white;
        }

        .scroll-top {
            background-color: #00A19B;
        }

        .scroll-top:hover {
            background-color: #007a75;
        }

        @media(max-width:991px) {
            .hero-img img {
                margin-bottom: 0 !important;
            }
        }
    </style>

</head>

<body class="index-page">

    <!-- HEADER -->
    <header id="header" class="header d-flex align-items-center fixed-top"
        style="background-color: rgba(0,0,0,0.9);">

        <div class="container-fluid container-xl d-flex align-items-center">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">

                <img src="https://images.ctfassets.net/1fvlg6xqnm65/303IBN9F2Jp1c1FI8a9kVA/e7245e84f3e0a66893fbd2bf5f62c4d8/MercedesAMGF1_Logo_3x.png"
                    style="max-height:70px;">

            </a>

            <nav id="navmenu" class="navmenu">

                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Cars</a></li>
                    <li><a href="#team">Drivers</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

            </nav>

            <a href="https://www.instagram.com/mercedesamgf1/"
                target="_blank"
                class="btn-custom">

                FOLLOW THE RACE

            </a>

        </div>

    </header>

    <!-- MAIN -->
    <main class="main">

        <!-- HERO -->
        <section id="hero"
            class="hero section dark-background"
            style="background-color:black;">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 d-flex flex-column justify-content-center">

                        <h1 style="text-transform:uppercase;">
                            The Pinnacle of Motorsport
                        </h1>

                        <p>
                            Official home of the Silver Arrows.
                            Witness the engineering and performance.
                        </p>

                        <div class="d-flex gap-3">

                            <a href="#portfolio" class="btn-custom">
                                Explore The Car
                            </a>

                            <a href="https://youtu.be/gsZPb2-Q-HU?si=cH-FRleCZISNWByV"
                                class="btn-custom"
                                target="_blank">

                                Watch Highlights

                            </a>

                        </div>

                    </div>

                    <div class="col-lg-6 hero-img">

                        <img src="{{ asset('assets/img/f1_car1.png') }}"
                            class="img-fluid animated"
                            style="margin-bottom:-120px;">

                    </div>

                </div>

            </div>

        </section>

        <!-- CLIENTS -->
        <section class="clients section light-background">

            <div class="container">

                <div class="row gy-4">

                    <div class="col">
                        <img src="{{ asset('assets/img/clients/sponsor-1.webp') }}" class="img-fluid">
                    </div>

                    <div class="col">
                        <img src="{{ asset('assets/img/clients/sponsor-2.webp') }}" class="img-fluid">
                    </div>

                    <div class="col">
                        <img src="{{ asset('assets/img/clients/sponsor-3.webp') }}" class="img-fluid">
                    </div>

                    <div class="col">
                        <img src="{{ asset('assets/img/clients/sponsor-4.webp') }}" class="img-fluid">
                    </div>

                </div>

            </div>

        </section>

        <!-- ABOUT -->
        <section id="about" class="about section">

            <div class="container section-title text-center">

                <h2 style="color:#00A19B;">
                    About Us
                </h2>

            </div>

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <p>
                            We are the Mercedes-AMG PETRONAS Formula One Team.
                        </p>

                        <ul>

                            <li>8x Constructors Champions</li>

                            <li>100+ Grand Prix Wins</li>

                            <li>Hybrid Powertrain Leaders</li>

                        </ul>

                    </div>

                    <div class="col-lg-6">

                        <p>
                            Driven by engineering precision and racing passion.
                        </p>

                    </div>

                </div>

            </div>

        </section>

        <!-- SKILLS -->
        <section class="skills section">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <img src="{{ asset('assets/img/w17.webp') }}"
                            class="img-fluid">

                    </div>

                    <div class="col-lg-6">

                        <h3>W17 PERFORMANCE</h3>

                        <div class="progress mb-4">
                            <div class="progress-bar"
                                style="width:98%;background:#00A19B;">
                                98%
                            </div>
                        </div>

                        <div class="progress mb-4">
                            <div class="progress-bar"
                                style="width:95%;background:#00A19B;">
                                95%
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- PORTFOLIO -->
        <section id="portfolio" class="portfolio section">

            <div class="container section-title text-center">

                <h2 style="color:#00A19B;">
                    Cars
                </h2>

            </div>

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4">

                        <img src="{{ asset('assets/img/portfolio/porto-1.webp') }}"
                            class="img-fluid rounded">

                    </div>

                    <div class="col-lg-4">

                        <img src="{{ asset('assets/img/portfolio/porto-4.webp') }}"
                            class="img-fluid rounded">

                    </div>

                    <div class="col-lg-4">

                        <img src="{{ asset('assets/img/portfolio/porto-7.webp') }}"
                            class="img-fluid rounded">

                    </div>

                </div>

            </div>

        </section>

        <!-- TEAM -->
        <section id="team" class="team section">

            <div class="container section-title text-center">

                <h2 style="color:#00A19B;">
                    Drivers
                </h2>

            </div>

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="team-member">

                            <img src="{{ asset('assets/img/team/george.webp') }}"
                                class="img-fluid rounded">

                            <h4>George Russell</h4>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="team-member">

                            <img src="{{ asset('assets/img/team/kimi.webp') }}"
                                class="img-fluid rounded">

                            <h4>Kimi Antonelli</h4>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- CONTACT -->
        <section id="contact" class="contact section">

            <div class="container section-title text-center">

                <h2 style="color:#00A19B;">
                    Contact
                </h2>

            </div>

            <div class="container">

                <form action="#" method="POST">

                    @csrf

                    <div class="row gy-4">

                        <div class="col-md-6">

                            <input type="text"
                                class="form-control"
                                placeholder="Your Name">

                        </div>

                        <div class="col-md-6">

                            <input type="email"
                                class="form-control"
                                placeholder="Your Email">

                        </div>

                        <div class="col-md-12">

                            <textarea class="form-control"
                                rows="6"
                                placeholder="Message"></textarea>

                        </div>

                        <div class="col-md-12 text-center">

                            <button type="submit"
                                class="btn-custom border-0">

                                Send Message

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </section>

    </main>

    <!-- FOOTER -->
    <footer id="footer" class="footer">

        <div class="container text-center py-4">

            <p>
                © {{ date('Y') }}
                Mercedes-AMG PETRONAS F1 Team
            </p>

        </div>

    </footer>

    <!-- SCROLL -->
    <a href="#"
        id="scroll-top"
        class="scroll-top d-flex align-items-center justify-content-center">

        <i class="bi bi-arrow-up-short"></i>

    </a>

    <!-- JS -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
