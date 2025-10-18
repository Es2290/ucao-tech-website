// Script pour la page documents
document.addEventListener('DOMContentLoaded', function() {
    
    
    const searchInput = document.getElementById('search-input');
    const searchBtn = document.getElementById('search-btn');
    const categoryFilter = document.getElementById('category-filter');
    const yearFilter = document.getElementById('year-filter');
    const documentsContainer = document.getElementById('documents-container');
    const documentCards = document.querySelectorAll('.document-card');
    
    // Stats
    const totalDocs = document.getElementById('total-docs');
    const totalDownloads = document.getElementById('total-downloads');
    const activeUsers = document.getElementById('active-users');
    
    // Initialiser les statistiques
    function initStats() {
        if (totalDocs) animateValue(totalDocs, 0, 10, 100);
        if (totalDownloads) animateValue(totalDownloads, 0, 10, 50);
        if (activeUsers) animateValue(activeUsers, 0, 25, 50);
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
    
    // Téléchargement de document - VERSION PRODUCTION
    function handleDownload(event) {
        event.preventDefault();
        const downloadBtn = this;
        const docId = downloadBtn.getAttribute('data-doc-id');
        const docTitle = downloadBtn.closest('.document-card').querySelector('.document-title').textContent;
        const fileUrl = downloadBtn.getAttribute('href');
        
        // Vérifier si l'URL du fichier existe
        if (!fileUrl || fileUrl === '#') {
            alert('Le fichier n\'est pas disponible pour le moment.');
            return;
        }
        
        // Sauvegarder le contenu original du bouton
        const originalHTML = downloadBtn.innerHTML;
        const originalBackground = downloadBtn.style.background;
        
        // Animation de confirmation
        downloadBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Téléchargement...';
        downloadBtn.style.background = 'var(--rouge-gradient)';
        downloadBtn.disabled = true;
        
        // TÉLÉCHARGEMENT RÉEL - Méthode directe
        // Créer un lien invisible et déclencher le click
        const tempLink = document.createElement('a');
        tempLink.href = fileUrl;
        tempLink.setAttribute('download', ''); // Force le téléchargement
        tempLink.style.display = 'none';
        
        document.body.appendChild(tempLink);
        tempLink.click();
        document.body.removeChild(tempLink);
        
        // Incrémentation des téléchargements (côté client seulement)
        const downloadCount = downloadBtn.closest('.document-card').querySelector('.info-item:last-child span');
        if (downloadCount) {
            const currentCount = parseInt(downloadCount.textContent) || 0;
            downloadCount.textContent = (currentCount + 1) + ' téléchargements';
        }
        
        // Mettre à jour le compteur global
        if (totalDownloads) {
            const globalCount = parseInt(totalDownloads.textContent) || 0;
            totalDownloads.textContent = globalCount + 1;
        }
        
        // Log simple (pas besoin de PHP pour l'instant)
        console.log(`📥 Document téléchargé: ${docTitle} (ID: ${docId})`);
        
        // Réinitialiser le bouton après succès
        setTimeout(() => {
            downloadBtn.innerHTML = '<i class="fas fa-check"></i> Téléchargé !';
            
            // Réinitialiser complètement après 3 secondes
            setTimeout(() => {
                downloadBtn.innerHTML = originalHTML;
                downloadBtn.style.background = originalBackground;
                downloadBtn.disabled = false;
            }, 3000);
            
        }, 1000);
    }
    
    // Aperçu de document
    function handlePreview(event) {
        event.preventDefault();
        const previewBtn = this;
        const docId = previewBtn.getAttribute('data-doc-id');
        const docTitle = previewBtn.closest('.document-card').querySelector('.document-title').textContent;
        const fileUrl = previewBtn.closest('.document-card').querySelector('.btn-download').getAttribute('href');
        
        // Sauvegarder le contenu original
        const originalHTML = previewBtn.innerHTML;
        
        // Simulation d'aperçu
        previewBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Chargement...';
        previewBtn.disabled = true;
        
        // Vérifier si c'est un PDF (pour l'aperçu)
        if (fileUrl && fileUrl.toLowerCase().endsWith('.pdf')) {
            // Ouvrir le PDF dans un nouvel onglet
            window.open(fileUrl, '_blank');
            
            setTimeout(() => {
                previewBtn.innerHTML = originalHTML;
                previewBtn.disabled = false;
            }, 1000);
        } else {
            // Pour les autres types de fichiers, afficher un message
            setTimeout(() => {
                previewBtn.innerHTML = originalHTML;
                previewBtn.disabled = false;
                alert(`Aperçu du document: ${docTitle}\n\nL'aperçu n'est disponible que pour les fichiers PDF.`);
            }, 1500);
        }
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
            
            // Sauvegarder le contenu original
            const originalHTML = uploadBtn.innerHTML;
            const originalBackground = uploadBtn.style.background;
            
            // Simulation d'upload
            uploadBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Publication...';
            uploadBtn.disabled = true;
            
            // Envoyer le fichier au serveur
            fetch('includes/upload_document.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    uploadBtn.innerHTML = '<i class="fas fa-check"></i> Publié !';
                    uploadBtn.style.background = 'var(--rouge-gradient)';
                    
                    // Réinitialiser le formulaire
                    setTimeout(() => {
                        this.reset();
                        uploadBtn.innerHTML = originalHTML;
                        uploadBtn.style.background = originalBackground;
                        uploadBtn.disabled = false;
                        
                        // Recharger la page ou ajouter le nouveau document dynamiquement
                        location.reload();
                    }, 1500);
                } else {
                    uploadBtn.innerHTML = '<i class="fas fa-times"></i> Erreur';
                    uploadBtn.style.background = '#dc3545';
                    
                    setTimeout(() => {
                        uploadBtn.innerHTML = originalHTML;
                        uploadBtn.style.background = originalBackground;
                        uploadBtn.disabled = false;
                        alert('Erreur: ' + (data.error || 'Impossible de publier le document'));
                    }, 2000);
                }
            })
            .catch(error => {
                uploadBtn.innerHTML = '<i class="fas fa-times"></i> Erreur';
                uploadBtn.style.background = '#dc3545';
                
                setTimeout(() => {
                    uploadBtn.innerHTML = originalHTML;
                    uploadBtn.style.background = originalBackground;
                    uploadBtn.disabled = false;
                    alert('Erreur réseau: ' + error.message);
                }, 2000);
            });
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