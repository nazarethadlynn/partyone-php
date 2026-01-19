<?php
$productPrice = 5499;
$originalPrice = 6499;
$discountPercent = 15;
?>
<?php include '../includes/header.php'; ?>

<div style="
  max-width:1200px;
  margin:40px auto;
  display:grid;
  grid-template-columns:1.1fr 1fr;
  gap:40px;
">


<!-- ================= LEFT: IMAGE GALLERY ================= -->
<div class="product-image-column">
  <div class="product-image-sticky">

    <div class="image-card">

      <!-- MAIN IMAGE + ARROWS (OUTSIDE IMAGE) -->
      <div class="main-image-container">

        <button class="nav-arrow left" onclick="prevImage()">‹</button>

        <div class="main-image-wrapper">
          <img
            id="mainProductImage"
            src="../assets/images/birthday-decor/birthday1.jpg"
            alt="Product Image"
          />
        </div>

        <button class="nav-arrow right" onclick="nextImage()">›</button>

      </div>

      <!-- THUMBNAILS -->
      <div class="thumbnail-strip">
        <img src="../assets/images/birthday-decor/birthday1.jpg" class="active" onclick="changeMainImage(0)">
        <img src="../assets/images/birthday-decor/birthday2.jpg" onclick="changeMainImage(1)">
        <img src="../assets/images/birthday-decor/birthday3.jpg" onclick="changeMainImage(2)">
        <img src="../assets/images/birthday-decor/birthday4.webp" onclick="changeMainImage(3)">
        <img src="../assets/images/birthday-decor/birthday5.jpg" onclick="changeMainImage(4)">
      </div>

    </div>

  </div>
</div>


<!-- ================= RIGHT: PRODUCT DETAILS ================= -->
<div class="product-details-column clean-details">

  <!-- INFO CARD -->
  <div class="details-card">

    <span class="top-badge">🔥 #1 Decoration Website in India</span>

    <h1 class="product-title">Neon Ring Birthday Decoration</h1>

    <div class="price-block">
      <span class="main-price">₹<?= number_format($productPrice) ?></span>
      <del class="old-price">₹<?= number_format($originalPrice) ?></del>
      <span class="offer-badge"><?= $discountPercent ?>% OFF</span>
    </div>

    <div class="inclusive-text">Inclusive of all charges</div>

    <div class="rating-row">
      ⭐ <strong>4.9</strong>
      <span class="reviews">114 Reviews</span>
    </div>

    <hr class="details-divider">

    <a href="#" class="view-category-btn">
      View More in this Category →
    </a>

  </div>

  <!-- ✅ BOOKING CARD (FULLY WORKING) -->
<div class="booking-card">

  <div class="price-row">
    <span class="price">₹<?= number_format($productPrice) ?></span>
    <span class="per-text">/ decoration</span>
  </div>

  <!-- PINCODE -->
  <div class="input-group">
    <i class="fa-solid fa-location-dot"></i>
    <input
      type="text"
      id="pincodeInput"
      placeholder="Enter pincode"
      maxlength="6"
    />
  </div>

  <div
    class="forgot-pincode"
    id="forgotPincode"
    style="display:none;"
  >
    Forgot Pincode?
  </div>
<!-- MOBILE NUMBER -->
<div class="input-group">
  <i class="fa-solid fa-phone"></i>
  <input
    type="tel"
    id="mobileInput"
    placeholder="Enter mobile number"
    maxlength="10"
  />
</div>

<div
  class="mobile-error"
  id="mobileError"
  style="display:none;"
>
  Please enter a valid 10-digit mobile number
</div>


<!-- DATE & TIME FIELD -->
<div class="input-group datetime-wrapper">
  <i class="fa-regular fa-calendar"></i>

  <input
    type="text"
    id="dateTimeDisplay"
    placeholder="Select Date & Time"
    readonly
  />

  <!-- Native pickers (in DOM, invisible, anchored) -->
  <input type="date" id="hiddenDate" class="native-picker" />
  <input type="time" id="hiddenTime" class="native-picker" />
</div>


  <p class="info-text">
    Our decorator will come and complete the decoration
    <strong>anytime between the selected time range</strong>
  </p>

  <div class="delivery-row">
    <span>Delivery Charges</span>
    <span class="free">₹0</span>
  </div>

  <!-- <a href="/PARTYONE-PHP/public/checkout.php" class="book-btn">
    Buy Now →
  </a> -->
  <button class="book-btn" id="openAddonsModal">
  Buy Now →
</button>


  <div class="trust-row">
    <div class="trust-item">🔒 Secured Transactions</div>
    <div class="trust-item">⭐ 100% Service Guaranteed</div>
    <div class="trust-item">🖼 Original Photos</div>
    <div class="trust-item">👥 Expert Decorators</div>
  </div>

</div>


</div>
</div>

<script>
function changeMainImage(el) {
  document.getElementById('mainProductImage').src = el.src;
}
</script>

<!-- ================= ADD-ONS MODAL ================= -->
<div class="addons-overlay" id="addonsModal">

  <div class="addons-modal">

    <!-- TABS -->
    <div class="addons-tabs">
      <button class="tab active">Popular</button>
      <button class="tab">Baby Shower</button>
      <button class="tab">Rose Petals</button>
      <button class="tab">Baby Shower Cake</button>
    </div>

    <!-- ADDONS GRID -->
    <div class="addons-content">

      <!-- CARD -->
      <div class="addon-card">
        <img src="../assets/images/addons/u-shape-balloon.jpg">
        <h4>U-Shape Arch</h4>
        <p>₹2499</p>
        <button class="add-btn">ADD</button>
      </div>

      <div class="addon-card">
        <img src="../assets/images/addons/rose-petals.jpg">
        <h4>Rose Petals (25 pcs)</h4>
        <p>₹499</p>
        <button class="add-btn">ADD</button>
      </div>

      <div class="addon-card">
        <img src="../assets/images/addons/rose-path.jpg">
        <h4>Rose Petals Path</h4>
        <p>₹799</p>
        <button class="add-btn">ADD</button>
      </div>

      <div class="addon-card">
        <img src="../assets/images/addons/fairy-light.jpg">
        <h4>Fairy Light (1 pc)</h4>
        <p>₹249</p>
        <button class="add-btn">ADD</button>
      </div>

      <div class="addon-card">
        <img src="../assets/images/addons/baby-shower-props.jpg">
        <h4>Baby Shower Props</h4>
        <p>₹499</p>
        <button class="add-btn">ADD</button>
      </div>

      <div class="addon-card">
        <img src="../assets/images/addons/welcome-board.jpg">
        <h4>Customized Board</h4>
        <p>₹1999</p>
        <button class="add-btn">ADD</button>
      </div>

    </div>

    <!-- FOOTER -->
    <div class="addons-footer">
      <button class="close-btn" id="closeAddons">Close</button>
      <a href="/PARTYONE-PHP/public/checkout.php" class="proceed-btn">
        Proceed to Cart →
      </a>
    </div>

  </div>
</div>


<?php include '../includes/footer.php'; ?>
