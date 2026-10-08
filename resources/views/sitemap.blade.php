<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xhtml="http://www.w3.org/1999/xhtml"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
>

    {{-- ============================================================
         STATIC WEBSITE PAGES
         ============================================================ --}}

    @foreach ($staticPages as $page)

        <url>

            {{-- Main Page URL --}}
            <loc>{{ $page['url'] }}</loc>


            {{-- Last Modified --}}
            @if (
                filled(
                    $page['lastmod']
                    ?? null
                )
            )

                <lastmod>{{ $page['lastmod'] }}</lastmod>

            @endif


            {{-- ====================================================
                 ENGLISH ALTERNATE
                 ==================================================== --}}

            @if (
                filled(
                    $page['alternate_en']
                    ?? null
                )
            )

                <xhtml:link
                    rel="alternate"
                    hreflang="en"
                    href="{{ $page['alternate_en'] }}"
                />

            @endif


            {{-- ====================================================
                 ARABIC ALTERNATE
                 ==================================================== --}}

            @if (
                filled(
                    $page['alternate_ar']
                    ?? null
                )
            )

                <xhtml:link
                    rel="alternate"
                    hreflang="ar"
                    href="{{ $page['alternate_ar'] }}"
                />

            @endif


            {{-- ====================================================
                 X-DEFAULT
                 ==================================================== --}}

            @if (
                filled(
                    $page['alternate_en']
                    ?? null
                )
            )

                <xhtml:link
                    rel="alternate"
                    hreflang="x-default"
                    href="{{ $page['alternate_en'] }}"
                />

            @endif

        </url>

    @endforeach



    {{-- ============================================================
         DYNAMIC BLOG POSTS
         ============================================================ --}}

    @foreach ($postUrls as $post)

        <url>

            {{-- ====================================================
                 MAIN POST URL
                 ==================================================== --}}

            <loc>{{ $post['url'] }}</loc>


            {{-- ====================================================
                 LAST MODIFIED
                 ==================================================== --}}

            @if (
                filled(
                    $post['lastmod']
                    ?? null
                )
            )

                <lastmod>{{ $post['lastmod'] }}</lastmod>

            @endif


            {{-- ====================================================
                 ENGLISH ALTERNATE URL
                 ==================================================== --}}

            @if (
                filled(
                    $post['alternate_en']
                    ?? null
                )
            )

                <xhtml:link
                    rel="alternate"
                    hreflang="en"
                    href="{{ $post['alternate_en'] }}"
                />

            @endif


            {{-- ====================================================
                 ARABIC ALTERNATE URL
                 ==================================================== --}}

            @if (
                filled(
                    $post['alternate_ar']
                    ?? null
                )
            )

                <xhtml:link
                    rel="alternate"
                    hreflang="ar"
                    href="{{ $post['alternate_ar'] }}"
                />

            @endif


            {{-- ====================================================
                 X-DEFAULT URL
                 ==================================================== --}}

            @if (
                filled(
                    $post['alternate_en']
                    ?? null
                )
            )

                <xhtml:link
                    rel="alternate"
                    hreflang="x-default"
                    href="{{ $post['alternate_en'] }}"
                />

            @endif


            {{-- ====================================================
                 FEATURED IMAGE
                 ==================================================== --}}

            @if (
                filled(
                    $post['image']
                    ?? null
                )
            )

                <image:image>

                    <image:loc>{{ $post['image'] }}</image:loc>


                    @if (
                        filled(
                            $post['image_title']
                            ?? null
                        )
                    )

                        <image:title>{{ $post['image_title'] }}</image:title>

                    @endif

                </image:image>

            @endif

        </url>

    @endforeach

</urlset>