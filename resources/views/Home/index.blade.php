<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#ffffff" />
    
    <!-- SEO Optimization Meta Tags -->
    <title>Zaitoona Al Alandalus | Restaurant · Shisha · Coffee Lounge — Doha</title>
    <meta name="description" content="Zaitoona Al Alandalus — a premium restaurant, shisha and coffee lounge in Doha, Qatar. Mediterranean dining, refined shisha, Arabic coffee and relaxed late-night hospitality." />
    <meta name="keywords" content="Zaitoona Al Alandalus, Doha restaurant, Qatar shisha lounge, Doha coffee lounge, Mediterranean restaurant Doha, Arabic coffee Qatar, Middle Eastern cuisine, luxury dining Doha" />
    <meta name="author" content="Zaitoona Al Alandalus" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Open Graph (Facebook/LinkedIn) -->
    <meta property="og:title" content="Zaitoona Al Andalaus | Restaurant · Shisha · Coffee Lounge" />
    <meta property="og:description" content="A refined Doha destination for food, shisha and coffee. Mediterranean flavours, beautifully prepared shisha and coffee rituals." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('assets/frontend/img/image1.png') }}" />
    
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Zaitoona Al Andalaus | Restaurant · Shisha · Coffee Lounge" />
    <meta name="twitter:description" content="A refined Doha destination for food, shisha and coffee." />
    <meta name="twitter:image" content="{{ asset('assets/frontend/img/image1.png') }}" />
    <!-- End of SEO Optimization Meta Tags -->

    <!-- Preconnect & Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=DM+Sans:wght@300;400;500;600&family=Noto+Kufi+Arabic:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- End of Fonts -->

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <!-- End of Main Stylesheet -->
</head>
<body>
   
 <!-- Full Screen Loader -->
    <div class="loader" id="loader" aria-hidden="true">
        <div class="loader-mark">
            <img src="{{ asset('assets/frontend/img/image1.png') }}" class="loader-logo" alt="Loading...">
            <div class="loader-line"></div>
        </div>
    </div>
    <!-- End of Loader Section -->

    <!-- Top Announcement Bar -->
    <div class="announcement">
        <div class="announcement-inner">
            <span data-i18n="announce1">Doha, Qatar</span><span class="announcement-dot"></span>
            <span data-i18n="announce2">Restaurant · Shisha · Coffee Lounge</span><span class="announcement-dot optional"></span>
            <span class="optional" data-i18n="announce3">Reservations Recommended</span>
        </div>
    </div>
    <!-- End of Announcement Bar -->

    @include('Home.header')

    <main>
        @include('Home.hero')

        @include('Home.brand')

        @include('Home.aboutintro')

        @include('Home.experience')

        @include('Home.shishashowcase')

        @include('Home.gallery')

        @include('Home.testimonials')

        @include('Home.instagramgrid')
    </main>

    @include('Home.footer')`


    <!-- JSON-LD SEO Schema -->
    <script type="application/ld+json" id="schemaJson">
    {
        "@@context":"https://schema.org",
        "@@type":"Restaurant",
        "name":"Zaitoona Al Alandalus",
        "description":"Premium restaurant, shisha and coffee lounge in Doha, Qatar.",
        "servesCuisine":["Mediterranean","Middle Eastern","Arabic"],
        "priceRange":"QAR $$-$$$",
        "address":{"@@type":"PostalAddress","addressLocality":"Doha","addressCountry":"QA"},
        "telephone":"+97433858316",
        "acceptsReservations":"True"
    }
    </script>
    <!-- End of JSON-LD Schema -->

    <script src="{{ asset('assets/frontend/js/hero-section.js') }}"></script>
    <!-- Main JavaScript Link -->
    <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
    <!-- End of Main JavaScript Link -->


</body>
</html>