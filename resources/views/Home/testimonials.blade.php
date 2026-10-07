@php

    /*
    |--------------------------------------------------------------------------
    | TESTIMONIAL DATA
    |--------------------------------------------------------------------------
    */

    $testimonialItems =
        collect(
            $testimonialSection?->testimonials
            ?? []
        )
        ->filter(
            fn ($testimonial) =>
                ($testimonial['is_active'] ?? true)
                === true
        )
        ->values();


    /*
    |--------------------------------------------------------------------------
    | REMOVE OLD "DEMO REVIEW" TEXT
    |--------------------------------------------------------------------------
    |
    | Some older testimonial records may still contain:
    |
    | Zaitoona Guest Experience · Demo Review
    |
    | This cleans the old database value before it reaches the frontend.
    |
    */

    $cleanTestimonialAuthor = function ($author) {

        $author =
            (string) $author;


        $author =
            str_ireplace(
                [
                    ' · Demo Review',
                    '· Demo Review',
                    'Demo Review',
                    ' · Demo',
                    '· Demo',
                ],
                '',
                $author
            );


        /*
        |--------------------------------------------------------------------------
        | Remove old Arabic demo wording if it exists
        |--------------------------------------------------------------------------
        */

        $author =
            str_replace(
                [
                    ' · تقييم تجريبي',
                    '· تقييم تجريبي',
                    'تقييم تجريبي',
                ],
                '',
                $author
            );


        return trim(
            $author,
            " \t\n\r\0\x0B·-"
        );
    };


    /*
    |--------------------------------------------------------------------------
    | SECTION TRANSLATIONS
    |--------------------------------------------------------------------------
    */

    $testimonialEyebrowEn =
        $testimonialSection?->eyebrow_en
        ?: 'What the evening should feel like';


    $testimonialEyebrowAr =
        $testimonialSection?->eyebrow_ar
        ?: $testimonialEyebrowEn;

@endphp


@if(
    $testimonialSection
    &&
    $testimonialSection->is_active
    &&
    $testimonialItems->isNotEmpty()
)

    <!-- ============================================================
         TESTIMONIALS
         ============================================================ -->

    <section class="testimonials section-sm">

        <div class="container quote-wrap">


            <!-- ====================================================
                 SECTION EYEBROW
                 ==================================================== -->

            <div
                class="eyebrow"
                style="justify-content:center"
                data-db-i18n
                data-en="{{ $testimonialEyebrowEn }}"
                data-ar="{{ $testimonialEyebrowAr }}"
            >
                {{ $testimonialEyebrowEn }}
            </div>


            <!-- ====================================================
                 STAR RATING
                 ==================================================== -->

            <div
                class="stars"
                id="quoteStars"
                aria-label="5 out of 5 stars"
            >
                ★★★★★
            </div>


            <!-- ====================================================
                 QUOTE
                 ==================================================== -->

            <div
                id="quoteText"
                class="quote"
            ></div>


            <!-- ====================================================
                 AUTHOR
                 ==================================================== -->

            <div
                id="quoteAuthor"
                class="quote-author"
            ></div>


            <!-- ====================================================
                 SLIDER DOTS
                 ==================================================== -->

            <div
                class="quote-dots"
                id="quoteDots"
            ></div>


        </div>


        <!-- ========================================================
             TESTIMONIAL DATABASE DATA
             ======================================================== -->

        <script
            type="application/json"
            id="testimonialData"
        >{!! json_encode(
            $testimonialItems
                ->map(
                    function ($testimonial) use ($cleanTestimonialAuthor) {

                        /*
                        |--------------------------------------------------------------------------
                        | English Author
                        |--------------------------------------------------------------------------
                        */

                        $authorEn =
                            $cleanTestimonialAuthor(
                                $testimonial['author_en']
                                ?? 'Zaitoona Guest Experience'
                            );


                        if (
                            blank($authorEn)
                        ) {

                            $authorEn =
                                'Zaitoona Guest Experience';

                        }


                        /*
                        |--------------------------------------------------------------------------
                        | Arabic Author
                        |--------------------------------------------------------------------------
                        */

                        $authorAr =
                            $cleanTestimonialAuthor(
                                $testimonial['author_ar']
                                ?? ''
                            );


                        if (
                            blank($authorAr)
                        ) {

                            $authorAr =
                                'تجربة ضيف زيتونة';

                        }


                        /*
                        |--------------------------------------------------------------------------
                        | Quote
                        |--------------------------------------------------------------------------
                        */

                        $quoteEn =
                            $testimonial['quote_en']
                            ?? '';


                        $quoteAr =
                            filled(
                                $testimonial['quote_ar']
                                ?? null
                            )
                                ? $testimonial['quote_ar']
                                : $quoteEn;


                        /*
                        |--------------------------------------------------------------------------
                        | Rating
                        |--------------------------------------------------------------------------
                        */

                        $rating =
                            max(
                                1,
                                min(
                                    5,
                                    (int) (
                                        $testimonial['rating']
                                        ?? 5
                                    )
                                )
                            );


                        return [

                            'quote_en' =>
                                $quoteEn,

                            'quote_ar' =>
                                $quoteAr,

                            'author_en' =>
                                $authorEn,

                            'author_ar' =>
                                $authorAr,

                            'rating' =>
                                $rating,

                        ];

                    }
                )
                ->values(),
            JSON_UNESCAPED_UNICODE
            | JSON_UNESCAPED_SLASHES
            | JSON_HEX_TAG
            | JSON_HEX_AMP
            | JSON_HEX_APOS
            | JSON_HEX_QUOT
        ) !!}</script>


    </section>

    <!-- End Testimonials -->

@endif