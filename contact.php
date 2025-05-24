<?php
/*
Template Name: Contact Us
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Elite Finance Broker</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact-styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <a href="index.php"><h2><i class="fas fa-chart-line"></i> Elite Finance</h2></a>
                </div>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="client-portal.php" class="nav-link">Client Portal</a>
                    </li>
                    <li class="nav-item">
                        <a href="market.php" class="nav-link">Market</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link active">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="prop-firm.php" class="nav-link">Our Prop Firm</a>
                    </li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-hero-content">
                <h1>Contact Us</h1>
                <p>Get in touch with our expert team for personalized financial guidance and support</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Form -->
                <div class="contact-form-container">
                    <div class="form-header">
                        <h2>Send us a Message</h2>
                        <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                    </div>
                    
                    <form class="contact-form" id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name *</label>
                                <input type="text" id="firstName" name="firstName" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="consultation">Investment Consultation</option>
                                <option value="prop-firm">Prop Firm Information</option>
                                <option value="support">Technical Support</option>
                                <option value="partnership">Partnership Opportunities</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" placeholder="Tell us how we can help you..." required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label class="checkbox-container">
                                <input type="checkbox" name="newsletter">
                                <span class="checkmark"></span>
                                Subscribe to our newsletter for market updates and insights
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-full">
                            <i class="fas fa-paper-plane"></i>
                            Send Message
                        </button>
                    </form>
                    
                    <div class="success-message hidden" id="successMessage">
                        <div class="success-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3>Message Sent Successfully!</h3>
                        <p>Thank you for contacting us. We'll get back to you within 24 hours.</p>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="contact-info-container">
                    <div class="contact-info-card">
                        <h3>Get in Touch</h3>
                        <p>Ready to take control of your financial future? Contact our expert team today.</p>
                        
                        <div class="contact-details">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Office Address</h4>
                                    <p>123 Finance Street<br>
                                    New York, NY 10001<br>
                                    United States</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Phone Number</h4>
                                    <p>+1 (555) 123-4567<br>
                                    <small>Mon - Fri: 9:00 AM - 6:00 PM EST</small></p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Email Address</h4>
                                    <p>info@elitefinance.com<br>
                                    <small>We respond within 24 hours</small></p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Business Hours</h4>
                                    <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                                    Saturday: 10:00 AM - 4:00 PM<br>
                                    Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <h4>Follow Us</h4>
                            <div class="social-icons">
                                <a href="#" class="social-link">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="section-header">
                <h2>Visit Our Office</h2>
                <p>Located in the heart of New York's financial district</p>
            </div>
            
            <div class="map-container">
                <div class="map-placeholder">
                    <div class="map-content">
                        <i class="fas fa-map-marked-alt"></i>
                        <h3>Interactive Map</h3>
                        <p>123 Finance Street, New York, NY 10001</p>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-secondary">
                            <i class="fas fa-external-link-alt"></i>
                            Open in Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our services</p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do I get started with your services?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Getting started is easy! Simply create an account through our Client Portal, choose your subscription plan, and complete the payment process. Once registered, you'll have immediate access to our platform and can schedule your first consultation.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of investment strategies do you offer?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We offer a wide range of investment strategies including portfolio management, risk assessment, market analysis, and custom investment plans tailored to your financial goals and risk tolerance.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How does your prop firm work?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our proprietary trading firm provides qualified traders with capital to trade financial markets. We offer competitive profit-sharing arrangements, comprehensive training, and ongoing support to help traders succeed.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are your fees and pricing structure?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We offer three subscription tiers: Basic ($99/month), Premium ($199/month), and Elite ($399/month). Each plan includes different levels of service and access to our platform features. No hidden fees or long-term contracts required.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide personalized investment advice?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our Premium and Elite plans include one-on-one consultations with our certified financial advisors. We provide personalized investment advice based on your individual financial situation and goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Start Your Financial Journey?</h2>
                <p>Join thousands of satisfied clients who trust us with their financial future</p>
                <div class="cta-buttons">
                    <a href="client-portal.php" class="btn btn-primary btn-large">Get Started Today</a>
                    <a href="tel:+15551234567" class="btn btn-secondary btn-large">
                        <i class="fas fa-phone"></i>
                        Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3><i class="fas fa-chart-line"></i> Elite Finance</h3>
                    <p>Your trusted partner in financial success</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="client-portal.php">Client Portal</a></li>
                        <li><a href="market.php">Market</a></li>
                        <li><a href="prop-firm.php">Our Prop Firm</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <div class="contact-info">
                        <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                        <p><i class="fas fa-envelope"></i> info@elitefinance.com</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Elite Finance. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="contact-script.js"></script>
</body>
</html> 