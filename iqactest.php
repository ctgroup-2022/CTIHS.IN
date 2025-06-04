<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CTIEMT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon1.ico" rel="icon">

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
                    <h1 class="display-3 text-white animated slideInDown">IQAC</h1>
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
    <div class="container-xxl py-5">
    <div class="row">
    <div class="col-md-3 col-sm-3">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">About IQAC</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Vision & Mission</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Compositions</a>
            <!-- <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a> -->
        </div>
    </div>
</div>

  <div class="col-md-8 col-sm-8">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <h3 class="text-center">About IQAC</h3>
            <p class="align-justify">
                Internal Quality Assurance Cell, or IQAC, is a framework that assists Higher Educational Institutions in streamlining their operations and achieving their goals for learning outcomes and objectives.
    <br>
            
                As an accreditation quality maintenance approach, every Higher Education Institution should establish an Internal Quality Assurance Cell (IQAC) in compliance with National Assessment and Accreditation Council (NAAC) criteria. The IQAC works to fulfil the goals of quality improvement and maintenance by integrating itself into the institution's structure because quality improvement is a continuous activity.
      <br>      
                Developing a system for purposefully, persistently, and catalytically increasing institutions' overall performance is the IQAC's primary duty. IQAC aims to encourage actions that will help institutions run better by internalizing a quality culture and institutionalizing best practices.
            </p>
            
            <h3><strong>Objectives</strong></h3>
            <p class="align-justify">IQAC is established up to fulfil the following objectives:</p>
            <p>
                <ul>
                    <li>To establish a robust system that leads to improvement of academic and administrative performance of the institution.</li>
                    <li>To encourage and promote a culture of employing best practices and human resources, and strive for quality enhancement in every aspect.</li>
                    <li>To make sure that every area of the Institute is run with clarity, transparency, and focus.</li>
                </ul>
            </p>
            <h3><strong>Strategies</strong></h3>
            <p class="align-justify">IQAC will be instrumental in establishing methods, policies and procedures for:</p>
            <p>
                <ul>
                    <li>Make sure that all the academic and administrative responsibilities are executed effectively in a well-planned way and at appropriate times.</li>
                    <li>Ensuring that academic courses have relevance in the corporate world and meet the qualitative standards.</li>
                    <li>Use of new teaching-learning approaches and styles.</li>
                    <li>Ensuring the availability of the necessary support system and services.</li>
                    <li>Implementing an efficient evaluation criteria.</li>
                </ul>
            </p>
        </div>
   

      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><strong>Vision</strong></h3>
                <p>To be a leading Institution in providing quality education that prepares students to be responsible citizens.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3><strong>Mission</strong></h3>
                <p class="excerpt"><ul>
                    <li>To provide a dynamic learning environment that enables students to excel in their chosen fields of study.</li>
                    <li>To develop in students a sense of social responsibility and commitment to make a positive difference in their communities.</li>
                    <li>To enable high-quality education delivered by dedicated academicians who act as industry liaisons.</li>
                </ul></p>
            </div>
        </div>
    </div>
</div>

<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
    <h3 class="text-center"><strong>IQAC Compositions</strong></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Composition</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Composition 2018-19</td>
                    <td><a href="pdf/IQAC/2018-19.pdf" target="_blank" rel="noopener"><button class="btn btn-primary" type="button">Download</button></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Composition 2019-20</td>
                    <td><a href="pdf/IQAC/2019-20.pdf" target="_blank" rel="noopener"><button class="btn btn-primary" type="button">Download</button></a></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>
<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>

</div>


<!-- Footer section starts -->
<?php
include('inc/footer.php');
?>
<!-- Footer section ends -->
<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>