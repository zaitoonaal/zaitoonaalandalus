@php

    /*
    |--------------------------------------------------------------------------
    | INITIAL LANGUAGE
    |--------------------------------------------------------------------------
    */

    $initialLocale =
        (
            ($locale ?? app()->getLocale())
            === 'ar'
        )
            ? 'ar'
            : 'en';


    $isArabic =
        $initialLocale
        === 'ar';


    /*
    |--------------------------------------------------------------------------
    | IMAGE URL HELPER
    |--------------------------------------------------------------------------
    */

    $getImageUrl =
        function ($image) {

            if (
                blank(
                    $image
                )
            ) {

                return null;

            }


            if (
                str_starts_with(
                    $image,
                    'http://'
                )
                ||
                str_starts_with(
                    $image,
                    'https://'
                )
            ) {

                return $image;

            }


            return asset(
                'storage/'
                . ltrim(
                    $image,
                    '/'
                )
            );

        };


    /*
    |--------------------------------------------------------------------------
    | FEATURED IMAGE
    |--------------------------------------------------------------------------
    */

    $featuredImage =
        $getImageUrl(
            $post->featured_image
        );


    if (
        blank(
            $featuredImage
        )
    ) {

        $featuredImage =
            'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1800&q=85';

    }


    /*
    |--------------------------------------------------------------------------
    | ENGLISH ARTICLE CONTENT
    |--------------------------------------------------------------------------
    */

    $titleEn =
        $post->title;


    $excerptEn =
        $post->excerpt
        ?: \Illuminate\Support\Str::limit(
            strip_tags(
                $post->content
            ),
            180
        );


    $contentEn =
        $post->content;


    $categoryEn =
        $post->category
        ?: 'Journal';


    $authorEn =
        $post->author_name
        ?: 'Zaitoona Al Andalus';


    $imageAltEn =
        $post->featured_image_alt
        ?: $titleEn;


    $tagsEn =
        collect(
            $post->tags
            ?? []
        )
            ->filter()
            ->values();


    $focusKeywordEn =
        $post->focus_keyword
        ?: '';


    /*
    |--------------------------------------------------------------------------
    | ARABIC ARTICLE CONTENT
    |--------------------------------------------------------------------------
    */

    $titleAr =
        $post->title_ar
        ?: $titleEn;


    $excerptAr =
        $post->excerpt_ar
        ?: (
            filled(
                $post->content_ar
            )
                ? \Illuminate\Support\Str::limit(
                    strip_tags(
                        $post->content_ar
                    ),
                    180
                )
                : $excerptEn
        );


    $contentAr =
        $post->content_ar
        ?: $contentEn;


    $categoryAr =
        $post->category_ar
        ?: $categoryEn;


    $authorAr =
        $post->author_name_ar
        ?: $authorEn;


    $imageAltAr =
        $post->featured_image_alt_ar
        ?: $imageAltEn;


    $tagsAr =
        collect(
            $post->tags_ar
            ?? []
        )
            ->filter()
            ->values();


    if (
        $tagsAr->isEmpty()
    ) {

        $tagsAr =
            $tagsEn;

    }


    $focusKeywordAr =
        $post->focus_keyword_ar
        ?: $focusKeywordEn;


    /*
    |--------------------------------------------------------------------------
    | DATES
    |--------------------------------------------------------------------------
    */

    $publishedDate =
        $post->published_at
        ?: $post->created_at;


    /*
    |--------------------------------------------------------------------------
    | ENGLISH / ARABIC URLS
    |--------------------------------------------------------------------------
    */

    $englishUrl =
        route(
            'blog.show',
            $post->slug
        );


    $arabicUrl =
        (
            \Illuminate\Support\Facades\Route::has(
                'blog.ar.show'
            )
            &&
            filled(
                $post->slug_ar
            )
        )
            ? route(
                'blog.ar.show',
                $post->slug_ar
            )
            : $englishUrl;


    $englishBlogUrl =
        route(
            'blog'
        );


    $arabicBlogUrl =
        \Illuminate\Support\Facades\Route::has(
            'blog.ar'
        )
            ? route(
                'blog.ar'
            )
            : $englishBlogUrl;


    /*
    |--------------------------------------------------------------------------
    | ENGLISH SEO
    |--------------------------------------------------------------------------
    */

    $seoTitleEn =
        $post->seo_title
        ?: $titleEn;


    $metaDescriptionEn =
        $post->meta_description
        ?: $excerptEn;


    $robotsEn =
        $post->robots
        ?: 'index, follow';


    $canonicalEn =
        $post->canonical_url
        ?: $englishUrl;


    /*
    |--------------------------------------------------------------------------
    | ARABIC SEO
    |--------------------------------------------------------------------------
    */

    $seoTitleAr =
        $post->seo_title_ar
        ?: $titleAr;


    $metaDescriptionAr =
        $post->meta_description_ar
        ?: $excerptAr;


    $robotsAr =
        $post->robots_ar
        ?: $robotsEn;


    $canonicalAr =
        $post->canonical_url_ar
        ?: $arabicUrl;


    /*
    |--------------------------------------------------------------------------
    | SOCIAL IMAGES
    |--------------------------------------------------------------------------
    */

    $ogImage =
        $getImageUrl(
            $post->og_image
        )
        ?: $featuredImage;


    $twitterImage =
        $getImageUrl(
            $post->twitter_image
        )
        ?: $ogImage;


    $schemaImage =
        $getImageUrl(
            $post->schema_image
        )
        ?: $featuredImage;


    /*
    |--------------------------------------------------------------------------
    | ENGLISH SOCIAL SEO
    |--------------------------------------------------------------------------
    */

    $ogTitleEn =
        $post->og_title
        ?: $seoTitleEn;


    $ogDescriptionEn =
        $post->og_description
        ?: $metaDescriptionEn;


    $twitterTitleEn =
        $post->twitter_title
        ?: $seoTitleEn;


    $twitterDescriptionEn =
        $post->twitter_description
        ?: $metaDescriptionEn;


    /*
    |--------------------------------------------------------------------------
    | ARABIC SOCIAL SEO
    |--------------------------------------------------------------------------
    */

    $ogTitleAr =
        $post->og_title_ar
        ?: $seoTitleAr;


    $ogDescriptionAr =
        $post->og_description_ar
        ?: $metaDescriptionAr;


    $twitterTitleAr =
        $post->twitter_title_ar
        ?: $seoTitleAr;


    $twitterDescriptionAr =
        $post->twitter_description_ar
        ?: $metaDescriptionAr;


    /*
    |--------------------------------------------------------------------------
    | SCHEMA TYPE
    |--------------------------------------------------------------------------
    */

    $allowedSchemaTypes = [

        'BlogPosting',
        'Article',
        'NewsArticle',

    ];


    $schemaType =
        in_array(
            $post->schema_type,
            $allowedSchemaTypes,
            true
        )
            ? $post->schema_type
            : 'BlogPosting';


    /*
    |--------------------------------------------------------------------------
    | ENGLISH SCHEMA
    |--------------------------------------------------------------------------
    */

    $schemaHeadlineEn =
        $post->schema_headline
        ?: $titleEn;


    $schemaDescriptionEn =
        $post->schema_description
        ?: $metaDescriptionEn;


    $schemaEn = [

        '@context' =>
            'https://schema.org',

        '@type' =>
            $schemaType,

        'inLanguage' =>
            'en',

        'headline' =>
            $schemaHeadlineEn,

        'description' =>
            $schemaDescriptionEn,

        'image' => [
            $schemaImage,
        ],

        'datePublished' =>
            $publishedDate
                ?->toIso8601String(),

        'dateModified' =>
            $post->updated_at
                ?->toIso8601String(),

        'author' => [

            '@type' =>
                'Organization',

            'name' =>
                $authorEn,

        ],

        'publisher' => [

            '@type' =>
                'Organization',

            'name' =>
                'Zaitoona Al Andalus',

            'url' =>
                url('/'),

        ],

        'mainEntityOfPage' => [

            '@type' =>
                'WebPage',

            '@id' =>
                $canonicalEn,

        ],

    ];


    /*
    |--------------------------------------------------------------------------
    | ARABIC SCHEMA
    |--------------------------------------------------------------------------
    */

    $schemaHeadlineAr =
        $post->schema_headline_ar
        ?: $titleAr;


    $schemaDescriptionAr =
        $post->schema_description_ar
        ?: $metaDescriptionAr;


    $schemaAr = [

        '@context' =>
            'https://schema.org',

        '@type' =>
            $schemaType,

        'inLanguage' =>
            'ar',

        'headline' =>
            $schemaHeadlineAr,

        'description' =>
            $schemaDescriptionAr,

        'image' => [
            $schemaImage,
        ],

        'datePublished' =>
            $publishedDate
                ?->toIso8601String(),

        'dateModified' =>
            $post->updated_at
                ?->toIso8601String(),

        'author' => [

            '@type' =>
                'Organization',

            'name' =>
                $authorAr,

        ],

        'publisher' => [

            '@type' =>
                'Organization',

            'name' =>
                'زيتونة الأندلس',

            'url' =>
                url('/'),

        ],

        'mainEntityOfPage' => [

            '@type' =>
                'WebPage',

            '@id' =>
                $canonicalAr,

        ],

    ];


    /*
    |--------------------------------------------------------------------------
    | INITIAL VALUES
    |--------------------------------------------------------------------------
    */

    $initialTitle =
        $isArabic
            ? $titleAr
            : $titleEn;


    $initialExcerpt =
        $isArabic
            ? $excerptAr
            : $excerptEn;


    $initialCategory =
        $isArabic
            ? $categoryAr
            : $categoryEn;


    $initialAuthor =
        $isArabic
            ? $authorAr
            : $authorEn;


    $initialImageAlt =
        $isArabic
            ? $imageAltAr
            : $imageAltEn;


    $initialSeoTitle =
        $isArabic
            ? $seoTitleAr
            : $seoTitleEn;


    $initialMetaDescription =
        $isArabic
            ? $metaDescriptionAr
            : $metaDescriptionEn;


    $initialRobots =
        $isArabic
            ? $robotsAr
            : $robotsEn;


    $initialCanonical =
        $isArabic
            ? $canonicalAr
            : $canonicalEn;


    $initialOgTitle =
        $isArabic
            ? $ogTitleAr
            : $ogTitleEn;


    $initialOgDescription =
        $isArabic
            ? $ogDescriptionAr
            : $ogDescriptionEn;


    $initialTwitterTitle =
        $isArabic
            ? $twitterTitleAr
            : $twitterTitleEn;


    $initialTwitterDescription =
        $isArabic
            ? $twitterDescriptionAr
            : $twitterDescriptionEn;


    $initialSchema =
        $isArabic
            ? $schemaAr
            : $schemaEn;

@endphp


<!DOCTYPE html>

<html
    lang="{{ $initialLocale }}"
    dir="{{ $isArabic ? 'rtl' : 'ltr' }}"
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
         PRIMARY SEO
         ============================================================ -->

    <title>{{ $initialSeoTitle }}</title>


    <meta
        name="description"
        content="{{ $initialMetaDescription }}"
    >


    <meta
        name="robots"
        content="{{ $initialRobots }}"
    >


    <link
        rel="canonical"
        href="{{ $initialCanonical }}"
    >


    <!-- ============================================================
         HREFLANG
         ============================================================ -->

    <link
        rel="alternate"
        hreflang="en"
        href="{{ $englishUrl }}"
    >


    @if(
        \Illuminate\Support\Facades\Route::has(
            'blog.ar.show'
        )
        &&
        filled(
            $post->slug_ar
        )
    )

        <link
            rel="alternate"
            hreflang="ar"
            href="{{ $arabicUrl }}"
        >

    @endif


    <link
        rel="alternate"
        hreflang="x-default"
        href="{{ $englishUrl }}"
    >


    <!-- ============================================================
         OPEN GRAPH
         ============================================================ -->

    <meta
        property="og:type"
        content="article"
    >


    <meta
        property="og:title"
        content="{{ $initialOgTitle }}"
    >


    <meta
        property="og:description"
        content="{{ $initialOgDescription }}"
    >


    <meta
        property="og:url"
        content="{{ $initialCanonical }}"
    >


    <meta
        property="og:image"
        content="{{ $ogImage }}"
    >


    <meta
        property="og:image:alt"
        content="{{ $initialImageAlt }}"
    >


    <meta
        property="og:site_name"
        content="Zaitoona Al Andalus"
    >


    <meta
        property="og:locale"
        content="{{ $isArabic ? 'ar_QA' : 'en_US' }}"
    >


    @if(
        $publishedDate
    )

        <meta
            property="article:published_time"
            content="{{ $publishedDate->toIso8601String() }}"
        >

    @endif


    @if(
        $post->updated_at
    )

        <meta
            property="article:modified_time"
            content="{{ $post->updated_at->toIso8601String() }}"
        >

    @endif


    <!-- ============================================================
         TWITTER / X
         ============================================================ -->

    <meta
        name="twitter:card"
        content="summary_large_image"
    >


    <meta
        name="twitter:title"
        content="{{ $initialTwitterTitle }}"
    >


    <meta
        name="twitter:description"
        content="{{ $initialTwitterDescription }}"
    >


    <meta
        name="twitter:image"
        content="{{ $twitterImage }}"
    >


    <meta
        name="twitter:image:alt"
        content="{{ $initialImageAlt }}"
    >


    <!-- ============================================================
         ARTICLE STRUCTURED DATA
         ============================================================ -->

    <script
        type="application/ld+json"
        id="articleSchema"
    >{!! json_encode(
        $initialSchema,
        JSON_UNESCAPED_UNICODE
        | JSON_UNESCAPED_SLASHES
        | JSON_HEX_TAG
        | JSON_HEX_AMP
        | JSON_HEX_APOS
        | JSON_HEX_QUOT
    ) !!}</script>


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
         BLOG POST CSS
         ============================================================ -->

    <link
        rel="stylesheet"
        href="{{ asset('assets/frontend/css/blogpage.css') }}"
    >

</head>


<body class="{{ $isArabic ? 'ar' : '' }}">


    <!-- ============================================================
         HEADER
         ============================================================ -->

    @include('Home.header')


    <main>


        <!-- ========================================================
             ARTICLE HERO
             ======================================================== -->

        <section class="article-hero">


            <img
                src="{{ $featuredImage }}"

                alt="{{ $initialImageAlt }}"

                class="article-hero-image"

                fetchpriority="high"

                data-db-alt

                data-alt-en="{{ $imageAltEn }}"

                data-alt-ar="{{ $imageAltAr }}"
            >


            <div class="article-hero-overlay"></div>


            <div class="article-hero-content">


                <a
                    href="{{ $isArabic ? $arabicBlogUrl : $englishBlogUrl }}"

                    class="article-back reveal"

                    data-db-href

                    data-href-en="{{ $englishBlogUrl }}"

                    data-href-ar="{{ $arabicBlogUrl }}"
                >


                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        aria-hidden="true"
                    >

                        <path
                            d="M19 12H5M11 18l-6-6 6-6"
                            stroke="currentColor"
                            stroke-width="1.6"
                        />

                    </svg>


                    <span
                        data-i18n="backJournal"
                    >
                        Back to Journal
                    </span>


                </a>


                <div
                    class="article-category reveal"

                    data-db-i18n

                    data-en="{{ $categoryEn }}"

                    data-ar="{{ $categoryAr }}"
                >
                    {{ $initialCategory }}
                </div>


                <h1
                    class="article-title reveal"

                    data-db-i18n

                    data-en="{{ $titleEn }}"

                    data-ar="{{ $titleAr }}"
                >
                    {{ $initialTitle }}
                </h1>


                <p
                    class="article-excerpt reveal"

                    data-db-i18n

                    data-en="{{ $excerptEn }}"

                    data-ar="{{ $excerptAr }}"
                >
                    {{ $initialExcerpt }}
                </p>


                <div class="article-meta reveal">


                    <span
                        data-db-i18n

                        data-en="{{ $authorEn }}"

                        data-ar="{{ $authorAr }}"
                    >
                        {{ $initialAuthor }}
                    </span>


                    <span class="article-meta-dot">
                        •
                    </span>


                    <time
                        datetime="{{ $publishedDate?->toDateString() }}"
                    >
                        {{ $publishedDate?->format('F d, Y') }}
                    </time>


                </div>


            </div>


        </section>


        <!-- ========================================================
             ARTICLE BODY
             ======================================================== -->

        <section class="article-section">


            <div class="article-layout container">


                <!-- =================================================
                     MAIN ARTICLE
                     ================================================= -->

                <article class="article-main reveal">


                    <!-- English Article -->

                    <div
                        class="article-content"

                        data-lang-block="en"

                        @if(
                            $isArabic
                        )
                            hidden
                        @endif
                    >
                        {!! $contentEn !!}
                    </div>


                    <!-- Arabic Article -->

                    <div
                        class="article-content"

                        data-lang-block="ar"

                        @if(
                            ! $isArabic
                        )
                            hidden
                        @endif
                    >
                        {!! $contentAr !!}
                    </div>


                    <!-- =============================================
                         ENGLISH TAGS
                         ============================================= -->

                    @if(
                        $tagsEn->isNotEmpty()
                    )

                        <div
                            class="article-tags"

                            data-lang-block="en"

                            @if(
                                $isArabic
                            )
                                hidden
                            @endif
                        >


                            @foreach(
                                $tagsEn
                                as $tag
                            )

                                <span class="article-tag">
                                    {{ $tag }}
                                </span>

                            @endforeach


                        </div>


                    @endif


                    <!-- =============================================
                         ARABIC TAGS
                         ============================================= -->

                    @if(
                        $tagsAr->isNotEmpty()
                    )

                        <div
                            class="article-tags"

                            data-lang-block="ar"

                            @if(
                                ! $isArabic
                            )
                                hidden
                            @endif
                        >


                            @foreach(
                                $tagsAr
                                as $tag
                            )

                                <span class="article-tag">
                                    {{ $tag }}
                                </span>

                            @endforeach


                        </div>


                    @endif


                    <!-- =============================================
                         ARTICLE FOOTER
                         ============================================= -->

                    <div class="article-footer">


                        <div class="article-author">


                            <span
                                class="article-footer-label"
                                data-i18n="writtenBy"
                            >
                                Written by
                            </span>


                            <strong
                                data-db-i18n

                                data-en="{{ $authorEn }}"

                                data-ar="{{ $authorAr }}"
                            >
                                {{ $initialAuthor }}
                            </strong>


                        </div>


                        <div class="article-updated">


                            <span
                                class="article-footer-label"
                                data-i18n="lastUpdated"
                            >
                                Last updated
                            </span>


                            <strong>

                                {{ $post->updated_at?->format('F d, Y') }}

                            </strong>


                        </div>


                    </div>


                    <!-- =============================================
                         BACK TO JOURNAL
                         ============================================= -->

                    <a
                        href="{{ $isArabic ? $arabicBlogUrl : $englishBlogUrl }}"

                        class="btn article-return"

                        data-db-href

                        data-href-en="{{ $englishBlogUrl }}"

                        data-href-ar="{{ $arabicBlogUrl }}"
                    >


                        <span
                            data-i18n="backJournal"
                        >
                            Back to Journal
                        </span>


                        <svg
                            class="btn-arrow"
                            viewBox="0 0 24 24"
                            fill="none"
                            aria-hidden="true"
                        >

                            <path
                                d="M5 12h14M13 6l6 6-6 6"
                                stroke="currentColor"
                                stroke-width="1.6"
                            />

                        </svg>


                    </a>


                </article>


                <!-- =================================================
                     SIDEBAR
                     ================================================= -->

                <aside class="article-sidebar reveal">


                    <div class="article-sidebar-card">


                        <div
                            class="article-sidebar-label"
                            data-i18n="articleDetails"
                        >
                            Article Details
                        </div>


                        <div class="article-sidebar-row">


                            <span
                                data-i18n="category"
                            >
                                Category
                            </span>


                            <strong
                                data-db-i18n

                                data-en="{{ $categoryEn }}"

                                data-ar="{{ $categoryAr }}"
                            >
                                {{ $initialCategory }}
                            </strong>


                        </div>


                        <div class="article-sidebar-row">


                            <span
                                data-i18n="published"
                            >
                                Published
                            </span>


                            <strong>

                                {{ $publishedDate?->format('M d, Y') }}

                            </strong>


                        </div>


                        <div class="article-sidebar-row">


                            <span
                                data-i18n="author"
                            >
                                Author
                            </span>


                            <strong
                                data-db-i18n

                                data-en="{{ $authorEn }}"

                                data-ar="{{ $authorAr }}"
                            >
                                {{ $initialAuthor }}
                            </strong>


                        </div>


                    </div>


                    @if(
                        filled(
                            $focusKeywordEn
                        )
                        ||
                        filled(
                            $focusKeywordAr
                        )
                    )


                        <div class="article-sidebar-card">


                            <div
                                class="article-sidebar-label"
                                data-i18n="topic"
                            >
                                Topic
                            </div>


                            <p
                                class="article-topic"

                                data-db-i18n

                                data-en="{{ $focusKeywordEn }}"

                                data-ar="{{ $focusKeywordAr }}"
                            >
                                {{
                                    $isArabic
                                        ? $focusKeywordAr
                                        : $focusKeywordEn
                                }}
                            </p>


                        </div>


                    @endif


                </aside>


            </div>


        </section>


        <!-- ========================================================
             INSTAGRAM GRID
             ======================================================== -->

        @include('Home.instagramgrid')


    </main>


    <!-- ============================================================
         FOOTER
         ============================================================ -->

    @include('Home.footer')


    <!-- ============================================================
         BLOG SEO LANGUAGE DATA
         ============================================================ -->

    <script
        type="application/json"
        id="blogSeoData"
    >{!! json_encode(
        [
            'en' => [

                'title' =>
                    $seoTitleEn,

                'description' =>
                    $metaDescriptionEn,

                'robots' =>
                    $robotsEn,

                'canonical' =>
                    $canonicalEn,

                'ogTitle' =>
                    $ogTitleEn,

                'ogDescription' =>
                    $ogDescriptionEn,

                'ogImage' =>
                    $ogImage,

                'ogLocale' =>
                    'en_US',

                'twitterTitle' =>
                    $twitterTitleEn,

                'twitterDescription' =>
                    $twitterDescriptionEn,

                'twitterImage' =>
                    $twitterImage,

                'schema' =>
                    $schemaEn,

            ],


            'ar' => [

                'title' =>
                    $seoTitleAr,

                'description' =>
                    $metaDescriptionAr,

                'robots' =>
                    $robotsAr,

                'canonical' =>
                    $canonicalAr,

                'ogTitle' =>
                    $ogTitleAr,

                'ogDescription' =>
                    $ogDescriptionAr,

                'ogImage' =>
                    $ogImage,

                'ogLocale' =>
                    'ar_QA',

                'twitterTitle' =>
                    $twitterTitleAr,

                'twitterDescription' =>
                    $twitterDescriptionAr,

                'twitterImage' =>
                    $twitterImage,

                'schema' =>
                    $schemaAr,

            ],

        ],
        JSON_UNESCAPED_UNICODE
        | JSON_UNESCAPED_SLASHES
        | JSON_HEX_TAG
        | JSON_HEX_AMP
        | JSON_HEX_APOS
        | JSON_HEX_QUOT
    ) !!}</script>


    <!-- ============================================================
         BLOG POST JAVASCRIPT
         ============================================================ -->

    <script
        src="{{ asset('assets/frontend/js/blogpage.js') }}"
    ></script>


</body>

</html>