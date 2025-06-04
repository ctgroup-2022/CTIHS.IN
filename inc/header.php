<?php
$mediaContent = [
    ['type' => 'image', 'url' => 'img/banners/1.jpg'],
    ['type' => 'image', 'url' => 'img/WEBSITE BANNER 2.jpg'],
    ['type' => 'image', 'url' => 'img/banners/3.jpg'],
    ['type' => 'image', 'url' => 'img/WEBSITE BANNER 4.jpg'],
    ['type' => 'image', 'url' => 'img/WEBSITE BANNER 5.jpg'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Background Slider</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .slider-container {
            position: relative;
            width: 100%;
            height: 90vh;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: opacity 1s ease-in-out;
            opacity: 0;
        }

        .slide.active {
            opacity: 1;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        .navigation {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 2;
        }

        .nav-button {
            cursor: pointer;
            background-color: rgba(255, 255, 255, 0.6);
            border: none;
            padding: 10px 15px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }

        .nav-button:hover {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .nav-button i {
            font-size: 18px;
            color: #000;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .slider-container {
                height: 70vh;
            }

            .slide {
                background-position: top center;
            }
        }

        @media (max-width: 480px) {
            .slider-container {
                height: 60vh;
            }

            .nav-button {
                padding: 8px 12px;
            }

            .nav-button i {
                font-size: 16px;
            }
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Font Awesome for Icons -->
</head>

<body>
    <div class="slider-container">
        <?php foreach ($mediaContent as $index => $media): ?>
            <?php if ($media['type'] === 'image'): ?>
                <div class="slide" style="background-image: url('<?php echo $media['url']; ?>');"></div>
            <?php endif; ?>
        <?php endforeach; ?>
        <div class="overlay"></div>

        <!-- Navigation Buttons -->
        <div class="navigation">
            <button class="nav-button" id="prev-slide">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="nav-button" id="next-slide">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <script>
        const slides = document.querySelectorAll('.slide');
        let currentIndex = 0;

        function showSlide(index) {
            slides[currentIndex].classList.remove('active');
            currentIndex = (index + slides.length) % slides.length; // Ensure index loops within range
            slides[currentIndex].classList.add('active');
        }

        // Initial display of the first slide
        slides[currentIndex].classList.add('active');

        // Next and Previous slide functionality
        document.getElementById('next-slide').addEventListener('click', () => {
            showSlide(currentIndex + 1);
        });

        document.getElementById('prev-slide').addEventListener('click', () => {
            showSlide(currentIndex - 1);
        });

        // Auto-slide every 6 seconds
        setInterval(() => {
            showSlide(currentIndex + 1);
        }, 6000);
    </script>
</body>

</html>
