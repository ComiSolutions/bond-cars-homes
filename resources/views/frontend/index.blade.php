@extends('layouts.app')

@section('title', 'Bond Cars & Homes')

@section('content')

<!-- Hero Section -->
<!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <div class="hero-text">
        <div class="hero-badge"><i class="fa-solid fa-droplet"></i> Phoenix's Favorite Car Wash</div>
        <h1>Drive In Dirty, Drive Out <span>Dazzling</span></h1>
        <p class="hero-description">
          From quick express washes to showroom-quality detailing, Diamond Shine keeps your ride looking its best. Open 7 days a week with no appointment needed.
        </p>
        <div class="hero-buttons">
          <a href="services.html" class="btn btn-primary">View Packages</a>
          <a href="contact.html" class="btn btn-light">Visit Us Today</a>
        </div>
        <div class="hero-stats">
          <div class="hero-stat">
            <div class="hero-stat-number">50K+</div>
            <p class="hero-stat-label">Cars Washed Yearly</p>
          </div>
          <div class="hero-stat">
            <div class="hero-stat-number">4.9</div>
            <p class="hero-stat-label">Star Rating</p>
          </div>
          <div class="hero-stat">
            <div class="hero-stat-number">12+</div>
            <p class="hero-stat-label">Years in Phoenix</p>
          </div>
        </div>
      </div>
      <div class="hero-visual">
        <img src="images/placeholder.jpg" alt="Gleaming car emerging from Diamond Shine Auto Wash tunnel" class="hero-image-photo">
      </div>
    </div>
  </section>

  <!-- Services Overview -->
{{-- @foreach($services as $service)
  <h3>{{ $service->title }}</h3>
  <p>{{ $service->description }}</p>
@endforeach --}}

  <section class="section">
    <div class="container">
      <div class="section-header">
        <div class="section-label"><i class="fa-solid fa-car"></i> Our Services</div>
        <h2>Everything Your Car Needs</h2>
        <p>From a quick rinse to a full-blown transformation. We have the right wash for every car and every budget.</p>
      </div>
      <div class="services-grid">
        <div class="service-card">
          <div class="service-card-icon"><i class="fa-solid fa-bolt"></i></div>
          <h3>Express Wash</h3>
          <p>In and out in under 10 minutes. A thorough exterior wash with spot-free rinse that keeps your car clean between deeper washes.</p>
        </div>
        <div class="service-card">
          <div class="service-card-icon"><i class="fa-solid fa-star"></i></div>
          <h3>Premium Wash</h3>
          <p>Our most popular package. Includes triple-foam polish, wheel cleaning, tire shine, and underbody flush for total coverage.</p>
        </div>
        <div class="service-card">
          <div class="service-card-icon"><i class="fa-solid fa-gem"></i></div>
          <h3>Ultimate Wash</h3>
          <p>The full treatment. Ceramic spray coating, hot wax protection, rain repellent, and interior fragrance for a showroom finish.</p>
        </div>
        <div class="service-card">
          <div class="service-card-icon"><i class="fa-solid fa-couch"></i></div>
          <h3>Interior Detail</h3>
          <p>Deep vacuum, dashboard conditioning, leather treatment, window cleaning, and fabric protection. Your cabin, refreshed.</p>
        </div>
        <div class="service-card">
          <div class="service-card-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
          <h3>Full Detail</h3>
          <p>Complete interior and exterior restoration. Clay bar treatment, paint correction, and hand wax. Your car looks brand new.</p>
        </div>
        <div class="service-card">
          <div class="service-card-icon"><i class="fa-solid fa-infinity"></i></div>
          <h3>Monthly Membership</h3>
          <p>Unlimited washes starting at $29/month. Drive through as often as you want. Most members wash 8+ times per month.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="section section-dark">
    <div class="container">
      <div class="section-header">
        <div class="section-label"><i class="fa-solid fa-shield-halved"></i> Why Diamond Shine</div>
        <h2>Not All Car Washes Are Equal</h2>
        <p>We invested in the best equipment, the safest chemicals, and the most thorough process in Phoenix.</p>
      </div>
      <div class="why-grid">
        <div class="why-card">
          <div class="why-icon"><i class="fa-solid fa-leaf"></i></div>
          <h3>Eco-Friendly</h3>
          <p>Our water reclamation system recycles 85% of the water we use. Biodegradable soaps that are tough on grime, gentle on the planet.</p>
        </div>
        <div class="why-card">
          <div class="why-icon"><i class="fa-solid fa-shield-halved"></i></div>
          <h3>Paint Safe</h3>
          <p>Soft-touch brushes and pH-balanced formulas protect your clear coat. No scratches, no swirl marks. We guarantee it.</p>
        </div>
        <div class="why-card">
          <div class="why-icon"><i class="fa-solid fa-clock"></i></div>
          <h3>Fast & Convenient</h3>
          <p>Express washes in under 10 minutes. No appointment needed. Open 7am to 8pm, seven days a week, including holidays.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <div class="section-label"><i class="fa-solid fa-quote-left"></i> What Customers Say</div>
        <h2>Thousands of Happy Drivers</h2>
        <p>Don't take our word for it. Here's what the people of Phoenix think about Diamond Shine.</p>
      </div>
      <div class="testimonials-grid">
        <div class="testimonial-card">
          <div class="testimonial-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <p class="testimonial-text">"I've been a monthly member for two years and my black SUV has never looked better. The unlimited wash plan pays for itself after just three visits."</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">MR</div>
            <div class="testimonial-info">
              <strong>Maria Rodriguez</strong>
              <span>Monthly Member since 2023</span>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <p class="testimonial-text">"Had my truck fully detailed before selling it. The buyer thought it was newer than it actually was. Diamond Shine literally added value to my vehicle."</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">JT</div>
            <div class="testimonial-info">
              <strong>James Torres</strong>
              <span>Full Detail Customer</span>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <p class="testimonial-text">"Quick, affordable, and consistently good. I stop by every Saturday morning. The staff always greets me by name. That's the kind of service you remember."</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">SK</div>
            <div class="testimonial-info">
              <strong>Sarah Kim</strong>
              <span>Weekly Customer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Banner -->
  <section class="cta-banner">
    <div class="container">
      <h2>Ready for a Spotless Ride?</h2>
      <p>No appointment needed. Just drive in and we'll take care of the rest.</p>
      <a href="contact.html" class="btn btn-white">Visit Us Today</a>
    </div>
  </section>

  <script>
  const navToggle = document.querySelector('.nav-toggle');
  const nav = document.querySelector('.nav');
  if (navToggle && nav) {
    navToggle.addEventListener('click', () => {
      const isOpen = nav.classList.toggle('nav-open');
      navToggle.classList.toggle('active');
      navToggle.setAttribute('aria-expanded', isOpen);
    });
  }
</script>
@endsection
