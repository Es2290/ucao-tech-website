// Script pour la page de contact
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const submitBtn = contactForm.querySelector('.submit-btn');
    
    // Validation du formulaire
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (validateForm()) {
            // Simulation d'envoi
            simulateFormSubmission();
        }
    });
    
    // Validation en temps réel
    const inputs = contactForm.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            clearError(this);
        });
    });
    
    function validateForm() {
        let isValid = true;
        const fields = [
            { id: 'name', type: 'text' },
            { id: 'email', type: 'email' },
            { id: 'subject', type: 'select' },
            { id: 'message', type: 'text' }
        ];
        
        fields.forEach(field => {
            const element = document.getElementById(field.id);
            if (!validateField(element)) {
                isValid = false;
            }
        });
        
        return isValid;
    }
    
    function validateField(field) {
        const value = field.value.trim();
        const errorElement = document.getElementById(field.id + 'Error');
        
        // Réinitialiser l'erreur
        clearError(field);
        
        // Validation selon le type de champ
        switch(field.type) {
            case 'text':
            case 'textarea':
                if (value === '') {
                    showError(field, 'Ce champ est obligatoire');
                    return false;
                }
                if (field.id === 'name' && value.length < 2) {
                    showError(field, 'Le nom doit contenir au moins 2 caractères');
                    return false;
                }
                if (field.id === 'message' && value.length < 10) {
                    showError(field, 'Le message doit contenir au moins 10 caractères');
                    return false;
                }
                break;
                
            case 'email':
                if (value === '') {
                    showError(field, 'Ce champ est obligatoire');
                    return false;
                }
                if (!isValidEmail(value)) {
                    showError(field, 'Veuillez entrer une adresse email valide');
                    return false;
                }
                break;
                
            case 'select-one':
                if (value === '') {
                    showError(field, 'Veuillez sélectionner un sujet');
                    return false;
                }
                break;
        }
        
        return true;
    }
    
    function showError(field, message) {
        const errorElement = document.getElementById(field.id + 'Error');
        errorElement.textContent = message;
        field.style.borderColor = 'var(--rouge-nuit)';
    }
    
    function clearError(field) {
        const errorElement = document.getElementById(field.id + 'Error');
        errorElement.textContent = '';
        field.style.borderColor = '#e0e0e0';
    }
    
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    function simulateFormSubmission() {
        // Afficher l'état de chargement
        submitBtn.classList.add('loading');
        submitBtn.disabled = true;
        
        // Simuler l'envoi du formulaire
        setTimeout(() => {
            // Réinitialiser le formulaire
            contactForm.reset();
            
            // Afficher message de succès
            showSuccessMessage();
            
            // Réinitialiser le bouton
            submitBtn.classList.remove('loading');
            submitBtn.disabled = false;
        }, 2000);
    }
    
    function showSuccessMessage() {
        // Créer un élément de message de succès
        const successMessage = document.createElement('div');
        successMessage.className = 'success-message';
        successMessage.innerHTML = `
            <div style="
                background: #d4edda;
                color: #155724;
                padding: 20px;
                border-radius: 8px;
                border: 1px solid #c3e6cb;
                margin-top: 20px;
                text-align: center;
                animation: slideUp 0.5s ease;
            ">
                <i class="fas fa-check-circle" style="color: #28a745; font-size: 1.5rem; margin-bottom: 10px; display: block;"></i>
                <h4 style="margin: 0 0 10px 0; color: #155724;">Message envoyé avec succès !</h4>
                <p style="margin: 0; color: #155724;">Nous vous répondrons dans les plus brefs délais.</p>
            </div>
        `;
        
        // Insérer le message après le formulaire
        contactForm.parentNode.insertBefore(successMessage, contactForm.nextSibling);
        
        // Supprimer le message après 5 secondes
        setTimeout(() => {
            successMessage.remove();
        }, 5000);
    }
    
    // Mettre à jour l'année dans le footer
    const currentYear = new Date().getFullYear();
    document.getElementById('current-year').textContent = currentYear;
    
    // Animation des éléments au défilement
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.contact-form-section, .contact-info-section, .map-container, .location-info');
        
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
        const elements = document.querySelectorAll('.contact-form-section, .contact-info-section, .map-container, .location-info');
        
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
});