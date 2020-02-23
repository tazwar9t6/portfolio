<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Portfolio Of Tazwar Islam</title>

  <!-- Custom fonts for this theme -->
  <link href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha256-ENFZrbVzylNbgnXx0n3I1g//2WeO47XxoPe0vkp3NC8=" crossorigin="anonymous" />
  <!-- Theme CSS -->
  <link href="{{asset('frontend/css/freelancer.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/">HOME</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/portfolio">Portfolio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/about">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <!-- Navigation -->
  @yield('header')
  @yield('portfolio')
  @yield('about')
  @yield('contact')
  @yield('imageup')
  <!-- Portfolio Section -->


  

  <!-- Contact Section -->
  

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">Panchlaish , Chittagong (4203)
            <br>01838142655</p>
          </div> 
          <!-- Footer Social Icons -->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Find Me On Social Media</h4>
            <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/tazwar96" target="_blank">
              
              <i class="fab fa-fw fa-facebook-f"></i>
            </a>
            <a class="btn btn-outline-light btn-social mx-1" href="#">
              <i class="fab fa-fw fa-twitter"></i>
            </a>
            <a class="btn btn-outline-light btn-social mx-1" href="#">
              <i class="fab fa-fw fa-linkedin-in"></i>
            </a>
            <a class="btn btn-outline-light btn-social mx-1" href="#">
              <i class="fab fa-github"></i>

            </a>
          </div>

          <!-- Footer About Text -->
       {{-- <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">About Freelancer</h4>
          <p class="lead mb-0">Freelance is a free to use, MIT licensed Bootstrap theme created by
            <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
          </div> --}} 

        </div>
      </div>
    </footer>

    <!-- Copyright Section -->
    <section class="copyright py-4 text-center text-white">
      <div class="container">
        <small>&copy; 2020 Tazwar</small>
      </div>
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('frontend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{asset('frontend/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('frontend/js/contact_me.js')}}"></script>
    <!-- linedin -->>
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
    <!-- Custom scripts for this template -->
    <script src="{{asset('frontend/js/freelancer.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha256-3blsJd4Hli/7wCQ+bmgXfOdK7p/ZUMtPXY08jmxSSgk=" crossorigin="anonymous"></script>
  </body>
  <script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
      case 'info':
      toastr.info("{{ Session::get('message') }}");
      break;

      case 'warning':
      toastr.warning("{{ Session::get('message') }}");
      break;

      case 'success':
      toastr.success("{{ Session::get('message') }}");
      break;

      case 'error':
      toastr.error("{{ Session::get('message') }}");
      break;
    }
    @endif
  </script>

  </html>
