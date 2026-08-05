<?php
// Standard Queen — Room Details Page
$room = [
  'name'        => 'Standard Queen',
  'price'       => '₱ 3,600',
  'description' => 'Step into a serene and thoughtfully designed retreat where calm begins the moment you arrive. The Standard Queen room pairs a plush queen bed with warm earth tones, soft natural light, and resort-grade comfort — perfect for couples and solo travelers seeking a restorative island escape.',
  'about_heading' => 'Deep Comfort',
  'about_title'   => 'About the Room',
  'about_body'    => 'Built around rest and simplicity, the Standard Queen features a premium queen-size bed with hotel-quality linens, a dedicated lounge corner, and a private bathroom stocked with essentials. Large windows open to gentle garden views, while thoughtful touches like blackout curtains and a quiet air-conditioning system ensure a deeply restful night\'s sleep.',
  'features' => [
    ['label' => '1 Queen Bed',  'icon' => 'bed'],
    ['label' => '2 Persons',    'icon' => 'users'],
    ['label' => 'Private Bathroom', 'icon' => 'shower'],
  ],
'amenities' => [
    ['label' => 'Wi-Fi',            'icon' => 'wifi'],
    ['label' => 'Television',       'icon' => 'tv'],
    ['label' => 'Air Conditioning', 'icon' => 'ac'],
  ],
  'hero_image' => '../images/rooms/standardqueen/main.webp',
  'portrait_image' => '../images/rooms/standardqueen/1.webp',
'room_images' => [
    '../images/rooms/standardqueen/2.webp',
    '../images/rooms/standardqueen/3.webp',
    '../images/rooms/standardqueen/4.webp',
    '../images/rooms/standardqueen/5.webp',
    '../images/rooms/standardqueen/6.webp',
    '../images/rooms/standardqueen/7.webp',
  ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Standard Queen | Katunggan Cove Resort</title>
  <link rel="icon" href="../images/logo3.svg" type="image/svg+xml">

  <link rel="stylesheet" href="../css/header-footer.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/room-details.css">

  <?php include '../includes/fonts.php'; ?>
</head>
<body>

<?php include '../includes/header.php'; ?>
<?php include __DIR__ . '/../includes/icons.php'; ?>

<!-- ================= HERO BANNER ================= -->
<section class="room-hero">
  <img src="<?php echo htmlspecialchars($room['hero_image']); ?>" alt="Standard Queen room" class="room-hero-img">
  <div class="room-hero-overlay"></div>

  <!-- BACK BUTTON (inside hero) -->
  <a href="accommodation.php" class="rd-back-btn">
    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
    Back to Rooms
  </a>

  <div class="room-hero-caption">
    <h1><?php echo htmlspecialchars($room['name']); ?></h1>
  </div>
</section>

<!-- ================= PRIMARY SECTION ================= -->
<section class="rd-section rd-primary">
  <div class="container rd-grid rd-grid-primary">

<!-- LEFT: Room info -->
    <div class="rd-room-info">
      <p class="rd-subtitle">Accommodations</p>
      <h2 class="rd-title"><?php echo htmlspecialchars($room['name']); ?></h2>
      <p class="rd-body"><?php echo htmlspecialchars($room['description']); ?></p>

      <div class="rd-price-line">
        <span class="rd-price-amount"><?php echo htmlspecialchars($room['price']); ?></span>
        <span class="rd-price-period">/ night</span>
      </div>

      <div class="rd-features">
        <?php foreach ($room['features'] as $feature): ?>
          <div class="rd-feature">
            <span class="rd-feature-icon" aria-hidden="true"><?php echo render_icon($feature['icon']); ?></span>
            <span class="rd-feature-label"><?php echo htmlspecialchars($feature['label']); ?></span>
          </div>
        <?php endforeach; ?>
      </div>

      <a href="accommodation.php" class="rd-btn-solid rd-btn-square">Book A Stay</a>
    </div>

    <!-- RIGHT: Room image -->
    <div class="rd-room-side">
      <img src="<?php echo htmlspecialchars($room['room_images'][1]); ?>" alt="Standard Queen room interior" loading="lazy">
    </div>

  </div>
</section>

<!-- ================= ABOUT SECTION (REVERSED) ================= -->
<section class="rd-section rd-about">
  <div class="container rd-grid rd-grid-about">

<div class="rd-portrait">
      <img src="<?php echo htmlspecialchars($room['portrait_image']); ?>" alt="Standard Queen room setup" loading="lazy">
    </div>

    <div class="rd-about-text">
      <p class="rd-subtitle"><?php echo htmlspecialchars($room['about_heading']); ?></p>
      <h2 class="rd-title"><?php echo htmlspecialchars($room['about_title']); ?></h2>
      <p class="rd-body"><?php echo htmlspecialchars($room['about_body']); ?></p>
    </div>

  </div>
</section>

<!-- ================= AMENITIES SECTION ================= -->
<section class="rd-section rd-amenities">
  <div class="container rd-grid rd-grid-amenities">

    <div class="rd-amenities-text">
      <p class="rd-subtitle">Amenities</p>
      <h2 class="rd-title">Discover Our Resort-Style Amenities</h2>
      <p class="rd-body">Every stay at Katunggan Cove Resort is elevated by thoughtful, modern conveniences — designed to make your escape effortless from the moment you check in.</p>
      <a href="accommodation.php" class="rd-btn-solid">View All Rooms</a>
    </div>

    <div class="rd-amenities-grid">
      <?php foreach ($room['amenities'] as $amenity): ?>
        <div class="rd-amenity">
<span class="rd-amenity-icon" aria-hidden="true"><?php echo render_icon($amenity['icon']); ?></span>
          <span class="rd-amenity-label"><?php echo htmlspecialchars($amenity['label']); ?></span>
        </div>
      <?php endforeach; ?>
    </div>

</div>
</section>

<!-- ================= ROOM IMAGES ================= -->
<section class="rd-section rd-room-images">
  <div class="container">
    <div class="rd-room-images-head">
      <p class="rd-subtitle">Photos</p>
      <h2 class="rd-title">More Views of the Room</h2>
    </div>

    <div class="rd-room-images-grid">
      <?php foreach ($room['room_images'] as $image): ?>
        <div class="rd-room-image-thumb">
          <img src="<?php echo htmlspecialchars($image); ?>" alt="Standard Queen room view" loading="lazy">
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>

</body>
</html>

