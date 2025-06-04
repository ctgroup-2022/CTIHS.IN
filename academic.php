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

<!-- Animation -->
<style>
    /* Complex Hover Animation for Rows */
    .table-row {
        transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
    }

    .table-row:hover {
        transform: translateY(-5px) scale(1.03); /* Slight lift and zoom */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Shadow for depth */
        background-color: #d6d8db !important; /* Subtle highlight */
    }

    /* Button Hover Animation */
    a.btn-primary {
        transition: all 0.3s ease-in-out;
    }

    a.btn-primary:hover {
        background-color: #003d80 !important; /* Darker shade for hover */
        border-color: #003d80 !important;
        transform: scale(1.1); /* Slight zoom effect */
    }

    /* Header Title Animation on Load */
    thead th[colspan="3"] {
        animation: fadeInTitle 1s ease-out;
    }

    @keyframes fadeInTitle {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
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
                    <h1 class="display-3 text-white animated slideInDown">PTU Academic Calendar</h1>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Academic Calendar Table Start -->


     <table class="table table-hover text-center shadow" style="width: 85vw; margin: auto; border-radius: 10px; overflow: hidden; background-color: #f8f9fa;">
    <thead>
        <tr>
            <th colspan="3" class="text-center fs-4" style="background-color: #007bff; color: #ffffff;"> PTU Academic Calendar</th>
        </tr>
        <tr style="background-color: #0056b3; color: #ffffff;">
            <th>S.no</th>
            <th>Calendar Year</th>
            <th>Download</th>
        </tr>
    </thead>
    <tbody>
        <tr class="table-row" style="background-color: #e9ecef;">
            <td>1</td>
            <td>2023-2024</td>
            <td><a href="pdf\AcademicCalendar\Calendar-23-24.pdf" target="_blank" class="btn btn-primary btn-sm" >Download</a></td>
        </tr>
        <tr class="table-row" style="background-color: #dee2e6;">
            <td>2</td>
            <td>2023-2024(Revised)</td>
            <td><a href="pdf\AcademicCalendar\Calendar-23-24-Revised.pdf" target="_blank" class="btn btn-primary btn-sm" >Download</a></td>
        </tr>
    </tbody>
</table>





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