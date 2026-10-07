@php

    /*
    |--------------------------------------------------------------------------
    | HOMEPAGE SEO SETTINGS
    |--------------------------------------------------------------------------
    */

    $seo =
        $homepageSeo
        ?? null;


    /*
    |--------------------------------------------------------------------------
    | CORE SEO
    |--------------------------------------------------------------------------
    */

    $siteName =
        $seo?->site_name
        ?: 'Zaitoona Al Andalus';


    $seoTitle =
        $seo?->seo_title
        ?: 'Zaitoona Al Andalus | Restaurant, Shisha & Coffee Lounge in Doha';


    $metaDescription =
        $seo?->meta_description
        ?: 'Zaitoona Al Andalus is a premium restaurant, shisha and coffee lounge in Doha, Qatar, offering Mediterranean dining, refined shisha, Arabic coffee and relaxed hospitality.';


    $author =
        $seo?->author
        ?: $siteName;


    $robots =
        $seo?->robots
        ?: 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';


    $canonicalUrl =
        filled(
            $seo?->canonical_url
        )
            ? $seo->canonical_url
            : url('/');


    $themeColor =
        $seo?->theme_color
        ?: '#ffffff';


    /*
    |--------------------------------------------------------------------------
    | MEDIA URL HELPER
    |--------------------------------------------------------------------------
    */

    $seoMediaUrl =
        function (
            ?string $path,
            string $fallback
        ): string {

            if (
                blank(
                    $path
                )
            ) {

                return $fallback;

            }


            if (
                str_starts_with(
                    $path,
                    'http://'
                )
                ||
                str_starts_with(
                    $path,
                    'https://'
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
    | FAVICONS
    |--------------------------------------------------------------------------
    */

    $defaultLogo =
        asset(
            'assets/frontend/img/image1.png'
        );


    $favicon =
        $seoMediaUrl(
            $seo?->favicon,
            $defaultLogo
        );


    $appleTouchIcon =
        $seoMediaUrl(
            $seo?->apple_touch_icon,
            $favicon
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
        $seoMediaUrl(
            $seo?->og_image,
            $defaultLogo
        );


    $ogImageAlt =
        $seo?->og_image_alt
        ?: 'Zaitoona Al Andalus Restaurant, Shisha and Coffee Lounge in Doha';


    $ogLocale =
        $seo?->og_locale
        ?: 'en_US';


    /*
    |--------------------------------------------------------------------------
    | TWITTER / X
    |--------------------------------------------------------------------------
    */

    $twitterCard =
        $seo?->twitter_card
        ?: 'summary_large_image';


    $twitterTitle =
        $seo?->twitter_title
        ?: $seoTitle;


    $twitterDescription =
        $seo?->twitter_description
        ?: $metaDescription;


    $twitterImage =
        $seoMediaUrl(
            $seo?->twitter_image,
            $ogImage
        );


    $twitterImageAlt =
        $seo?->twitter_image_alt
        ?: $ogImageAlt;


    /*
    |--------------------------------------------------------------------------
    | RESTAURANT SCHEMA
    |--------------------------------------------------------------------------
    */

    $allowedSchemaTypes = [
        'Restaurant',
        'FoodEstablishment',
        'LocalBusiness',
    ];


    $schemaType =
        in_array(
            $seo?->schema_type,
            $allowedSchemaTypes,
            true
        )
            ? $seo->schema_type
            : 'Restaurant';


    $schemaName =
        $seo?->schema_name
        ?: $siteName;


    $schemaDescription =
        $seo?->schema_description
        ?: $metaDescription;


    $schemaImage =
        $seoMediaUrl(
            $seo?->schema_image,
            $ogImage
        );


    $schemaLogo =
        $seoMediaUrl(
            $seo?->schema_logo,
            $defaultLogo
        );


    $schemaTelephone =
        $seo?->schema_telephone
        ?: '+97433858316';


    $schemaEmail =
        $seo?->schema_email
        ?: 'hello@zaitoona.qa';


    $schemaPriceRange =
        $seo?->schema_price_range
        ?: 'QAR $$-$$$';


    $schemaCuisine =
        collect(
            $seo?->schema_serves_cuisine
            ?? [
                'Mediterranean',
                'Middle Eastern',
                'Arabic',
            ]
        )
            ->filter()
            ->values()
            ->all();


    /*
    |--------------------------------------------------------------------------
    | ADDRESS
    |--------------------------------------------------------------------------
    */

    $schemaAddress =
        array_filter(
            [
                '@type' =>
                    'PostalAddress',

                'streetAddress' =>
                    $seo?->schema_street_address
                    ?: 'Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840',

                'addressLocality' =>
                    $seo?->schema_locality
                    ?: 'Doha',

                'addressRegion' =>
                    $seo?->schema_region,

                'postalCode' =>
                    $seo?->schema_postal_code,

                'addressCountry' =>
                    $seo?->schema_country
                    ?: 'QA',
            ],
            fn ($value) =>
                $value !== null
                &&
                $value !== ''
        );


    /*
    |--------------------------------------------------------------------------
    | OPENING HOURS
    |--------------------------------------------------------------------------
    */

    $openingHoursSource =
        $seo?->schema_opening_hours
        ?? [
            [
                'days' => [
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday',
                    'Sunday',
                ],

                'opens' =>
                    '10:00',

                'closes' =>
                    '02:00',
            ],
        ];


    $openingHours =
        collect(
            $openingHoursSource
        )
            ->map(
                function ($item) {

                    $days =
                        collect(
                            $item['days']
                            ?? []
                        )
                            ->filter()
                            ->values()
                            ->all();


                    $opens =
                        filled(
                            $item['opens']
                            ?? null
                        )
                            ? substr(
                                (string) $item['opens'],
                                0,
                                5
                            )
                            : null;


                    $closes =
                        filled(
                            $item['closes']
                            ?? null
                        )
                            ? substr(
                                (string) $item['closes'],
                                0,
                                5
                            )
                            : null;


                    if (
                        empty($days)
                        ||
                        blank($opens)
                        ||
                        blank($closes)
                    ) {

                        return null;

                    }


                    return [

                        '@type' =>
                            'OpeningHoursSpecification',

                        'dayOfWeek' =>
                            $days,

                        'opens' =>
                            $opens,

                        'closes' =>
                            $closes,

                    ];

                }
            )
            ->filter()
            ->values()
            ->all();


    /*
    |--------------------------------------------------------------------------
    | SOCIAL PROFILE URLS
    |--------------------------------------------------------------------------
    */

    $sameAs =
        collect(
            $seo?->schema_same_as
            ?? []
        )
            ->filter()
            ->values()
            ->all();


    /*
    |--------------------------------------------------------------------------
    | FINAL JSON-LD DATA
    |--------------------------------------------------------------------------
    */

    $schema = [

        '@context' =>
            'https://schema.org',

        '@type' =>
            $schemaType,

        '@id' =>
            url('/')
            . '#restaurant',

        'name' =>
            $schemaName,

        'url' =>
            url('/'),

        'image' =>
            $schemaImage,

        'logo' =>
            $schemaLogo,

        'description' =>
            $schemaDescription,

        'telephone' =>
            $schemaTelephone,

        'email' =>
            $schemaEmail,

        'priceRange' =>
            $schemaPriceRange,

        'servesCuisine' =>
            $schemaCuisine,

        'address' =>
            $schemaAddress,

        'acceptsReservations' =>
            (bool) (
                $seo?->schema_accepts_reservations
                ?? true
            ),

        'openingHoursSpecification' =>
            $openingHours,

    ];


    /*
    |--------------------------------------------------------------------------
    | AREA SERVED
    |--------------------------------------------------------------------------
    */

    if (
        filled(
            $seo?->schema_area_served
        )
        ||
        ! $seo
    ) {

        $schema['areaServed'] = [

            '@type' =>
                'City',

            'name' =>
                $seo?->schema_area_served
                ?: 'Doha',

        ];

    }


    /*
    |--------------------------------------------------------------------------
    | MENU URL
    |--------------------------------------------------------------------------
    */

    if (
        filled(
            $seo?->schema_menu_url
        )
    ) {

        $schema['hasMenu'] =
            $seo->schema_menu_url;

    }


    /*
    |--------------------------------------------------------------------------
    | GEO COORDINATES
    |--------------------------------------------------------------------------
    */

    if (
        filled(
            $seo?->schema_latitude
        )
        &&
        filled(
            $seo?->schema_longitude
        )
    ) {

        $schema['geo'] = [

            '@type' =>
                'GeoCoordinates',

            'latitude' =>
                (float) $seo->schema_latitude,

            'longitude' =>
                (float) $seo->schema_longitude,

        ];

    }


    /*
    |--------------------------------------------------------------------------
    | SAME AS
    |--------------------------------------------------------------------------
    */

    if (
        ! empty(
            $sameAs
        )
    ) {

        $schema['sameAs'] =
            $sameAs;

    }


    /*
    |--------------------------------------------------------------------------
    | RESERVATION ACTION
    |--------------------------------------------------------------------------
    */

    if (
        filled(
            $seo?->schema_reservation_url
        )
    ) {

        $schema['potentialAction'] = [

            '@type' =>
                'ReserveAction',

            'target' => [

                '@type' =>
                    'EntryPoint',

                'urlTemplate' =>
                    $seo->schema_reservation_url,

            ],

        ];

    }

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


    <meta
        name="author"
        content="{{ $author }}"
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
        href="{{ $favicon }}"
    >


    <link
        rel="shortcut icon"
        href="{{ $favicon }}"
    >


    <link
        rel="apple-touch-icon"
        href="{{ $appleTouchIcon }}"
    >


    <meta
        name="apple-mobile-web-app-title"
        content="{{ $siteName }}"
    >


    <!-- ============================================================
         OPEN GRAPH
         ============================================================ -->

    <meta
        property="og:type"
        content="website"
    >


    <meta
        property="og:site_name"
        content="{{ $siteName }}"
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


    @if(
        str_starts_with(
            $ogImage,
            'https://'
        )
    )

        <meta
            property="og:image:secure_url"
            content="{{ $ogImage }}"
        >

    @endif


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