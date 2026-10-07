@php

    /*
    |--------------------------------------------------------------------------
    | SEATING
    |--------------------------------------------------------------------------
    */

    $seatingLabel = match ($record->seating) {

        'dining-area' =>
            'Dining Area',

        'shisha-lounge' =>
            'Shisha Lounge',

        'outdoor-terrace' =>
            'Outdoor / Terrace',

        default =>
            'No Preference',
    };


    /*
    |--------------------------------------------------------------------------
    | STATUS
    |--------------------------------------------------------------------------
    */

    $status =
        $record->status ?: 'pending';

    $statusLabel =
        ucfirst($status);


    $statusBackground = match ($status) {

        'confirmed' =>
            '#dcfce7',

        'completed' =>
            '#e0f2fe',

        'cancelled' =>
            '#fee2e2',

        default =>
            '#fff7ed',
    };


    $statusColor = match ($status) {

        'confirmed' =>
            '#166534',

        'completed' =>
            '#075985',

        'cancelled' =>
            '#991b1b',

        default =>
            '#9a3412',
    };


    /*
    |--------------------------------------------------------------------------
    | CUSTOMER WHATSAPP
    |--------------------------------------------------------------------------
    */

    $customerWhatsapp =
        preg_replace(
            '/\D+/',
            '',
            (string) $record->phone
        );

@endphp


<style>

    /*
    |--------------------------------------------------------------------------
    | ROOT
    |--------------------------------------------------------------------------
    */

    .zaitoona-reservation-details {
        width: 100%;
        max-width: 100%;
        overflow: hidden;

        font-family:
            Inter,
            ui-sans-serif,
            system-ui,
            -apple-system,
            BlinkMacSystemFont,
            "Segoe UI",
            sans-serif;

        box-sizing: border-box;
    }


    .zaitoona-reservation-details *,
    .zaitoona-reservation-details *::before,
    .zaitoona-reservation-details *::after {
        box-sizing: border-box;
    }


    /*
    |--------------------------------------------------------------------------
    | HEADER
    |--------------------------------------------------------------------------
    */

    .zaitoona-details-header {
        width: 100%;

        overflow: hidden;

        border-radius: 14px;

        background:
            linear-gradient(
                135deg,
                #465831 0%,
                #5f7346 100%
            );

        padding:
            18px
            20px;

        color: #ffffff;

        margin-bottom: 14px;
    }


    .zaitoona-details-header-inner {
        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 15px;

        min-width: 0;
    }


    .zaitoona-details-brand {
        display: flex;

        align-items: center;

        gap: 12px;

        min-width: 0;

        flex: 1;
    }


    .zaitoona-details-brand > div {
        min-width: 0;
    }


    .zaitoona-details-logo {
        width: 46px;
        height: 46px;

        flex:
            0
            0
            46px;

        object-fit: contain;

        border-radius: 9px;

        padding: 4px;

        background:
            rgba(
                255,
                255,
                255,
                0.96
            );
    }


    .zaitoona-details-brand-title {
        margin: 0;

        font-family:
            Georgia,
            "Times New Roman",
            serif;

        font-size: 19px;

        line-height: 1.2;

        font-weight: 600;

        overflow-wrap: anywhere;
    }


    .zaitoona-details-brand-subtitle {
        margin-top: 3px;

        font-size: 8px;

        text-transform: uppercase;

        letter-spacing: 1.6px;

        line-height: 1.5;

        color:
            rgba(
                255,
                255,
                255,
                0.78
            );
    }


    .zaitoona-details-id {
        flex: 0 0 auto;

        text-align: right;
    }


    .zaitoona-details-id-label {
        font-size: 8px;

        text-transform: uppercase;

        letter-spacing: 1.2px;

        color:
            rgba(
                255,
                255,
                255,
                0.72
            );
    }


    .zaitoona-details-id-number {
        margin-top: 3px;

        font-size: 19px;

        font-weight: 700;

        line-height: 1;
    }


    /*
    |--------------------------------------------------------------------------
    | GRID
    |--------------------------------------------------------------------------
    */

    .zaitoona-details-grid {
        width: 100%;

        display: grid;

        grid-template-columns:
            repeat(
                2,
                minmax(0, 1fr)
            );

        gap: 9px 10px;
    }


    /*
    |--------------------------------------------------------------------------
    | SECTION TITLE
    |--------------------------------------------------------------------------
    */

    .zaitoona-details-section-title {
        grid-column:
            1 / -1;

        margin-top: 3px;

        padding-bottom: 6px;

        border-bottom:
            1px solid
            rgba(
                148,
                163,
                184,
                0.2
            );

        font-family:
            Georgia,
            "Times New Roman",
            serif;

        font-size: 15px;

        line-height: 1.3;

        font-weight: 600;

        color: #26301f;
    }


    .dark .zaitoona-details-section-title {
        color: #f4f4f5;
    }


    /*
    |--------------------------------------------------------------------------
    | CARD
    |--------------------------------------------------------------------------
    */

    .zaitoona-details-card {
        min-width: 0;

        border:
            1px solid
            rgba(
                148,
                163,
                184,
                0.22
            );

        border-radius: 11px;

        background:
            rgba(
                255,
                255,
                255,
                0.66
            );

        padding:
            11px
            13px;

        overflow: hidden;
    }


    .dark .zaitoona-details-card {
        background:
            rgba(
                17,
                24,
                39,
                0.42
            );

        border-color:
            rgba(
                255,
                255,
                255,
                0.08
            );
    }


    .zaitoona-details-card.full {
        grid-column:
            1 / -1;
    }


    /*
    |--------------------------------------------------------------------------
    | LABEL
    |--------------------------------------------------------------------------
    */

    .zaitoona-details-label {
        margin-bottom: 4px;

        font-size: 8px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: 1px;

        line-height: 1.4;

        color: #8a9380;
    }


    .dark .zaitoona-details-label {
        color: #aab4a0;
    }


    /*
    |--------------------------------------------------------------------------
    | VALUE
    |--------------------------------------------------------------------------
    */

    .zaitoona-details-value {
        max-width: 100%;

        color: #22291d;

        font-size: 12.5px;

        line-height: 1.45;

        font-weight: 600;

        overflow-wrap: anywhere;

        word-break: break-word;
    }


    .dark .zaitoona-details-value {
        color: #f4f4f5;
    }


    /*
    |--------------------------------------------------------------------------
    | MESSAGE
    |--------------------------------------------------------------------------
    */

    .zaitoona-details-message {
        width: 100%;

        min-height: 55px;

        border-radius: 8px;

        padding:
            10px
            12px;

        background: #f7f8f3;

        border-left:
            3px solid
            #586d3f;

        color: #444b3f;

        font-size: 12px;

        line-height: 1.55;

        white-space: pre-wrap;

        overflow-wrap: anywhere;

        word-break: break-word;
    }


    .dark .zaitoona-details-message {
        background:
            rgba(
                255,
                255,
                255,
                0.05
            );

        color: #e4e4e7;
    }


    /*
    |--------------------------------------------------------------------------
    | STATUS BADGE
    |--------------------------------------------------------------------------
    */

    .zaitoona-details-status {
        max-width: 100%;

        display: inline-flex;

        align-items: center;

        gap: 5px;

        border-radius: 999px;

        padding:
            5px
            9px;

        font-size: 10px;

        font-weight: 700;

        line-height: 1.2;
    }


    .zaitoona-details-dot {
        width: 5px;
        height: 5px;

        min-width: 5px;

        border-radius: 50%;

        background:
            currentColor;
    }


    /*
    |--------------------------------------------------------------------------
    | EMAIL BADGE
    |--------------------------------------------------------------------------
    */

    .zaitoona-details-email-sent,
    .zaitoona-details-email-not-sent {
        display: inline-flex;

        align-items: center;

        border-radius: 999px;

        padding:
            5px
            9px;

        font-size: 10px;

        line-height: 1.2;

        font-weight: 700;
    }


    .zaitoona-details-email-sent {
        background: #dcfce7;

        color: #166534;
    }


    .zaitoona-details-email-not-sent {
        background: #fff7ed;

        color: #9a3412;
    }


    /*
    |--------------------------------------------------------------------------
    | ACTION AREA
    |--------------------------------------------------------------------------
    */

    .zaitoona-details-actions {
        width: 100%;

        display: flex;

        align-items: center;

        flex-wrap: wrap;

        gap: 7px;

        margin-top: 13px;

        padding-top: 12px;

        border-top:
            1px solid
            rgba(
                148,
                163,
                184,
                0.2
            );
    }


    .zaitoona-details-action {
        display: inline-flex;

        align-items: center;

        justify-content: center;

        min-height: 34px;

        border-radius: 8px;

        padding:
            7px
            13px;

        text-decoration: none;

        font-size: 10.5px;

        line-height: 1.2;

        font-weight: 700;

        text-align: center;

        transition:
            transform
            0.18s ease,
            opacity
            0.18s ease;
    }


    .zaitoona-details-action:hover {
        transform:
            translateY(
                -1px
            );

        opacity: 0.92;
    }


    .zaitoona-details-action.whatsapp {
        background: #536a3c;

        color: #ffffff;
    }


    .zaitoona-details-action.call {
        background: #f1f3ed;

        color: #455437;

        border:
            1px solid
            #dfe4d8;
    }


    .dark .zaitoona-details-action.call {
        background:
            rgba(
                255,
                255,
                255,
                0.07
            );

        color: #e4e4e7;

        border-color:
            rgba(
                255,
                255,
                255,
                0.1
            );
    }


    /*
    |--------------------------------------------------------------------------
    | FOOTER
    |--------------------------------------------------------------------------
    */

    .zaitoona-details-footer {
        width: 100%;

        margin-top: 10px;

        text-align: center;

        color: #92978d;

        font-size: 8.5px;

        line-height: 1.4;

        overflow-wrap: anywhere;
    }


    /*
    |--------------------------------------------------------------------------
    | TABLET
    |--------------------------------------------------------------------------
    */

    @media (
        max-width: 768px
    ) {

        .zaitoona-details-header {
            padding:
                16px
                17px;
        }


        .zaitoona-details-brand-title {
            font-size: 18px;
        }


        .zaitoona-details-grid {
            gap: 9px;
        }


        .zaitoona-details-card {
            padding:
                11px
                12px;
        }
    }


    /*
    |--------------------------------------------------------------------------
    | MOBILE
    |--------------------------------------------------------------------------
    */

    @media (
        max-width: 640px
    ) {

        /*
        |--------------------------------------------------------------------------
        | HEADER
        |--------------------------------------------------------------------------
        */

        .zaitoona-details-header {
            border-radius: 12px;

            padding:
                15px
                14px;

            margin-bottom: 12px;
        }


        .zaitoona-details-header-inner {
            flex-direction:
                column;

            align-items:
                flex-start;

            gap: 11px;
        }


        .zaitoona-details-brand {
            width: 100%;

            gap: 10px;
        }


        .zaitoona-details-logo {
            width: 42px;
            height: 42px;

            flex-basis: 42px;
        }


        .zaitoona-details-brand-title {
            font-size: 17px;
        }


        .zaitoona-details-brand-subtitle {
            font-size: 7px;

            letter-spacing: 1.1px;
        }


        /*
        |--------------------------------------------------------------------------
        | RESERVATION NUMBER
        |--------------------------------------------------------------------------
        */

        .zaitoona-details-id {
            width: 100%;

            display: flex;

            align-items: center;

            justify-content:
                space-between;

            gap: 10px;

            text-align: left;

            padding-top: 9px;

            border-top:
                1px solid
                rgba(
                    255,
                    255,
                    255,
                    0.18
                );
        }


        .zaitoona-details-id-number {
            margin-top: 0;

            font-size: 17px;
        }


        /*
        |--------------------------------------------------------------------------
        | SINGLE COLUMN
        |--------------------------------------------------------------------------
        */

        .zaitoona-details-grid {
            grid-template-columns:
                minmax(
                    0,
                    1fr
                );

            gap: 8px;
        }


        .zaitoona-details-card.full,
        .zaitoona-details-section-title {
            grid-column: 1;
        }


        /*
        |--------------------------------------------------------------------------
        | TITLES
        |--------------------------------------------------------------------------
        */

        .zaitoona-details-section-title {
            margin-top: 5px;

            padding-bottom: 5px;

            font-size: 14px;
        }


        /*
        |--------------------------------------------------------------------------
        | CARDS
        |--------------------------------------------------------------------------
        */

        .zaitoona-details-card {
            border-radius: 10px;

            padding:
                11px
                12px;
        }


        .zaitoona-details-label {
            font-size: 8px;
        }


        .zaitoona-details-value {
            font-size: 12.5px;
        }


        /*
        |--------------------------------------------------------------------------
        | MESSAGE
        |--------------------------------------------------------------------------
        */

        .zaitoona-details-message {
            min-height: 52px;

            padding:
                10px
                11px;

            font-size: 12px;
        }


        /*
        |--------------------------------------------------------------------------
        | MOBILE BUTTONS
        |--------------------------------------------------------------------------
        */

        .zaitoona-details-actions {
            flex-direction:
                column;

            align-items:
                stretch;

            gap: 7px;

            margin-top: 12px;

            padding-top: 11px;
        }


        .zaitoona-details-action {
            width: 100%;

            min-height: 42px;

            padding:
                10px
                12px;

            font-size: 12px;
        }


        /*
        |--------------------------------------------------------------------------
        | FOOTER
        |--------------------------------------------------------------------------
        */

        .zaitoona-details-footer {
            margin-top: 11px;

            padding:
                0
                3px;

            font-size: 8.5px;
        }
    }


    /*
    |--------------------------------------------------------------------------
    | SMALL MOBILE
    |--------------------------------------------------------------------------
    */

    @media (
        max-width: 420px
    ) {

        .zaitoona-details-header {
            padding:
                13px
                12px;
        }


        .zaitoona-details-logo {
            width: 38px;
            height: 38px;

            flex-basis: 38px;
        }


        .zaitoona-details-brand-title {
            font-size: 16px;
        }


        .zaitoona-details-card {
            padding:
                10px
                11px;
        }


        .zaitoona-details-section-title {
            font-size: 13px;
        }


        .zaitoona-details-value {
            font-size: 12px;
        }
    }

</style>


<div class="zaitoona-reservation-details">

    {{-- ============================================================
         HEADER
         ============================================================ --}}

    <div class="zaitoona-details-header">

        <div class="zaitoona-details-header-inner">

            <div class="zaitoona-details-brand">

                <img
                    src="{{ asset('assets/frontend/img/image1.png') }}"
                    alt="Zaitoona Al Andalaus"
                    class="zaitoona-details-logo"
                >

                <div>

                    <h2 class="zaitoona-details-brand-title">
                        Zaitoona Al Andalaus
                    </h2>

                    <div class="zaitoona-details-brand-subtitle">
                        Table Reservation Details
                    </div>

                </div>

            </div>


            <div class="zaitoona-details-id">

                <div class="zaitoona-details-id-label">
                    Reservation
                </div>

                <div class="zaitoona-details-id-number">
                    #{{ $record->id }}
                </div>

            </div>

        </div>

    </div>


    {{-- ============================================================
         DETAILS GRID
         ============================================================ --}}

    <div class="zaitoona-details-grid">


        {{-- CUSTOMER --}}

        <div class="zaitoona-details-section-title">
            Customer Information
        </div>


        <div class="zaitoona-details-card">

            <div class="zaitoona-details-label">
                Customer Name
            </div>

            <div class="zaitoona-details-value">
                {{ $record->name }}
            </div>

        </div>


        <div class="zaitoona-details-card">

            <div class="zaitoona-details-label">
                Phone Number
            </div>

            <div class="zaitoona-details-value">
                {{ $record->phone }}
            </div>

        </div>


        {{-- RESERVATION --}}

        <div class="zaitoona-details-section-title">
            Reservation Information
        </div>


        <div class="zaitoona-details-card">

            <div class="zaitoona-details-label">
                Reservation Date
            </div>

            <div class="zaitoona-details-value">

                {{ $record->reservation_date
                    ? \Carbon\Carbon::parse(
                        $record->reservation_date
                    )->format('d M Y')
                    : '—'
                }}

            </div>

        </div>


        <div class="zaitoona-details-card">

            <div class="zaitoona-details-label">
                Reservation Time
            </div>

            <div class="zaitoona-details-value">

                {{ $record->reservation_time
                    ? \Carbon\Carbon::parse(
                        $record->reservation_time
                    )->format('h:i A')
                    : '—'
                }}

            </div>

        </div>


        <div class="zaitoona-details-card">

            <div class="zaitoona-details-label">
                Number of Guests
            </div>

            <div class="zaitoona-details-value">

                {{ $record->guests }}

                {{ $record->guests == 1
                    ? 'Guest'
                    : 'Guests'
                }}

            </div>

        </div>


        <div class="zaitoona-details-card">

            <div class="zaitoona-details-label">
                Seating Preference
            </div>

            <div class="zaitoona-details-value">
                {{ $seatingLabel }}
            </div>

        </div>


        {{-- STATUS --}}

        <div class="zaitoona-details-card">

            <div class="zaitoona-details-label">
                Reservation Status
            </div>

            <div>

                <span
                    class="zaitoona-details-status"
                    style="
                        background:
                            {{ $statusBackground }};
                        color:
                            {{ $statusColor }};
                    "
                >

                    <span class="zaitoona-details-dot"></span>

                    {{ $statusLabel }}

                </span>

            </div>

        </div>


        {{-- EMAIL --}}

        <div class="zaitoona-details-card">

            <div class="zaitoona-details-label">
                Email Notification
            </div>

            <div>

                @if(
                    $record->email_sent_at
                )

                    <span class="zaitoona-details-email-sent">
                        Email Sent
                    </span>

                @else

                    <span class="zaitoona-details-email-not-sent">
                        Not Sent
                    </span>

                @endif

            </div>

        </div>


        {{-- LANGUAGE --}}

        <div class="zaitoona-details-card">

            <div class="zaitoona-details-label">
                Customer Language
            </div>

            <div class="zaitoona-details-value">

                {{ $record->language === 'ar'
                    ? 'Arabic'
                    : 'English'
                }}

            </div>

        </div>


        {{-- SUBMITTED --}}

        <div class="zaitoona-details-card">

            <div class="zaitoona-details-label">
                Submitted At
            </div>

            <div class="zaitoona-details-value">

                {{ $record->created_at
                    ? $record->created_at->format(
                        'd M Y - h:i A'
                    )
                    : '—'
                }}

            </div>

        </div>


        {{-- MESSAGE --}}

        <div class="zaitoona-details-section-title">
            Customer Message
        </div>


        <div
            class="
                zaitoona-details-card
                full
            "
        >

            <div class="zaitoona-details-label">
                Message / Special Request
            </div>

            <div class="zaitoona-details-message">

                {{ $record->message
                    ?: 'No additional message or special request was provided.'
                }}

            </div>

        </div>

    </div>


    {{-- ============================================================
         QUICK ACTIONS
         ============================================================ --}}

    <div class="zaitoona-details-actions">

        @if(
            filled(
                $customerWhatsapp
            )
        )

            <a
                href="https://wa.me/{{ $customerWhatsapp }}"
                target="_blank"
                rel="noopener noreferrer"
                class="
                    zaitoona-details-action
                    whatsapp
                "
            >
                Open Customer WhatsApp
            </a>

        @endif


        <a
            href="tel:{{ $record->phone }}"
            class="
                zaitoona-details-action
                call
            "
        >
            Call Customer
        </a>

    </div>


    {{-- ============================================================
         FOOTER
         ============================================================ --}}

    <div class="zaitoona-details-footer">

        Reservation #{{ $record->id }}

        &nbsp;•&nbsp;

        Zaitoona Al Andalaus

        &nbsp;•&nbsp;

        Doha, Qatar

    </div>

</div>