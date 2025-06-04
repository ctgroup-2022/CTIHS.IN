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
    <style>
        iframe {
  width: 100%; /* for responsiveness */
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
                    <h1 class="display-3 text-white animated slideInDown">Department of Computer Applications</h1>
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
  <div class="col-md-3 col-lg-3 col-sm-3">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-about-list" data-bs-toggle="list" href="#list-about" role="tab" aria-controls="list-about">About Department</a>
      <a class="list-group-item list-group-item-action" id="list-vm-list" data-bs-toggle="list" href="#list-vm" role="tab" aria-controls="list-vm">Vision & Mission</a>
      <a class="list-group-item list-group-item-action" id="list-hod-list" data-bs-toggle="list" href="#list-hod" role="tab" aria-controls="list-hod">HOD's Desk</a>
      <!-- <a class="list-group-item list-group-item-action" id="list-course-list" data-bs-toggle="list" href="#list-course" role="tab" aria-controls="list-course">Courses Offered</a> -->
      <!-- <a class="list-group-item list-group-item-action" id="list-Syllabus-list" data-bs-toggle="list" href="#list-Syllabus" role="tab" aria-controls="list-Syllabus">Syllabus</a> -->
      <a class="list-group-item list-group-item-action" id="list-lp-list" data-bs-toggle="list" href="#list-lp" role="tab" aria-controls="list-lp">Learning Process & Methodology</a>
      <a class="list-group-item list-group-item-action" id="list-Laboratories-list" data-bs-toggle="list" href="#list-Laboratories" role="tab" aria-controls="list-Laboratories">Laboratories</a>
      <a class="list-group-item list-group-item-action" id="list-academics-list" data-bs-toggle="list" href="#list-academics" role="tab" aria-controls="list-academics">Academics Activities</a>
      <a class="list-group-item list-group-item-action" id="list-visit-list" data-bs-toggle="list" href="#list-visit" role="tab" aria-controls="list-visit">Industrial Visit</a>
      <a class="list-group-item list-group-item-action" id="list-events-list" data-bs-toggle="list" href="#list-events" role="tab" aria-controls="list-events">Events</a>
      <a class="list-group-item list-group-item-action" id="list-faculty-list" data-bs-toggle="list" href="#list-faculty" role="tab" aria-controls="list-faculty">Faculty List</a>
      <!-- <a href="pdf/Faculty website.pdf" class="list-group-item list-group-item-action">Faculty List</a> -->
    </div>
  </div>
  <div class="col-sm-8 col-md-8">
    <div class="tab-content" id="nav-tabContent">
        <!-- About Department Starts -->
      <div class="tab-pane fade show active" id="list-about" role="tabpanel" aria-labelledby="list-about-list">
        <h3 class="text-center">About Department</h3><hr>
            <p align="justify"> 
            The Department of Computer Applications is equipped with the resources required to translate a student into a budding professional or an entrepreneur. The department is proud to have knowledgeable instructors who teach students about cloud computing, AI, ML, blockchain, cybersecurity, data science, and web-mobile development. Students take classes in computer networks, operating systems, software engineering, software project management, and computer graphics. They also do lab assignments and projects that are based on these courses. Modern labs equipped with the newest PC configurations, fast internet, ubiquitous wifi, and IoT kits are available at the department. Academic and extra-curricular activities make it a lively department where all the faculty members and students are working hard to get the best results in academics and placements.
            </p>   
      </div>
      <!-- About Department Ends -->
      <!-- Hod Desk Starts -->
        <div class="tab-pane fade" id="list-hod" role="tabpanel" aria-labelledby="list-hod-list">
        <h3 class="text-center">HOD's Desk</h3><hr>
        <div class="row">
            <div class="col-md-5">
                <img src="img/department/shilpidhir.webp" alt="" class="h-75 w-100">
            </div>
            <div class="col-md-7">
                <p align="justify">Welcome to the Department of Computer Applications. We offer Masters of Computer Application a high value Masters Program with in depth coverage of application development, software development, web development and mobile application development domains. The department has tie ups with leading IT Companies for internships, workshops and placements of the students. Guest lectures, technical events, seminars and coding competitions keep the students updated with the latest in the IT industry and groom them for their placement interviews and startup plans.</p>
                <h4 class="text-end">Ms. Shilpi Dhir</h4>
            </div>
       </div>  
        </div>
      <!-- Hod Desk Ends --> 
        <!-- Vision & Mission -->
        <div class="tab-pane fade" id="list-vm" role="tabpanel" aria-labelledby="list-vm-list">
        <h3 class="text-center">Vision & Mission of the Department</h3><hr>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12">
          <h3>Vision</h3>
          <p align="justify">To address the current issues facing the modern computing industry, the Department of Computer Applications seeks to produce intellectual workers who are well-groomed, technically proficient, and skilled.</p>
          <h3>Mission</h3>
          <p align="justify">
               1. To provide theoretical and practical foundation to the students for various domains of computer applications. <br>
               2. To provide technical and real-time solutions to local and global markets. 
            </p>
</div>
       </div>  
        </div>
        <!-- Vision & Mission -->
        <!-- faculty list Starts -->
        <div class="tab-pane fade" id="list-faculty" role="tabpanel" aria-labelledby="list-faculty-list">
        <h3 class="text-center">Faculty List</h3>
        <div class="row">
        <center><iframe src= 
    "pdf/faculty/Faculty 2023-24.pdf" 
                width="800"
                height="500"> 
        </iframe> </center>
       </div>  
        </div>
      <!-- faculty list Ends --> 
      
      <!-- courses Strats -->
      <div class="tab-pane fade" id="list-course" role="tabpanel" aria-labelledby="list-course-list">
      <h3 class="text-center">Courses Offered</h3><hr>
      <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Program</th>
                        <th>Specialization</th>
                        <th>Duration</th>
                        <th>Eligibility</th>
                        <th>Intake</th>
                        <th>Admission Through</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>B. Tech</td>
                        <td>Mechanical Engineering</td>
                        <td>4 years</td>
                        <td>10+2 (Non-medical)</td>
                        <td>30</td>
                        <td>JEE, IKG PTU Counseling, Management Quota</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>B. Tech (Lateral Entry)</td>
                        <td>Mechanical Engineering</td>
                        <td>3 years</td>
                        <td>3 years Engineering Diploma</td>
                        <td>As per IKG PTU Norms</td>
                        <td>IKG PTU Counseling, Management Quota</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>M. Tech</td>
                        <td>Mechanical Engineering</td>
                        <td>2 years</td>
                        <td>B. Tech in Mechanical/ Production/ Automobile/ Metallurgy  engineering</td>
                        <td>9</td>
                        <td>IKG PTU Counseling, Management Quota</td>
                    </tr>
                </tbody>
            </table>
            
      </div>
      <!-- courses Ends -->
      <!-- Learning starts -->
      <div class="tab-pane fade show" id="list-lp" role="tabpanel" aria-labelledby="list-lp-list">
        <h3 class="text-center">Learning Process & Methodology</h3>
            <p align="justify">The methodology adopted to ensure proper learning includes Lectures, Tutorials and Practical's in groups of 30 each. Every classroom is equipped with LCD projector.
            </p>
            <p align="justify">
           <strong>Personality Development & Grooming of the students</strong>  The department emphasizes on personality development & grooming of the students in order to develop professional capabilities of the students. The young energetic engineers are chiseled and groomed to meet all the challenges of the swiftly changing environment. Regular Personality development programmes are organized in the department in collaboration with professional organizations. Besides, motivational lectures, Group Discussions, Mock interview sessions etc. are also organized on a regular basis. The students also get an opportunity to nurture talent and allow it to bloom through a congenial atmosphere for that language lab is used.
            <br>
            One faculty member has been identified as the class incharge for every class. His/her role is to guide the students for:    
            </p>
            <p><strong>
            <i class="bi bi-arrow-right-square-fill text-primary"></i>Academic Excellence </strong>
            </p> 
            <p><strong>
            <i class="bi bi-arrow-right-square-fill text-primary"></i> Personality Development </strong>
            </p> 
            <p><strong>
            <i class="bi bi-arrow-right-square-fill text-primary"></i> Positive Attitude </strong>
            </p> 
            <p><strong>
            <i class="bi bi-arrow-right-square-fill text-primary"></i> Good Behavior </strong>
            </p> 
            <p><strong>
            <i class="bi bi-arrow-right-square-fill text-primary"></i> Discipline </strong>
            </p> 
            <p><strong>
            <i class="bi bi-arrow-right-square-fill text-primary"></i>Proper Dress & Uniform </strong>
            </p> 
            <p><strong>
            <i class="bi bi-arrow-right-square-fill text-primary"></i> Etiquettes & Manners </strong>
            </p> 
            <p><strong>
            <i class="bi bi-arrow-right-square-fill text-primary"></i> Motivation to students to actively participate in extra-curricular activities viz. sports, cultural activities etc. </strong>
            </p> 
            <p><strong>
            <i class="bi bi-arrow-right-square-fill text-primary"></i> To refrain the students not to indulge in ragging & other social evils.</strong>
            </p> 
            Internal Assessment is based on: 
            <ul>
                <li>Two Mid Semester Tests (MSTs) </li>
                <li>Applied Assignments</li>
                <li>Attendance </li>
                <li>Discipline & General behavior of the students</li>
            </ul>
            </p> 
      </div>
      <!-- Learning Ends -->
      <!-- Syllabus -->
        <div class="tab-pane fade show" id="list-Syllabus" role="tabpanel" aria-labelledby="list-Syllabus-list">
        <h3 class="text-center">Syllabus</h3><hr>
       <strong> <a href="https://ptu.ac.in/wp-content/uploads/2022/08/MBA-Upto-4th-Sem.-2021-onwards-affliated-colleges.pdf" class="text-center">Syllabus For MBA</a></strong>
        </div>
        <!-- Syllabus -->
        <!-- Laboratories Starts -->
        <div class="tab-pane fade show" id="list-Laboratories" role="tabpanel" aria-labelledby="list-Laboratories-list">
        <h3 class="text-center">Laboratories</h3><hr>
          <!-- 1 -->
          <div class="card mb-3" style="max-width:100%">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="img/department/ca-labs/1.JPG" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Web Development Lab</h5>
                        <p class="card-text" align="justify">This labs main focus is the study of Web development at the back-end of the website where the programming and interactions are focused on the pages, the study of concepts, technologies, and tools required for developing multi-tiered enterprise-level Web applications, the fundamental architectural elements of programming web sites that produce content dynamically, as well as the database connectivity options, distributed object technologies, n-tier client/server applications architecture, and security issues. The students focus on how a site works and how the customers get things done on it. Students are introduced to World Wide Web applications and design, including Web scripting languages and HTML editors. Students are able to learn how to program CGI and scripts like PHP. They understand how web forms work and can keep a site running effectively.</p>
                </div>
            </div>
        </div>
        </div>
        <div class="card mb-3" style="max-width:100%">
            <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Mobile Application Development</h5>
                        <p class="card-text" align="justify">The process of creating software for smartphones, tablets, and digital assistants—most often for the Android and iOS operating systems—is known as mobile application development. The program can be accessed via a mobile web browser, downloaded from a mobile app store, or preinstalled on the device. The markup and programming languages utilized in this type of software development are HTML5, C#, Java, and Swift. The creation of mobile apps is expanding quickly. Organizations in a variety of sectors, including government, insurance, healthcare, and retail, telecommunications, and e-commerce, need to satisfy consumer expectations for quick, easy ways to conduct business and obtain information. Currently, the most widely used method for individuals and companies to access the internet is through mobile devices—as well as the mobile applications that maximize their potential. In order to maintain relevance, responsiveness, and success, businesses must provide the mobile applications that their partners, clients, and staff want.
                        </p>
                      
                </div>
            </div>
            <div class="col-md-4">
                <img src="img/department/ca-labs/2.png" class="img-fluid rounded-start" alt="...">
            </div>
        </div>
        </div>
        <div class="card mb-3" style="max-width:100%">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="img/department/ca-labs/3.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Software Project Management Lab</h5>
                        <p class="card-text" align="justify"> 
                        Project management software is used for organizing, planning, allocating resources, carrying out, monitoring, and completing software and web projects. Software engineering project management differs from typical project management in that software has a distinct life cycle process that calls for numerous iterations of testing, updating, and user input. In order to stay up with the fast-paced business environment and adapt to the feedback from stakeholders and customers, the majority of IT-related projects are managed using the Agile methodology. One may argue that software is an intangible product. There is very little expertise in creating software goods, and software development is essentially a completely new industry in the world of business. The majority of software products are customized to meet the needs of the customer. The primary reason is because the underlying technology is evolving so quickly and frequently that one product's experience might not translate to another. Since there is risk involved in software development due to all of these commercial and environmental restrictions, effective project management is crucial.
                        </p>
                </div>
            </div>
        </div>
        </div>
    
       
       
        <!-- Main Lab -->
        </div>
        <!-- Main Lab -->
        <!-- Laboratories Ends -->
        <!-- Academic Starts -->
        <!-- Academics main div starts -->
        <div class="tab-pane fade show" id="list-academics" role="tabpanel" aria-labelledby="list-academics-list">
        <h3 class="text-center">Academics Activities </h3><hr>
        <!-- 1 -->
        <div class="card mb-3" style="max-width:100%">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="img/department/academics-ca/1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Innovative Pedagogy Activity “Simulations”</h5>
                        <p class="card-text" align="justify">The department of Computer Applications conducted an innovative pedagogy activity “Simulations” on 14th Feb, 2023. Students of MCA attended the event and learned about the basics of basics of algorithms used to simulate complex real world problems. The event incharge, Dr. Sandeep Ranjan demonstrated the use of Netlogo, an open source simulation and modelling tool. He demonstrated the visualization of real world scenarios from the domains of natural phenomenon (earth sciences etc), society, biological/ physical/ chemical sciences. The students learned how to change the parameters of modeling environments.</p>
                </div>
            </div>
        </div>
        </div>
        <!-- 1 -->
        <!-- 2 -->
        <div class="card mb-3" style="max-width:100%">
        <div class="row g-0">
           
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Innovative Pedagogy Activity “ Data Visualization Fun”</h5>
                        <p class="card-text" align="justify">The department of Computer Applications conducted an innovative pedagogy activity “ Data Visualization Fun” on 13th Feb, 2023. Students of MCA attended the event and learned about the basics of Artificial Intelligence, Machine Learning, Deep Learning and Data Science which are prerequisites for Data Visualization. The event incharge, Dr. Sandeep Ranjan demonstrated the use of NODEXL, an open source data mining and data visualization tool. He mined tweets related to popular Twitter hashtags and performed various operations on them to generate complex graphs. The students were excited to see live data mining/ streaming of social media.</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="img/department/academics-ca/2.jpg" class="img-fluid rounded-start" alt="...">
            </div>
        </div>
        </div>
        <!-- 2 -->
        <!-- 3 -->
        <!-- <div class="card mb-3" style="max-width:100%">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/department/academics-ca/3.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Webinar on Application of Genetic Algorithm in Automatic Test Case Generation in Software Testing  </h5>
                        <p class="card-text" align="justify"> A Go-Kart competition organized by the CT Institute of Technology, Shahpur on 5th of October 2019 for the student to show their driving skills. Go-Karts are designed and manufactured by students itself. Two Go Karts were available at the event one with manual gear shifting with 150 CC Engine and other was automatic with 127 CC Engine. </p>
                    </div>
                </div>
            
            </div>
        </div> -->
       <!-- 3 -->
        <!-- 4 -->
        <div class="card mb-3" style="max-width:100%">
            <div class="row g-0">
            <div class="col-md-4">
                    <img src="img/department/academics-ca/3.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Technical Debate</h5>
                        <!-- <p class="card-text" align="justify">The department of Computer Science & Engineering conducted an innovative pedagogy activity “ Implementation on Arduino on 16 th Feb, 2023. Students of MCA attended the event and learned about the basics of Arduino, IOT The event incharge, Ms.Mamta Verma demonstrated the use of Arduino. The final prototype was showcase a digital temperature and humidity sensor, as well as analog light and water level sensors, as well as a potentiometer to sense angle.</p> -->
                    </div>
                </div>
                
            </div>
        </div>
        <!-- 4 -->
        <div class="card mb-3" style="max-width:100%">
            <div class="row g-0">
               
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Innovative Pedagogy Activity “ Implementation on Arduino" </h5>
                        <p class="card-text" align="justify">The department of Computer Science & Engineering conducted an innovative pedagogy activity “ Implementation on Arduino on 16 th Feb, 2023. Students of MCA attended the event and learned about the basics of Arduino, IOT The event incharge, Ms.Mamta Verma demonstrated the use of Arduino. The final prototype was showcase a digital temperature and humidity sensor, as well as analog light and water level sensors, as well as a potentiometer to sense angle.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="img/department/academics-ca/4.png" class="img-fluid rounded-start" alt="...">
                </div>
            </div>
        </div>
 
            </div>
            <!-- 13 -->
        <!-- Industiral Visit -->
        <div class="tab-pane fade show" id="list-visit" role="tabpanel" aria-labelledby="list-visit-list">
        <h3 class="text-center">Industiral Visit</h3>
        <div class="card mb-3" style="max-width:100%">
        <div class="row g-0">
        <div class="col-md-4">
                <img src="img/department/events-ca/1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Industrial Visit to Hoping Minds  </h5>
                        <p class="card-text" align="justify">Industrial Visit to Hoping Minds, Sahibzada Ajit Singh Nagar. Through this industrial visit, the students learned the software development practices and tools used in the IT Industry and also noted the skills they need to earn to get selected in their dream jobs.</p>
                </div>
            </div>
           
        </div>
        </div>
        <div class="card mb-3" style="max-width:100%">
        <div class="row g-0">
            
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"> Industrial Visit to Solitaire Infosys, Mohali</h5>
                        <!-- <p class="card-text" align="justify">With the aim to provide an exposure to students about practical working environments and give full awareness about the Industrial practices, an exposure visit was arranged by the Department of Business Management at “Oceana Tech" in the month of October 2020. The respected executives of the industry enlightened the students about the history of the industry as of when it was founded and all the ups and downs faced by the company owner to reach the level of success he is at now. Such visits enrich the students with practical knowledge of industrial procedures and widen their knowledge of managing industries.</p> -->
                </div>
            </div>
            <div class="col-md-4">
                <img src="img/department/events-ca/4.png" class="img-fluid rounded-start" alt="...">
            </div>
        </div>
        </div>
        <!-- <div class="card mb-3" style="max-width:100%">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="img/visit/3.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Industiral Visit To Decathlon  </h5>
                        <p class="card-text" align="justify">An industrial trip to Decathlon (Ludhiana) was organized for the students of MBA on 3rd October 2019 by the Department of Business Management. The students explored and had access to the equipment and sports facilities as provided by the officials of the store. All in all it was a great visit. The students enjoyed and expect such kinds of industrial visits to be organized in future. </p>
                </div>
            </div>
        </div>
        </div> -->
      </div>
           
      <!-- Industrial Visit -->
      <!-- Events Starts -->
        <div class="tab-pane fade show" id="list-events" role="tabpanel" aria-labelledby="list-events-list">
        <h3 class="text-center">Events</h3>
        <div class="card mb-3" style="max-width:100%">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="img/department/events-ca/2.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Workshop on Chatbot Development for Entrepreneurs by Quantum Learning, New Delhi</h5>
                        <p class="card-text" align="justify">The students learned the skills required for developing Chatbots. They had hands-on experience with Artificial Intelligence tools and language datasets for developing toy Chatbots.</p>
                </div>
            </div>
        </div>
        </div>
        <div class="card mb-3" style="max-width:100%">
        <div class="row g-0">
            
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Workshop on Video Editing : Startup Opportunity by Kathputlee Arts & Films, New Delhi</h5>
                        <p class="card-text" align="justify">The students learned various video editing tools. These tools are essential for making advertisements and other video projects. Students on mastering these tools can avail online internships for content development profile.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <img src="img/department/events-ca/3.png" class="img-fluid rounded-start" alt="...">
            </div>
        </div>
        </div>
        <!-- <div class="card mb-3" style="max-width:100%">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="img/department/events-cse/3.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Workshop on PC Troubleshooting and Operating System Installation </h5>
                        <p class="card-text" align="justify">It is essential for an engineer to be a troubleshooter who can narrow down on problem and suggest or implement the solution to bring the system back to working state. A workshop on PC troubleshooting and OS installation was conducted by Dr. Sandeep Ranjan, HOD CSE wherein the students learned about the components of a PC and installation of OS both in actual mode and virtual mode.</p>
                </div>
            </div>
        </div>
        </div>
        <div class="card mb-3" style="max-width:100%">
        <div class="row g-0">
            
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Lecture on Soft Skills and Entrepreneurship by O7 Solutions, Jalandhar</h5>
                        <p class="card-text" align="justify">The students learned various aspects of soft skills like communication, body language, dressing, CV writing and positive mindset. This will help the students in getting through the placement rounds.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <img src="img/department/events-cse/4.png" class="img-fluid rounded-start" alt="...">
            </div>
        </div>
        </div>
        <div class="card mb-3" style="max-width:100%">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="img/department/events-cse/5.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Workshop on Advanced Data Structures by Sensation Software Solutions</h5>
                        <p class="card-text" align="justify">The students learned advanced Data Structure concepts by implementing simple mathematical solutions with the help of C. They created toy applications for solving the problems with Big O Notation.</p>
                </div>
            </div>
        </div>
        </div> -->
        <!-- event div ends -->
        </div>
        </div>
    
    <!-- Main -->
    
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
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>