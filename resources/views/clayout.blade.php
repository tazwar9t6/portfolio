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
  <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha256-ENFZrbVzylNbgnXx0n3I1g//2WeO47XxoPe0vkp3NC8=" crossorigin="anonymous" />
  <!-- Theme CSS -->
  <link href="{{asset('frontend/css/freelancer.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/">HOME</a> <h1>||||</h1>
      <a class="navbar-brand js-scroll-trigger" href="/admin">CONTROL PANEL</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/admin/cdata">Contacts Data</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/about">Registered Users</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/contact">Reports</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <!-- Navigation -->
  @yield('cdata')
  @yield('idata')
  @yield('contact')
  @yield('registration')
 
  <!-- Portfolio Section -->


  

  <!-- Contact Section -->
  

  <!-- Footer -->
  



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

  <!-- Custom scripts for this template -->
  <script src="{{asset('frontend/js/freelancer.min.js')}}"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" charset="utf-8" async defer></script>
  <script>$(document).ready( function () {
    $('#myTable').DataTable();
  } );</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha256-3blsJd4Hli/7wCQ+bmgXfOdK7p/ZUMtPXY08jmxSSgk=" crossorigin="anonymous"></script>
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
</body>

</html>
