<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - UCAO TECH Association</title>
    <link rel="icon" href="media/ucaotech.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contact.css">
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
                        <li><a href="galerie.php">Galerie</a></li>
                        <li class="dropdown active">
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

    <!-- Bannière Contact -->
    <section class="contact-banner">
        <div class="container">
            <div class="banner-content">
                <h1>Contactez-nous</h1>
                <p>Nous sommes à votre écoute pour toute question ou collaboration</p>
            </div>
        </div>
    </section>

    <!-- Section Contact Principale -->
    <section class="contact-main">
        <div class="container">
            <div class="contact-grid">
                <!-- Formulaire de Contact -->
                <div class="contact-form-section">
                    <h2>Envoyez-nous un message</h2>
                    <p class="form-description">Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.</p>
                    
                    <form class="contact-form" id="contactForm">
                        <div class="form-group">
                            <label for="name">Nom complet *</label>
                            <input type="text" id="name" name="name" required>
                            <div class="error-message" id="nameError"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Adresse email *</label>
                            <input type="email" id="email" name="email" required>
                            <div class="error-message" id="emailError"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Sujet *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Sélectionnez un sujet</option>
                                <option value="adhesion">Adhésion à l'association</option>
                                <option value="partenariat">Partenariat</option>
                                <option value="projet">Projet de collaboration</option>
                                <option value="information">Demande d'information</option>
                                <option value="autre">Autre</option>
                            </select>
                            <div class="error-message" id="subjectError"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" required placeholder="Décrivez votre demande en détail..."></textarea>
                            <div class="error-message" id="messageError"></div>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <span class="btn-text">Envoyer le message</span>
                            <span class="btn-loading">
                                <i class="fas fa-spinner fa-spin"></i> Envoi en cours...
                            </span>
                        </button>
                    </form>
                </div>

                <!-- Informations de Contact -->
                <div class="contact-info-section">
                    <h2>Nos coordonnées</h2>
                    
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Adresse</h3>
                                <p>Lot 246, rue de l'hôpital St Jean<br>UCAO-UUC, Bénin</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Téléphone</h3>
                                <p>(229) 01 41637898</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Email</h3>
                                <p>ucaotech@gmail.com</p>
                                <p>tech@ucaobenin.org</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Horaires</h3>
                                <p>Lundi - Vendredi: 8h - 18h</p>
                                <p>Samedi: 9h - 13h</p>
                            </div>
                        </div>
                    </div>

                    <!-- Réseaux Sociaux -->
                    <div class="social-contact">
                        <h3>Suivez-nous</h3>
                        <div class="social-links">
                            <a href="#" class="social-link facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-link twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Localisation -->
    <section class="location-section">
        <div class="container">
            <div class="section-header">
                <h2>Notre Localisation</h2>
                <div class="divider"></div>
                <p>Retrouvez-nous sur le campus de l'UCAO-UUC</p>
            </div>
            
            <div class="location-content">
                <div class="map-container">
                    <!-- Carte Google Maps intégrée -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.328389553951!2d2.0831234750122005!3d6.370831223563364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102358456a3b5c5b%3A0x4f5b0e7e8b9b8b8b!2sUCAO-UUC!5e0!3m2!1sfr!2sbj!4v1690000000000!5m2!1sfr!2sbj" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                
                <div class="location-info">
                    <h3>Accès au campus</h3>
                    <div class="access-info">
                        
                        

                        
                        <div class="access-item">
                            <div class="campus-info">
                        <h4>Sur le campus</h4>
                        <ul>
                            <li>Bâtiment principal UCAO St Jean, Cotonou</li>
                            
                            <li>Ouvert aux étudiants et visiteurs</li>
                        </ul>
                    </div>
                        </div>
                    </div>
                    
                    
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
    <script src="js/contact.js"></script>
</body>
</html>