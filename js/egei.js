document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('directionSlider');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const dots = document.querySelectorAll('.slider-dots .dot');
            
            let currentPosition = 0;
            const cardWidth = document.querySelector('.direction-card-slide').offsetWidth + 30; // width + gap
            const totalCards = 4;
            const cardsPerView = window.innerWidth > 1100 ? 4 : (window.innerWidth > 768 ? 2 : 1);
            const maxPosition = (totalCards - cardsPerView) * cardWidth;
            
            function updateSlider() {
                slider.style.transform = `translateX(-${currentPosition}px)`;
                
                // Mettre à jour les boutons
                prevBtn.disabled = currentPosition === 0;
                nextBtn.disabled = currentPosition >= maxPosition;
                
                // Mettre à jour les dots
                const activeDotIndex = Math.floor(currentPosition / (maxPosition + cardWidth) * (dots.length - 1));
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === activeDotIndex);
                });
            }
            
            // Navigation
            prevBtn.addEventListener('click', () => {
                if (currentPosition > 0) {
                    currentPosition -= cardWidth * cardsPerView;
                    if (currentPosition < 0) currentPosition = 0;
                    updateSlider();
                }
            });
            
            nextBtn.addEventListener('click', () => {
                if (currentPosition < maxPosition) {
                    currentPosition += cardWidth * cardsPerView;
                    if (currentPosition > maxPosition) currentPosition = maxPosition;
                    updateSlider();
                }
            });
            
            // Navigation par dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentPosition = index * maxPosition;
                    updateSlider();
                });
            });
            
            // Redimensionnement
            window.addEventListener('resize', () => {
                const newCardsPerView = window.innerWidth > 1100 ? 4 : (window.innerWidth > 768 ? 2 : 1);
                if (newCardsPerView !== cardsPerView) {
                    location.reload(); // Simplifié pour cet exemple
                }
            });
            
            // Menu mobile
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const navMenu = document.querySelector('.nav-menu');
            
            mobileMenuBtn.addEventListener('click', () => {
                navMenu.classList.toggle('active');
            });
            
            // Mise à jour de l'année
            const currentYearElement = document.getElementById('current-year');
            if (currentYearElement) {
                currentYearElement.textContent = new Date().getFullYear();
            }
            
            // Animation au défilement
            function revealOnScroll() {
                const reveals = document.querySelectorAll('.presentation, .connection, .formations, .direction');
                const windowHeight = window.innerHeight;
                
                reveals.forEach(reveal => {
                    const elementTop = reveal.getBoundingClientRect().top;
                    if (elementTop < windowHeight - 100) {
                        reveal.style.opacity = '1';
                        reveal.style.transform = 'translateY(0)';
                    }
                });
            }
            
            // Configuration des animations
            const sections = document.querySelectorAll('.presentation, .connection, .formations, .direction');
            sections.forEach(section => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(30px)';
                section.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            });
            
            window.addEventListener('scroll', revealOnScroll);
            revealOnScroll();
        });