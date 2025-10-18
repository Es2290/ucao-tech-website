// adhesion.js - Script pour la page d'adhésion
document.addEventListener('DOMContentLoaded', function() {
    console.log('Page d\'adhésion UCAO-TECH initialisée');
    
    // Initialiser les fonctionnalités
    initFAQ();
    initFormValidation();
    updateCurrentYear();
    initProcessSteps();
    initSubmitButtonAnimations();
    
    // Animation des cartes au scroll
    initScrollAnimations();
});

// Initialisation de la FAQ améliorée avec flèches à droite
function initFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Fermer tous les autres items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Basculer l'état de l'item actuel
            item.classList.toggle('active');
        });
    });
}

// Animation des étapes du processus
function initProcessSteps() {
    const processSteps = document.querySelectorAll('.process-step');
    
    processSteps.forEach(step => {
        step.style.cursor = 'pointer';
        step.style.transition = 'all 0.3s ease';
        
        step.addEventListener('click', function() {
            // Réinitialiser toutes les étapes
            processSteps.forEach(s => {
                s.style.background = 'transparent';
                s.style.transform = 'scale(1)';
                const number = s.querySelector('.step-number');
                const content = s.querySelector('.step-content');
                
                number.style.background = 'var(--bleu-gradient)';
                number.style.color = 'var(--blanc)';
                content.querySelector('h4').style.color = 'var(--bleu-nuit)';
                content.querySelector('p').style.color = 'var(--gris-fonce)';
            });
            
            // Appliquer le style à l'étape cliquée
            this.style.background = 'var(--gris-clair)';
            this.style.transform = 'scale(1.05)';
            this.style.borderRadius = '15px';
            this.style.padding = '20px';
            
            const number = this.querySelector('.step-number');
            const content = this.querySelector('.step-content');
            
            number.style.background = 'var(--rouge-gradient)';
            number.style.color = 'var(--blanc)';
            content.querySelector('h4').style.color = 'var(--rouge-nuit)';
            content.querySelector('p').style.color = 'var(--rouge-nuit)';
        });
        
        // Effet hover
        step.addEventListener('mouseenter', function() {
            if (!this.classList.contains('active')) {
                this.style.transform = 'translateY(-5px)';
                this.style.background = 'var(--gris-clair)';
                
                const number = this.querySelector('.step-number');
                const content = this.querySelector('.step-content');
                
                number.style.background = 'var(--rouge-gradient)';
                content.querySelector('h4').style.color = 'var(--rouge-nuit)';
                content.querySelector('p').style.color = 'var(--rouge-nuit)';
            }
        });
        
        step.addEventListener('mouseleave', function() {
            if (!this.classList.contains('active')) {
                this.style.transform = 'translateY(0)';
                this.style.background = 'transparent';
                
                const number = this.querySelector('.step-number');
                const content = this.querySelector('.step-content');
                
                number.style.background = 'var(--bleu-gradient)';
                content.querySelector('h4').style.color = 'var(--bleu-nuit)';
                content.querySelector('p').style.color = 'var(--gris-fonce)';
            }
        });
    });
}

// Animation supplémentaire pour le bouton Soumettre
function initSubmitButtonAnimations() {
    const submitBtn = document.querySelector('.btn-submit');
    
    if (submitBtn) {
        // Effet de pulsation au chargement
        setTimeout(() => {
            submitBtn.style.animation = 'pulse 2s infinite';
        }, 1000);
        
        // Ajouter l'effet de clic
        submitBtn.addEventListener('click', function(e) {
            if (!this.disabled) {
                // Effet de rétrécissement au clic
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'translateY(-3px)';
                }, 150);
            }
        });
        
        // Animation de focus
        submitBtn.addEventListener('mouseenter', function() {
            this.style.animation = 'none';
        });
        
        submitBtn.addEventListener('mouseleave', function() {
            if (!this.disabled) {
                this.style.animation = 'pulse 2s infinite';
            }
        });
    }
    
    // Ajouter l'animation de pulsation au CSS
    const pulseAnimation = `
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(63, 81, 181, 0.4);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(63, 81, 181, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(63, 81, 181, 0);
        }
    }`;

    // Injecter l'animation dans le CSS
    const style = document.createElement('style');
    style.textContent = pulseAnimation;
    document.head.appendChild(style);
}

// Validation du formulaire
function initFormValidation() {
    const form = document.getElementById('adhesion-form');
    const submitBtn = form.querySelector('.btn-submit');
    
    // Validation en temps réel
    const inputs = form.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
    });
}

function validateForm() {
    let isValid = true;
    const inputs = document.querySelectorAll('#adhesion-form input[required], #adhesion-form select[required], #adhesion-form textarea[required]');
    
    inputs.forEach(input => {
        if (!validateField(input)) {
            isValid = false;
        }
    });
    
    return isValid;
}

function validateField(field) {
    const value = field.value.trim();
    let isValid = true;
    
    // Supprimer les classes d'erreur précédentes
    field.classList.remove('error');
    
    if (field.hasAttribute('required') && !value) {
        showFieldError(field, 'Ce champ est obligatoire');
        isValid = false;
    } else if (field.type === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            showFieldError(field, 'Veuillez entrer une adresse email valide');
            isValid = false;
        }
    } else if (field.type === 'tel' && value) {
        const phoneRegex = /^[0-9+\-\s()]{10,}$/;
        if (!phoneRegex.test(value)) {
            showFieldError(field, 'Veuillez entrer un numéro de téléphone valide');
            isValid = false;
        }
    }
    
    if (isValid) {
        field.classList.add('success');
    }
    
    return isValid;
}

function showFieldError(field, message) {
    field.classList.add('error');
    
    // Supprimer l'ancien message d'erreur
    const existingError = field.parentNode.querySelector('.error-message');
    if (existingError) {
        existingError.remove();
    }
    
    // Ajouter le nouveau message d'erreur
    const errorElement = document.createElement('div');
    errorElement.className = 'error-message';
    errorElement.style.cssText = 'color: var(--rouge-nuit); font-size: 0.8rem; margin-top: 5px;';
    errorElement.textContent = message;
    field.parentNode.appendChild(errorElement);
}

// Animation au scroll
function initScrollAnimations() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });

    const elementsToAnimate = document.querySelectorAll('.avantage-card, .tarif-card, .process-step');
    elementsToAnimate.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
}
// js/adhesion.js
document.addEventListener('DOMContentLoaded', function() {
    // Animation de frappe pour tous les h2 avec la classe
    const animatedTitles = document.querySelectorAll('.typing-animation, .typing-multiline');
    
    animatedTitles.forEach(title => {
        // Définir la largeur initiale à 0
        if (title.classList.contains('typing-animation')) {
            title.style.width = '0';
        }
        
        // Démarrer l'animation après un léger délai
        setTimeout(() => {
            if (title.classList.contains('typing-animation')) {
                title.style.animation = 'typing 3s steps(40, end), blink-caret 0.75s step-end infinite';
                title.style.width = '100%';
            }
        }, 500);
    });
});
// Mise à jour de l'année en cours
function updateCurrentYear() {
    const yearElement = document.getElementById('current-year');
    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }
}

// Gestion des erreurs
window.addEventListener('error', function(e) {
    console.error('Erreur JavaScript:', e.error);
});

console.log('Script adhesion.js chargé avec succès!');