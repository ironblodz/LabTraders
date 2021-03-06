<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <title>@yield('title')</title>
    <script src="{{ asset('js/main.js') }}"></script>

        <title>Knight Bootstrap Template - Index</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{asset('img/favicon.png')}}" rel="icon">
        <link rel="stylesheet" href="{{asset('css/style.css') }}">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <section id="hero">
        <div class="hero-container">
          <a href="index.html" class="hero-logo" data-aos="zoom-in"><img src="#" alt=""></a>
          <h1 data-aos="zoom-in">Bem-vindo</h1>
          <h2 data-aos="fade-up">Análise Técnica / Psicologia de Mercado / Gestão do Capital </h2>
          <h2 data-aos="fade-up">Forex / Criptomoedas / Ações </h2>
          <a data-aos="fade-up" data-aos-delay="200" href="#about" class="btn-get-started scrollto">Open Your Mind</a>
        </div>
      </section>

    @include('layout.partials.navbar')

    @yield('content')

    @include('layout.partials.footer')


  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>
</body>


</html>
