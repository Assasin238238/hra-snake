<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to Font Awesome CSS for icons -->
    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />
    <!-- Link to external CSS stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Link to external JavaScript file -->
    <script src="scripts/web.js" defer></script>
    <!-- Script for displaying 3D model -->
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.2.5/build/spline-viewer.js"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
    <title>Snake Game</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="#" title="Přejít na hlavní stránku">Snake Game</a></div>
            <ul class="links">
                <!-- Navigation links -->
                <li><a href="#">Home</a></li>
                <li><a href="subpages/about.php">About</a></li>
                <li><a href="subpages/services.php">Services</a></li>
                <li><a href="subpages/contact.html">Contact</a></li>
            </ul>
            <!-- Privacy action button -->
            <a href="#" class="action_btn">Privacy</a>
            <!-- Toggle button for responsive menu -->
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <!-- Dropdown menu for smaller screens -->
            <li><a href="#">Home</a></li>
            <li><a href="subpages/about.php">About</a></li>
            <li><a href="subpages/services.php">Services</a></li>
            <li><a href="subpages/contact.html">Contact</a></li>
            <li><a href="#" class="action_btn">Privacy</a></li>
        </div>
    </header>

    <main>
        <section id="uvod">
            <h1>Welcome</h1>
            <p>This is a simple website for a small game called Snake.</p>
            <!-- Button to start playing the game -->
            <a href="subpages/snake.php" class="action_btn" id="playBTN">Play</a>
            <!-- Container for displaying 3D model -->
            <div class="model-container">
                <spline-viewer url="https://prod.spline.design/NsKiIbP5SJNdPS2G/scene.splinecode"></spline-viewer>
            </div>
        </section>
    </main>
    <!-- Including the footer using PHP -->
    <?php include "php/footer.php" ?>
</body>
</html>