@php

    $experienceSections =
        $experienceSections
        ?? collect();

@endphp


@if(
    $experienceSections->isNotEmpty()
)

    <!-- ============================================================
         DYNAMIC EXPERIENCE SECTION
         ============================================================ -->

    <section
        class="experience"
        id="experience"
    >

        @foreach(
            $experienceSections
            as $experience
        )

            @php

                /*
                |--------------------------------------------------------------------------
                | IMAGE
                |--------------------------------------------------------------------------
                */

                if (
                    filled(
                        $experience->image
                    )
                ) {

                    $experienceImage =
                        asset(
                            'storage/'
                            . ltrim(
                                $experience->image,
                                '/'
                            )
                        );

                } elseif (
                    filled(
                        $experience->image_url
                    )
                ) {

                    $experienceImage =
                        $experience->image_url;

                } else {

                    $experienceImage =
                        asset(
                            'assets/frontend/img/image1.png'
                        );
                }


                /*
                |--------------------------------------------------------------------------
                | ARABIC FALLBACKS
                |--------------------------------------------------------------------------
                */

                $eyebrowAr =
                    filled(
                        $experience->eyebrow_ar
                    )
                        ? $experience->eyebrow_ar
                        : $experience->eyebrow_en;


                $titleAr =
                    filled(
                        $experience->title_ar
                    )
                        ? $experience->title_ar
                        : $experience->title_en;


                $descriptionAr =
                    filled(
                        $experience->description_ar
                    )
                        ? $experience->description_ar
                        : $experience->description_en;


                $list1Ar =
                    filled(
                        $experience->list_1_ar
                    )
                        ? $experience->list_1_ar
                        : $experience->list_1_en;


                $list2Ar =
                    filled(
                        $experience->list_2_ar
                    )
                        ? $experience->list_2_ar
                        : $experience->list_2_en;


                $list3Ar =
                    filled(
                        $experience->list_3_ar
                    )
                        ? $experience->list_3_ar
                        : $experience->list_3_en;


                $buttonLabelAr =
                    filled(
                        $experience->button_label_ar
                    )
                        ? $experience->button_label_ar
                        : $experience->button_label_en;


                $imageAltAr =
                    filled(
                        $experience->image_alt_ar
                    )
                        ? $experience->image_alt_ar
                        : $experience->image_alt_en;


                /*
                |--------------------------------------------------------------------------
                | BUTTON CLASS
                |--------------------------------------------------------------------------
                */

                $buttonClass =
                    $experience->button_style
                    === 'primary'
                        ? 'btn btn-primary reveal'
                        : 'btn reveal';

            @endphp


            <div class="split">


                <!-- ========================================================
                     IMAGE
                     ======================================================== -->

                <div class="split-media reveal">

                    <img
                        src="{{ $experienceImage }}"

                        alt="{{ $experience->image_alt_en ?: $experience->title_en }}"

                        loading="lazy"

                        decoding="async"

                        data-db-alt

                        data-alt-en="{{ $experience->image_alt_en ?: $experience->title_en }}"

                        data-alt-ar="{{ $imageAltAr ?: $titleAr }}"
                    >

                </div>


                <!-- ========================================================
                     CONTENT
                     ======================================================== -->

                <div class="split-copy">


                    @if(
                        filled(
                            $experience->eyebrow_en
                        )
                    )

                        <div
                            class="eyebrow reveal"

                            data-db-i18n

                            data-en="{{ $experience->eyebrow_en }}"

                            data-ar="{{ $eyebrowAr }}"
                        >
                            {{ $experience->eyebrow_en }}
                        </div>

                    @endif


                    <h2
                        class="section-title reveal"

                        data-db-i18n

                        data-en="{{ $experience->title_en }}"

                        data-ar="{{ $titleAr }}"
                    >
                        {{ $experience->title_en }}
                    </h2>


                    @if(
                        filled(
                            $experience->description_en
                        )
                    )

                        <p
                            class="lede reveal"

                            data-db-i18n

                            data-en="{{ $experience->description_en }}"

                            data-ar="{{ $descriptionAr }}"
                        >
                            {{ $experience->description_en }}
                        </p>

                    @endif


                    <!-- ====================================================
                         LIST
                         ==================================================== -->

                    @if(
                        filled(
                            $experience->list_1_en
                        )
                        ||
                        filled(
                            $experience->list_2_en
                        )
                        ||
                        filled(
                            $experience->list_3_en
                        )
                    )

                        <div class="split-list reveal">


                            @if(
                                filled(
                                    $experience->list_1_en
                                )
                            )

                                <div>

                                    <i>
                                        01
                                    </i>

                                    <span
                                        data-db-i18n

                                        data-en="{{ $experience->list_1_en }}"

                                        data-ar="{{ $list1Ar }}"
                                    >
                                        {{ $experience->list_1_en }}
                                    </span>

                                </div>

                            @endif


                            @if(
                                filled(
                                    $experience->list_2_en
                                )
                            )

                                <div>

                                    <i>
                                        02
                                    </i>

                                    <span
                                        data-db-i18n

                                        data-en="{{ $experience->list_2_en }}"

                                        data-ar="{{ $list2Ar }}"
                                    >
                                        {{ $experience->list_2_en }}
                                    </span>

                                </div>

                            @endif


                            @if(
                                filled(
                                    $experience->list_3_en
                                )
                            )

                                <div>

                                    <i>
                                        03
                                    </i>

                                    <span
                                        data-db-i18n

                                        data-en="{{ $experience->list_3_en }}"

                                        data-ar="{{ $list3Ar }}"
                                    >
                                        {{ $experience->list_3_en }}
                                    </span>

                                </div>

                            @endif


                        </div>

                    @endif


                    <!-- ====================================================
                         BUTTON
                         ==================================================== -->

                    @if(
                        filled(
                            $experience->button_label_en
                        )
                        &&
                        filled(
                            $experience->button_url
                        )
                    )

                        <a
                            href="{{ $experience->button_url }}"

                            class="{{ $buttonClass }}"
                        >

                            <span
                                data-db-i18n

                                data-en="{{ $experience->button_label_en }}"

                                data-ar="{{ $buttonLabelAr }}"
                            >
                                {{ $experience->button_label_en }}
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

                    @endif


                </div>

            </div>

        @endforeach

    </section>

    <!-- End Dynamic Experience Section -->

@endif