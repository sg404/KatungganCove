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
<section class="hero accommodation-hero">

  <div class="slides">
    <img src="../images/rooms/QuadRoom.webp" class="slide active" alt="Katunggan Cove Resort Room">
  </div>

  <div class="overlay"></div>

</section>

<!-- ================= ACCOMMODATIONS ================= -->
<section class="section bg-light" style="padding-top:80px;">
  <div class="container accommodation-page">

    <div class="section-title">
      <h2>Accommodations</h2>
    </div>

    <p class="accommodation-intro">
      Discover comfortable and thoughtfully designed rooms perfect for couples,
      families, and groups looking for a relaxing resort stay.
    </p>

    <div class="accommodation-list">

      <!-- Standard Queen -->
      <div class="accommodation-room">
        <div class="room-image">
          <img src="../images/rooms/StandardQueen.webp" alt="Standard Queen">
        </div>

        <div class="room-info">
          <h3>Standard Queen</h3>

<p class="accommodation-desc">
            A cozy and comfortable room designed for couples or solo travelers
            seeking a relaxing getaway.
          </p>

          <a href="standard-queen.php" class="view-btn">Read More</a>
        </div>
      </div>

      <!-- Triple Room -->
      <div class="accommodation-room">
        <div class="room-image">
          <img src="../images/rooms/TripleRoom.webp" alt="Triple Room">
        </div>

        <div class="room-info">
          <h3>Triple Room</h3>

          <p class="accommodation-desc">
            Perfect for small families or groups, offering a practical and
            comfortable space for a pleasant stay.
          </p>

          <a href="#" class="view-btn">Read More</a>
        </div>
      </div>

      <!-- Quad Room -->
      <div class="accommodation-room">
        <div class="room-image">
          <img src="../images/rooms/QuadRoom.webp" alt="Quad Room">
        </div>

        <div class="room-info">
          <h3>Quad Room</h3>

          <p class="accommodation-desc">
            A spacious accommodation ideal for families and friends,
            providing comfort and convenience throughout your stay.
          </p>

          <a href="#" class="view-btn">Read More</a>
        </div>
      </div>

      <!-- Villa -->
      <div class="accommodation-room">
        <div class="room-image">
          <img src="../images/rooms/Villa.webp" alt="Villa">
        </div>

        <div class="room-info">
          <h3>Villa</h3>
<p class="accommodation-desc">
            Our largest accommodation, designed for families and groups
            seeking a premium resort experience with generous living space
            and comfort.
          </p>

          <a href="#" class="view-btn">Read More</a>
        </div>
      </div>

    </div>

  </div>
</section>

<?php include '../includes/footer.php'; ?>

</body>
</html>