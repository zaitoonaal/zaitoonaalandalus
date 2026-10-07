    <meta
        name="twitter:description"
        content="{{ $twitterDescription }}"
    >


    <meta
        name="twitter:image"
        content="{{ $twitterImage }}"
    >


    <meta
        name="twitter:image:alt"
        content="{{ $twitterImageAlt }}"
    >


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
    >{!! json_encode(
        $schema,
        JSON_UNESCAPED_UNICODE
        | JSON_UNESCAPED_SLASHES
        | JSON_HEX_TAG
        | JSON_HEX_AMP
        | JSON_HEX_APOS
        | JSON_HEX_QUOT
    ) !!}</script>


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
