<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomeShine Services - Professional Home Cleaning</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="container">
      <div class="header-content">
        <a href="index.html" class="logo">
          <div class="logo-icon">H</div>
          <span class="logo-text">HomeShine Services</span>
        </a>

        <nav class="nav-desktop">
          <a href="index.html" class="active">Home</a>
          <a href="about.html">About Us</a>
          <a href="services.html">Services</a>
          <a href="faq.html">FAQ</a>
          <a href="contact.html">Contact</a>
        </nav>

        <div class="header-actions">
          <a href="tel:8888946174" class="phone-link">
            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <span>888.894.6174</span>
          </a>
          <a href="contact.html" class="btn btn-primary">Get a Free Quote</a>
        </div>

        <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
          <svg class="icon-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

      <nav class="mobile-nav" id="mobileNav">
        <a href="index.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="services.html">Services</a>
        <a href="faq.html">FAQ</a>
        <a href="contact.html">Contact</a>
        <a href="tel:8888946174" class="phone-link">
          <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
          </svg>
          <span>888.894.6174</span>
        </a>
        <a href="contact.html" class="btn btn-primary" style="margin-top: 1rem;">Get a Free Quote</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero" style="background-image: url('https://images.unsplash.com/photo-1755127761410-0c00c398c308?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBob3VzZSUyMGNsZWFuZXIlMjBjbGVhbmluZyUyMGtpdGNoZW58ZW58MXx8fHwxNzcyNzA5MDY0fDA&ixlib=rb-4.1.0&q=80&w=1080');">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
      <div class="grid grid-cols-2" style="align-items: center;">
        <div class="text-white">
          <h1 style="font-size: 3.75rem; margin-bottom: 1.5rem; line-height: 1.2;">
            Professional Home<br>
            <span style="color: #5eead4;">Cleaning Services</span><br>
            You Can Trust
          </h1>
          <p style="font-size: 1.25rem; margin-bottom: 2rem; color: #d1d5db;">
            Reliable, affordable, and high-quality cleaning services for homes and apartments across the United States.
          </p>
          
          <div style="display: flex; gap: 1rem; margin-bottom: 3rem; flex-wrap: wrap;">
            <a href="contact.html" class="btn btn-primary btn-lg">Get a Free Quote</a>
            <a href="services.html" class="btn btn-outline btn-lg">Our Services</a>
          </div>

          <div class="stats">
            <div>
              <div class="stat-value">500+</div>
              <div class="stat-label">Happy Clients</div>
            </div>
            <div>
              <div class="stat-value">15+</div>
              <div class="stat-label">Years Experience</div>
            </div>
            <div>
              <div class="stat-value">100%</div>
              <div class="stat-label">Satisfaction</div>
            </div>
          </div>
        </div>

        <!-- Quote Form (Desktop Only) -->
        <div style="display: none;" class="quote-form-hero">
          <div class="card" style="padding: 2rem;">
            <h3 style="font-size: 1.875rem; margin-bottom: 0.5rem;">Request Free Quote</h3>
            <p style="color: #6b7280; margin-bottom: 1.5rem;">Fill out the form and we'll get back to you shortly</p>
            
            <form onsubmit="handleQuoteSubmit(event)">
              <div class="form-group">
                <input type="text" class="form-input" placeholder="Full Name *" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-input" placeholder="Email Address *" required>
              </div>
              <div class="form-group">
                <input type="tel" class="form-input" placeholder="Phone Number *" required>
              </div>
              <div class="form-group">
                <select class="form-select">
                  <option>Select Service Type</option>
                  <option>House Cleaning</option>
                  <option>Apartment Cleaning</option>
                  <option>Deep Cleaning</option>
                  <option>Move-In/Move-Out</option>
                </select>
              </div>
              <div class="form-group">
                <input type="date" class="form-input">
              </div>
              <div class="form-group">
                <textarea class="form-textarea" rows="3" placeholder="Additional details..."></textarea>
              </div>
              <button type="submit" class="btn btn-primary" style="width: 100%;">Request Free Quote</button>
              <p style="font-size: 0.75rem; text-align: center; color: #6b7280; margin-top: 1rem;">
                By submitting, you agree to our Terms & Privacy Policy
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust Badges -->
  <section class="trust-badges">
    <div class="container">
      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem;">
        <div class="trust-badge">
          <svg class="icon-xl trust-badge-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
          <div>
            <div style="font-weight: 500;">Fully Insured</div>
            <div style="font-size: 0.75rem; color: #6b7280;">Licensed & Bonded</div>
          </div>
        </div>
        <div class="trust-badge">
          <svg class="icon-xl trust-badge-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
          </svg>
          <div>
            <div style="font-weight: 500;">Top Rated</div>
            <div style="font-size: 0.75rem; color: #6b7280;">5-Star Reviews</div>
          </div>
        </div>
        <div class="trust-badge">
          <svg class="icon-xl trust-badge-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <div>
            <div style="font-weight: 500;">Trained Staff</div>
            <div style="font-size: 0.75rem; color: #6b7280;">Background Checked</div>
          </div>
        </div>
        <div class="trust-badge">
          <svg class="icon-xl trust-badge-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div>
            <div style="font-weight: 500;">Flexible Hours</div>
            <div style="font-size: 0.75rem; color: #6b7280;">7 Days a Week</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="section bg-gray">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Our Cleaning Services</h2>
        <p class="section-subtitle">
          Professional cleaning solutions tailored to meet all your home and apartment cleaning needs
        </p>
      </div>

      <div class="grid grid-cols-3" style="max-width: 75rem; margin: 0 auto;">
        <!-- Service Card 1 -->
        <div class="service-card card-hover">
          <div class="service-image">
            <img src="https://images.unsplash.com/photo-1597665863042-47e00964d899?w=400" alt="House Cleaning">
            <div class="service-image-overlay"></div>
            <div class="service-icon">
              <svg class="icon-xl" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
            </div>
          </div>
          <div class="service-content">
            <h3>House Cleaning</h3>
            <p>Regular home cleaning for busy homeowners</p>
            <a href="house-cleaning.html" class="service-link">Learn More →</a>
          </div>
        </div>

        <!-- Service Card 2 -->
        <div class="service-card card-hover">
          <div class="service-image">
            <img src="https://images.unsplash.com/photo-1543652782-e939f5c372a3?w=400" alt="Apartment Cleaning">
            <div class="service-image-overlay"></div>
            <div class="service-icon">
              <svg class="icon-xl" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
              </svg>
            </div>
          </div>
          <div class="service-content">
            <h3>Apartment Cleaning</h3>
            <p>Efficient cleaning for apartments and condos</p>
            <a href="apartment-cleaning.html" class="service-link">Learn More →</a>
          </div>
        </div>

        <!-- Service Card 3 -->
        <div class="service-card card-hover">
          <div class="service-image">
            <img src="https://images.unsplash.com/photo-1736390755053-f57997f7931b?w=400" alt="Deep Cleaning">
            <div class="service-image-overlay"></div>
            <div class="service-icon">
              <svg class="icon-xl" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
              </svg>
            </div>
          </div>
          <div class="service-content">
            <h3>Deep Cleaning</h3>
            <p>Detailed cleaning for neglected spaces</p>
            <a href="deep-cleaning.html" class="service-link">Learn More →</a>
          </div>
        </div>

        <!-- More Service Cards -->
        <div class="service-card card-hover">
          <div class="service-image">
            <img src="https://images.unsplash.com/photo-1768548273807-275b0e16fff3?w=400" alt="Move In/Out">
            <div class="service-image-overlay"></div>
            <div class="service-icon">
              <svg class="icon-xl" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
            </div>
          </div>
          <div class="service-content">
            <h3>Move-In / Move-Out</h3>
            <p>Perfect for renters and homeowners relocating</p>
            <a href="services.html" class="service-link">Learn More →</a>
          </div>
        </div>

        <div class="service-card card-hover">
          <div class="service-image">
            <img src="https://images.unsplash.com/photo-1755127761410-0c00c398c308?w=400" alt="Kitchen Cleaning">
            <div class="service-image-overlay"></div>
            <div class="service-icon">
              <svg class="icon-xl" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
            </div>
          </div>
          <div class="service-content">
            <h3>Kitchen Cleaning</h3>
            <p>Degreasing and sanitizing surfaces</p>
            <a href="services.html" class="service-link">Learn More →</a>
          </div>
        </div>

        <div class="service-card card-hover">
          <div class="service-image">
            <img src="https://images.unsplash.com/photo-1722935437914-dc77c2c93641?w=400" alt="Bathroom Cleaning">
            <div class="service-image-overlay"></div>
            <div class="service-icon">
              <svg class="icon-xl" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
              </svg>
            </div>
          </div>
          <div class="service-content">
            <h3>Bathroom Cleaning</h3>
            <p>Sanitizing toilets, showers and sinks</p>
            <a href="services.html" class="service-link">Learn More →</a>
          </div>
        </div>
      </div>

      <div class="text-center" style="margin-top: 3rem;">
        <a href="services.html" class="btn btn-primary btn-lg">View All Services</a>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Why Choose HomeShine Services</h2>
        <p class="section-subtitle">
          We deliver excellence in every clean with our professional team and premium service
        </p>
      </div>

      <div class="grid grid-cols-3" style="max-width: 75rem; margin: 0 auto;">
        <div class="card p-6">
          <svg class="icon-xl checkmark" style="margin-bottom: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Trusted Professional Cleaners</h3>
          <p style="color: #6b7280;">All our cleaners are thoroughly vetted, trained, and fully insured</p>
        </div>

        <div class="card p-6">
          <svg class="icon-xl checkmark" style="margin-bottom: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Affordable Transparent Pricing</h3>
          <p style="color: #6b7280;">No hidden fees. Clear pricing for all services upfront</p>
        </div>

        <div class="card p-6">
          <svg class="icon-xl checkmark" style="margin-bottom: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Eco-Friendly Products</h3>
          <p style="color: #6b7280;">We use environmentally safe, non-toxic cleaning products</p>
        </div>

        <div class="card p-6">
          <svg class="icon-xl checkmark" style="margin-bottom: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Flexible Scheduling</h3>
          <p style="color: #6b7280;">Book at your convenience - weekdays or weekends</p>
        </div>

        <div class="card p-6">
          <svg class="icon-xl checkmark" style="margin-bottom: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Satisfaction Guarantee</h3>
          <p style="color: #6b7280;">100% satisfaction or we'll make it right at no extra cost</p>
        </div>

        <div class="card p-6">
          <svg class="icon-xl checkmark" style="margin-bottom: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Hundreds of Happy Clients</h3>
          <p style="color: #6b7280;">Join our growing family of satisfied customers</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing Section -->
  <section class="section" style="background: linear-gradient(135deg, #f0fdfa, #d1fae5);">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Simple & Transparent Pricing</h2>
        <p class="section-subtitle">
          Choose the cleaning package that best fits your needs and budget
        </p>
      </div>

      <div class="grid grid-cols-3" style="max-width: 75rem; margin: 0 auto;">
        <div class="pricing-card">
          <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem;">Basic Cleaning</h3>
          <div class="pricing-price">$99</div>
          <p style="color: #6b7280; margin-bottom: 1rem;">starting at</p>
          <ul class="pricing-features">
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Dusting all surfaces</span>
            </li>
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Vacuuming floors</span>
            </li>
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Bathroom cleaning</span>
            </li>
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Kitchen cleaning</span>
            </li>
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Surface sanitizing</span>
            </li>
          </ul>
          <a href="contact.html" class="btn btn-secondary" style="width: 100%;">Book Now</a>
        </div>

        <div class="pricing-card featured">
          <div class="pricing-badge">Most Popular</div>
          <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem;">Standard Cleaning</h3>
          <div class="pricing-price">$149</div>
          <p style="color: #6b7280; margin-bottom: 1rem;">starting at</p>
          <ul class="pricing-features">
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Everything in Basic</span>
            </li>
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Mopping floors</span>
            </li>
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Cabinet exteriors</span>
            </li>
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Appliance cleaning</span>
            </li>
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Detailed dusting</span>
            </li>
          </ul>
          <a href="contact.html" class="btn btn-primary" style="width: 100%;">Book Now</a>
        </div>

        <div class="pricing-card">
          <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem;">Deep Cleaning</h3>
          <div class="pricing-price">$199</div>
          <p style="color: #6b7280; margin-bottom: 1rem;">starting at</p>
          <ul class="pricing-features">
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Everything in Standard</span>
            </li>
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Inside appliances</span>
            </li>
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Baseboards & trim</span>
            </li>
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Window sills</span>
            </li>
            <li>
              <svg class="icon checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Behind furniture</span>
            </li>
          </ul>
          <a href="contact.html" class="btn btn-secondary" style="width: 100%;">Book Now</a>
        </div>
      </div>

      <div class="text-center" style="margin-top: 3rem;">
        <p style="color: #6b7280; margin-bottom: 1.5rem;">*Final pricing may vary based on home size and condition</p>
        <a href="contact.html" class="btn btn-primary btn-lg">Get Custom Quote</a>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">What Our Clients Say</h2>
        <p class="section-subtitle">
          Real reviews from real customers who trust our cleaning services
        </p>
      </div>

      <div class="grid grid-cols-3" style="max-width: 75rem; margin: 0 auto;">
        <div class="testimonial-card">
          <div class="testimonial-stars">
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
          </div>
          <p class="testimonial-text">
            "HomeShine Services did an amazing job cleaning our apartment. Everything looked spotless. The team was professional and friendly. Highly recommend!"
          </p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">S</div>
            <div>
              <p style="font-weight: 600;">Sarah M.</p>
              <p style="color: #6b7280; font-size: 0.875rem;">Manhattan, NY</p>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars">
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
          </div>
          <p class="testimonial-text">
            "Very professional and easy to schedule. The team was courteous and thorough. Will definitely use again for our regular cleaning needs."
          </p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">M</div>
            <div>
              <p style="font-weight: 600;">Michael R.</p>
              <p style="color: #6b7280; font-size: 0.875rem;">Brooklyn, NY</p>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars">
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            <svg class="icon star" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
          </div>
          <p class="testimonial-text">
            "Best cleaning service we've ever used. They pay attention to every detail and use great eco-friendly products. Worth every penny!"
          </p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">J</div>
            <div>
              <p style="font-weight: 600;">Jennifer L.</p>
              <p style="color: #6b7280; font-size: 0.875rem;">Queens, NY</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Get Free Quote Section -->
  <section class="section bg-gradient-teal text-white">
    <div class="container">
      <div class="grid grid-cols-2" style="max-width: 80rem; margin: 0 auto; align-items: center;">
        <div>
          <h2 style="font-size: 3rem; margin-bottom: 1.5rem;">Get Your Free Quote Today</h2>
          <p style="font-size: 1.25rem; margin-bottom: 2rem; color: #ccfbf1;">
            Fill out the form and receive a customized quote for your cleaning needs within 24 hours. No obligations, no hidden fees.
          </p>
          
          <div style="display: flex; flex-direction: column; gap: 1rem;">
            <div style="display: flex; align-items: flex-start; gap: 1rem;">
              <svg class="icon-lg" style="flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <div>
                <h4 style="font-size: 1.125rem; margin-bottom: 0.25rem;">Fast Response</h4>
                <p style="color: #ccfbf1;">Get your quote within 24 hours</p>
              </div>
            </div>
            <div style="display: flex; align-items: flex-start; gap: 1rem;">
              <svg class="icon-lg" style="flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <div>
                <h4 style="font-size: 1.125rem; margin-bottom: 0.25rem;">No Obligation</h4>
                <p style="color: #ccfbf1;">Free quote with no commitment</p>
              </div>
            </div>
            <div style="display: flex; align-items: flex-start; gap: 1rem;">
              <svg class="icon-lg" style="flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <div>
                <h4 style="font-size: 1.125rem; margin-bottom: 0.25rem;">Custom Solutions</h4>
                <p style="color: #ccfbf1;">Tailored to your specific needs</p>
              </div>
            </div>
          </div>

          <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid rgba(255, 255, 255, 0.2);">
            <p style="margin-bottom: 1rem;">Or contact us directly:</p>
            <div style="display: flex; flex-direction: column; gap: 0.5rem;">
              <a href="tel:8888946174" style="display: flex; align-items: center; gap: 0.75rem; color: white; transition: color 0.3s;">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <span style="font-size: 1.125rem;">888.894.6174</span>
              </a>
              <a href="mailto:info@homeshineservices.com" style="display: flex; align-items: center; gap: 0.75rem; color: white; transition: color 0.3s;">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span style="font-size: 1.125rem;">info@homeshineservices.com</span>
              </a>
            </div>
          </div>
        </div>

        <div class="card p-8">
          <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem; color: #1f2937;">Request Your Free Quote</h3>
          
          <form onsubmit="handleQuoteSubmit(event)">
            <div class="form-group">
              <input type="text" class="form-input" placeholder="Full Name *" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-input" placeholder="Email Address *" required>
            </div>
            <div class="form-group">
              <input type="tel" class="form-input" placeholder="Phone Number *" required>
            </div>
            <div class="form-group">
              <select class="form-select">
                <option>Select Service Type *</option>
                <option>House Cleaning</option>
                <option>Apartment Cleaning</option>
                <option>Deep Cleaning</option>
                <option>Move-In/Move-Out</option>
                <option>Kitchen Cleaning</option>
                <option>Bathroom Cleaning</option>
                <option>Recurring Cleaning</option>
              </select>
            </div>
            <div class="form-group">
              <input type="date" class="form-input" placeholder="Preferred Date">
            </div>
            <div class="form-group">
              <textarea class="form-textarea" rows="4" placeholder="Tell us about your cleaning needs, home size, special requests..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; height: 3rem; font-size: 1.125rem;">Get Free Quote</button>
            <p style="font-size: 0.75rem; text-align: center; color: #6b7280; margin-top: 1rem;">
              By submitting, you agree to our Terms & Privacy Policy
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Service Areas -->
  <section class="section bg-gray">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Areas We Serve</h2>
        <p class="section-subtitle">
          Providing quality cleaning services across the New York region
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 1.5rem; max-width: 60rem; margin: 0 auto;">
        <div class="card p-6 text-center card-hover">
          <svg class="icon-xl" style="margin: 0 auto 0.75rem; color: #0d9488;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <div style="font-weight: 500;">New York</div>
        </div>
        <div class="card p-6 text-center card-hover">
          <svg class="icon-xl" style="margin: 0 auto 0.75rem; color: #0d9488;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <div style="font-weight: 500;">New Jersey</div>
        </div>
        <div class="card p-6 text-center card-hover">
          <svg class="icon-xl" style="margin: 0 auto 0.75rem; color: #0d9488;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <div style="font-weight: 500;">Brooklyn</div>
        </div>
        <div class="card p-6 text-center card-hover">
          <svg class="icon-xl" style="margin: 0 auto 0.75rem; color: #0d9488;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <div style="font-weight: 500;">Queens</div>
        </div>
        <div class="card p-6 text-center card-hover">
          <svg class="icon-xl" style="margin: 0 auto 0.75rem; color: #0d9488;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <div style="font-weight: 500;">Manhattan</div>
        </div>
        <div class="card p-6 text-center card-hover">
          <svg class="icon-xl" style="margin: 0 auto 0.75rem; color: #0d9488;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <div style="font-weight: 500;">Long Island</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Final CTA -->
  <section class="section bg-gradient-teal text-white">
    <div class="container">
      <div class="text-center" style="max-width: 64rem; margin: 0 auto;">
        <h2 style="font-size: 3rem; margin-bottom: 1.5rem;">Ready for a Spotless Home?</h2>
        <p style="font-size: 1.25rem; margin-bottom: 2.5rem; color: #ccfbf1;">
          Schedule your cleaning service today and experience the HomeShine difference
        </p>
        
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem; margin-bottom: 3rem;">
          <a href="contact.html" class="btn btn-secondary btn-lg">Schedule Cleaning</a>
          <a href="tel:8888946174" class="btn btn-outline btn-lg">
            <svg class="icon" style="margin-right: 0.5rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            888.894.6174
          </a>
        </div>

        <div class="grid grid-cols-3" style="padding-top: 3rem; border-top: 1px solid rgba(255, 255, 255, 0.2); max-width: 56rem; margin: 0 auto;">
          <div>
            <svg class="icon-xl" style="margin: 0 auto 0.75rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <div style="font-size: 0.875rem;">Call Us Anytime</div>
            <div style="font-size: 1.125rem;">888.894.6174</div>
          </div>
          <div>
            <svg class="icon-xl" style="margin: 0 auto 0.75rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <div style="font-size: 0.875rem;">Email Us</div>
            <div style="font-size: 1.125rem;">info@homeshineservices.com</div>
          </div>
          <div>
            <svg class="icon-xl" style="margin: 0 auto 0.75rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <div style="font-size: 0.875rem;">Visit Us</div>
            <div style="font-size: 1.125rem;">25 Union Square W, NY</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-section">
          <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem;">
            <div class="logo-icon">H</div>
            <span class="logo-text" style="color: white;">HomeShine Services</span>
          </div>
          <p style="font-size: 0.875rem; margin-bottom: 1rem;">
            Professional home cleaning services you can trust. Making homes cleaner, healthier, and more comfortable.
          </p>
          <div class="social-links">
            <a href="#" style="color: #d1d5db; transition: color 0.3s;">
              <svg class="icon" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </a>
            <a href="#" style="color: #d1d5db; transition: color 0.3s;">
              <svg class="icon" fill="currentColor" viewBox="0 0 24 24">
                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
              </svg>
            </a>
            <a href="#" style="color: #d1d5db; transition: color 0.3s;">
              <svg class="icon" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
              </svg>
            </a>
          </div>
        </div>

        <div class="footer-section">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h3>Services</h3>
          <ul>
            <li><a href="house-cleaning.html">House Cleaning</a></li>
            <li><a href="apartment-cleaning.html">Apartment Cleaning</a></li>
            <li><a href="deep-cleaning.html">Deep Cleaning</a></li>
            <li><a href="services.html">Move-In/Move-Out</a></li>
            <li><a href="services.html">Recurring Cleaning</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h3>Contact Info</h3>
          <ul>
            <li style="display: flex; align-items: center; gap: 0.75rem;">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <a href="tel:8888946174">888.894.6174</a>
            </li>
            <li style="display: flex; align-items: center; gap: 0.75rem;">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <a href="mailto:info@homeshineservices.com">info@homeshineservices.com</a>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
              <svg class="icon" style="flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <span>25 Union Square W<br>New York, NY 10003</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <div>&copy; 2024 HomeShine Services. All rights reserved.</div>
        <div class="footer-links">
          <a href="terms.html">Terms & Conditions</a>
          <a href="privacy.html">Privacy Policy</a>
          <a href="disclaimer.html">Disclaimer</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript -->
  <script src="script.js"></script>
</body>
</html>
