<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katunggan Cove Resort</title>
  <link rel="icon" href="../images/logo3.svg" type="image/svg+xml">

  <link rel="stylesheet" href="../css/header-footer.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/accommodation.css">

  <?php include '../includes/fonts.php'; ?>
</head>
<body>

<?php include '../includes/header.php'; ?>

<!-- ================= HERO ================= -->
<section class="hero">

<video class="hero-video" autoplay muted loop playsinline poster="../images/image1.webp">
    <source src="../videos/hero-video.mp4" type="video/mp4">
  </video>

  <div class="overlay"></div>

  <div class="hero-content"></div>

</section>

<!-- ================= ABOUT ================= -->
<section class="section about-section">
  <div class="container about-grid">
    


<div class="about-content">
      <h2>Find Your Quiet Here</h2>
      <p>
        Katunggan Cove Resort is a private nature sanctuary nestled in
        Guimaras, offering serene stays and immersive island experiences
        with refined yet affordable comfort. As a premium boutique
        eco-resort, we embrace quiet luxury and sustainability—welcoming
        families, couples, barkada groups, small teams, and nature lovers
        seeking peace.
      </p>
</div>

</div>
</section>

<!-- ================= WHY CHOOSE (IMAGES ABOVE ACCOMMODATION INTRO) ================= -->
<?php
  $features = [
[
      'title'       => 'Quiet Luxury',
      'description' => 'Unwind in refined, thoughtfully designed spaces that prioritize calm, comfort, and understated elegance.',
      'icon'        => 'leaf',
      'image_url'   => '../images/image1.webp',
      'link'        => '#',
    ],
    [
      'title'       => 'Sustainable Living',
      'description' => 'Embrace eco-conscious stays rooted in nature, from lush mangroves to responsible, low-impact hospitality.',
      'icon'        => 'sprout',
      'image_url'   => '../images/image2.webp',
      'link'        => '#',
    ],
    [
      'title'       => 'Island Experiences',
      'description' => 'Discover authentic island adventures, breathtaking sunsets, and memories that stay with you long after.',
      'icon'        => 'waves',
      'image_url'   => '../images/image3.webp',
      'link'        => '#',
    ],
    [
      'title'       => 'Private Beaches',
      'description' => 'Step onto serene, secluded shores and feel the soft sand between your toes in total peace.',
      'icon'        => 'leaf',
      'image_url'   => '../images/image4.webp',
      'link'        => '#',
    ],
    [
      'title'       => 'Sunset Views',
      'description' => 'Watch golden skies melt over the cove—a daily show of color and calm you will never forget.',
      'icon'        => 'waves',
      'image_url'   => '../images/image5.webp',
      'link'        => '#',
    ],
  ];
?>

<section class="why-choose" id="why-choose">
  <div class="why-choose-inner">

<!-- TOP: IMAGES (duplicated twice for seamless one-way marquee) -->
    <div class="why-accordion">
      <div class="why-track">
      <?php for ($set = 0; $set < 2; $set++): ?>
        <?php foreach ($features as $i => $feature): ?>
          <div class="why-panel" data-feature="<?php echo htmlspecialchars($feature['title']); ?>">
            <img src="<?php echo htmlspecialchars($feature['image_url']); ?>" alt="<?php echo htmlspecialchars($feature['title']); ?>" loading="lazy">
            <div class="why-panel-overlay"></div>
            <div class="why-panel-label">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 4.9 5.4.8-3.9 3.8.9 5.4-4.8-2.5-4.8 2.5.9-5.4L4.2 7.7l5.4-.8L12 2z"/></svg>
              <span><?php echo htmlspecialchars($feature['title']); ?></span>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endfor; ?>
      </div>
    </div>

</div>
</section>

<!-- ================= ACCOMMODATION ================= -->
<section class="section bg-light home-accomm-section">
  <div class="container accommodation-page">

    <?php
      // Accommodation intro section content
      $accommIntro = [
        'subtitle'    => 'Welcome to Katunggan Cove',
        'title'       => 'Luxury hotel in the heart of nature',
        'body'        => 'Nestled within lush mangroves and the serene shores of Guimaras, Katunggan Cove Resort blends quiet luxury with sustainable, intimate hospitality. Every room and suite is thoughtfully designed to bring you closer to nature without compromising comfort, privacy, or refined detail.',
        'button_text' => 'Read More',
        'button_link' => 'accommodation.php',
        'images'      => [
          '../images/image1.webp',
          '../images/image3.webp',
        ],
      ];

      // Rating badges (social proof)
      $accommRatings = [
        [
          'logo'        => 'B',
          'platform'    => 'Booking.com',
          'rating'      => '4.9/5',
          'sentiment'   => 'Excellent',
          'sentiment_color' => '#2e7d32',
          'reviews'     => '3.5K Reviews on Booking',
        ],
        [
          'logo'        => 'A',
          'platform'    => 'Agoda',
          'rating'      => '4.8/5',
          'sentiment'   => 'Excellent',
          'sentiment_color' => '#2e7d32',
          'reviews'     => '2.1K Reviews on Agoda',
        ],
        [
          'logo'        => 'T',
          'platform'    => 'TripAdvisor',
          'rating'      => '4.7/5',
          'sentiment'   => 'Good',
          'sentiment_color' => '#c49a70',
          'reviews'     => '1.8K Reviews on TripAdvisor',
        ],
      ];
    ?>

    <!-- Elegant intro: asymmetric dual-image & text grid -->
    <div class="accomm-intro">
      <div class="accomm-intro-images">
        <div class="intro-img intro-img-left">
          <img src="<?php echo htmlspecialchars($accommIntro['images'][0]); ?>" alt="Interior room view" loading="lazy">
        </div>
        <div class="intro-img intro-img-right">
          <img src="<?php echo htmlspecialchars($accommIntro['images'][1]); ?>" alt="Suite interior" loading="lazy">
        </div>
      </div>

<div class="accomm-intro-text">
        <p class="intro-subtitle"><?php echo htmlspecialchars($accommIntro['subtitle']); ?></p>
        <h2 class="intro-title"><?php echo htmlspecialchars($accommIntro['title']); ?></h2>
        <p class="intro-body"><?php echo htmlspecialchars($accommIntro['body']); ?></p>
        <a href="<?php echo htmlspecialchars($accommIntro['button_link']); ?>" class="intro-btn"><?php echo htmlspecialchars($accommIntro['button_text']); ?> &rarr;</a>
      </div>
    </div>

    
    

      
      

    </div>

  </div>
</section>

<!-- ================= BLANK SPACE ================= -->
<section class="why-blank"></section>

<!-- ================= TESTIMONIALS ================= -->
<section class="section testimonials">
  <div class="container">

    <div class="section-title">
      <p class="section-subtitle">TESTIMONIALS</p>
      <h2>What Our Guests Say</h2>
    </div>

    <div class="testimonial-viewport">
      <div class="testimonial-track">

        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"Katunggan Cove is pure paradise. The quiet luxury and breathtaking views made our escape unforgettable. We can't wait to come back!"</p>
          <div class="testimonial-author">
            <span class="testimonial-name">Maria Santos</span>
            <span class="testimonial-role">Vacationer</span>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"The staff were so warm and attentive. Every detail felt intentional—from the sustainably designed rooms to the delicious local food."</p>
          <div class="testimonial-author">
            <span class="testimonial-name">James Cruz</span>
            <span class="testimonial-role">Couple Getaway</span>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"We booked the villa for our family and it exceeded all expectations. Spacious, private, and surrounded by nature. Truly a hidden gem."</p>
          <div class="testimonial-author">
            <span class="testimonial-name">Alyssa Reyes</span>
            <span class="testimonial-role">Family Trip</span>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"The sunset views here are unreal. Watching the golden sky melt over the cove is something I will never forget. Highly recommend!"</p>
          <div class="testimonial-author">
            <span class="testimonial-name">Miguel Fernando</span>
            <span class="testimonial-role">Solo Traveler</span>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"From the private beach to the serene mangroves, everything was perfect. A peaceful retreat that balances luxury and nature beautifully."</p>
          <div class="testimonial-author">
            <span class="testimonial-name">Sofia Garcia</span>
            <span class="testimonial-role">Barkada Group</span>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ================= CTA ================= -->
<section class="cta">

  <div class="container">

    <h2>Ready for Your Island Getaway?</h2>

    <p>
      Book your stay today and experience nature,
      relaxation, and adventure at Katunggan Cove Resort.
    </p>

    <br>

    <a href="booking.php" class="btn">
      Book Your Stay
    </a>

  </div>

</section>

<?php include '../includes/footer.php'; ?>

</body>
</html>
