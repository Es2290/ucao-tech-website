<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - Association Scientifique</title>
    <link rel="icon" href="media/ucaotech.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Lien vers la feuille de style externe -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/faqs.css">
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
                    <!-- Logo temporaire - à remplacer par le vrai logo -->
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

    <!-- ################################### Contenu de la page FAQ #################################### -->

    <!-- Section FAQ Hero -->
    <section class="faq-hero">
        <div class="container">
            <div class="faq-hero-content">
                <h1>Foire Aux Questions</h1>
                <div class="container">
        <p class="typing-animation">Retrouvez ici les réponses aux questions les plus fréquemment posées </span></p>
    </div>
            </div>
        </div>
        
    </section>

    <!-- Barre de recherche FAQ -->
    <section class="faq-search">
        <div class="container">
            <div class="search-container">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" id="faq-search-input" placeholder="Rechercher une question...">
                    <button id="faq-search-btn">Rechercher</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation par catégories -->
    <section class="faq-categories">
        <div class="container">
            <div class="categories-container">
                <button class="category-btn active" data-category="all">Toutes les questions</button>
                <button class="category-btn" data-category="adhesion">Adhésion</button>
                <button class="category-btn" data-category="activites">Activités</button>
                <button class="category-btn" data-category="membres">Membres</button>
                <button class="category-btn" data-category="evenements">Événements</button>
                <button class="category-btn" data-category="general">Général</button>
                <button class="category-btn" data-category="Questionsfrequentes">Questions Fréquentes</button>
            </div>
        </div>
    </section>

    <!-- Section FAQ -->
    <section class="faq-section">
        <div class="container">
            <div class="faq-container">
                <!-- Catégorie: Adhésion -->
                <div class="faq-category-group" data-category="adhesion">
                    <h2 class="faq-category-title">Adhésion</h2>
                    <div class="faq-items">
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Comment adhérer à l'association UCAO-TECH ?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Pour adhérer à UCAO-TECH, vous devez être étudiant de l'UCAO. Rendez-vous sur notre page d'adhésion, remplissez le formulaire en ligne et participez à notre prochaine réunion d'information. Les frais d'adhésion annuels sont de 5 000 FCFA.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Quels sont les avantages d'être membre ?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>En tant que membre, vous bénéficiez de :</p>
                                <ul>
                                    <li>Accès à tous nos événements et formations</li>
                                    <li>Réseautage avec des professionnels du secteur</li>
                                    <li>Accès à nos ressources et documentations</li>
                                    <li>Participation aux projets innovants</li>
                                    <li>Certificats de participation</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Puis-je rejoindre l'association en cours d'année ?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Oui, vous pouvez nous rejoindre à tout moment de l'année académique. Cependant, nous recommandons de vous inscrire en début d'année pour ne manquer aucun événement important.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Catégorie: Activités -->
                <div class="faq-category-group" data-category="activites">
                    <h2 class="faq-category-title">Activités</h2>
                    <div class="faq-items">
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Quels types d'activités organisez-vous ?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Nous organisons diverses activités :</p>
                                <ul>
                                    <li>Ateliers de programmation et développement</li>
                                    <li>Séminaires sur les technologies émergentes</li>
                                    <li>Hackathons et compétitions de coding</li>
                                    <li>Conférences avec des experts du secteur</li>
                                    <li>Visites d'entreprises technologiques</li>
                                    <li>Projets de recherche et développement</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Les activités sont-elles réservées aux membres ?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>La plupart de nos activités sont ouvertes à tous les étudiants de l'UCAO. Cependant, certaines activités premium (formations avancées, événements spéciaux) sont réservées aux membres actifs de l'association.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Catégorie: Membres -->
                <div class="faq-category-group" data-category="membres">
                    <h2 class="faq-category-title">Membres</h2>
                    <div class="faq-items">
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Comment puis-je m'impliquer davantage dans l'association ?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Plusieurs possibilités s'offrent à vous :</p>
                                <ul>
                                    <li>Rejoindre un comité (événementiel, communication, technique)</li>
                                    <li>Proposer et organiser un événement</li>
                                    <li>Devenir mentor pour les nouveaux membres</li>
                                    <li>Participer à nos projets de recherche</li>
                                    <li>Représenter l'association lors d'événements externes</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Y a-t-il des obligations pour les membres ?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Les membres sont encouragés à :</p>
                                <ul>
                                    <li>Participer régulièrement aux activités</li>
                                    <li>Respecter le code de conduite de l'association</li>
                                    <li>Payer les cotisations annuelles</li>
                                    <li>Contribuer activement à la vie de l'association</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Catégorie: Événements -->
                <div class="faq-category-group" data-category="evenements">
                    <h2 class="faq-category-title">Événements</h2>
                    <div class="faq-items">
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Comment suis-je informé des prochains événements ?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Nous communiquons nos événements par plusieurs canaux :</p>
                                <ul>
                                    <li>Notre site web et page d'accueil</li>
                                    <li>Groupes WhatsApp dédiés</li>
                                    <li>Réseaux sociaux (Facebook, Instagram)</li>
                                    <li>Affichage sur les panneaux de l'université</li>
                                    <li>Newsletter par email pour les membres</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Dois-je m'inscrire à l'avance pour les événements ?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Cela dépend de l'événement. Pour les ateliers avec places limitées, l'inscription préalable est obligatoire. Pour les conférences et séminaires, l'inscription est recommandée mais pas toujours obligatoire. Les détails sont précisés pour chaque événement.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Catégorie: Général -->
                <div class="faq-category-group" data-category="general">
                    <h2 class="faq-category-title">Général</h2>
                    <div class="faq-items">
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Quelle est la relation entre UCAO-TECH et EGEI ?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>UCAO-TECH est l'association scientifique qui a vu le jour suite à des reflexions incessantes de deux étudiants de l'EGEI,tandis que l'EGEI est l' Ecole de  Génie Electrique et Informatique de l'UCAO-UUC. Nous collaborons étroitement sur de nombreux projets et événements inter-filières.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Comment puis-je contacter l'association ?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Vous pouvez nous contacter par :</p>
                                <ul>
                                    <li>Email : ucaotech@gmail.com</li>
                                    <li>Téléphone : (+229) 0141637898</li>
                                    <li>Réseaux sociaux:Facebook,WhatsApp,Instagram.</li>
                                    <li>Directement à l'université (bureau de l'association)</li>
                                    <li>Via le formulaire de contact sur notre site</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>L'association propose-t-elle des opportunités de stage ?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Oui,déseormais nous collaborerons avec l'EGEI afin ue la faisabilténdu stage au sein de l'associaion soit une chose effective et aussi nous sommes à la recherche de partenariats avec plusieurs entreprises qui proposeront régulièrement des stages et opportunités d'emploi à nos membres les plus actifs et talentueux. Ces offres sont partagées en priorité avec nos membres.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Catégorie: Questions Fréquentes -->
                <div class="faq-category-group" data-category="Questionsfrequentes">
                      <h2 class="faq-category-title">Questions Fréquentes</h2>
                 <div class="faq-items">
                      <div class="faq-item">
                         <div class="faq-question">
                             <span>Qui peut adhérer à UCAO-TECH ?</span>
                             <i class="fas fa-chevron-down"></i>
                         </div>
                         <div class="faq-answer">
                              <p>Tous les étudiants de l'UCAO en particulier de l'EGEI, quel que soit leur niveau ou filière, peuvent adhérer au club. Les alumni sont également les bienvenus dans notre formule dédiée.</p>
                         </div>
                  </div>
                  <div class="faq-item">
                      <div class="faq-question">
                         <span>Quand puis-je adhérer ?</span>
                         <i class="fas fa-chevron-down"></i>
                      </div>
                      <div class="faq-answer">
                          <p>Les adhésions sont ouvertes tout au long de l'année académique. Cependant, nous recommandons d'adhérer en début d'année pour profiter de tous les événements.</p>
                      </div>
                 </div>
                 <div class="faq-item">
                     <div class="faq-question">
                         <span>Les frais d'adhésion sont-ils remboursables ?</span>
                         <i class="fas fa-chevron-down"></i>
                     </div>
                     <div class="faq-answer">
                         <p>Les frais d'adhésion ne sont pas remboursables. Ils couvrent les frais de fonctionnement pour l'année académique ainsi que pour l'achat des matériels de travail.</p>
                     </div>
                 </div>
                 <div class="faq-item">
                      <div class="faq-question">
                         <span>Y a-t-il un entretien d'admission ?</span>
                         <i class="fas fa-chevron-down"></i>
                     </div>
                     <div class="faq-answer">
                         <p>Oui, un entretien de motivation est organisé pour mieux vous connaître et vous orienter vers les projets qui correspondent à vos aspirations.</p>
                     </div>
                 </div>
                 <div class="faq-item">
                     <div class="faq-question">
                         <span>Quelle est la durée de l'adhésion ?</span>
                         <i class="fas fa-chevron-down"></i>
                     </div>
                     <div class="faq-answer">
                         <p>L'adhésion est valable pour une année académique complète, de septembre à août. Le renouvellement se fait chaque année.</p>
                     </div>
                 </div>
                 <div class="faq-item">
                     <div class="faq-question">
                         <span>Puis-je participer aux activités sans être membre ?</span>
                         <i class="fas fa-chevron-down"></i>
                     </div>
                     <div class="faq-answer">
                         <p>Certains événements sont ouverts au public, mais la plupart des activités (projets, formations, hackathons) sont réservées aux membres actifs.</p>
                     </div>
                 </div>
                </div>
            </div>

              
        </div>
    </section>

    <!-- Section Contact d'urgence -->
    <section class="faq-contact">
        <div class="container">
            <div class="contact-cta">
                <h2>Vous n'avez pas trouvé réponse à votre question ?</h2>
                <p>Notre équipe est à votre disposition pour vous aider</p>
                <a href="contact.php" class="contact-btn">Nous Contacter</a>
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

    <!-- Lien vers le fichier JavaScript externe -->
    <script src="js/faqs.js"></script>
</body>
</html>