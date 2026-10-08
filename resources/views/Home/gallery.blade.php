@php

    /*
    |--------------------------------------------------------------------------
    | Gallery Setting
    |--------------------------------------------------------------------------
    */

    $homeGallerySetting =
        $gallerySetting
        ?? null;


    /*
    |--------------------------------------------------------------------------
    | Image URL Helper
    |--------------------------------------------------------------------------
    */

    $homeGalleryImageUrl =
        function (
            ?string $path
        ): ?string {

            if (
                blank(
                    $path
                )
            ) {

                return null;

            }


            /*
            |--------------------------------------------------------------------------
            | External Image
            |--------------------------------------------------------------------------
            */

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


            /*
            |--------------------------------------------------------------------------
            | Laravel Storage Image
            |--------------------------------------------------------------------------
            */

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
    | Stored Gallery Blocks
    |--------------------------------------------------------------------------
    */

    $homeGalleryBlocks =
        $homeGallerySetting?->gallery_blocks
        ?? [];


    /*
    |--------------------------------------------------------------------------
    | Collect All Backend Gallery Images
    |--------------------------------------------------------------------------
    |
    | We collect:
    |
    | 1. Main Image
    | 2. Stack Image 1
    | 3. Stack Image 2
    |
    | Then homepage displays ONLY the first 4.
    |
    */

    $homeGalleryImages =
        [];


    if (
        is_array(
            $homeGalleryBlocks
        )
    ) {

        foreach (
            $homeGalleryBlocks
            as $block
        ) {

            /*
            |--------------------------------------------------------------------------
            | Reveal Delay
            |--------------------------------------------------------------------------
            */

            $delay =
                (string) (
                    $block['delay']
                    ?? '0'
                );


            $delayClass =
                match (
                    $delay
                ) {

                    '0.1' =>
                        'reveal-delay-1',

                    '0.2' =>
                        'reveal-delay-2',

                    default =>
                        '',

                };


            /*
            |--------------------------------------------------------------------------
            | Main Image
            |--------------------------------------------------------------------------
            */

            $mainImage =
                $homeGalleryImageUrl(
                    $block['image']
                    ?? null
                );


            if (
                filled(
                    $mainImage
                )
            ) {

                $homeGalleryImages[] = [

                    'src' =>
                        $mainImage,

                    'alt_en' =>
                        $block['alt_en']
                        ?? 'Zaitoona Al Andalus Gallery',

                    'alt_ar' =>
                        $block['alt_ar']
                        ?? (
                            $block['alt_en']
                            ?? 'معرض زيتونة الأندلس'
                        ),

                    'delayClass' =>
                        $delayClass,

                ];

            }


            /*
            |--------------------------------------------------------------------------
            | Stack Image 1
            |--------------------------------------------------------------------------
            */

            $stackImage1 =
                $homeGalleryImageUrl(
                    $block['stack_image_1']
                    ?? null
                );


            if (
                filled(
                    $stackImage1
                )
            ) {

                $homeGalleryImages[] = [

                    'src' =>
                        $stackImage1,

                    'alt_en' =>
                        $block['stack_alt_1_en']
                        ?? 'Zaitoona Al Andalus Gallery',

                    'alt_ar' =>
                        $block['stack_alt_1_ar']
                        ?? (
                            $block['stack_alt_1_en']
                            ?? 'معرض زيتونة الأندلس'
                        ),

                    'delayClass' =>
                        $delayClass,

                ];

            }


            /*
            |--------------------------------------------------------------------------
            | Stack Image 2
            |--------------------------------------------------------------------------
            */

            $stackImage2 =
                $homeGalleryImageUrl(
                    $block['stack_image_2']
                    ?? null
                );


            if (
                filled(
                    $stackImage2
                )
            ) {

                $homeGalleryImages[] = [

                    'src' =>
                        $stackImage2,

                    'alt_en' =>
                        $block['stack_alt_2_en']
                        ?? 'Zaitoona Al Andalus Gallery',

                    'alt_ar' =>
                        $block['stack_alt_2_ar']
                        ?? (
                            $block['stack_alt_2_en']
                            ?? 'معرض زيتونة الأندلس'
                        ),

                    'delayClass' =>
                        $delayClass,

                ];

            }

        }

    }


    /*
    |--------------------------------------------------------------------------
    | Original 4 Image Fallback
    |--------------------------------------------------------------------------
    |
    | Used only when no backend images are available.
    |
    */

    if (
        count(
            $homeGalleryImages
        )
        === 0
    ) {

        $homeGalleryImages = [

            [
                'src' =>
                    'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1400&q=86',

                'alt_en' =>
                    'Elegant dining room',

                'alt_ar' =>
                    'قاعة طعام أنيقة',

                'delayClass' =>
                    '',
            ],


            [
                'src' =>
                    'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=1000&q=86',

                'alt_en' =>
                    'Restaurant service and ambience',

                'alt_ar' =>
                    'خدمة وأجواء المطعم',

                'delayClass' =>
                    'reveal-delay-1',
            ],


            [
                'src' =>
                    'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1000&q=86',

                'alt_en' =>
                    'Coffee preparation',

                'alt_ar' =>
                    'تحضير القهوة',

                'delayClass' =>
                    'reveal-delay-2',
            ],


            [
                'src' =>
                    'https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=1400&q=86',

                'alt_en' =>
                    'Fresh food selection',

                'alt_ar' =>
                    'مجموعة من الأطعمة الطازجة',

                'delayClass' =>
                    '',
            ],

        ];

    }


    /*
    |--------------------------------------------------------------------------
    | Homepage Limit
    |--------------------------------------------------------------------------
    |
    | IMPORTANT:
    |
    | Gallery Page can contain all uploaded images.
    | Homepage displays ONLY 4 images.
    |
    */

    $homeGalleryImages =
        array_slice(
            $homeGalleryImages,
            0,
            4
        );

@endphp


<!-- ============================================================
     PHOTO GALLERY
     ============================================================ -->

<section
    class="section"
    id="gallery"
>


    <div class="container">


        <!-- ========================================================
             Heading
             ======================================================== -->

        <div class="atmo-head">


            <div class="reveal">


                <div
                    class="eyebrow"
                    data-i18n="galleryEyebrow"
                >
                    Our atmosphere
                </div>


                <h2
                    class="section-title"
                    data-i18n="galleryTitle"
                >
                    A space that changes with the evening.
                </h2>


            </div>


            <a
                href="{{ route('gallery') }}"
                class="btn reveal"
                data-i18n="experienceIt"
            >
                Experience it
            </a>


        </div>


        <!-- ========================================================
             Homepage Gallery
             ONLY 4 IMAGES
             ======================================================== -->

        <div class="gallery">


            @foreach(
                $homeGalleryImages
                as $image
            )


                <div
                    class="gallery-item reveal {{ $image['delayClass'] }}"
                >


                    <img
                        src="{{ $image['src'] }}"

                        alt="{{ $image['alt_en'] }}"

                        data-db-alt

                        data-alt-en="{{ $image['alt_en'] }}"

                        data-alt-ar="{{ $image['alt_ar'] }}"

                        loading="lazy"

                        decoding="async"
                    >


                </div>


            @endforeach


        </div>


    </div>


</section>

<!-- ============================================================
     END PHOTO GALLERY
     ============================================================ -->