<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#ffffff" />
  <meta name="description" content="Book a table at Zaitoona Al Andalaus — a premium restaurant, shisha and coffee lounge in Doha, Qatar." />
  <title>Book a Table | Zaitoona Al Andalaus</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=DM+Sans:wght@300;400;500;600&family=Noto+Kufi+Arabic:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/reserveatable.css') }}">
</head>
<body>


  @include('Home.header')

  <main style="padding-top: 140px;">
    
    <!-- Booking Section -->
    <section class="booking section" id="reservation">
      <div class="container booking-wrap">
        <div class="booking-info">
          <div class="eyebrow reveal" data-i18n="bookEyebrow">Reserve your table</div>
          <h2 class="section-title reveal" data-i18n="bookTitle">Your table is waiting.</h2>
          <p class="lede reveal" data-i18n="bookText">Send your booking request directly to our team. For groups, celebrations or preferred lounge seating, add a note and we will confirm availability with you.</p>
          <div class="booking-info-box reveal">
            <div class="info-line"><span data-i18n="phoneLabel">Phone / WhatsApp</span><strong class="js-phone">+974 3385 8316</strong></div>
            <div class="info-line"><span data-i18n="hoursLabel">Opening hours</span><strong data-i18n="hoursValue">Daily · 10:00 AM – 2:00 AM</strong></div>
            <div class="info-line"><span data-i18n="locationLabel">Location</span><strong data-i18n="locationValue">Doha, Qatar</strong></div>
          </div>
        </div>

        <form class="form reveal" id="bookingForm" novalidate>
          <div class="form-grid">
            <div class="field"><label for="name" data-i18n="formName">Your name</label><input id="name" name="name" type="text" autocomplete="name" required placeholder="Your name"></div>
            <div class="field"><label for="phone" data-i18n="formPhone">Phone number</label><input id="phone" name="phone" type="tel" autocomplete="tel" required placeholder="+974 ..."></div>
            <div class="field"><label for="date" data-i18n="formDate">Date</label><input id="date" name="date" type="date" required></div>
            <div class="field"><label for="time" data-i18n="formTime">Time</label><input id="time" name="time" type="time" required></div>
            <div class="field"><label for="guests" data-i18n="formGuests">Guests</label><select id="guests" name="guests" required><option value="2">2 guests</option><option value="3">3 guests</option><option value="4">4 guests</option><option value="5">5 guests</option><option value="6">6 guests</option><option value="7">7 guests</option><option value="8">8 guests</option><option value="9+">9+ guests</option></select></div>
            <div class="field"><label for="seating" data-i18n="formSeating">Seating preference</label><select id="seating" name="seating"><option data-i18n="seatNoPref">No preference</option><option data-i18n="seatDining">Dining area</option><option data-i18n="seatLounge">Shisha lounge</option><option data-i18n="seatOutdoor">Outdoor / terrace</option></select></div>
            <div class="field full"><label for="message" data-i18n="formMessage">Message</label><textarea id="message" name="message" placeholder="Celebration, dietary notes or seating request..."></textarea></div>
          </div>
          <button class="btn btn-primary form-submit" type="submit"><span data-i18n="sendBooking">Send booking by WhatsApp</span><svg class="btn-arrow" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="1.6"/></svg></button>
          <p class="form-note" data-i18n="formNote">Submitting opens WhatsApp with your reservation details. Your booking is confirmed only after our team replies.</p>
          <div class="form-status" id="formStatus" role="status"></div>
        </form>
      </div>
    </section>

    @include('Home.instagramgrid')

  </main>

  @include('Home.footer')

  <script src="{{ asset('assets/frontend/js/reserveatable.js') }}"></script>
</body>
</html>