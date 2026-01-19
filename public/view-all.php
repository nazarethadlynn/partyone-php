<?php include '../includes/header.php'; ?>

<section class="view-all-page">

  <!-- TITLE -->
  <h1 class="page-title">Birthday Decoration</h1>

  <!-- FILTERS -->
  <div class="filters">
    <button class="filter-btn active" data-filter="all">All</button>
    <button class="filter-btn" data-filter="ring">Ring</button>
    <button class="filter-btn" data-filter="balloon">Balloon</button>
    <button class="filter-btn" data-filter="theme">Theme</button>
  </div>

  <!-- PRODUCTS GRID -->
  <div class="products-grid">

    <!-- PRODUCT CARD -->
    <div class="product-card" data-category="ring">
      <span class="offer">15% OFF</span>
      <img src="../assets/images/products/ring1.jpg" alt="">
      <h3>Neon Ring Birthday Decoration</h3>
      <div class="price">₹5499 <del>₹6499</del></div>
      <div class="rating">⭐ 4.9</div>
      <button class="book-btn">Book Now</button>
    </div>

    <div class="product-card" data-category="balloon">
      <span class="offer">24% OFF</span>
      <img src="../assets/images/products/balloon1.jpg" alt="">
      <h3>Pink Balloon Decor</h3>
      <div class="price">₹3199 <del>₹4199</del></div>
      <div class="rating">⭐ 5.0</div>
      <button class="book-btn">Book Now</button>
    </div>

    <div class="product-card" data-category="theme">
      <span class="offer">22% OFF</span>
      <img src="../assets/images/products/theme1.jpg" alt="">
      <h3>Candy Theme Balloon Arch</h3>
      <div class="price">₹3999 <del>₹5499</del></div>
      <div class="rating">⭐ 4.9</div>
      <button class="book-btn">Book Now</button>
    </div>

    <!-- ADD MORE CARDS SAME WAY -->

  </div>
</section>

<script src="../assets/js/products.js"></script>

<?php include '../includes/footer.php'; ?>

