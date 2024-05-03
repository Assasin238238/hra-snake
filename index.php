<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assasin238</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Skript pro zobrazení 3D modelu -->
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.2.5/build/spline-viewer.js"></script>
    <style>
        /* Styly pro kontejner s 3D modelem */
        .model-container {
            position: relative; /* Relativní pozice pro umístění kurzoru */
            width: calc(60% - 20%); /* 60% šířka mínus 20% pro levý a pravý okraj */
            height: 450px; /* Určete výšku podle vašich potřeb */
            margin: 0 auto; /* Zarovnání do středu */
            pointer-events: none; /* Zabraňuje průchodu událostí myši k modelu */
        }

        /* Styly pro 3D model */
        spline-viewer {
            position: absolute; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Snake Game</h1>
    </div>
    <div class="section">
        <h2>About Snake Game</h2>
        <p>This is a simple snake game website.</p>
        <h2>Play Snake</h2>
        <a href="php/snake.php" class="play-btn">Play</a>
    </div>
    
    <!-- Kontejner pro zobrazení 3D modelu -->
    <div class="model-container">
        <spline-viewer url="https://prod.spline.design/NsKiIbP5SJNdPS2G/scene.splinecode"></spline-viewer>
    </div>
    
    <footer>
        &copy; 2024; Assasin238. Všechna práva vyhrazena.
    </footer>
</body>
</html>
