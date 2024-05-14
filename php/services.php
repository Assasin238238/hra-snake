<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Snake Game</title>
    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />
    <link rel="stylesheet" href="../css/services.css">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="../index.php" title="Přejít na hlavní stránku">Snake Game</a></div>
            <ul class="links">
                <li><a href="../index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="../contact.html">Contact</a></li>
            </ul>
            <a href="#" class="action_btn">Privacy</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="../index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="../contact.html">Contact</a></li>
            <li><a href="#" class="action_btn">Privacy</a></li>
        </div>
    </header>
    <div class="container">
        <div class="service-wrapper">
            <div class="service">
                <h1>Our Service <span></span></h1>
                <div class="cards">
                    <div class="card">
                        <i class="fa-brands fa-chromecast"></i>
                        <h2>Business Stratagy</h2>
                         <p>Crafting strategic plans tailored to your goals with market analysis and innovative approaches.</p>   
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-layer-group"></i>
                        <h2>WebSite Development</h2>
                         <p>Building stunning, responsive websites for captivating user experiences.</p>   
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-user-group"></i>
                        <h2>Marketing And Reporting</h2>
                         <p>Developing targeted campaigns with comprehensive analytics for maximum impact.</p>   
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-desktop"></i>
                        <h2>Mobile Development</h2>
                         <p>Creating custom mobile apps for seamless user experiences on any platform.</p>   
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-camera"></i>
                        <h2>Graphic Design</h2>
                         <p>Transforming ideas into compelling visuals that leave a lasting impression.</p>   
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-gear"></i>
                        <h2>Other</h2>
                         <p>Providing tailored solutions for diverse business needs.</p>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        /* Menu */
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
            document.title = "Come back!";
        })

        window.addEventListener("focus", ()=>{
            document.title = docTitle;
        })
    </script>
    <?php include "footer.php" ?>
    
</body>
</html>