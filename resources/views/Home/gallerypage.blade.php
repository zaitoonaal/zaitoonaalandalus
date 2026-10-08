@php

    /*
    |--------------------------------------------------------------------------
    | Image URL Helper
    |--------------------------------------------------------------------------
    */

    $galleryImageUrl =
        function (
            ?string $path,
            ?string $fallback = null
        ) {

            if (
                blank(
                    $path
                )
            ) {

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
                'storage/'
                . ltrim(
                    $path,
                    '/'
                )
            );

        };


    /*
    |--------------------------------------------------------------------------
    | Hero Image
    |--------------------------------------------------------------------------
    */

    $defaultHeroImage =
        'https://images.unsplash.com/photo-1544148103-0773bf10d330?auto=format&fit=crop&w=1800&q=80';


    $heroImage =
        $galleryImageUrl(
            $gallery?->hero_image,
            $defaultHeroImage
        );


    /*
    |--------------------------------------------------------------------------
    | Default Gallery
    |--------------------------------------------------------------------------
    |
    | Only used when there are no database gallery blocks.
    |
    */

    $defaultGalleryBlocks = [

        [
            'type' =>
                'tall',

            'delay' =>
                '0',

            'image' =>
                'https://images.unsplash.com/photo-1544148103-0773bf10d330?auto=format&fit=crop&w=800&q=80',

            'alt_en' =>
                'Plating a signature dish',

            'alt_ar' =>
                'تقديم طبق مميز',
        ],


        [
            'type' =>
                'normal',

            'delay' =>
                '0.1',

            'image' =>
                'https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=800&q=80',

            'alt_en' =>
                'Restaurant Interior',

            'alt_ar' =>
                'التصميم الداخلي للمطعم',
        ],


        [
            'type' =>
                'large',

            'delay' =>
                '0.2',

            'image' =>
                'https://images.unsplash.com/photo-1551024601-bec78aea704b?auto=format&fit=crop&w=1200&q=80',

            'alt_en' =>
                'Dessert presentation',

            'alt_ar' =>
                'تقديم الحلوى',
        ],

    ];


    /*
    |--------------------------------------------------------------------------
    | Stored Gallery
    |--------------------------------------------------------------------------
    */

    $storedGalleryBlocks =
        $gallery?->gallery_blocks
        ?? [];


    $galleryBlocks =
        is_array(
            $storedGalleryBlocks
        )
        &&
        count(
            $storedGalleryBlocks
        )
            ? $storedGalleryBlocks
            : $defaultGalleryBlocks;


    /*
    |--------------------------------------------------------------------------
    | Page Content
    |--------------------------------------------------------------------------
    */

    $galleryData = [

        'en' => [

            'heroTitle' =>
                $gallery?->hero_title_en
                ?: 'Our Gallery',

            'heroAlt' =>
                $gallery?->hero_alt_en
                ?: 'Zaitoona Culinary Presentation',

            'introHeading' =>
                $gallery?->intro_heading_en
                ?: 'Dine in Style',

            'introText' =>
                $gallery?->intro_text_en
                ?: 'Step inside our world of flavours. Browse through our curated gallery showcasing the ambiance, signature dishes, and unforgettable moments that make dining with us a memorable experience. From gourmet presentations to cozy interiors, each photo tells the story of our passion for food and hospitality.',

            'viewLabel' =>
                $gallery?->view_label_en
                ?: 'View',

            'seoTitle' =>
                $gallery?->seo_title_en
                ?: 'Gallery | Zaitoona Al Andalus',

            'seoDescription' =>
                $gallery?->seo_description_en
                ?: 'View the gallery of Zaitoona Al Andalus — a premium restaurant, shisha and coffee lounge in Doha, Qatar.',

            'ogTitle' =>
                $gallery?->og_title_en
                ?: (
                    $gallery?->seo_title_en
                    ?: 'Gallery | Zaitoona Al Andalus'
                ),

            'ogDescription' =>
                $gallery?->og_description_en
                ?: (
                    $gallery?->seo_description_en
                    ?: 'View the gallery of Zaitoona Al Andalus — a premium restaurant, shisha and coffee lounge in Doha, Qatar.'
                ),

            'ogImageAlt' =>
                $gallery?->og_image_alt_en
                ?: 'Zaitoona Al Andalus Gallery',

        ],


        'ar' => [

            'heroTitle' =>
                $gallery?->hero_title_ar
                ?: 'معرض الصور',

            'heroAlt' =>
                $gallery?->hero_alt_ar
                ?: 'معرض زيتونة الأندلس',

            'introHeading' =>
                $gallery?->intro_heading_ar
                ?: 'أناقة الطهي',

            'introText' =>
                $gallery?->intro_text_ar
                ?: 'ادخل إلى عالم النكهات الخاص بنا. تصفح معرضنا المنسق الذي يعرض الأجواء والأطباق المميزة واللحظات التي لا تُنسى والتي تجعل من تناول الطعام معنا تجربة استثنائية. من التقديمات الفاخرة إلى التصميم الداخلي المريح، تحكي كل صورة قصة شغفنا بالطعام والضيافة.',

            'viewLabel' =>
                $gallery?->view_label_ar
                ?: 'عرض',

            'seoTitle' =>
                $gallery?->seo_title_ar
                ?: 'معرض الصور | زيتونة الأندلس',

            'seoDescription' =>
                $gallery?->seo_description_ar
                ?: 'اكتشف معرض صور زيتونة الأندلس، مطعم وشيشة وقهوة ولاونج في الدوحة، قطر.',

            'ogTitle' =>
                $gallery?->og_title_ar
                ?: (
                    $gallery?->seo_title_ar
                    ?: 'معرض الصور | زيتونة الأندلس'
                ),

            'ogDescription' =>
                $gallery?->og_description_ar
                ?: (
                    $gallery?->seo_description_ar
                    ?: 'اكتشف معرض صور زيتونة الأندلس في الدوحة، قطر.'
                ),

            'ogImageAlt' =>
                $gallery?->og_image_alt_ar
                ?: 'معرض زيتونة الأندلس',

        ],

    ];


    /*
    |--------------------------------------------------------------------------
    | SEO
    |--------------------------------------------------------------------------
    */

    $canonicalUrl =
        $gallery?->canonical_url
        ?: url()->current();


    $robotsContent =
        (
            ($gallery?->robots_index ?? true)
                ? 'index'
                : 'noindex'
        )
        . ', '
        . (
            ($gallery?->robots_follow ?? true)
                ? 'follow'
                : 'nofollow'
        );


    $ogImage =
        $galleryImageUrl(
            $gallery?->og_image,
            $heroImage
        );

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
        content="#ffffff"
    >


    <!-- ============================================================
         SEO
         ============================================================ -->

    <title id="gallerySeoTitle">
        {{ $galleryData['en']['seoTitle'] }}
    </title>


    <meta
        id="gallerySeoDescription"
        name="description"
        content="{{ $galleryData['en']['seoDescription'] }}"
    >


    <meta
        id="galleryRobots"
        name="robots"
        content="{{ $robotsContent }}"
    >


    <link
        rel="canonical"
        href="{{ $canonicalUrl }}"
    >


    <!-- ============================================================
         Open Graph
         ============================================================ -->

    <meta
        property="og:type"
        content="website"
    >


    <meta
        id="galleryOgTitle"
        property="og:title"
        content="{{ $galleryData['en']['ogTitle'] }}"
    >


    <meta
        id="galleryOgDescription"
        property="og:description"
        content="{{ $galleryData['en']['ogDescription'] }}"
    >


    <meta
        property="og:url"
        content="{{ $canonicalUrl }}"
    >


    <meta
        id="galleryOgImage"
        property="og:image"
        content="{{ $ogImage }}"
    >


    <meta
        id="galleryOgImageAlt"
        property="og:image:alt"
        content="{{ $galleryData['en']['ogImageAlt'] }}"
    >


    <!-- ============================================================
         Twitter / X
         ============================================================ -->

    <meta
        name="twitter:card"
        content="summary_large_image"
    >


    <meta
        id="galleryTwitterTitle"
        name="twitter:title"
        content="{{ $galleryData['en']['ogTitle'] }}"
    >


    <meta
        id="galleryTwitterDescription"
        name="twitter:description"
        content="{{ $galleryData['en']['ogDescription'] }}"
    >


    <meta
        name="twitter:image"
        content="{{ $ogImage }}"
    >


    <!-- ============================================================
         Fonts
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
         Existing Gallery CSS
         ============================================================ -->

    <link
        rel="stylesheet"
        href="{{ asset('assets/frontend/css/gallery.css') }}"
    >

</head>


<body>


    @include('Home.header')


    <main>


        <!-- ========================================================
             Gallery Hero
             ======================================================== -->

        <section class="gallery-hero">


            <img
                id="galleryHeroImage"

                src="{{ $heroImage }}"

                alt="{{ $galleryData['en']['heroAlt'] }}"

                data-alt-en="{{ $galleryData['en']['heroAlt'] }}"

                data-alt-ar="{{ $galleryData['ar']['heroAlt'] }}"
            >


            <div class="gallery-hero-content">


                <h1
                    id="galleryHeroTitle"
                    class="gallery-hero-title"
                >
                    {{ $galleryData['en']['heroTitle'] }}
                </h1>


            </div>


        </section>


        <!-- ========================================================
             Intro
             ======================================================== -->

        <div class="gallery-intro reveal">


            <h2 id="galleryIntroHeading">
                {{ $galleryData['en']['introHeading'] }}
            </h2>


            <p id="galleryIntroText">
                {{ $galleryData['en']['introText'] }}
            </p>


        </div>


        <!-- ========================================================
             Masonry Gallery
             ======================================================== -->

        <div class="masonry-wrap">


            <div class="masonry-grid">


                @foreach(
                    $galleryBlocks
                    as $block
                )


                    @php

                        /*
                        |--------------------------------------------------------------------------
                        | Block Type
                        |--------------------------------------------------------------------------
                        */

                        $type =
                            $block['type']
                            ?? 'normal';


                        $allowedTypes = [

                            'normal',
                            'tall',
                            'wide',
                            'large',
                            'stack',

                        ];


                        if (
                            ! in_array(
                                $type,
                                $allowedTypes,
                                true
                            )
                        ) {

                            $type =
                                'normal';

                        }


                        /*
                        |--------------------------------------------------------------------------
                        | Delay
                        |--------------------------------------------------------------------------
                        */

                        $delay =
                            (string) (
                                $block['delay']
                                ?? '0'
                            );


                        if (
                            ! in_array(
                                $delay,
                                [
                                    '0',
                                    '0.1',
                                    '0.2',
                                ],
                                true
                            )
                        ) {

                            $delay =
                                '0';

                        }


                        /*
                        |--------------------------------------------------------------------------
                        | Main Image Layout
                        |--------------------------------------------------------------------------
                        |
                        | Stack is treated as normal for Main Image because the
                        | additional Stack Image 1 & 2 are rendered separately.
                        |
                        */

                        $layoutClass =
                            match (
                                $type
                            ) {

                                'tall' =>
                                    'item-tall',

                                'wide' =>
                                    'item-wide',

                                'large' =>
                                    'item-large',

                                default =>
                                    '',

                            };

                    @endphp


                    {{-- =====================================================
                         MAIN IMAGE

                         IMPORTANT:
                         Main image is now rendered for EVERY block whenever
                         one exists.
                         ===================================================== --}}

                    @if(
                        ! empty(
                            $block['image']
                        )
                    )


                        @php

                            $mainImage =
                                $galleryImageUrl(
                                    $block['image']
                                );

                        @endphp


                        <div
                            class="masonry-item {{ $layoutClass }} reveal"

                            aria-label="{{ $galleryData['en']['viewLabel'] }}"

                            data-view-label="{{ $galleryData['en']['viewLabel'] }}"

                            @if(
                                $delay !== '0'
                            )
                                style="transition-delay: {{ $delay }}s;"
                            @endif
                        >


                            <img
                                src="{{ $mainImage }}"

                                alt="{{ $block['alt_en'] ?? 'Gallery image' }}"

                                data-alt-en="{{ $block['alt_en'] ?? 'Gallery image' }}"

                                data-alt-ar="{{ $block['alt_ar'] ?? $block['alt_en'] ?? 'Gallery image' }}"

                                loading="lazy"
                            >


                        </div>


                    @endif


                    {{-- =====================================================
                         STACK IMAGES

                         IMPORTANT FIX:
                         These are now rendered whenever they exist,
                         regardless of whether Block Layout is Normal,
                         Tall, Wide, Large or Stack.
                         ===================================================== --}}

                    @if(
                        ! empty(
                            $block['stack_image_1']
                        )
                        ||
                        ! empty(
                            $block['stack_image_2']
                        )
                    )


                        <div
                            class="masonry-stack reveal"

                            style="
                                @if(
                                    $delay !== '0'
                                )
                                    transition-delay: {{ $delay }}s;
                                @endif

                                grid-row: span 2;
                            "
                        >


                            {{-- =============================================
                                 Stack Image 1
                                 ============================================= --}}

                            @if(
                                ! empty(
                                    $block['stack_image_1']
                                )
                            )


                                @php

                                    $stackImage1 =
                                        $galleryImageUrl(
                                            $block['stack_image_1']
                                        );

                                @endphp


                                <div
                                    class="masonry-item"

                                    aria-label="{{ $galleryData['en']['viewLabel'] }}"

                                    data-view-label="{{ $galleryData['en']['viewLabel'] }}"
                                >


                                    <img
                                        src="{{ $stackImage1 }}"

                                        alt="{{ $block['stack_alt_1_en'] ?? 'Gallery image' }}"

                                        data-alt-en="{{ $block['stack_alt_1_en'] ?? 'Gallery image' }}"

                                        data-alt-ar="{{ $block['stack_alt_1_ar'] ?? $block['stack_alt_1_en'] ?? 'Gallery image' }}"

                                        loading="lazy"
                                    >


                                </div>


                            @endif


                            {{-- =============================================
                                 Stack Image 2
                                 ============================================= --}}

                            @if(
                                ! empty(
                                    $block['stack_image_2']
                                )
                            )


                                @php

                                    $stackImage2 =
                                        $galleryImageUrl(
                                            $block['stack_image_2']
                                        );

                                @endphp


                                <div
                                    class="masonry-item"

                                    aria-label="{{ $galleryData['en']['viewLabel'] }}"

                                    data-view-label="{{ $galleryData['en']['viewLabel'] }}"
                                >


                                    <img
                                        src="{{ $stackImage2 }}"

                                        alt="{{ $block['stack_alt_2_en'] ?? 'Gallery image' }}"

                                        data-alt-en="{{ $block['stack_alt_2_en'] ?? 'Gallery image' }}"

                                        data-alt-ar="{{ $block['stack_alt_2_ar'] ?? $block['stack_alt_2_en'] ?? 'Gallery image' }}"

                                        loading="lazy"
                                    >


                                </div>


                            @endif


                        </div>


                    @endif


                @endforeach


            </div>


        </div>


        <!-- ========================================================
             Lightbox
             ======================================================== -->

        <div
            class="lightbox"
            id="lightbox"
            aria-hidden="true"
        >


            <button
                type="button"
                class="lightbox-close"
                id="lightboxClose"
                aria-label="Close image"
            >
                ×
            </button>


            <img
                id="lightboxImage"
                src=""
                alt=""
            >


        </div>


        <!-- ========================================================
             Instagram
             ======================================================== -->

        @include('Home.instagramgrid')


    </main>


    @include('Home.footer')


    <!-- ============================================================
         Dynamic Gallery Language / SEO Data
         ============================================================ -->

    <script
        type="application/json"
        id="galleryDynamicData"
    >
    {!! json_encode(
        $galleryData,
        JSON_UNESCAPED_UNICODE
        | JSON_UNESCAPED_SLASHES
        | JSON_HEX_TAG
        | JSON_HEX_AMP
        | JSON_HEX_APOS
        | JSON_HEX_QUOT
    ) !!}
    </script>


    <!-- ============================================================
         Existing Gallery JS
         ============================================================ -->

    <script
        src="{{ asset('assets/frontend/js/gallery.js') }}"
    ></script>


</body>

</html>