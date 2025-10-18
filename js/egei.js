// JavaScript SIMPLIFIÉ et CORRIGÉ pour le slider
document.addEventListener('DOMContentLoaded', function() {
    const cardsContainer = document.querySelector('.cards-container');
    const cards = document.querySelectorAll('.direction-card-slide');
    const prevBtn = document.querySelector('.slider-btn.prev-btn');
    const nextBtn = document.querySelector('.slider-btn.next-btn');
    const dots = document.querySelectorAll('.slider-dots .dot');
    
    let currentIndex = 0;
    const totalCards = cards.length;
    
    function getVisibleCardsCount() {
        const containerWidth = cardsContainer.parentElement.offsetWidth;
        const cardWidth = cards[0].offsetWidth + 30; // card width + gap
        
        return Math.floor(containerWidth / cardWidth);
    }
    
    function updateSlider() {
        const visibleCards = getVisibleCardsCount();
        const maxIndex = Math.max(0, totalCards - visibleCards);
        
        // Ajuster l'index courant si nécessaire
        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }
        
        const cardWidth = cards[0].offsetWidth + 30;
        const translateX = currentIndex * cardWidth;
        cardsContainer.style.transform = `translateX(-${translateX}px)`;
        
        // Mettre à jour les dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
        
        // Mettre à jour les boutons
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex >= maxIndex;
        
        // Feedback visuel pour les boutons désactivés
        prevBtn.style.opacity = prevBtn.disabled ? '0.5' : '1';
        nextBtn.style.opacity = nextBtn.disabled ? '0.5' : '1';
    }
    
    // Navigation
    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });
    
    nextBtn.addEventListener('click', () => {
        const visibleCards = getVisibleCardsCount();
        const maxIndex = Math.max(0, totalCards - visibleCards);
        
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateSlider();
        }
    });
    
    // Navigation par dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            const visibleCards = getVisibleCardsCount();
            const maxIndex = Math.max(0, totalCards - visibleCards);
            currentIndex = Math.min(index, maxIndex);
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
    
    // Animation au défilement
    function revealOnScroll() {
        const reveals = document.querySelectorAll('.reveal');
        const windowHeight = window.innerHeight;
        
        reveals.forEach(reveal => {
            const elementTop = reveal.getBoundingClientRect().top;
            if (elementTop < windowHeight - 150) {
                reveal.classList.add('active');
            }
        });
    }
    
    // Configuration des animations
    const sections = document.querySelectorAll('.presentation, .connection, .formations, .direction');
    sections.forEach(section => section.classList.add('reveal'));
    
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();
    
    // Mise à jour de l'année
    const currentYearElement = document.getElementById('current-year');
    if (currentYearElement) {
        currentYearElement.textContent = new Date().getFullYear();
    }
});