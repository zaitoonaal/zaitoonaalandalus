<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        New Table Reservation
    </title>
</head>

<body style="
    margin:0;
    padding:0;
    background:#f4f3ed;
    font-family:Arial, Helvetica, sans-serif;
    color:#24281f;
">

<table
    width="100%"
    cellpadding="0"
    cellspacing="0"
    border="0"
    style="
        width:100%;
        background:#f4f3ed;
        padding:40px 15px;
    "
>

    <tr>

        <td align="center">

            <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
                border="0"
                style="
                    max-width:650px;
                    background:#ffffff;
                    border-radius:18px;
                    overflow:hidden;
                    box-shadow:0 8px 30px rgba(0,0,0,0.06);
                "
            >

                {{-- HEADER --}}
                <tr>

                    <td
                        align="center"
                        style="
                            background:#536b39;
                            padding:35px 25px;
                            color:#ffffff;
                        "
                    >

                        <div style="
                            font-family:Georgia, 'Times New Roman', serif;
                            font-size:30px;
                            font-weight:bold;
                            letter-spacing:0.5px;
                            margin-bottom:7px;
                        ">
                            Zaitoona Al Andalaus
                        </div>

                        <div style="
                            font-size:11px;
                            text-transform:uppercase;
                            letter-spacing:3px;
                            opacity:0.9;
                        ">
                            Restaurant · Shisha · Coffee
                        </div>

                    </td>

                </tr>


                {{-- TITLE --}}
                <tr>

                    <td
                        style="
                            padding:35px 40px 15px;
                        "
                    >

                        <div style="
                            font-size:12px;
                            text-transform:uppercase;
                            letter-spacing:2px;
                            color:#859070;
                            font-weight:bold;
                            margin-bottom:10px;
                        ">
                            Reservation Notification
                        </div>

                        <h1 style="
                            margin:0;
                            font-family:Georgia, 'Times New Roman', serif;
                            font-size:30px;
                            line-height:1.3;
                            color:#20271c;
                        ">
                            New Table Reservation
                        </h1>

                        <p style="
                            margin:12px 0 0;
                            color:#74796e;
                            font-size:14px;
                            line-height:1.7;
                        ">
                            A new reservation request has been submitted
                            through the Zaitoona Al Andalaus website.
                        </p>

                    </td>

                </tr>


                {{-- RESERVATION ID --}}
                <tr>

                    <td
                        style="
                            padding:10px 40px 20px;
                        "
                    >

                        <div style="
                            background:#f4f5ef;
                            border:1px solid #e4e7dd;
                            border-radius:12px;
                            padding:18px 20px;
                        ">

                            <span style="
                                color:#7e8476;
                                font-size:12px;
                                text-transform:uppercase;
                                letter-spacing:1px;
                            ">
                                Reservation ID
                            </span>

                            <div style="
                                margin-top:5px;
                                font-size:22px;
                                font-weight:bold;
                                color:#536b39;
                            ">
                                #{{ $reservation->id }}
                            </div>

                        </div>

                    </td>

                </tr>


                {{-- DETAILS --}}
                <tr>

                    <td
                        style="
                            padding:0 40px 30px;
                        "
                    >

                        <table
                            width="100%"
                            cellpadding="0"
                            cellspacing="0"
                            border="0"
                        >

                            <tr>

                                <td
                                    style="
                                        padding:14px 0;
                                        border-bottom:1px solid #eeeeea;
                                        width:42%;
                                        color:#82877c;
                                        font-size:13px;
                                    "
                                >
                                    Customer Name
                                </td>

                                <td
                                    align="right"
                                    style="
                                        padding:14px 0;
                                        border-bottom:1px solid #eeeeea;
                                        font-size:14px;
                                        font-weight:bold;
                                        color:#24281f;
                                    "
                                >
                                    {{ $reservation->name }}
                                </td>

                            </tr>


                            <tr>

                                <td style="
                                    padding:14px 0;
                                    border-bottom:1px solid #eeeeea;
                                    color:#82877c;
                                    font-size:13px;
                                ">
                                    Phone Number
                                </td>

                                <td
                                    align="right"
                                    style="
                                        padding:14px 0;
                                        border-bottom:1px solid #eeeeea;
                                        font-size:14px;
                                        font-weight:bold;
                                    "
                                >
                                    {{ $reservation->phone }}
                                </td>

                            </tr>


                            <tr>

                                <td style="
                                    padding:14px 0;
                                    border-bottom:1px solid #eeeeea;
                                    color:#82877c;
                                    font-size:13px;
                                ">
                                    Reservation Date
                                </td>

                                <td
                                    align="right"
                                    style="
                                        padding:14px 0;
                                        border-bottom:1px solid #eeeeea;
                                        font-size:14px;
                                        font-weight:bold;
                                    "
                                >
                                    {{ \Carbon\Carbon::parse($reservation->reservation_date)->format('d M Y') }}
                                </td>

                            </tr>


                            <tr>

                                <td style="
                                    padding:14px 0;
                                    border-bottom:1px solid #eeeeea;
                                    color:#82877c;
                                    font-size:13px;
                                ">
                                    Reservation Time
                                </td>

                                <td
                                    align="right"
                                    style="
                                        padding:14px 0;
                                        border-bottom:1px solid #eeeeea;
                                        font-size:14px;
                                        font-weight:bold;
                                    "
                                >
                                    {{ \Carbon\Carbon::parse($reservation->reservation_time)->format('h:i A') }}
                                </td>

                            </tr>


                            <tr>

                                <td style="
                                    padding:14px 0;
                                    border-bottom:1px solid #eeeeea;
                                    color:#82877c;
                                    font-size:13px;
                                ">
                                    Guests
                                </td>

                                <td
                                    align="right"
                                    style="
                                        padding:14px 0;
                                        border-bottom:1px solid #eeeeea;
                                        font-size:14px;
                                        font-weight:bold;
                                    "
                                >
                                    {{ $reservation->guests }}
                                </td>

                            </tr>


                            <tr>

                                <td style="
                                    padding:14px 0;
                                    border-bottom:1px solid #eeeeea;
                                    color:#82877c;
                                    font-size:13px;
                                ">
                                    Seating Preference
                                </td>

                                <td
                                    align="right"
                                    style="
                                        padding:14px 0;
                                        border-bottom:1px solid #eeeeea;
                                        font-size:14px;
                                        font-weight:bold;
                                    "
                                >
                                    @switch($reservation->seating)

                                        @case('dining-area')
                                            Dining Area
                                            @break

                                        @case('shisha-lounge')
                                            Shisha Lounge
                                            @break

                                        @case('outdoor-terrace')
                                            Outdoor / Terrace
                                            @break

                                        @default
                                            No Preference

                                    @endswitch
                                </td>

                            </tr>


                            <tr>

                                <td style="
                                    padding:14px 0;
                                    border-bottom:1px solid #eeeeea;
                                    color:#82877c;
                                    font-size:13px;
                                ">
                                    Language
                                </td>

                                <td
                                    align="right"
                                    style="
                                        padding:14px 0;
                                        border-bottom:1px solid #eeeeea;
                                        font-size:14px;
                                        font-weight:bold;
                                    "
                                >
                                    {{ $reservation->language === 'ar' ? 'Arabic' : 'English' }}
                                </td>

                            </tr>


                            <tr>

                                <td style="
                                    padding:14px 0;
                                    color:#82877c;
                                    font-size:13px;
                                ">
                                    Status
                                </td>

                                <td
                                    align="right"
                                    style="
                                        padding:14px 0;
                                    "
                                >

                                    <span style="
                                        display:inline-block;
                                        background:#fff4d8;
                                        color:#946c08;
                                        border-radius:100px;
                                        padding:6px 13px;
                                        font-size:12px;
                                        font-weight:bold;
                                    ">
                                        Pending
                                    </span>

                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>


                {{-- MESSAGE --}}
                <tr>

                    <td
                        style="
                            padding:0 40px 35px;
                        "
                    >

                        <div style="
                            font-size:12px;
                            text-transform:uppercase;
                            letter-spacing:1.5px;
                            color:#7f8577;
                            font-weight:bold;
                            margin-bottom:10px;
                        ">
                            Customer Message
                        </div>

                        <div style="
                            background:#f8f8f5;
                            border-left:4px solid #536b39;
                            padding:18px 20px;
                            border-radius:6px;
                            color:#444a3f;
                            font-size:14px;
                            line-height:1.7;
                        ">

                            {{ $reservation->message ?: 'No additional message provided.' }}

                        </div>

                    </td>

                </tr>


                {{-- CONTACT BUTTON --}}
                <tr>

                    <td
                        align="center"
                        style="
                            padding:0 40px 35px;
                        "
                    >

                        <a
                            href="https://wa.me/{{ preg_replace('/\D+/', '', $reservation->phone) }}"
                            style="
                                display:inline-block;
                                background:#536b39;
                                color:#ffffff;
                                text-decoration:none;
                                padding:14px 28px;
                                border-radius:50px;
                                font-size:13px;
                                font-weight:bold;
                                letter-spacing:0.5px;
                            "
                        >
                            Contact Customer on WhatsApp
                        </a>

                    </td>

                </tr>


                {{-- SUBMITTED --}}
                <tr>

                    <td
                        style="
                            background:#f8f8f5;
                            padding:22px 40px;
                            border-top:1px solid #ecece6;
                        "
                    >

                        <p style="
                            margin:0;
                            color:#81867c;
                            font-size:12px;
                            line-height:1.7;
                            text-align:center;
                        ">

                            Submitted on

                            <strong style="
                                color:#4c5148;
                            ">
                                {{ $reservation->created_at?->format('d M Y - h:i A') }}
                            </strong>

                        </p>

                    </td>

                </tr>


                {{-- FOOTER --}}
                <tr>

                    <td
                        align="center"
                        style="
                            padding:25px 30px;
                            background:#20271c;
                            color:#ffffff;
                        "
                    >

                        <div style="
                            font-family:Georgia, 'Times New Roman', serif;
                            font-size:18px;
                            margin-bottom:7px;
                        ">
                            Zaitoona Al Andalaus
                        </div>

                        <div style="
                            font-size:10px;
                            letter-spacing:2px;
                            text-transform:uppercase;
                            color:#bbc3af;
                        ">
                            Restaurant · Shisha · Coffee · Doha, Qatar
                        </div>

                    </td>

                </tr>

            </table>


            <div style="
                max-width:650px;
                text-align:center;
                padding:20px;
                color:#999e94;
                font-size:11px;
                line-height:1.6;
            ">

                This is an automatic reservation notification
                from the Zaitoona Al Andalaus website.

            </div>

        </td>

    </tr>

</table>

</body>
</html>