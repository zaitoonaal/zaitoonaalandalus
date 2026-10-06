<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#ffffff" />
  <meta name="description" content="Read the latest news, stories, and culinary insights from Zaitoona Al Andalaus in Doha, Qatar." />
  <title>Our Journal | Zaitoona Al Andalaus</title>

  <!-- Preconnect & Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=DM+Sans:wght@300;400;500;600&family=Noto+Kufi+Arabic:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- End of Fonts -->

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/blog.css') }}">
  <!-- End of Main Stylesheet -->
</head>
<body>

  <!-- Top Announcement Bar -->
  <div class="announcement">
    <div class="announcement-inner">
      <span data-i18n="announce1">Doha, Qatar</span><span class="announcement-dot"></span>
      <span data-i18n="announce2">Restaurant · Shisha · Coffee Lounge</span><span class="announcement-dot optional"></span>
      <span class="optional" data-i18n="announce3">Reservations Recommended</span>
    </div>
  </div>
  <!-- End of Announcement Bar -->

  <!-- Header Include -->
  @include('Home.header')

  <main>
    
    <!-- Hero Section -->
    <section class="blog-hero">
      <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1800&q=80" alt="Zaitoona Coffee Rituals" loading="lazy">
      <div class="blog-hero-content reveal">
        <h1 class="blog-hero-title" data-i18n="blogHeroTitle">Our Journal</h1>
      </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Blog Intro -->
    <div class="blog-intro reveal">
      <h2 data-i18n="blogIntroHeading">Stories from the Table</h2>
      <p data-i18n="blogIntroText">Discover the inspiration behind our Mediterranean menus, the heritage of our premium shisha, and the delicate art of Arabic coffee. Welcome to the Zaitoona journal.</p>
    </div>

    <!-- Blog Grid Section -->
    <section class="section-sm container blog-wrap">
      <div class="blog-grid">
        
        <!-- Blog Article 1 -->
        <article class="blog-card reveal">
          <a href="#" class="blog-img-link" aria-label="Read The Art of Arabic Coffee">
            <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?auto=format&fit=crop&w=800&q=80" alt="Arabic Coffee" loading="lazy">
          </a>
          <div class="blog-content">
            <div class="eyebrow">Culture · <span class="date">Oct 12, 2026</span></div>
            <a href="#" class="blog-title-link"><h3 class="blog-title">The Delicate Art of Traditional Arabic Coffee</h3></a>
            <p class="blog-excerpt">Explore the rich history and meticulous preparation methods that make our signature coffee ritual a staple of Doha evenings.</p>
            <a href="#" class="blog-read-more"><span data-i18n="readMore">Read More</span> <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2"/></svg></a>
          </div>
        </article>

        <!-- Blog Article 2 -->
        <article class="blog-card reveal reveal-delay-1">
          <a href="#" class="blog-img-link" aria-label="Read Mediterranean Mezze Guide">
            <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=800&q=80" alt="Mezze Platter" loading="lazy">
          </a>
          <div class="blog-content">
            <div class="eyebrow">Culinary · <span class="date">Sep 28, 2026</span></div>
            <a href="#" class="blog-title-link"><h3 class="blog-title">Perfecting the Mediterranean Mezze Platter</h3></a>
            <p class="blog-excerpt">Our executive chef breaks down the essential components of the perfect sharing plate, focusing on fresh, regional ingredients.</p>
            <a href="#" class="blog-read-more"><span data-i18n="readMore">Read More</span> <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2"/></svg></a>
          </div>
        </article>

        <!-- Blog Article 3 -->
        <article class="blog-card reveal reveal-delay-2">
          <a href="#" class="blog-img-link" aria-label="Read Shisha Flavor Profiles">
            <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?auto=format&fit=crop&w=800&q=80" alt="Premium Shisha" loading="lazy">
          </a>
          <div class="blog-content">
            <div class="eyebrow">Lounge · <span class="date">Sep 15, 2026</span></div>
            <a href="#" class="blog-title-link"><h3 class="blog-title">A Beginner's Guide to Premium Shisha Profiles</h3></a>
            <p class="blog-excerpt">From crisp citrus notes to deep, earthy premium blends, find out how to choose the perfect profile for your next lounge visit.</p>
            <a href="#" class="blog-read-more"><span data-i18n="readMore">Read More</span> <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2"/></svg></a>
          </div>
        </article>

        <!-- Blog Article 4 -->
        <article class="blog-card reveal">
          <a href="#" class="blog-img-link" aria-label="Read Hosting Events">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="Elegant Dining Event" loading="lazy">
          </a>
          <div class="blog-content">
            <div class="eyebrow">Events · <span class="date">Aug 30, 2026</span></div>
            <a href="#" class="blog-title-link"><h3 class="blog-title">Hosting Memorable Evenings at Zaitoona</h3></a>
            <p class="blog-excerpt">Learn how our team transforms our spaces to accommodate private dinners, corporate gatherings, and intimate family celebrations.</p>
            <a href="#" class="blog-read-more"><span data-i18n="readMore">Read More</span> <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2"/></svg></a>
          </div>
        </article>

        <!-- Blog Article 5 -->
        <article class="blog-card reveal reveal-delay-1">
          <a href="#" class="blog-img-link" aria-label="Read Signature Desserts">
            <img src="https://images.unsplash.com/photo-1551024601-bec78aea704b?auto=format&fit=crop&w=800&q=80" alt="Signature Dessert" loading="lazy">
          </a>
          <div class="blog-content">
            <div class="eyebrow">Culinary · <span class="date">Aug 12, 2026</span></div>
            <a href="#" class="blog-title-link"><h3 class="blog-title">The Sweet Finish: Exploring Our Dessert Menu</h3></a>
            <p class="blog-excerpt">No Mediterranean meal is complete without a touch of sweetness. Dive into the making of our signature late-night treats.</p>
            <a href="#" class="blog-read-more"><span data-i18n="readMore">Read More</span> <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2"/></svg></a>
          </div>
        </article>

      </div>
      
      <!-- Pagination (Optional Layout Element) -->
      <div class="pagination reveal">
        <a href="#" class="btn btn-ghost" data-i18n="loadMore">Load More Articles</a>
      </div>
    </section>
    <!-- End of Blog Grid Section -->

    <!-- Instagram Grid Include -->
    @include('Home.instagramgrid')

  </main>

  <!-- Footer Include -->
  @include('Home.footer')

  <!-- Main JavaScript Link -->
  <script src="{{ asset('assets/frontend/js/blog.js') }}"></script>
  <!-- End of Main JavaScript Link -->
</body>
</html>