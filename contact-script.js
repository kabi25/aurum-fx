// Contact Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    initContactForm();
    initFAQ();
    initSmoothScrolling();
    initAnimations();
});

// Contact Form Functionality
function initContactForm() {
    const contactForm = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(contactForm);
            const data = {
                firstName: formData.get('firstName'),
                lastName: formData.get('lastName'),
                email: formData.get('email'),
                phone: formData.get('phone'),
                subject: formData.get('subject'),
                message: formData.get('message'),
                newsletter: formData.get('newsletter') === 'on'
            };
            
            // Validate form
            if (validateContactForm(data)) {
                submitContactForm(data);
            }
        });
        
        // Real-time validation
        const inputs = contactForm.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
            
            input.addEventListener('input', function() {
                clearFieldError(this);
            });
        });
        
        // Phone number formatting
        const phoneInput = document.getElementById('phone');
        if (phoneInput) {
            phoneInput.addEventListener('input', function(e) {
                formatPhoneNumber(e.target);
            });
        }
    }
}

// Form Validation
function validateContactForm(data) {
    let isValid = true;
    const errors = [];
    
    // Required field validation
    if (!data.firstName.trim()) {
        errors.push({ field: 'firstName', message: 'First name is required' });
        isValid = false;
    }
    
    if (!data.lastName.trim()) {
        errors.push({ field: 'lastName', message: 'Last name is required' });
        isValid = false;
    }
    
    if (!data.email.trim()) {
        errors.push({ field: 'email', message: 'Email is required' });
        isValid = false;
    } else if (!isValidEmail(data.email)) {
        errors.push({ field: 'email', message: 'Please enter a valid email address' });
        isValid = false;
    }
    
    if (!data.phone.trim()) {
        errors.push({ field: 'phone', message: 'Phone number is required' });
        isValid = false;
    }
    
    if (!data.subject.trim()) {
        errors.push({ field: 'subject', message: 'Subject is required' });
        isValid = false;
    }
    
    if (!data.message.trim()) {
        errors.push({ field: 'message', message: 'Message is required' });
        isValid = false;
    } else if (data.message.trim().length < 10) {
        errors.push({ field: 'message', message: 'Message must be at least 10 characters long' });
        isValid = false;
    }
    
    // Display errors
    if (!isValid) {
        showFormErrors(errors);
    }
    
    return isValid;
}

// Individual field validation
function validateField(field) {
    const value = field.value.trim();
    const fieldName = field.name;
    let isValid = true;
    let message = '';
    
    switch (fieldName) {
        case 'firstName':
        case 'lastName':
            if (!value) {
                isValid = false;
                message = `${fieldName === 'firstName' ? 'First' : 'Last'} name is required`;
            }
            break;
            
        case 'email':
            if (!value) {
                isValid = false;
                message = 'Email is required';
            } else if (!isValidEmail(value)) {
                isValid = false;
                message = 'Please enter a valid email address';
            }
            break;
            
        case 'phone':
            if (!value) {
                isValid = false;
                message = 'Phone number is required';
            }
            break;
            
        case 'subject':
            if (!value) {
                isValid = false;
                message = 'Subject is required';
            }
            break;
            
        case 'message':
            if (!value) {
                isValid = false;
                message = 'Message is required';
            } else if (value.length < 10) {
                isValid = false;
                message = 'Message must be at least 10 characters long';
            }
            break;
    }
    
    if (!isValid) {
        showFieldError(field, message);
    } else {
        clearFieldError(field);
    }
    
    return isValid;
}

// Email validation helper
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Show form errors
function showFormErrors(errors) {
    // Clear previous errors
    clearAllErrors();
    
    errors.forEach(error => {
        const field = document.getElementById(error.field);
        if (field) {
            showFieldError(field, error.message);
        }
    });
    
    // Scroll to first error
    if (errors.length > 0) {
        const firstErrorField = document.getElementById(errors[0].field);
        if (firstErrorField) {
            firstErrorField.scrollIntoView({ behavior: 'smooth', block: 'center' });
            firstErrorField.focus();
        }
    }
}

// Show individual field error
function showFieldError(field, message) {
    clearFieldError(field);
    
    field.classList.add('error');
    
    const errorDiv = document.createElement('div');
    errorDiv.className = 'field-error';
    errorDiv.textContent = message;
    errorDiv.style.color = '#ef4444';
    errorDiv.style.fontSize = '0.875rem';
    errorDiv.style.marginTop = '0.25rem';
    
    field.parentNode.appendChild(errorDiv);
}

// Clear individual field error
function clearFieldError(field) {
    field.classList.remove('error');
    const errorDiv = field.parentNode.querySelector('.field-error');
    if (errorDiv) {
        errorDiv.remove();
    }
}

// Clear all errors
function clearAllErrors() {
    const errorFields = document.querySelectorAll('.error');
    const errorMessages = document.querySelectorAll('.field-error');
    
    errorFields.forEach(field => field.classList.remove('error'));
    errorMessages.forEach(message => message.remove());
}

// Phone number formatting
function formatPhoneNumber(input) {
    let value = input.value.replace(/\D/g, '');
    
    if (value.length >= 6) {
        value = value.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
    } else if (value.length >= 3) {
        value = value.replace(/(\d{3})(\d{3})/, '($1) $2');
    } else if (value.length > 0) {
        value = value.replace(/(\d{3})/, '($1)');
    }
    
    input.value = value;
}

// Submit contact form
function submitContactForm(data) {
    const submitBtn = document.querySelector('.btn-submit');
    const originalText = submitBtn.innerHTML;
    
    // Show loading state
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    submitBtn.disabled = true;
    
    // Simulate API call
    setTimeout(() => {
        // Reset button
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        
        // Show success message
        showContactSuccess();
        
        // Reset form
        document.getElementById('contactForm').reset();
        
        // Clear any remaining errors
        clearAllErrors();
        
        // Track submission (analytics)
        trackContactSubmission(data);
        
        console.log('Contact form submitted:', data);
    }, 2000);
}

// Show success message
function showContactSuccess() {
    const successMessage = document.getElementById('successMessage');
    if (successMessage) {
        successMessage.classList.remove('hidden');
        successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
        
        // Auto-hide after 10 seconds
        setTimeout(() => {
            successMessage.classList.add('hidden');
        }, 10000);
    }
}

// FAQ Functionality
function initFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = question.querySelector('i');
        
        question.addEventListener('click', function() {
            const isOpen = answer.style.display === 'block';
            
            // Close all other FAQ items
            faqItems.forEach(otherItem => {
                const otherAnswer = otherItem.querySelector('.faq-answer');
                const otherIcon = otherItem.querySelector('.faq-question i');
                otherAnswer.style.display = 'none';
                otherIcon.style.transform = 'rotate(0deg)';
            });
            
            // Toggle current item
            if (!isOpen) {
                answer.style.display = 'block';
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
}

// Smooth Scrolling
function initSmoothScrolling() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Animations
function initAnimations() {
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
    
    // Animate elements on scroll
    const animateElements = document.querySelectorAll('.contact-form-container, .contact-info-card, .faq-item, .map-placeholder');
    
    animateElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(element);
    });
}

// Analytics tracking
function trackContactSubmission(data) {
    // Google Analytics or other tracking
    if (typeof gtag !== 'undefined') {
        gtag('event', 'contact_form_submission', {
            'event_category': 'Contact',
            'event_label': data.subject,
            'value': 1
        });
    }
    
    // Custom tracking
    console.log('Contact submission tracked:', {
        timestamp: new Date().toISOString(),
        subject: data.subject,
        newsletter: data.newsletter
    });
}

// Utility function to show notifications
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
            <span>${message}</span>
        </div>
    `;
    
    // Add styles
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? '#10b981' : '#ef4444'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        transform: translateX(100%);
        transition: transform 0.3s ease;
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Remove after 5 seconds
    setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 5000);
}

// Map functionality (if Google Maps is integrated)
function initMap() {
    // This would be called if Google Maps API is loaded
    const mapElement = document.getElementById('map');
    if (mapElement && typeof google !== 'undefined') {
        const map = new google.maps.Map(mapElement, {
            center: { lat: 40.7128, lng: -74.0060 }, // New York coordinates
            zoom: 15,
            styles: [
                // Custom map styling can be added here
            ]
        });
        
        const marker = new google.maps.Marker({
            position: { lat: 40.7128, lng: -74.0060 },
            map: map,
            title: 'Elite Finance Solutions'
        });
    }
} 