<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Party One</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="icon" href="/PARTYONE-PHP/public/favicon.ico">

<style>
/* ================= BASE ================= */
* {
  box-sizing: border-box;
}

.mobile-only { display: none; }

/* ================= HEADER BASE ================= */
.site-header {
  background: #f5efef;
  border-bottom: 1px solid #eee;
}

.top-header {
  display: flex;
  align-items: center;
  gap: 16px;
  padding: 14px 32px;
}

/* LOGO */
.logo img {
  height: 56px;
  display: block;
}

/* ================= SEARCH ================= */
.search-box {
  position: relative;
  flex: 1;
  max-width: 520px;
}

.search-box input {
  width: 100%;
  height: 48px;
  padding: 0 52px 0 18px;
  border-radius: 14px;
  border: 1.5px solid #111;
  font-size: 15px;
  outline: none;
}

.search-btn {
  position: absolute;
  right: 14px;
  top: 50%;
  transform: translateY(-50%);
  background: none;
  border: none;
  font-size: 18px;
  cursor: pointer;
}

/* ================= DESKTOP RIGHT ================= */
.right-links {
  display: flex;
  align-items: center;
  gap: 14px;
}

.right-links a {
  font-size: 13px;
  font-weight: 600;
  text-decoration: none;
  color: #111;
}

/* CITY BUTTON (BOXED) */
.city-btn {
  padding: 8px 14px;
  border-radius: 12px;
  border: 1.5px solid #e11d48;
  background: #fff;
  font-size: 14px;
  font-weight: 600;
  color: #e11d48;
  cursor: pointer;
}

/* ================= MOBILE HEADER ================= */
@media (max-width: 768px) {

  .menu-bar { display: none !important; }
  .right-links { display: none !important; }
  .mobile-only { display: flex; }

  .top-header {
    flex-wrap: wrap;
    gap: 12px;
    padding: 14px 16px;
  }

  /* MOBILE ICON ROW */
  .header-actions {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-left: auto;
  }

  /* CITY – BOXED */
  .header-actions .city-btn {
    padding: 6px 12px;
    border-radius: 12px;
    font-size: 13px;
  }

  /* CART – OUTLINED BOX */
  .cart-btn {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    border: 1.5px solid #2563eb;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #2563eb;
    background: #fff;
    font-size: 16px;
    position: relative;
  }

  /* SEARCH FULL WIDTH */
  .search-box {
    width: 100%;
    max-width: none;
  }

  .search-box input {
    height: 48px;
    border-radius: 14px;
    border: 1.5px solid #111;
    font-size: 14px;
  }

  .search-btn {
    right: 14px;
  }

  /* HAMBURGER */
  .mobile-menu-btn {
    background: none;
    border: none;
    font-size: 22px;
    cursor: pointer;
  }
}

/* ================= MOBILE SIDE MENU ================= */
.mobile-menu {
  position: fixed;
  top: 0;
  right: -100%;
  width: 80%;
  height: 100vh;
  background: #fff;
  padding: 20px;
  box-shadow: -4px 0 20px rgba(0,0,0,.15);
  transition: right .3s ease;
  z-index: 9999;
}

.mobile-menu.open {
  right: 0;
}

.mobile-menu h3 {
  font-size: 13px;
  font-weight: 700;
  margin-bottom: 12px;
  color: #6b7280;
  text-transform: uppercase;
}

.mobile-item {
  font-size: 16px;
  font-weight: 600;
  padding: 14px 0;
  display: flex;
  justify-content: space-between;
}

.mobile-submenu {
  display: none;
  padding-left: 12px;
}

.mobile-item.active + .mobile-submenu {
  display: block;
}









/* LOGIN MODAL MOBILE FIX */
@media (max-width: 768px) {
  .login-modal {
    width: 90vw;
    max-width: 360px;
    border-radius: 16px;
  }
}

















/* ================= LOGIN POPUP – FINAL FIX ================= */

/* Overlay */
.login-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.55);
  backdrop-filter: blur(6px);
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 99999;
}

/* Modal Card */
.login-modal {
  background: #fff;
  width: 380px;
  max-width: 92vw;
  padding: 26px 24px 28px;
  border-radius: 18px;
  position: relative;
  box-shadow: 0 20px 50px rgba(0,0,0,.25);
  animation: popupFade .35s ease;
}

/* Close button */
.login-close {
  position: absolute;
  top: 14px;
  right: 14px;
  background: none;
  border: none;
  font-size: 20px;
  cursor: pointer;
}

/* Headings */
.login-modal h3 {
  text-align: center;
  font-size: 20px;
  margin-bottom: 6px;
}

.login-modal p {
  text-align: center;
  font-size: 14px;
  color: #6b7280;
  margin-bottom: 20px;
}

/* Phone field */
.login-phone {
  display: flex;
  align-items: center;
  gap: 10px;
  border-bottom: 1.5px solid #e5e7eb;
  padding-bottom: 8px;
  margin-bottom: 22px;
}

.login-phone span {
  font-size: 14px;
  color: #374151;
}

.login-phone input {
  border: none;
  outline: none;
  font-size: 15px;
  flex: 1;
}

/* Button */
.login-modal .pay-btn {
  width: 100%;
  height: 46px;
  border-radius: 999px;
  font-size: 15px;
  font-weight: 700;
}

/* Desktop animation */
@keyframes popupFade {
  from {
    opacity: 0;
    transform: scale(.92);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

/* ================= MOBILE SLIDE-UP ================= */
@media (max-width: 768px) {

  .login-overlay {
    align-items: flex-end;
  }

  .login-modal {
    width: 100%;
    max-width: 100%;
    border-radius: 20px 20px 0 0;
    animation: slideUp .35s ease;
    padding: 22px 20px 26px;
  }

  @keyframes slideUp {
    from {
      transform: translateY(100%);
    }
    to {
      transform: translateY(0);
    }
  }
}


















/* ================= MOBILE LOGIN CTA (SIDE MENU) ================= */

.mobile-login-cta {
  margin-top: 22px;
  padding: 14px 16px;
  border-radius: 14px;
  background: linear-gradient(135deg, #e11d48, #fb7185);
  color: #fff;
  font-size: 15px;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: space-between;
  cursor: pointer;
  box-shadow: 0 10px 24px rgba(225,29,72,.35);
}

.mobile-login-cta i {
  font-size: 18px;
}

.mobile-login-cta span {
  display: flex;
  align-items: center;
  gap: 10px;
}

/* subtle tap feedback */
.mobile-login-cta:active {
  transform: scale(.97);
}

</style>

</head>

<body>

<header class="site-header">

<div class="top-header">

  <div class="logo">
    <a href="/PARTYONE-PHP/public/index.php">
      <img src="../assets/images/LOGO.svg" alt="Party One">
    </a>
  </div>

  <!-- 🔥 MOBILE ICONS ONLY -->
  <div class="header-actions mobile-only">
<button class="city-btn" onclick="openCityPopup()">
      📍 <span id="headerCityText"><?= $_SESSION['city'] ?? 'Bangalore' ?></span>
    </button>
    <a href="/PARTYONE-PHP/public/checkout.php" class="cart-btn">
      <i class="fa-solid fa-bag-shopping"></i>
    </a>

    <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>

  <!-- SEARCH BAR -->
  <div class="search-box">
    <input type="text" placeholder="Search by event, birthday, party..." />
    <button class="search-btn">
      <i class="fa-solid fa-magnifying-glass"></i>
    </button>
  </div>

  <!-- ✅ DESKTOP HEADER LINKS (UNCHANGED) -->
  <div class="right-links">
    <a href="#">HELP CENTER</a>
    <a href="javascript:void(0)" onclick="openLogin()">LOG IN</a>
    <button class="city-btn" onclick="openCityPopup()">
      📍 <span id="headerCityText"><?= $_SESSION['city'] ?? 'Bangalore' ?></span>
    </button>
  </div>

</div>

<!-- DESKTOP MENU (UNCHANGED) -->
<nav class="menu-bar">

  <div class="menu-item">Anniversary <span class="caret">▾</span>
    <div class="dropdown">
      <a href="#">Room Decor</a>
      <a href="#">Surprise Setup</a>
      <a href="#">Romantic Themes</a>
    </div>
  </div>

  <div class="menu-item">Gifts <span class="caret">▾</span>
    <div class="dropdown">
      <a href="#">Flowers</a>
      <a href="#">Cakes</a>
      <a href="#">Gift Hampers</a>
    </div>
  </div>

  <div class="menu-item">Candlelight Dinners <span class="caret">▾</span>
    <div class="dropdown">
      <a href="#">Private Dining</a>
      <a href="#">Rooftop Dinner</a>
      <a href="#">Beachside Dinner</a>
    </div>
  </div>

  <div class="menu-item">Decorations <span class="caret">▾</span>
    <div class="dropdown">
      <a href="#">Balloon Decor</a>
      <a href="#">Theme Decor</a>
      <a href="#">Room Decor</a>
    </div>
  </div>

  <div class="menu-item">Festivals <span class="caret">▾</span>
    <div class="dropdown">
      <a href="#">Diwali</a>
      <a href="#">Christmas</a>
      <a href="#">New Year</a>
    </div>
  </div>

  <!-- <div class="menu-item">Kid's Activities <span class="caret"></span> -->
    <!-- <div class="dropdown">
      <a href="/PARTYONE-PHP/public/kids-cartoon-themes.php">Cartoon Themes</a>
      <a href="/PARTYONE-PHP/public/kids-balloon-parties.php">Balloon Parties</a>
      <a href="/PARTYONE-PHP/public/kids-magic-shows.php">Magic Shows</a>
    </div> -->
  <!-- </div> -->
   <div class="menu-item">
  <a href="/PARTYONE-PHP/public/kids-activities.php"
     style="text-decoration:none;color:inherit;">
     Kid's Activities
  </a>
</div>


  <div class="menu-item">Corporate Events <span class="caret">▾</span>
    <div class="dropdown">
      <a href="#">Office Decor</a>
      <a href="#">Product Launch</a>
      <a href="#">Team Parties</a>
    </div>
  </div>

</nav>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">

  <h3>Categories</h3>

  <div class="mobile-item" onclick="toggleSub(this)">Anniversary ▾</div>
  <div class="mobile-submenu">
    <a href="#">Room Decor</a>
    <a href="#">Surprise Setup</a>
    <a href="#">Romantic Themes</a>
  </div>

  <div class="mobile-item" onclick="toggleSub(this)">Gifts ▾</div>
  <div class="mobile-submenu">
    <a href="#">Flowers</a>
    <a href="#">Cakes</a>
    <a href="#">Gift Hampers</a>
  </div>

  <div class="mobile-item" onclick="toggleSub(this)">Candlelight Dinners ▾</div>
  <div class="mobile-submenu">
    <a href="#">Private Dining</a>
    <a href="#">Rooftop Dinner</a>
    <a href="#">Beachside Dinner</a>
  </div>

  <div class="mobile-item" onclick="toggleSub(this)">Decorations ▾</div>
  <div class="mobile-submenu">
    <a href="#">Balloon Decor</a>
    <a href="#">Theme Decor</a>
    <a href="#">Room Decor</a>
  </div>

  <div class="mobile-item" onclick="toggleSub(this)">Festivals ▾</div>
  <div class="mobile-submenu">
    <a href="#">Diwali</a>
    <a href="#">Christmas</a>
    <a href="#">New Year</a>
  </div>

  <a href="/PARTYONE-PHP/public/kids-activities.php"
   style="display:block;padding:14px 0;font-weight:600;">
   Kid's Activities
</a>



<div class="mobile-login-cta" onclick="openLogin()">
  <span>
    <i class="fa-regular fa-user"></i>
    Login / Signup
  </span>
  <i class="fa-solid fa-arrow-right"></i>
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














<!-- LOGIN POPUP -->
<div id="loginPopup" class="login-overlay">
  <div class="login-modal">

    <button class="login-close" onclick="closeLogin()">✕</button>

    <img src="../assets/images/login/login-icon.svg"
         alt="Login"
         style="height:52px;margin:0 auto 14px;display:block;">

    <h3>Please Enter mobile no</h3>
    <p>Login to explore great services</p>

    <div class="login-phone">
      <span>+91</span>
      <input type="tel" placeholder="Enter mobile number">
    </div>

    <button class="pay-btn">Send OTP</button>

  </div>
</div>

</body>
</html>
