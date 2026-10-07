<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="UTF-8" />

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />

    <meta
        name="theme-color"
        content="#ffffff"
    />

    <meta
        name="format-detection"
        content="telephone=yes"
    />


    <!-- ============================================================
         PRIMARY SEO
         ============================================================ -->

    <title>Zaitoona Al Andalus | Restaurant, Shisha & Coffee Lounge in Doha</title>

    <meta
        name="description"
        content="Zaitoona Al Andalus is a premium restaurant, shisha and coffee lounge in Doha, Qatar, offering Mediterranean dining, refined shisha, Arabic coffee and relaxed hospitality."
    />

    <meta
        name="keywords"
        content="Zaitoona Al Andalus, restaurant in Doha, Doha restaurant, shisha lounge Doha, Qatar shisha lounge, coffee lounge Doha, Mediterranean restaurant Doha, Arabic coffee Qatar, Middle Eastern restaurant Doha, restaurant and shisha Doha"
    />

    <meta
        name="author"
        content="Zaitoona Al Andalus"
    />

    <meta
        name="robots"
        content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"
    />

    <link
        rel="canonical"
        href="{{ url()->current() }}"
    />


    <!-- ============================================================
         FAVICON
         ============================================================ -->

    <link
        rel="icon"
        type="image/png"
        href="{{ asset('assets/frontend/img/image1.png') }}?v=2"
    />

    <link
        rel="shortcut icon"
        type="image/png"
        href="{{ asset('assets/frontend/img/image1.png') }}?v=2"
    />

    <link
        rel="apple-touch-icon"
        href="{{ asset('assets/frontend/img/image1.png') }}?v=2"
    />

    <meta
        name="apple-mobile-web-app-title"
        content="Zaitoona Al Andalus"
    />


    <!-- ============================================================
         OPEN GRAPH
         Facebook / LinkedIn / WhatsApp
         ============================================================ -->

    <meta
        property="og:type"
        content="website"
    />

    <meta
        property="og:site_name"
        content="Zaitoona Al Andalus"
    />

    <meta
        property="og:title"
        content="Zaitoona Al Andalus | Restaurant, Shisha & Coffee Lounge in Doha"
    />

    <meta
        property="og:description"
        content="Discover Zaitoona Al Andalus in Doha, Qatar — Mediterranean dining, refined shisha, specialty coffee and relaxed hospitality."
    />

    <meta
        property="og:url"
        content="{{ url()->current() }}"
    />

    <meta
        property="og:image"
        content="{{ asset('assets/frontend/img/image1.png') }}"
    />

    <meta
        property="og:image:secure_url"
        content="{{ asset('assets/frontend/img/image1.png') }}"
    />

    <meta
        property="og:image:alt"
        content="Zaitoona Al Andalus Restaurant, Shisha and Coffee Lounge in Doha"
    />

    <meta
        property="og:locale"
        content="en_US"
    />


    <!-- ============================================================
         TWITTER / X
         ============================================================ -->

    <meta
        name="twitter:card"
        content="summary_large_image"
    />

    <meta
        name="twitter:title"
        content="Zaitoona Al Andalus | Restaurant, Shisha & Coffee Lounge in Doha"
    />

    <meta
        name="twitter:description"
        content="A premium Doha destination for Mediterranean dining, refined shisha, specialty coffee and relaxed hospitality."
    />

    <meta
        name="twitter:image"
        content="{{ asset('assets/frontend/img/image1.png') }}"
    />

    <meta
        name="twitter:image:alt"
        content="Zaitoona Al Andalus Restaurant in Doha, Qatar"
    />


    <!-- ============================================================
         PRECONNECT & FONTS
         ============================================================ -->

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=DM+Sans:wght@300;400;500;600&family=Noto+Kufi+Arabic:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >


    <!-- ============================================================
         MAIN STYLESHEET
         ============================================================ -->

    <link
        rel="stylesheet"
        href="{{ asset('assets/frontend/css/style.css') }}"
    >

</head>


<body>


    @include('Home.loader')


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


    @include('Home.footer')


    <!-- ============================================================
         RESTAURANT STRUCTURED DATA / JSON-LD
         ============================================================ -->

    <script
        type="application/ld+json"
        id="schemaJson"
    >
    {
        "@@context": "https://schema.org",
        "@@type": "Restaurant",

        "@@id": "{{ url('/') }}#restaurant",

        "name": "Zaitoona Al Andalus",

        "url": "{{ url('/') }}",

        "image": "{{ asset('assets/frontend/img/image1.png') }}",

        "logo": "{{ asset('assets/frontend/img/image1.png') }}",

        "description": "Zaitoona Al Andalus is a premium restaurant, shisha and coffee lounge in Doha, Qatar, offering Mediterranean and Middle Eastern dining, refined shisha and specialty coffee.",

        "telephone": "+97433858316",

        "priceRange": "QAR $$-$$$",

        "servesCuisine": [
            "Mediterranean",
            "Middle Eastern",
            "Arabic"
        ],

        "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Doha",
            "addressCountry": "QA"
        },

        "areaServed": {
            "@@type": "City",
            "name": "Doha"
        },

        "acceptsReservations": true,

        "openingHoursSpecification": [
            {
                "@@type": "OpeningHoursSpecification",

                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                    "Sunday"
                ],

                "opens": "10:00",

                "closes": "02:00"
            }
        ]
    }
    </script>


    <!-- ============================================================
         HERO DYNAMIC JAVASCRIPT
         ============================================================ -->

    <script
        src="{{ asset('assets/frontend/js/hero-section.js') }}"
    ></script>


    <!-- ============================================================
         MAIN JAVASCRIPT
         ============================================================ -->

    <script
        src="{{ asset('assets/frontend/js/script.js') }}"
    ></script>


</body>

</html>