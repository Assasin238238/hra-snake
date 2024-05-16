<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Version 1.0 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Snake Game</title>
    
    <!-- Font Awesome for icons -->
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" 
    />

    <!-- Custom CSS for the about page -->
    <link rel="stylesheet" href="../css/about.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">

    <!-- External JavaScript file -->
    <script src="../scripts/web.js" defer></script>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NNECHHWH7V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NNECHHWH7V');
</script>
</head>
<body>
    <header>
        <div class="navbar">
            <!-- Logo and link to the main page -->
            <div class="logo"><a href="../index.php" title="Přejít na hlavní stránku">Snake Game</a></div>
            
            <!-- Navigation links -->
            <ul class="links">
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            
            <!-- Privacy link -->
            <a href="https://www.termsfeed.com/live/519680c5-025e-460d-9063-7ef1e846f1f5" class="action_btn">Privacy</a>
            
            <!-- Toggle button for mobile navigation -->
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <!-- Dropdown menu for mobile view -->
        <div class="dropdown_menu">
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="https://www.termsfeed.com/live/519680c5-025e-460d-9063-7ef1e846f1f5" class="action_btn">Privacy</a></li>
        </div>
    </header>

    <!-- Main heading and introductory paragraph -->
    <div class="heading">
        <h1>About</h1>
        <p>Do you love playing Snake? Dive into the nostalgia of this classic game and experience the thrill once again!</p>
    </div>

    <!-- Main content container -->
    <div class="container">
        <section class="about">
            <!-- Image related to the game -->
            <div class="about-image">
                <img src="../assets/gameplay.png" alt="Gameplay Image" id="gameplay-image">
            </div>
            
            <!-- Content describing the game -->
            <div class="about-content">
                <h2>Rekindle the Classic Fun</h2>
                <p>Dive in the simplicity and excitement of Snake, where every move counts and every moment is filled with anticipation.</p>
            </div>
        </section>
    </div>

    <!-- Include footer from an external file -->
    <?php include "../php/footer.php" ?>  
</body>
</html>