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
/* .category-bar {
  display: flex;
  justify-content: space-between;   
  align-items: center;
  padding: 12px 32px 16px;
  width: 100%;
} */

/* Make each category take equal width */
/* .cat-item {
  flex: 1;                 
  display: flex;
  justify-content: center; 
  position: relative;
} */

/* Make pills responsive */
/* .cat-pill {
  width: 90%;              
  text-align: center;
} */


/* 
.cat-pill,
.cat-pill:hover,
.cat-pill:focus,
.cat-pill:active,
.cat-pill:visited {
  text-decoration: none !important;
} */



/* .cat-pill {
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

  gap: 28px; 

  box-shadow: 0 6px 14px rgba(0,0,0,0.15);
  transition: all 0.25s ease;
}

 */






/* 
.cat-pill:hover {
  transform: translateY(-2px);
  
} */







/* CLICK FEEDBACK */
/* .cat-pill:active {
  transform: translateY(0);
  box-shadow:
    inset 0 2px 4px rgba(0,0,0,0.25);
}
 */


/* ================= PERFECT CENTERED DROPDOWN ================= */
/* .cat-dropdown {
  position: absolute;
  top: calc(100% + 10px);
  left: 50%;
  transform: translateX(-50%); 

  background: #ffffff;
  min-width: 220px;
  border-radius: 18px;
  box-shadow: 0 20px 45px rgba(0,0,0,0.15);

  opacity: 0;
  visibility: hidden;
  transition: opacity 0.18s ease, visibility 0.18s ease;

  z-index: 9999;
  overflow: hidden;
} */


/* .cat-dropdown a {
  display: block;
  padding: 12px 16px;
  font-size: 14px;
  color: #111;

  text-decoration: none !important;  
} */

/* Remove underline in all states */
/* .cat-dropdown a:hover,
.cat-dropdown a:focus,
.cat-dropdown a:active,
.cat-dropdown a:visited {
  text-decoration: none !important;
}

.cat-dropdown a:hover {
  background: #f3f4f6;
}


.cat-item:hover .cat-dropdown {
  opacity: 1;
  visibility: visible;
}
 */


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





/* Dropdown icon style */
.drop-icon {
  font-size: 12px;
  transition: transform 0.25s ease;
}

/* Rotate icon when hovering */
.cat-item:hover .drop-icon {
  transform: rotate(180deg);
}











/* =========================================
   ULTRA PREMIUM CATEGORY STRAP
========================================= */

.premium-category-bar {
  width: 100%;
  background: #471010;
  border-top: 1px solid rgba(0,0,0,0.04);
  border-bottom: 1px solid rgba(0,0,0,0.06);
}

/* Container */
.premium-categories {
  max-width: 1280px;
  margin: 0 auto;
  padding: 12px 32px;

  display: flex;
  align-items: center;
  gap: 42px;
}

/* Category Item */
.premium-item {
  position: relative;
  font-size: 15px;
  font-weight: 500;
  color: #f2e7e7;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 6px;

  transition: all 0.25s ease;
}

/* Chevron icon */
.premium-item i {
  font-size: 11px;
  opacity: 0.6;
  transition: transform 0.25s ease;
}

/* Hover effect */
.premium-item:hover {
  color: #d71fce;
}

/* Elegant underline animation */
.premium-item::after {
  content: "";
  position: absolute;
  bottom: -6px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #d71fce;
  transition: width 0.3s ease;
}

.premium-item:hover::after {
  width: 100%;
}

/* Rotate icon on hover */
.premium-item:hover i {
  transform: rotate(180deg);
}

/* Highlight (Corporate Events) */
.premium-item.highlight {
  color: #8b5cf6;
  font-weight: 600;
}

.premium-item.highlight::after {
  background: #8b5cf6;
}

/* ================= DROPDOWN ================= */

.premium-dropdown {
  position: absolute;
  top: 34px;
  left: 0;

  background: #ffffff;
  min-width: 220px;

  border-radius: 14px;
  box-shadow: 0 25px 60px rgba(0,0,0,0.12);
  padding: 10px 0;

  opacity: 0;
  visibility: hidden;
  transform: translateY(10px);
  transition: all 0.25s ease;
  z-index: 9999;
}

/* Dropdown links */
.premium-dropdown a {
  display: block;
  padding: 12px 18px;
  font-size: 14px;
  color: #111827;
  text-decoration: none;
  transition: background 0.2s ease;
}

.premium-dropdown a:hover {
  background: #f9fafb;
}

/* Show dropdown */
.premium-item:hover .premium-dropdown {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

/* Hide on mobile */
@media (max-width: 768px) {
  .premium-category-bar {
    display: none;
  }
}




/* Remove dropdown arrow spacing for direct link */
.premium-item.no-dropdown {
  text-decoration: none;
  color: #f2e7e7;
  font-weight: 500;
  position: relative;
}

/* Hover effect */
.premium-item.no-dropdown:hover {
  color:  #d71fce;
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


















/* ================= ULTRA PREMIUM CITY POPUP (FIXED ALIGNMENT) ================= */

.po-city-overlay {
  position: fixed;
  inset: 0;
  background: rgba(15, 23, 42, 0.55);
  backdrop-filter: blur(12px);
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 9999999;
  padding: 24px;
}

.po-city-overlay.active {
  display: flex;
}



.po-city-modal {
  width: 100%;
  max-width: 840px;
  height: 80vh;                 /* 🔥 fixed popup height */
  background: #ffffff;
  border-radius: 18px;

  padding: 60px 44px 40px;

  box-shadow: 0 50px 100px rgba(0,0,0,0.25);
  position: relative;
  animation: poCityPop 0.3s ease;

  display: flex;                /* 🔥 important */
  flex-direction: column;       /* 🔥 vertical layout */
}



@keyframes poCityPop {
  from { opacity: 0; transform: translateY(20px) scale(0.96); }
  to   { opacity: 1; transform: translateY(0) scale(1); }
}




  .po-city-close {
  position: absolute;
  top: 9px;
  right: 9px;

  width: 42px;
  height: 42px;

  border-radius: 50%;
  border: none;

  background: #0f172a;   /* dark premium look */
  color: #ffffff;

  display: flex;
  align-items: center;
  justify-content: center;

  padding: 0;            /* 🔥 important */
  line-height: 1;        /* 🔥 removes vertical shift */
  font-size: 18px;       /* slightly larger */
  font-weight: 500;

  cursor: pointer;

  box-shadow: 0 10px 25px rgba(0,0,0,0.18);
  transition: all 0.25s ease;
}

.po-city-close:hover {
  background: #e11d48;
  transform: rotate(90deg) scale(1.08);
}

/* SEARCH */
.po-city-search {
  display: flex;
  align-items: center;
  gap: 12px;
  background: #f1f5f9;
  border-radius: 20px;
  padding: 16px 20px;
  margin-bottom: 26px;
  border: 1px solid #e2e8f0;
}

.po-city-search input {
  border: none;
  background: transparent;
  width: 100%;
  outline: none;
  font-size: 15px;
  color: #111827;
}

/* TITLE */
.po-city-title {
  font-size: 17px;
  font-weight: 700;
  margin-bottom: 28px;
  color: #111827;
}

/* GRID */
.po-city-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 36px 40px;
  justify-items: center;
  align-items: start;
}

/* ITEM */
.po-city-item {
  width: 110px;                 /* FIXED WIDTH */
  text-align: center;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* PERFECT CIRCLE */
.po-city-item img {
  width: 95px;
  height: 95px;
  border-radius: 50%;
  object-fit: cover;
  object-position: center;
  box-shadow: 0 15px 35px rgba(0,0,0,0.15);
  margin-bottom: 14px;
  transition: all 0.3s ease;
}

/* PERFECT TITLE ALIGNMENT */
.po-city-item span {
  font-size: 14px;
  font-weight: 500;
  color: #111827;
  line-height: 1.2;
  min-height: 18px;   /* 🔥 FORCE SAME TITLE HEIGHT */
}

/* HOVER EFFECT */
.po-city-item:hover img {
  transform: translateY(-6px) scale(1.06);
  box-shadow: 0 22px 45px rgba(0,0,0,0.20);
}

.po-city-item:hover span {
  color: #e11d48;
}
.po-city-noresult {
  font-size: 14px;
  color: #ef4444;
  margin: 10px 0 20px;
  display: none;   /* ✅ Hidden by default */
}


.po-scroll-area {
  flex: 1;                  /* 🔥 take remaining height */
  overflow-y: auto;         /* 🔥 everything scrolls */
  margin-top: 20px;
  padding-right: 6px;
}

.po-scroll-area {
  flex: 1;
  overflow-y: auto;
  margin-top: 20px;
  padding-right: 8px;
}

/* Outer scrollbar styling */
.po-scroll-area::-webkit-scrollbar {
  width: 8px;
}

.po-scroll-area::-webkit-scrollbar-track {
  background: #f1f5f9;
  border-radius: 10px;
}

.po-scroll-area::-webkit-scrollbar-thumb {
  background: #9ca3af;
  border-radius: 10px;
}

.po-scroll-area::-webkit-scrollbar-thumb:hover {
  background: #6b7280;
}









/* =========================================================
   📱 CITY POPUP – MOBILE RESPONSIVE (NO DESKTOP CHANGES)
   ========================================================= */

@media (max-width: 768px) {

  /* Overlay padding */
  .po-city-overlay {
    padding: 16px;
  }

  /* Modal becomes full height */
  .po-city-modal {
    width: 100%;
    max-width: 100%;
    height: 92vh;                 /* fit mobile screen */
    border-radius: 16px;
    padding: 50px 18px 20px;      /* reduced spacing */
  }

  /* Close button smaller */
  .po-city-close {
    width: 36px;
    height: 36px;
    font-size: 16px;
    top: 10px;
    right: 10px;
  }

  /* Search bar smaller */
  .po-city-search {
    padding: 12px 14px;
    border-radius: 16px;
  }

  .po-city-search input {
    font-size: 14px;
  }

  /* Grid changes to 3 columns */
  .po-city-grid {
    grid-template-columns: repeat(3, 1fr);
    gap: 22px 18px;
  }

  /* Smaller city item */
  .po-city-item {
    width: 100%;
  }

  .po-city-item img {
    width: 70px;
    height: 70px;
    margin-bottom: 8px;
  }

  .po-city-item span {
    font-size: 13px;
  }

  /* View All button spacing */
  .po-view-all-wrapper {
    margin-top: 20px;
  }

  .po-view-all-btn {
    font-size: 13px;
    padding: 8px 16px;
  }

  /* All cities section spacing */
  .po-all-cities {
    margin-top: 20px;
  }

}














/* ================= VIEW ALL BUTTON ================= */

.po-view-all-wrapper {
  display: flex;
  justify-content: center;
  margin-top: 30px;
}

.po-view-all-btn {
  background: #1f2937;
  color: #fff;
  border: none;
  padding: 10px 22px;
  border-radius: 14px;
  font-size: 14px;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 8px;
  transition: 0.25s ease;
}

.po-view-all-btn:hover {
  background: #111827;
}

/* ================= ALL CITIES SECTION ================= */

.po-all-cities {
  display: none;
  margin-top: 30px;
  padding-right: 6px;
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
  <!-- <nav class="category-bar">

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

  </nav> -->
<!-- PREMIUM CATEGORY STRAP (DESKTOP ONLY) -->
<nav class="premium-category-bar">

  <div class="premium-categories">

    <div class="premium-item">
      Anniversary <i class="fa-solid fa-chevron-down"></i>
      <div class="premium-dropdown">
        <a href="#">Romantic Anniversary</a>
        <a href="#">Surprise Setup</a>
      </div>
    </div>

    <div class="premium-item">
      Birthdays <i class="fa-solid fa-chevron-down"></i>
      <div class="premium-dropdown">
        <a href="#">Kids Birthday</a>
        <a href="#">Adult Birthday</a>
      </div>
    </div>

    <div class="premium-item">
      Gifts <i class="fa-solid fa-chevron-down"></i>
      <div class="premium-dropdown">
        <a href="#">Flowers</a>
        <a href="#">Gift Hampers</a>
      </div>
    </div>

    <div class="premium-item">
      Candlelight Dinners <i class="fa-solid fa-chevron-down"></i>
      <div class="premium-dropdown">
        <a href="#">Rooftop</a>
        <a href="#">Private Dining</a>
      </div>
    </div>

    <div class="premium-item">
      Decorations <i class="fa-solid fa-chevron-down"></i>
      <div class="premium-dropdown">
        <a href="#">Balloon Decor</a>
        <a href="#">Theme Decor</a>
      </div>
    </div>

    <div class="premium-item">
      Festivals <i class="fa-solid fa-chevron-down"></i>
      <div class="premium-dropdown">
        <a href="#">Diwali</a>
        <a href="#">Christmas</a>
      </div>
    </div>

    <div class="premium-item">
     <a href="/PARTYONE-PHP/public/kids.php" class="premium-item no-dropdown"> Kid's Celebrations</a> <i class="fa-solid fa-chevron-down"></i>
      
      <!-- <div class="premium-dropdown">
        <a href="#">Magic Show</a>
        <a href="#">Fun Games</a>
      </div> -->
    </div>

    <div class="premium-item highlight">
      Corporate Events
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



<!-- ================= PREMIUM CITY POPUP ================= -->
<div id="cityPopup" class="po-city-overlay">

  <div class="po-city-modal">

    <button class="po-city-close" onclick="closeCityPopup()">✕</button>

    <!-- Search -->
    <div class="po-city-search">
      <i class="fa-solid fa-magnifying-glass"></i>
      <input type="text" id="citySearchInput" placeholder="Search for location...">
    </div>
 
   <!-- SCROLLABLE CONTENT START -->
<div class="po-scroll-area">

  <p class="po-city-noresult" id="noResultText">No results found</p>

  <h4 class="po-city-title">Popular Locations</h4>

  <div class="po-city-grid" id="cityGrid">

    <div class="po-city-item" data-city="Agra" onclick="setCity('Agra')">
      <img src="https://jusst4you.com/wp-content/uploads/2025/04/agra.png">
      <span>Agra</span>
    </div>

    <div class="po-city-item" data-city="Bangalore" onclick="setCity('Bangalore')">
      <img src="https://img.ebonow.com/cityImages/bangalore_place.webp">
      <span>Bangalore</span>
    </div>

    <div class="po-city-item" data-city="Bhopal" onclick="setCity('Bhopal')">
      <img src="https://jusst4you.com/wp-content/uploads/2025/04/bhopal.png">
      <span>Bhopal</span>
    </div>

    <div class="po-city-item" data-city="Chandigarh" onclick="setCity('Chandigarh')">
      <img src="https://jusst4you.com/wp-content/uploads/2025/11/WhatsApp-Image-2025-10-31-at-1.44.26-PM.jpeg">
      <span>Chandigarh</span>
    </div>

    <div class="po-city-item" data-city="Delhi NCR" onclick="setCity('Delhi NCR')">
      <img src="https://img.ebonow.com/cityImages/Delhi-NCR.webp">
      <span>Delhi NCR</span>
    </div>

    <div class="po-city-item" data-city="Goa" onclick="setCity('Goa')">
      <img src="https://jusst4you.com/wp-content/uploads/2025/04/goa.png">
      <span>Goa</span>
    </div>

    <div class="po-city-item" data-city="Jaipur" onclick="setCity('Jaipur')">
      <img src="https://jusst4you.com/wp-content/uploads/2025/04/jaipur.png">
      <span>Jaipur</span>
    </div>

    <div class="po-city-item" data-city="Kolkata" onclick="setCity('Kolkata')">
      <img src="https://jusst4you.com/wp-content/uploads/2025/12/Kolkata-icon.png">
      <span>Kolkata</span>
    </div>

    <div class="po-city-item" data-city="Manali" onclick="setCity('Manali')">
      <img src="https://jusst4you.com/wp-content/uploads/2025/04/manali.png">
      <span>Manali</span>
    </div>

    <div class="po-city-item" data-city="Mumbai" onclick="setCity('Mumbai')">
      <img src="https://img.ebonow.com/custom/indiaGate.webp">
      <span>Mumbai</span>
    </div>

  </div>

  <!-- View All Button -->
  <div class="po-view-all-wrapper">
    <button id="viewAllBtn" class="po-view-all-btn">
      View All Cities <i class="fa-solid fa-arrow-down"></i>
    </button>
  </div>

<!-- Extended Cities -->
<div class="po-all-cities" id="allCitiesSection">

  <h4 class="po-city-title">All Cities</h4>

  <div class="po-city-grid">

    <div class="po-city-item" data-city="Allahabad" onclick="setCity('Allahabad')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyXt6E8Zydm2QNjKI_pqUM-1EITBXcV6Ac3Q&s" alt="Allahabad">
      <span>Allahabad</span>
    </div>

    <div class="po-city-item" data-city="Amritsar" onclick="setCity('Amritsar')">
      <img src="https://static.wixstatic.com/media/3417b6_9d136d18669d49d6ae8315c01402a94d~mv2.jpg/v1/fill/w_640,h_480,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/3417b6_9d136d18669d49d6ae8315c01402a94d~mv2.jpg" alt="Amritsar">
      <span>Amritsar</span>
    </div>

    <div class="po-city-item" data-city="Aurangabad" onclick="setCity('Aurangabad')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-UaFLYqpNfjm6__lH0OBxbEhx9bqEN1z3yag0hY_g2Q&s=10" alt="Aurangabad">
      <span>Aurangabad</span>
    </div>

    <div class="po-city-item" data-city="Coimbatore" onclick="setCity('Coimbatore')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOK8RhCtZ4FLlcT6LQbbs2Ep8hHeVHEi0DRHHpj1NnNw&s=10" alt="Coimbatore">
      <span>Coimbatore</span>
    </div>

    <div class="po-city-item" data-city="Erode" onclick="setCity('Erode')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpZZrC4TszMtjswEQuC7q-dW-QEUzJ2QkNQjg6L7gZ-A&s=10" alt="Erode">
      <span>Erode</span>
    </div>

    <div class="po-city-item" data-city="Gwalior" onclick="setCity('Gwalior')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsCQhKw4VXblRJOwzKWR8l03uiSyYkOORueF0c6Apl6w&s=10" alt="Gwalior">
      <span>Gwalior</span>
    </div>

    <div class="po-city-item" data-city="Indore" onclick="setCity('Indore')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5c8rioelxZkGOlnpZrqjABZIWZEBLD-RQM3xK8k7I5A&s=10" alt="Indore">
      <span>Indore</span>
    </div>

    <div class="po-city-item" data-city="Jabalpur" onclick="setCity('Jabalpur')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9D4TNHUeg6ma9wemzkGD8J6-b7gHU0CtgTbrHpSpsdw&s=10" alt="Jabalpur">
      <span>Jabalpur</span>
    </div>

    <div class="po-city-item" data-city="Jamshedpur" onclick="setCity('Jamshedpur')">
      <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/e2/a5/9a/jubilee-park.jpg?w=500&h=500&s=1" alt="Jamshedpur">
      <span>Jamshedpur</span>
    </div>

    <div class="po-city-item" data-city="Kanpur" onclick="setCity('Kanpur')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTubvOOBb96Z9pNQjMlrVfdqv82VA9lAtx2xrVIw3ugBA&s" alt="Kanpur">
      <span>Kanpur</span>
    </div>
    
    <div class="po-city-item" data-city="Kerala" onclick="setCity('Kerala')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIz9s1BezeBDE0acNJzOrJPpZ6N6BDKd-2r_f4Y2NEOA&s=10" alt="Kerala">
      <span>Kerala</span>
    </div>

    <div class="po-city-item" data-city="Kochi" onclick="setCity('Kochi')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ701BD_yabxoNiXFkoANkXuh08tJ8acYKBqy53WwMmQ&s=10" alt="Kochi">
      <span>Kochi</span>
    </div>

    <div class="po-city-item" data-city="Kota" onclick="setCity('Kota')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQErfTMlwyOOicGtfZZDtyjP-UC1OPqlBRQIvEQDzLeVQ&s=10" alt="Kota">
      <span>Kota</span>
    </div>

    <div class="po-city-item" data-city="Ludhiana" onclick="setCity('Ludhiana')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPnqHdHCYnZ6Pu-EM_E55U09CFmppuyuDhU3YNB4bP1g&s=10" alt="Ludhiana">
      <span>Ludhiana</span>
    </div>

    <div class="po-city-item" data-city="Madurai" onclick="setCity('Madurai')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiREs48ZbV53DX1zd7DRoKRdpGugaKlSAFYlUJUyyHjg&s=10" alt="Madurai">
      <span>Madurai</span>
    </div>

    <div class="po-city-item" data-city="Meerut" onclick="setCity('Meerut')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkGECsboimuL03j0zb8bKUno__AUkNX-UUEsNU5LfzAw&s=10" alt="Meerut">
      <span>Meerut</span>
    </div>

    <div class="po-city-item" data-city="Nagpur" onclick="setCity('Nagpur')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMKhmXsItQHwzk-jRWrnPvzhveXvPoqx1IzpnEjn8WWw&s=10" alt="Nagpur">
      <span>Nagpur</span>
    </div>

    <div class="po-city-item" data-city="Kanpur" onclick="setCity('Kanpur')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTubvOOBb96Z9pNQjMlrVfdqv82VA9lAtx2xrVIw3ugBA&s" alt="Kanpur">
      <span>Kanpur</span>
    </div>

    <div class="po-city-item" data-city="Nashik" onclick="setCity('Nashik')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjRqoUNDmOEr7qujpli5azp4YdYLB8bUlINLhnu1W9-Q&s=10" alt="Nashik">
      <span>Nashik</span>
    </div>
    
    <div class="po-city-item" data-city="Patna" onclick="setCity('Patna')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsEh__oj7YpM0QfVDKerC3k84pnNB6-tPiTmO7Alg95A&s=10" alt="Patna">
      <span>Patna</span>
    </div>

    <div class="po-city-item" data-city="Rajkot" onclick="setCity('Rajkot')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8J9VNNdvgBtv7JwqUqKuWZXrGKzBJGLC8_WA0Adyv0A&s=10" alt="Rajkot">
      <span>Rajkot</span>
    </div>

    <div class="po-city-item" data-city="Ranchi" onclick="setCity('Ranchi')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1hvdHHn4EAHmLt6B_gxohdbIGZih3AXRTM1_YfvLUQQ&s=10" alt="Ranchi">
      <span>Ranchi</span>
    </div>

    <div class="po-city-item" data-city="Salem" onclick="setCity('Salem')">
      <img src="https://i.natgeofe.com/n/90b7ed90-fa52-4a36-93a2-3498149e06ca/PD82GF.jpg" alt="Salem">
      <span>Salem</span>
    </div>

    <div class="po-city-item" data-city="Thiruvananthapuram" onclick="setCity('Thiruvananthapuram')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwIZ4XZUIt8K2iovsPAczOkGZFvT0t1YYSwrwJKVr96A&s=10" alt="Thiruvananthapuram">
      <span>Thiruvananthapuram</span>
    </div>

    <div class="po-city-item" data-city="Simla" onclick="setCity('Simla')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEKq2YR5dHluLbW7qnH7gxOqpJcoDGIgqEefQ3t02--w&s=10" alt="Simla">
      <span>Simla</span>
    </div>

    <div class="po-city-item" data-city="Surat" onclick="setCity('Surat')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRINnLlZ22XPWuWQAPExzu2yESY4AN4GC6MvDKJh1l-CA&s=10" alt="Surat">
      <span>Surat</span>
    </div>

    <div class="po-city-item" data-city="Trichi" onclick="setCity('Trichi')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1seQb63cgwWzAn6OlA5K25bQIKcAxYwPx764k1wz9rg&s=10" alt="Trichi">
      <span>Trichi</span>
    </div>

    <div class="po-city-item" data-city="Vadodara" onclick="setCity('Vadodara')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7zNVNm57e5qLSkZ6OcdRKdKMaZzoPPlVh2F-EylHwWg&s=10" alt="Vadodara">
      <span>Vadodara</span>
    </div>

    <div class="po-city-item" data-city="Varanasi" onclick="setCity('Varanasi')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwANVnYkYC4gnNMh5lNEdNU13Ccx_avOXCuvGcRWULig&s=10" alt="Varanasi">
      <span>Varanasi</span>
    </div>

    <div class="po-city-item" data-city="Vijayawada" onclick="setCity('Vijayawada')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt3jLaAMY4_zyA4MgCtzp50tHPesDiLONr1s4iBZycJw&s=10" alt="Vijayawada">
      <span>Vijayawada</span>
    </div>

    <div class="po-city-item" data-city="Vishakapatnam" onclick="setCity('Vishakapatnam')">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGmK_OmZ_KlEzLjLQQYvIcbOFqLA3FDckEcXUuCRY16A&s=10" alt="Vishakapatnam">
      <span>Vishakapatnam</span>
    </div>


    </div>

  </div>

</div>
<!-- SCROLLABLE CONTENT END -->

    
  </div>
</div>


<script src="/PARTYONE-PHP/assets/js/city-popup.js" defer></script>

</body>
</html>
