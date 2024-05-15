<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Snake Game</title>
    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />
    <link rel="stylesheet" href="../css/about.css">
    <!-- iconka -->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
    <script src="../scripts/web.js" defer></script>
</head>
<header>
    <div class="navbar">
        <div class="logo"><a href="../index.php" title="Přejít na hlavní stránku">Snake Game</a></div>
        <ul class="links">
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <a href="#" class="action_btn">Privacy</a>
        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>

    <div class="dropdown_menu">
        <li><a href="../index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="#" class="action_btn">Privacy</a></li>
    </div>
</header>
<body>
    <div class="heading">
        <h1>About</h1>
        <p>Do you love playing Snake? Dive into the nostalgia of this classic game and experience the thrill once again!</p>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
            <img src="../assets/gameplay.png" alt="" id="gameplay-image">
            </div>
            <div class="about-content">
                <h2>Rekindle the Classic Fun</h2>
                <p>Dive in the simplicity and excitement of Snake, where every move counts and every moment is filled with anticipation.</p>
            </div>
        </section>
    </div>
    
    <?php include "../php/footer.php" ?>  
</body>
</html>