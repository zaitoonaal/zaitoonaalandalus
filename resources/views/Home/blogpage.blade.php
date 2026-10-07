@php

    /*
    |--------------------------------------------------------------------------
    | SEO FALLBACKS
    |--------------------------------------------------------------------------
    */

    $seoTitle =
        $post->seo_title
        ?: $post->title;


    $metaDescription =
        $post->meta_description
        ?: (
            $post->excerpt
            ?: \Illuminate\Support\Str::limit(
                strip_tags($post->content),
                160
            )
        );


    $canonicalUrl =
        $post->canonical_url
        ?: route(
            'blog.show',
            $post->slug
        );


    /*
    |--------------------------------------------------------------------------
    | FEATURED IMAGE
    |--------------------------------------------------------------------------
    */

    $getImageUrl = function ($image) {

        if (blank($image)) {
            return null;
        }


        if (
            str_starts_with($image, 'http://')
            ||
            str_starts_with($image, 'https://')
        ) {

            return $image;

        }


        return asset(
            'storage/' . ltrim($image, '/')
        );
    };


    $featuredImage =
        $getImageUrl(
            $post->featured_image
        );


    if (blank($featuredImage)) {

        $featuredImage =
            'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1800&q=85';

    }


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
    | SOCIAL CONTENT
    |--------------------------------------------------------------------------
    */

    $ogTitle =
        $post->og_title
        ?: $seoTitle;


    $ogDescription =
        $post->og_description
        ?: $metaDescription;


    $twitterTitle =
        $post->twitter_title
        ?: $seoTitle;


    $twitterDescription =
        $post->twitter_description
        ?: $metaDescription;


    /*
    |--------------------------------------------------------------------------
    | ARTICLE DETAILS
    |--------------------------------------------------------------------------
    */

    $author =
        $post->author_name
        ?: 'Zaitoona Al Andalus';


    $category =
        $post->category
        ?: 'Journal';


    $publishedDate =
        $post->published_at
        ?: $post->created_at;


    $imageAlt =
        $post->featured_image_alt
        ?: $post->title;


    /*
    |--------------------------------------------------------------------------
    | SCHEMA
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


    $schemaHeadline =
        $post->schema_headline
        ?: $post->title;


    $schemaDescription =
        $post->schema_description
        ?: $metaDescription;


    $schemaData = [

        '@context' =>
            'https://schema.org',

        '@type' =>
            $schemaType,

        'headline' =>
            $schemaHeadline,

        'description' =>
            $schemaDescription,

        'image' => [
            $schemaImage,
        ],

        'datePublished' =>
            $publishedDate?->toIso8601String(),

        'dateModified' =>
            $post->updated_at?->toIso8601String(),

        'author' => [
            '@type' =>
                'Organization',

            'name' =>
                $author,
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
                $canonicalUrl,
        ],

    ];


    /*
    |--------------------------------------------------------------------------
    | TAGS
    |--------------------------------------------------------------------------
    */

    $tags =
        collect(
            $post->tags ?? []
        )
        ->filter()
        ->values();

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
         PRIMARY SEO
         ============================================================ -->

    <title>{{ $seoTitle }}</title>


    <meta
        name="description"
        content="{{ $metaDescription }}"
    >


    <meta
        name="robots"
        content="{{ $post->robots ?: 'index, follow' }}"
    >


    <link
        rel="canonical"
        href="{{ $canonicalUrl }}"
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
        property="og:site_name"
        content="Zaitoona Al Andalus"
    >


    @if($publishedDate)

        <meta
            property="article:published_time"
            content="{{ $publishedDate->toIso8601String() }}"
        >

    @endif


    @if($post->updated_at)

        <meta
            property="article:modified_time"
            content="{{ $post->updated_at->toIso8601String() }}"
        >

    @endif


    <!-- ============================================================
         X / TWITTER
         ============================================================ -->

    <meta
        name="twitter:card"
        content="summary_large_image"
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


    <!-- ============================================================
         ARTICLE STRUCTURED DATA
         ============================================================ -->

    <script type="application/ld+json">
        {!! json_encode(
            $schemaData,
            JSON_UNESCAPED_UNICODE
            | JSON_UNESCAPED_SLASHES
            | JSON_PRETTY_PRINT
        ) !!}
    </script>


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


<body>


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
                alt="{{ $imageAlt }}"
                class="article-hero-image"
                fetchpriority="high"
            >


            <div class="article-hero-overlay"></div>


            <div class="article-hero-content">


                <a
                    href="{{ route('blog') }}"
                    class="article-back reveal"
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


                    <span data-i18n="backJournal">
                        Back to Journal
                    </span>

                </a>


                <div class="article-category reveal">

                    {{ $category }}

                </div>


                <h1 class="article-title reveal">

                    {{ $post->title }}

                </h1>


                @if(filled($post->excerpt))

                    <p class="article-excerpt reveal">

                        {{ $post->excerpt }}

                    </p>

                @endif


                <div class="article-meta reveal">


                    <span>

                        {{ $author }}

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

        <!-- End Article Hero -->


        <!-- ========================================================
             ARTICLE BODY
             ======================================================== -->

        <section class="article-section">


            <div class="article-layout container">


                <!-- =================================================
                     MAIN ARTICLE
                     ================================================= -->

                <article class="article-main reveal">


                    <div class="article-content">

                        {!! $post->content !!}

                    </div>


                    <!-- =============================================
                         TAGS
                         ============================================= -->

                    @if($tags->isNotEmpty())

                        <div class="article-tags">

                            @foreach(
                                $tags
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


                            <strong>

                                {{ $author }}

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

                                {{ $post->updated_at->format('F d, Y') }}

                            </strong>


                        </div>


                    </div>


                    <!-- =============================================
                         BACK TO JOURNAL
                         ============================================= -->

                    <a
                        href="{{ route('blog') }}"
                        class="btn article-return"
                    >

                        <span data-i18n="backJournal">
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

                            <span data-i18n="category">
                                Category
                            </span>

                            <strong>
                                {{ $category }}
                            </strong>

                        </div>


                        <div class="article-sidebar-row">

                            <span data-i18n="published">
                                Published
                            </span>

                            <strong>
                                {{ $publishedDate?->format('M d, Y') }}
                            </strong>

                        </div>


                        <div class="article-sidebar-row">

                            <span data-i18n="author">
                                Author
                            </span>

                            <strong>
                                {{ $author }}
                            </strong>

                        </div>


                    </div>


                    @if(
                        filled(
                            $post->focus_keyword
                        )
                    )

                        <div class="article-sidebar-card">


                            <div
                                class="article-sidebar-label"
                                data-i18n="topic"
                            >
                                Topic
                            </div>


                            <p class="article-topic">

                                {{ $post->focus_keyword }}

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
         BLOG POST JAVASCRIPT
         ============================================================ -->

    <script
        src="{{ asset('assets/frontend/js/blogpage.js') }}"
    ></script>


</body>

</html>