<!-- Footer Area -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="/" class="brand">
                        <img src="{{ asset('assets/frontend/img/image1.png') }}" class="brand-mark" alt="Zaitoona Al Andalus">
                        <span class="brand-copy"><strong class="brand-name" data-i18n="brand">Zaitoona Al Andalus</strong><small class="brand-sub" data-i18n="brandSub">Restaurant · Shisha · Coffee</small></span>
                    </a>
                    <p data-i18n="footerAbout">A premium Doha restaurant and lounge for Mediterranean food, refined shisha, specialty coffee and relaxed evenings.</p>
                </div>
                <div>
                    <div class="footer-title" data-i18n="footerExplore">Explore</div>
                    <div class="footer-links">
                        <a href="/#experience" data-i18n="navExperience">Experience</a>
                        <a href="/menu" data-i18n="navMenu">Menu</a>
                        <a href="/gallerypage" data-i18n="navGallery">Gallery</a>
                        <a href="/blog" data-i18n="navBlog">Blog</a>
                        <a href="/reserveatable" data-i18n="bookTable">Book a table</a>
                    </div>
                </div>
                <div>
                    <div class="footer-title" data-i18n="footerContact">Contact</div>
                    <div class="footer-links">
                        <a class="js-phone-link" href="tel:+97400000000"><span class="js-phone">+974 0000 0000</span></a>
                        <a class="js-email" href="mailto:hello@zaitoona.qa">hello@zaitoona.qa</a>
                        <span class="js-address">Doha, Qatar</span>
                    </div>
                </div>
                <div>
                    <div class="footer-title" data-i18n="footerFollow">Follow</div>
                    <div class="footer-links">
                        <a href="#" data-i18n="instagram">Instagram</a>
                        <a href="#" data-i18n="tiktok">TikTok</a>
                        <a id="footerWhatsapp" href="#">WhatsApp</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <span>© <span id="year"></span> Zaitoona Al Andalus. <span data-i18n="rights">All rights reserved.</span></span>
                <span data-i18n="footerLine">Restaurant · Shisha · Coffee Lounge · Doha, Qatar</span>
                <span>Website developed by <a href="https://ositandweb.com" target="_blank" rel="noopener">O's it and web solutions</a></span>
            </div>
        </div>
    </footer>
    <!-- End of Footer Area -->

    <!-- Floating Action Buttons -->
    <a class="floating-whatsapp" id="floatingWhatsapp" href="#" target="_blank" rel="noopener" aria-label="WhatsApp Zaitoona Al Andalus">
        <svg viewBox="0 0 32 32"><path d="M16.04 3.2A12.77 12.77 0 0 0 5.06 22.5L3.2 28.8l6.48-1.7a12.77 12.77 0 1 0 6.36-23.9Zm0 2.3a10.47 10.47 0 0 1 8.92 15.94 10.46 10.46 0 0 1-14.7 3.43l-.45-.27-3.84 1 1.03-3.74-.3-.48A10.47 10.47 0 0 1 16.04 5.5Zm-3.08 4.7c-.2-.45-.4-.46-.59-.47h-.5c-.18 0-.47.07-.72.34-.25.27-.95.93-.95 2.27s.98 2.64 1.12 2.82c.14.18 1.93 2.95 4.67 4.14.65.28 1.16.45 1.56.58.65.21 1.25.18 1.72.11.52-.08 1.61-.66 1.84-1.3.23-.64.23-1.2.16-1.31-.07-.11-.25-.18-.52-.32-.27-.14-1.61-.8-1.86-.89-.25-.09-.43-.14-.61.14-.18.27-.7.89-.86 1.07-.16.18-.32.2-.59.07-.27-.14-1.14-.42-2.17-1.34-.8-.71-1.34-1.59-1.5-1.86-.16-.27-.02-.42.12-.55.12-.12.27-.32.41-.48.14-.16.18-.27.27-.45.09-.18.05-.34-.02-.48-.07-.14-.62-1.49-.85-2.04Z"/></svg>
    </a>

    <div class="mobile-action-bar">
        <a id="mobileCall" href="tel:+97400000000" data-i18n="callUs">Call us</a>
        <a href="/reserveatable" data-i18n="bookTable">Book a table</a>
    </div>
    <!-- End of Floating Action Buttons -->

    <!-- Image Lightbox Modal -->
    <div class="lightbox" id="lightbox" aria-hidden="true">
        <button class="lightbox-close" id="lightboxClose" aria-label="Close image">×</button>
        <img id="lightboxImage" alt="Gallery preview">
    </div>
    <!-- End of Image Lightbox Modal -->