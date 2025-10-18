<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association Scientifique UCAO-TECH</title>
    <link rel="icon" href="media/ucaotech.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="css/accueil.css">

    </head>
<body>
    <!-- Header supérieur -->
    <div class="header-top">
        <div class="container">
            <div class="info-scroll">
                <span class="info-label">Information</span>
                <div class="info-scroll-content">
                    Inscriptions ouvertes pour le prochain séminaire sur l'intelligence artificielle
                    <span>|</span> Date limite: 15 décembre 2023
                    <span>|</span> Résultats du concours d'innovation disponible
                    <span>|</span> Prochain hackathon le 20 janvier 2024
                </div>
            </div>
        </div>
    </div>

    <!-- Header principal -->
    <header class="header-main">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="index.php"><img src="media/UCAO-TECH.png" alt="Logo AS UCAO-TECH"></a>
                </div>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <nav>
                    <ul class="nav-menu">
                        <li class="dropdown">
                            <a href="index.php">Accueil <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="ucao-tech.php">UCAO-TECH</a></li>
                                <li><a href="egei.php">EGEI</a></li>
                            </ul>
                        </li>
                        <li><a href="adhesion.php">Adhésion</a></li>
                        <li class="dropdown">
                            <a href="staff.php">Staff <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="anciens.php">Anciens Membres</a></li>
                            </ul>
                        </li>
                        <li><a href="actualites.php">Actualités</a></li>
                        <li><a href="document.php">Documents</a></li>
                        <li><a href="galerie.php">Galerie</a></li>
                        <li class="dropdown">
                            <a href="contact.php">Contact <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="faqs.php">FAQs</a></li>
                            </ul>
                        </li>
                        <li class="search-icon">
                            <i class="fas fa-search"></i>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Bannière défilante -->
    <section class="banner">
        <div class="slides">
            <div class="slide slide-1">
                <div class="slide-content">
                    <h2>Association Scientifique UCAO-TECH</h2>
                    <p>Unis pour la technologie, ensemble vers l'innovation</p>
                    <a href="adhesion.php" class="btn-primary">Rejoignez-nous</a>
                </div>
            </div>
            <div class="slide slide-2">
                <div class="slide-content">
                    <h2>École du Génie Électrique et Informatique</h2>
                    <p>Former les innovateurs de demain, aujourd'hui</p>
                    <a href="egei.php" class="btn-primary">Découvrir EGEI</a>
                </div>
            </div>
            <div class="slide slide-3">
                <div class="slide-content">
                    <h2>Université Catholique de l'Afrique de l'Ouest</h2>
                    <p>FOI - SCIENCE - ACTION</p>
                    <a href="ucao-tech.php" class="btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="banner-dots">
            <div class="dot active" data-slide="0"></div>
            <div class="dot" data-slide="1"></div>
            <div class="dot" data-slide="2"></div>
        </div>
    </section>

    <!-- Section Historique -->
    <section class="history">
        <div class="container">
            <div class="section-title">
                <h2>Notre Histoire</h2>
            </div>
            <div class="history-content">
                <div class="history-text">
                    <p>L'aventure UCAO-TECH a commencé avec la vision partagée de deux étudiants passionnés, William ZANNOU et Héros SESSINOU. Observant le manque d'initiatives associatives centrées sur la technologie au sein de l'UCAO-UUC, ils ont décidé de prendre les choses en main et de créer un espace où l'innovation et la science pourraient s'épanouir.</p>
                    <p>Leur ambition était claire : offrir aux étudiants de notre université une plateforme pour explorer les technologies émergentes, participer à des projets de recherche concrets et développer des compétences qui feront d'eux les professionnels recherchés de demain.</p>
                    <p>Aujourd'hui, UCAO-TECH rassemble une communauté dynamique d'étudiants curieux, d'enseignants engagés et de professionnels inspirants, tous unis par une même passion pour la technologie et son potentiel à transformer notre société.</p>
                </div>
                <div class="history-image">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Équipe de l'association">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Actualités -->
    <section class="news">
        <div class="container">
            <div class="section-title">
                <h2>Actualités Récentes</h2>
            </div>
            <div class="news-carousel">
                <div class="news-container">
                    <!-- Actualité 1 -->
                    <div class="news-card">
                        <div class="news-image">
                            <div class="news-date">15 Nov 2023</div>
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Séminaire IA">
                        </div>
                        <div class="news-content">
                            <h3 class="news-title">Séminaire sur l'Intelligence Artificielle</h3>
                            <p class="news-excerpt">Un séminaire exclusif sur les applications de l'IA dans l'industrie moderne avec des experts du secteur.</p>
                            <a href="#" class="news-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Actualité 2 -->
                    <div class="news-card">
                        <div class="news-image">
                            <div class="news-date">5 Nov 2023</div>
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Hackathon">
                        </div>
                        <div class="news-content">
                            <h3 class="news-title">Hackathon Innovation 2023</h3>
                            <p class="news-excerpt">Notre hackathon annuel a réuni plus de 50 participants pour développer des solutions technologiques innovantes.</p>
                            <a href="#" class="news-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Actualité 3 -->
                    <div class="news-card">
                        <div class="news-image">
                            <div class="news-date">28 Oct 2023</div>
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Partenariat">
                        </div>
                        <div class="news-content">
                            <h3 class="news-title">Nouveau Partenariat avec TechCorp</h3>
                            <p class="news-excerpt">Signature d'un partenariat stratégique avec TechCorp pour des stages et projets collaboratifs.</p>
                            <a href="#" class="news-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Actualité 4 -->
                    <div class="news-card">
                        <div class="news-image">
                            <div class="news-date">15 Oct 2023</div>
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Conférence">
                        </div>
                        <div class="news-content">
                            <h3 class="news-title">Conférence sur la Cybersécurité</h3>
                            <p class="news-excerpt">Une journée dédiée aux enjeux de la cybersécurité avec des experts internationaux.</p>
                            <a href="#" class="news-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Actualité 5 -->
                    <div class="news-card">
                        <div class="news-image">
                            <div class="news-date">2 Oct 2023</div>
                            <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Projet Robotique">
                        </div>
                        <div class="news-content">
                            <h3 class="news-title">Projet Robotique: Premiers Tests</h3>
                            <p class="news-excerpt">L'équipe robotique a réalisé avec succès les premiers tests de son prototype autonome.</p>
                            <a href="#" class="news-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Actualité 6 -->
                    <div class="news-card">
                        <div class="news-image">
                            <div class="news-date">20 Sep 2023</div>
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Rentrée">
                        </div>
                        <div class="news-content">
                            <h3 class="news-title">Rentrée Universitaire 2023-2024</h3>
                            <p class="news-excerpt">Cérémonie d'accueil des nouveaux membres et présentation du programme de l'année.</p>
                            <a href="#" class="news-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-controls">
                    <button class="carousel-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-btn next-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="news-button">
                <a href="actualites.php" class="btn-primary">Toutes nos actualités</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <div class="footer-logo">
                        <a href="index.php"><img src="media/ucaotech.png" alt="Logo AS UCAO-TECH"></a>
                    </div>
                    <div class="footer-slogan">
                        Unis pour la technologie, ensemble vers l'innovation
                    </div>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>

                    </div>
                </div>
                <div class="footer-column">
                    <h3>Menu</h3>
                    <ul class="footer-links">
                        <li><a href="ucao-tech.php">UCAO-TECH</a></li>
                        <li><a href="egei.php">EGEI</a></li>
                        <li><a href="adhesion.php">Adhésion</a></li>
                        <li><a href="document.php">Documents</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Liens rapides</h3>
                    <ul class="footer-links">
                        <li><a href="https://ucaobenin.org/" target="_blank">Site UCAO-UUC</a></li>
                        <li><a href="https://ucaobeninlmd360.odoo.com/admission" target="_blank">Admission UCAO</a></li>
                        <li><a href="https://ucaobenin.org/pages/contact" target="_blank">Contact UCAO</a></li>
                        <li><a href="https://media.ucaobenin.org/" target="_blank">Media UCAO</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul class="footer-links footer-contact">
                        <li><i class="fas fa-phone"></i> (229) 01 41637898</li>
                        <li><i class="fas fa-envelope"></i> ucaotech@gmail.com</li>
                        <li><i class="fas fa-envelope"></i> tech@ucaobenin.org</li>
                        <li><i class="fas fa-map-marker-alt"></i> Lot 246, rue de l'hôpital St Jean</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <span id="current-year"></span> AS UCAO-TECH. Tous droits réservés par le <a href="ucao-tech.php">Digital-Pro</a></p>
            </div>
        </div>
    </footer>
    <script src="js/accueil.js"></script>

</body>
</html>
