@php
    /*
    |--------------------------------------------------------------------------
    | HERO MEDIA
    |--------------------------------------------------------------------------
    */

    $heroVideo = !empty($hero?->video_path)
        ? asset('storage/' . ltrim($hero->video_path, '/'))
        : asset('build/assets/frontend/vid/video1.mp4');

    $heroPoster = !empty($hero?->video_poster_path)
        ? asset('storage/' . ltrim($hero->video_poster_path, '/'))
        : null;


    /*
    |--------------------------------------------------------------------------
    | HERO DATA
    |--------------------------------------------------------------------------
    */

    $heroData = [

        'links' => [
            'reserve' => $hero?->reserve_url ?: '/reserveatable',
            'menu' => $hero?->menu_url ?: '/menu',
            'scroll' => $hero?->scroll_target ?: '#about',
        ],

        'en' => [

            'kicker' => $hero?->kicker_en
                ?: 'A refined Doha gathering place',

            'line1' => $hero?->title_line_1_en
                ?: 'Taste.',

            'line2' => $hero?->title_line_2_en
                ?: 'Breathe.',

            'line3' => $hero?->title_line_3_en
                ?: 'Stay awhile.',

            'description' => $hero?->description_en
                ?: 'Mediterranean flavours, beautifully prepared shisha and coffee rituals — served with warm Andalusian-inspired hospitality in the heart of Doha.',

            'reserveText' => $hero?->reserve_text_en
                ?: 'Reserve your table',

            'menuText' => $hero?->menu_text_en
                ?: 'Explore the menu',

            'meta1Title' => $hero?->meta_1_title_en
                ?: 'All Day',

            'meta1Text' => $hero?->meta_1_text_en
                ?: 'Dining',

            'meta2Title' => $hero?->meta_2_title_en
                ?: 'Premium',

            'meta2Text' => $hero?->meta_2_text_en
                ?: 'Shisha',

            'meta3Title' => $hero?->meta_3_title_en
                ?: 'Late Night',

            'meta3Text' => $hero?->meta_3_text_en
                ?: 'Coffee & Lounge',

            'scrollAria' => $hero?->scroll_aria_en
                ?: 'Scroll down',
        ],

        'ar' => [

            'kicker' => $hero?->kicker_ar
                ?: 'وجهة راقية للقاءات في الدوحة',

            'line1' => $hero?->title_line_1_ar
                ?: 'تذوّق.',

            'line2' => $hero?->title_line_2_ar
                ?: 'استرخِ.',

            'line3' => $hero?->title_line_3_ar
                ?: 'وخُذ وقتك.',

            'description' => $hero?->description_ar
                ?: 'نكهات متوسطية، شيشة محضّرة بعناية وطقوس قهوة أصيلة — بروح ضيافة دافئة مستوحاة من الأندلس في قلب الدوحة.',

            'reserveText' => $hero?->reserve_text_ar
                ?: 'احجز طاولتك',

            'menuText' => $hero?->menu_text_ar
                ?: 'اكتشف القائمة',

            'meta1Title' => $hero?->meta_1_title_ar
                ?: 'طوال اليوم',

            'meta1Text' => $hero?->meta_1_text_ar
                ?: 'مطعم',

            'meta2Title' => $hero?->meta_2_title_ar
                ?: 'مميزة',

            'meta2Text' => $hero?->meta_2_text_ar
                ?: 'شيشة',

            'meta3Title' => $hero?->meta_3_title_ar
                ?: 'حتى وقت متأخر',

            'meta3Text' => $hero?->meta_3_text_ar
                ?: 'قهوة ولاونج',

            'scrollAria' => $hero?->scroll_aria_ar
                ?: 'انتقل للأسفل',
        ],
    ];
@endphp


{{-- ============================
     HERO SECTION
============================= --}}

@if($hero?->is_active ?? true)

<section class="hero" id="home">

    <video
        class="hero-video"
        autoplay
        muted
        loop
        playsinline
        aria-hidden="true"
        @if($heroPoster)
            poster="{{ $heroPoster }}"
        @endif
    >
        <source
            src="{{ $heroVideo }}"
            type="video/mp4"
        >
    </video>

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <div class="hero-kicker reveal">
            <span id="dynamicHeroKicker">
                {{ $heroData['en']['kicker'] }}
            </span>
        </div>

        <h1 class="hero-title reveal reveal-delay-1">

            <span id="dynamicHeroLine1">
                {{ $heroData['en']['line1'] }}
            </span>

            <br>

            <span
                id="dynamicHeroLine2"
                class="soft"
            >
                {{ $heroData['en']['line2'] }}
            </span>

            <br>

            <span id="dynamicHeroLine3">
                {{ $heroData['en']['line3'] }}
            </span>

        </h1>

        <p
            id="dynamicHeroDescription"
            class="hero-description reveal reveal-delay-2"
        >
            {{ $heroData['en']['description'] }}
        </p>

        <div class="hero-actions reveal reveal-delay-3">

            <a
                id="dynamicHeroReserveButton"
                class="btn btn-primary"
                href="{{ $heroData['links']['reserve'] }}"
            >

                <span id="dynamicHeroReserveText">
                    {{ $heroData['en']['reserveText'] }}
                </span>

                <svg
                    class="btn-arrow"
                    viewBox="0 0 24 24"
                    fill="none"
                >
                    <path
                        d="M5 12h14M13 6l6 6-6 6"
                        stroke="currentColor"
                        stroke-width="1.6"
                    />
                </svg>

            </a>

            <a
                id="dynamicHeroMenuButton"
                class="btn btn-ghost"
                href="{{ $heroData['links']['menu'] }}"
            >
                <span id="dynamicHeroMenuText">
                    {{ $heroData['en']['menuText'] }}
                </span>
            </a>

        </div>

        <div class="hero-meta reveal reveal-delay-3">

            <div class="hero-meta-item">

                <strong id="dynamicHeroMeta1Title">
                    {{ $heroData['en']['meta1Title'] }}
                </strong>

                <span id="dynamicHeroMeta1Text">
                    {{ $heroData['en']['meta1Text'] }}
                </span>

            </div>

            <div class="hero-meta-item">

                <strong id="dynamicHeroMeta2Title">
                    {{ $heroData['en']['meta2Title'] }}
                </strong>

                <span id="dynamicHeroMeta2Text">
                    {{ $heroData['en']['meta2Text'] }}
                </span>

            </div>

            <div class="hero-meta-item">

                <strong id="dynamicHeroMeta3Title">
                    {{ $heroData['en']['meta3Title'] }}
                </strong>

                <span id="dynamicHeroMeta3Text">
                    {{ $heroData['en']['meta3Text'] }}
                </span>

            </div>

        </div>

    </div>

    <div class="scroll-down reveal reveal-delay-3">

        <a
            id="dynamicHeroScroll"
            href="{{ $heroData['links']['scroll'] }}"
            aria-label="{{ $heroData['en']['scrollAria'] }}"
            class="scroll-down-icon"
        >

            <svg
                width="16"
                height="16"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path d="M6 9l6 6 6-6"/>
            </svg>

        </a>

    </div>

</section>


<script
    type="application/json"
    id="dynamicHeroData"
>
{!! json_encode(
    $heroData,
    JSON_UNESCAPED_UNICODE
    | JSON_UNESCAPED_SLASHES
    | JSON_HEX_TAG
    | JSON_HEX_AMP
    | JSON_HEX_APOS
    | JSON_HEX_QUOT
) !!}
</script>

@endif

{{-- END HERO SECTION --}}