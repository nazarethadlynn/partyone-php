<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>
<meta charset="UTF-8">
<title>Party One</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="icon" href="/PARTYONE-PHP/public/favicon.ico">

<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  padding-top: 120px;
  font-family: 'Inter', sans-serif;
}

/* ================= HEADER ================= */
/* .site-header {
  position: fixed;
  top: 0;
  width: 100%;
  background: #f6efef;
  border-bottom: 1px solid #e5e7eb;
  z-index: 99999;
} */
.site-header {
  position: fixed;
  top: 0;
  width: 100%;
  backdrop-filter: blur(6px);
  background: linear-gradient(
    180deg,
    #fff5f7 0%,
    #fffafa 55%,
    #ffffff 100%
  );

  border-bottom: 1px solid rgba(225, 29, 72, 0.08);
  z-index: 99999;
}

/* ================= TOP BAR ================= */
.header-top {
  display: flex;
  align-items: center;
  gap: 20px;
  padding: 14px 32px;
  flex-wrap: nowrap;   
}

.logo img {
  height: 52px;
}

/* ================= SEARCH ================= */
.search-wrap {
  flex: 1;
  max-width: 350px;
  position: relative;
}

.search-wrap input {
  width: 100%;
  height: 48px;
  border-radius: 9px;
  border: 1.5px solid #111;
  padding: 0 52px 0 18px;
  font-size: 15px;
}

.search-wrap button {
  position: absolute;
  right: 14px;
  top: 50%;
  transform: translateY(-50%);
  background: none;
  border: none;
  font-size: 17px;
}











/* ================= ACTIONS ================= */
.header-actions {
  display: flex;
  gap: 12px;
  margin-left: auto;
  align-items: center;
}

.icon-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 8px 14px;
  border-radius: 12px;
  border: 1.5px solid #e5e7eb;
  background: #fff;
  font-weight: 600;
  text-decoration: none;
}

.icon-btn.cart {
  border-color: #2563eb;
  color: #2563eb;
}

.city-pill {
  padding: 8px 14px;
  border-radius: 999px;
  border: 1.5px solid #e11d48;
  background: #fff;
  color: #e11d48;
  font-weight: 700;
}

.mobile-menu-btn {
  display: none;
  background: none;
  border: none;
  font-size: 24px;
}

/* ================= CATEGORY BAR (DESKTOP ONLY) ================= */
/* .category-bar {
  display: flex;
  gap: 14px;
  padding: 12px 32px 16px;
  align-items: center;
} */

/* 🔥 FORCE CLEAN DESKTOP LOOK */
/* .category-bar * {
  text-decoration: none !important;
  list-style: none !important;
} */

/* 
.cat-item {
  position: relative;
} */

/* 🔥 INVISIBLE HOVER BRIDGE */
.cat-item::after {
  content: "";
  position: absolute;
  left: 0;
  top: 100%;
  width: 100%;
  height: 10px;       /* hover-safe zone */
}















/* ================= CATEGORY BAR (WIDE SPREAD) ================= */
.category-bar {
  display: flex;
  justify-content: space-between;   /* 🔥 spread full width */
  align-items: center;
  padding: 12px 32px 16px;
  width: 100%;
}

/* Make each category take equal width */
.cat-item {
  flex: 1;                 /* 🔥 equal distribution */
  display: flex;
  justify-content: center; /* center pill inside */
  position: relative;
}

/* Make pills responsive */
.cat-pill {
  width: 90%;              /* nice spacing inside */
  text-align: center;
}


/* ================= GRADIENT CATEGORY PILLS ================= */

  /* .cat-pill {
  padding: 10px 20px;
  border-radius: 14px;

  background: linear-gradient(
    135deg,
    #ffe4e8 0%,
    #ffc1cb 50%,
    #ff9fb0 100%
  );

  color: #9f1239;
  font-weight: 600;
  font-size: 14.5px;
  white-space: nowrap;
  cursor: pointer;

  display: inline-flex;
  align-items: center;
  justify-content: center;

  box-shadow:
    0 6px 14px rgba(225,29,72,0.18);

  transition: all 0.25s ease;
} */

.cat-pill,
.cat-pill:hover,
.cat-pill:focus,
.cat-pill:active,
.cat-pill:visited {
  text-decoration: none !important;
}

/* .cat-pill:hover {
  background: linear-gradient(
    135deg,
    #ffd1d9,
    #ff9fb0
  );
  transform: translateY(-1px);
} */

/* .cat-pill {
  padding: 10px 20px;
  border-radius: 14px;

  background: linear-gradient(
    135deg,
    #f43f5e 0%,     
    #e11d48 50%,   
    #be123c 100%   
  );

  color: #ffffff;
  font-weight: 600;
  font-size: 14.5px;
  white-space: nowrap;
  cursor: pointer;

  display: inline-flex;
  align-items: center;
  justify-content: center;

  box-shadow:
    0 10px 25px rgba(225,29,72,0.35);

  transition: all 0.25s ease;
} */

.cat-pill {
  padding: 10px 22px;
  border-radius: 14px;

  background: linear-gradient(
      135deg,
    #f43f5e 0%,     
    #e11d48 50%,   
    #be123c 100% 
  );

  color: #ffffff;
  font-weight: 600;
  font-size: 14.5px;
  white-space: nowrap;
  cursor: pointer;

  display: inline-flex;
  align-items: center;
  justify-content: center;

  gap: 28px; /* 🔥 increased spacing */

  box-shadow: 0 6px 14px rgba(0,0,0,0.15);
  transition: all 0.25s ease;
}









.cat-pill:hover {
  transform: translateY(-2px);
  /* box-shadow:
    0 16px 35px rgba(225,29,72,0.45); */
}

/* .cat-pill {
  padding: 10px 20px;
  border-radius: 999px;

  background: linear-gradient(
    135deg,
    #ffffff 0%,
    #ffe4ea 100%
  );

  border: 1.5px solid #f43f5e;

  color: #be123c;
  font-weight: 600;
  font-size: 14.5px;

  display: inline-flex;
  align-items: center;
  justify-content: center;

  box-shadow:
    0 8px 20px rgba(244,63,94,0.15);

  transition: all 0.25s ease;
}

.cat-pill:hover {
  background: linear-gradient(
    135deg,
    #f43f5e,
    #e11d48
  );
  color: #ffffff;
}
 */






/* CLICK FEEDBACK */
.cat-pill:active {
  transform: translateY(0);
  box-shadow:
    inset 0 2px 4px rgba(0,0,0,0.25);
}


/* ================= DROPDOWN ================= */
/* .cat-dropdown {
  position: absolute;
  top: 100%;
  left: 0;
  margin-top: 6px;                 
  padding-top: 6px;              
  background: #fff;
  min-width: 200px;
  border-radius: 14px;
  box-shadow: 0 14px 40px rgba(0,0,0,.18);
  display: none;
  overflow: hidden;
  z-index: 9999;
} */
/* ================= PERFECT CENTERED DROPDOWN ================= */
.cat-dropdown {
  position: absolute;
  top: calc(100% + 10px);
  left: 50%;
  transform: translateX(-50%); /* only horizontal centering */

  background: #ffffff;
  min-width: 220px;
  border-radius: 18px;
  box-shadow: 0 20px 45px rgba(0,0,0,0.15);

  opacity: 0;
  visibility: hidden;
  transition: opacity 0.18s ease, visibility 0.18s ease;

  z-index: 9999;
  overflow: hidden;
}


.cat-dropdown a {
  display: block;
  padding: 12px 16px;
  font-size: 14px;
  color: #111;

  text-decoration: none !important;   /* 🔥 remove underline */
}

/* Remove underline in all states */
.cat-dropdown a:hover,
.cat-dropdown a:focus,
.cat-dropdown a:active,
.cat-dropdown a:visited {
  text-decoration: none !important;
}

.cat-dropdown a:hover {
  background: #f3f4f6;
}

/* .cat-item:hover .cat-dropdown {
  display: block;
} */
.cat-item:hover .cat-dropdown {
  opacity: 1;
  visibility: visible;
}
/* 
.cat-dropdown {
  animation: fadeSlide .18s ease;
}

@keyframes fadeSlide {
  from { opacity: 0; transform: translateY(-6px); }
  to   { opacity: 1; transform: translateY(0); }
} */


/* ================= MOBILE ONLY ================= */
@media (max-width: 768px) {

  body {
    padding-top: 150px;
  }


  .logo img {
    height: 46px;
  }

  .header-actions {
    margin-left: auto;
    gap: 10px;
  }

  .icon-btn.login {
    display: none;
  }

  .mobile-menu-btn {
    display: inline-flex;
  }

  .search-wrap {
    order: 99;
    width: 100%;
    max-width: 100%;
  }

  .search-wrap input {
    height: 46px;
    font-size: 14px;
  }

  /* ❌ HIDE CATEGORY BAR ON MOBILE */
  .category-bar {
    display: none !important;
  }
}


/* ================= LOGIN POPUP CARD ================= */
.login-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.55);
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 200000;
}

.login-overlay.active {
  display: flex;
}

/* CARD */
.login-modal {
  width: 92%;
  max-width: 380px;
  background: #ffffff;
  border-radius: 18px;
  padding: 26px 24px 28px;
  text-align: center;
  position: relative;
  box-shadow: 0 20px 50px rgba(0,0,0,0.25);
  animation: popIn .25s ease;
}

@keyframes popIn {
  from { opacity: 0; transform: scale(0.95); }
  to   { opacity: 1; transform: scale(1); }
}

/* CLOSE BUTTON */
.login-close {
  position: absolute;
  top: 12px;
  right: 14px;
  border: none;
  background: none;
  font-size: 20px;
  cursor: pointer;
}

/* ICON */
.login-icon {
  width: 64px;
  height: 64px;
  border-radius: 50%;
  background: #fde8ec;
  color: #e11d48;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 28px;
  margin: 0 auto 12px;
}

/* TEXT */
.login-modal h3 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 6px;
}

.login-modal p {
  font-size: 14px;
  color: #6b7280;
  margin-bottom: 18px;
}

/* PHONE INPUT */
.login-phone {
  display: flex;
  align-items: center;
  border: 1.5px solid #e5e7eb;
  border-radius: 14px;
  overflow: hidden;
  margin-bottom: 16px;
}

.login-phone span {
  padding: 12px 14px;
  background: #f9fafb;
  font-weight: 600;
  border-right: 1.5px solid #e5e7eb;
}

.login-phone input {
  border: none;
  flex: 1;
  padding: 12px 14px;
  font-size: 15px;
  outline: none;
}

/* SEND OTP BUTTON */
.login-btn {
  width: 100%;
  padding: 12px;
  border-radius: 14px;
  border: none;
  background: linear-gradient(135deg,#e11d48,#fb7185);
  color: #fff;
  font-weight: 700;
  font-size: 15px;
  cursor: pointer;
}

















/* ================= MOBILE SIDE MENU ================= */
.mobile-menu {
  position: fixed;
  top: 0;
  right: 0;
  width: 82%;
  max-width: 340px;
  height: 100vh;
  background: #fff;
  transform: translateX(100%);
  transition: transform .35s ease;
  z-index: 100000;
  padding: 22px 20px;
  overflow-y: auto;
}

.mobile-menu.open {
  transform: translateX(0);
}

/* SECTION TITLES */
.mobile-menu h4 {
  font-size: 14px;
  font-weight: 700;
  color: #9e2721;
  margin: 18px 0 10px;
}

/* LINKS */
.mobile-menu a {
  display: block;
  padding: 12px 0;
  font-size: 15px;
  font-weight: 500;
  color: #111;
  text-decoration: none;
  border-bottom: 1px solid #f1f1f1;
}

/* LOGIN CTA */
.mobile-login-cta {
  margin-top: 22px;
  padding: 14px;
  border-radius: 14px;
  background: linear-gradient(135deg,#e11d48,#fb7185);
  color: #fff;
  font-weight: 700;
  text-align: center;
}

/* MOBILE ONLY */
@media (min-width: 769px) {
  .mobile-menu {
    display: none;
  }
}





.action-pill {
  padding: 10px 18px;
  border-radius: 14px;

  background: linear-gradient(
    180deg,
    #ffffff 0%,
    #fff5f7 100%
  );

  border: 1.5px solid rgba(225, 29, 72, 0.25);
  color: #e11d48;

  font-weight: 600;
  font-size: 14.5px;

  display: inline-flex;
  align-items: center;
  gap: 8px;

  box-shadow: 0 6px 14px rgba(0,0,0,0.08);
  transition: all 0.25s ease;
}
.action-pill:hover {
  background: #fff1f2;
  transform: translateY(-1px);
}


/* Active / Click */
.action-pill:active {
  transform: translateY(0);
  box-shadow:
    inset 0 2px 4px rgba(0,0,0,0.25);
}

/* Icons inside action pills */
.action-pill i {
  font-size: 14px;
}

.action-pill {
  text-decoration: none !important;
}







/* ================= MOBILE HEADER – FINAL FIX ================= */
@media (max-width: 768px) {

  /* Allow header to form TWO ROWS */
  .header-top {
    flex-wrap: wrap !important;
    align-items: center;
    padding: 12px 16px;
    row-gap: 12px;
  }

  /* LOGO → LEFT (ROW 1) */
  .logo {
    order: 1;
    flex: 0 0 auto;
  }

  .logo img {
    height: 46px;
  }

  /* ACTIONS → RIGHT (ROW 1) */
  .header-actions {
    order: 2;
    flex: 1;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 10px;
  }

  /* Hide desktop-style pills */
  .header-actions .action-pill {
    display: none !important;
  }

  /* LOCATION (outlined pill) */
  .header-actions button[action-location] {
    display: inline-flex !important;
    align-items: center;
    gap: 6px;
    padding: 8px 12px;
    border-radius: 12px;
    background: #fff;
    color: #e11d48;
    border: 1.5px solid #e11d48;
    font-weight: 600;
    box-shadow: none;
  }

  /* CART (icon only) */
  .header-actions a[action-cart] {
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    padding: 8px 10px;
    border-radius: 10px;
    background: #fff;
    color: #2563eb;
    border: 1.5px solid #2563eb;
    box-shadow: none;
  }

  .header-actions a[action-cart] span {
    display: none;
  }

  /* HAMBURGER */
  .mobile-menu-btn {
    display: inline-flex !important;
    font-size: 22px;
  }

  /* 🔥 SEARCH → FULL WIDTH (ROW 2) */
  .search-wrap {
    order: 3;
    width: 100%;
    max-width: 100%;
  }

  .search-wrap input {
    width: 100%;
    height: 46px;
    border-radius: 12px;
    font-size: 14px;
  }
}















/* Center text perfectly */
.cat-pill {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 10px 40px; /* extra right padding for arrow space */
}

/* Arrow positioned near right edge */
.drop-icon {
  position: absolute;
  right: 18px; /* distance from right edge */
  font-size: 12px;
  transition: transform 0.25s ease;
}

/* Rotate on hover */
.cat-item:hover .drop-icon {
  transform: rotate(180deg);
}



/* .cat-pill {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;   
} */

/* Dropdown icon style */
.drop-icon {
  font-size: 12px;
  transition: transform 0.25s ease;
}

/* Rotate icon when hovering */
.cat-item:hover .drop-icon {
  transform: rotate(180deg);
}







































/* ================= PURCHASE POPUP ================= */
.purchase-popup {
  position: fixed;
  bottom: 20px;
  left: 20px;
  width: 300px;
  background: #ffffff;
  border-radius: 16px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.15);
  padding: 14px;
  z-index: 999999;

  transform: translateY(120%);
  opacity: 0;
  transition: all 0.4s ease;
}

/* Visible state */
.purchase-popup.show {
  transform: translateY(0);
  opacity: 1;
}

/* Content layout */
.popup-content {
  display: flex;
  gap: 12px;
  align-items: center;
}

.purchase-popup img {
  width: 60px;
  height: 60px;
  border-radius: 12px;
  object-fit: cover;
}

.popup-text {
  flex: 1;
}

.popup-name {
  font-size: 13px;
  color: #555;
}

.popup-product {
  font-size: 14px;
  font-weight: 600;
  color: #111;
  margin: 4px 0;
}

.popup-time {
  font-size: 12px;
  color: #888;
}

/* Close button */
.popup-close {
  position: absolute;
  top: 6px;
  right: 8px;
  border: none;
  background: none;
  font-size: 14px;
  cursor: pointer;
  color: #999;
}


</style>

</head>

<body>

<header class="site-header">

  <!-- TOP BAR -->
  <div class="header-top">

    <div class="logo">
      <a href="/PARTYONE-PHP/public/index.php">
        <img src="../assets/images/LOGO.svg" alt="PartyOne">
      </a>
    </div>

    <!-- SEARCH (DESKTOP ONLY) -->
    <div class="search-wrap">
      <input type="text" placeholder="Search by event, birthday, party..." />
      <button><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>

    <!-- RIGHT ACTIONS -->
    <div class="header-actions">
  <a href="/PARTYONE-PHP/public/cart.php" class="action-pill" action-cart>
  <i class="fa-solid fa-bag-shopping"></i>
  Cart
</a>

<button class="action-pill" onclick="openLogin()">
  <i class="fa-regular fa-user"></i>
  Login
</button>

<button class="action-pill" action-location onclick="openCityPopup()">
  <i class="fa-solid fa-location-dot"></i>
  <?= $_SESSION['city'] ?? 'Bangalore' ?>
</button>

      <!-- MOBILE MENU BUTTON -->
      <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
        <i class="fa-solid fa-bars"></i>
      </button>

    </div>
  </div>


<!-- CATEGORY BAR WITH DROPDOWNS -->
  <nav class="category-bar">

    <div class="cat-item">
      <div class="cat-pill">
  Birthday
  <i class="fa-solid fa-chevron-down drop-icon"></i>
</div>
      <div class="cat-dropdown">
        <a href="#">Kids Birthday</a>
        <a href="#">Adult Birthday</a>
        <a href="#">Theme Parties</a>
      </div>
    </div>

    <div class="cat-item">
      <div class="cat-pill">
  Decorations
  <i class="fa-solid fa-chevron-down drop-icon"></i>
</div>
      <div class="cat-dropdown">
        <a href="#">Balloon Decor</a>
        <a href="#">Room Decor</a>
        <a href="#">Theme Decor</a>
      </div>
    </div>

   
    <div class="cat-item">
      <a href="/PARTYONE-PHP/public/kids.php" class="cat-pill">
          Kids Activities
      </a>
    </div>

    <div class="cat-item">
      <div class="cat-pill">
  Festival Decorations
  <i class="fa-solid fa-chevron-down drop-icon"></i>
</div>
      <div class="cat-dropdown">
        <a href="#">Diwali</a>
        <a href="#">Christmas</a>
        <a href="#">New Year</a>
      </div>
    </div>

    <div class="cat-item">
      <div class="cat-pill">
  Candlelight Dinners
  <i class="fa-solid fa-chevron-down drop-icon"></i>
</div>
      <div class="cat-dropdown">
        <a href="#">Rooftop</a>
        <a href="#">Private Dining</a>
        <a href="#">Beachside</a>
      </div>
    </div>

    <div class="cat-item">
      <div class="cat-pill">
  Corporate Planner
  <i class="fa-solid fa-chevron-down drop-icon"></i>
</div>
      <div class="cat-dropdown">
        <a href="#">Office Parties</a>
        <a href="#">Product Launch</a>
        <a href="#">Team Events</a>
      </div>
    </div>

    <div class="cat-item">
      <div class="cat-pill">
  Occasions
  <i class="fa-solid fa-chevron-down drop-icon"></i>
</div>
      <div class="cat-dropdown">
        <a href="#">Anniversary</a>
        <a href="#">Proposal</a>
        <a href="#">Surprise Setup</a>
      </div>
    </div>

  </nav>

  <!-- ================= MOBILE SIDE MENU ================= -->
<div class="mobile-menu" id="mobileMenu">

  <h4>Categories</h4>
  <a href="#">Birthday</a>
  <a href="#">Decorations</a>
  <a href="/PARTYONE-PHP/public/kids.php">Kids Activities</a>
  <a href="#">Festival Decorations</a>
  <a href="#">Candlelight Dinners</a>
  <a href="#">Corporate Planner</a>
  <a href="#">Occasions</a>

  <div class="mobile-login-cta" onclick="openLogin()">
    <i class="fa-regular fa-user"></i> Login / Signup
  </div>

</div>

</header>



<script>
function toggleMobileMenu() {
  document.getElementById("mobileMenu").classList.toggle("open");
}
function toggleSub(el) {
  el.classList.toggle("active");
}











function openLogin() {
  document.getElementById("loginPopup").style.display = "flex";
  document.getElementById("mobileMenu")?.classList.remove("open");
}

function closeLogin() {
  document.getElementById("loginPopup").style.display = "none";
}











</script>

<!-- ================= LOGIN POPUP ================= -->
<div id="loginPopup" class="login-overlay" onclick="closeLogin()">

  <div class="login-modal" onclick="event.stopPropagation()">

    <button class="login-close" onclick="closeLogin()">✕</button>

    <div class="login-icon">
      <i class="fa-regular fa-user"></i>
    </div>

    <h3>Login with Mobile</h3>
    <p>Enter your phone number to continue</p>

    <div class="login-phone">
      <span>+91</span>
      <input type="tel" placeholder="Enter mobile number" maxlength="10">
    </div>

    <button class="login-btn">Send OTP</button>

  </div>
</div>

</body>
</html>
