<?php
/*
Template Name: Prop Firm
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prop Firm - Elite Finance Broker</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="prop-firm-styles.css">
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
                        <a href="contact.php" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="prop-firm.php" class="nav-link active">Our Prop Firm</a>
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

    <!-- Prop Firm Hero Section -->
    <section class="prop-hero">
        <div class="container">
            <div class="prop-hero-content">
                <h1>Elite Trading Prop Firm</h1>
                <p>Join our proprietary trading firm and trade with our capital while keeping up to 80% of your profits</p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number">$10M+</div>
                        <div class="stat-label">Capital Available</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">80%</div>
                        <div class="stat-label">Profit Share</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Active Traders</div>
                    </div>
                </div>
                <a href="#application" class="btn btn-primary btn-large">Apply Now</a>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works">
        <div class="container">
            <div class="section-header">
                <h2>How Our Prop Firm Works</h2>
                <p>A simple 4-step process to start trading with our capital</p>
            </div>
            
            <div class="steps-container">
                <div class="step-item">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Apply & Evaluate</h3>
                        <p>Submit your application and complete our trading evaluation challenge to demonstrate your skills.</p>
                    </div>
                </div>
                
                <div class="step-item">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Get Funded</h3>
                        <p>Once you pass the evaluation, receive your funded trading account with our capital.</p>
                    </div>
                </div>
                
                <div class="step-item">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Start Trading</h3>
                        <p>Begin trading with our capital while following our risk management guidelines.</p>
                    </div>
                </div>
                
                <div class="step-item">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Keep Profits</h3>
                        <p>Withdraw your share of profits regularly while we scale your account based on performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funding Programs -->
    <section class="funding-programs">
        <div class="container">
            <div class="section-header">
                <h2>Funding Programs</h2>
                <p>Choose the program that matches your trading experience and goals</p>
            </div>
            
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-header">
                        <h3>Starter Program</h3>
                        <div class="program-amount">$25,000</div>
                    </div>
                    <div class="program-features">
                        <ul>
                            <li><i class="fas fa-check"></i> $25,000 starting capital</li>
                            <li><i class="fas fa-check"></i> 70% profit split</li>
                            <li><i class="fas fa-check"></i> 5% daily loss limit</li>
                            <li><i class="fas fa-check"></i> 10% total loss limit</li>
                            <li><i class="fas fa-check"></i> Bi-weekly payouts</li>
                        </ul>
                    </div>
                    <div class="program-price">
                        <span class="evaluation-fee">Evaluation Fee: $199</span>
                    </div>
                    <a href="#application" class="btn btn-secondary btn-full">Apply Now</a>
                </div>
                
                <div class="program-card featured">
                    <div class="program-badge">Most Popular</div>
                    <div class="program-header">
                        <h3>Professional Program</h3>
                        <div class="program-amount">$100,000</div>
                    </div>
                    <div class="program-features">
                        <ul>
                            <li><i class="fas fa-check"></i> $100,000 starting capital</li>
                            <li><i class="fas fa-check"></i> 80% profit split</li>
                            <li><i class="fas fa-check"></i> 5% daily loss limit</li>
                            <li><i class="fas fa-check"></i> 10% total loss limit</li>
                            <li><i class="fas fa-check"></i> Weekly payouts</li>
                            <li><i class="fas fa-check"></i> Scaling up to $1M</li>
                        </ul>
                    </div>
                    <div class="program-price">
                        <span class="evaluation-fee">Evaluation Fee: $499</span>
                    </div>
                    <a href="#application" class="btn btn-primary btn-full">Apply Now</a>
                </div>
                
                <div class="program-card">
                    <div class="program-header">
                        <h3>Elite Program</h3>
                        <div class="program-amount">$250,000</div>
                    </div>
                    <div class="program-features">
                        <ul>
                            <li><i class="fas fa-check"></i> $250,000 starting capital</li>
                            <li><i class="fas fa-check"></i> 80% profit split</li>
                            <li><i class="fas fa-check"></i> 6% daily loss limit</li>
                            <li><i class="fas fa-check"></i> 12% total loss limit</li>
                            <li><i class="fas fa-check"></i> Weekly payouts</li>
                            <li><i class="fas fa-check"></i> Scaling up to $2M</li>
                            <li><i class="fas fa-check"></i> Dedicated support</li>
                        </ul>
                    </div>
                    <div class="program-price">
                        <span class="evaluation-fee">Evaluation Fee: $999</span>
                    </div>
                    <a href="#application" class="btn btn-secondary btn-full">Apply Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="benefits-section">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our Prop Firm?</h2>
                <p>Experience the advantages of trading with Elite Finance</p>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>High Profit Splits</h3>
                    <p>Keep up to 80% of your trading profits with our competitive profit-sharing structure.</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Account Scaling</h3>
                    <p>Grow your account size based on consistent performance, up to $2M in trading capital.</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Risk Management</h3>
                    <p>Trade with confidence knowing our risk management system protects both you and our capital.</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Education & Support</h3>
                    <p>Access comprehensive training materials and ongoing support from experienced traders.</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Flexible Trading</h3>
                    <p>Trade on your own schedule with no minimum trading requirements or time constraints.</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Professional Tools</h3>
                    <p>Access to premium trading platforms, real-time data, and advanced analytical tools.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Requirements -->
    <section class="requirements-section">
        <div class="container">
            <div class="requirements-content">
                <div class="requirements-text">
                    <h2>Trading Requirements</h2>
                    <p>To ensure success for both traders and our firm, we have established clear guidelines:</p>
                    
                    <div class="requirement-list">
                        <div class="requirement-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Profit Target</h4>
                                <p>Achieve 8% profit during the evaluation phase to qualify for funding</p>
                            </div>
                        </div>
                        
                        <div class="requirement-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Maximum Daily Loss</h4>
                                <p>Never exceed 5% daily loss limit to maintain account standing</p>
                            </div>
                        </div>
                        
                        <div class="requirement-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Maximum Total Loss</h4>
                                <p>Keep total account drawdown below 10% at all times</p>
                            </div>
                        </div>
                        
                        <div class="requirement-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Trading Days</h4>
                                <p>Minimum 5 trading days during evaluation period</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="requirements-visual">
                    <div class="chart-container">
                        <div class="performance-chart">
                            <h4>Sample Performance Chart</h4>
                            <div class="chart-placeholder">
                                <i class="fas fa-chart-area"></i>
                                <p>Consistent Growth Pattern</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="success-stories">
        <div class="container">
            <div class="section-header">
                <h2>Trader Success Stories</h2>
                <p>Real stories from our funded traders</p>
            </div>
            
            <div class="stories-grid">
                <div class="story-card">
                    <div class="trader-info">
                        <div class="trader-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="trader-details">
                            <h4>Alex Rodriguez</h4>
                            <p>Professional Trader</p>
                            <div class="trader-stats">
                                <span>Account: $250K</span>
                                <span>Profit: $45K</span>
                            </div>
                        </div>
                    </div>
                    <div class="story-content">
                        <p>"Elite Finance gave me the opportunity to trade with significant capital. In 6 months, I've earned more than my previous annual salary. The support team is incredible!"</p>
                    </div>
                </div>
                
                <div class="story-card">
                    <div class="trader-info">
                        <div class="trader-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="trader-details">
                            <h4>Sarah Chen</h4>
                            <p>Day Trader</p>
                            <div class="trader-stats">
                                <span>Account: $100K</span>
                                <span>Profit: $28K</span>
                            </div>
                        </div>
                    </div>
                    <div class="story-content">
                        <p>"The evaluation process was fair and the funding was quick. I love the flexibility and the fact that I can scale my account based on performance."</p>
                    </div>
                </div>
                
                <div class="story-card">
                    <div class="trader-info">
                        <div class="trader-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="trader-details">
                            <h4>Michael Johnson</h4>
                            <p>Swing Trader</p>
                            <div class="trader-stats">
                                <span>Account: $500K</span>
                                <span>Profit: $67K</span>
                            </div>
                        </div>
                    </div>
                    <div class="story-content">
                        <p>"Started with $25K and now trading $500K. The scaling program is amazing and the profit splits are the best in the industry."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Section -->
    <section class="application-section" id="application">
        <div class="container">
            <div class="application-content">
                <div class="application-info">
                    <h2>Ready to Get Funded?</h2>
                    <p>Join hundreds of successful traders who are already trading with our capital</p>
                    
                    <div class="application-benefits">
                        <div class="benefit">
                            <i class="fas fa-rocket"></i>
                            <span>Quick evaluation process</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-money-bill-wave"></i>
                            <span>Fast funding upon passing</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-headset"></i>
                            <span>24/7 trader support</span>
                        </div>
                    </div>
                </div>
                
                <div class="application-form">
                    <form id="propFirmApplication">
                        <h3>Start Your Application</h3>
                        
                        <div class="form-group">
                            <label for="fullName">Full Name *</label>
                            <input type="text" id="fullName" name="fullName" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="experience">Trading Experience *</label>
                            <select id="experience" name="experience" required>
                                <option value="">Select your experience level</option>
                                <option value="beginner">Beginner (0-1 years)</option>
                                <option value="intermediate">Intermediate (1-3 years)</option>
                                <option value="advanced">Advanced (3-5 years)</option>
                                <option value="expert">Expert (5+ years)</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="program">Preferred Program *</label>
                            <select id="program" name="program" required>
                                <option value="">Select a program</option>
                                <option value="starter">Starter Program ($25K)</option>
                                <option value="professional">Professional Program ($100K)</option>
                                <option value="elite">Elite Program ($250K)</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="strategy">Trading Strategy</label>
                            <textarea id="strategy" name="strategy" rows="4" placeholder="Briefly describe your trading strategy and approach..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-full">
                            Submit Application
                        </button>
                    </form>
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
                        <li><a href="contact.php">Contact Us</a></li>
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
    <script src="prop-firm-script.js"></script>
</body>
</html> 