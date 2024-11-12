<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    <!--css-->
    <link rel="stylesheet" href="../asset/css/typography.css">
    <link rel="stylesheet" href="../asset/css/services.css">
    <link rel="stylesheet" href="../asset/css/footer.css">
   
    <!--Font family-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Icons-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="icon" href="../asset/images/church_logo.png" type="image/png" sizes="16x16">
</head>

<body>

    <!--Header part-->
    <header >
        <div class="header-content">
            <div class="logo">
                <p><img src="../asset/images/church_logo.png" alt=""></p>
            </div>
            <div class="list">
                <div class="list-details">
                    <a class="home" href="../index.php">Accueil</a>
                    <a href="about.php               
">À propos</a>
                    <a href="event.php">Evénements</a>
                    <a href="blog.php">Blog</a>
                    <a href="gallery.php">Gallérie</a>
                    <a href="contact.php">Contacts</a>
                         <a class="donate" style="color: white;" href="donations.html">Faire un don ❤</a>
               
                </div>
                <div class="our-menu">
                    <i class="bi bi-list-nested menu-icon"></i>
                    <i class="bi bi-x exit-icon"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Services and Schedules Section -->
    <section id="services" class="services">
        <div class="title">
            <div>
                <h4>Services & Horaires</h4>
                <p></p>
            </div>
            <h2>Nos Services et Horaires</h2>
        </div>
        <p>Apprenez en quelques lignes nos différents services et horaires pour vous permettre une visite et participation à nos activités régulièrement.</p>
        <br>
        <div class="services-content">
            
            <div class="services-item">
                <i class="fa-solid fa-praying-hands"></i> <!-- Icon for prayer and gratitude -->
                <div>
                    <h4>Services quotidiens</h4>
                    <p>Lundi au vendredi 06h50 à 07h50 : Service d’adoration et gratitude.</p>
                </div>
            </div>
            <div class="services-item">
                <i class="fa-solid fa-school"></i> <!-- Icon for supernatural school and love school -->
                <div>
                    <h4>Services hebdomadaires</h4>
                    <p>Mardi 16h00 à 17h45 : Ecole de Surnaturel.</p>
                    <p>Mercredi 16h00 à 17h45 : Ecole d’Amour.</p>
                </div>
            </div>
            <div class="services-item">
                <i class="fa-solid fa-book-bible"></i> <!-- Icon for the school of faith -->
                <div>
                    <h4>Services Sabbatiques</h4>
                    <p>Samedi 07h50 à 10h00 : Ecole de Foi.</p>
                </div>
            </div>
            <div class="services-item">
                <i class="fa-solid fa-users"></i> <!-- Icon for reception and visit -->
                <div>
                    <h4>Suivi des âmes</h4>
                    <p>Jeudis 09h20 à 16h30 : Réception et Visite.</p>
                </div>
            </div>
            <div class="services-item">
                <i class="fa-solid fa-moon"></i> <!-- Icon for night prayer services -->
                <div>
                    <h4>Services des Prières</h4>
                    <p>Toutes les nuits de mardis et mercredis de 23h00 à 01h00 : Nuits d’oracles et des prodiges en présentiel et en ligne.</p>
                </div>
            </div>

        </div>
    </section>


   

    <footer>
        <div class="writer">
            &copy;  <?= date("Y") ?> Holy Spirit Academia church. All rights reserved. <br> Developed by SoftCreatix 
        </div>
    </footer>
    <script src="../asset/javascript/app.js"></script>
</body>
</html>