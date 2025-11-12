<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us – Jespher Tech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="index.html" class="logo">
                <img src="assets/images/logo.png" alt="Jespher Tech">
                Jespher Tech
            </a>
            
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="careers.html">Careers</a></li>
                <li><a href="faq.html">FAQ</a></li>
            </ul>
            
            <div class="nav-actions">
                <button class="theme-toggle" id="themeToggle">
                    <i class="fas fa-moon"></i>
                </button>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
        <section class="contact-section">
            <h1>Contact Us</h1>
            
            <?php
            // Display success or error messages
            if (isset($_GET['status'])) {
                if ($_GET['status'] === 'success') {
                    echo '<div class="form-message success">Thank you for your message! We\'ll get back to you within 24 hours.</div>';
                } elseif ($_GET['status'] === 'error') {
                    echo '<div class="form-message error">Sorry, there was an error sending your message. Please try again.</div>';
                }
            }
            ?>
            
            <form action="process-contact.php" method="POST" class="form-card">
                <div class="form-group">
                    <label for="name">Your Name *</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Your Email *</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                </div>
                
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" id="company" name="company" placeholder="Your company name (optional)">
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <select id="subject" name="subject" required>
                        <option value="">Select a subject</option>
                        <option value="general">General Inquiry</option>
                        <option value="quote">Request a Quote</option>
                        <option value="partnership">Partnership</option>
                        <option value="support">Technical Support</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Your Message *</label>
                    <textarea id="message" name="message" placeholder="Tell us about your project or inquiry..." required></textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </div>
            </form>
        </section>
        
        <section class="contact-details">
            <h2>Our Office</h2>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>Jespher Tech Ltd.</strong><br>
                        123 Innovation Avenue, Nairobi, Kenya
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <strong>Email</strong><br>
                        <a href="mailto:contact@jesphertech.com">contact@jesphertech.com</a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <strong>Phone</strong><br>
                        <a href="tel:+254710318560">+254 710 318 560</a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <strong>Business Hours</strong><br>
                        Mon - Fri: 8:00 AM - 6:00 PM EAT
                    </div>
                </div>
            </div>
            
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.808723999646!2d36.82115931475393!3d-1.292399835980925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d3b3c5c3a5%3A0x5a7d7b9c9c9c9c9c!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2ske!4v1620000000000!5m2!1sen!2ske" 
                    width="100%" 
                    height="300" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    title="Jespher Tech Location">
                </iframe>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="footer-row">
            <div>
                <img src="assets/images/logo.png" alt="Jespher Tech Logo" width="40">
                <span>© 2025 Jespher Tech. All rights reserved.</span>
            </div>
            <div class="socials">
                <a href="#"><img src="assets/icons/facebook.svg" alt="Facebook"></a>
                <a href="#"><img src="assets/icons/linkedin.svg" alt="LinkedIn"></a>
                <a href="#"><img src="assets/icons/twitter.svg" alt="Twitter"></a>
            </div>
        </div>
    </footer>
    
    <script src="main.js"></script>
</body>
</html>