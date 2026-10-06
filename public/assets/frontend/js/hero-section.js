/* =========================================================
   DYNAMIC HERO SECTION
   Only manages Hero content.
   Main script.js remains untouched.
   ========================================================= */

(function () {

    const heroDataElement =
        document.getElementById('dynamicHeroData');

    if (!heroDataElement) {
        return;
    }

    let heroData;

    try {

        heroData =
            JSON.parse(heroDataElement.textContent);

    } catch (error) {

        console.error(
            'Unable to load Hero section data.',
            error
        );

        return;
    }


    /*
    |--------------------------------------------------------------------------
    | CURRENT LANGUAGE
    |--------------------------------------------------------------------------
    */

    function getCurrentLanguage() {

        const savedLanguage =
            localStorage.getItem('zaitoona-lang');

        return savedLanguage === 'ar'
            ? 'ar'
            : 'en';
    }


    /*
    |--------------------------------------------------------------------------
    | HELPERS
    |--------------------------------------------------------------------------
    */

    function setText(id, value) {

        const element =
            document.getElementById(id);

        if (!element) {
            return;
        }

        if (
            value === undefined
            || value === null
        ) {
            return;
        }

        element.textContent = value;
    }


    function setHref(id, value) {

        const element =
            document.getElementById(id);

        if (!element || !value) {
            return;
        }

        element.setAttribute(
            'href',
            value
        );
    }


    /*
    |--------------------------------------------------------------------------
    | APPLY HERO LANGUAGE
    |--------------------------------------------------------------------------
    */

    function applyHeroLanguage() {

        const language =
            getCurrentLanguage();

        const content =
            heroData[language]
            || heroData.en;

        if (!content) {
            return;
        }


        /*
        |--------------------------------------------------------------
        | Main text
        |--------------------------------------------------------------
        */

        setText(
            'dynamicHeroKicker',
            content.kicker
        );

        setText(
            'dynamicHeroLine1',
            content.line1
        );

        setText(
            'dynamicHeroLine2',
            content.line2
        );

        setText(
            'dynamicHeroLine3',
            content.line3
        );

        setText(
            'dynamicHeroDescription',
            content.description
        );


        /*
        |--------------------------------------------------------------
        | Buttons
        |--------------------------------------------------------------
        */

        setText(
            'dynamicHeroReserveText',
            content.reserveText
        );

        setText(
            'dynamicHeroMenuText',
            content.menuText
        );

        setHref(
            'dynamicHeroReserveButton',
            heroData.links?.reserve
        );

        setHref(
            'dynamicHeroMenuButton',
            heroData.links?.menu
        );


        /*
        |--------------------------------------------------------------
        | Hero information
        |--------------------------------------------------------------
        */

        setText(
            'dynamicHeroMeta1Title',
            content.meta1Title
        );

        setText(
            'dynamicHeroMeta1Text',
            content.meta1Text
        );

        setText(
            'dynamicHeroMeta2Title',
            content.meta2Title
        );

        setText(
            'dynamicHeroMeta2Text',
            content.meta2Text
        );

        setText(
            'dynamicHeroMeta3Title',
            content.meta3Title
        );

        setText(
            'dynamicHeroMeta3Text',
            content.meta3Text
        );


        /*
        |--------------------------------------------------------------
        | Scroll button
        |--------------------------------------------------------------
        */

        const scrollButton =
            document.getElementById(
                'dynamicHeroScroll'
            );

        if (scrollButton) {

            scrollButton.setAttribute(
                'href',
                heroData.links?.scroll
                || '#about'
            );

            scrollButton.setAttribute(
                'aria-label',
                content.scrollAria
                || ''
            );
        }
    }


    /*
    |--------------------------------------------------------------------------
    | INITIALIZE
    |--------------------------------------------------------------------------
    */

    function initializeHero() {

        /*
         * On initial page load.
         */

        applyHeroLanguage();


        /*
         * Desktop language button.
         *
         * Main script.js changes localStorage first.
         * Then this script updates Hero content.
         */

        const desktopLanguageButton =
            document.getElementById(
                'langToggle'
            );

        if (desktopLanguageButton) {

            desktopLanguageButton
                .addEventListener(
                    'click',
                    function () {

                        setTimeout(
                            applyHeroLanguage,
                            0
                        );

                    }
                );
        }


        /*
         * Mobile language button.
         */

        const mobileLanguageButton =
            document.getElementById(
                'mobileLang'
            );

        if (mobileLanguageButton) {

            mobileLanguageButton
                .addEventListener(
                    'click',
                    function () {

                        setTimeout(
                            applyHeroLanguage,
                            0
                        );

                    }
                );
        }


        /*
         * Language changed in another browser tab.
         */

        window.addEventListener(
            'storage',
            function (event) {

                if (
                    event.key
                    === 'zaitoona-lang'
                ) {

                    applyHeroLanguage();
                }
            }
        );
    }


    /*
    |--------------------------------------------------------------------------
    | START
    |--------------------------------------------------------------------------
    */

    if (
        document.readyState
        === 'loading'
    ) {

        document.addEventListener(
            'DOMContentLoaded',
            initializeHero
        );

    } else {

        initializeHero();
    }

})();