// Script spécifique à la page UCAO-TECH

document.addEventListener('DOMContentLoaded', function() {
    // Animation des éléments au défilement
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.club-card, .objective-item, .benefit-card, .presentation-image');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.2;
            
            if (elementPosition < screenPosition) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    };
    
    // Initialiser les styles pour l'animation
    const initAnimationStyles = function() {
        const elements = document.querySelectorAll('.club-card, .objective-item, .benefit-card, .presentation-image');
        
        elements.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });
    };
    
    // Initialiser les animations
    initAnimationStyles();
    
    // Écouter l'événement de défilement
    window.addEventListener('scroll', animateOnScroll);
    
    // Déclencher une première fois pour les éléments déjà visibles
    animateOnScroll();
    
    // Mettre à jour l'année dans le footer
    const currentYear = new Date().getFullYear();
    document.getElementById('current-year').textContent = currentYear;
    
    // Effet de parallaxe sur la bannière
    const banner = document.querySelector('.banner');
    
    if (banner) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxSpeed = 0.5;
            banner.style.transform = `translateY(${scrolled * parallaxSpeed}px)`;
        });
    }
    
    // Animation des cartes au survol
    const benefitCards = document.querySelectorAll('.benefit-card');
    const clubCards = document.querySelectorAll('.club-card');
    
    // Combiner toutes les cartes pour les animations de survol
    const allCards = [...benefitCards, ...clubCards];
    
    allCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Navigation fluide vers les ancres
    const smoothScroll = function(target) {
        const element = document.querySelector(target);
        if (element) {
            window.scrollTo({
                top: element.offsetTop - 100,
                behavior: 'smooth'
            });
        }
    };
    
    // Ajouter des écouteurs d'événements pour la navigation interne
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = this.getAttribute('href');
            if (target !== '#') {
                smoothScroll(target);
            }
        });
    });
    
    // Animation spécifique pour les icônes des bénéfices
    const benefitIcons = document.querySelectorAll('.benefit-icon');
    
    benefitIcons.forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            this.style.transform = 'rotate(15deg) scale(1.1)';
        });
        
        icon.addEventListener('mouseleave', function() {
            this.style.transform = 'rotate(0) scale(1)';
        });
    });
});