// Portal Form Management
let currentStep = 'login';
let selectedPlan = 'premium';

// Form switching functions
function showLogin() {
    hideAllForms();
    document.getElementById('loginForm').classList.remove('hidden');
    currentStep = 'login';
}

function showRegister() {
    hideAllForms();
    document.getElementById('registerForm').classList.remove('hidden');
    currentStep = 'register';
}

function showPayment() {
    hideAllForms();
    document.getElementById('paymentForm').classList.remove('hidden');
    currentStep = 'payment';
    updateSelectedPlan();
}

function showSuccess() {
    hideAllForms();
    document.getElementById('successMessage').classList.remove('hidden');
    currentStep = 'success';
}

function hideAllForms() {
    const forms = ['loginForm', 'registerForm', 'paymentForm', 'successMessage'];
    forms.forEach(formId => {
        document.getElementById(formId).classList.add('hidden');
    });
}

// Plan selection
function selectPlan(planType) {
    // Remove selected class from all plans
    document.querySelectorAll('.plan-card').forEach(card => {
        card.classList.remove('selected');
    });
    
    // Add selected class to clicked plan
    document.querySelector(`[data-plan="${planType}"]`).classList.add('selected');
    
    selectedPlan = planType;
    updateSelectedPlan();
}

function updateSelectedPlan() {
    const plans = {
        basic: { name: 'Basic Plan', price: '$99/month' },
        premium: { name: 'Premium Plan', price: '$199/month' },
        elite: { name: 'Elite Plan', price: '$399/month' }
    };
    
    const plan = plans[selectedPlan];
    document.getElementById('selectedPlanName').textContent = plan.name;
    document.getElementById('selectedPlanPrice').textContent = plan.price;
}

// Form validation
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePassword(password) {
    return password.length >= 8;
}

function validateForm(formElement) {
    const inputs = formElement.querySelectorAll('input[required], select[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!input.value.trim()) {
            showFieldError(input, 'This field is required');
            isValid = false;
        } else {
            clearFieldError(input);
            
            // Specific validations
            if (input.type === 'email' && !validateEmail(input.value)) {
                showFieldError(input, 'Please enter a valid email address');
                isValid = false;
            }
            
            if (input.type === 'password' && !validatePassword(input.value)) {
                showFieldError(input, 'Password must be at least 8 characters long');
                isValid = false;
            }
        }
    });
    
    // Check password confirmation
    const password = formElement.querySelector('#registerPassword');
    const confirmPassword = formElement.querySelector('#confirmPassword');
    
    if (password && confirmPassword && password.value !== confirmPassword.value) {
        showFieldError(confirmPassword, 'Passwords do not match');
        isValid = false;
    }
    
    return isValid;
}

function showFieldError(input, message) {
    clearFieldError(input);
    
    const errorDiv = document.createElement('div');
    errorDiv.className = 'field-error';
    errorDiv.textContent = message;
    errorDiv.style.color = '#ef4444';
    errorDiv.style.fontSize = '0.875rem';
    errorDiv.style.marginTop = '0.25rem';
    
    input.parentNode.appendChild(errorDiv);
    input.style.borderColor = '#ef4444';
}

function clearFieldError(input) {
    const existingError = input.parentNode.querySelector('.field-error');
    if (existingError) {
        existingError.remove();
    }
    input.style.borderColor = '#e5e7eb';
}

// Card number formatting
function formatCardNumber(input) {
    let value = input.value.replace(/\s/g, '').replace(/[^0-9]/gi, '');
    let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
    
    if (formattedValue.length > 19) {
        formattedValue = formattedValue.substring(0, 19);
    }
    
    input.value = formattedValue;
}

function formatExpiryDate(input) {
    let value = input.value.replace(/\D/g, '');
    if (value.length >= 2) {
        value = value.substring(0, 2) + '/' + value.substring(2, 4);
    }
    input.value = value;
}

// Event listeners
document.addEventListener('DOMContentLoaded', function() {
    // Login form submission
    document.getElementById('loginFormElement').addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (validateForm(this)) {
            // Simulate login process
            showLoadingState(this);
            
            setTimeout(() => {
                hideLoadingState(this);
                // For demo purposes, redirect to dashboard
                window.location.href = 'dashboard.php';
            }, 2000);
        }
    });
    
    // Registration form submission
    document.getElementById('registerFormElement').addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (validateForm(this)) {
            showLoadingState(this);
            
            setTimeout(() => {
                hideLoadingState(this);
                showPayment();
            }, 2000);
        }
    });
    
    // Payment form submission
    document.getElementById('paymentFormElement').addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (validateForm(this)) {
            showLoadingState(this);
            
            setTimeout(() => {
                hideLoadingState(this);
                showSuccess();
            }, 3000);
        }
    });
    
    // Plan selection
    document.querySelectorAll('.plan-card').forEach(card => {
        card.addEventListener('click', function() {
            selectPlan(this.dataset.plan);
        });
    });
    
    // Card number formatting
    const cardNumberInput = document.getElementById('cardNumber');
    if (cardNumberInput) {
        cardNumberInput.addEventListener('input', function() {
            formatCardNumber(this);
        });
    }
    
    // Expiry date formatting
    const expiryDateInput = document.getElementById('expiryDate');
    if (expiryDateInput) {
        expiryDateInput.addEventListener('input', function() {
            formatExpiryDate(this);
        });
    }
    
    // CVV input restriction
    const cvvInput = document.getElementById('cvv');
    if (cvvInput) {
        cvvInput.addEventListener('input', function() {
            this.value = this.value.replace(/\D/g, '').substring(0, 4);
        });
    }
    
    // Initialize with premium plan selected
    selectPlan('premium');
});

function showLoadingState(form) {
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
    submitBtn.dataset.originalText = originalText;
}

function hideLoadingState(form) {
    const submitBtn = form.querySelector('button[type="submit"]');
    
    submitBtn.disabled = false;
    submitBtn.textContent = submitBtn.dataset.originalText;
}

// Smooth transitions between forms
function smoothTransition(hideElement, showElement) {
    hideElement.style.opacity = '0';
    hideElement.style.transform = 'translateY(-20px)';
    
    setTimeout(() => {
        hideElement.classList.add('hidden');
        showElement.classList.remove('hidden');
        showElement.style.opacity = '0';
        showElement.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            showElement.style.opacity = '1';
            showElement.style.transform = 'translateY(0)';
        }, 50);
    }, 300);
}

// Add CSS for smooth transitions
const style = document.createElement('style');
style.textContent = `
    .form-container {
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    
    .field-error {
        animation: slideDown 0.3s ease;
    }
    
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }
    
    .fa-spinner {
        animation: spin 1s linear infinite;
    }
    
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
`;
document.head.appendChild(style); 