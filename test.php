<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>CTIEMT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
  <script>
      // Disable next button when last slide is reached
$('#myCarousel').on('slid.bs.carousel', function () {
  var currentIndex = $('div.carousel-inner div.carousel-item.active').index();
  var totalItems = $('div.carousel-inner div.carousel-item').length;

  if (currentIndex === totalItems - 1) {
    $('.carousel-control-next').addClass('disabled');
  } else {
    $('.carousel-control-next').removeClass('disabled');
  }
});

// Disable previous button when first slide is active
$('#myCarousel').on('slide.bs.carousel', function () {
  var currentIndex = $('div.carousel-inner div.carousel-item.active').index();

  if (currentIndex === 0) {
    $('.carousel-control-prev').addClass('disabled');
  } else {
    $('.carousel-control-prev').removeClass('disabled');
  }
});

  </script>
  <style>
      .carousel-control-next.disabled,
.carousel-control-prev.disabled {
  pointer-events: none;
  opacity: 0.5;
}

  </style>
</head>
<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

<!-- Navbar include start -->
<?php 
include("inc/menu.php") 
?>
<!-- Navbar include End -->
 <!-- Header Start -->
 <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses List</h1>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col">
          <!-- Card 1 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card 1</h5>
              <img src="img/civil.jpg">
              <p class="card-text">Card 1 content</p>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- Card 2 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card 2</h5>
              <img src="img/civil.jpg">
              <p class="card-text">Card 2 content</p>
            </div>
          </div>
        </div>
        <!-- Add more cards within the same row -->
        <div class="col">
          <!-- Card 3 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card 3</h5>
              <img src="img/civil.jpg">
              <p class="card-text">Card 3 content</p>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- Card 4 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card 4</h5>
              <img src="img/civil.jpg">
              <p class="card-text">Card 4 content</p>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- Card 4 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card 4</h5>
              <img src="img/civil.jpg">
              <p class="card-text">Card 4 content</p>
            </div>
          </div>
        </div>
        <!-- main divs -->
      </div>
    </div>
    <!-- Add more carousel items with additional rows of cards -->
  </div>
  
  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
