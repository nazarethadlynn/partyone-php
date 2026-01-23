<?php include '../includes/header.php'; ?>

<style>
  /* CART HEADER BAR */
.cart-header {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 18px;
}

.cart-back {
  font-size: 22px;
  cursor: pointer;
  user-select: none;
  line-height: 1;
}

.cart-back:hover {
  opacity: 0.7;
}





body {
  background: #f8fafc;
  font-family: Inter, system-ui, sans-serif;
}

/* LAYOUT */
.checkout-wrap {
  max-width: 1200px;
  margin: 30px auto;
  padding: 0 16px;
}
.checkout-grid {
  display: grid;
  grid-template-columns: 2.2fr 1fr;
  gap: 28px;
}

/* BASE CARDS */
.checkout-card,
.summary-card,
.mini-card {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 10px 32px rgba(0,0,0,.06);
}

/* LEFT CARD (UNCHANGED) */
.checkout-card {
  padding: 26px;
}
.checkout-card h2 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
}


.cart-info strong {
  font-size: 17px;
}

.qty-btn {
  width: 28px;
  height: 28px;
  border-radius: 50%;
  background: #f3f4f6;
  display: grid;
  place-items: center;
  font-weight: 700;
  color: #ef4444;
}
.delete-btn {
  color: #ef4444;
  font-size: 14px;
  cursor: pointer;
}




/* ============================= */
/* MAIN PRODUCT – COLUMN LAYOUT */
/* ============================= */

.cart-item {
  display: grid;
  grid-template-columns: 88px 1fr auto auto; /* image | name | price | delete */
  gap: 24px;
  align-items: center;
}


/* Image box */
.cart-item img {
  width: 88px;
  height: 88px;
  border-radius: 14px;
  object-fit: cover;
}

/* Product info */
.cart-info {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

/* Price column */
.cart-price {
  text-align: right;
  font-weight: 700;
  font-size: 16px;
}

/* Delete column */
.cart-actions {
  text-align: right;
}

/* Qty spacing */
.cart-info .qty-box {
  margin-top: 6px;
}







/* ===== ADVANCED BILL SUMMARY (IMAGE 2 STYLE) ===== */

.advanced-summary .highlight {
  font-weight: 600;
}

.advanced-summary .info {
  font-size: 11px;
  border: 1px solid #d1d5db;
  border-radius: 50%;
  padding: 1px 6px;
  margin-left: 4px;
  color: #6b7280;
}

.green {
  color: #16a34a;
  font-weight: 700;
}

.red {
  color: #ef4444;
  font-weight: 700;
}

/* Wave grand total */
.wave-total {
  margin-top: 10px;
  background: #ffedd5;
  padding: 14px 16px;
  border-radius: 14px;
  display: flex;
  justify-content: space-between;
  font-weight: 700;
  color: #0c0804;
  position: relative;
}

/* Payment options */
.payment-options {
  display: flex;
  align-items: center;
  gap: 16px;
  margin: 14px 0 4px;
  font-size: 14px;
  font-weight: 600;
}

.payment-options label {
  display: flex;
  align-items: center;
  gap: 6px;
  cursor: pointer;
}

.payment-options input {
  accent-color: #100904;
}

















/* ADDONS – PRICE NEAR DELETE */

.addons-title {
  font-size: 17px;
  font-weight: 700;
  margin: 20px 0 10px;
}

.addon-row {
  display: grid;
  grid-template-columns: 1fr auto auto; /* name | price | delete */
  gap: 24px;
  align-items: center;
  padding: 12px 0;
  border-bottom: 1px dashed #e5e7eb;
}

/* Left side stays same */
.addon-left {
  display: flex;
  gap: 12px;
  align-items: center;
}

/* Price closer to delete */
.addon-price {
  font-weight: 600;
  white-space: nowrap;
  text-align: right;
}

/* Delete aligned tightly */
.addon-delete {
  text-align: right;
}





.addon-left {
  display: flex;
  gap: 12px;
  align-items: center;
}
.addon-left img {
  width: 46px;
  height: 46px;
  border-radius: 10px;
}

/* REMOVE GAP ABOVE & BELOW TRUST (LAST) CARD */
.right-stack {
  gap: 14px;
}

.right-stack .mini-card:last-child {
  margin-top: -14px;
}


















/* DELIVERY MINI CARD – COMPACT LIKE IMAGE 1 */
.mini-card {
  padding: 6px 10px;              /* reduced padding */
  border-radius: 14px;
  box-shadow: 0 6px 20px rgba(0,0,0,.05);
}


/* Row alignment */
.delivery-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  font-size: 13px;
  font-weight: 600;
  white-space: nowrap;            /* prevents tall wrap */
}

/* Left side (icon + text) */
.delivery-row span {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 13px;
}

/* Right action (Edit) */
.delivery-row a {
  font-size: 12.5px;
  font-weight: 600;
  color: #111827;
  text-decoration: underline;
  padding: 2px 4px;
}


/* Delivery icon (paper plane like reference) */
.delivery-left {
  display: flex;
  align-items: center;
  gap: 20px;                 /* more space before text */
}

.delivery-icon {
  font-size: 18px;           /* bigger icon */
  color: #f97316;            /* same orange */
  line-height: 1;
}





/* COUPON STRAP – EXACT IMAGE STYLE */
.coupon-strap {
  background: #e8f1ff;
  border-radius: 12px;
  padding: 10px 14px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  cursor: pointer;
 /* ✅ ADDED: slight spacing like Image 2 */
  margin: 8px 0;
}

/* Left side */
.coupon-left {
  display: flex;
  align-items: center;
  gap: 10px;              /* space before text */
  font-weight: 600;
  color: #2563eb;
  font-size: 14px;
}

.coupon-icon {
  font-size: 16px;
  color: #2563eb;
}

/* Right side */
.coupon-view-btn {
  background: none;
  border: none;
  color: #2563eb;
  font-weight: 600;
  font-size: 14px;
  cursor: pointer;
  padding: 0;
}

.coupon-view-btn:hover {
  text-decoration: underline;
}




/* ✅ BILL SUMMARY – CLEAN & TIGHT */
.summary-card {
  padding: 12px 18px 20px;   /* ⬅ reduced TOP padding only */
}

.summary-card h3 {
  font-size: 17px;
  font-weight: 700;
  margin: 0 0 12px;          /* ⬅ removed top margin */
}




.summary-row {
  display: flex;
  justify-content: space-between;
  font-size: 14.5px;
  color: #374151;
  margin-bottom: 8px;       /* tighter spacing */
}

.summary-divider {
  height: 1px;
  background: #e5e7eb;
  margin: 12px 0;
}

.total-wave {
  background: #ffedd5;
  padding: 10px 14px;       /* reduced padding */
  border-radius: 12px;
  display: flex;
  justify-content: space-between;
  font-weight: 700;
  color: #f97316;
  font-size: 15px;
  margin-top: 6px;
}

/* PAY BUTTON */
.pay-btn {
  width: 100%;
  margin-top: 14px;
  background: #22c55e;
  color: #fff;
  border: none;
  padding: 14px;
  border-radius: 12px;
  font-size: 15px;
  font-weight: 700;
  cursor: pointer;
}

/* TRUST CARD */
.trust-row {
  display: flex;
  justify-content: space-between;
  text-align: center;
  gap: 10px;
}

.trust-item {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 6px;
  font-size: 13px;
  font-weight: 500;
  color: #111827;
}

.trust-item img {
  width: 26px;
  height: 26px;
}






/* OVERLAY – DARK + BLUR BACKGROUND */
.login-overlay {
  position: fixed;
  inset: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 9999;

  /* Dark overlay */
  background: rgba(0, 0, 0, 0.6);

  /* Blur effect */
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}




/* Modal */
.login-modal {
  background: #fff;
  width: 380px;
  padding: 24px;
  border-radius: 14px;
  position: relative;
  font-family: Arial, sans-serif;
}

/* Close */
.login-close {
  position: absolute;
  top: 12px;
  right: 12px;
  border: none;
  background: none;
  font-size: 18px;
  cursor: pointer;
}

/* Logo */
.login-logo {
  display: block;
  margin: 0 auto 12px;
  height: 40px;
}

/* Headings */
.login-modal h3 {
  text-align: center;
  margin-bottom: 20px;
}

/* Input */
.login-modal input {
  width: 100%;
  height: 44px;
  padding: 0 12px;
  border-radius: 8px;
  border: 1px solid #ccc;
  margin-bottom: 14px;
  font-size: 14px;
}



  .delivery-overlay {
  position: fixed;
  inset: 0;
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 9999;


  background: rgba(0, 0, 0, 0.55);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
}


  .delivery-modal {
  background: #fff;
  width: 520px;
  max-width: 92vw;

  
  margin: 40px 0;             
  padding: 22px 24px 20px;

  border-radius: 16px;
  position: relative;
  font-family: Inter, system-ui, sans-serif;

  overflow: hidden;            
}



.delivery-close {
  position: absolute;
  top: -3px;          /* move slightly outside the card */
  right: -3px;        /* extreme top-right */
  width: 32px;
  height: 32px;
  border-radius: 50%;
  border: none;
  background: #ffffff;
  font-size: 20px;
  cursor: pointer;
  line-height: 1;
  z-index: 20;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.delivery-close:hover {
  background: #f3f4f6;
}



.delivery-modal h2 {
  font-size: 22px;
  margin-bottom: 18px;
}
.delivery-modal h2 span {
  color: #ef476f;
}

  .delivery-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 12px 14px;   /* reduced vertical gap */
}



.delivery-field {
  display: flex;
  flex-direction: column;
  gap: 6px;
  font-size: 13px;
  font-weight: 600;
}


.delivery-field input,
.delivery-field select {
  height: 40px;
}

.delivery-field textarea {
  height: 72px;
}

.delivery-field input,
.delivery-field select,
.delivery-field textarea {
  border-radius: 10px;
  border: 1px solid #e5e7eb;
  padding: 0 12px;
  font-size: 14px;
}



.delivery-field textarea {
  height: 80px;
  resize: none;
  padding-top: 10px;
}

.full {
  grid-column: span 2;
}

/* SAVE BUTTON */
.save-btn {
  margin-top: 18px;
  background: #22c55e;
  color: #fff;
  border: none;
  height: 46px;
  border-radius: 12px;
  font-size: 15px;
  font-weight: 700;
  cursor: pointer;
}



  .popup-pay-btn {
  width: 100%;
  margin-top: 14px;
  background: #22c55e;
  color: #fff;
  border: none;
  height: 48px;          /* reduced */
  border-radius: 12px;
  font-size: 16px;       /* reduced */
  font-weight: 700;
  cursor: pointer;
}


.popup-terms {
  margin-top: 10px;
  font-size: 12px;
  text-align: center;
  color: #6b7280;
}




.popup-terms a {
  color: #6366f1;
  text-decoration: none;
}




/* ===== SECURE PAYMENT SECTION (POPUP BOTTOM) ===== */
.secure-payment-box {
  margin-top: 16px;
  border: 1px solid #e5e7eb;
  border-radius: 12px;
  padding: 14px;
  text-align: center;
}

.secure-title {
  font-size: 15px;
  font-weight: 700;
  margin-bottom: 10px;
  color: #111827;
}

/* Trust badges */
.trust-logos {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap;
  margin-bottom: 12px;
}

.trust-logos img {
  height: 28px;
  object-fit: contain;
}

/* Payment methods */
.payment-methods {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 12px;
  flex-wrap: wrap;
}

.payment-methods img {
  height: 26px;
  object-fit: contain;
}

/* HEADER ROW WITH RIGHT-ALIGNED LOGO */
.delivery-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 18px;
}

.delivery-header h2 {
  font-size: 22px;
  margin: 0;
}

.delivery-header img {
  height: 38px;
  object-fit: contain;
}






/* =============================== */
/* TRUST METRICS – FULL WIDTH BAR */
/* =============================== */

.trust-metrics {
  background: #ffffff;
  margin-top: 50px;
  padding: 56px 20px;
  border-top: 1px solid #e5e7eb;
}

.trust-metrics h2 {
  text-align: center;
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 42px;
  color: #111827;
}

.trust-metrics h2 span {
  color: #ec4899;
  border-bottom: 3px solid #ec4899;
  padding-bottom: 4px;
}

.trust-metrics-grid {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 32px;
}

.trust-metric {
  text-align: center;
}

/* =============================== */
/* CIRCLED TRUST METRIC IMAGES */
/* =============================== */

.trust-metric img {
  width: 90px;
  height: 90px;
  object-fit: contain;

  /* Circle frame */
  border-radius: 50%;
  border: 2px solid #f5c97a;

  padding: 12px;
  background: #fff;

  display: inline-block;
  margin-bottom: 16px;
}






.trust-metric h4 {
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 6px;
  color: #111827;
}

.trust-metric p {
  font-size: 14px;
  color: #6b7280;
  line-height: 1.4;
}

/* Responsive */
@media (max-width: 900px) {
  .trust-metrics-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 28px;
  }
}

@media (max-width: 520px) {
  .trust-metrics-grid {
    grid-template-columns: 1fr;
  }
}



/* PARTY LINKS SECTION */
.party-links-section {
  background: #fff;
  padding: 48px 20px;
  border-top: 1px solid #e5e7eb;
}

.party-links-section h2 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 22px;
  color: #111827;
}

/* CITY TABS */
.party-city-tabs {
  display: flex;
  gap: 26px;
  border-bottom: 1px solid #e5e7eb;
  margin-bottom: 26px;
  overflow-x: auto;
}

.party-city-tabs button {
  background: none;
  border: none;
  padding: 10px 2px;
  font-size: 15px;
  cursor: pointer;
  color: #6b7280;
  border-bottom: 3px solid transparent;
  white-space: nowrap;
}

.party-city-tabs button:hover {
  color: #111827;
}

.party-city-tabs button.active {
  color: #111827;
  font-weight: 600;
  border-bottom-color: #111827;
}

/* LINKS GRID */
.party-links-grid {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: 18px 24px;
}

.party-links-grid a {
  text-decoration: none;
  color: #111827;
  font-size: 14.5px;
  line-height: 1.35;
}

.party-links-grid a span {
  display: block;
  color: #6b7280;
  font-size: 13px;
}

.party-links-grid a:hover {
  color: #ec4899;
}

.party-links-grid a:hover span {
  color: #ec4899;
}

/* RESPONSIVE */
@media (max-width: 1000px) {
  .party-links-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 520px) {
  .party-links-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}




/* ADDON TITLE + QTY BELOW TITLE */
.addon-info {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

/* INLINE QTY CONTROLS */
.addon-qty {
  display: flex;
  align-items: center;
  gap: 10px;
}

.addon-qty strong {
  min-width: 16px;
  text-align: center;
  font-size: 14px;
}






/* ================================================= */
/* =============== MOBILE RESPONSIVE FIX ============ */
/* ================================================= */
@media (max-width: 768px) {

  /* PAGE WRAP */
  .checkout-wrap {
    margin: 12px auto;
    padding: 0 12px;
  }

  /* GRID → SINGLE COLUMN */
  .checkout-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }

  /* LEFT CARD */
  .checkout-card {
    padding: 18px;
  }

  /* CART ITEM STACK */
  .cart-item {
    grid-template-columns: 64px 1fr;
    grid-template-rows: auto auto;
    gap: 12px;
  }

  .cart-price,
  .cart-actions {
    grid-column: span 2;
    text-align: right;
  }

  .cart-item img {
    width: 64px;
    height: 64px;
  }

  /* ADDONS STACK */
  .addon-row {
    grid-template-columns: 1fr auto;
    gap: 10px;
  }

  .addon-price {
    grid-column: 2;
    text-align: right;
  }

  .addon-delete {
    grid-column: span 2;
    text-align: right;
  }

  /* RIGHT STACK */
  .right-stack {
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  /* DELIVERY CARD */
  .mini-card {
    padding: 10px 12px;
  }

  .delivery-row {
    font-size: 13px;
  }

  /* SUMMARY CARD */
  .summary-card {
    padding: 14px 16px 18px;
  }

  .summary-row {
    font-size: 14px;
  }

  /* PAY BUTTON */
  .pay-btn {
    padding: 14px;
    font-size: 15px;
    border-radius: 12px;
  }

  /* TRUST ICONS */
  .trust-row {
    gap: 6px;
  }

  .trust-item img {
    width: 22px;
    height: 22px;
  }

  .trust-item {
    font-size: 12px;
  }

  /* DELIVERY POPUP */
  .delivery-modal {
    width: 94vw;
    max-height: 92vh;
    margin: 16px auto;
    padding: 18px;
    overflow-y: auto;
  }

  .delivery-grid {
    grid-template-columns: 1fr;
  }

  .delivery-field.full {
    grid-column: span 1;
  }

  /* POPUP PAY BUTTON */
  .popup-pay-btn {
    height: 46px;
    font-size: 15px;
  }

  /* COUPON / LOGIN MODALS */
  .login-modal {
    width: 92vw;
    padding: 20px;
  }

  /* TRUST METRICS */
  .trust-metrics {
    padding: 36px 16px;
  }

  .trust-metrics-grid {
    grid-template-columns: 1fr;
    gap: 24px;
  }

  /* PARTY LINKS */
  .party-links-section {
    padding: 32px 16px;
  }

  .party-links-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
  }

  .party-city-tabs {
    gap: 18px;
  }
}

/* EXTRA SMALL PHONES */
@media (max-width: 420px) {

  .cart-header {
    font-size: 18px;
  }

  .checkout-card h2 {
    font-size: 20px;
  }

  .summary-card h3 {
    font-size: 16px;
  }

  .pay-btn {
    font-size: 14px;
    padding: 12px;
  }
}



/* ================================================= */
/* DELIVERY POPUP – MOBILE FULL FIT (NO CLIPPING) */
/* ================================================= */
@media (max-width: 768px) {

  /* Overlay with guaranteed visible background */
  .delivery-overlay {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 32px 0; /* equal top & bottom background gap */
  }

  /* Popup container */
  .delivery-modal {
    width: 88vw;
    max-width: 340px;              /* 🔑 slightly smaller */
    max-height: calc(100vh - 64px);/* 🔑 never touches edges */

    margin: 0 auto;
    padding: 12px 14px 16px;       /* 🔑 compact vertical spacing */

    border-radius: 16px;
    background: #fff;

    display: flex;
    flex-direction: column;
    overflow: hidden;              /* ❌ no scrollbar */
  }

  /* Header */
  .delivery-header {
    margin-bottom: 8px;
  }

  .delivery-header h2 {
    font-size: 18px;
  }

  .delivery-header img {
    height: 28px;
  }

  /* Form */
  .delivery-grid {
    grid-template-columns: 1fr;
    gap: 8px;
  }

  .delivery-field {
    gap: 4px;
    font-size: 12px;
  }

  .delivery-field input,
  .delivery-field select {
    height: 34px;
    font-size: 12.5px;
  }

  .delivery-field textarea {
    height: 56px;
    font-size: 12.5px;
  }

  .delivery-field.full {
    grid-column: span 1;
  }

  /* Pay button */
  .popup-pay-btn {
    margin-top: 8px;
    height: 40px;
    font-size: 14px;
    border-radius: 12px;
  }

  /* Secure payment box */
  .secure-payment-box {
    margin-top: 8px;
    padding: 8px;
  }

  .secure-title {
    font-size: 13px;
    margin-bottom: 6px;
  }

  .trust-logos img {
    height: 20px;
  }

  .payment-methods img {
    height: 18px;
  }

  /* ✅ TERMS — ALWAYS VISIBLE */
  .popup-terms {
    margin-top: 6px;
    font-size: 10.8px;
    line-height: 1.35;
    text-align: center;
  }
}

/* ================================================= */
/* DELIVERY HEADER – BACK ARROW + TITLE */
/* ================================================= */

.delivery-back {
  font-size: 22px;
  font-weight: 700;
  cursor: pointer;
  user-select: none;
  line-height: 1;
}

.delivery-back:hover {
  opacity: 0.7;
}

.delivery-header {
  display: grid;
  grid-template-columns: 1fr auto;
  grid-template-rows: auto auto;
  row-gap: 4px;
  column-gap: 10px;
  align-items: start;
}

.delivery-header .delivery-back {
  grid-column: 1;
  grid-row: 1;
}

.delivery-header h2 {
  grid-column: 1;
  grid-row: 2;
  margin: 0;
}

.delivery-header img {
  grid-column: 2;
  grid-row: 1 / span 2;
  align-self: start;
}










/* ================================================= */
/* FORCE CITY + VENUE SIDE-BY-SIDE ON MOBILE */
/* ================================================= */
@media (max-width: 768px) {

  /* Keep City & Venue in two columns */
  .delivery-grid {
    grid-template-columns: 1fr 1fr;
  }

  /* Make full-width fields truly full */
  .delivery-field.full {
    grid-column: span 2;
  }

  /* Slight spacing tweak so it matches Image 1 */
  .delivery-field select {
    height: 38px;
  }
}








/* ================================================= */
/* MOBILE FINAL FIX – ALL FIELDS FIT INSIDE CARD */
/* ================================================= */
@media (max-width: 768px) {

  /* Card padding reduced */
  .delivery-modal {
    padding: 8px 10px 12px;
  }

  /* Keep City + Venue side-by-side */
  .delivery-grid {
    grid-template-columns: 1fr 1fr;
    gap: 5px 6px;
  }

  /* Full-width rows */
  .delivery-field.full {
    grid-column: span 2;
  }

  /* Labels smaller */
  .delivery-field label {
    font-size: 10.8px;
    line-height: 1.1;
  }

  /* Inputs & selects tighter */
  .delivery-field input,
  .delivery-field select {
    height: 26px;
    font-size: 11px;
    padding: 0 8px;
    border-radius: 8px;
  }

  /* Textarea smaller */
  .delivery-field textarea {
    height: 42px;
    font-size: 11px;
    padding: 6px 8px;
    border-radius: 8px;
  }

  /* Remove extra vertical gaps */
  .delivery-field {
    gap: 2px;
  }

  /* Pay button compact */
  .popup-pay-btn {
    height: 34px;
    font-size: 12.8px;
    margin-top: 6px;
    border-radius: 10px;
  }

  /* Secure payment box compact */
  .secure-payment-box {
    margin-top: 6px;
    padding: 6px;
    border-radius: 10px;
  }

  .secure-title {
    font-size: 11.8px;
    margin-bottom: 4px;
  }

  .trust-logos img {
    height: 15px;
  }

  .payment-methods img {
    height: 14px;
  }

  /* Terms smallest safe size */
  .popup-terms {
    font-size: 9.8px;
    margin-top: 4px;
    line-height: 1.25;
  }
}










/* ================================================= */
/* 🚨 MOBILE FORCE OVERRIDE – EVERYTHING FITS INSIDE */
/* ================================================= */
@media (max-width: 768px) {

  /* Force modal size */
  .delivery-overlay .delivery-modal {
    width: 86vw !important;
    max-width: 330px !important;
    padding: 8px 10px 12px !important;
    overflow: hidden !important;
  }

  /* Force 2-column grid */
  .delivery-overlay .delivery-grid {
    display: grid !important;
    grid-template-columns: 1fr 1fr !important;
    gap: 4px 6px !important;
  }

  /* Full-width rows */
  .delivery-overlay .delivery-field.full {
    grid-column: span 2 !important;
  }

  /* Labels */
  .delivery-overlay .delivery-field label {
    font-size: 10.5px !important;
    line-height: 1.1 !important;
  }

  /* Inputs & selects */
  .delivery-overlay .delivery-field input,
  .delivery-overlay .delivery-field select {
    height: 26px !important;
    font-size: 11px !important;
    padding: 0 8px !important;
    border-radius: 8px !important;
  }

  /* Textarea */
  .delivery-overlay .delivery-field textarea {
    height: 40px !important;
    font-size: 11px !important;
    padding: 6px 8px !important;
    border-radius: 8px !important;
  }

  /* Field spacing */
  .delivery-overlay .delivery-field {
    gap: 2px !important;
  }

  /* Pay button */
  .delivery-overlay .popup-pay-btn {
    height: 34px !important;
    font-size: 12.5px !important;
    margin-top: 6px !important;
    border-radius: 10px !important;
  }

  /* Secure payment box */
  .delivery-overlay .secure-payment-box {
    margin-top: 6px !important;
    padding: 6px !important;
    border-radius: 10px !important;
  }

  .delivery-overlay .secure-title {
    font-size: 11.5px !important;
    margin-bottom: 4px !important;
  }

  .delivery-overlay .trust-logos img {
    height: 14px !important;
  }

  .delivery-overlay .payment-methods img {
    height: 13px !important;
  }

  /* Terms */
  .delivery-overlay .popup-terms {
    font-size: 9.8px !important;
    line-height: 1.25 !important;
    margin-top: 4px !important;
  }
}





















/* ================================================= */
/* ✅ FINAL MOBILE OVERRIDE – PERFECT FIT INSIDE CARD */
/* ================================================= */
@media (max-width: 768px) {

  /* Modal container */
  .delivery-overlay .delivery-modal {
    width: 86vw;
    max-width: 328px;
    padding: 10px 12px 14px;
    box-sizing: border-box;
    overflow: hidden;
  }

  /* Grid layout */
  .delivery-overlay .delivery-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 6px 8px;
    width: 100%;
  }

  /* Full width rows */
  .delivery-overlay .delivery-field.full {
    grid-column: span 2;
  }

  /* Labels */
  .delivery-overlay .delivery-field label {
    font-size: 11px;
    line-height: 1.1;
  }

  /* INPUTS & SELECTS */
  .delivery-overlay .delivery-field input,
  .delivery-overlay .delivery-field select {
    width: 100%;
    height: 28px;
    font-size: 11.5px;
    padding: 0 8px;
    border-radius: 8px;
    box-sizing: border-box;
  }

  /* TEXTAREA */
  .delivery-overlay .delivery-field textarea {
    width: 100%;
    height: 44px;
    font-size: 11.5px;
    padding: 6px 8px;
    border-radius: 8px;
    box-sizing: border-box;
    resize: none;
  }

  /* Reduce vertical gaps */
  .delivery-overlay .delivery-field {
    gap: 3px;
  }

  /* PAY BUTTON */
  .delivery-overlay .popup-pay-btn {
    height: 36px;
    font-size: 13px;
    margin-top: 8px;
    border-radius: 10px;
  }

  /* SECURE PAYMENT BOX */
  .delivery-overlay .secure-payment-box {
    margin-top: 8px;
    padding: 8px;
    border-radius: 10px;
  }

  .delivery-overlay .secure-title {
    font-size: 12.5px;
    margin-bottom: 6px;
  }

  .delivery-overlay .trust-logos img {
    height: 16px;
  }

  .delivery-overlay .payment-methods img {
    height: 15px;
  }

  /* TERMS */
  .delivery-overlay .popup-terms {
    font-size: 10.5px;
    line-height: 1.3;
    margin-top: 6px;
    text-align: center;
  }
}




</style>

<div class="checkout-wrap">
  <div class="checkout-grid">

    <!-- LEFT -->
    <div class="checkout-card">
        <div class="cart-header">
  <span class="cart-back" onclick="goBack()">←</span>
  <span>Cart</span>
</div>

      <div id="productSection"></div>
      <div class="addons-title">Addons</div>
      <div id="addonsList"></div>
    </div>

    <!-- RIGHT -->
    <div class="right-stack">

      <div class="mini-card">
        <div class="delivery-row">
           <span class="delivery-left">
  <i class="fa-solid fa-paper-plane delivery-icon"></i>
  Delivery Details
</span>

          <a href="#">Edit</a>
        </div>
      </div>

    

<div class="coupon-strap" onclick="openCouponPopup()">
  <div class="coupon-left">
    <i class="fa-solid fa-tags coupon-icon"></i>
    <span>Coupon</span>
  </div>

  <button class="coupon-view-btn" type="button">
    View
  </button>
</div>


      <div class="summary-card advanced-summary">

  <h3>🧾 Bill Summary</h3>

  <div class="summary-row">
    <span>Base Total</span>
    <span>₹<span id="baseTotal">0</span></span>
  </div>

  <div class="summary-row">
    <span>Addon Total</span>
    <span>₹<span id="addonsTotal">0</span></span>
  </div>

  <div class="summary-row">
    <span>Platform Charges</span>
    <span>₹0</span>
  </div>

  <div class="summary-divider"></div>

  <div class="summary-row highlight">
    <span>
      Amount to Pay
      <span class="info">?</span>
    </span>
    <span class="green">₹<span id="amountToPay">0</span></span>
  </div>

  <div class="summary-row">
    <span>Amount Due</span>
    <span class="red">₹<span id="amountDue">0</span></span>
  </div>

  <div class="wave-total">
    <span>Grand Total</span>
    <span>₹<span id="grandTotal">0</span></span>
  </div>

  <!-- PAYMENT OPTIONS -->
  <div class="payment-options">
    <span>Payment Options</span>

    <label>
      <input type="radio" name="paymentType" value="50" checked>
      <span>50%</span>
    </label>

    <label>
      <input type="radio" name="paymentType" value="100">
      <span>100%</span>
    </label>
  </div>

  <button class="pay-btn">Login to Proceed</button>

<div class="summary-divider"></div>

<div class="trust-row" style="margin-top: 4px;">
  <div class="trust-item">
    <img src="../assets/images/icons/no-hidden-charges.avif" alt="No Hidden Charges">
    <span>No Hidden<br>Charges</span>
  </div>

  <div class="trust-item">
    <img src="../assets/images/icons/trusted-clients.svg" alt="Trusted Clients">
    <span>5Lakh+<br>Trusted Clients</span>
  </div>

  <div class="trust-item">
    <img src="../assets/images/icons/secure-payments.svg" alt="Secure Payments">
    <span>100% Secure<br>Payments</span>
  </div>
</div>


</div>





    </div>

  </div>
</div>

<script>
let product = JSON.parse(localStorage.getItem("mainProduct"));
let addons = JSON.parse(localStorage.getItem("selectedAddons")) || [];

const productSection = document.getElementById("productSection");
const addonsList = document.getElementById("addonsList");

function renderCheckout() {
  productSection.innerHTML = "";
  addonsList.innerHTML = "";

  let base = 0;
  let addonsTotal = 0;

  if (product) {
    base = product.price;
productSection.innerHTML = `
  <div class="cart-item">
    <img src="${product.image}">

    <div class="cart-info">
      <strong>${product.name}</strong>
    </div>

    <div class="cart-price">
      ₹${product.price}
    </div>

    <div class="cart-actions">
      <span class="delete-btn" onclick="removeProduct()">Delete</span>
    </div>
  </div>
`;

  }

  addons.forEach((a, i) => {
  if (!a.qty) a.qty = 1;

  const itemTotal = a.price * a.qty;
  addonsTotal += itemTotal;

  addonsList.innerHTML += `
    <div class="addon-row">

      <div class="addon-left">
        <img src="${a.image}">

        <div class="addon-info">
          <span>${a.name}</span>

          <div class="addon-qty">
            <span class="qty-btn" onclick="decreaseAddonQty(${i})">−</span>
            <strong>${a.qty}</strong>
            <span class="qty-btn" onclick="increaseAddonQty(${i})">+</span>
          </div>
        </div>
      </div>

      <div class="addon-price">₹${itemTotal}</div>

      <div class="addon-delete">
        <span class="delete-btn" onclick="removeAddon(${i})">Delete</span>
      </div>

    </div>
  `;
  });

  document.getElementById("baseTotal").innerText = base;
  document.getElementById("addonsTotal").innerText = addonsTotal;
  document.getElementById("grandTotal").innerText = base + addonsTotal;
}

function removeAddon(i) {
  addons.splice(i, 1);
  localStorage.setItem("selectedAddons", JSON.stringify(addons));
  renderCheckout();
}
function increaseAddonQty(i) {
  addons[i].qty += 1;
  localStorage.setItem("selectedAddons", JSON.stringify(addons));
  renderCheckout();
}

function decreaseAddonQty(i) {
  if (addons[i].qty > 1) {
    addons[i].qty -= 1;
    localStorage.setItem("selectedAddons", JSON.stringify(addons));
    renderCheckout();
  }
}

function removeProduct() {
  localStorage.removeItem("mainProduct");
  product = null;
  renderCheckout();
}

renderCheckout();

document.querySelectorAll(".pay-btn, .delivery-row a").forEach(btn => {
  btn.addEventListener("click", e => {
    e.preventDefault();
    openDeliveryPopup();
  });
});




function updatePopupAmount() {
  const total = document.getElementById("grandTotal")?.innerText || 0;
  document.getElementById("popupPayAmount").innerText = total;
}





function openDeliveryPopup() {
  document.getElementById("deliveryPopup").style.display = "flex";

  // ✅ Use Amount To Pay (not Grand Total)
  const payNow = document.getElementById("amountToPay")?.innerText || 0;
  document.getElementById("popupTotal").innerText = payNow;
}



function closeDeliveryPopup() {
  document.getElementById("deliveryPopup").style.display = "none";
}

document.querySelectorAll(".pay-btn, .delivery-row a").forEach(btn => {
  btn.addEventListener("click", e => {
    e.preventDefault();
    openDeliveryPopup();
  });
});



function updatePaymentSplit() {
  const total = Number(document.getElementById("grandTotal").innerText) || 0;
  const selected = document.querySelector('input[name="paymentType"]:checked')?.value || "50";

  let payNow = selected === "50" ? Math.round(total / 2) : total;
  let due = total - payNow;

  // Update bill summary
  document.getElementById("amountToPay").innerText = payNow;
  document.getElementById("amountDue").innerText = due;

  // ✅ UPDATE POPUP PAY NOW AMOUNT
  const popupTotalEl = document.getElementById("popupTotal");
  if (popupTotalEl) {
    popupTotalEl.innerText = payNow;
  }
}

/* Listen to payment option change */
document.querySelectorAll('input[name="paymentType"]').forEach(radio => {
  radio.addEventListener("change", updatePaymentSplit);
});

/* Call after render */
setTimeout(updatePaymentSplit, 100);




function openCouponPopup() {
  document.getElementById("couponPopup").style.display = "flex";
}

function closeCouponPopup() {
  document.getElementById("couponPopup").style.display = "none";
}

function goBack() {
  history.back();
}






document.addEventListener("DOMContentLoaded", function () {

  const categories = [
    "Birthday Decorations",
    "Party Decorations",
    "Candlelight Dinner",
    "Personalised Gifts",
    "Party Entertainment",
    "Corporate Events",
    "Food Catering",
    "Photography Services",
    "Anniversary Decorations",
    "Baby Shower Celebration",
    "Baby Welcome Decorations",
    "Christmas/Xmas Decorations",
    "Kids Birthday Celebration",
    "First Birthday Decoration",
    "Diwali Decorations",
    "Haldi/Mehndi Decorations",
    "Halloween Theme Decorations",
    "Show More"
  ];

  const partyLinks = document.getElementById("partyLinks");
  const cityTabs = document.querySelectorAll(".party-city-tabs button");

  if (!partyLinks || !cityTabs.length) return;

  function renderLinks(city) {
    partyLinks.innerHTML = "";
    categories.forEach(cat => {
      partyLinks.innerHTML += `
        <a href="/services/${cat.toLowerCase().replace(/ /g,'-')}-${city.toLowerCase().replace(/ /g,'-')}">
          <strong>${cat}</strong>
          ${cat !== "Show More" ? `<span>in ${city}</span>` : ``}
        </a>
      `;
    });
  }

  // Initial load
  renderLinks("Delhi NCR");

  // City tab click
  cityTabs.forEach(btn => {
    btn.addEventListener("click", () => {
      cityTabs.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");
      renderLinks(btn.dataset.city);
    });
  });

});




function closeDeliveryPopup() {
  document.getElementById("deliveryPopup").style.display = "none";
}



</script>



<!-- DELIVERY + PAYMENT POPUP -->
<div id="deliveryPopup" class="delivery-overlay">
  <div class="delivery-modal">

    <!-- <button class="delivery-close" onclick="closeDeliveryPopup()">✕</button> -->

    <!-- LOGO (UNCHANGED) -->
<!-- <div class="delivery-header">
  <h2>Delivery <span>Details</span></h2>
  <img src="../assets/images/LOGO.svg" alt="Logo">
</div> -->
<div class="delivery-header">
  <span class="delivery-back" onclick="closeDeliveryPopup()">←</span>

  <h2>Delivery <span>Details</span></h2>

  <img src="../assets/images/LOGO.svg" alt="Logo">
</div>


    <div class="delivery-grid">

      <div class="delivery-field">
        <label>Name *</label>
        <input type="text" placeholder="Enter name" required>
      </div>

      <div class="delivery-field">
        <label>Email *</label>
        <input type="email" placeholder="Enter email" required>
      </div>

      <div class="delivery-field">
        <label>Mobile *</label>
        <input type="text" placeholder="Enter phone number" required>
      </div>

      <div class="delivery-field">
        <label>Occasion</label>
        <select>
          <option>Select occasion</option>
          <option>Birthday</option>
          <option>Anniversary</option>
        </select>
      </div>

      <div class="delivery-field full">
        <label>Address *</label>
        <textarea placeholder="Enter address" required></textarea>
      </div>


      <div class="delivery-field">
  <label>City *</label>
  <select required>
    <option value="">Select city</option>
    <option value="Bangalore">Bangalore</option>
    <option value="Delhi NCR">Delhi NCR</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Pune">Pune</option>
    <option value="Hyderabad">Hyderabad</option>
    <option value="Chennai">Chennai</option>
    <option value="Kolkata">Kolkata</option>
    <option value="Ahmedabad">Ahmedabad</option>
  </select>
</div>



      <div class="delivery-field">
        <label>Venue</label>
        <select>
          <option>Select venue</option>
          <option>Home</option>
          <option>Hall</option>
        </select>
      </div>

    </div>

  

   <!-- PAYMENT SECTION (IMAGE 2 STYLE) -->
    <button class="popup-pay-btn">
      Pay Now ₹<span id="popupTotal">0</span>
    </button>

<!-- SECURE PAYMENTS -->
<div class="secure-payment-box">

  <div class="secure-title">100% Secure Payments</div>

  <!-- TRUST BADGES -->
  <div class="trust-logos">
    <img src="../assets/images/payments/norton.png" alt="Norton Secured">
    <img src="../assets/images/payments/mcafee.png" alt="McAfee Secure">
    <img src="../assets/images/payments/truste.png" alt="TRUSTe Verified">
  </div>

  <!-- PAYMENT METHODS -->
  <div class="payment-methods">
    <img src="../assets/images/payments/razorpay.webp" alt="Razorpay">
    <img src="../assets/images/payments/gpay.png" alt="Google Pay">
    <img src="../assets/images/payments/phonepe.webp" alt="PhonePe">
    <img src="../assets/images/payments/visa.png" alt="Visa">
    <img src="../assets/images/payments/mastercard.svg" alt="Mastercard">
    <img src="../assets/images/payments/amex.avif" alt="Amex">
  </div>

</div>

<!-- TERMS -->
<div class="popup-terms">
  By continuing I agree to Party one's
  <a href="#">Terms & Conditions</a> and
  <a href="#">Privacy Policy</a>
</div>





  </div>
</div>



<!-- COUPON POPUP -->
<div id="couponPopup" class="login-overlay" style="display:none;">
  <div class="login-modal">

    <button class="login-close" onclick="closeCouponPopup()">✕</button>

    <h3>Available Coupons</h3>

    <div style="border:1px dashed #d1d5db;padding:12px;border-radius:10px;margin-bottom:12px;">
      <strong>PARTY500</strong>
      <p style="font-size:13px;margin:4px 0;">
        Get ₹500 off on orders above ₹5000
      </p>
      <button class="pay-btn" style="margin-top:6px;">
        Apply Coupon
      </button>
    </div>

    <div style="border:1px dashed #d1d5db;padding:12px;border-radius:10px;">
      <strong>FIRST10</strong>
      <p style="font-size:13px;margin:4px 0;">
        Flat 10% off for first-time users
      </p>
      <button class="pay-btn" style="margin-top:6px;">
        Apply Coupon
      </button>
    </div>

  </div>
</div>


<section class="trust-metrics">
  <h2>
    Event Partner for over <span>1 Million+</span> Celebrations
  </h2>

  <div class="trust-metrics-grid">

    <div class="trust-metric">
      <img src="../assets/images/trust/medal.png" alt="1 Million Customers">
      <h4>1 Million+</h4>
      <p>Happy Customers over 10 Years</p>
    </div>

    <div class="trust-metric">
      <img src="../assets/images/trust/google-reviews.png" alt="Google Reviews">
      <h4>4.6 / 5 Rating</h4>
      <p>from 5000+ Reviews on Google</p>
    </div>

    <div class="trust-metric">
      <img src="../assets/images/trust/social-followers.png" alt="Social Media">
      <h4>1 Lakh+</h4>
      <p>Followers on Social Media</p>
    </div>

    <div class="trust-metric">
      <img src="../assets/images/trust/top-brands.png" alt="Top Brands">
      <h4>Top Brands</h4>
      <p>Partnered with premium brands</p>
    </div>

  </div>
</section>




<!-- PARTY LINKS SECTION -->
<section class="party-links-section">
  <h2>Host Your Next Party With Ease</h2>

  <!-- CITY TABS -->
  <div class="party-city-tabs">
    <button class="active" data-city="Delhi NCR">Delhi NCR</button>
    <button data-city="Gurgaon">Gurugram/Gurgaon</button>
    <button data-city="Noida">Noida</button>
    <button data-city="Bangalore">Bangalore</button>
    <button data-city="Hyderabad">Hyderabad</button>
    <button data-city="Mumbai">Mumbai</button>
    <button data-city="Pune">Pune</button>
    <button data-city="Ahmedabad">Ahmedabad</button>
    <button data-city="Lucknow">Lucknow</button>
    <button data-city="Chennai">Chennai</button>
  </div>

  <!-- LINKS GRID -->
  <div class="party-links-grid" id="partyLinks"></div>
</section>











<?php include '../includes/footer.php'; ?>






