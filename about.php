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
    <!-- iconka -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <title>About - Snake Game</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="index.php" title="Přejít na hlavní stránku">Snake Game</a></div>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <a href="https://youtu.be/iXDnFYu91vY?t=22" class="action_btn">Get Started</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="https://youtu.be/iXDnFYu91vY?t=22" class="action_btn">Get Started</a></li>
        </div>
    </header>

    <main>
        <section id="uvod">
            <h1>Welcome</h1>
            <p>This is a simple website for a small game called Snake.</p>
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