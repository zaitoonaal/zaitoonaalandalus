@if(
    isset($shishaShowcase)
    && $shishaShowcase
)

    @php

        /*
        |--------------------------------------------------------------------------
        | Arabic Fallbacks
        |--------------------------------------------------------------------------
        */

        $eyebrowAr =
            filled(
                $shishaShowcase->eyebrow_ar
            )
                ? $shishaShowcase->eyebrow_ar
                : $shishaShowcase->eyebrow_en;


        $titleAr =
            filled(
                $shishaShowcase->title_ar
            )
                ? $shishaShowcase->title_ar
                : $shishaShowcase->title_en;


        $descriptionAr =
            filled(
                $shishaShowcase->description_ar
            )
                ? $shishaShowcase->description_ar
                : $shishaShowcase->description_en;


        $card1TitleAr =
            filled(
                $shishaShowcase->card_1_title_ar
            )
                ? $shishaShowcase->card_1_title_ar
                : $shishaShowcase->card_1_title_en;


        $card1TextAr =
            filled(
                $shishaShowcase->card_1_text_ar
            )
                ? $shishaShowcase->card_1_text_ar
                : $shishaShowcase->card_1_text_en;


        $card2TitleAr =
            filled(
                $shishaShowcase->card_2_title_ar
            )
                ? $shishaShowcase->card_2_title_ar
                : $shishaShowcase->card_2_title_en;


        $card2TextAr =
            filled(
                $shishaShowcase->card_2_text_ar
            )
                ? $shishaShowcase->card_2_text_ar
                : $shishaShowcase->card_2_text_en;


        $card3TitleAr =
            filled(
                $shishaShowcase->card_3_title_ar
            )
                ? $shishaShowcase->card_3_title_ar
                : $shishaShowcase->card_3_title_en;


        $card3TextAr =
            filled(
                $shishaShowcase->card_3_text_ar
            )
                ? $shishaShowcase->card_3_text_ar
                : $shishaShowcase->card_3_text_en;


        $card4TitleAr =
            filled(
                $shishaShowcase->card_4_title_ar
            )
                ? $shishaShowcase->card_4_title_ar
                : $shishaShowcase->card_4_title_en;


        $card4TextAr =
            filled(
                $shishaShowcase->card_4_text_ar
            )
                ? $shishaShowcase->card_4_text_ar
                : $shishaShowcase->card_4_text_en;


        $legalAr =
            filled(
                $shishaShowcase->legal_text_ar
            )
                ? $shishaShowcase->legal_text_ar
                : $shishaShowcase->legal_text_en;

    @endphp


    <!-- ============================================================
         DYNAMIC SHISHA SHOWCASE
         ============================================================ -->

    <section
        class="shisha-showcase section-sm"
        id="shisha"
    >

        <div class="shisha-grid">


            <!-- ========================================================
                 SHISHA ART
                 DESIGN UNCHANGED
                 ======================================================== -->

            <div
                class="shisha-art reveal"
                aria-label="Stylized shisha illustration"
            >

                <div
                    class="smoke"
                    aria-hidden="true"
                >

                    <span></span>

                    <span></span>

                    <span></span>

                </div>


                <svg
                    class="hookah-svg"
                    viewBox="0 0 520 720"
                    fill="none"
                    aria-hidden="true"
                >

                    <defs>

                        <linearGradient
                            id="goldG"
                            x1="0"
                            y1="0"
                            x2="1"
                            y2="1"
                        >

                            <stop
                                stop-color="#f2e3b9"
                            />

                            <stop
                                offset=".45"
                                stop-color="#b49656"
                            />

                            <stop
                                offset="1"
                                stop-color="#6f5426"
                            />

                        </linearGradient>


                        <linearGradient
                            id="glassG"
                            x1="0"
                            y1="0"
                            x2="0"
                            y2="1"
                        >

                            <stop
                                stop-color="#88976c"
                                stop-opacity=".95"
                            />

                            <stop
                                offset="1"
                                stop-color="#314129"
                                stop-opacity=".8"
                            />

                        </linearGradient>

                    </defs>


                    <path
                        d="M255 82h50l-7 34h-36l-7-34Z"
                        fill="url(#goldG)"
                    />


                    <path
                        d="M270 116h20v222h-20z"
                        fill="url(#goldG)"
                    />


                    <path
                        d="M243 147h74l-9 19h-56l-9-19Z"
                        fill="url(#goldG)"
                    />


                    <path
                        d="M247 338h66l25 57-18 23 42 150c9 31-14 62-47 62h-70c-33 0-56-31-47-62l42-150-18-23 25-57Z"
                        fill="url(#glassG)"
                        stroke="#d9c591"
                        stroke-width="3"
                    />


                    <path
                        d="M221 395h118"
                        stroke="#d9c591"
                        stroke-width="3"
                        opacity=".7"
                    />


                    <path
                        d="M229 418h102"
                        stroke="#d9c591"
                        stroke-width="2"
                        opacity=".45"
                    />


                    <path
                        d="M246 630h68"
                        stroke="#d9c591"
                        stroke-width="4"
                    />


                    <path
                        d="M206 650h148"
                        stroke="#b49656"
                        stroke-width="5"
                        stroke-linecap="round"
                    />


                    <path
                        d="M289 216c88-4 138 19 138 73 0 32-18 62-51 78"
                        stroke="url(#goldG)"
                        stroke-width="11"
                        stroke-linecap="round"
                    />


                    <path
                        d="M376 367c-44 17-68 45-77 85"
                        stroke="#d9c591"
                        stroke-width="9"
                        stroke-linecap="round"
                    />


                    <path
                        d="M296 447c-9 28-10 62 1 92"
                        stroke="#11180f"
                        stroke-width="15"
                        stroke-linecap="round"
                    />


                    <circle
                        cx="298"
                        cy="447"
                        r="8"
                        fill="#d9c591"
                    />


                    <path
                        d="M260 82c5-29 34-29 39 0"
                        stroke="#d9c591"
                        stroke-width="4"
                    />

                </svg>

            </div>


            <!-- ========================================================
                 CONTENT
                 ======================================================== -->

            <div class="shisha-copy">


                @if(
                    filled(
                        $shishaShowcase->eyebrow_en
                    )
                )

                    <div
                        class="eyebrow reveal"

                        data-db-i18n

                        data-en="{{ $shishaShowcase->eyebrow_en }}"

                        data-ar="{{ $eyebrowAr }}"
                    >
                        {{ $shishaShowcase->eyebrow_en }}
                    </div>

                @endif


                <h2
                    class="section-title reveal"

                    data-db-i18n

                    data-en="{{ $shishaShowcase->title_en }}"

                    data-ar="{{ $titleAr }}"
                >
                    {{ $shishaShowcase->title_en }}
                </h2>


                @if(
                    filled(
                        $shishaShowcase->description_en
                    )
                )

                    <p
                        class="lede reveal"

                        data-db-i18n

                        data-en="{{ $shishaShowcase->description_en }}"

                        data-ar="{{ $descriptionAr }}"
                    >
                        {{ $shishaShowcase->description_en }}
                    </p>

                @endif


                <!-- ====================================================
                     CARDS
                     ==================================================== -->

                <div class="shisha-cards">


                    @if(
                        filled(
                            $shishaShowcase->card_1_title_en
                        )
                        ||
                        filled(
                            $shishaShowcase->card_1_text_en
                        )
                    )

                        <div class="shisha-card reveal">

                            <strong
                                data-db-i18n

                                data-en="{{ $shishaShowcase->card_1_title_en }}"

                                data-ar="{{ $card1TitleAr }}"
                            >
                                {{ $shishaShowcase->card_1_title_en }}
                            </strong>


                            <span
                                data-db-i18n

                                data-en="{{ $shishaShowcase->card_1_text_en }}"

                                data-ar="{{ $card1TextAr }}"
                            >
                                {{ $shishaShowcase->card_1_text_en }}
                            </span>

                        </div>

                    @endif


                    @if(
                        filled(
                            $shishaShowcase->card_2_title_en
                        )
                        ||
                        filled(
                            $shishaShowcase->card_2_text_en
                        )
                    )

                        <div
                            class="shisha-card reveal reveal-delay-1"
                        >

                            <strong
                                data-db-i18n

                                data-en="{{ $shishaShowcase->card_2_title_en }}"

                                data-ar="{{ $card2TitleAr }}"
                            >
                                {{ $shishaShowcase->card_2_title_en }}
                            </strong>


                            <span
                                data-db-i18n

                                data-en="{{ $shishaShowcase->card_2_text_en }}"

                                data-ar="{{ $card2TextAr }}"
                            >
                                {{ $shishaShowcase->card_2_text_en }}
                            </span>

                        </div>

                    @endif


                    @if(
                        filled(
                            $shishaShowcase->card_3_title_en
                        )
                        ||
                        filled(
                            $shishaShowcase->card_3_text_en
                        )
                    )

                        <div
                            class="shisha-card reveal reveal-delay-2"
                        >

                            <strong
                                data-db-i18n

                                data-en="{{ $shishaShowcase->card_3_title_en }}"

                                data-ar="{{ $card3TitleAr }}"
                            >
                                {{ $shishaShowcase->card_3_title_en }}
                            </strong>


                            <span
                                data-db-i18n

                                data-en="{{ $shishaShowcase->card_3_text_en }}"

                                data-ar="{{ $card3TextAr }}"
                            >
                                {{ $shishaShowcase->card_3_text_en }}
                            </span>

                        </div>

                    @endif


                    @if(
                        filled(
                            $shishaShowcase->card_4_title_en
                        )
                        ||
                        filled(
                            $shishaShowcase->card_4_text_en
                        )
                    )

                        <div
                            class="shisha-card reveal reveal-delay-3"
                        >

                            <strong
                                data-db-i18n

                                data-en="{{ $shishaShowcase->card_4_title_en }}"

                                data-ar="{{ $card4TitleAr }}"
                            >
                                {{ $shishaShowcase->card_4_title_en }}
                            </strong>


                            <span
                                data-db-i18n

                                data-en="{{ $shishaShowcase->card_4_text_en }}"

                                data-ar="{{ $card4TextAr }}"
                            >
                                {{ $shishaShowcase->card_4_text_en }}
                            </span>

                        </div>

                    @endif


                </div>


                <!-- ====================================================
                     LEGAL TEXT
                     ==================================================== -->

                @if(
                    filled(
                        $shishaShowcase->legal_text_en
                    )
                )

                    <p
                        class="shisha-legal"

                        data-db-i18n

                        data-en="{{ $shishaShowcase->legal_text_en }}"

                        data-ar="{{ $legalAr }}"
                    >
                        {{ $shishaShowcase->legal_text_en }}
                    </p>

                @endif


            </div>

        </div>

    </section>

    <!-- End Dynamic Shisha Showcase -->

@endif