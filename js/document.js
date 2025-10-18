// Script pour la page documents
document.addEventListener('DOMContentLoaded', function() {
    
    // Éléments DOM
    const searchInput = document.getElementById('search-input');
    const searchBtn = document.getElementById('search-btn');
    const categoryFilter = document.getElementById('category-filter');
    const yearFilter = document.getElementById('year-filter');
    const documentsContainer = document.getElementById('documents-container');
    const documentCards = document.querySelectorAll('.document-card');
    
    // Statistiques
    const totalDocs = document.getElementById('total-docs');
    const totalDownloads = document.getElementById('total-downloads');
    const activeUsers = document.getElementById('active-users');
    
    // Initialiser les statistiques
    function initStats() {
        if (totalDocs) animateValue(totalDocs, 0, 10, 1500);
        if (totalDownloads) animateValue(totalDownloads, 0, 1124, 2000);
        if (activeUsers) animateValue(activeUsers, 0, 156, 1000);
    }
    
    function animateValue(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const value = Math.floor(progress * (end - start) + start);
            element.textContent = value;
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }
    
    // Recherche et filtrage
    function filterDocuments() {
        const searchTerm = searchInput.value.toLowerCase();
        const category = categoryFilter.value;
        const year = yearFilter.value;
        
        documentCards.forEach(card => {
            const title = card.querySelector('.document-title').textContent.toLowerCase();
            const description = card.querySelector('.document-description').textContent.toLowerCase();
            const cardCategory = card.getAttribute('data-category');
            const cardYear = card.getAttribute('data-year');
            
            const matchesSearch = title.includes(searchTerm) || description.includes(searchTerm);
            const matchesCategory = category === 'all' || cardCategory === category;
            const matchesYear = year === 'all' || cardYear === year;
            
            if (matchesSearch && matchesCategory && matchesYear) {
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
    }
    
    // Événements de recherche et filtrage
    searchInput.addEventListener('input', filterDocuments);
    searchBtn.addEventListener('click', filterDocuments);
    categoryFilter.addEventListener('change', filterDocuments);
    yearFilter.addEventListener('change', filterDocuments);
    
    // Téléchargement de document
    function handleDownload(event) {
        event.preventDefault();
        const docId = this.getAttribute('data-doc-id');
        const docTitle = this.closest('.document-card').querySelector('.document-title').textContent;
        
        // Simulation d'incrémentation des téléchargements
        const downloadCount = this.closest('.document-card').querySelector('.info-item:last-child span');
        if (downloadCount) {
            const currentCount = parseInt(downloadCount.textContent);
            downloadCount.textContent = (currentCount + 1) + ' téléchargements';
        }
        
        // Mettre à jour le compteur global
        if (totalDownloads) {
            const globalCount = parseInt(totalDownloads.textContent);
            totalDownloads.textContent = globalCount + 1;
        }
        
        // Animation de confirmation
        this.innerHTML = '<i class="fas fa-check"></i> Téléchargé !';
        this.style.background = 'var(--rouge-gradient)';
        
        setTimeout(() => {
            this.innerHTML = '<i class="fas fa-download"></i> Télécharger';
            this.style.background = 'var(--bleu-gradient)';
            
            // Redirection vers le fichier (décommenter en production)
            // window.location.href = this.href;
        }, 2000);
        
        // Log de téléchargement (à envoyer au serveur en production)
        console.log(`Document ${docId} (${docTitle}) téléchargé`);
    }
    
    // Aperçu de document
    function handlePreview(event) {
        event.preventDefault();
        const docId = this.getAttribute('data-doc-id');
        const docTitle = this.closest('.document-card').querySelector('.document-title').textContent;
        
        // Simulation d'aperçu (à remplacer par une vraie fonctionnalité)
        this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Chargement...';
        this.disabled = true;
        
        setTimeout(() => {
            this.innerHTML = '<i class="fas fa-eye"></i> Aperçu';
            this.disabled = false;
            alert(`Aperçu du document: ${docTitle}\n\nCette fonctionnalité afficherait normalement un aperçu du document PDF.`);
        }, 1500);
    }
    
    // Événements des boutons
    document.querySelectorAll('.btn-download').forEach(btn => {
        btn.addEventListener('click', handleDownload);
    });
    
    document.querySelectorAll('.btn-preview').forEach(btn => {
        btn.addEventListener('click', handlePreview);
    });
    
    // Upload de document (admin)
    const uploadForm = document.getElementById('uploadForm');
    if (uploadForm) {
        uploadForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            const formData = new FormData(this);
            const uploadBtn = this.querySelector('.btn-upload');
            
            // Simulation d'upload
            uploadBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Publication...';
            uploadBtn.disabled = true;
            
            setTimeout(() => {
                uploadBtn.innerHTML = '<i class="fas fa-check"></i> Publié !';
                uploadBtn.style.background = 'var(--rouge-gradient)';
                
                // Réinitialiser le formulaire
                setTimeout(() => {
                    this.reset();
                    uploadBtn.innerHTML = '<i class="fas fa-upload"></i> Publier le document';
                    uploadBtn.style.background = 'var(--rouge-gradient)';
                    uploadBtn.disabled = false;
                    
                    alert('Document publié avec succès !');
                }, 1500);
            }, 2000);
        });
    }
    
    // Animation au scroll
    function animateOnScroll() {
        const elements = document.querySelectorAll('.document-card, .stat-card, .recent-card');
        
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
        const elements = document.querySelectorAll('.document-card, .stat-card, .recent-card');
        
        elements.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });
    }
    
    // Initialiser
    initAnimationStyles();
    initStats();
    
    // Écouter l'événement de défilement
    window.addEventListener('scroll', animateOnScroll);
    
    // Déclencher une première fois pour les éléments déjà visibles
    animateOnScroll();
    
    // Mettre à jour l'année dans le footer
    const currentYear = new Date().getFullYear();
    document.getElementById('current-year').textContent = currentYear;
});