@php

    /*
    |--------------------------------------------------------------------------
    | IMAGE URL HELPER
    |--------------------------------------------------------------------------
    */

    $contactImageUrl = function (
        ?string $path,
        ?string $fallback = null
    ) {

        if (!$path) {
            return $fallback;
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
            'storage/' . ltrim(
                $path,
                '/'
            )
        );
    };


    /*
    |--------------------------------------------------------------------------
    | ORIGINAL HERO FALLBACK
    |--------------------------------------------------------------------------
    */

    $defaultHeroImage =
        'https://images.unsplash.com/photo-1544148103-0773bf10d330?auto=format&fit=crop&w=1800&q=80';

    $heroImage =
        $contactImageUrl(
            $contact?->hero_image,
            $defaultHeroImage
        );


    /*
    |--------------------------------------------------------------------------
    | CONTACT CONFIG
    |--------------------------------------------------------------------------
    */

    $contactConfig = [

        'email' =>
            $contact?->email
            ?: 'hello@zaitoona.qa',

        'phoneDisplay' =>
            $contact?->phone_display
            ?: '+974 3385 8316',

        'phoneDial' =>
            $contact?->phone_dial
            ?: '+97433858316',

        'whatsapp' =>
            $contact?->whatsapp
            ?: '97433858316',

        'mapEmbedUrl' =>
            $contact?->map_embed_url
            ?: 'https://www.google.com/maps?q=Old%20Airport,%20Near%20Food%20Place,%20Building%20No.%2026,%20Zone%2045,%20Street%20No%20840,%20Doha%20Qatar&output=embed',
    ];


    /*
    |--------------------------------------------------------------------------
    | ENGLISH / ARABIC CONTENT
    |--------------------------------------------------------------------------
    */

    $contactData = [

        'en' => [

            'heroTitle' =>
                $contact?->hero_title_en
                ?: 'Contact Us',

            'heroAlt' =>
                $contact?->hero_alt_en
                ?: 'Delicious Mezze Platter',

            'heading' =>
                $contact?->contact_heading_en
                ?: 'Have a question, a comment, or just craving that mezze?',

            'sub' =>
                $contact?->contact_sub_en
                ?: "We'd love to hear from you.",

            'description' =>
                $contact?->contact_description_en
                ?: "Whether you're planning a visit, hosting an event, or just want to say hello, our team is here to help. Drop us a message, give us a call, or swing by and speak to us in person.",

            'emailButton' =>
                $contact?->email_button_text_en
                ?: 'Email Us',

            'whatsappButton' =>
                $contact?->whatsapp_button_text_en
                ?: 'WhatsApp Us',

            'locationLabel' =>
                $contact?->location_label_en
                ?: 'Location',

            'phoneLabel' =>
                $contact?->phone_label_en
                ?: 'Phone / WhatsApp',

            'address' =>
                $contact?->address_en
                ?: 'Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840, Doha Qatar',

            'mapTitle' =>
                $contact?->map_title_en
                ?: 'Zaitoona Al Andalaus location map',


            /*
            |--------------------------------------------------------------------------
            | SEO
            |--------------------------------------------------------------------------
            */

            'seoTitle' =>
                $contact?->seo_title_en
                ?: 'Contact Us | Zaitoona Al Andalaus',

            'seoDescription' =>
                $contact?->seo_description_en
                ?: 'Contact Zaitoona Al Andalaus — a premium restaurant, shisha and coffee lounge in Doha, Qatar.',

            'ogTitle' =>
                $contact?->og_title_en
                ?: (
                    $contact?->seo_title_en
                    ?: 'Contact Us | Zaitoona Al Andalaus'
                ),

            'ogDescription' =>
                $contact?->og_description_en
                ?: (
                    $contact?->seo_description_en
                    ?: 'Contact Zaitoona Al Andalaus — a premium restaurant, shisha and coffee lounge in Doha, Qatar.'
                ),

            'ogImageAlt' =>
                $contact?->og_image_alt_en
                ?: 'Zaitoona Al Andalaus Contact Page',

            'twitterTitle' =>
                $contact?->twitter_title_en
                ?: (
                    $contact?->og_title_en
                    ?: 'Contact Us | Zaitoona Al Andalaus'
                ),

            'twitterDescription' =>
                $contact?->twitter_description_en
                ?: (
                    $contact?->og_description_en
                    ?: 'Contact Zaitoona Al Andalaus in Doha, Qatar.'
                ),

            'twitterImageAlt' =>
                $contact?->twitter_image_alt_en
                ?: 'Zaitoona Al Andalaus Contact Page',
        ],


        'ar' => [

            'heroTitle' =>
                $contact?->hero_title_ar
                ?: 'تواصل معنا',

            'heroAlt' =>
                $contact?->hero_alt_ar
                ?: 'أطباق زيتونة الأندلس',

            'heading' =>
                $contact?->contact_heading_ar
                ?: 'لديك سؤال، تعليق، أو فقط تشتهي أطباقنا؟',

            'sub' =>
                $contact?->contact_sub_ar
                ?: 'نود أن نسمع منك.',

            'description' =>
                $contact?->contact_description_ar
                ?: 'سواء كنت تخطط لزيارة، أو استضافة فعالية، أو ترغب فقط في إلقاء التحية، فريقنا هنا للمساعدة. أرسل لنا رسالة، أو اتصل بنا، أو تفضل بزيارتنا وتحدث معنا شخصياً.',

            'emailButton' =>
                $contact?->email_button_text_ar
                ?: 'راسلنا',

            'whatsappButton' =>
                $contact?->whatsapp_button_text_ar
                ?: 'واتساب',

            'locationLabel' =>
                $contact?->location_label_ar
                ?: 'الموقع',

            'phoneLabel' =>
                $contact?->phone_label_ar
                ?: 'الهاتف / واتساب',

            'address' =>
                $contact?->address_ar
                ?: 'المطار القديم، بالقرب من فود بليس، مبنى رقم 26، منطقة 45، شارع 840، الدوحة، قطر',

            'mapTitle' =>
                $contact?->map_title_ar
                ?: 'موقع زيتونة الأندلس على الخريطة',

            'seoTitle' =>
                $contact?->seo_title_ar
                ?: 'تواصل معنا | زيتونة الأندلس',

            'seoDescription' =>
                $contact?->seo_description_ar
                ?: 'تواصل مع زيتونة الأندلس، مطعم وشيشة وقهوة ولاونج في الدوحة، قطر.',

            'ogTitle' =>
                $contact?->og_title_ar
                ?: (
                    $contact?->seo_title_ar
                    ?: 'تواصل معنا | زيتونة الأندلس'
                ),

            'ogDescription' =>
                $contact?->og_description_ar
                ?: (
                    $contact?->seo_description_ar
                    ?: 'تواصل مع زيتونة الأندلس في الدوحة، قطر.'
                ),

            'ogImageAlt' =>
                $contact?->og_image_alt_ar
                ?: 'صفحة التواصل مع زيتونة الأندلس',

            'twitterTitle' =>
                $contact?->twitter_title_ar
                ?: (
                    $contact?->og_title_ar
                    ?: 'تواصل معنا | زيتونة الأندلس'
                ),

            'twitterDescription' =>
                $contact?->twitter_description_ar
                ?: (
                    $contact?->og_description_ar
                    ?: 'تواصل مع زيتونة الأندلس في الدوحة.'
                ),

            'twitterImageAlt' =>
                $contact?->twitter_image_alt_ar
                ?: 'صفحة التواصل مع زيتونة الأندلس',
        ],
    ];


    /*
    |--------------------------------------------------------------------------
    | SEO IMAGES
    |--------------------------------------------------------------------------
    */

    $ogImage =
        $contactImageUrl(
            $contact?->og_image,
            $heroImage
        );

    $twitterImage =
        $contactImageUrl(
            $contact?->twitter_image,
            $ogImage
        );


    /*
    |--------------------------------------------------------------------------
    | TECHNICAL SEO
    |--------------------------------------------------------------------------
    */

    $canonicalUrl =
        $contact?->canonical_url
        ?: url()->current();

    $robotsContent =
        (($contact?->robots_index ?? true)
            ? 'index'
            : 'noindex')
        . ', '
        . (($contact?->robots_follow ?? true)
            ? 'follow'
            : 'nofollow');


    /*
    |--------------------------------------------------------------------------
    | STRUCTURED DATA
    |--------------------------------------------------------------------------
    */

    $schema = [

        '@context' =>
            'https://schema.org',

        '@type' =>
            'ContactPage',

        'name' =>
            $contactData['en']['seoTitle'],

        'description' =>
            $contactData['en']['seoDescription'],

        'url' =>
            $canonicalUrl,

        'mainEntity' => [

            '@type' =>
                'Restaurant',

            'name' =>
                $contact?->schema_business_name
                ?: 'Zaitoona Al Andalaus',

            'telephone' =>
                $contactConfig['phoneDial'],

            'email' =>
                $contactConfig['email'],

            'priceRange' =>
                $contact?->schema_price_range
                ?: 'QAR $$-$$$',

            'address' => [

                '@type' =>
                    'PostalAddress',

                'streetAddress' =>
                    $contactData['en']['address'],

                'addressLocality' =>
                    'Doha',

                'addressCountry' =>
                    'QA',
            ],
        ],
    ];


    if (
        $contact?->schema_latitude
        && $contact?->schema_longitude
    ) {

        $schema['mainEntity']['geo'] = [

            '@type' =>
                'GeoCoordinates',

            'latitude' =>
                $contact->schema_latitude,

            'longitude' =>
                $contact->schema_longitude,
        ];
    }

@endphp


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


    <!-- =====================================================
         SEO
    ====================================================== -->

    <title id="contactSeoTitle">
        {{ $contactData['en']['seoTitle'] }}
    </title>

    <meta
        id="contactSeoDescription"
        name="description"
        content="{{ $contactData['en']['seoDescription'] }}"
    />

    <meta
        id="contactRobots"
        name="robots"
        content="{{ $robotsContent }}"
    />

    <link
        rel="canonical"
        href="{{ $canonicalUrl }}"
    />


    <!-- Open Graph -->

    <meta
        property="og:type"
        content="website"
    />

    <meta
        id="contactOgTitle"
        property="og:title"
        content="{{ $contactData['en']['ogTitle'] }}"
    />

    <meta
        id="contactOgDescription"
        property="og:description"
        content="{{ $contactData['en']['ogDescription'] }}"
    />

    <meta
        property="og:url"
        content="{{ $canonicalUrl }}"
    />

    <meta
        id="contactOgImage"
        property="og:image"
        content="{{ $ogImage }}"
    />

    <meta
        id="contactOgImageAlt"
        property="og:image:alt"
        content="{{ $contactData['en']['ogImageAlt'] }}"
    />


    <!-- Twitter / X -->

    <meta
        name="twitter:card"
        content="summary_large_image"
    />

    <meta
        id="contactTwitterTitle"
        name="twitter:title"
        content="{{ $contactData['en']['twitterTitle'] }}"
    />

    <meta
        id="contactTwitterDescription"
        name="twitter:description"
        content="{{ $contactData['en']['twitterDescription'] }}"
    />

    <meta
        id="contactTwitterImage"
        name="twitter:image"
        content="{{ $twitterImage }}"
    />

    <meta
        id="contactTwitterImageAlt"
        name="twitter:image:alt"
        content="{{ $contactData['en']['twitterImageAlt'] }}"
    />


    <!-- =====================================================
         FONTS
    ====================================================== -->

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


    <link
        rel="stylesheet"
        href="{{ asset('assets/frontend/css/contact.css') }}"
    >

</head>


<body>


    @include('Home.header')


    <main>


        <!-- =====================================================
             HERO
        ====================================================== -->

        <section class="contact-hero">

            <img
                id="dynamicContactHeroImage"
                src="{{ $heroImage }}"
                alt="{{ $contactData['en']['heroAlt'] }}"
                data-alt-en="{{ $contactData['en']['heroAlt'] }}"
                data-alt-ar="{{ $contactData['ar']['heroAlt'] }}"
                loading="lazy"
            >

            <div
                class="contact-hero-content reveal"
            >

                <h1
                    class="contact-hero-title"
                    id="dynamicContactHeroTitle"
                >
                    {{ $contactData['en']['heroTitle'] }}
                </h1>

            </div>

        </section>


        <!-- =====================================================
             CONTACT & MAP
        ====================================================== -->

        <section
            class="section container contact-split"
        >

            <div
                class="contact-map-wrapper reveal"
            >

                <iframe
                    id="dynamicContactMap"
                    title="{{ $contactData['en']['mapTitle'] }}"
                    src="{{ $contactConfig['mapEmbedUrl'] }}"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>

            </div>


            <div class="contact-copy reveal">

                <h2 id="dynamicContactHeading">
                    {{ $contactData['en']['heading'] }}
                </h2>

                <h3 id="dynamicContactSub">
                    {{ $contactData['en']['sub'] }}
                </h3>

                <p
                    class="lede"
                    style="font-size: 14px;"
                    id="dynamicContactDescription"
                >
                    {{ $contactData['en']['description'] }}
                </p>


                <div class="contact-actions">

                    <a
                        id="dynamicContactEmailButton"
                        href="mailto:{{ $contactConfig['email'] }}"
                        class="btn btn-primary js-email-link"
                    >
                        <span id="dynamicContactEmailText">
                            {{ $contactData['en']['emailButton'] }}
                        </span>
                    </a>


                    <a
                        id="dynamicContactWhatsappButton"
                        href="https://wa.me/{{ $contactConfig['whatsapp'] }}"
                        target="_blank"
                        rel="noopener"
                        class="btn js-wa-btn"
                    >
                        <span id="dynamicContactWhatsappText">
                            {{ $contactData['en']['whatsappButton'] }}
                        </span>
                    </a>

                </div>


                <div class="contact-info-grid">

                    <div class="contact-info-item">

                        <h4 id="dynamicContactLocationLabel">
                            {{ $contactData['en']['locationLabel'] }}
                        </h4>

                        <p
                            class="js-address"
                            id="dynamicContactAddress"
                        >
                            {{ $contactData['en']['address'] }}
                        </p>

                    </div>


                    <div class="contact-info-item">

                        <h4 id="dynamicContactPhoneLabel">
                            {{ $contactData['en']['phoneLabel'] }}
                        </h4>

                        <p class="js-phone">
                            {{ $contactConfig['phoneDisplay'] }}
                        </p>

                    </div>

                </div>

            </div>

        </section>


        @include('Home.instagramgrid')


    </main>


    @include('Home.footer')

    <!-- =====================================================
         DYNAMIC CONTACT DATA
    ====================================================== -->

    <script
        type="application/json"
        id="dynamicContactData"
    >
    {!! json_encode(
        [
            'config' => $contactConfig,

            'en' => $contactData['en'],

            'ar' => $contactData['ar'],
        ],
        JSON_UNESCAPED_UNICODE
        | JSON_UNESCAPED_SLASHES
        | JSON_HEX_TAG
        | JSON_HEX_AMP
        | JSON_HEX_APOS
        | JSON_HEX_QUOT
    ) !!}
    </script>


    @if($contact?->schema_enabled ?? true)

        <script
            type="application/ld+json"
            id="contactSchemaJson"
        >
        {!! json_encode(
            $schema,
            JSON_UNESCAPED_UNICODE
            | JSON_UNESCAPED_SLASHES
            | JSON_HEX_TAG
            | JSON_HEX_AMP
            | JSON_HEX_APOS
            | JSON_HEX_QUOT
        ) !!}
        </script>

    @endif


    <script
        src="{{ asset('assets/frontend/js/contact.js') }}"
    ></script>


</body>

</html>