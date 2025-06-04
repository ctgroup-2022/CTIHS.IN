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


    <div class="container-xxl py-5">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action active" id="list-student-list" data-bs-toggle="list" href="#list-student" role="tab" aria-controls="list-student">Student</a>
      <a class="list-group-item list-group-item-action" id="list-employee-list" data-bs-toggle="list" href="#list-employee" role="tab" aria-controls="list-employee">Employee</a>
      <a class="list-group-item list-group-item-action" id="list-parent-list" data-bs-toggle="list" href="#list-parent" role="tab" aria-controls="list-parent">Parents</a>
      <a class="list-group-item list-group-item-action" id="list-guest-list" data-bs-toggle="list" href="#list-guest" role="tab" aria-controls="list-guest">Guest</a>
    </div>
  </div>

  <!-- ClassRoom section starts -->
  <div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="list-stu" role="tabpanel" aria-labelledby="list-stu-list">
      <p>&nbsp;</p>
      <h3>Student Grievance Form</h3>
      <form action="">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Full Name">
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-6"> 
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Contact">
                        </div>
                    </div>
                </div>
        <br>  
        <div class="row">
        <div class="col-sm-6 col-md-6"><div class="form-group">
            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Email Address"></div> </div> 
                <div class="col-sm-6 col-md-6"><div class="form-group">
                    <select class="form-select" name="category">
                        <option selected>Category</option>
                        <option value="1">SC</option>
                        <option value="2">ST</option>
                        <option value="3">OBC</option>
                        <option value="3">General</option>
					</select>
                </div>      
        </div> 
        </div>
        <br>  
        <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Course">
                    </div> 
                </div>
                <div class="col-sm-6 col-md-6"> 
                    <div class="form-group">
                        <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Semster">
                    </div>
                </div>
        </div>
        <br>
        <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="University Roll. No."></div> </div> 
                <div class="col-sm-6 col-md-6"><div class="form-group">
                    <select class="form-select" name="Problem Area">
                            <option selected>Problem Area</option>
                            <option value="1">Academic</option>
                            <option value="2">Sports</option>
                            <option value="3">Dispensary</option>
                            <option value="4">Hostal</option>
                            <option value="5">Accounts</option>
                            <option value="6">Transport</option>
                            <option value="7">Others</option>
					</select>
                </div>  
        </div> 
        </div>
        <br>
        <div class="row">
        <div class="col-12">
            <textarea class="col-12" name="" id=""  rows="10" placeholder="Describe you're problem here.."></textarea>
        </div>
        </div>
        <div><center>
            <button class="btn btn-primary btn-lg">submit</button></center>
        </div>
        </form>
    </div>
      <!-- ClassRoom section ends -->
<!-- Library section starts -->
<div class="tab-pane fade" id="list-employee" role="tabpanel" aria-labelledby="list-employee-list">
      <p>&nbsp;</p>
      <h3>Employee Grievance Form</h3>
      <form action="">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Full Name">
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-6"> 
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Contact">
                        </div>
                    </div>
                </div>
        <br>  
        <div class="row">
        <div class="col-sm-6 col-md-6"><div class="form-group">
            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Email Address"></div> </div> 
                <div class="col-sm-6 col-md-6"><div class="form-group">
                    <select class="form-select" name="category">
                        <option selected>Category</option>
                        <option value="1">SC</option>
                        <option value="2">ST</option>
                        <option value="3">OBC</option>
                        <option value="3">General</option>
					</select>
                </div>      
        </div> 
        </div>
        <br>  
        <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Course">
                    </div> 
                </div>
                <div class="col-sm-6 col-md-6"> 
                    <div class="form-group">
                        <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Semster">
                    </div>
                </div>
        </div>
        <br>
        <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="University Roll. No."></div> </div> 
                <div class="col-sm-6 col-md-6"><div class="form-group">
                    <select class="form-select" name="Problem Area">
                            <option selected>Problem Area</option>
                            <option value="1">Academic</option>
                            <option value="2">Sports</option>
                            <option value="3">Dispensary</option>
                            <option value="4">Hostal</option>
                            <option value="5">Accounts</option>
                            <option value="6">Transport</option>
                            <option value="7">Others</option>
					</select>
                </div>  
        </div> 
        </div>
        <br>
        <div class="row">
        <div class="col-12">
            <textarea class="col-12" name="" id=""  rows="10" placeholder="Describe you're problem here.."></textarea>
        </div>
        </div>
        <div><center>
            <button class="btn btn-primary btn-lg">submit</button></center>
        </div>
        </form>
    </div>
      <!-- Library section ends -->
<!-- Bank Section starts -->
<div class="tab-pane fade" id="list-parent" role="tabpanel" aria-labelledby="list-parent-list">
      <p>&nbsp;</p>
      <h3>Parents Grievance Form</h3>
      <form action="">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Full Name">
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-6"> 
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Contact">
                        </div>
                    </div>
                </div>
        <br>  
        <div class="row">
        <div class="col-sm-6 col-md-6"><div class="form-group">
            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Email Address"></div> </div> 
                <div class="col-sm-6 col-md-6"><div class="form-group">
                    <select class="form-select" name="category">
                        <option selected>Category</option>
                        <option value="1">SC</option>
                        <option value="2">ST</option>
                        <option value="3">OBC</option>
                        <option value="3">General</option>
					</select>
                </div>      
        </div> 
        </div>
        <br>  
        <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Course">
                    </div> 
                </div>
                <div class="col-sm-6 col-md-6"> 
                    <div class="form-group">
                        <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Semster">
                    </div>
                </div>
        </div>
        <br>
        <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="University Roll. No."></div> </div> 
                <div class="col-sm-6 col-md-6"><div class="form-group">
                    <select class="form-select" name="Problem Area">
                            <option selected>Problem Area</option>
                            <option value="1">Academic</option>
                            <option value="2">Sports</option>
                            <option value="3">Dispensary</option>
                            <option value="4">Hostal</option>
                            <option value="5">Accounts</option>
                            <option value="6">Transport</option>
                            <option value="7">Others</option>
					</select>
                </div>  
        </div> 
        </div>
        <br>
        <div class="row">
        <div class="col-12">
            <textarea class="col-12" name="" id=""  rows="10" placeholder="Describe you're problem here.."></textarea>
        </div>
        </div>
        <div><center>
            <button class="btn btn-primary btn-lg">submit</button></center>
        </div>
        </form>
    </div>
        <!-- Bank section ends -->

      <!-- lab section starts -->
      <div class="tab-pane fade" id="list-guest" role="tabpanel" aria-labelledby="list-guest-list">
      <p>&nbsp;</p>
      <h3>Guest Grievance Form</h3>
      <form action="">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Full Name">
                        </div> 
                    </div>
                    <div class="col-sm-6 col-md-6"> 
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Contact">
                        </div>
                    </div>
                </div>
        <br>  
        <div class="row">
        <div class="col-sm-6 col-md-6"><div class="form-group">
            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Email Address"></div> </div> 
                <div class="col-sm-6 col-md-6"><div class="form-group">
                    <select class="form-select" name="category">
                        <option selected>Category</option>
                        <option value="1">SC</option>
                        <option value="2">ST</option>
                        <option value="3">OBC</option>
                        <option value="3">General</option>
					</select>
                </div>      
        </div> 
        </div>
        <br>  
        <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Course">
                    </div> 
                </div>
                <div class="col-sm-6 col-md-6"> 
                    <div class="form-group">
                        <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="Semster">
                    </div>
                </div>
        </div>
        <br>
        <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
            <input type="text" class="form-control" name="fname" id="name"  value="" placeholder="University Roll. No."></div> </div> 
                <div class="col-sm-6 col-md-6"><div class="form-group">
                    <select class="form-select" name="Problem Area">
                            <option selected>Problem Area</option>
                            <option value="1">Academic</option>
                            <option value="2">Sports</option>
                            <option value="3">Dispensary</option>
                            <option value="4">Hostal</option>
                            <option value="5">Accounts</option>
                            <option value="6">Transport</option>
                            <option value="7">Others</option>
					</select>
                </div>  
        </div> 
        </div>
        <br>
        <div class="row">
        <div class="col-12">
            <textarea class="col-12" name="" id=""  rows="10" placeholder="Describe you're problem here.."></textarea>
        </div>
        </div>
        <div><center>
            <button class="btn btn-primary btn-lg">submit</button></center>
        </div>
        </form>
    </div>
                <!-- <h5>Computer Science Engineering</h5>
                <p align="justify">Wi-Fi is available in the laboratories. There are 280 Computers available for the students which are being used by them frequently.190 Mbps internet facility is available in the institute.</p>
                <p align="justify">The institute has extensive Language Lab so that students can improve their English communication skills</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Laboratory Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Android Programming Lab</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Machine Learning Lab</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Artificial Intelligence Lab</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Internet of Things Lab</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Relational Database Management System Lab</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Networking Lab</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>LINUX LAB</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Web Technology Lab</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Research Lab</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Language Lab</td>
                        </tr>

                    </tbody>
                </table> -->
        
        
        
        
<!-- Lab section ends -->


      <!-- canteen section starts -->
      <div class="tab-pane fade" id="list-can" role="tabpanel" aria-labelledby="list-can-list">
      <p>&nbsp;</p>
        <h4> Central Canteen @ CTIEMT</h4>
      <p>&nbsp;</p><div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5">
        <img class="w-100 h-100" src="img/canteen/canteen.jpeg"></div>
         
        <div class="col-lg-6 col-md-6 col-sm-6">
                <p align="justify">Café area and even a moving canteen van is also available.  Any item or service that the students might need during their stay on campus is either available right on campus or somewhere close by. </p>
        </div>
        </div>
        </div> 
        <!--canteen section ends  -->
        
        <!--Hostel Section starts  -->
        <div class="tab-pane fade" id="list-hostel" role="tabpanel" aria-labelledby="list-hostel-list">
        <p>&nbsp;</p>
        <h4> Hostel(Boys/Girls) @ CTIEMT</h4>
      <p>&nbsp;</p><div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5">
        <img class="w-100 h-100" src="img/infra/hostel.png"></div>
         
        <div class="col-lg-6 col-md-6 col-sm-6">
                <p align="justify">The institute has two Hostels separately for Boys and Girls with capacity of 720 students. Hostels are equipped with Wi-Fi. CCTV cameras are installed on different locations. TV cum common room is also there. Rooms are properly ventilated and updated.
                </p>
        </div>
        </div>
        </div> 
        <!-- Hostel Section Ends -->
        <!-- Auditorium starts -->
        <div class="tab-pane fade" id="list-audi" role="tabpanel" aria-labelledby="list-audi-list">
        <p>&nbsp;</p>
        <h4> Central Auditorium @ CTIEMT</h4>
      <p>&nbsp;</p><div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5">
        <img class="w-100 h-100" src="img/infra/audi.jpg"></div>
         
        <div class="col-lg-6 col-md-6 col-sm-6">
                <p align="justify">The Institute has North India’s Largest Auditorium, Sardarni Manjit Kaur Auditorium with seating capacity of 1056. </p>
        </div>
        </div>
        </div> 

        <!-- Auditorium Ends -->
 <!-- Medicare complex starts -->
      <div class="tab-pane fade" id="list-medicare" role="tabpanel" aria-labelledby="list-medicare-list">
      <p>&nbsp;</p>
        <h4>Medicare @ CTIEMT</h4>
        
        <br><br>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5">
            <img class="w-100 h-100" src="img/infra/medicare.jpg"></div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <p align="justify">As a medical facility, the institute has a dispensary where first aid medical treatment is provided to the students and the facility of ambulance 24*7 throughout the year. The institute also has a multi-specialty hospital named CT Medicare Complex, situated near main gate.  
                </p>
            </div>
        </div>
        </div>
      <!-- Medicare Complex Ends -->
        <!-- Grounds section starts -->
        
        <div class="tab-pane fade" id="list-sports" role="tabpanel" aria-labelledby="list-sports-list"> <p>&nbsp;</p>
        <h4>Play Grounds @ CTIEMT</h4>
      <p>&nbsp;</p><div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5">
        <img class="w-100 h-100" src="img/infra/ground.jpg"></div>
         
        <div class="col-lg-6 col-md-6 col-sm-6">
                <p align="justify">The institute has excellent sports facilities for both indoor and outdoor games. It includes cricket ground, football ground, volleyball court, badminton court, table tennis court, facility to play throw ball, chess, carom, and snooker. Yoga Centre and fitness Centre is available with all essential equipment to do gymnasium and yoga. All the dimensions of these play areas are as per the national and international standards.</p>
        </div>
        </div><hr>
        
        </div>
        
        <!-- Grounds section Ends -->
        
        <!--Seminar hall starts  -->
        <div class="tab-pane fade" id="list-hall" role="tabpanel" aria-labelledby="list-hall-list"><p>&nbsp;</p>
        <h4> Seminar Hall @ CTIEMT</h4>
      <p>&nbsp;</p><div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5">
        <img class="w-100 h-100" src="img/infra/hall.jpg"></div>
         
        <div class="col-lg-6 col-md-6 col-sm-6">
                <p align="justify">The Seminar Hall is equipped with an ICT facility, centralized air conditioning and well-built sitting arrangements and Sound system. To add more, speakers and mics are also available in the seminar Hall along with separate sound system and internet cabin in Seminar Hall. Seminar Hall also have white boards and Wi-Fi connectivity and an ICT facility.</p>
        </div>
        </div>
        </div> 
        <!-- Seminar hall ends -->

<!-- Workshop section starts -->
      <div class="tab-pane fade" id="list-workshop" role="tabpanel" aria-labelledby="list-workshop-list">
      <p>&nbsp;</p>
        <h4> Workshops @ CTIEMT</h4>
      <div class="row"><p>&nbsp;</p>
        <!-- <h3 class="text-center">Carpentary Workshop</h3><hr> -->
        <div class="col-lg-5 col-md-5 col-sm-5">
        <img class="w-100 h-100" src="img/infra/workshop.jpg"></div>
         
        <div class="col-lg-6 col-md-6 col-sm-6">
                <p align="justify">Workshop practice is the backbone of the real industrial environment which helps to develop and enhance relevant technical hand skills required by the technician working in the various engineering industries and workshops.
                </p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Workshop Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Fitting</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Smithy</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Carpentry</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Machine </td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Foundry </td>
                        </tr>
                    </tbody>
                </table>
        </div>
        <!-- <div class="row"><p>&nbsp;</p>
        <h3 class="text-center">Machine Shop</h3><hr>
            
        <div class="col-lg-6 col-md-6 col-sm-6">
                <p align="justify">A machine shop is a building that houses machining equipment and supplies. Machining is the process of cutting, fabricating, and finishing items to prepare them for use. Machine shops are used to manufacture new parts as well as repair existing equipment and parts.</p>
            </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
        <img class="w-100 h-100" src="img/workshops/2.jpg"></div>
        </div>
        <div class="row"><p>&nbsp;</p>
        <h3 class="text-center">Fitting Shop</h3><hr>
        <div class="col-lg-5 col-md-5 col-sm-5">
        <img class="w-100 h-100" src="img/workshops/3.jpg"></div>
         
        <div class="col-lg-6 col-md-6 col-sm-6">
                <p align="justify">Fitting Shop entails a high number of manual operations in order to complete the task to the appropriate shape, size, and precision. Marking, chipping, sawing, filing, scraping, drilling, tap (internal threading), and die (external threading) are among the activities carried out.</p>
        </div>
        <div class="row"><p>&nbsp;</p>
        <h3 class="text-center">Smithy Shop</h3><hr>
            
        <div class="col-lg-6 col-md-6 col-sm-6">
                <p align="justify">The smithy or smith's shop is the location where different forging processes take place. The hand forging method, often called as blacksmithy work, is typically used to produce tiny products using hammers on hot tasks.</p>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5">
        <img class="w-100 h-100" src="img/workshops/4.jpg"></div>
        </div> -->
      </div>
      <!-- Workshop section ends -->
      
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
  </div>
</div>
</div>
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
    <script src="lib/aeasing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>