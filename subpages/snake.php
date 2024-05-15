<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=VT323&display=swap"
      rel="stylesheet"
    />
    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />
    <title>Snake Game</title>
    <link rel="stylesheet" href="../css/snakeStyle.css" />
    <!-- iconka -->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
    <script src="../scripts/script.js" defer></script>
  </head>
  <body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="../index.php" title="Přejít na hlavní stránku">Snake Game</a></div>
        </div>
    </header>
    <div>
      <div class="scores">
        <h1 id="score">000</h1> 
        <h1 id="highScore">000</h1>
      </div>
      <div class="game-border-1">
        <div class="game-border-2">
          <div class="game-border-3">
            <div id="game-board"></div>
          </div>
        </div>
      </div>
    </div>
    <h1 id="instruction-text">Press space to start.</h1>
    <?php include "../php/footer.php" ?>
  </body>
</html>