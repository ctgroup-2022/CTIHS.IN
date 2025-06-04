<!DOCTYPE html>
<html lang="en">

<head>

   
    <meta charset="utf-8">
    <title>CTIHS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ctihs,ctihs college , college of higher studies " name="keywords">
    <meta content="college " name="description">

    <!-- Favicon -->
    <link href="img/favicon1.ico" rel="icon">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

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
    /* $animationSpeed: 40s; */

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(calc(-250px * 7))
        }
    }

    .slider {
        height: 100px;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: auto;

        .slide-track {
            animation: scroll 60s linear infinite;
            /* animation: scroll $animationSpeed linear infinite; */
            display: flex;
            width: calc(250px * 14);
        }

        .slide {
            height: 100px;
            width: 250px;
        }
    }

    .h6,
    .head1 {

        font-family: 'Poppins', sans-serif;
        font-weight: 900;
        /* Bold */


    }
    </style>
    <!-- Google Fonts Link -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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

    <!-- Carousel include start -->
    <?php 
include("inc/header.php") 
?>
    <!--Carousel include End  -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Text Section -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- Gradient and Bold Title -->
                    <h6 class="section-title h6 bg-white text-start pe-3"
                        style="font-weight: 900; text-transform: uppercase; color: #21559B;">
                        About Us
                    </h6>
                    <h1 class="mb-4 head1"
                        style=" text-transform: uppercase; background: linear-gradient(90deg, #FF7E5F, #FEB47B); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                        Welcome to CTIHS
                    </h1>
                    <!-- Paragraphs -->
                    <p align="justify">
                        CT Institute of Higher Studies, Jalandhar was established in the year 2004
                        by the
                        CT Educational Society with the objective of creating leading Research and Development
                        facilities in the
                        field of Higher Studies. The institute is approved by AICTE and affiliated
                        to Punjab
                        Technical University, Jalandhar. The institute currently offers 5 UG programs in various
                        disciplines of engineering
                        and 4 PG programs in various disciplines of Higher Studies.
                    </p>
                    <p align="justify">
                        Admissions to the various UG/PG programs at CTIHS are offered as per the eligibility criteria
                        laid down by PTU.
                        One-third of the students in the first year of the course are selected directly under the
                        Management quota, while
                        the remaining seats are filled by the University based on counseling. Lorem ipsum dolor sit
                        amet, consectetur
                        adipisicing elit. Tempora porro aliquam impedit vero a, soluta iure assumenda? Aliquid
                        reiciendis, aspernatur
                        expedita possimus, excepturi, laborum minus magnam nobis praesentium a fugiat.
                    </p>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6 wow fadeInUp d-none d-md-block" data-wow-delay="0.1s" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100 rounded" src="img/About_Home.png"
                            alt="ctihs Logo" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->

    <!-- Director Massge Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Director's Message</h6>
                    <h3 class="mb-4">DR. GURPREET SINGH SIDHU</h3>
                    <p align="justify">The Establishment Stones Of CT Group Are Laid On The Epitome Of Scholastic Pursuit And Excellence. Excellence In Any Work Can Be Achieved With Extreme Commitment, Hard Work, And Firmness. We, At CT, Have Made This Maxim Our Axiom And Our Way Of Life In Every Single Activity In The Campus. As You Desire To Walk Your Journey Of Life In Our Institutions, Which Has A Vibrant Atmosphere And A Vigorous Environment, Be Constructive, Be Ingenious And Be Committed, For You Will See Yourself Transformed With A New Learning Experience And Develop Your Progressive Skills. Our Highly Educated, Experienced And Motivated Staff Along With Committed Team Of Management Will Implement The Most Validated Methods And Means Of Teaching-Learning Process To Provide The Quality Education And Academic Excellence. We Are On An Ambitious Journey To Become One Of World's Top Research-Intensive Institutions. Join Our Portals, Create New Knowledge, Find New Portfolios, Help Thousands Of Students, Define Their Future And Change The World. I Encourage You To Visit Our Campus And Learn More About The Opportunities Available To You At Our Institutions.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/director.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Director Message End -->

    <!-- Course Table Start-->
    <?php 
include("inc/coursetab.php") 
?>
    <!-- Course Table End -->

    <!-- <h1 class="text-center">Our Recruitment Partners</h1> <hr>
<div class="slider">
    
	<div class="slide-track">
		<div class="slide">
			<img src="img/tieup/360.webp" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="img/tieup/acadecraft.webp" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="img/tieup/agrex.webp" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="img/tieup/anivam.webp" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="img/tieup/asort.webp" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="img/tieup/bajaj.webp" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="img/tieup/gna.webp" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="img/tieup/chc.webp" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="img/tieup/ech.webp" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="img/tieup/education.webp" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="img/tieup/gae.webp" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="img/tieup/capital.webp" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="img/tieup/HDFC.webp" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="img/tieup/idfc.webp" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="img/tieup/infosyss.webp" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="img/tieup/Klocrix.webp" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="img/tieup/Kotak.webp" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="img/tieup/logo.webp" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="img/tieup/makestudy.webp" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="img/tieup/NES Global Talent logo.webp" height="100" width="250" alt="" />
		</div>
	</div>
</div> -->






    <!-- footer include start -->
    <?php 
include("inc/footer.php") 
?>
    <!--footer include End  -->







    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="background:#30416A"><i
            class="bi bi-arrow-up"></i></a>


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