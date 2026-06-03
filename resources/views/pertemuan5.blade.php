<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DELL</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  </head>

<body class="index-page">
 <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">DELL</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#header" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#laptop">Laptop</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#about">Get Started</a>

    </div>
  </header>

  <main class="main">

    <section id="header" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>DELL</h1>
            <p>Technology built for you, your vision, your ambition and your story</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://visitstore.bio/dell?tab=ig&utm_source=ig&utm_medium=social&utm_content=link_in_bio&fbclid=PAZXh0bgNhZW0CMTEAc3J0YwZhcHBfaWQMMjU2MjgxMDQwNTU4AAGn6eL7VJW2di9iD4-vLk0P9VALiXK4wmE0uKhvw_gEe8aX02_vFhs3VhTnJCY_aem_IVgMwoLdp8MaEEt7yxW54A" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Mulai Belanja</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><section id="about" class="about section">

     <section id="laptop" class="section why-us light-background" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>The XPS 14 is back and better than ever. </span><strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                XPS 14 reflects our renewed focus on thoughtful design and real world performance. From a refined chassis to efficiency driven hardware choices, ZDNet highlights why this generation represents a true return to form.
              </p>
            </div>
          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="{{ asset('assets/img/DELL.png') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
      </div><div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              Technology built for you, your vision, your ambition and your story
            </p>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>XPS 14 reflects our renewed focus on thoughtful design and real world performance. From a refined chassis to efficiency driven hardware choices, ZDNet highlights why this generation represents a true return to form. </p>
          </div>

        </div>

      </div>

    </section></main>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
