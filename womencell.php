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
                    <h1 class="display-3 text-white animated slideInDown">Women Grievance Cell</h1>
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
    <div class="container">
    <div class="row g-5">
    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
    <h3 class="text-center"><strong>Functioning of Women Cell</strong></h3>
    <hr>
    <!-- Purpose Start -->
    <p><strong>Purpose:</strong></p>
    <p align="justify">Women Cell is created to facilitate a gender-sensitive and congenial working 
    environment so that women and students studying in the institutions must not be subjected to gender 
    specific discrimination or sexual harassment.</p>
    <p align="justify">In case any incident (of harassment) is found to be violating the fundamental 
    rights of gender equality and right of life and liberty, it will be clear violation of the rights under article 14, 
    15 and 21 of the constitution of India. Such violations, therefore, 
    attract remedy under Article 32 for the enforcement of these fundamentals rights of women.</p>
    <!-- Purpose End -->

    <!-- Approach start -->
    <p><strong>Who can approach the cell?</strong></p>
    <p align="justify">Any female student or employee (teaching/non-teaching/admin) of CT Institutions, Shahpur, Campus.Jalandhar.</p>
    <!-- Approach End -->

    <!-- complaint start -->
    <p><strong>How to lodge a complaint?</strong></p>
    <p align="justify">The person concerned can personally approach/telephone/write or <strong>email at womengrievances@ctgroup.in</strong>. The name of the complainant will be kept confidential. The complaint can also be lodged on institute website women cell link.</p>
    <!-- complaint End -->

    <!--  How the complaint will be processed? Start-->
    <p><strong>How the complaint will be processed</strong></p>
    <p align="justify">On receiving any complaint, a meeting will be called by the convener of the women cell and all the findings after full deliberations will be sent to office of the Campus Director in a sealed cover for further necessary action.</p>

    <!-- How the complaint will be processed? End -->

  
    <h1>Grievance Forms:</h1>
				
			
					<form action="" method="post" class="form_grievance">
					<div class="et_pb_row row">
					<div class="col-12 col-sm-6  m-1">    
					<div class="form-group">
					<input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Full Name">
					<div class="text-danger">
										</div>
					</div>
					</div>
					<div class="col-12 col-sm-6  m-1">    
					<div class="form-group">
					<input type="text" class="form-control" name="phone" id="number" value="" placeholder="Contact Number">
					<div class="text-danger">
										</div>
					</div>
					</div>
					<div class="col-12 col-sm-6  m-1">   
					<div class="form-group">
					<input type="email" class="form-control" name="email" id="email" value="" placeholder="Email Address">
					<div class="text-danger">
										</div>
					</div>
					</div>
				
					

					
					<div class="col-12 col-sm-6 m-1">
					<select name="area">
					<option value="">Problem Area</option>

					<option value="ac" >Academics</option><option value="s" >Sports</option><option value="di" >Dispensary</option><option value="hos" >Hostel</option><option value="acc" >Accounts</option><option value="tr" >Transport</option><option value="ot" >Others</option>

					</select>
					<div class="text-danger">
										</div>	
					</div>
					<div class="col-12 col-sm-12  m-1">
					<textarea class="col-6" name="mesg" placeholder="Describe you're problem here.."></textarea>
					</div>

					<div class="form-group col-md-12 wi-full">
					<div class="g-recaptcha brochure__form__captcha" data-sitekey="6LdXCy8jAAAAAD5281CteAfqukNnDm99zx83P9b4"></div>
					<div class="text-danger">
										</div>
					</div>
					<div class="col-12 col-sm-12">
					<div class="bottom_btn_div"><!--<p>1+2 = <input type="text" class="add_number"></p>-->
					<button type="submit" name="" class="btn btn-primary">Submit</button>
					</div>  
					</div>
					</div>
					</form>
			
					
				
					
					
					

    




</div>
</div>
</div>
</div>










<!-- footer include start -->
<?php 
include("inc/footer.php") 
?>
<!--footer include End  -->








    
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