/* ============================================================
   ZAITOONA AL ANDALAUS
   RESERVATION PAGE
   ============================================================ */


/* ============================================================
   BUSINESS CONFIG
   ============================================================ */

const CONFIG = {

    phoneDisplay:
        "+974 3385 8316",

    phoneDial:
        "+97433858316",

    whatsapp:
        "97433858316",

    email:
        "hello@zaitoona.qa",

    address:
        "Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840, Doha Qatar"
};


/* ============================================================
   TRANSLATIONS
   ============================================================ */

const I18N = {

    en: {

        announce1:
            "Doha, Qatar",

        announce2:
            "Restaurant · Shisha · Coffee Lounge",

        announce3:
            "Reservations Recommended",

        navHome:
            "Home",

        navMenu:
            "Menu",

        navExperience:
            "Experience",

        navGallery:
            "Gallery",

        navBlog:
            "Blog",

        navContact:
            "Contact",

        navAbout:
            "About",

        bookTable:
            "Book a table",

        brand:
            "Zaitoona Al Andalaus",

        brandSub:
            "Restaurant · Shisha · Coffee",

        bookEyebrow:
            "Reserve your table",

        bookTitle:
            "Your table is waiting.",

        bookText:
            "Send your booking request directly to our team. For groups, celebrations or preferred lounge seating, add a note and we will confirm availability with you.",

        phoneLabel:
            "Phone / WhatsApp",

        hoursLabel:
            "Opening hours",

        hoursValue:
            "Daily · 10:00 AM – 2:00 AM",

        locationLabel:
            "Location",

        locationValue:
            "Doha, Qatar",

        formName:
            "Your name",

        formPhone:
            "Phone number",

        formDate:
            "Date",

        formTime:
            "Time",

        formGuests:
            "Guests",

        formSeating:
            "Seating preference",

        seatNoPref:
            "No preference",

        seatDining:
            "Dining area",

        seatLounge:
            "Shisha lounge",

        seatOutdoor:
            "Outdoor / terrace",

        formMessage:
            "Message",

        sendBooking:
            "Send booking by WhatsApp",

        formNote:
            "Submitting saves your booking request and opens WhatsApp with your reservation details. Your booking is confirmed only after our team replies.",

        savingBooking:
            "Saving your reservation...",

        bookingSaved:
            "Reservation saved successfully. Opening WhatsApp...",

        bookingError:
            "We could not submit your reservation. Please check your details and try again.",

        footerAbout:
            "A premium Doha restaurant and lounge for Mediterranean food, refined shisha, specialty coffee and relaxed evenings.",

        footerExplore:
            "Explore",

        footerContact:
            "Contact",

        footerFollow:
            "Follow",

        instagram:
            "Instagram",

        tiktok:
            "TikTok",

        rights:
            "All rights reserved.",

        footerLine:
            "Restaurant · Shisha · Coffee Lounge · Doha, Qatar"
    },


    ar: {

        announce1:
            "الدوحة، قطر",

        announce2:
            "مطعم · شيشة · قهوة ولاونج",

        announce3:
            "يفضل الحجز مسبقاً",

        navHome:
            "الرئيسية",

        navMenu:
            "القائمة",

        navExperience:
            "التجربة",

        navGallery:
            "الصور",

        navBlog:
            "المدونة",

        navContact:
            "تواصل",

        navAbout:
            "من نحن",

        bookTable:
            "احجز طاولة",

        brand:
            "زيتونة الأندلس",

        brandSub:
            "مطعم · شيشة · قهوة",

        bookEyebrow:
            "احجز طاولتك",

        bookTitle:
            "طاولتك بانتظارك.",

        bookText:
            "أرسل طلب الحجز مباشرة إلى فريقنا. للمجموعات والمناسبات أو لاختيار جلسة لاونج محددة، أضف ملاحظة وسنؤكد التوفر معك.",

        phoneLabel:
            "الهاتف / واتساب",

        hoursLabel:
            "ساعات العمل",

        hoursValue:
            "يومياً · 10:00 صباحاً – 2:00 فجراً",

        locationLabel:
            "الموقع",

        locationValue:
            "الدوحة، قطر",

        formName:
            "الاسم",

        formPhone:
            "رقم الهاتف",

        formDate:
            "التاريخ",

        formTime:
            "الوقت",

        formGuests:
            "عدد الضيوف",

        formSeating:
            "تفضيل الجلسة",

        seatNoPref:
            "بدون تفضيل",

        seatDining:
            "منطقة الطعام",

        seatLounge:
            "لاونج الشيشة",

        seatOutdoor:
            "جلسة خارجية / تراس",

        formMessage:
            "ملاحظات",

        sendBooking:
            "أرسل الحجز عبر واتساب",

        formNote:
            "سيتم حفظ طلب الحجز ثم فتح واتساب مع تفاصيل الحجز. يصبح الحجز مؤكداً بعد رد فريقنا.",

        savingBooking:
            "جاري حفظ طلب الحجز...",

        bookingSaved:
            "تم حفظ طلب الحجز بنجاح. جاري فتح واتساب...",

        bookingError:
            "تعذر إرسال طلب الحجز. يرجى مراجعة البيانات والمحاولة مرة أخرى.",

        footerAbout:
            "مطعم ولاونج راقٍ في الدوحة للمأكولات المتوسطية والشيشة والقهوة المختصة والأمسيات الهادئة.",

        footerExplore:
            "استكشف",

        footerContact:
            "تواصل",

        footerFollow:
            "تابعنا",

        instagram:
            "إنستغرام",

        tiktok:
            "تيك توك",

        rights:
            "جميع الحقوق محفوظة.",

        footerLine:
            "مطعم · شيشة · قهوة ولاونج · الدوحة، قطر"
    }
};


/* ============================================================
   HELPERS
   ============================================================ */

const $ = (
    selector,
    root = document
) => {

    return root.querySelector(
        selector
    );
};


const $$ = (
    selector,
    root = document
) => {

    return [
        ...root.querySelectorAll(
            selector
        )
    ];
};


/* ============================================================
   LANGUAGE STATE
   ============================================================ */

let lang =
    localStorage.getItem(
        "zaitoona-lang"
    ) || "en";


/* ============================================================
   CONFIG
   ============================================================ */

function applyConfig() {

    $$(".js-phone")
        .forEach(
            element => {

                element.textContent =
                    CONFIG.phoneDisplay;
            }
        );


    $$(".js-phone-link")
        .forEach(
            element => {

                element.href =
                    `tel:${CONFIG.phoneDial}`;
            }
        );


    $$(".js-email")
        .forEach(
            element => {

                element.textContent =
                    CONFIG.email;

                element.href =
                    `mailto:${CONFIG.email}`;
            }
        );


    $$(".js-address")
        .forEach(
            element => {

                element.textContent =
                    CONFIG.address;
            }
        );


    const whatsappUrl =
        `https://wa.me/${CONFIG.whatsapp}`;


    if (
        $("#floatingWhatsapp")
    ) {

        $("#floatingWhatsapp").href =
            whatsappUrl;
    }


    if (
        $("#footerWhatsapp")
    ) {

        $("#footerWhatsapp").href =
            whatsappUrl;
    }


    if (
        $("#mobileCall")
    ) {

        $("#mobileCall").href =
            `tel:${CONFIG.phoneDial}`;
    }
}


/* ============================================================
   HEADER ABOUT / BLOG TRANSLATION
   ============================================================ */

function applyHeaderNavigationLanguage() {

    const translations =
        I18N[lang];


    if (
        !translations
    ) {

        return;
    }


    /*
    |--------------------------------------------------------------------------
    | ABOUT
    |--------------------------------------------------------------------------
    */

    $$(
        'a[href="/about"], ' +
        'a[href$="/about"], ' +
        'a[href="#about"], ' +
        'a[href="/#about"], ' +
        'a[href$="#about"]'
    )
        .forEach(
            link => {

                const child =
                    link.querySelector(
                        '[data-i18n="navAbout"]'
                    );


                if (
                    child
                ) {

                    child.textContent =
                        translations.navAbout;

                    return;
                }


                if (
                    link.children.length === 0
                ) {

                    link.textContent =
                        translations.navAbout;
                }
            }
        );


    /*
    |--------------------------------------------------------------------------
    | BLOG
    |--------------------------------------------------------------------------
    */

    $$(
        'a[href="/blog"], ' +
        'a[href$="/blog"]'
    )
        .forEach(
            link => {

                const child =
                    link.querySelector(
                        '[data-i18n="navBlog"]'
                    );


                if (
                    child
                ) {

                    child.textContent =
                        translations.navBlog;

                    return;
                }


                if (
                    link.children.length === 0
                ) {

                    link.textContent =
                        translations.navBlog;
                }
            }
        );
}


/* ============================================================
   GUEST TRANSLATIONS
   ============================================================ */

function applyGuestTranslations() {

    $$("#guests option")
        .forEach(
            option => {

                const count =
                    option.dataset.guests;


                if (
                    !count
                ) {

                    return;
                }


                if (
                    lang === "ar"
                ) {

                    option.textContent =
                        count === "9+"
                            ? "9+ ضيوف"
                            : `${count} ضيوف`;

                } else {

                    option.textContent =
                        count === "1"
                            ? `${count} guest`
                            : `${count} guests`;
                }
            }
        );
}


/* ============================================================
   LANGUAGE
   ============================================================ */

function applyLanguage(
    newLang
) {

    lang =
        newLang === "ar"
            ? "ar"
            : "en";


    localStorage.setItem(
        "zaitoona-lang",
        lang
    );


    document.documentElement.lang =
        lang;


    document.documentElement.dir =
        lang === "ar"
            ? "rtl"
            : "ltr";


    document.body.classList.toggle(
        "ar",
        lang === "ar"
    );


    /*
    |--------------------------------------------------------------------------
    | TRANSLATE STANDARD ELEMENTS
    |--------------------------------------------------------------------------
    */

    $$("[data-i18n]")
        .forEach(
            element => {

                const key =
                    element.dataset.i18n;


                if (
                    I18N[lang]
                    && Object.prototype
                        .hasOwnProperty
                        .call(
                            I18N[lang],
                            key
                        )
                ) {

                    element.textContent =
                        I18N[lang][key];
                }
            }
        );


    /*
    |--------------------------------------------------------------------------
    | HEADER
    |--------------------------------------------------------------------------
    */

    applyHeaderNavigationLanguage();


    /*
    |--------------------------------------------------------------------------
    | LANGUAGE BUTTONS
    |--------------------------------------------------------------------------
    */

    const buttonText =
        lang === "en"
            ? "<span>EN</span> / <span>AR</span>"
            : "<span>AR</span> / <span>EN</span>";


    if (
        $("#langToggle")
    ) {

        $("#langToggle").innerHTML =
            buttonText;
    }


    if (
        $("#mobileLang")
    ) {

        $("#mobileLang").innerHTML =
            buttonText;
    }


    /*
    |--------------------------------------------------------------------------
    | PLACEHOLDERS
    |--------------------------------------------------------------------------
    */

    if (
        $("#name")
    ) {

        $("#name").placeholder =
            lang === "en"
                ? "Your name"
                : "الاسم";
    }


    if (
        $("#phone")
    ) {

        $("#phone").placeholder =
            "+974 ...";
    }


    if (
        $("#message")
    ) {

        $("#message").placeholder =
            lang === "en"
                ? "Celebration, dietary notes or seating request..."
                : "مناسبة، حساسية غذائية أو طلب جلسة...";
    }


    /*
    |--------------------------------------------------------------------------
    | HIDDEN LANGUAGE
    |--------------------------------------------------------------------------
    */

    if (
        $("#language")
    ) {

        $("#language").value =
            lang;
    }


    applyGuestTranslations();
}


/* ============================================================
   MOBILE MENU
   ============================================================ */

function closeMobile() {

    const mobileMenu =
        $("#mobileMenu");


    if (
        !mobileMenu
    ) {

        return;
    }


    mobileMenu.classList.remove(
        "open"
    );


    document.body.classList.remove(
        "no-scroll"
    );


    mobileMenu.setAttribute(
        "aria-hidden",
        "true"
    );
}


if (
    $("#menuToggle")
) {

    $("#menuToggle")
        .addEventListener(
            "click",
            () => {

                const mobileMenu =
                    $("#mobileMenu");


                if (
                    !mobileMenu
                ) {

                    return;
                }


                mobileMenu.classList.toggle(
                    "open"
                );


                document.body.classList.toggle(
                    "no-scroll"
                );


                mobileMenu.setAttribute(
                    "aria-hidden",

                    mobileMenu
                        .classList
                        .contains(
                            "open"
                        )
                        ? "false"
                        : "true"
                );
            }
        );
}


$$("#mobileMenu a")
    .forEach(
        link => {

            link.addEventListener(
                "click",
                closeMobile
            );
        }
    );


/* ============================================================
   LANGUAGE BUTTONS
   ============================================================ */

if (
    $("#langToggle")
) {

    $("#langToggle")
        .addEventListener(
            "click",
            () => {

                applyLanguage(
                    lang === "en"
                        ? "ar"
                        : "en"
                );
            }
        );
}


if (
    $("#mobileLang")
) {

    $("#mobileLang")
        .addEventListener(
            "click",
            () => {

                applyLanguage(
                    lang === "en"
                        ? "ar"
                        : "en"
                );
            }
        );
}


/* ============================================================
   REVEAL ANIMATION
   ============================================================ */

const revealElements =
    $$(".reveal");


if (
    "IntersectionObserver"
    in window
) {

    const revealObserver =
        new IntersectionObserver(

            entries => {

                entries.forEach(
                    entry => {

                        if (
                            entry.isIntersecting
                        ) {

                            entry.target
                                .classList
                                .add(
                                    "visible"
                                );


                            revealObserver
                                .unobserve(
                                    entry.target
                                );
                        }
                    }
                );
            },

            {
                threshold:
                    0.1,

                rootMargin:
                    "0px 0px -40px"
            }
        );


    revealElements
        .forEach(
            element => {

                revealObserver.observe(
                    element
                );
            }
        );

} else {

    revealElements
        .forEach(
            element => {

                element.classList.add(
                    "visible"
                );
            }
        );
}


/* ============================================================
   MINIMUM RESERVATION DATE
   ============================================================ */

const reservationDate =
    $("#reservation_date");


if (
    reservationDate
) {

    const today =
        new Date();


    today.setMinutes(
        today.getMinutes()
        - today.getTimezoneOffset()
    );


    reservationDate.min =
        today
            .toISOString()
            .split("T")[0];
}


/* ============================================================
   STATUS
   ============================================================ */

function showStatus(
    message,
    type = ""
) {

    const status =
        $("#formStatus");


    if (
        !status
    ) {

        return;
    }


    status.textContent =
        message;


    status.classList.remove(
        "success",
        "error",
        "warning"
    );


    if (
        type
    ) {

        status.classList.add(
            type
        );
    }


    status.classList.add(
        "show"
    );
}


/* ============================================================
   RESERVATION FORM
   ============================================================ */

const bookingForm =
    $("#bookingForm");


if (
    bookingForm
) {

    bookingForm.addEventListener(
        "submit",

        async event => {

            event.preventDefault();


            /*
            |--------------------------------------------------------------------------
            | VALIDATION
            |--------------------------------------------------------------------------
            */

            if (
                !bookingForm.checkValidity()
            ) {

                bookingForm.reportValidity();

                return;
            }


            /*
            |--------------------------------------------------------------------------
            | OPEN WHATSAPP TAB EARLY
            |--------------------------------------------------------------------------
            */

            const whatsappWindow =
                window.open(
                    "about:blank",
                    "_blank"
                );


            const submitButton =
                $("#bookingSubmit");


            if (
                submitButton
            ) {

                submitButton.disabled =
                    true;
            }


            showStatus(
                I18N[lang].savingBooking
            );


            try {

                /*
                |--------------------------------------------------------------------------
                | CSRF
                |--------------------------------------------------------------------------
                */

                const csrfToken =
                    document
                        .querySelector(
                            'meta[name="csrf-token"]'
                        )
                        ?.getAttribute(
                            "content"
                        );


                /*
                |--------------------------------------------------------------------------
                | SEND TO LARAVEL
                |--------------------------------------------------------------------------
                */

                const response =
                    await fetch(
                        bookingForm.action,
                        {
                            method:
                                "POST",

                            headers: {

                                "Accept":
                                    "application/json",

                                "X-Requested-With":
                                    "XMLHttpRequest",

                                "X-CSRF-TOKEN":
                                    csrfToken || "",
                            },

                            body:
                                new FormData(
                                    bookingForm
                                ),
                        }
                    );


                /*
                |--------------------------------------------------------------------------
                | READ JSON
                |--------------------------------------------------------------------------
                */

                let data =
                    {};


                try {

                    data =
                        await response.json();

                } catch (jsonError) {

                    throw new Error(
                        I18N[lang].bookingError
                    );
                }


                /*
                |--------------------------------------------------------------------------
                | SERVER / VALIDATION ERROR
                |--------------------------------------------------------------------------
                */

                if (
                    !response.ok
                ) {

                    let errorMessage =
                        I18N[lang].bookingError;


                    if (
                        data.errors
                    ) {

                        const firstError =
                            Object.values(
                                data.errors
                            )[0];


                        if (
                            Array.isArray(
                                firstError
                            )
                            && firstError[0]
                        ) {

                            errorMessage =
                                firstError[0];
                        }
                    }


                    if (
                        data.message
                        && response.status !== 422
                    ) {

                        errorMessage =
                            data.message;
                    }


                    throw new Error(
                        errorMessage
                    );
                }


                /*
                |--------------------------------------------------------------------------
                | RESERVATION SUCCESS
                |--------------------------------------------------------------------------
                |
                | IMPORTANT:
                |
                | We check data.success here.
                |
                | We do NOT show a customer-facing failure just because
                | an internal email notification had a problem.
                |
                */

                if (
                    data.success === true
                ) {

                    showStatus(
                        I18N[lang].bookingSaved,
                        "success"
                    );

                } else {

                    throw new Error(
                        I18N[lang].bookingError
                    );
                }


                /*
                |--------------------------------------------------------------------------
                | LOG INTERNAL MAIL STATUS
                |--------------------------------------------------------------------------
                |
                | This does NOT affect what the customer sees.
                |
                */

                if (
                    data.mail_sent === false
                ) {

                    console.warn(
                        "Reservation saved, but email notification failed.",
                        data.mail_error || ""
                    );
                }


                /*
                |--------------------------------------------------------------------------
                | RESET FORM
                |--------------------------------------------------------------------------
                */

                bookingForm.reset();


                if (
                    $("#language")
                ) {

                    $("#language").value =
                        lang;
                }


                applyLanguage(
                    lang
                );


                /*
                |--------------------------------------------------------------------------
                | OPEN WHATSAPP
                |--------------------------------------------------------------------------
                */

                if (
                    data.whatsapp_url
                ) {

                    if (
                        whatsappWindow
                        && !whatsappWindow.closed
                    ) {

                        whatsappWindow.location.href =
                            data.whatsapp_url;

                    } else {

                        window.location.href =
                            data.whatsapp_url;
                    }

                } else if (
                    whatsappWindow
                    && !whatsappWindow.closed
                ) {

                    whatsappWindow.close();
                }


            } catch (error) {

                /*
                |--------------------------------------------------------------------------
                | CLOSE EMPTY TAB
                |--------------------------------------------------------------------------
                */

                if (
                    whatsappWindow
                    && !whatsappWindow.closed
                ) {

                    whatsappWindow.close();
                }


                /*
                |--------------------------------------------------------------------------
                | ERROR MESSAGE
                |--------------------------------------------------------------------------
                */

                showStatus(
                    error.message
                    || I18N[lang].bookingError,
                    "error"
                );


                console.error(
                    "Reservation submission failed:",
                    error
                );


            } finally {

                if (
                    submitButton
                ) {

                    submitButton.disabled =
                        false;
                }
            }
        }
    );
}


/* ============================================================
   FOOTER YEAR
   ============================================================ */

if (
    $("#year")
) {

    $("#year").textContent =
        new Date()
            .getFullYear();
}


/* ============================================================
   INITIALIZE
   ============================================================ */

applyConfig();

applyLanguage(
    lang
);