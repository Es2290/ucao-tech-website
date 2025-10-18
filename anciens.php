<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anciens Membres - UCAO TECH Association</title>
    <link rel="icon" href="media/ucaotech.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/anciens.css">
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
                        <li class="dropdown active">
                            <a href="staff.php">Staff <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="anciens.php">Anciens Membres</a></li>
                            </ul>
                        </li>
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

    <!-- Bannière Anciens Membres -->
    <section class="anciens-banner">
        <div class="container">
            <div class="banner-content">
                <h1>Anciens Membres</h1>
                <p>Découvrez les responsables qui ont contribué au développement de UCAO TECH</p>
            </div>
        </div>
    </section>

    <!-- Section Présentation -->
    <section class="presentation-anciens">
        <div class="container">
            <div class="section-header">
                <h2>Notre Héritage</h2>
                <div class="divider"></div>
                <p>Les anciens membres et responsables ont posé les fondations de notre association et continuent d'inspirer les nouvelles générations.</p>
            </div>

            <div class="presentation-content">
                <div class="presentation-text">
                    <h3>L'Histoire de UCAO TECH</h3>
                    <p>Depuis sa création, UCAO TECH a été portée par des étudiants passionnés et dévoués. Ces anciens membres ont non seulement contribué au développement technique de l'association, mais ont également instauré une culture d'excellence et d'innovation qui perdure aujourd'hui.</p>
                    
                    <h3>Leur Impact</h3>
                    <p>Les anciens responsables ont organisé des événements marquants, développé des projets innovants et créé des partenariats stratégiques. Leur héritage continue d'inspirer les membres actuels dans leur quête d'excellence technologique.</p>

                    <div class="stats-anciens">
                        <div class="stat-item">
                            <div class="stat-number" id="anciens-count">0</div>
                            <div class="stat-label">Anciens Membres</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" id="projets-count">0</div>
                            <div class="stat-label">Projets Réalisés</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" id="annees-count">0</div>
                            <div class="stat-label">Années d'Histoire</div>
                        </div>
                    </div>
                </div>
                
                <div class="presentation-image">
                    <img src="media/anciens-membres.jpg" alt="Anciens membres UCAO TECH">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Anciens Responsables -->
    <section class="anciens-responsables">
        <div class="container">
            <div class="section-header">
                <h2>Anciens Responsables</h2>
                <div class="divider"></div>
                <p>Découvrez les visages qui ont dirigé UCAO TECH au fil des années</p>
            </div>

            <!-- Filtres par promotion -->
            <div class="filters">
                <button class="filter-btn active" data-filter="all">Tous</button>
                <button class="filter-btn" data-filter="2024">Promotion 2024</button>
                <button class="filter-btn" data-filter="2023">Promotion 2023</button>
                <button class="filter-btn" data-filter="2022">Promotion 2022</button>
                <button class="filter-btn" data-filter="fondateurs">Fondateurs</button>
            </div>

            <!-- Grille des anciens membres -->
            <div class="anciens-grid">
                <?php
                // Injection PHP - Données des anciens membres
                $anciens_membres = [
                    [
                        'nom' => 'William ZANNOU',
                        'poste' => 'Co-fondateur & Ancien Coordonnateur',
                        'promotion' => 'fondateurs',
                        'image' => 'media/anciens/william-zannou.jpg',
                        'description' => 'Pionnier de l\'association, William a posé les bases de UCAO TECH avec une vision claire de l\'innovation technologique.',
                        'competences' => ['Leadership', 'Stratégie', 'Développement'],
                        'reseaux' => [
                            'linkedin' => '#',
                            'email' => 'william.zannou@gmail.com'
                        ]
                    ],
                    [
                        'nom' => 'Héros SESSINOU',
                        'poste' => 'Co-fondateur & Ancien Secrétaire',
                        'promotion' => 'fondateurs',
                        'image' => 'media/anciens/hero-sessinou.jpg',
                        'description' => 'Héros a apporté son expertise technique et son engagement pour le développement des clubs spécialisés.',
                        'competences' => ['Gestion de projet', 'Réseaux', 'Innovation'],
                        'reseaux' => [
                            'linkedin' => '#',
                            'email' => 'hero.sessinou@example.com'
                        ]
                    ],
                    [
                        'nom' => 'Marie DOSSOU',
                        'poste' => 'Ancienne Coordonnatrice',
                        'promotion' => '2024',
                        'image' => 'media/anciens/marie-dossou.jpg',
                        'description' => 'Marie a dirigé l\'association avec dynamisme et a initié de nombreux projets innovants.',
                        'competences' => ['Management', 'Communication', 'IA'],
                        'reseaux' => [
                            'linkedin' => '#',
                            'email' => 'marie.dossou@example.com'
                        ]
                    ],
                    [
                        'nom' => 'Jean AKPL0GAN',
                        'poste' => 'Ancien Trésorier',
                        'promotion' => '2024',
                        'image' => 'media/anciens/jean-akplogan.jpg',
                        'description' => 'Expert en gestion financière, Jean a assuré la pérennité économique de l\'association.',
                        'competences' => ['Finance', 'Budget', 'Planification'],
                        'reseaux' => [
                            'linkedin' => '#',
                            'email' => 'jean.akplogan@example.com'
                        ]
                    ],
                    [
                        'nom' => 'Alice TOUNDE',
                        'poste' => 'Ancienne Responsable Digital Pro',
                        'promotion' => '2023',
                        'image' => 'media/anciens/alice-tounde.jpg',
                        'description' => 'Alice a développé le club Digital Pro et formé de nombreux étudiants à la programmation.',
                        'competences' => ['Programmation', 'Mentorat', 'Web'],
                        'reseaux' => [
                            'linkedin' => '#',
                            'email' => 'alice.tounde@example.com'
                        ]
                    ],
                    [
                        'nom' => 'Kévin ADJAKO',
                        'poste' => 'Ancien Responsable Tech Bot',
                        'promotion' => '2023',
                        'image' => 'media/anciens/kevin-adjako.jpg',
                        'description' => 'Passionné de robotique, Kévin a mené plusieurs projets innovants dans le domaine de l\'automatisation.',
                        'competences' => ['Robotique', 'Électronique', 'IoT'],
                        'reseaux' => [
                            'linkedin' => '#',
                            'email' => 'kevin.adjako@example.com'
                        ]
                    ],
                    [
                        'nom' => 'Sarah MENSAH',
                        'poste' => 'Ancienne Responsable Design Club',
                        'promotion' => '2022',
                        'image' => 'media/anciens/sarah-mensah.jpg',
                        'description' => 'Designer talentueuse, Sarah a donné une identité visuelle forte à l\'association.',
                        'competences' => ['UI/UX Design', 'Branding', 'Créativité'],
                        'reseaux' => [
                            'linkedin' => '#',
                            'email' => 'sarah.mensah@example.com'
                        ]
                    ],
                    [
                        'nom' => 'David HOUNSOU',
                        'poste' => 'Ancien Responsable Electricity Club',
                        'promotion' => '2022',
                        'image' => 'media/anciens/david-hounsou.jpg',
                        'description' => 'Spécialiste en énergies renouvelables, David a développé des projets écologiques innovants.',
                        'competences' => ['Énergie Solaire', 'Électrotechnique', 'Développement Durable'],
                        'reseaux' => [
                            'linkedin' => '#',
                            'email' => 'david.hounsou@example.com'
                        ]
                    ]
                ];

                // Affichage des anciens membres
                foreach ($anciens_membres as $membre) {
                    echo '
                    <div class="ancien-card" data-promotion="' . $membre['promotion'] . '">
                        <div class="ancien-image">
                            <img src="' . $membre['image'] . '" alt="' . $membre['nom'] . '">
                            <div class="promotion-badge">' . $membre['promotion'] . '</div>
                        </div>
                        <div class="ancien-content">
                            <h3>' . $membre['nom'] . '</h3>
                            <p class="ancien-poste">' . $membre['poste'] . '</p>
                            <p class="ancien-description">' . $membre['description'] . '</p>
                            
                            <div class="competences">
                                <h4>Compétences</h4>
                                <div class="competences-list">';
                    
                    foreach ($membre['competences'] as $competence) {
                        echo '<span class="competence-tag">' . $competence . '</span>';
                    }
                    
                    echo '
                                </div>
                            </div>
                            
                            <div class="ancien-reseaux">
                                <a href="' . $membre['reseaux']['linkedin'] . '" class="reseau-link" title="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="mailto:' . $membre['reseaux']['email'] . '" class="reseau-link" title="Email">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Section Témoignages -->
    <section class="temoignages">
        <div class="container">
            <div class="section-header">
                <h2>Témoignages</h2>
                <div class="divider"></div>
                <p>Ce que nos anciens membres disent de leur expérience</p>
            </div>

            <div class="temoignages-grid">
                <div class="temoignage-card">
                    <div class="temoignage-content">
                        <i class="fas fa-quote-left"></i>
                        <p>"UCAO TECH m'a permis de développer mes compétences techniques et mon leadership. Cette expérience a été déterminante pour ma carrière professionnelle."</p>
                    </div>
                    <div class="temoignage-auteur">
                        <strong>William ZANNOU</strong>
                        <span>Co-fondateur</span>
                    </div>
                </div>

                <div class="temoignage-card">
                    <div class="temoignage-content">
                        <i class="fas fa-quote-left"></i>
                        <p>"Grâce à UCAO TECH, j'ai pu travailler sur des projets concrets et développer mon réseau professionnel. Une expérience enrichissante à tous points de vue."</p>
                    </div>
                    <div class="temoignage-auteur">
                        <strong>Marie DOSSOU</strong>
                        <span>Ancienne Coordonnatrice</span>
                    </div>
                </div>

                <div class="temoignage-card">
                    <div class="temoignage-content">
                        <i class="fas fa-quote-left"></i>
                        <p>"L'association m'a offert l'opportunité de transmettre mes connaissances et de m'impliquer dans des projets innovants. Un véritable tremplin professionnel."</p>
                    </div>
                    <div class="temoignage-auteur">
                        <strong>Alice TOUNDÉ</strong>
                        <span>Ancienne Responsable Digital Pro</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact Anciens -->
    <section class="contact-anciens">
        <div class="container">
            <div class="contact-content">
                <h2>Restons en Contact</h2>
                <p>Vous êtes un ancien membre ? Rejoignez notre réseau d'alumni et restez connecté avec la communauté UCAO TECH.</p>
                <div class="contact-buttons">
                    <a href="contact.php" class="btn btn-primary">
                        <i class="fas fa-envelope"></i>
                        Nous contacter
                    </a>
                    <a href="#" class="btn btn-secondary">
                        <i class="fab fa-linkedin-in"></i>
                        Rejoindre le réseau
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

    <!-- Lien vers les fichiers JavaScript -->
    <script src="js/script.js"></script>
    <script src="js/anciens.js"></script>
</body>
</html>