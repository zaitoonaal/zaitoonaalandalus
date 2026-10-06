<!-- About Intro Section -->
<section class="section" id="about">
    <div class="container intro-grid">
        <div class="intro-sticky reveal">
            <div class="eyebrow" data-i18n="introEyebrow"></div>
            <h2 class="section-title" data-i18n="introTitle"></h2>
        </div>
        <div>
            <p class="intro-copy reveal" data-i18n="introCopy"></p>
            <div class="intro-details">
                <div class="detail-card reveal"><h3 data-i18n="detail1Title"></h3><p data-i18n="detail1Text"></p></div>
                <div class="detail-card reveal reveal-delay-1"><h3 data-i18n="detail2Title"></h3><p data-i18n="detail2Text"></p></div>
            </div>
        </div>
    </div>

    <div class="container feature-grid">
        <article class="feature-card reveal">
            <img src="{{ !empty($aboutSettings->feat1_image) ? Storage::url($aboutSettings->feat1_image) : 'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=1200&q=85' }}" alt="Premium restaurant dining" loading="lazy">
            <div class="feature-content"><div class="feature-num">01 · <span data-i18n="feat1Label"></span></div><h3 class="feature-title" data-i18n="feat1Title"></h3><p class="feature-text" data-i18n="feat1Text"></p></div>
        </article>
        <article class="feature-card reveal reveal-delay-1">
            <img src="{{ !empty($aboutSettings->feat2_image) ? Storage::url($aboutSettings->feat2_image) : 'https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&w=1200&q=85' }}" alt="Elegant restaurant lounge" loading="lazy">
            <div class="feature-content"><div class="feature-num">02 · <span data-i18n="feat2Label"></span></div><h3 class="feature-title" data-i18n="feat2Title"></h3><p class="feature-text" data-i18n="feat2Text"></p></div>
        </article>
        <article class="feature-card reveal reveal-delay-2">
            <img src="{{ !empty($aboutSettings->feat3_image) ? Storage::url($aboutSettings->feat3_image) : 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1200&q=85' }}" alt="Specialty coffee" loading="lazy">
            <div class="feature-content"><div class="feature-num">03 · <span data-i18n="feat3Label"></span></div><h3 class="feature-title" data-i18n="feat3Title"></h3><p class="feature-text" data-i18n="feat3Text"></p></div>
        </article>
    </div>
</section>
<!-- End of About Intro Section -->