// FAQ Accordéon Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Initialiser les éléments FAQ
    initFAQ();
    
    // Initialiser la recherche
    initSearch();
    
    // Initialiser le filtrage par catégories
    initCategoryFilter();
});

function initFAQ() {
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const item = question.parentElement;
            const isActive = item.classList.contains('active');
            
            // Fermer tous les autres éléments FAQ
            document.querySelectorAll('.faq-item').forEach(otherItem => {
                otherItem.classList.remove('active');
            });
            
            // Ouvrir l'élément cliqué s'il n'était pas actif
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
}

function initSearch() {
    const searchInput = document.getElementById('faq-search-input');
    const searchButton = document.getElementById('faq-search-btn');
    
    function performSearch() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        const faqItems = document.querySelectorAll('.faq-item');
        let foundResults = false;
        
        if (searchTerm === '') {
            // Si la recherche est vide, afficher tous les éléments
            faqItems.forEach(item => {
                item.style.display = 'block';
                item.parentElement.parentElement.style.display = 'block';
            });
            document.querySelectorAll('.faq-category-group').forEach(group => {
                group.style.display = 'block';
            });
            
            // Supprimer le message d'erreur s'il existe
            const existingMessage = document.querySelector('.no-results-message');
            if (existingMessage) {
                existingMessage.remove();
            }
            return;
        }
        
        // Masquer tous les éléments d'abord
        faqItems.forEach(item => {
            item.style.display = 'none';
        });
        
        // Rechercher dans les questions et réponses
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question span').textContent.toLowerCase();
            const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
            
            if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                item.style.display = 'block';
                item.parentElement.parentElement.style.display = 'block';
                foundResults = true;
                
                // Ouvrir l'élément pour mettre en évidence la réponse
                if (answer.includes(searchTerm) && !item.classList.contains('active')) {
                    item.classList.add('active');
                }
            }
        });
        
        // Masquer les catégories vides
        document.querySelectorAll('.faq-category-group').forEach(group => {
            const visibleItems = group.querySelectorAll('.faq-item[style="display: block"]');
            if (visibleItems.length === 0) {
                group.style.display = 'none';
            } else {
                group.style.display = 'block';
            }
        });
        
        // Afficher un message si aucun résultat
        if (!foundResults) {
            showNoResultsMessage(searchTerm);
        } else {
            // Supprimer le message d'erreur s'il existe
            const existingMessage = document.querySelector('.no-results-message');
            if (existingMessage) {
                existingMessage.remove();
            }
        }
    }
    
    searchButton.addEventListener('click', performSearch);
    searchInput.addEventListener('keyup', (e) => {
        if (e.key === 'Enter') {
            performSearch();
        }
    });
}

function initCategoryFilter() {
    const categoryButtons = document.querySelectorAll('.category-btn');
    
    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Mettre à jour les boutons actifs
            categoryButtons.forEach(btn => {
                btn.classList.remove('active');
            });
            button.classList.add('active');
            
            // Filtrer les questions par catégorie
            const category = button.getAttribute('data-category');
            const faqGroups = document.querySelectorAll('.faq-category-group');
            
            faqGroups.forEach(group => {
                if (category === 'all' || group.getAttribute('data-category') === category) {
                    group.style.display = 'block';
                } else {
                    group.style.display = 'none';
                }
            });
            
            // Réinitialiser la recherche
            document.getElementById('faq-search-input').value = '';
            
            // Supprimer le message d'erreur s'il existe
            const existingMessage = document.querySelector('.no-results-message');
            if (existingMessage) {
                existingMessage.remove();
            }
        });
    });
}

function showNoResultsMessage(searchTerm) {
    // Supprimer tout message d'erreur existant
    const existingMessage = document.querySelector('.no-results-message');
    if (existingMessage) {
        existingMessage.remove();
    }
    
    // Créer et afficher le nouveau message
    const message = document.createElement('div');
    message.className = 'no-results-message';
    message.innerHTML = `
        <i class="fas fa-search"></i>
        <h3>Aucun résultat trouvé</h3>
        <p>Aucune question ne correspond à votre recherche : "<strong>${searchTerm}</strong>"</p>
        <p style="margin-top: 10px;">Essayez d'autres mots-clés ou <a href="contact.php">contactez-nous</a> directement.</p>
    `;
    
    const faqContainer = document.querySelector('.faq-container');
    faqContainer.appendChild(message);
}