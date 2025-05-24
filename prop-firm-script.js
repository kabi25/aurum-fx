// Prop Firm Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functionality
    initPropFirmApplication();
    initSmoothScrolling();
    initAnimations();
    initProgramSelection();
});

// Prop Firm Application Form
function initPropFirmApplication() {
    const applicationForm = document.getElementById('propFirmApplication');
    
    if (applicationForm) {
        applicationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(applicationForm);
            const applicationData = {
                fullName: formData.get('fullName'),
                email: formData.get('email'),
                phone: formData.get('phone'),
                experience: formData.get('experience'),
                program: formData.get('program'),
                strategy: formData.get('strategy')
            };
            
            // Validate form
            if (validateApplicationForm(applicationData)) {
                submitApplication(applicationData);
            }
        });
    }
}

// Form Validation
function validateApplicationForm(data) {
    const errors = [];
    
    // Required field validation
    if (!data.fullName || data.fullName.trim().length < 2) {
        errors.push('Please enter your full name');
    }
    
    if (!data.email || !isValidEmail(data.email)) {
        errors.push('Please enter a valid email address');
    }
    
    if (!data.phone || data.phone.trim().length < 10) {
        errors.push('Please enter a valid phone number');
    }
    
    if (!data.experience) {
        errors.push('Please select your trading experience level');
    }
    
    if (!data.program) {
        errors.push('Please select a preferred program');
    }
    
    // Display errors if any
    if (errors.length > 0) {
        showFormErrors(errors);
        return false;
    }
    
    return true;
}

// Email validation helper
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Show form errors
function showFormErrors(errors) {
    // Remove existing error messages
    const existingErrors = document.querySelectorAll('.form-error');
    existingErrors.forEach(error => error.remove());
    
    // Create error container
    const errorContainer = document.createElement('div');
    errorContainer.className = 'form-error';
    errorContainer.style.cssText = `
        background: #ffebee;
        color: #c62828;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1rem;
        border-left: 4px solid #c62828;
    `;
    
    const errorList = document.createElement('ul');
    errorList.style.cssText = 'margin: 0; padding-left: 1.5rem;';
    
    errors.forEach(error => {
        const errorItem = document.createElement('li');
        errorItem.textContent = error;
        errorList.appendChild(errorItem);
    });
    
    errorContainer.appendChild(errorList);
    
    // Insert error container at the top of the form
    const form = document.getElementById('propFirmApplication');
    form.insertBefore(errorContainer, form.firstChild);
    
    // Scroll to error
    errorContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

// Submit application
function submitApplication(data) {
    // Show loading state
    const submitButton = document.querySelector('#propFirmApplication button[type="submit"]');
    const originalText = submitButton.textContent;
    submitButton.textContent = 'Submitting...';
    submitButton.disabled = true;
    
    // Simulate API call
    setTimeout(() => {
        // Show success message
        showApplicationSuccess();
        
        // Reset form
        document.getElementById('propFirmApplication').reset();
        
        // Reset button
        submitButton.textContent = originalText;
        submitButton.disabled = false;
        
        // Log application data (in real implementation, send to server)
        console.log('Application submitted:', data);
        
        // Track application submission
        trackApplicationSubmission(data.program);
        
    }, 2000);
}

// Show application success message
function showApplicationSuccess() {
    // Remove existing messages
    const existingMessages = document.querySelectorAll('.form-success, .form-error');
    existingMessages.forEach(msg => msg.remove());
    
    const successContainer = document.createElement('div');
    successContainer.className = 'form-success';
    successContainer.style.cssText = `
        background: #e8f5e8;
        color: #2e7d32;
        padding: 1.5rem;
        border-radius: 8px;
        margin-bottom: 1rem;
        border-left: 4px solid #4caf50;
        text-align: center;
    `;
    
    successContainer.innerHTML = `
        <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin-bottom: 0.5rem;">
            <i class="fas fa-check-circle" style="font-size: 1.5rem;"></i>
            <strong>Application Submitted Successfully!</strong>
        </div>
        <p style="margin: 0;">Thank you for your application. Our team will review it and contact you within 24-48 hours.</p>
    `;
    
    const form = document.getElementById('propFirmApplication');
    form.insertBefore(successContainer, form.firstChild);
    
    // Scroll to success message
    successContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
    
    // Auto-remove success message after 10 seconds
    setTimeout(() => {
        if (successContainer.parentNode) {
            successContainer.remove();
        }
    }, 10000);
}

// Program Selection Enhancement
function initProgramSelection() {
    const programCards = document.querySelectorAll('.program-card');
    const programSelect = document.getElementById('program');
    
    if (programCards.length > 0 && programSelect) {
        programCards.forEach(card => {
            const applyButton = card.querySelector('.btn');
            if (applyButton) {
                applyButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Get program type from card
                    const programHeader = card.querySelector('.program-header h3');
                    if (programHeader) {
                        const programName = programHeader.textContent.toLowerCase();
                        
                        // Set the select value
                        if (programName.includes('starter')) {
                            programSelect.value = 'starter';
                        } else if (programName.includes('professional')) {
                            programSelect.value = 'professional';
                        } else if (programName.includes('elite')) {
                            programSelect.value = 'elite';
                        }
                    }
                    
                    // Scroll to application form
                    const applicationSection = document.getElementById('application');
                    if (applicationSection) {
                        applicationSection.scrollIntoView({ 
                            behavior: 'smooth',
                            block: 'start'
                        });
                        
                        // Focus on first form field after scroll
                        setTimeout(() => {
                            const firstInput = document.getElementById('fullName');
                            if (firstInput) {
                                firstInput.focus();
                            }
                        }, 1000);
                    }
                });
            }
        });
    }
}

// Smooth Scrolling for Anchor Links
function initSmoothScrolling() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Scroll Animations
function initAnimations() {
    // Intersection Observer for fade-in animations
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
    
    // Elements to animate
    const animatedElements = document.querySelectorAll(`
        .step-item,
        .program-card,
        .benefit-item,
        .requirement-item,
        .story-card
    `);
    
    animatedElements.forEach((element, index) => {
        // Set initial state
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
        
        // Observe element
        observer.observe(element);
    });
}

// Statistics Counter Animation
function animateCounters() {
    const counters = document.querySelectorAll('.stat-number');
    
    counters.forEach(counter => {
        const target = counter.textContent;
        const numericValue = parseInt(target.replace(/[^\d]/g, ''));
        
        if (numericValue) {
            let current = 0;
            const increment = numericValue / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= numericValue) {
                    current = numericValue;
                    clearInterval(timer);
                }
                
                // Format the number
                if (target.includes('$')) {
                    counter.textContent = '$' + Math.floor(current).toLocaleString() + (target.includes('M') ? 'M+' : 'K+');
                } else if (target.includes('%')) {
                    counter.textContent = Math.floor(current) + '%';
                } else {
                    counter.textContent = Math.floor(current) + '+';
                }
            }, 50);
        }
    });
}

// Track application submission for analytics
function trackApplicationSubmission(program) {
    // Google Analytics event tracking (if GA is loaded)
    if (typeof gtag !== 'undefined') {
        gtag('event', 'application_submit', {
            'event_category': 'prop_firm',
            'event_label': program,
            'value': 1
        });
    }
    
    // Custom analytics tracking
    console.log('Application submitted for program:', program);
}

// Form field enhancements
document.addEventListener('DOMContentLoaded', function() {
    // Phone number formatting
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length >= 6) {
                value = value.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
            } else if (value.length >= 3) {
                value = value.replace(/(\d{3})(\d{3})/, '($1) $2');
            }
            e.target.value = value;
        });
    }
    
    // Real-time form validation
    const formInputs = document.querySelectorAll('#propFirmApplication input, #propFirmApplication select');
    formInputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
    });
});

// Individual field validation
function validateField(field) {
    const value = field.value.trim();
    let isValid = true;
    let errorMessage = '';
    
    // Remove existing error styling
    field.style.borderColor = '';
    const existingError = field.parentNode.querySelector('.field-error');
    if (existingError) {
        existingError.remove();
    }
    
    // Validate based on field type
    switch (field.id) {
        case 'fullName':
            if (value.length < 2) {
                isValid = false;
                errorMessage = 'Name must be at least 2 characters';
            }
            break;
        case 'email':
            if (!isValidEmail(value)) {
                isValid = false;
                errorMessage = 'Please enter a valid email address';
            }
            break;
        case 'phone':
            if (value.replace(/\D/g, '').length < 10) {
                isValid = false;
                errorMessage = 'Please enter a valid phone number';
            }
            break;
    }
    
    // Show error if invalid
    if (!isValid && value.length > 0) {
        field.style.borderColor = '#c62828';
        
        const errorElement = document.createElement('div');
        errorElement.className = 'field-error';
        errorElement.style.cssText = `
            color: #c62828;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        `;
        errorElement.textContent = errorMessage;
        
        field.parentNode.appendChild(errorElement);
    }
    
    return isValid;
}

// Initialize counter animation when stats section is visible
const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounters();
            statsObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

const heroStats = document.querySelector('.hero-stats');
if (heroStats) {
    statsObserver.observe(heroStats);
} 