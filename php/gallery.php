<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery | Katunggan Cove Resort</title>
  <link rel="icon" href="../images/logo3.svg" type="image/svg+xml">
  <link rel="stylesheet" href="../css/header-footer.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/gallery.css">

  <?php include '../includes/fonts.php'; ?>
</head>
<body>

<?php include '../includes/header.php'; ?>

<!-- ================= HERO ================= -->
<section class="hero gallery-hero">

  <div class="slides">
    <img src="../images/image4.webp" class="slide active" alt="Katunggan Cove Resort Gallery">
  </div>

  <div class="overlay"></div>

</section>

<!-- ================= GALLERY (CAROUSEL) ================= -->
<section class="section bg-light">
  <div class="container">
    <div class="section-title">
      <h2>Capture Beautiful Memories</h2>
    </div>

    <div class="gallery-carousel" aria-label="Gallery carousel">
      <button class="gallery-nav gallery-prev" type="button" aria-label="Previous image">&#10094;</button>

      <div class="gallery-viewport">
        <div class="gallery-track">
          <div class="gallery-card">
            <img src="../images/image1.webp" alt="Gallery image 1" loading="lazy">
          </div>
          <div class="gallery-card">
            <img src="../images/image2.webp" alt="Gallery image 2" loading="lazy">
          </div>
          <div class="gallery-card">
            <img src="../images/image3.webp" alt="Gallery image 3" loading="lazy">
          </div>
          <div class="gallery-card">
            <img src="../images/image4.webp" alt="Gallery image 4" loading="lazy">
          </div>
          <div class="gallery-card">
            <img src="../images/image5.webp" alt="Gallery image 5" loading="lazy">
          </div>
          <div class="gallery-card">
            <img src="../images/image5.webp" alt="Gallery image 6" loading="lazy">
          </div>
        </div>
      </div>

      <button class="gallery-nav gallery-next" type="button" aria-label="Next image">&#10095;</button>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>

</body>
</html>
