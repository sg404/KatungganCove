# TODO

## Complete
- [x] php/index.php: Replace hero image slider with hero-video.mp4
- [x] css/style.css: Add .hero-video styles
- [x] Restore about section text to original

## New "Why Choose / Katunggan Cove" Section
- [x] php/index.php: Add PHP features array and render left content + right accordion
- [x] css/style.css: Add .why-choose section styles (grid, corners, badges, accordion, mobile)
- [x] js/script.js: Add accordion expand/hover interactions
- [x] Verify layout and interactions

## Footer Redesign
- [x] Reduce footer height (padding 56px -> 24px)
- [x] Mangrove green gradient over low-opacity background image
- [x] Font colors restricted to palette (#c5a34b, #385035, #fff6dc)
- [x] Add Instagram social icon
- [x] Use logo3.svg in footer brand
- [x] Redesign map (rounded corners, gold border, shadow) & reduce map size

## Testimonials ("What Our Guests Say")
- [x] php/index.php: Add testimonials section with 5 guest comments below Cafe
- [x] css/style.css: Rounded-square card styles, stars, author block
- [x] js/script.js: Auto-scrolling carousel every 4s (3/2/1 per view)
- [x] Responsive breakpoints for mobile/tablet

## Section Reorder
- [x] Moved Restaurant & Café to right after About section
- [x] Moved 5-image Why Choose section to below Restaurant & Café

## Accommodation Section on Home
- [x] Replaced Restaurant & Café section with Accommodation section (Standard Queen, Premium Queen, Villa)

## Elegant Accommodation Intro + Trust/Ratings Bar
- [x] php/index.php: PHP arrays for intro content + rating badges, rendered with foreach
- [x] css/accommodation.css: Asymmetric dual-image grid + editorial typography + ratings bar
- [x] Responsive: stacks vertically on tablet/mobile, ratings stack to column

## Bug Fix
- [x] Why Choose 5-image section: restores full width by properly closing the accommodation section (was nested inside `.container accommodation-page`)

## Style Adjustments
- [x] Accommodation background changed to white
- [x] Intro images no longer rounded (border-radius: 0)
- [x] Both intro images same height/width (380px), staggered vertically (left lower, right higher)
