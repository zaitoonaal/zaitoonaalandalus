<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="theme-color"
        content="#fbfaf6"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <meta
        name="description"
        content="Book a table at Zaitoona Al Andalaus — a premium restaurant, shisha and coffee lounge in Doha, Qatar."
    >

    <title>
        Book a Table | Zaitoona Al Andalaus
    </title>


    <!-- Fonts -->

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


    <!-- CSS -->

    <link
        rel="stylesheet"
        href="{{ asset('assets/frontend/css/reserveatable.css') }}?v=5.0"
    >

</head>


<body>


    @include('Home.header')


    <main class="reservation-main">


        <!-- =====================================================
             BACKGROUND
        ====================================================== -->

        <div
            class="bg-mesh"
            aria-hidden="true"
        >

            <div
                class="mesh-blob blob-1"
            ></div>

            <div
                class="mesh-blob blob-2"
            ></div>

            <div
                class="mesh-blob blob-3"
            ></div>

        </div>


        <!-- =====================================================
             RESERVATION
        ====================================================== -->

        <section
            class="booking section"
            id="reservation"
        >

            <div
                class="container booking-wrap"
            >


                <!-- =================================================
                     LEFT INFORMATION
                ================================================== -->

                <div class="booking-info">


                    <div
                        class="eyebrow reveal"
                        data-i18n="bookEyebrow"
                    >
                        Reserve your table
                    </div>


                    <h1
                        class="section-title reveal"
                        data-i18n="bookTitle"
                    >
                        Your table is waiting.
                    </h1>


                    <p
                        class="lede reveal"
                        data-i18n="bookText"
                    >
                        Send your booking request directly to our team.
                        For groups, celebrations or preferred lounge seating,
                        add a note and we will confirm availability with you.
                    </p>


                    <div
                        class="booking-info-box reveal"
                    >


                        <div class="info-line">

                            <span
                                data-i18n="phoneLabel"
                            >
                                Phone / WhatsApp
                            </span>

                            <strong class="js-phone">
                                +974 3385 8316
                            </strong>

                        </div>


                        <div class="info-line">

                            <span
                                data-i18n="hoursLabel"
                            >
                                Opening hours
                            </span>

                            <strong
                                data-i18n="hoursValue"
                            >
                                Daily · 10:00 AM – 2:00 AM
                            </strong>

                        </div>


                        <div class="info-line">

                            <span
                                data-i18n="locationLabel"
                            >
                                Location
                            </span>

                            <strong
                                data-i18n="locationValue"
                            >
                                Doha, Qatar
                            </strong>

                        </div>


                    </div>

                </div>


                <!-- =================================================
                     RESERVATION FORM
                ================================================== -->

                <form
                    class="glass-form reveal"
                    id="bookingForm"
                    action="{{ route('reservations.store') }}"
                    method="POST"
                    novalidate
                >

                    @csrf


                    <input
                        type="hidden"
                        id="language"
                        name="language"
                        value="en"
                    >


                    <div class="form-grid">


                        <!-- Name -->

                        <div class="field stagger-anim">

                            <label
                                for="name"
                                data-i18n="formName"
                            >
                                Your name
                            </label>

                            <input
                                id="name"
                                name="name"
                                type="text"
                                autocomplete="name"
                                maxlength="120"
                                required
                                placeholder="Your name"
                            >

                        </div>


                        <!-- Phone -->

                        <div class="field stagger-anim">

                            <label
                                for="phone"
                                data-i18n="formPhone"
                            >
                                Phone number
                            </label>

                            <input
                                id="phone"
                                name="phone"
                                type="tel"
                                inputmode="tel"
                                autocomplete="tel"
                                maxlength="50"
                                required
                                placeholder="+974 ..."
                            >

                        </div>


                        <!-- Date -->

                        <div class="field stagger-anim">

                            <label
                                for="reservation_date"
                                data-i18n="formDate"
                            >
                                Date
                            </label>

                            <input
                                id="reservation_date"
                                name="reservation_date"
                                type="date"
                                required
                            >

                        </div>


                        <!-- Time -->

                        <div class="field stagger-anim">

                            <label
                                for="reservation_time"
                                data-i18n="formTime"
                            >
                                Time
                            </label>

                            <input
                                id="reservation_time"
                                name="reservation_time"
                                type="time"
                                required
                            >

                        </div>


                        <!-- Guests -->

                        <div class="field stagger-anim">

                            <label
                                for="guests"
                                data-i18n="formGuests"
                            >
                                Guests
                            </label>

                            <select
                                id="guests"
                                name="guests"
                                required
                            >

                                <option
                                    value="2"
                                    data-guests="2"
                                >
                                    2 guests
                                </option>

                                <option
                                    value="3"
                                    data-guests="3"
                                >
                                    3 guests
                                </option>

                                <option
                                    value="4"
                                    data-guests="4"
                                >
                                    4 guests
                                </option>

                                <option
                                    value="5"
                                    data-guests="5"
                                >
                                    5 guests
                                </option>

                                <option
                                    value="6"
                                    data-guests="6"
                                >
                                    6 guests
                                </option>

                                <option
                                    value="7"
                                    data-guests="7"
                                >
                                    7 guests
                                </option>

                                <option
                                    value="8"
                                    data-guests="8"
                                >
                                    8 guests
                                </option>

                                <option
                                    value="9+"
                                    data-guests="9+"
                                >
                                    9+ guests
                                </option>

                            </select>

                        </div>


                        <!-- Seating -->

                        <div class="field stagger-anim">

                            <label
                                for="seating"
                                data-i18n="formSeating"
                            >
                                Seating preference
                            </label>

                            <select
                                id="seating"
                                name="seating"
                                required
                            >

                                <option
                                    value="no-preference"
                                    data-i18n="seatNoPref"
                                >
                                    No preference
                                </option>

                                <option
                                    value="dining-area"
                                    data-i18n="seatDining"
                                >
                                    Dining area
                                </option>

                                <option
                                    value="shisha-lounge"
                                    data-i18n="seatLounge"
                                >
                                    Shisha lounge
                                </option>

                                <option
                                    value="outdoor-terrace"
                                    data-i18n="seatOutdoor"
                                >
                                    Outdoor / terrace
                                </option>

                            </select>

                        </div>


                        <!-- Message -->

                        <div
                            class="field full stagger-anim"
                        >

                            <label
                                for="message"
                                data-i18n="formMessage"
                            >
                                Message
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="4"
                                maxlength="1500"
                                placeholder="Celebration, dietary notes or seating request..."
                            ></textarea>

                        </div>


                    </div>


                    <!-- Submit -->

                    <button
                        class="btn btn-primary form-submit stagger-anim"
                        type="submit"
                        id="bookingSubmit"
                    >

                        <span
                            id="bookingSubmitText"
                            data-i18n="sendBooking"
                        >
                            Send booking by WhatsApp
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
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />

                        </svg>

                    </button>


                    <p
                        class="form-note stagger-anim"
                        data-i18n="formNote"
                    >
                        Submitting saves your booking request and opens
                        WhatsApp with your reservation details. Your booking
                        is confirmed only after our team replies.
                    </p>


                    <div
                        class="form-status"
                        id="formStatus"
                        role="status"
                        aria-live="polite"
                    ></div>


                </form>


            </div>

        </section>


        @include('Home.instagramgrid')


    </main>


    @include('Home.footer')


    <!-- JS -->

    <script
        src="{{ asset('assets/frontend/js/reserveatable.js') }}?v=5.2"
    ></script>


</body>

</html>