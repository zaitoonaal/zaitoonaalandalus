@php

    /*
    |--------------------------------------------------------------------------
    | HOMEPAGE SEO SETTINGS
    |--------------------------------------------------------------------------
    */

    $seo =
        $homeSeo ?? null;


    /*
    |--------------------------------------------------------------------------
    | STORAGE IMAGE URL HELPER
    |--------------------------------------------------------------------------
    */

    $seoImageUrl =
        static function (
            ?string $path,
            string $fallback
        ): string {

            if (
                blank($path)
            ) {
                return asset(
                    $fallback
                );
            }

            if (
                \Illuminate\Support\Str::startsWith(
                    $path,
                    [
                        'http://',
                        'https://',
                    ]
                )
            ) {
                return $path;
            }

            return asset(
                'storage/'
                . ltrim(
                    $path,
                    '/'
                )
            );
        };


    /*
    |--------------------------------------------------------------------------
    | MAIN SEO
    |--------------------------------------------------------------------------
    */

    $seoTitle =
        $seo?->seo_title
        ?: 'Zaitoona Al Andalus | Restaurant, Shisha & Coffee Lounge in Doha';


    $metaDescription =
        $seo?->meta_description
        ?: 'Zaitoona Al Andalus is a premium restaurant, shisha and coffee lounge in Doha, Qatar, offering Mediterranean dining, refined shisha, Arabic coffee and relaxed hospitality.';


    $metaKeywords =
        $seo?->meta_keywords
        ?: 'Zaitoona Al Andalus, restaurant in Doha, Doha restaurant, shisha lounge Doha, Qatar shisha lounge, coffee lounge Doha, Mediterranean restaurant Doha, Arabic coffee Qatar, Middle Eastern restaurant Doha';


    $canonicalUrl =
        $seo?->canonical_url
        ?: url('/');


    $robots =
        $seo?->robots
        ?: 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';


    $themeColor =
        $seo?->theme_color
        ?: '#ffffff';


    /*
    |--------------------------------------------------------------------------
    | ICONS
    |--------------------------------------------------------------------------
    */

    $favicon =
        $seoImageUrl(
            $seo?->favicon,
            'assets/frontend/img/image1.png'
        );


    $appleTouchIcon =
        $seoImageUrl(
            $seo?->apple_touch_icon
                ?: $seo?->favicon,
            'assets/frontend/img/image1.png'
        );


    /*
    |--------------------------------------------------------------------------
    | OPEN GRAPH
    |--------------------------------------------------------------------------
    */

    $ogTitle =
        $seo?->og_title
        ?: $seoTitle;


    $ogDescription =
        $seo?->og_description
        ?: $metaDescription;


    $ogImage =
        $seoImageUrl(
            $seo?->og_image,
            'assets/frontend/img/image1.png'
        );


    $ogImageAlt =
        $seo?->og_image_alt
        ?: 'Zaitoona Al Andalus Restaurant, Shisha and Coffee Lounge in Doha';


    $ogType =
        $seo?->og_type
        ?: 'website';


    $ogLocale =
        $seo?->og_locale
        ?: 'en_US';


    /*
    |--------------------------------------------------------------------------
    | TWITTER
    |--------------------------------------------------------------------------
    */

    $twitterCard =
        $seo?->twitter_card
        ?: 'summary_large_image';


    $twitterTitle =
        $seo?->twitter_title
        ?: $ogTitle;


    $twitterDescription =
        $seo?->twitter_description
        ?: $ogDescription;


    $twitterImage =
        $seoImageUrl(
            $seo?->twitter_image
                ?: $seo?->og_image,
            'assets/frontend/img/image1.png'
        );


    $twitterImageAlt =
        $seo?->twitter_image_alt
        ?: $ogImageAlt;


    /*
    |--------------------------------------------------------------------------
    | CUISINES
    |--------------------------------------------------------------------------
    */

    $cuisines =
        array_values(
            array_filter(
                array_map(
                    'trim',
                    explode(
                        ',',
                        $seo?->serves_cuisine
                            ?: 'Mediterranean, Middle Eastern, Arabic'
                    )
                )
            )
        );


    /*
    |--------------------------------------------------------------------------
    | SOCIAL PROFILE URLs
    |--------------------------------------------------------------------------
    */

    $sameAs =
        array_values(
            array_filter(
                array_map(
                    'trim',
                    preg_split(
                        '/\r\n|\r|\n/',
                        $seo?->same_as
                            ?: ''
                    )
                )
            )
        );


    /*
    |--------------------------------------------------------------------------
    | OPENING TIMES
    |--------------------------------------------------------------------------
    */

    $openingTime =
        filled(
            $seo?->opening_time
        )
            ? \Carbon\Carbon::parse(
                $seo->opening_time
            )->format('H:i')
            : '10:00';


    $closingTime =
        filled(
            $seo?->closing_time
        )
            ? \Carbon\Carbon::parse(
                $seo->closing_time
            )->format('H:i')
            : '02:00';


    /*
    |--------------------------------------------------------------------------
    | SCHEMA IMAGE
    |--------------------------------------------------------------------------
    */

    $schemaImage =
        $seoImageUrl(
            $seo?->schema_image
                ?: $seo?->og_image,
            'assets/frontend/img/image1.png'
        );


    /*
    |--------------------------------------------------------------------------
    | RESTAURANT SCHEMA
    |--------------------------------------------------------------------------
    */

    $schemaData = [

        '@context' =>
            'https://schema.org',

        '@type' =>
            'Restaurant',

        '@id' =>
            url('/')
            . '#restaurant',

        'name' =>
            $seo?->schema_name
            ?: 'Zaitoona Al Andalus',

        'url' =>
            url('/'),

        'image' =>
            $schemaImage,

        'logo' =>
            $favicon,

        'description' =>
            $seo?->schema_description
            ?: $metaDescription,

        'telephone' =>
            $seo?->telephone
            ?: '+97433858316',

        'priceRange' =>
            $seo?->price_range
            ?: 'QAR $$-$$$',

        'servesCuisine' =>
            $cuisines,

        'address' => [

            '@type' =>
                'PostalAddress',

            'streetAddress' =>
                $seo?->street_address
                ?: 'Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840',

            'addressLocality' =>
                $seo?->address_locality
                ?: 'Doha',

            'addressRegion' =>
                $seo?->address_region
                ?: 'Doha',

            'postalCode' =>
                $seo?->postal_code,

            'addressCountry' =>
                $seo?->address_country
                ?: 'QA',
        ],

        'areaServed' => [

            '@type' =>
                'City',

            'name' =>
                $seo?->address_locality
                ?: 'Doha',
        ],

        'acceptsReservations' =>
            $seo?->accepts_reservations
            ?? true,

        'openingHoursSpecification' => [

            [
                '@type' =>
                    'OpeningHoursSpecification',

                'dayOfWeek' => [
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday',
                    'Sunday',
                ],

                'opens' =>
                    $openingTime,

                'closes' =>
                    $closingTime,
            ],
        ],
    ];


    /*
    |--------------------------------------------------------------------------
    | OPTIONAL GEO
    |--------------------------------------------------------------------------
    */

    if (
        filled(
            $seo?->latitude
        )
        && filled(
            $seo?->longitude
        )
    ) {

        $schemaData['geo'] = [

            '@type' =>
                'GeoCoordinates',

            'latitude' =>
                (float) $seo->latitude,

            'longitude' =>
                (float) $seo->longitude,
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | MENU
    |--------------------------------------------------------------------------
    */

    $menuUrl =
        $seo?->menu_url
        ?: url('/menu');


    if (
        filled(
            $menuUrl
        )
    ) {

        $schemaData['hasMenu'] =
            $menuUrl;
    }


    /*
    |--------------------------------------------------------------------------
    | RESERVATION ACTION
    |--------------------------------------------------------------------------
    */

    $reservationUrl =
        $seo?->reservation_url
        ?: url('/reserveatable');


    if (
        filled(
            $reservationUrl
        )
    ) {

        $schemaData['potentialAction'] = [

            '@type' =>
                'ReserveAction',

            'target' => [

                '@type' =>
                    'EntryPoint',

                'urlTemplate' =>
                    $reservationUrl,
            ],
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | SOCIAL PROFILES
    |--------------------------------------------------------------------------
    */

    if (
        ! empty(
            $sameAs
        )
    ) {

        $schemaData['sameAs'] =
            $sameAs;
    }


    /*
    |--------------------------------------------------------------------------
    | ASSET CACHE VERSIONS
    |--------------------------------------------------------------------------
    */

    $cssVersion =
        file_exists(
            public_path(
                'assets/frontend/css/style.css'
            )
        )
            ? filemtime(
                public_path(
                    'assets/frontend/css/style.css'
                )
            )
            : 1;


    $jsVersion =
        file_exists(
            public_path(
                'assets/frontend/js/script.js'
            )
        )
            ? filemtime(
                public_path(
                    'assets/frontend/js/script.js'
                )
            )
            : 1;


    $seoVersion =
        $seo?->updated_at?->timestamp
        ?? 1;

@endphp


<!DOCTYPE html>

<html
    lang="en"
    dir="ltr"
>

<head>

    <meta charset="UTF-8">


    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >


    <meta
        name="theme-color"
        content="{{ $themeColor }}"
    >


    <meta
        name="format-detection"
        content="telephone=yes"
    >


    <!-- ============================================================
         PRIMARY SEO
         ============================================================ -->

    <title>{{ $seoTitle }}</title>


    <meta
        name="description"
        content="{{ $metaDescription }}"
    >


    @if(
        filled(
            $metaKeywords
        )
    )

        <meta
            name="keywords"
            content="{{ $metaKeywords }}"
        >

    @endif


    <meta
        name="author"
        content="Zaitoona Al Andalus"
    >


    <meta
        name="robots"
        content="{{ $robots }}"
    >


    <link
        rel="canonical"
        href="{{ $canonicalUrl }}"
    >


    <!-- ============================================================
         SEARCH ENGINE VERIFICATION
         ============================================================ -->

    @if(
        filled(
            $seo?->google_site_verification
        )
    )

        <meta
            name="google-site-verification"
            content="{{ $seo->google_site_verification }}"
        >

    @endif


    @if(
        filled(
            $seo?->bing_site_verification
        )
    )

        <meta
            name="msvalidate.01"
            content="{{ $seo->bing_site_verification }}"
        >

    @endif


    <!-- ============================================================
         FAVICON
         ============================================================ -->

    <link
        rel="icon"
        type="image/png"
        href="{{ $favicon }}?v={{ $seoVersion }}"
    >


    <link
        rel="shortcut icon"
        href="{{ $favicon }}?v={{ $seoVersion }}"
    >


    <link
        rel="apple-touch-icon"
        href="{{ $appleTouchIcon }}?v={{ $seoVersion }}"
    >


    <meta
        name="apple-mobile-web-app-title"
        content="Zaitoona Al Andalus"
    >


    <!-- ============================================================
         OPEN GRAPH
         ============================================================ -->

    <meta
        property="og:type"
        content="{{ $ogType }}"
    >


    <meta
        property="og:site_name"
        content="Zaitoona Al Andalus"
    >


    <meta
        property="og:title"
        content="{{ $ogTitle }}"
    >


    <meta
        property="og:description"
        content="{{ $ogDescription }}"
    >


    <meta
        property="og:url"
        content="{{ $canonicalUrl }}"
    >


    <meta
        property="og:image"
        content="{{ $ogImage }}"
    >


    <meta
        property="og:image:secure_url"
        content="{{ $ogImage }}"
    >


    <meta
        property="og:image:alt"
        content="{{ $ogImageAlt }}"
    >


    <meta
        property="og:locale"
        content="{{ $ogLocale }}"
    >


    <!-- ============================================================
         TWITTER / X
         ============================================================ -->

    <meta
        name="twitter:card"
        content="{{ $twitterCard }}"
    >


    <meta
        name="twitter:title"
        content="{{ $twitterTitle }}"
    >


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
         FONTS
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
         MAIN CSS
         ============================================================ -->

    <link
        rel="stylesheet"
        href="{{ asset('assets/frontend/css/style.css') }}?v={{ $cssVersion }}"
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
         SERVER-RENDERED RESTAURANT JSON-LD
         ============================================================ -->

    <script
        type="application/ld+json"
        id="schemaJson"
    >{!! json_encode(
        $schemaData,
        JSON_UNESCAPED_SLASHES
        | JSON_UNESCAPED_UNICODE
        | JSON_HEX_TAG
        | JSON_HEX_AMP
        | JSON_HEX_APOS
        | JSON_HEX_QUOT
    ) !!}</script>


    <!-- ============================================================
         HERO JS
         ============================================================ -->

    <script
        src="{{ asset('assets/frontend/js/hero-section.js') }}"
    ></script>


    <!-- ============================================================
         MAIN JS
         ============================================================ -->

    <script
        src="{{ asset('assets/frontend/js/script.js') }}?v={{ $jsVersion }}"
    ></script>


</body>

</html>