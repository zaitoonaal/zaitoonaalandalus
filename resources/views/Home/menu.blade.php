<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#ffffff" />
  <meta name="description" content="Zaitoona Al Andalaus — Menu" />
  <title>Menu | Zaitoona Al Andalaus</title>

  <!-- Preconnect & Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=DM+Sans:wght@300;400;500;600&family=Noto+Kufi+Arabic:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/menu.css') }}">
</head>
<body>

 

  @include('Home.header')

  <main style="padding-top: 130px; min-height: 80vh;">
    <section class="section" id="menu">
      <!-- Full-width background image banner for the menu header section -->
      <div class="menu-hero-banner">
        <div class="container">
          <div class="menu-head">
            <div class="reveal">
              <div class="eyebrow" data-i18n="menuEyebrow">Signature selection</div>
              <h2 class="section-title" data-i18n="menuTitle">A menu for every part of the evening.</h2>
            </div>
            <p class="lede reveal" data-i18n="menuIntro">Explore the complete Zaitoona Al Andalaus menu featuring appetizers, signature grills, biryanis, artisan pizzas, refreshing mojitos, fresh juices, hot beverages, and premium shisha.</p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="menu-shell reveal">
          <div class="menu-tabs" id="menuTabs" role="tablist"></div>
          <div class="menu-panel">
            <div>
              <div class="menu-panel-top">
                <div class="menu-panel-title-wrap">
                  <span class="menu-note" data-i18n="menuNote">Prices in QAR</span>
                  <h3 class="menu-panel-title" id="menuPanelTitle">Appetizers</h3>
                </div>
                <div class="menu-controls">
                  <div class="menu-search-wrap">
                    <input type="search" id="menuSearch" class="menu-search" placeholder="Search dish or drink..." aria-label="Search menu items" />
                    <svg class="menu-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                  </div>
                </div>
              </div>
              <!-- Dynamic items container -->
              <div class="menu-items fade-in" id="menuItems"></div>
            </div>

            <div class="menu-footer">
              <p data-i18n="menuFooter">Please tell our team about any allergies or dietary requirements. Menu availability can vary.</p>
              <a href="/reserveatable" class="btn" data-i18n="reserveForDinner">Reserve a table</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('Home.instagramgrid')
  </main>

  @include('Home.footer')

  <!-- Main JavaScript Link -->
  <script src="{{ asset('assets/frontend/js/menu.js') }}"></script>
</body>
</html>