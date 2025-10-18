// Staff Page JavaScript - UCAO TECH Association
// Slider Bureau Exécutif avec style EGEI

class StaffPage {
    constructor() {
        this.cardsContainer = null;
        this.cards = null;
        this.prevBtn = null;
        this.nextBtn = null;
        this.dots = null;
        this.currentIndex = 0;
        this.totalCards = 0;
        this.init();
    }

    init() {
        this.setupBureauSlider();
        this.setupScrollAnimations();
        this.setupClubTabs();
        this.setupCommitteeFilter();
        this.setupCounters();
        this.setupHoverEffects();
        this.setCurrentYear();
    }

    // Slider Bureau Exécutif - Style EGEI
    setupBureauSlider() {
        this.cardsContainer = document.querySelector('.cards-container');
        this.cards = document.querySelectorAll('.direction-card-slide');
        this.prevBtn = document.querySelector('.slider-btn.prev-btn');
        this.nextBtn = document.querySelector('.slider-btn.next-btn');
        this.dots = document.querySelectorAll('.slider-dots .dot');
        
        this.totalCards = this.cards.length;
        
        function getVisibleCardsCount() {
            const containerWidth = document.querySelector('.direction-cards-slider').offsetWidth;
            const cardWidth = 350 + 30; // card width + gap
            return Math.floor(containerWidth / cardWidth);
        }
        
        const updateSlider = () => {
            const visibleCards = getVisibleCardsCount();
            const maxIndex = Math.max(0, this.totalCards - visibleCards);
            
            // Ajuster l'index courant si nécessaire
            if (this.currentIndex > maxIndex) {
                this.currentIndex = maxIndex;
            }
            
            const cardWidth = 350 + 30;
            const translateX = this.currentIndex * cardWidth;
            this.cardsContainer.style.transform = `translateX(-${translateX}px)`;
            
            // Mettre à jour les dots
            this.dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentIndex);
            });
            
            // Mettre à jour les boutons
            this.prevBtn.disabled = this.currentIndex === 0;
            this.nextBtn.disabled = this.currentIndex >= maxIndex;
            
            // Feedback visuel pour les boutons désactivés
            this.prevBtn.style.opacity = this.prevBtn.disabled ? '0.5' : '1';
            this.nextBtn.style.opacity = this.nextBtn.disabled ? '0.5' : '1';
        };
        
        // Navigation
        this.prevBtn.addEventListener('click', () => {
            if (this.currentIndex > 0) {
                this.currentIndex--;
                updateSlider();
            }
        });
        
        this.nextBtn.addEventListener('click', () => {
            const visibleCards = getVisibleCardsCount();
            const maxIndex = Math.max(0, this.totalCards - visibleCards);
            
            if (this.currentIndex < maxIndex) {
                this.currentIndex++;
                updateSlider();
            }
        });
        
        // Navigation par dots
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                const visibleCards = getVisibleCardsCount();
                const maxIndex = Math.max(0, this.totalCards - visibleCards);
                this.currentIndex = Math.min(index, maxIndex);
                updateSlider();
            });
        });
        
        // Redimensionnement avec debounce
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(updateSlider, 250);
        });
        
        // Initialisation
        setTimeout(updateSlider, 100);
        
        console.log('✅ Slider Bureau Exécutif initialisé avec style EGEI');
    }

    // Onglets pour les Clubs
    setupClubTabs() {
        const tabButtons = document.querySelectorAll('.club-tab-btn');
        const tabPanels = document.querySelectorAll('.club-tab-panel');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetClub = button.getAttribute('data-club');
                
                // Retirer les classes actives
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabPanels.forEach(panel => panel.classList.remove('active'));
                
                // Ajouter les classes actives
                button.classList.add('active');
                document.getElementById(targetClub).classList.add('active');
                
                console.log('Onglet Club activé:', targetClub);
            });
        });
    }

    // Filtre pour les Comités
    setupCommitteeFilter() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const committeeCards = document.querySelectorAll('.committee-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.getAttribute('data-filter');
                
                // Retirer les classes actives
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                
                // Filtrer les cartes
                committeeCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
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
                
                console.log('Filtre Comités activé:', filter);
            });
        });
    }

    // Compteurs animés
    setupCounters() {
        this.counterElements = document.querySelectorAll('.stat-number');
    }

    animateCounters() {
        this.counterElements.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += step;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };

            updateCounter();
        });
    }

    // Animations au défilement
    setupScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    
                    // Animation spécifique pour les statistiques
                    if (entry.target.classList.contains('stats-container')) {
                        this.animateCounters();
                    }
                }
            });
        }, observerOptions);

        // Observer les éléments à révéler
        document.querySelectorAll('.reveal, .stats-container, .structure-level, .direction-card-slide, .club-leader-card, .feature-card, .committee-card').forEach(el => {
            observer.observe(el);
        });

        // Indicateur de défilement
        const scrollIndicator = document.querySelector('.banner-scroll-indicator');
        if (scrollIndicator) {
            scrollIndicator.addEventListener('click', () => {
                document.querySelector('.organizational-structure').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        }
    }

    // Effets de survol
    setupHoverEffects() {
        // Effet de parallaxe sur la bannière
        const banner = document.querySelector('.staff-banner');
        if (banner) {
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.5;
                banner.style.transform = `translateY(${rate}px)`;
            });
        }
    }

    // Mettre à jour l'année en cours
    setCurrentYear() {
        const yearElement = document.getElementById('current-year');
        if (yearElement) {
            yearElement.textContent = new Date().getFullYear();
        }
    }

    // Méthode utilitaire pour le débogage
    log(message) {
        console.log(`[StaffPage] ${message}`);
    }
}

// Initialisation lorsque le DOM est chargé
document.addEventListener('DOMContentLoaded', () => {
    const staffPage = new StaffPage();
    staffPage.log('Page Staff initialisée avec succès');
    staffPage.log('Slider Bureau Exécutif en style EGEI');
});

// Gestion du responsive pour les onglets
window.addEventListener('resize', () => {
    const tabsNavigation = document.querySelector('.clubs-tabs-navigation');
    if (tabsNavigation && window.innerWidth < 992) {
        tabsNavigation.style.flexDirection = 'column';
    }
});

// Gestion des images manquantes
document.addEventListener('error', function(e) {
    if (e.target.tagName === 'IMG' && e.target.src.includes('staff/')) {
        e.target.src = 'media/staff/default-avatar.jpg';
        console.log('Image de remplacement chargée pour:', e.target.alt);
    }
}, true);

// Export pour une utilisation potentielle dans d'autres fichiers
if (typeof module !== 'undefined' && module.exports) {
    module.exports = StaffPage;
}