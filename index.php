<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />
    <link rel="stylesheet" href="css/style.css">
    <!-- Skript pro zobrazení 3D modelu -->
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.2.5/build/spline-viewer.js"></script>
    <!-- iconka -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <style>
            /* Styly pro kontejner s 3D modelem */
            .model-container {
                display: flex; 
                position: relative; 
                width: calc(60% - 20%); 
                height: 450px; 
                margin: 0 auto; 
                pointer-events: none; 
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
    <title>Snake Game</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="index.php" title="Přejít na hlavní stránku">Snake Game</a></div>
            <ul class="links">
                <li><a href="uvod">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="services">Services</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            <a href="#" class="action_btn">Get Started</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="uvod">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="services">Services</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="#" class="action_btn">Get Started</a></li>
        </div>
    </header>

    <main>
        <section id="uvod">
            <h1>Welcome</h1>
            <p>This is a simple website for a small game called Snake.</p>
            <a href="php/snake.php" class="action_btn">Play</a>
            <!-- Kontejner pro zobrazení 3D modelu -->
            <div class="model-container">
                <spline-viewer url="https://prod.spline.design/NsKiIbP5SJNdPS2G/scene.splinecode"></spline-viewer>
            </div>
        </section>
    </main>
    

    <script>
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')
        const modelContainer = document.querySelector('.model-container')

        toggleBtn.onclick = function () {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'

            
        }
        /* Leaving website :( */
        let docTitle = document.title;
        window.addEventListener("blur", ()=>{
            document.title = "Come back! :(";
        })

        window.addEventListener("focus", ()=>{
            document.title = docTitle;
        })
    </script>
    <footer>
        &copy; 2024 Copyright all right reserved | Developed by Assasin238
    </footer>
</body>
</html>