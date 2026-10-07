@php

    /*
    |--------------------------------------------------------------------------
    | MENU BANNER
    |--------------------------------------------------------------------------
    */

    $defaultBanner =
        'https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=1920&q=80';

    if ($menuSetting?->banner_image) {

        $menuBanner = asset(
            'storage/' . ltrim(
                $menuSetting->banner_image,
                '/'
            )
        );

    } else {

        $menuBanner = $defaultBanner;
    }


    /*
    |--------------------------------------------------------------------------
    | MENU DATA
    |--------------------------------------------------------------------------
    */

    $menuData = [

        'en' => [

            'eyebrow' =>
                $menuSetting?->eyebrow_en
                ?: 'Signature selection',

            'title' =>
                $menuSetting?->title_en
                ?: 'A menu for every part of the evening.',

            'intro' =>
                $menuSetting?->intro_en
                ?: 'Explore the complete Zaitoona Al Andalaus menu featuring appetizers, signature grills, biryanis, artisan pizzas, refreshing mojitos, fresh juices, hot beverages, and premium shisha.',

            'note' =>
                $menuSetting?->menu_note_en
                ?: 'Prices in QAR',

            'footer' =>
                $menuSetting?->menu_footer_en
                ?: 'Please tell our team about any allergies or dietary requirements. Menu availability can vary.',

            'reserveText' =>
                $menuSetting?->reserve_text_en
                ?: 'Reserve a table',

            'searchPlaceholder' =>
                $menuSetting?->search_placeholder_en
                ?: 'Search dish or drink...',

            'emptyMessage' =>
                $menuSetting?->empty_message_en
                ?: 'No matching items found.',


            'seoTitle' =>
                $menuSetting?->seo_title_en
                ?: 'Menu | Zaitoona Al Andalaus',

            'seoDescription' =>
                $menuSetting?->seo_description_en
                ?: 'Explore the menu at Zaitoona Al Andalaus in Doha, Qatar.',

            'ogTitle' =>
                $menuSetting?->og_title_en
                ?: (
                    $menuSetting?->seo_title_en
                    ?: 'Menu | Zaitoona Al Andalaus'
                ),

            'ogDescription' =>
                $menuSetting?->og_description_en
                ?: (
                    $menuSetting?->seo_description_en
                    ?: 'Explore the menu at Zaitoona Al Andalaus in Doha, Qatar.'
                ),

            'ogImageAlt' =>
                $menuSetting?->og_image_alt_en
                ?: 'Zaitoona Al Andalaus Menu',

            'twitterTitle' =>
                $menuSetting?->twitter_title_en
                ?: (
                    $menuSetting?->seo_title_en
                    ?: 'Menu | Zaitoona Al Andalaus'
                ),

            'twitterDescription' =>
                $menuSetting?->twitter_description_en
                ?: (
                    $menuSetting?->seo_description_en
                    ?: 'Explore the menu at Zaitoona Al Andalaus.'
                ),

            'twitterImageAlt' =>
                $menuSetting?->twitter_image_alt_en
                ?: 'Zaitoona Al Andalaus Menu',
        ],


        'ar' => [

            'eyebrow' =>
                $menuSetting?->eyebrow_ar
                ?: 'مختاراتنا',

            'title' =>
                $menuSetting?->title_ar
                ?: 'قائمة تناسب كل لحظة من الأمسية.',

            'intro' =>
                $menuSetting?->intro_ar
                ?: 'استكشف قائمة زيتونة الأندلس الكاملة.',

            'note' =>
                $menuSetting?->menu_note_ar
                ?: 'الأسعار بالريال القطري',

            'footer' =>
                $menuSetting?->menu_footer_ar
                ?: 'يرجى إبلاغ فريقنا بأي حساسية أو متطلبات غذائية.',

            'reserveText' =>
                $menuSetting?->reserve_text_ar
                ?: 'احجز طاولة',

            'searchPlaceholder' =>
                $menuSetting?->search_placeholder_ar
                ?: 'ابحث عن صنف أو مشروب...',

            'emptyMessage' =>
                $menuSetting?->empty_message_ar
                ?: 'لا توجد أصناف مطابقة لبحثك.',


            'seoTitle' =>
                $menuSetting?->seo_title_ar
                ?: 'القائمة | زيتونة الأندلس',

            'seoDescription' =>
                $menuSetting?->seo_description_ar
                ?: 'استكشف قائمة زيتونة الأندلس في الدوحة، قطر.',

            'ogTitle' =>
                $menuSetting?->og_title_ar
                ?: (
                    $menuSetting?->seo_title_ar
                    ?: 'القائمة | زيتونة الأندلس'
                ),

            'ogDescription' =>
                $menuSetting?->og_description_ar
                ?: (
                    $menuSetting?->seo_description_ar
                    ?: 'استكشف قائمة زيتونة الأندلس.'
                ),

            'ogImageAlt' =>
                $menuSetting?->og_image_alt_ar
                ?: 'قائمة زيتونة الأندلس',

            'twitterTitle' =>
                $menuSetting?->twitter_title_ar
                ?: (
                    $menuSetting?->seo_title_ar
                    ?: 'القائمة | زيتونة الأندلس'
                ),

            'twitterDescription' =>
                $menuSetting?->twitter_description_ar
                ?: (
                    $menuSetting?->seo_description_ar
                    ?: 'استكشف قائمة زيتونة الأندلس.'
                ),

            'twitterImageAlt' =>
                $menuSetting?->twitter_image_alt_ar
                ?: 'قائمة زيتونة الأندلس',
        ],


        'reserveUrl' =>
            $menuSetting?->reserve_url
            ?: '/reserveatable',

        'currency' =>
            $menuSetting?->currency_label
            ?: 'QR',

        'categories' =>
            $menuSetting?->menu_categories
            ?: [],
    ];


    /*
    |--------------------------------------------------------------------------
    | SEO
    |--------------------------------------------------------------------------
    */

    $canonicalUrl =
        $menuSetting?->canonical_url
        ?: url()->current();


    $robots =
        (($menuSetting?->robots_index ?? true)
            ? 'index'
            : 'noindex')
        . ', '
        . (($menuSetting?->robots_follow ?? true)
            ? 'follow'
            : 'nofollow');


    $ogImage = $menuSetting?->og_image
        ? asset(
            'storage/' .
            ltrim($menuSetting->og_image, '/')
        )
        : $menuBanner;


    $twitterImage = $menuSetting?->twitter_image
        ? asset(
            'storage/' .
            ltrim($menuSetting->twitter_image, '/')
        )
        : $ogImage;

@endphp

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="theme-color"
        content="#ffffff"
    >


    <!-- SEO -->

    <title id="menuSeoTitle">
        {{ $menuData['en']['seoTitle'] }}
    </title>

    <meta
        id="menuSeoDescription"
        name="description"
        content="{{ $menuData['en']['seoDescription'] }}"
    >

    <meta
        name="robots"
        content="{{ $robots }}"
    >

    <link
        rel="canonical"
        href="{{ $canonicalUrl }}"
    >


    <!-- Open Graph -->

    <meta property="og:type" content="website">

    <meta
        id="menuOgTitle"
        property="og:title"
        content="{{ $menuData['en']['ogTitle'] }}"
    >

    <meta
        id="menuOgDescription"
        property="og:description"
        content="{{ $menuData['en']['ogDescription'] }}"
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
        id="menuOgImageAlt"
        property="og:image:alt"
        content="{{ $menuData['en']['ogImageAlt'] }}"
    >


    <!-- Twitter / X -->

    <meta
        name="twitter:card"
        content="summary_large_image"
    >

    <meta
        id="menuTwitterTitle"
        name="twitter:title"
        content="{{ $menuData['en']['twitterTitle'] }}"
    >

    <meta
        id="menuTwitterDescription"
        name="twitter:description"
        content="{{ $menuData['en']['twitterDescription'] }}"
    >

    <meta
        name="twitter:image"
        content="{{ $twitterImage }}"
    >

    <meta
        id="menuTwitterImageAlt"
        name="twitter:image:alt"
        content="{{ $menuData['en']['twitterImageAlt'] }}"
    >


    <!-- Fonts -->

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


    <!-- Menu CSS -->

    <link
        rel="stylesheet"
        href="{{ asset('assets/frontend/css/menu.css') }}"
    >

</head>


<body>


    @include('Home.header')


    <main style="padding-top: 130px; min-height: 80vh;">


        <section
            class="section"
            id="menu"
        >


            <!-- Menu Hero Banner -->

            <div
                class="menu-hero-banner"
                style="--menu-banner-image: url('{{ $menuBanner }}');"
            >

                <div class="container">

                    <div class="menu-head">

                        <div class="reveal">

                            <div
                                class="eyebrow"
                                id="dynamicMenuEyebrow"
                            >
                                {{ $menuData['en']['eyebrow'] }}
                            </div>

                            <h1
                                class="section-title"
                                id="dynamicMenuTitle"
                            >
                                {{ $menuData['en']['title'] }}
                            </h1>

                        </div>


                        <p
                            class="lede reveal"
                            id="dynamicMenuIntro"
                        >
                            {{ $menuData['en']['intro'] }}
                        </p>

                    </div>

                </div>

            </div>


            <div class="container">

                <div class="menu-shell reveal">

                    <div
                        class="menu-tabs"
                        id="menuTabs"
                        role="tablist"
                    ></div>


                    <div class="menu-panel">

                        <div>

                            <div class="menu-panel-top">

                                <div class="menu-panel-title-wrap">

                                    <span
                                        class="menu-note"
                                        id="dynamicMenuNote"
                                    >
                                        {{ $menuData['en']['note'] }}
                                    </span>

                                    <h2
                                        class="menu-panel-title"
                                        id="menuPanelTitle"
                                    ></h2>

                                </div>


                                <div class="menu-controls">

                                    <div class="menu-search-wrap">

                                        <input
                                            type="search"
                                            id="menuSearch"
                                            class="menu-search"
                                            placeholder="{{ $menuData['en']['searchPlaceholder'] }}"
                                            aria-label="Search menu items"
                                        >

                                        <svg
                                            class="menu-search-icon"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <circle
                                                cx="11"
                                                cy="11"
                                                r="8"
                                            ></circle>

                                            <line
                                                x1="21"
                                                y1="21"
                                                x2="16.65"
                                                y2="16.65"
                                            ></line>
                                        </svg>

                                    </div>

                                </div>

                            </div>


                            <div
                                class="menu-items fade-in"
                                id="menuItems"
                            ></div>

                        </div>


                        <div class="menu-footer">

                            <p id="dynamicMenuFooter">
                                {{ $menuData['en']['footer'] }}
                            </p>

                            <a
                                id="dynamicMenuReserveButton"
                                href="{{ $menuData['reserveUrl'] }}"
                                class="btn"
                            >
                                {{ $menuData['en']['reserveText'] }}
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        @include('Home.instagramgrid')


    </main>


    @include('Home.footer')


    <!-- Dynamic Menu Data -->

    <script
        type="application/json"
        id="dynamicMenuData"
    >
    {!! json_encode(
        $menuData,
        JSON_UNESCAPED_UNICODE
        | JSON_UNESCAPED_SLASHES
        | JSON_HEX_TAG
        | JSON_HEX_AMP
        | JSON_HEX_APOS
        | JSON_HEX_QUOT
    ) !!}
    </script>


    @if($menuSetting?->schema_enabled ?? true)

        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "WebPage",
            "name": @json($menuData['en']['seoTitle']),
            "description": @json($menuData['en']['seoDescription']),
            "url": @json($canonicalUrl)
        }
        </script>

    @endif


    <script
        src="{{ asset('assets/frontend/js/menu.js') }}"
    ></script>


</body>

</html>