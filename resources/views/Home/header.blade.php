<!-- Modern Animated Background -->
<div class="bg-animation">
    <div class="bg-orb orb-1"></div>
    <div class="bg-orb orb-2"></div>
    <div class="bg-orb orb-3"></div>
</div>

<!-- Announcement Bar -->
<div class="announcement">
    <div class="announcement-inner">
        <span data-i18n="announce1">Doha, Qatar</span><span class="announcement-dot"></span>
        <span data-i18n="announce2">Restaurant · Shisha · Coffee Lounge</span><span class="announcement-dot optional"></span>
        <span class="optional" data-i18n="announce3">Reservations Recommended</span>
    </div>
</div>

<!-- Main Header / Navbar -->
<header class="header" id="header">
    <div class="nav">
        <nav class="nav-left" aria-label="Primary navigation">
            <a class="nav-link" href="/" data-i18n="navHome">Home</a>
            <a class="nav-link" href="/menu" data-i18n="navMenu">Menu</a>
            <a class="nav-link" href="/#experience" data-i18n="navExperience">Experience</a>
            <a class="nav-link" href="/gallerypage" data-i18n="navGallery">Gallery</a>
            <a class="nav-link" href="/blog" data-i18n="navBlog">Blog</a>
        </nav>

        <a href="/" class="brand" aria-label="Zaitoona Al Andalus home">
            <img src="{{ asset('assets/frontend/img/image1.png') }}" class="brand-mark" alt="Zaitoona Al Andalus">
            <span class="brand-copy">
                <strong class="brand-name" data-i18n="brand">Zaitoona Al Andalus</strong>
                <small class="brand-sub" data-i18n="brandSub">Restaurant · Shisha · Coffee</small>
            </span>
        </a>

        <div class="nav-right">
            <a class="nav-link" href="/contact" data-i18n="navContact">Contact</a>
            <a class="nav-link" href="/#about" data-i18n="About">About</a>
            <button class="lang-btn" id="langToggle" type="button" aria-label="Switch language"><span>EN</span> / <span>AR</span></button>
            <a class="btn btn-primary nav-book" href="/reserveatable" data-i18n="bookTable">Book a table</a>
            <button class="menu-toggle" id="menuToggle" type="button" aria-label="Open menu"><span></span></button>
        </div>
    </div>
</header>
<!-- End of Main Header / Navbar -->

<!-- Mobile Menu Overlay -->
<div class="mobile-menu" id="mobileMenu" aria-hidden="true">
    <nav>
        <a href="/" data-i18n="navHome">Home</a>
        <a href="/menu" data-i18n="navMenu">Menu</a>
        <a href="/#experience" data-i18n="navExperience">Experience</a>
        <a href="/gallerypage" data-i18n="navGallery">Gallery</a>
        <a href="/blog" data-i18n="navBlog">Blog</a>
        <a href="/reserveatable" data-i18n="bookTable">Book a table</a>
        <a href="/contact" data-i18n="navContact">Contact</a>
        <a href="/#about" data-i18n="About">About</a>
    </nav>
    <div class="mobile-meta">
        <button class="lang-btn" id="mobileLang" type="button" style="color:var(--ink)">EN / AR</button>
        <span style="color:var(--muted)">Doha · Qatar</span>
    </div>
</div>
<!-- End of Mobile Menu Overlay -->