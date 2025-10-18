// Script pour la page des anciens membres
document.addEventListener('DOMContentLoaded', function() {
    
    // Animation des statistiques
    function animateStats() {
        const anciensCount = document.getElementById('anciens-count');
        const projetsCount = document.getElementById('projets-count');
        const anneesCount = document.getElementById('annees-count');
        
        if (anciensCount && projetsCount && anneesCount) {
            animateValue(anciensCount, 0, 50, 2000);
            animateValue(projetsCount, 0, 25, 2000);
            animateValue(anneesCount, 0, 3, 2000);
        }
    }
    
    function animateValue(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const value = Math.floor(progress * (end - start) + start);
            element.textContent = value + (element.id === 'annees-count' ? '+' : '');
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }
    
    // Filtrage des anciens membres
    const filterButtons = document.querySelectorAll('.filter-btn');
    const ancienCards = document.querySelectorAll('.ancien-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Retirer la classe active de tous les boutons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Ajouter la classe active au bouton cliqué
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            // Filtrer les cartes
            ancienCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-promotion') === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
    
    // Animation au scroll
    function animateOnScroll() {
        const elements = document.querySelectorAll('.ancien-card, .temoignage-card, .stat-item');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.2;
            
            if (elementPosition < screenPosition) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    }
    
    // Initialiser les styles pour l'animation
    function initAnimationStyles() {
        const elements = document.querySelectorAll('.ancien-card, .temoignage-card, .stat-item');
        
        elements.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });
    }
    
    // Initialiser
    initAnimationStyles();
    animateStats();
    
    // Écouter l'événement de défilement
    window.addEventListener('scroll', animateOnScroll);
    
    // Déclencher une première fois pour les éléments déjà visibles
    animateOnScroll();
    
    // Mettre à jour l'année dans le footer
    const currentYear = new Date().getFullYear();
    document.getElementById('current-year').textContent = currentYear;
});