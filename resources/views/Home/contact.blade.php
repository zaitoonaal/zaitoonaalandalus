<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#ffffff" />
  <meta name="description" content="Contact Zaitoona Al Andalaus — a premium restaurant, shisha and coffee lounge in Doha, Qatar." />
  <title>Contact Us | Zaitoona Al Andalaus</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=DM+Sans:wght@300;400;500;600&family=Noto+Kufi+Arabic:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/contact.css') }}">
</head>
<body>


  @include('Home.header')

  <main>
    
    <!-- Hero Section -->
    <section class="contact-hero">
      <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?auto=format&fit=crop&w=1800&q=80" alt="Delicious Mezze Platter" loading="lazy">
      <div class="contact-hero-content reveal">
        <h1 class="contact-hero-title" data-i18n="contactHeroTitle">Contact Us</h1>
      </div>
    </section>

    <!-- Split Contact & Map -->
    <section class="section container contact-split">
      <div class="contact-map-wrapper reveal">
        <iframe title="Zaitoona Al Andalaus location map" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Old%20Airport,%20Near%20Food%20Place,%20Building%20No.%2026,%20Zone%2045,%20Street%20No%20840,%20Doha%20Qatar&output=embed"></iframe>
      </div>
      
      <div class="contact-copy reveal">
        <h2 data-i18n="contactHeading">Have a question, a comment, or just craving that mezze?</h2>
        <h3 data-i18n="contactSub">We'd love to hear from you.</h3>
        <p class="lede" style="font-size: 14px;" data-i18n="contactDesc">Whether you're planning a visit, hosting an event, or just want to say hello, our team is here to help. Drop us a message, give us a call, or swing by and speak to us in person.</p>
        
        <div class="contact-actions">
          <a href="mailto:hello@zaitoona.qa" class="btn btn-primary js-email-link"><span data-i18n="emailUs">Email Us</span></a>
          <a href="#" target="_blank" rel="noopener" class="btn js-wa-btn"><span data-i18n="whatsappUs">WhatsApp Us</span></a>
        </div>

        <div class="contact-info-grid">
          <div class="contact-info-item">
            <h4 data-i18n="locationLabel">Location</h4>
            <p class="js-address">Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840, Doha Qatar</p>
          </div>
          <div class="contact-info-item">
            <h4 data-i18n="phoneLabel">Phone / WhatsApp</h4>
            <p class="js-phone">+974 3385 8316</p>
          </div>
        </div>
      </div>
    </section>

    @include('Home.instagramgrid')

  </main>

  @include('Home.footer')

  <script src="{{ asset('assets/frontend/js/contact.js') }}"></script>
</body>
</html>