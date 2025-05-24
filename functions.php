<?php
/**
 * Elite Finance Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
function elite_finance_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'elite-finance'),
        'footer' => __('Footer Menu', 'elite-finance'),
    ));
}
add_action('after_setup_theme', 'elite_finance_setup');

// Enqueue styles and scripts
function elite_finance_scripts() {
    // Styles
    wp_enqueue_style('elite-finance-style', get_stylesheet_uri());
    wp_enqueue_style('elite-finance-main', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    
    // Page-specific styles
    if (is_page_template('client-portal.php')) {
        wp_enqueue_style('portal-styles', get_template_directory_uri() . '/portal-styles.css');
    }
    if (is_page_template('market.php')) {
        wp_enqueue_style('market-styles', get_template_directory_uri() . '/market-styles.css');
    }
    if (is_page_template('contact.php')) {
        wp_enqueue_style('contact-styles', get_template_directory_uri() . '/contact-styles.css');
    }
    if (is_page_template('prop-firm.php')) {
        wp_enqueue_style('prop-firm-styles', get_template_directory_uri() . '/prop-firm-styles.css');
    }
    
    // Scripts
    wp_enqueue_script('elite-finance-main', get_template_directory_uri() . '/script.js', array('jquery'), '1.0.0', true);
    
    // Page-specific scripts
    if (is_page_template('client-portal.php')) {
        wp_enqueue_script('portal-script', get_template_directory_uri() . '/portal-script.js', array('jquery'), '1.0.0', true);
    }
    if (is_page_template('market.php')) {
        wp_enqueue_script('chart-js', 'https://cdn.jsdelivr.net/npm/chart.js', array(), '3.9.1', true);
        wp_enqueue_script('market-script', get_template_directory_uri() . '/market-script.js', array('chart-js'), '1.0.0', true);
    }
    if (is_page_template('contact.php')) {
        wp_enqueue_script('contact-script', get_template_directory_uri() . '/contact-script.js', array('jquery'), '1.0.0', true);
    }
    if (is_page_template('prop-firm.php')) {
        wp_enqueue_script('prop-firm-script', get_template_directory_uri() . '/prop-firm-script.js', array('jquery'), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'elite_finance_scripts');

// Customizer options
function elite_finance_customize_register($wp_customize) {
    // Company Information Section
    $wp_customize->add_section('company_info', array(
        'title' => 'Company Information',
        'priority' => 30,
    ));
    
    // Company Name
    $wp_customize->add_setting('company_name', array(
        'default' => 'Aurum FX Academy',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_name', array(
        'label' => 'Company Name',
        'section' => 'company_info',
        'type' => 'text',
    ));
    
    // Phone Number
    $wp_customize->add_setting('company_phone', array(
        'default' => '+1 (555) 123-4567',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_phone', array(
        'label' => 'Phone Number',
        'section' => 'company_info',
        'type' => 'text',
    ));
    
    // Email Address
    $wp_customize->add_setting('company_email', array(
        'default' => 'info@aurumfxacademy.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('company_email', array(
        'label' => 'Email Address',
        'section' => 'company_info',
        'type' => 'email',
    ));
}
add_action('customize_register', 'elite_finance_customize_register');
?> 