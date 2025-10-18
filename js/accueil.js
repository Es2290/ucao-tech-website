// Script pour la bannière défilante
        let currentSlide = 0;
        const slides = document.querySelector('.slides');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = 3;

        function showSlide(n) {
            currentSlide = (n + totalSlides) % totalSlides;
            slides.style.transform = `translateX(-${currentSlide * 33.333}%)`;
            
            // Mettre à jour les points actifs
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
        }

        // Événements pour les points de la bannière
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
            });
        });

        // Défilement automatique de la bannière
        setInterval(() => {
            showSlide(currentSlide + 1);
        }, 5000);

        // Script pour le carrousel des actualités
        const newsContainer = document.querySelector('.news-container');
        const newsCards = document.querySelectorAll('.news-card');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        let currentNewsIndex = 0;
        let cardsPerView;

        function updateCardsPerView() {
            if (window.innerWidth < 768) {
                cardsPerView = 1;
            } else if (window.innerWidth < 1100) {
                cardsPerView = 2;
            } else {
                cardsPerView = 3;
            }
        }

        function updateNewsCarousel() {
            updateCardsPerView();
            const cardWidth = newsCards[0].offsetWidth + 30; // width + gap
            newsContainer.style.transform = `translateX(-${currentNewsIndex * cardWidth}px)`;
        }

        prevBtn.addEventListener('click', () => {
            if (currentNewsIndex > 0) {
                currentNewsIndex--;
                updateNewsCarousel();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentNewsIndex < newsCards.length - cardsPerView) {
                currentNewsIndex++;
                updateNewsCarousel();
            }
        });

        // Menu mobile
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navMenu = document.querySelector('.nav-menu');
        const dropdowns = document.querySelectorAll('.dropdown');

        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileMenuBtn.innerHTML = navMenu.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        // Gestion des dropdowns en mode mobile
        dropdowns.forEach(dropdown => {
            const link = dropdown.querySelector('a');
            
            link.addEventListener('click', (e) => {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    dropdown.classList.toggle('active');
                }
            });
        });

        // Mise à jour automatique de l'année dans le footer
        document.getElementById('current-year').textContent = new Date().getFullYear();

        // Redimensionnement de la fenêtre
        window.addEventListener('resize', () => {
            updateNewsCarousel();
        });

        // Initialisation
        updateNewsCarousel();

        // Animation au défilement
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observer les éléments à animer
        document.querySelectorAll('.news-card, .history-content, .section-title').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });