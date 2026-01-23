<?php
$productPrice = 5499;
$originalPrice = 6499;
$discountPercent = 15;
?>
<?php include '../includes/header.php'; ?>
<div class="product-page-wrap">

<div class="product-layout">



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


<div class="buy-btn-wrapper">
  <button class="book-btn" id="openAddonsModal">
    Buy Now →
  </button>
</div>


  <div class="trust-row">
    <div class="trust-item">🔒 Secured Transactions</div>
    <div class="trust-item">⭐ 100% Service Guaranteed</div>
    <div class="trust-item">🖼 Original Photos</div>
    <div class="trust-item">👥 Expert Decorators</div>
  </div>

</div>


<!-- ================= TRUSTED BRAND CARD ================= -->
<div class="trust-brand-card">

  <div class="trust-left">
    <h3>India's Most Trusted</h3>
    <h2>Home Decor Brand</h2>
  </div>

  <div class="trust-right">
    <ul>
      <li>✅ Same Day Service</li>
      <li>✅ Professional Decorators</li>
      <li>✅ Lowest Price Guaranteed</li>
      <li>✅ 10 Lacs+ Trusted Users</li>
    </ul>
  </div>

  <a href="#" class="recent-work-btn">
    View Our Recent Works →
  </a>

</div>




<!-- ================= RATINGS & REVIEWS ================= -->
<div class="ratings-card">

  <!-- HEADER -->
  <div class="ratings-header">
    <div class="ratings-summary">
      <h2>Ratings & Reviews</h2>

      <div class="rating-line">
        <span class="rating-value">4.9</span>
        <span class="rating-star">★</span>
        <span class="rating-count">313 Ratings</span>
      </div>
    </div>

    <a href="#" class="write-review">
      Write a review <span class="edit-icon">✎</span>
    </a>
  </div>

  <!-- IMAGE PREVIEWS -->
  <div class="review-thumbs">
    <img src="../assets/images/birthday-decor/birthday1.jpg">
    <img src="../assets/images/birthday-decor/birthday2.jpg">
    <img src="../assets/images/birthday-decor/birthday3.jpg">
    <img src="../assets/images/birthday-decor/birthday4.webp">
  </div>

  <!-- REVIEWS WRAPPER -->
  <div id="reviewsWrapper">

    <!-- REVIEW 1 -->
    <div class="review-item">
      <div class="avatar">
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="8" r="4"></circle>
          <path d="M4 20c0-4 4-6 8-6s8 2 8 6"></path>
        </svg>
      </div>

      <div class="review-body">
        <div class="review-top">
          <div class="review-name">
            Arjun Raj <span class="verified">✔</span>
            <span class="user-rating">4.6 ★</span>
          </div>
          <div class="review-location">📍 Ahmedabad, India</div>
        </div>
        <p>
          I had such a wonderful experience with this balloon decoration service!
          The setup was absolutely beautiful and exceeded my expectations.
        </p>
      </div>
    </div>

    <hr>

    <!-- REVIEW 2 -->
    <div class="review-item">
      <div class="avatar">
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="8" r="4"></circle>
          <path d="M4 20c0-4 4-6 8-6s8 2 8 6"></path>
        </svg>
      </div>

      <div class="review-body">
        <div class="review-top">
          <div class="review-name">
            Vikas Jariwala <span class="verified">✔</span>
            <span class="user-rating">4.9 ★</span>
          </div>
          <div class="review-location">📍 Delhi, India</div>
        </div>
        <p>
          Very good decoration work done by Vansh who visited our place.
          Beautiful and very professional. Definitely recommend.
        </p>
      </div>
    </div>

    <!-- HIDDEN REVIEWS -->
    <div class="extra-reviews">

      <hr>

      <div class="review-item">
        <div class="avatar">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="8" r="4"></circle>
            <path d="M4 20c0-4 4-6 8-6s8 2 8 6"></path>
          </svg>
        </div>

        <div class="review-body">
          <div class="review-top">
            <div class="review-name">
              Neha Sharma <span class="verified">✔</span>
              <span class="user-rating">5.0 ★</span>
            </div>
            <div class="review-location">📍 Mumbai, India</div>
          </div>
          <p>
            Excellent service and very polite decorators.
            Everything was done on time and looked stunning.
          </p>
        </div>
      </div>

      <hr>

      <div class="review-item">
        <div class="avatar">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="8" r="4"></circle>
            <path d="M4 20c0-4 4-6 8-6s8 2 8 6"></path>
          </svg>
        </div>

        <div class="review-body">
          <div class="review-top">
            <div class="review-name">
              Rohit Mehta <span class="verified">✔</span>
              <span class="user-rating">4.8 ★</span>
            </div>
            <div class="review-location">📍 Pune, India</div>
          </div>
          <p>
            Decorations were classy and elegant.
            Guests loved it. Will surely book again.
          </p>
        </div>
      </div>

    </div>
  </div>

  <!-- READ MORE -->
  <button id="toggleReviews" class="read-more-reviews">
    Read More Reviews
  </button>

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
      <button class="tab active" data-tab="popular">Popular</button>
      <button class="tab" data-tab="baby">Baby Shower</button>
      <button class="tab" data-tab="rose">Rose Petals</button>
      <button class="tab" data-tab="cake">Baby Shower Cake</button>
    </div>

    <!-- ADDONS GRID -->
    <div class="addons-content">

      <!-- CARD -->
      <div class="addon-card" data-category="popular baby">
        <img src="../assets/images/addons/u-shape-balloon.jpg">
        <h4>U-Shape Arch</h4>
        <p>₹2499</p>
        <button class="add-btn">ADD</button>
      </div>

      <div class="addon-card" data-category="rose popular">
        <img src="../assets/images/addons/rose-petals.jpg">
        <h4>Rose Petals(25 pcs)</h4>
        <p>₹499</p>
        <button class="add-btn">ADD</button>
      </div>

      <div class="addon-card" data-category="rose">
        <img src="../assets/images/addons/rose-path.webp">
        <h4>Rose Petals Path</h4>
        <p>₹799</p>
        <button class="add-btn">ADD</button>
      </div>

      <div class="addon-card" data-category="popular">
        <img src="../assets/images/addons/fairy-light.jpg">
        <h4>Fairy Light (1 pc)</h4>
        <p>₹249</p>
        <button class="add-btn">ADD</button>
      </div>

      <div class="addon-card" data-category="baby">
        <img src="../assets/images/addons/baby-shower-props.jpg">
        <h4>Baby Shower Props</h4>
        <p>₹499</p>
        <button class="add-btn">ADD</button>
      </div>

      <div class="addon-card" data-category="cake popular">
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
        Proceed  to  Cart→
      </a>
    </div>

  </div>
</div>






<!-- PAGE END MARKER -->
<div id="pageEndMarker"></div>





<!-- ================= SIMILAR PRODUCTS ================= -->
<section class="similar-products">

  <div class="similar-header">
    <h2>Similar Products</h2>
    <a href="#" class="view-all">View All</a>
  </div>

  <div class="similar-slider">

    <!-- CARD -->
    <div class="product-card">
      <div class="card-img">
        <span class="wishlist">♡</span>
        <span class="discount">15% OFF</span>
        <img src="../assets/images/birthday-decor/birthday1.jpg" alt="">
      </div>

      <h4>Neon Ring Birthday Decoration</h4>

      <div class="price-row">
        <span class="price">₹5499</span>
        <span class="strike">₹6499</span>
      </div>

      <div class="rating">⭐ 4.9</div>

      <div class="card-actions">
        <div class="cart-btn">🛒</div>
        <button class="book-btn">Book Now</button>
      </div>
    </div>

    <!-- CARD -->
    <div class="product-card">
      <div class="card-img">
        <span class="wishlist">♡</span>
        <span class="discount">24% OFF</span>
        <img src="../assets/images/birthday-decor/birthday2.jpg" alt="">
      </div>

      <h4>Pink and White Birthday Decor</h4>

      <div class="price-row">
        <span class="price">₹3199</span>
        <span class="strike">₹4199</span>
      </div>

      <div class="rating">⭐ 5.0</div>

      <div class="card-actions">
        <div class="cart-btn">🛒</div>
        <button class="book-btn">Book Now</button>
      </div>
    </div>

    <!-- CARD -->
    <div class="product-card">
      <div class="card-img">
        <span class="wishlist">♡</span>
        <span class="discount">22% OFF</span>
        <img src="../assets/images/birthday-decor/birthday3.jpg" alt="">
      </div>

      <h4>Candy Theme Balloon Arch Decoration</h4>

      <div class="price-row">
        <span class="price">₹5499</span>
        <span class="strike">₹7499</span>
      </div>

      <div class="rating">⭐ 4.9</div>

      <div class="card-actions">
        <div class="cart-btn">🛒</div>
        <button class="book-btn">Book Now</button>
      </div>
    </div>

    <!-- CARD -->
    <div class="product-card">
      <div class="card-img">
        <span class="wishlist">♡</span>
        <span class="discount">18% OFF</span>
        <img src="../assets/images/birthday-decor/birthday4.webp" alt="">
      </div>

      <h4>Simple Elegant Birthday Decoration</h4>

      <div class="price-row">
        <span class="price">₹6499</span>
        <span class="strike">₹8499</span>
      </div>

      <div class="rating">⭐ 4.9</div>

      <div class="card-actions">
        <div class="cart-btn">🛒</div>
        <button class="book-btn">Book Now</button>
      </div>
    </div>

    <!-- CARD -->
    <div class="product-card">
      <div class="card-img">
        <span class="wishlist">♡</span>
        <span class="discount">35% OFF</span>
        <img src="../assets/images/birthday-decor/birthday5.jpg" alt="">
      </div>

      <h4>Royal Gold & White Birthday Ring Decoration</h4>

      <div class="price-row">
        <span class="price">₹7499</span>
        <span class="strike">₹9999</span>
      </div>

      <div class="rating">⭐ 4.9</div>

      <div class="card-actions">
        <div class="cart-btn">🛒</div>
        <button class="book-btn">Book Now</button>
      </div>
    </div>

  </div>
</section>



<script src="../assets/js/wishlist.js"></script>

<?php include '../includes/footer.php'; ?>
