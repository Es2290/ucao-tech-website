<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez la galerie photo et vidéo de l'Association Scientifique UCAO-TECH : événements, projets, séminaires et activités étudiantes.">
    <title>Galerie - Association Scientifique UCAO-TECH</title>
    <link rel="icon" href="media/ucaotech.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Lien vers la feuille de style externe -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/galerie.css">
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
                        <li><a href="document.php">Documents</a></li>
                        <li><a href="actualites.php">Actualités</a></li>
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

    <!-- ################################### Contenu de la page #################################### -->
    
    <!-- Bannière de la page -->
    <section class="page-banner">
        <div class="container">
            <div class="banner-content">
                <h1>Galerie UCAO-TECH</h1>
                <p>Découvrez nos événements, projets et moments mémorables en images</p>
            </div>
        </div>
    </section>

    <!-- Section Contenu Principal -->
    <section class="main-content">
        <div class="container">
            <!-- Introduction -->
            <div class="gallery-intro">
                <h2>Notre Association en Images</h2>
                <p>Explorez notre galerie pour revivre les moments forts de l'association UCAO-TECH : séminaires, hackathons, projets étudiants et bien plus encore. Chaque image raconte une histoire d'innovation, de collaboration et de passion pour la technologie.</p>
            </div>

            <!-- Filtres de la galerie -->
            <div class="gallery-filters">
                <button class="filter-btn active" data-filter="all">Tous</button>
                <button class="filter-btn" data-filter="evenements">Événements</button>
                <button class="filter-btn" data-filter="projets">Projets</button>
                <button class="filter-btn" data-filter="seminaires">Séminaires</button>
                <button class="filter-btn" data-filter="hackathons">Hackathons</button>
                <button class="filter-btn" data-filter="vie-associative">Vie associative</button>
            </div>

            <p></p>

            <!-- Grille de la galerie -->
            <div class="gallery-grid">
                <!-- Élément 1 -->
                <div class="gallery-item" data-category="evenements">
                    <div class="gallery-img">
                        <img src="media/galerie/evenement1.jpg" alt="Séminaire sur l'IA à UCAO-TECH">
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3>Séminaire Intelligence Artificielle</h3>
                                <p>Conférence sur les applications de l'IA dans l'industrie moderne</p>
                                <span class="gallery-date">15 Novembre 2023</span>
                            </div>
                            <div class="gallery-actions">
                                <button class="gallery-action-btn" data-image="media/galerie/evenement1.jpg">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Élément 2 -->
                <div class="gallery-item" data-category="projets">
                    <div class="gallery-img">
                        <img src="media/galerie/projet1.jpg" alt="Projet robotique UCAO-TECH">
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3>Projet Robotique</h3>
                                <p>Développement d'un robot autonome par nos étudiants</p>
                                <span class="gallery-date">Octobre 2023</span>
                            </div>
                            <div class="gallery-actions">
                                <button class="gallery-action-btn" data-image="media/galerie/projet1.jpg">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Élément 3 -->
                <div class="gallery-item" data-category="hackathons">
                    <div class="gallery-img">
                        <img src="media/galerie/hackathon1.jpg" alt="Hackathon innovation UCAO-TECH">
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3>Hackathon Innovation</h3>
                                <p>48h de développement intensif pour résoudre des défis technologiques</p>
                                <span class="gallery-date">20-22 Septembre 2023</span>
                            </div>
                            <div class="gallery-actions">
                                <button class="gallery-action-btn" data-image="media/galerie/hackathon1.jpg">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Élément 4 -->
                <div class="gallery-item" data-category="seminaires">
                    <div class="gallery-img">
                        <img src="media/galerie/seminaire1.jpg" alt="Séminaire cybersécurité UCAO-TECH">
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3>Séminaire Cybersécurité</h3>
                                <p>Présentation des bonnes pratiques en sécurité informatique</p>
                                <span class="gallery-date">5 Octobre 2023</span>
                            </div>
                            <div class="gallery-actions">
                                <button class="gallery-action-btn" data-image="media/galerie/seminaire1.jpg">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Élément 5 -->
                <div class="gallery-item" data-category="vie-associative">
                    <div class="gallery-img">
                        <img src="media/galerie/vie-associative1.jpg" alt="Assemblée générale UCAO-TECH">
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3>Assemblée Générale</h3>
                                <p>Réunion annuelle des membres de l'association</p>
                                <span class="gallery-date">15 Septembre 2023</span>
                            </div>
                            <div class="gallery-actions">
                                <button class="gallery-action-btn" data-image="media/galerie/vie-associative1.jpg">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Élément 6 -->
                <div class="gallery-item" data-category="projets">
                    <div class="gallery-img">
                        <img src="media/galerie/projet2.jpg" alt="Application mobile développée par UCAO-TECH">
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3>Application Mobile</h3>
                                <p>Développement d'une application pour la gestion des événements</p>
                                <span class="gallery-date">Août 2023</span>
                            </div>
                            <div class="gallery-actions">
                                <button class="gallery-action-btn" data-image="media/galerie/projet2.jpg">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Élément 7 -->
                <div class="gallery-item" data-category="evenements">
                    <div class="gallery-img">
                        <img src="media/galerie/evenement2.jpg" alt="Journée portes ouvertes UCAO-TECH">
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3>Journée Portes Ouvertes</h3>
                                <p>Présentation des activités de l'association aux nouveaux étudiants</p>
                                <span class="gallery-date">10 Septembre 2023</span>
                            </div>
                            <div class="gallery-actions">
                                <button class="gallery-action-btn" data-image="media/galerie/evenement2.jpg">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Élément 8 -->
                <div class="gallery-item" data-category="hackathons">
                    <div class="gallery-img">
                        <img src="media/galerie/hackathon2.jpg" alt="Remise des prix hackathon UCAO-TECH">
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3>Remise des Prix</h3>
                                <p>Cérémonie de clôture du hackathon avec remise des récompenses</p>
                                <span class="gallery-date">22 Septembre 2023</span>
                            </div>
                            <div class="gallery-actions">
                                <button class="gallery-action-btn" data-image="media/galerie/hackathon2.jpg">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section vidéos -->
            <div class="videos-section">
                <h2>Nos Vidéos</h2>
                <p>Découvrez nos événements en mouvement à travers nos vidéos</p>
                
                <div class="videos-grid">
                    <div class="video-item">
                        <div class="video-thumbnail">
                            <img src="media/galerie/video1-thumb.jpg" alt="Conférence sur l'IA">
                            <div class="video-play-btn">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="video-info">
                            <h3>Conférence Intelligence Artificielle</h3>
                            <p>Retour en vidéo sur notre séminaire dédié à l'IA et ses applications</p>
                            <span class="video-duration">15:42</span>
                        </div>
                    </div>

                    <div class="video-item">
                        <div class="video-thumbnail">
                            <img src="media/galerie/video2-thumb.jpg" alt="Hackathon UCAO-TECH">
                            <div class="video-play-btn">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="video-info">
                            <h3>Hackathon 2023 - Bilan</h3>
                            <p>Revivez l'ambiance et découvrez les projets réalisés lors de notre hackathon</p>
                            <span class="video-duration">08:15</span>
                        </div>
                    </div>

                    <div class="video-item">
                        <div class="video-thumbnail">
                            <img src="media/galerie/video3-thumb.jpg" alt="Témoignages membres UCAO-TECH">
                            <div class="video-play-btn">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="video-info">
                            <h3>Témoignages des Membres</h3>
                            <p>Découvrez pourquoi nos membres ont rejoint UCAO-TECH</p>
                            <span class="video-duration">05:30</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section d'archives -->
            <div class="archives-section">
                <h2>Archives</h2>
                <p>Explorez nos galeries des années précédentes</p>
                
                <div class="archives-grid">
                    <div class="archive-year">
                        <h3>2022</h3>
                        <div class="archive-preview">
                            <img src="media/galerie/archive-2022.jpg" alt="Galerie 2022">
                            <a href="#" class="archive-link">Voir la galerie 2022 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="archive-year">
                        <h3>2021</h3>
                        <div class="archive-preview">
                            <img src="media/galerie/archive-2021.jpg" alt="Galerie 2021">
                            <a href="#" class="archive-link">Voir la galerie 2021 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="archive-year">
                        <h3>2020</h3>
                        <div class="archive-preview">
                            <img src="media/galerie/archive-2020.jpg" alt="Galerie 2020">
                            <a href="#" class="archive-link">Voir la galerie 2020 <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Appel à l'action -->
            <div class="gallery-cta">
                <h2>Vous avez des photos ou vidéos à partager ?</h2>
                <p>Contribuez à notre galerie en partageant vos photos et vidéos des événements UCAO-TECH</p>
                <a href="contact.php" class="cta-button">Nous contacter</a>
            </div>
        </div>
    </section>

    <!-- Modal pour l'affichage des images en grand -->
    <div class="gallery-modal">
        <div class="modal-content">
            <button class="modal-close">
                <i class="fas fa-times"></i>
            </button>
            <div class="modal-image">
                <img src="" alt="Image agrandie">
            </div>
            <div class="modal-info">
                <h3 class="modal-title"></h3>
                <p class="modal-description"></p>
                <span class="modal-date"></span>
            </div>
            <div class="modal-navigation">
                <button class="modal-prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="modal-next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <div class="footer-logo">
                        <img src="media/ucaotech.png" alt="Logo AS UCAO-TECH">
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

    <!-- Lien vers le fichier JavaScript externe -->
    <script src="/js/galerie.js"></script>
</body>
</html>