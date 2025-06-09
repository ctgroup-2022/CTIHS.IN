<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTIHS</title>
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <nav class="navbar">
        <div class="nav-container">
            <div>
                <a href="index.php" class="logo">
                    <img src="img/menu/CTIHS_LOGO.png" alt="CTHs Logo" class="logo-image">
                </a>
            </div>

            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
             <div class="nav-links">
                <div class="nav-item ">
                    <a href="index.php" class="nav-link">
                        Home
                    </a>
                </div>


            <div class="nav-links">
                <div class="nav-item ">
                    <a href="about.php" class="nav-link">
                        About
                         <span class="dropdown-arrow"></span>
                    </a>
                       <div class="dropdown">
                        <a href="mission&vision.php" class="dropdown-item">Vision & Mission</a>
                        <a href="management.php" class="dropdown-item">Management's Desk</a>
                        <a href="about.php" class="dropdown-item">From Principal's Desk</a>
                </div>
</div>
<div class="nav-item">
                    <a href="#" class="nav-link">
                        Departments
                        <span class="dropdown-arrow"></span>
                    </a>
                    <div class="dropdown">
                        <a href="com&mgmt.php" class="dropdown-item">Commerce & Management</a>
                        <a href="physio.php" class="dropdown-item">Physiotherapy</a>
                         <a href="comapp.php" class="dropdown-item">Computer Applications</a>
                          <a href="arts.php" class="dropdown-item">Humanities</a>
                           <a href="management.php" class="dropdown-item">Journalism & Mass Communication</a>
                    </div>
                </div>

                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Academics
                         <span class="dropdown-arrow"></span>
                      <div class="dropdown">
                        <a href="mission&vision.php" class="dropdown-item">Programs Offered</a>
                        <a href="management.php" class="dropdown-item">Program Learning Outcomes</a>
                        <a href="about.php" class="dropdown-item">Learning Process & Methodology</a>
                        <a href="mission&vision.php" class="dropdown-item">Syllabus</a>
                </div>
</div>

                
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Infrastructure
                    </a>
                    <!-- <div class="dropdown">
                        <a href="#" class="dropdown-item">Computer Science</a>
                        <a href="#" class="dropdown-item">Mechanical Engineering</a>
                        <a href="#" class="dropdown-item">Civil Engineering</a>
                        <a href="#" class="dropdown-item">Electrical Engineering</a>
                    </div> -->
                </div>

              
               
                <div class="nav-item">
                    <a href="naac.php" class="nav-link">
                        Alumni
                    </a>
                </div>

                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Research
                    </a>
                </div>

                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Information Corner
                    </a>
                    <!-- <div class="dropdown">
                        <a href="#" class="dropdown-item">Vision & Mission</a>
                        <a href="#" class="dropdown-item">Management's Desk</a>
                        <a href="#" class="dropdown-item">About Campus</a>
                    </div> -->
                </div>
                 <div class="nav-item">
                    <a href="#" class="nav-link">
                        Picture Gallery
                    </a>
                </div>


                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script>
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        navLinks.classList.toggle('active');
    });
    </script>
</body>

</html>
