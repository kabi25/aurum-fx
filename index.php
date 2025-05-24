<?php
/*
Template Name: Finance Broker Landing Page
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurum FX Academy - Your Trusted Financial Partner</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <img src="images/aurum-fx-logo.jpeg" alt="Aurum FX Academy" class="logo-img">
                    <h2>Aurum FX Academy</h2>
                </div>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="client-portal.php" class="nav-link">Client Portal</a>
                    </li>
                    <li class="nav-item">
                        <a href="market.php" class="nav-link">Market</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact Us</a>
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

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Your Trusted Finance Broker</h1>
                <p class="hero-subtitle">Maximizing your financial potential with expert guidance and proven strategies</p>
                <div class="hero-buttons">
                    <a href="client-portal.php" class="btn btn-primary">Get Started</a>
                    <a href="#about" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="chart-placeholder">
                    <img src="images/aurum-fx-logo.jpeg" alt="Aurum FX Academy" class="logo-img-card">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <h2>About Our Finance Broker</h2>
                <p>Meet the expert behind your financial success</p>
            </div>
            <div class="about-content">
                <div class="about-image">
                    <img src="images/broker-photo.jpeg" alt="Professional Finance Broker" class="broker-photo">
                </div>
                <div class="about-text">
                    <h3>Professional Finance Broker</h3>
                    <p class="about-title">Senior Finance Broker & Investment Strategist</p>
                    <p>With extensive experience in financial markets, our expert has helped hundreds of clients achieve their financial goals through strategic investment planning and market expertise.</p>
                    
                    <div class="expertise">
                        <h4>Areas of Expertise:</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Portfolio Management</li>
                            <li><i class="fas fa-check"></i> Risk Assessment</li>
                            <li><i class="fas fa-check"></i> Market Analysis</li>
                            <li><i class="fas fa-check"></i> Investment Strategy</li>
                            <li><i class="fas fa-check"></i> Financial Planning</li>
                        </ul>
                    </div>

                    <div class="credentials">
                        <h4>Credentials:</h4>
                        <div class="credential-badges">
                            <span class="badge">CFA Charterholder</span>
                            <span class="badge">Series 7 Licensed</span>
                            <span class="badge">MBA Finance</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="section-header">
                <h2>What We Do</h2>
                <p>Comprehensive financial services tailored to your needs</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Investment Advisory</h3>
                    <p>Expert guidance on investment opportunities and portfolio optimization strategies.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Risk Management</h3>
                    <p>Comprehensive risk assessment and mitigation strategies for your investments.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Market Analysis</h3>
                    <p>In-depth market research and analysis to inform your investment decisions.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Prop Trading</h3>
                    <p>Access to our proprietary trading firm with competitive profit-sharing models.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>Client Testimonials</h2>
                <p>What our clients say about our services</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"John's expertise helped me increase my portfolio by 35% in just one year. His market insights are invaluable."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <p>CEO, Tech Innovations</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Professional, reliable, and results-driven. The best financial advisor I've worked with."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Michael Chen</h4>
                            <p>Investment Manager</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"The prop firm opportunity has been life-changing. Excellent support and profit-sharing structure."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Emily Rodriguez</h4>
                            <p>Professional Trader</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Start Your Financial Journey?</h2>
                <p>Join hundreds of satisfied clients who trust us with their financial future</p>
                <a href="client-portal.php" class="btn btn-primary btn-large">Get Started Today</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <img src="images/aurum-fx-logo.png" alt="Aurum FX Academy" class="footer-logo">
                    <h3>Aurum FX Academy</h3>
                    <p>Your trusted partner in financial success</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="client-portal.php">Client Portal</a></li>
                        <li><a href="market.php">Market</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="prop-firm.php">Our Prop Firm</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <div class="contact-info">
                        <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                        <p><i class="fas fa-envelope"></i> info@aurumfxacademy.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> 123 Finance St, New York, NY</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Aurum FX Academy. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html> 