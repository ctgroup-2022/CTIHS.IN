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
                <a href="#" class="logo">
                    <img src="img/menu/CTIHS_LOGO.png" alt="CTIEMT Logo" class="logo-image">
                </a>
            </div>

            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="nav-links">
                <div class="nav-item active">
                    <a href="#" class="nav-link">
                        About
                        <span class="active-indicator"></span>
                    </a>
                </div>

                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Administration
                        
                    </a>

                </div>

                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Academics
                        <span class="dropdown-arrow"></span>
                    </a>
                    <!-- <div class="dropdown">
                        <a href="#" class="dropdown-item">Vision & Mission</a>
                        <a href="#" class="dropdown-item">Management's Desk</a>
                        <a href="#" class="dropdown-item">About Campus</a>
                    </div> -->
                </div>

                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Admissions and Fees
                        <span class="dropdown-arrow"></span>
                    </a>
                    <!-- <div class="dropdown">
                        <a href="#" class="dropdown-item">Computer Science</a>
                        <a href="#" class="dropdown-item">Mechanical Engineering</a>
                        <a href="#" class="dropdown-item">Civil Engineering</a>
                        <a href="#" class="dropdown-item">Electrical Engineering</a>
                    </div> -->
                </div>

                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Research
                        <span class="dropdown-arrow"></span>
                    </a>
                    <!-- <div class="dropdown">
                        <a href="#" class="dropdown-item">Vision & Mission</a>
                        <a href="#" class="dropdown-item">Management's Desk</a>
                        <a href="#" class="dropdown-item">About Campus</a>
                    </div> -->
                </div>

                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Student Life
                    </a>
                </div>

                <div class="nav-item">
                    <a href="naac.php" class="nav-link">
                        Alumini
                    </a>
                </div>

                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Information Corner
                    </a>
                </div>

                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Picture Gallery
                        <span class="dropdown-arrow"></span>
                    </a>
                    <!-- <div class="dropdown">
                        <a href="#" class="dropdown-item">Vision & Mission</a>
                        <a href="#" class="dropdown-item">Management's Desk</a>
                        <a href="#" class="dropdown-item">About Campus</a>
                    </div> -->
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
