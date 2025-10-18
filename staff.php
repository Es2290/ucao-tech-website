<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff - Association Scientifique UCAO-TECH</title>
    <link rel="icon" href="media/ucaotech.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/staff.css">
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
                            <a href="staff.php" class="active">Staff <i class="fas fa-chevron-down"></i></a>
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

    <!-- Bannière Staff avec statistiques animées -->
    <section class="page-banner staff-banner">
        <div class="container">
            <div class="banner-content">
                <h1 class="banner-title">Notre Équipe UCAO TECH</h1>
                <p class="banner-subtitle">Découvrez les talents et passionnés qui font vivre notre association scientifique</p>
                <div class="stats-container">
                    <div class="stat-item">
                        <div class="stat-number" data-target="15">0</div>
                        <div class="stat-label">Membres Actifs</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="4">0</div>
                        <div class="stat-label">Clubs</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="12">0</div>
                        <div class="stat-label">Projets</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- Section Structure Organisationnelle -->
    <section class="organizational-structure">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Structure Organisationnelle</h2>
                <p class="section-subtitle">Notre organisation repose sur une structure collaborative et efficace</p>
            </div>
            
            <div class="structure-visual">
                <div class="structure-level" data-level="executive">
                    <div class="level-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <div class="level-content">
                        <h3 class="level-title">Bureau Exécutif</h3>
                        <p class="level-description">Coordination générale de l'association</p>
                    </div>
                </div>
                
                <div class="structure-connector">
                    <div class="connector-line"></div>
                    <i class="fas fa-arrow-down"></i>
                </div>
                
                <div class="structure-level" data-level="clubs">
                    <div class="level-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <div class="level-content">
                        <h3 class="level-title">Responsables de Clubs</h3>
                        <p class="level-description">Animation des différents pôles techniques</p>
                    </div>
                </div>
                
                <div class="structure-connector">
                    <div class="connector-line"></div>
                    <i class="fas fa-arrow-down"></i>
                </div>
                
                <div class="structure-level" data-level="members">
                    <div class="level-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="level-content">
                        <h3 class="level-title">Membres Actifs</h3>
                        <p class="level-description">Participation aux projets et activités</p>
                    </div>
                </div>
            </div>
            
            <div class="structure-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Collaboration</h3>
                    <p>Chaque membre contribue selon ses compétences dans un esprit d'entraide et d'innovation.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>Notre structure favorise l'émergence de projets créatifs et l'expérimentation technologique.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Croissance</h3>
                    <p>Plus de 50 membres actifs participent régulièrement aux activités et projets de l'association.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Membres du Bureau avec Style EGEI et Photos -->
    <section class="bureau-members">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Bureau Exécutif</h2>
                <p class="section-subtitle">L'équipe dirigeante qui coordonne les activités de l'association</p>
            </div>
            
            <!-- Slider Bureau Exécutif - Style EGEI avec Photos -->
            <div class="direction-cards-slider">
                <div class="cards-container">
                    <!-- Coordonnateur - William ZANNOU -->
                    <div class="direction-card-slide">
                        <div class="member-photo-container">
                            <div class="member-photo">
                                <img src="" alt="William ZANNOU" >
                                <div class="photo-overlay">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="member-titles">
                                <h3 class="member-name">William ZANNOU</h3>
                                <p class="member-position">Coordonnateur UCAO-TECH</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="member-bio">
                                En tant que coordonnateur d'UCAO-TECH, je m'engage à inspirer l'innovation 
                                pour un futur technologique brillant et à fédérer les talents autour de 
                                projets ambitieux.
                            </p>
                            <div class="member-contact">
                                  <a href="mailto:william.zannou@ucaotech.org" class="contact-link">
                                    <i class="fas fa-envelope"></i>
                                    <span>williamzannou@ucaotech.com</span>
                                </a>
                                <a href="tel:+2290162202999" class="contact-phone">
                                    <i class="fas fa-phone"></i>
                                    <span>+229 0162202999</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Secrétaire Général - Romance ADJAHOU -->
                    <div class="direction-card-slide">
                        <div class="member-photo-container">
                            <div class="member-photo">
                                <img src="" alt="Romance ADJAHOU" >
                                <div class="photo-overlay">
                                    <i class="fas fa-pen-fancy"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="member-titles">
                                <h3 class="member-name">Romance ADJAHOU</h3>
                                <p class="member-position">Secrétaire Général</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="member-bio">
                                Je consigne notre histoire et favorise l'échange transparent au sein 
                                de l'association UCAO-TECH, garantissant une communication efficace 
                                entre tous les membres.
                            </p>
                            <div class="member-contact">
                                  <a href="mailto:romanceadjahou@ucaotech.com" class="contact-link">
                                    <i class="fas fa-envelope"></i>
                                    <span>	romanceadjahou@ucaotech.com</span>
                                </a>
                                <a href="tel:+229 46 09 73 57" class="contact-phone">
                                    <i class="fas fa-phone"></i>
                                    <span>+229 46 09 73 57</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Trésorier Général - Élisabeth BOCO -->
                    <div class="direction-card-slide">
                        <div class="member-photo-container">
                            <div class="member-photo">
                                <img src="" alt="Élisabeth BOCO" >
                                <div class="photo-overlay">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="member-titles">
                                <h3 class="member-name">Élisabeth BOCO</h3>
                                <p class="member-position">Trésorière Générale</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="member-bio">
                                Je m'engage à gérer nos finances de manière responsable et transparente, 
                                garantissant les ressources nécessaires à la réalisation de nos projets 
                                innovants.
                            </p>
                            <div class="member-contact">
                                <a href="mailto:elisabath-boco@ucaotech.com" class="contact-link">
                                    <i class="fas fa-envelope"></i>
                                    <span>		elisabath-boco@ucaotech.com</span>
                                </a>
                                <a href="tel:+229 62184517" class="contact-phone">
                                    <i class="fas fa-phone"></i>
                                    <span>+229 62184517</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Organisateur Général - Dodji Virgile TCHIDEHOU -->
                    <div class="direction-card-slide">
                        <div class="member-photo-container">
                            <div class="member-photo">
                                <img src="" alt="Dodji Virgile TCHIDEHOU" >
                                <div class="photo-overlay">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="member-titles">
                                <h3 class="member-name">Dodji Virgile TCHIDEHOU</h3>
                                <p class="member-position">Organisateur Général</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="member-bio">
                                Je m'engage à organiser de manière responsable les activités de l'UCAO-TECH 
                                et à favoriser la bonne collaboration entre les différents clubs et membres 
                                de l'association.
                            </p>
                            <div class="member-contact">
                                <a href="mailto:dodji-virgile-tchidehou@ucaotech.com" class="contact-link">
                                    <i class="fas fa-envelope"></i>
                                    <span>dodji-virgile-tchidehou@ucaotech.com</span>
                                </a>
                                <a href="tel:+229 01 56 04 30 81" class="contact-phone">
                                    <i class="fas fa-phone"></i>
                                    <span>+229 01 56 04 30 81</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Organisateur Adjoint - David BOCOSSA OGA -->
                    <div class="direction-card-slide">
                        <div class="member-photo-container">
                            <div class="member-photo">
                                <img src="" alt="David BOCOSSA OGA" >
                                <div class="photo-overlay">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="member-titles">
                                <h3 class="member-name">David BOCOSSA</h3>
                                <p class="member-position">Organisateur Adjoint</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="member-bio">
                                J'assure la communication pour les événements et appuie l'Organisateur 
                                Général dans l'organisation des activités, veillant au bon déroulement 
                                de chaque événement.
                            </p>
                            <div class="member-contact">
                                <a href="mailto:davidbocossa@ucaotech.com" class="contact-link">
                                    <i class="fas fa-envelope"></i>
                                    <span>davidbocossa@ucaotech.com</span>
                                </a>
                                <a href="tel:+229 48068577" class="contact-phone">
                                    <i class="fas fa-phone"></i>
                                    <span>+229 48068577</span>
                                </a>
                            </div>
                        </div>
                    </div> 
                </div>
                
                <div class="slider-controls">
                    <button class="slider-btn prev-btn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="slider-dots">
                        <span class="dot active" data-index="0"></span>
                        <span class="dot" data-index="1"></span>
                        <span class="dot" data-index="2"></span>
                        <span class="dot" data-index="3"></span>
                        <span class="dot" data-index="4"></span>
                    </div>
                    <button class="slider-btn next-btn">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Responsables de Clubs avec Navigation par Onglets et Photos -->
    <section class="club-leaders">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Responsables de Clubs</h2>
                <p class="section-subtitle">Les experts qui animent nos différents pôles techniques</p>
            </div>
            
            <div class="clubs-tabs-container">
                <!-- Navigation des onglets Clubs -->
                <div class="clubs-tabs-navigation">
                    <button class="club-tab-btn active" data-club="digital-pro">
                        <i class="fas fa-code"></i>
                        Digital Pro
                    </button>
                    <button class="club-tab-btn" data-club="tech-bot">
                        <i class="fas fa-robot"></i>
                        Tech Bot
                    </button>
                    <button class="club-tab-btn" data-club="electricity">
                        <i class="fas fa-bolt"></i>
                        Electricity Club
                    </button>
                    <button class="club-tab-btn" data-club="design">
                        <i class="fas fa-paint-brush"></i>
                        Design Club
                    </button>
                </div>
                
                <!-- Contenu des onglets Clubs -->
                <div class="clubs-tabs-content">
                    <!-- Digital Pro -->
                    <div class="club-tab-panel active" id="digital-pro">
                        <div class="club-info">
                            <h3>Digital Pro</h3>
                            <p>Club orienté programmation, développement web, mobile et sécurité informatique</p>
                        </div>
                        <div class="club-leaders-grid">
                            <div class="club-leader-card">
                                <div class="leader-photo-container">
                                    <div class="leader-photo">
                                        <img src="g" alt="David Jonathan A." >
                                    </div>
                                </div>
                                <div class="leader-info">
                                    <h4>David Jonathan A.</h4>
                                    <p class="leader-role">Responsable Digital Pro</p>
                                    <div class="leader-contact">
                                        <a href="mailto:davidaidasso252@gmail.com" class="contact-link">
                                            <i class="fas fa-envelope"></i>
                                            <span>davidaidasso252@gmail.com</span>
                                        </a>
                                        <a href="tel:+22942558012" class="contact-phone">
                                            <i class="fas fa-phone"></i>
                                            <span>+229 42 55 80 12</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="club-leader-card">
                                <div class="leader-photo-container">
                                    <div class="leader-photo">
                                        <img src="" alt="Ladislas D." >
                                    </div>
                                </div>
                                <div class="leader-info">
                                    <h4>Ladislas D.</h4>
                                    <p class="leader-role">Responsable Digital Pro</p>
                                    <div class="leader-contact">
                                        <a href="mailto:ladislas-dousso@ucaotech.com" class="contact-link">
                                            <i class="fas fa-envelope"></i>
                                            <span>ladislas</span>
                                        </a>
                                        <a href="tel" class="contact-phone">
                                            <i class="fas fa-phone"></i>
                                            <span>+229	91 00 61 72 </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tech Bot -->
                    <div class="club-tab-panel" id="tech-bot">
                        <div class="club-info">
                            <h3>Tech Bot</h3>
                            <p>Club orienté électronique, robotique et réseaux télécom</p>
                        </div>
                        <div class="club-leaders-grid">
                            <div class="club-leader-card">
                                <div class="leader-photo-container">
                                    <div class="leader-photo">
                                        <img src="" alt="Rachelle F." >
                                    </div>
                                </div>
                                <div class="leader-info">
                                    <h4>Rachelle F.</h4>
                                    <p class="leader-role">Responsable Tech Bot</p>
                                    <div class="leader-contact">
                                        <a href="mailto:lrachelle-fagbite@ucaotech.com" class="contact-link">
                                            <i class="fas fa-envelope"></i>
                                            <span>	rachelle-fagbite@ucaotech.com</span>
                                        </a>
                                        <a href="tel" class="contact-phone">
                                            <i class="fas fa-phone"></i>
                                            <span>+229	91 00 61 72 </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="club-leader-card">
                                <div class="leader-photo-container">
                                    <div class="leader-photo">
                                        <img src="" alt="Dodji Virgile T.">
                                    </div>
                                </div>
                                <div class="leader-info">
                                    <h4>Dodji Virgile T.</h4>
                                    <p class="leader-role">Responsable Tech Bot</p>
                                    <div class="leader-contact">
                                        <a href="mailto:dodji.virgile@ucaotech.org" class="contact-link">
                                            <i class="fas fa-envelope"></i>
                                            <span>dodji.virgile@ucaotech.org</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Electricity Club -->
                    <div class="club-tab-panel" id="electricity">
                        <div class="club-info">
                            <h3>Electricity Club</h3>
                            <p>Club orienté électricité, énergies renouvelables et électrotechnique</p>
                        </div>
                        <div class="club-leaders-grid">
                            <div class="club-leader-card">
                                <div class="leader-photo-container">
                                    <div class="leader-photo">
                                        <img src="" alt="Fatihatou S." >
                                    </div>
                                </div>
                                <div class="leader-info">
                                    <h4>Fatihatou S.</h4>
                                    <p class="leader-role">Responsable Electricity Club</p>
                                    <div class="leader-contact">
                                        <a href="mailto:fatihatou.s@ucaotech.org" class="contact-link">
                                            <i class="fas fa-envelope"></i>
                                            <span>fatihatou.s@ucaotech.org</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="club-leader-card">
                                <div class="leader-photo-container">
                                    <div class="leader-photo">
                                        <img src="" alt="Hermes H." >
                                    </div>
                                </div>
                                <div class="leader-info">
                                    <h4>Hermes H.</h4>
                                    <p class="leader-role">Co-Responsable Electricity Club</p>
                                    <div class="leader-contact">
                                        <a href="mailto:hermes.h@ucaotech.org" class="contact-link">
                                            <i class="fas fa-envelope"></i>
                                            <span>hermes.h@ucaotech.org</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Design Club -->
                    <div class="club-tab-panel" id="design">
                        <div class="club-info">
                            <h3>Design Club</h3>
                            <p>Club orienté design numérique, prototypage et création graphique</p>
                        </div>
                        <div class="club-leaders-grid">
                            <div class="club-leader-card">
                                <div class="leader-photo-container">
                                    <div class="leader-photo">
                                        <img src="" alt="Doris J." >
                                    </div>
                                </div>
                                <div class="leader-info">
                                    <h4>Doris J.</h4>
                                    <p class="leader-role">Responsable Design Club</p>
                                    <div class="leader-contact">
                                        <a href="mailto:doris.j@ucaotech.org" class="contact-link">
                                            <i class="fas fa-envelope"></i>
                                            <span>doris.j@ucaotech.org</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="club-leader-card">
                                <div class="leader-photo-container">
                                    <div class="leader-photo">
                                        <img src="" alt="Jacques H." >
                                    </div>
                                </div>
                                <div class="leader-info">
                                    <h4>Jacques H.</h4>
                                    <p class="leader-role">Responsable Design Club</p>
                                    <div class="leader-contact">
                                        <a href="mailto:jacques.h@ucaotech.org" class="contact-link">
                                            <i class="fas fa-envelope"></i>
                                            <span>jacques.h@ucaotech.org</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Comités & Consultants avec Cartes et Photos -->
    <section class="committee-members">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Comités & Consultants</h2>
                <p class="section-subtitle">Nos experts qui apportent leur savoir-faire et accompagnement</p>
            </div>
            
            <div class="committees-container">
                <!-- Navigation des types de comités -->
                <div class="committees-filter">
                    <button class="filter-btn active" data-filter="all">Tous</button>
                    <button class="filter-btn" data-filter="consultants">Consultants</button>
                    <button class="filter-btn" data-filter="moderation">Modération</button>
                    <button class="filter-btn" data-filter="coaching">Coaching</button>
                </div>
                
                <!-- Grille des membres de comités -->
                <div class="committees-grid">
                    <!-- Consultant DEV -->
                    <div class="committee-card" data-category="consultants">
                        <div class="committee-photo-container">
                            <div class="committee-photo">
                                <img src="" alt="LIONEL ADOKO" >
                                <div class="committee-badge">Consultant</div>
                            </div>
                        </div>
                        <div class="committee-content">
                            <h3 class="committee-name">LIONEL ADOKO</h3>
                            <p class="committee-role">Consultant DEV</p>
                            <p class="committee-description">En tant que consultant en développement web et mobile de l'association, il oriente et transforme des idées innovantes en solutions numériques.</p>
                            <div class="committee-contact">
                                <a href="mailto:lionel.adoko@ucaotech.org" class="contact-link">
                                    <i class="fas fa-envelope"></i>
                                    <span>lionel.adoko@ucaotech.org</span>
                                </a>
                                <a href="tel:+22912345678" class="contact-phone">
                                    <i class="fas fa-phone"></i>
                                    <span>+229 12 34 56 78</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modérateur des Projets -->
                    <div class="committee-card" data-category="moderation">
                        <div class="committee-photo-container">
                            <div class="committee-photo">
                                <img src="" alt="William ZANNOU" >
                                <div class="committee-badge">Modération</div>
                            </div>
                        </div>
                        <div class="committee-content">
                            <h3 class="committee-name">William ZANNOU</h3>
                            <p class="committee-role">Modérateur des Projets</p>
                            <p class="committee-description">Occupe le rôle central de Modérateur des Projets au sein de notre organisation. Il supervise la gestion et l'évaluation des projets, veille à leur qualité.</p>
                            <div class="committee-contact">
                                <a href="mailto:william.zannou@ucaotech.org" class="contact-link">
                                    <i class="fas fa-envelope"></i>
                                    <span>williamzannou@ucaotech.com</span>
                                </a>
                                <a href="tel:+2290162202999" class="contact-phone">
                                    <i class="fas fa-phone"></i>
                                    <span>+229 0162202999</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Consultant & Coach d'Anglais -->
                    <div class="committee-card" data-category="coaching">
                        <div class="committee-photo-container">
                            <div class="committee-photo">
                                <img src="" alt="Jean de Dieu H." >
                                <div class="committee-badge">Coaching</div>
                            </div>
                        </div>
                        <div class="committee-content">
                            <h3 class="committee-name">Jean de Dieu H.</h3>
                            <p class="committee-role">Consultant & Coach d'Anglais</p>
                            <p class="committee-description">En tant que Consultant & Coach d'Anglais, il facilite l'apprentissage de l'anglais au sein des clubs en créant des environnements d'apprentissage interactifs.</p>
                            <div class="committee-contact">
                                <a href="mailto:jean.dieu@ucaotech.org" class="contact-link">
                                    <i class="fas fa-envelope"></i>
                                    <span>jean.dieu@ucaotech.org</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section CTA améliorée -->
    <section class="staff-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Rejoignez Notre Équipe</h2>
                <p>Vous souhaitez contribuer à l'innovation technologique et faire partie de notre association dynamique ?</p>
                <div class="cta-buttons">
                    <a href="adhesion.php" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i>
                        Devenir Membre
                    </a>
                    <a href="contact.php" class="btn btn-secondary">
                        <i class="fas fa-envelope"></i>
                        Nous Contacter
                    </a>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Scripts -->
    <script src="js/script.js"></script>
    <script src="js/staff.js"></script>
</body>
</html>