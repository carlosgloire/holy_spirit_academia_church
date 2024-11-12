<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>à propos</title>

    <!--css-->
    <link rel="stylesheet" href="../asset/css/typography.css">
    <link rel="stylesheet" href="../asset/css/about.css">
    <link rel="stylesheet" href="../asset/css/footer.css">
   
    <!--Font family-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <!--Icons-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="icon" href="../asset/images/church_logo.png" type="image/png" sizes="16x16">
</head>

<body>

    <!--Header part-->
    <header>
        <div class="header-content">
            <div class="logo">
                <p><img src="../asset/images/church_logo.png" alt=""></p>
            </div>
            <div class="list">
                <div class="list-details">
                    <a class="home" href="../index.php">Accueil</a>
                    <a href="services.php">Services & Horaires</a>
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

    <!-- About Us Section -->
    <section id="about" class="about">
        <div class="title">
            <div>
                <h4>à propos</h4>
                <p></p>
            </div>
            <h2>à propos de nous</h2>
        </div>
        <div class="about-content">
            <div class="about-text">
                <p>
                    Jean 14.26<br>
                    “Mais le consolateur (l’aide, l’avocat, l’intercesseur, le conseiller, 
                    le tonificateur, la réserve), l’esprit saint que le Père enverra en 
                    mon nom, vous enseignera toutes choses et vous rappellera tout 
                    ce que je vous ai appris”
                </p><br>
                <p><strong>Holy spirit’ academia</strong><br>
                    Nous sommes un centre apostolico-prophétique christique de Saint Esprit pour un corps du Christ sain, régénéré et sanctifié par le feu absolu et l’illumination de sa connaissance pure.
                </p><br>
                <p><strong>Notre vision</strong><br>
                    Illuminer les nations par la connaissance de Saint Esprit pour la glorification du Christ avec Amour, Foi et une Pureté de vie selon la justice de YHWH auprès des hommes. Jean 14.26
                </p><br>
                <p><strong>Nos valeurs</strong><br>
                    Amour, Foi, Sanctification, Adoration, Service.
                </p><br>
                <p><strong>Notre mission</strong><br>
                    Ramener le cœur du père vers les fils pour restaurer le sacerdoce par le rétablissement de l’amour et la foi dans le service de YHWH par une armée illuminée de Saint Esprit. Luc 1.16
                </p><br>
                <p><strong>Nos responsabilités</strong><br>
                    Bâtir un royaume des vrais adorateurs, ramener le cœur du père vers les fils, illuminer le monde par la connaissance absolue, restaurer la sacrificature divine, allumer, rallumer & maintenir la mèche qui brûle. Hébreux 13.14 & Esaïe 42.7
                </p><br>
                <p><strong>Notre champ</strong><br>
                    Puis, il dit : allez par tout le monde et prêchez la bonne nouvelle à toute la création. Marc 16.15
                </p><br>
                <p><strong>Notre stratégie</strong><br>
                    Transformer une génération par la rencontre et la connaissance de saint-esprit qui illuminent les yeux du cœur pour former une ambassade des disciples faits transformateurs de vie et transporteurs du cœur de père vers les fils.
                </p><br>
                <p><strong>Outils</strong><br>
                    Conférences, journées d’adoration & enseignements, littérature, retraites de formations & équipements, masters class, écoles de formations de disciples.
                </p><br>
                <p><strong>Canaux</strong><br>
                    Présentiel, réseaux-sociaux, médias : rtv & presse écrite, affichage, moisson sur le terrain.
                </p>
            </div>
        </div>
    </section>

    <script src="../asset/javascript/app.js"></script>

    <footer>
        <div class="writer">
            &copy;  <?= date("Y") ?> Holy spirit academia church. All rights reserved. <br> Developed by softcreatix 
        </div>
    </footer>

</body>
</html>
