<!DOCTYPE html>
<html lang="en">

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
    <style>
      
    .carousel-item {
  animation: slideIn 1s;
}

@keyframes slideIn {
  from {
    transform: translateX(100%);
  }
  to {
    transform: translateX(0);
  }
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
    

  <h3 class="text-center">UG Courses</h3>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
      <div class="card">
      <div class="card-body">
      <!-- <h5 class="card-title">Animated Carousel Card</h5> -->
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- <img src="image1.jpg" class="d-block w-100" alt="Image 1"> -->
            <img src="img/ece.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Electronics & Communication Engg</h5>
        <p align="justify" class="card-text">Electronics and Communications Engineering (ECE) involves researching, 
            designing, developing, and testing electronic equipment used in various systems. Electronics and 
            Communications engineers also conceptualise and oversee the manufacturing of communications and 
            broadcast systems.</p>
      </div>
          </div>
          <div class="carousel-item">
            <img src="image2.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item">
            <img src="image3.jpg" class="d-block w-100" alt="Image 3">
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<div class="col-6"></div>
</div>
</div>
      
      

    <!-- <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            
            <img src="img/ece.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Electronics & Communication Engg</h5>
        <p align="justify" class="card-text">Electronics and Communications Engineering (ECE) involves researching, 
            designing, developing, and testing electronic equipment used in various systems. Electronics and 
            Communications engineers also conceptualise and oversee the manufacturing of communications and 
            broadcast systems.</p>
      </div>
          </div>
        </div> -->
        <!-- <div class="col-md-4">
          <div class="card">

            <img src="img/me.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mechincal Engineering</h5>
        <p align="justify" class="card-text">Technically, mechanical engineering is the application of the principles and problem-solving techniques of engineering from design to manufacturing to the marketplace for any object. Mechanical engineers analyze their work using the principles of motion, energy, and force—ensuring that designs function safely, efficiently, and reliably, all at a competitive cost.</p>
      </div>
          </div>
        </div> -->
        <!-- <div class="col-md-4">
          <div class="card">
            
            <img src="img/ai&ml.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Artifical Intelligence and Machine Learning</h5>
        <p align="justify" class="card-text">An “intelligent” computer uses AI to think like a human and perform tasks on its own. Machine learning is how a computer system develops its intelligence. One way to train a computer to mimic human reasoning is to use a neural network, which is a series of algorithms that are modeled after the human brain.</p>
      </div>
          </div>
        </div> -->
      <!-- </div>
    </div>
  </div> -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script>
  $(document).ready(function() {
    // Enable automatic sliding
    $('.carousel').carousel({
      interval: 2000, // Adjust the interval (in milliseconds) between slides
      pause: "hover" // Pause the carousel on mouse hover
    });

    // Handle click event for previous button
    $('.carousel-control-prev').click(function() {
      $('.carousel').carousel('prev');
    });

    // Handle click event for next button
    $('.carousel-control-next').click(function() {
      $('.carousel').carousel('next');
    });
  });
</script>

<!-- <div class="row row-cols-1 row-cols-md-3 g-4 ">
  <div class="col">
    <div class="card">
      <img src="img/ai&ml.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Artifical Intelligence and Machine Learning</h5>
        <p align="justify" class="card-text">An “intelligent” computer uses AI to think like a human and perform tasks on its own. Machine learning is how a computer system develops its intelligence. One way to train a computer to mimic human reasoning is to use a neural network, which is a series of algorithms that are modeled after the human brain.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/civil.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Civil Engineering</h5>
        <p align="justify" class="card-text">Civil engineers design major transportation projects. Civil engineers conceive, design, build, supervise, operate, construct and maintain infrastructure projects and systems in the public and private sector, including roads, buildings, airports, tunnels, dams, bridges, and systems for water supply and sewage treatment.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/cse.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Computer Science and Engineering</h5>
        <p align="justify" class="card-text">Computer Science Engineering (CSE) is an academic programme that integrates the field of 
            Computer Engineering and Computer Science. It is one of the most sought-after courses among engineering 
            students. The course contains a plethora of topics but emphasises the basics of computer programming and 
            networking.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/ece.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Electronics & Communication Engg</h5>
        <p align="justify" class="card-text">Electronics and Communications Engineering (ECE) involves researching, 
            designing, developing, and testing electronic equipment used in various systems. Electronics and 
            Communications engineers also conceptualise and oversee the manufacturing of communications and 
            broadcast systems.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/me.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mechincal Engineering</h5>
        <p align="justify" class="card-text">Technically, mechanical engineering is the application of the principles and problem-solving techniques of engineering from design to manufacturing to the marketplace for any object. Mechanical engineers analyze their work using the principles of motion, energy, and force—ensuring that designs function safely, efficiently, and reliably, all at a competitive cost.</p>
      </div>
    </div>
  </div>
</div> -->





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