<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Version 1.0 -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Preconnect to Google Fonts for better performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    
    <!-- Google Font VT323 -->
    <link
        href="https://fonts.googleapis.com/css2?family=VT323&display=swap"
        rel="stylesheet"
    />
    
    <!-- Font Awesome for icons -->
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" 
    />
    
    <title>Snake Game</title>
    
    <!-- Link to the external CSS stylesheet for the snake game -->
    <link rel="stylesheet" href="../css/snakeStyle.css" />
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
    
    <!-- External JavaScript file for the game logic -->
    <script src="../scripts/script.js" defer></script>
    
    <!-- Background music for the game -->
    <audio id="background-music" src="../assets/s.mp3" loop></audio>
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
        </div>
    </header>
    
    <div>
        <div class="scores">
            <!-- Score displays -->
            <h1 id="score">000</h1> 
            <h1 id="highScore">000</h1>
        </div>
        
        <!-- Game border structure for styling -->
        <div class="game-border-1">
            <div class="game-border-2">
                <div class="game-border-3">
                    <!-- Game board where the snake game is rendered -->
                    <div id="game-board"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Instruction text displayed before the game starts -->
    <h1 id="instruction-text">Press space to start.</h1>
    
    <!-- Include footer content from a separate PHP file -->
    <?php include "../php/footerSnake.php" ?>
</body>
</html>