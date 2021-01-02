<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Offcanvas template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/offcanvas/">

    

    <link href="./assets/vendors/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
<link href="./assets/vendors/bootstrap/5.0.0-beta1/bootstrap.min.css" rel="stylesheet">
<link href="./assets/vendors/bootstrap/bs5a-reset/bs5a2-remove.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <link href="./assets/vendors/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./assets/css/offcanvas.css?0" rel="stylesheet">
  <link href="./assets/css/base-layout.css?hhh" rel="stylesheet">
  
  </head>
  <body class="bg-light">
    <header>
<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container">
    <a class="navbar-brand" href="#">
    <img src="https://erp.anshumemorial.in/assets/img/ama/ama-old-128x128.png" alt="AMA Logo" >
    </a>
    
    
    <button class=" hamburger hamburger--elastic navbar-toggler p-0 border-0" type="button" data-bs-toggle="offcanvas" aria-label="Toggle navigation"> <span class="hamburger-box">
    <span class="hamburger-inner"></span> </span>
    </button>
    
    <!--
    <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="offcanvas" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
-->
    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ms-auto mb-2 mb-md-0">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notifications</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Switch account</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Settings</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-none flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline" aria-label="Secondary navigation">
    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
    <a class="nav-link" href="#">
      Friends
      <span class="badge bg-light text-dark rounded-pill align-text-bottom">27</span>
    </a>
    <a class="nav-link" href="#">Explore</a>
    <a class="nav-link" href="#">Suggestions</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
  </nav>
</div>

</header>

<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <img class="me-3" src="<?= base_url(); ?>/assets/brand/bootstrap-logo-white.svg" alt="" width="48" height="38">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Bootstrap</h1>
      <small>Since 2011</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Recent updates</h6>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@username</strong>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
    </div>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@username</strong>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
    </div>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@username</strong>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
    </div>
    <small class="d-block text-end mt-3">
      <a href="#">All updates</a>
    </small>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Suggestions</h6>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-gray-dark">Full Name</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-gray-dark">Full Name</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-gray-dark">Full Name</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <small class="d-block text-end mt-3">
      <a href="#">All suggestions</a>
    </small>
  </div>
</main>

<footer class="bg-dark footer text-muted">
  <!-- footer social icons section -->
  <section class="footer__social py-1 bg-primary">
    <div class="footer__social_icon container d-flex justify-content-center align-items-center">
      <ul class="d-none d-md-flex text-white">
        <li>Follow us on :</li>
      </ul>
      <ul>
        <li class="fb flat-icon wow animate__fadeInLeftBig" data-wow-delay=".3s"><a href="https://fb.com/skwebsofficial/"><i class="fa fa-facebook"></i></a></li>
        <li class="tw flat-icon wow animate__fadeInLeftBig" data-wow-delay="0"><a href="https://twitter.com/SatishKmrSharma/"><i class="fa fa-twitter"></i></a></li>
        <li class="ig flat-icon wow animate__fadeInRightBig" data-wow-delay="0"><a href="https://instagram.com/satishkmrsharma/"><i class="fa fa-instagram"></i></a></li>
        <li class="yt flat-icon wow animate__fadeInRightBig" data-wow-delay="0.3s"><a href="#"><i class="fa fa-youtube"></i></a></li>
      </ul>
    </div>
  </section>
  <section class="footer-links">
    <div class="p-3">&nbsp;
      <a href="#">Student Panel</a> |
      <a href="#">Teacher Panel</a> |
      <a href="#">Admin Panel</a> |
      <a href="#">Privacy-Policy</a> |
      <a href="#">Disclaimer</a> |
      <a href="#">Terms & Conditions</a>
    </div>
  </section>
  <!-- // footer social icons section -->
  <!-- copyright section -->
  <section class="copyright my-auto py-2 py-md-3  text-center"> &copy;
    <script>
      document.write(new Date().getFullYear())
    </script> <a class="text-lightgrey" href="./"><strong>Anshu Memorial Academy</strong>. </a><span class="d-none d-md-inline mr-5"> All Right Reserved. </span>
    <hr style="max-width:300px;" class="bg-muted my-1 w-50 mx-auto d-md-none"> <span class="d-block d-md-inline"> Designed &amp; Developed by <a href="https://skwebs.github.io">SKWebs</a></span> </section>
  <!-- // copyright section -->
</footer>

<script src="./assets/vendors/jquery/3.5.1/jquery.min.js"></script>
  
    <script src="./assets/vendors/bootstrap/5.0.0-beta1/bootstrap.bundle.min.js"></script>

      <script src="./assets/js/offcanvas.js"></script>
      
      <script>
      // Look for .hamburger
      var hamburger = document.querySelector(".hamburger");
      // On click
      hamburger.addEventListener("click", function() {
      // Toggle class "is-active"
      hamburger.classList.toggle("is-active");
      // Do something else, like open/close menu
      });
      $(document).ready(function(){
      $(document).on("show.bs.dropdown", ".dropdown", function() {
      $(this).find(".dropdown-menu").first().stop(!0, !0).slideDown("fast"), $(this).find(".dropdown-toggle").delay(300).addClass("active")
      }), $(document).on("hide.bs.dropdown", ".dropdown", function() {
      $(this).find(".dropdown-menu").first().stop(!0, !0).slideUp("fast"), $(this).find(".dropdown-toggle").delay(300).removeClass("active")
      });
      })
      
      </script>
  </body>
</html>