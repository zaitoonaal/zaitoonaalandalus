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

    <title>
        Our Journal | Zaitoona Al Andalus
    </title>


    <meta
        name="description"
        content="Read the latest stories, culinary insights, restaurant news and hospitality inspiration from Zaitoona Al Andalus in Doha, Qatar."
    >


    <meta
        name="robots"
        content="index, follow"
    >


    <link
        rel="canonical"
        href="{{ route('blog') }}"
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
        content="Our Journal | Zaitoona Al Andalus"
    >

    <meta
        property="og:description"
        content="Read the latest stories, culinary insights, restaurant news and hospitality inspiration from Zaitoona Al Andalus in Doha, Qatar."
    >

    <meta
        property="og:url"
        content="{{ route('blog') }}"
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
        content="Our Journal | Zaitoona Al Andalus"
    >

    <meta
        name="twitter:description"
        content="Read the latest stories and culinary insights from Zaitoona Al Andalus in Doha."
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


<body>


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

        <!-- End Blog Hero -->


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
                            |
                            | Supports:
                            |
                            | 1. Filament uploaded storage image
                            | 2. Existing external URL
                            | 3. Fallback image
                            |
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
                            | ALT
                            |--------------------------------------------------------------------------
                            */

                            $featuredImageAlt =
                                $post->featured_image_alt
                                ?: $post->title;


                            /*
                            |--------------------------------------------------------------------------
                            | Date
                            |--------------------------------------------------------------------------
                            */

                            $postDate =
                                $post->published_at
                                    ? $post->published_at
                                        ->format(
                                            'M d, Y'
                                        )
                                    : $post->created_at
                                        ->format(
                                            'M d, Y'
                                        );


                            /*
                            |--------------------------------------------------------------------------
                            | Excerpt
                            |--------------------------------------------------------------------------
                            */

                            $postExcerpt =
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


                            /*
                            |--------------------------------------------------------------------------
                            | Category
                            |--------------------------------------------------------------------------
                            */

                            $postCategory =
                                $post->category
                                ?: 'Journal';

                        @endphp


                        <!-- =================================================
                             BLOG ARTICLE
                             ================================================= -->

                        <article
                            class="blog-card {{ $revealClass }}"
                        >


                            <!-- Image -->

                            <a
                                href="{{ route('blog.show', $post->slug) }}"
                                class="blog-img-link"
                                aria-label="Read {{ $post->title }}"
                            >

                                <img
                                    src="{{ $featuredImageUrl }}"
                                    alt="{{ $featuredImageAlt }}"
                                    loading="lazy"
                                    decoding="async"
                                >

                            </a>


                            <!-- Content -->

                            <div class="blog-content">


                                <!-- Category + Date -->

                                <div class="eyebrow">

                                    {{ $postCategory }}

                                    ·

                                    <span class="date">

                                        {{ $postDate }}

                                    </span>

                                </div>


                                <!-- Title -->

                                <a
                                    href="{{ route('blog.show', $post->slug) }}"
                                    class="blog-title-link"
                                >

                                    <h2 class="blog-title">

                                        {{ $post->title }}

                                    </h2>

                                </a>


                                <!-- Excerpt -->

                                <p class="blog-excerpt">

                                    {{ $postExcerpt }}

                                </p>


                                <!-- Read More -->

                                <a
                                    href="{{ route('blog.show', $post->slug) }}"
                                    class="blog-read-more"
                                    aria-label="Read more about {{ $post->title }}"
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

                    <h2>
                        Our Journal
                    </h2>

                    <p>
                        New stories are coming soon.
                    </p>

                </div>


            @endif


        </section>

        <!-- End Blog Grid -->


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
         EXISTING BLOG JAVASCRIPT
         ============================================================ -->

    <script
        src="{{ asset('assets/frontend/js/blog.js') }}"
    ></script>


</body>

</html>
