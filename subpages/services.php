<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Version 1.0 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Snake Game</title>
    
    <!-- Font Awesome for icons -->
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" 
    />
    
    <!-- Link to the external CSS stylesheet for the services page -->
    <link rel="stylesheet" href="../css/services.css">
    
    <!-- External JavaScript file -->
    <script src="../scripts/web.js" defer></script>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
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
                <li><a href="about.php">About</a></li>
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
            <li><a href="about.php">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="https://www.termsfeed.com/live/519680c5-025e-460d-9063-7ef1e846f1f5" class="action_btn">Privacy</a></li>
        </div>
    </header>
    
    <!-- Main content container -->
    <div class="container">
        <div class="service-wrapper">
            <div class="service">
                <h1>Our Service <span></span></h1>
                
                <!-- Cards for displaying services -->
                <div class="cards">
                    <!-- Individual service card -->
                    <div class="card">
                        <i class="fa-brands fa-chromecast"></i>
                        <h2>Business Strategy</h2>
                        <p>Crafting strategic plans tailored to your goals with market analysis and innovative approaches.</p>
                    </div>
                    
                    <!-- Individual service card -->
                    <div class="card">
                        <i class="fa-solid fa-layer-group"></i>
                        <h2>Website Development</h2>
                        <p>Building stunning, responsive websites for captivating user experiences.</p>
                    </div>
                    
                    <!-- Individual service card -->
                    <div class="card">
                        <i class="fa-solid fa-user-group"></i>
                        <h2>Marketing And Reporting</h2>
                        <p>Developing targeted campaigns with comprehensive analytics for maximum impact.</p>
                    </div>
                    
                    <!-- Individual service card -->
                    <div class="card">
                        <i class="fa-solid fa-desktop"></i>
                        <h2>Mobile Development</h2>
                        <p>Creating custom mobile apps for seamless user experiences on any platform.</p>
                    </div>
                    
                    <!-- Individual service card -->
                    <div class="card">
                        <i class="fa-solid fa-camera"></i>
                        <h2>Graphic Design</h2>
                        <p>Transforming ideas into compelling visuals that leave a lasting impression.</p>
                    </div>
                    
                    <!-- Individual service card -->
                    <div class="card">
                        <i class="fa-solid fa-gear"></i>
                        <h2>Other</h2>
                        <p>Providing tailored solutions for diverse business needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Include footer content from a separate PHP file -->
    <?php include "../php/footer.php" ?>
</body>
</html>