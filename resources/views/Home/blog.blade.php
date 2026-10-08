@php

    /*
    |--------------------------------------------------------------------------
    | LANGUAGE / SEO URLS
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
    | BLOG LISTING SEO
    |--------------------------------------------------------------------------
    */

    $seoEnglish = [

        'title' =>
            'Our Journal | Zaitoona Al Andalus',

        'description' =>
            'Read the latest stories, culinary insights, restaurant news and hospitality inspiration from Zaitoona Al Andalus in Doha, Qatar.',

        'robots' =>
            'index, follow',

        'url' =>
            $englishBlogUrl,

        'locale' =>
            'en_US',

    ];


    $seoArabic = [

        'title' =>
            'مجلة زيتونة الأندلس | مطعم ولاونج في الدوحة',

        'description' =>
            'اكتشف أحدث القصص والمقالات عن المأكولات المتوسطية والشيشة والقهوة وتجربة زيتونة الأندلس في الدوحة، قطر.',

        'robots' =>
            'index, follow',

        'url' =>
            $arabicBlogUrl,

        'locale' =>
            'ar_QA',

    ];


    $initialSeo =
        $isArabic
            ? $seoArabic
            : $seoEnglish;

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
         SEO
         ============================================================ -->

    <title>{{ $initialSeo['title'] }}</title>


    <meta
        name="description"
        content="{{ $initialSeo['description'] }}"
    >


    <meta
        name="robots"
        content="{{ $initialSeo['robots'] }}"
    >


    <link
        rel="canonical"
        href="{{ $initialSeo['url'] }}"
    >


    <link
        rel="alternate"
        hreflang="en"
        href="{{ $englishBlogUrl }}"
    >


    @if(
        \Illuminate\Support\Facades\Route::has(
            'blog.ar'
        )
    )

        <link
            rel="alternate"
            hreflang="ar"
            href="{{ $arabicBlogUrl }}"
        >

    @endif


    <link
        rel="alternate"
        hreflang="x-default"
        href="{{ $englishBlogUrl }}"
    >


    <!-- ============================================================
         OPEN GRAPH
         ============================================================ -->

    <meta
        property="og:type"
        content="website"
    >


    <meta
        property="og:title"
        content="{{ $initialSeo['title'] }}"
    >


    <meta
        property="og:description"
        content="{{ $initialSeo['description'] }}"
    >


    <meta
        property="og:url"
        content="{{ $initialSeo['url'] }}"
    >


    <meta
        property="og:site_name"
        content="Zaitoona Al Andalus"
    >


    <meta
        property="og:locale"
        content="{{ $initialSeo['locale'] }}"
    >


    <!-- ============================================================
         TWITTER / X
         ============================================================ -->

    <meta
        name="twitter:card"
        content="summary_large_image"
    >


    <meta
        name="twitter:title"
        content="{{ $initialSeo['title'] }}"
    >


    <meta
        name="twitter:description"
        content="{{ $initialSeo['description'] }}"
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
         EXISTING BLOG CSS
         ============================================================ -->

    <link
        rel="stylesheet"
        href="{{ asset('assets/frontend/css/blog.css') }}"
    >

</head>


<body class="{{ $isArabic ? 'ar' : '' }}">


    <!-- ============================================================
         HEADER
         ============================================================ -->

    @include('Home.header')


    <main>


        <!-- ========================================================
             BLOG HERO
             ======================================================== -->

        <section class="blog-hero">


            <img
                src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1800&q=80"
                alt="Zaitoona Al Andalus Journal"
                loading="eager"
                fetchpriority="high"
            >


            <div class="blog-hero-content reveal">


                <h1
                    class="blog-hero-title"
                    data-i18n="blogHeroTitle"
                >
                    Our Journal
                </h1>


            </div>


        </section>


        <!-- ========================================================
             BLOG INTRO
             ======================================================== -->

        <div class="blog-intro reveal">


            <h2
                data-i18n="blogIntroHeading"
            >
                Stories from the Table
            </h2>


            <p
                data-i18n="blogIntroText"
            >
                Discover the inspiration behind our Mediterranean menus,
                the heritage of our premium shisha, and the delicate art
                of Arabic coffee. Welcome to the Zaitoona journal.
            </p>


        </div>


        <!-- ========================================================
             DYNAMIC BLOG GRID
             ======================================================== -->

        <section
            class="section-sm container blog-wrap"
        >


            @if(
                $posts->count()
            )


                <div class="blog-grid">


                    @foreach(
                        $posts
                        as $post
                    )


                        @php

                            /*
                            |--------------------------------------------------------------------------
                            | Reveal Delay
                            |--------------------------------------------------------------------------
                            */

                            $revealClass =
                                match (
                                    $loop->index % 3
                                ) {

                                    1 =>
                                        'reveal reveal-delay-1',

                                    2 =>
                                        'reveal reveal-delay-2',

                                    default =>
                                        'reveal',

                                };


                            /*
                            |--------------------------------------------------------------------------
                            | Featured Image
                            |--------------------------------------------------------------------------
                            */

                            $featuredImage =
                                $post->featured_image;


                            if (
                                filled(
                                    $featuredImage
                                )
                                &&
                                (
                                    str_starts_with(
                                        $featuredImage,
                                        'http://'
                                    )
                                    ||
                                    str_starts_with(
                                        $featuredImage,
                                        'https://'
                                    )
                                )
                            ) {

                                $featuredImageUrl =
                                    $featuredImage;

                            } elseif (
                                filled(
                                    $featuredImage
                                )
                            ) {

                                $featuredImageUrl =
                                    asset(
                                        'storage/'
                                        . ltrim(
                                            $featuredImage,
                                            '/'
                                        )
                                    );

                            } else {

                                $featuredImageUrl =
                                    'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1000&q=80';

                            }


                            /*
                            |--------------------------------------------------------------------------
                            | English Content
                            |--------------------------------------------------------------------------
                            */

                            $titleEn =
                                $post->title;


                            $excerptEn =
                                filled(
                                    $post->excerpt
                                )
                                    ? $post->excerpt
                                    : \Illuminate\Support\Str::limit(
                                        strip_tags(
                                            $post->content
                                        ),
                                        160
                                    );


                            $categoryEn =
                                $post->category
                                ?: 'Journal';


                            $altEn =
                                $post->featured_image_alt
                                ?: $titleEn;


                            /*
                            |--------------------------------------------------------------------------
                            | Arabic Content
                            |--------------------------------------------------------------------------
                            */

                            $titleAr =
                                $post->title_ar
                                ?: $titleEn;


                            $excerptAr =
                                filled(
                                    $post->excerpt_ar
                                )
                                    ? $post->excerpt_ar
                                    : (
                                        filled(
                                            $post->content_ar
                                        )
                                            ? \Illuminate\Support\Str::limit(
                                                strip_tags(
                                                    $post->content_ar
                                                ),
                                                160
                                            )
                                            : $excerptEn
                                    );


                            $categoryAr =
                                $post->category_ar
                                ?: $categoryEn;


                            $altAr =
                                $post->featured_image_alt_ar
                                ?: $altEn;


                            /*
                            |--------------------------------------------------------------------------
                            | Date
                            |--------------------------------------------------------------------------
                            */

                            $postDateObject =
                                $post->published_at
                                ?: $post->created_at;


                            $postDate =
                                $postDateObject
                                    ?->format(
                                        'M d, Y'
                                    );


                            /*
                            |--------------------------------------------------------------------------
                            | URLs
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


                            /*
                            |--------------------------------------------------------------------------
                            | ARIA
                            |--------------------------------------------------------------------------
                            */

                            $ariaEn =
                                'Read '
                                . $titleEn;


                            $ariaAr =
                                'اقرأ '
                                . $titleAr;

                        @endphp


                        <!-- =================================================
                             BLOG ARTICLE
                             ================================================= -->

                        <article
                            class="blog-card {{ $revealClass }}"
                        >


                            <!-- Image -->

                            <a
                                href="{{ $isArabic ? $arabicUrl : $englishUrl }}"

                                class="blog-img-link"

                                aria-label="{{ $isArabic ? $ariaAr : $ariaEn }}"

                                data-db-href

                                data-href-en="{{ $englishUrl }}"

                                data-href-ar="{{ $arabicUrl }}"

                                data-db-aria

                                data-aria-en="{{ $ariaEn }}"

                                data-aria-ar="{{ $ariaAr }}"
                            >


                                <img
                                    src="{{ $featuredImageUrl }}"

                                    alt="{{ $isArabic ? $altAr : $altEn }}"

                                    loading="lazy"

                                    decoding="async"

                                    data-db-alt

                                    data-alt-en="{{ $altEn }}"

                                    data-alt-ar="{{ $altAr }}"
                                >


                            </a>


                            <!-- Content -->

                            <div class="blog-content">


                                <!-- Category + Date -->

                                <div class="eyebrow">


                                    <span
                                        data-db-i18n

                                        data-en="{{ $categoryEn }}"

                                        data-ar="{{ $categoryAr }}"
                                    >
                                        {{ $isArabic ? $categoryAr : $categoryEn }}
                                    </span>


                                    ·


                                    <span class="date">

                                        {{ $postDate }}

                                    </span>


                                </div>


                                <!-- Title -->

                                <a
                                    href="{{ $isArabic ? $arabicUrl : $englishUrl }}"

                                    class="blog-title-link"

                                    data-db-href

                                    data-href-en="{{ $englishUrl }}"

                                    data-href-ar="{{ $arabicUrl }}"
                                >


                                    <h2
                                        class="blog-title"

                                        data-db-i18n

                                        data-en="{{ $titleEn }}"

                                        data-ar="{{ $titleAr }}"
                                    >
                                        {{ $isArabic ? $titleAr : $titleEn }}
                                    </h2>


                                </a>


                                <!-- Excerpt -->

                                <p
                                    class="blog-excerpt"

                                    data-db-i18n

                                    data-en="{{ $excerptEn }}"

                                    data-ar="{{ $excerptAr }}"
                                >
                                    {{ $isArabic ? $excerptAr : $excerptEn }}
                                </p>


                                <!-- Read More -->

                                <a
                                    href="{{ $isArabic ? $arabicUrl : $englishUrl }}"

                                    class="blog-read-more"

                                    aria-label="{{ $isArabic ? $ariaAr : $ariaEn }}"

                                    data-db-href

                                    data-href-en="{{ $englishUrl }}"

                                    data-href-ar="{{ $arabicUrl }}"

                                    data-db-aria

                                    data-aria-en="{{ $ariaEn }}"

                                    data-aria-ar="{{ $ariaAr }}"
                                >


                                    <span
                                        data-i18n="readMore"
                                    >
                                        Read More
                                    </span>


                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        aria-hidden="true"
                                    >

                                        <path
                                            d="M5 12h14M13 6l6 6-6 6"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        />

                                    </svg>


                                </a>


                            </div>


                        </article>


                    @endforeach


                </div>


                <!-- =================================================
                     NEXT PAGE
                     ================================================= -->

                @if(
                    $posts->hasMorePages()
                )


                    <div class="pagination reveal">


                        <a
                            href="{{ $posts->nextPageUrl() }}"
                            class="btn btn-ghost"
                            data-i18n="loadMore"
                        >
                            Load More Articles
                        </a>


                    </div>


                @endif


            @else


                <!-- =================================================
                     NO PUBLISHED POSTS
                     ================================================= -->

                <div
                    class="blog-intro reveal"
                    style="padding-top:0;"
                >


                    <h2
                        data-i18n="noStoriesHeading"
                    >
                        Our Journal
                    </h2>


                    <p
                        data-i18n="noStoriesText"
                    >
                        New stories are coming soon.
                    </p>


                </div>


            @endif


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
         LANGUAGE SEO DATA
         ============================================================ -->

    <script
        type="application/json"
        id="blogListingSeoData"
    >{!! json_encode(
        [
            'en' => $seoEnglish,
            'ar' => $seoArabic,
        ],
        JSON_UNESCAPED_UNICODE
        | JSON_UNESCAPED_SLASHES
        | JSON_HEX_TAG
        | JSON_HEX_AMP
        | JSON_HEX_APOS
        | JSON_HEX_QUOT
    ) !!}</script>


    <!-- ============================================================
         EXISTING BLOG JAVASCRIPT
         ============================================================ -->

    <script
        src="{{ asset('assets/frontend/js/blog.js') }}"
    ></script>


</body>

</html>