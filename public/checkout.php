<?php include '../includes/header.php'; ?>

<style>
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
.cart-item {
  display: flex;
  gap: 16px;
  padding-bottom: 18px;
  border-bottom: 1px solid #e5e7eb;
  margin-bottom: 18px;
}
.cart-item img {
  width: 88px;
  height: 88px;
  border-radius: 14px;
  object-fit: cover;
}
.cart-info strong {
  font-size: 17px;
}
.cart-info .price {
  font-weight: 700;
  margin: 6px 0;
}
.date-pill {
  background: #e0efff;
  color: #2563eb;
  padding: 6px 10px;
  border-radius: 999px;
  font-size: 13px;
}
.qty-box {
  display: flex;
  gap: 14px;
  align-items: center;
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

/* ADDONS */
.addons-title {
  font-size: 17px;
  font-weight: 700;
  margin: 20px 0 10px;
}
.addon-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 12px 0;
  border-bottom: 1px dashed #e5e7eb;
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

/* RIGHT STACK */
.right-stack {
  display: flex;
  flex-direction: column;
  gap: 14px;
}

/* DELIVERY MINI CARD */
.mini-card {
  padding: 8px 12px;
  border-radius: 12px;
}
.delivery-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 13px;
  font-weight: 600;
}
.delivery-row a {
  color: #000;
  text-decoration: underline;
}

/* COUPON STRAP */
.coupon-strap {
  background: #e8f1ff;
  color: #2563eb;
  padding: 10px 14px;
  border-radius: 12px;
  font-weight: 600;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* ✅ BILL SUMMARY – CLEAN & TIGHT */
.summary-card {
  padding: 18px 18px 20px;   /* reduced side & bottom padding */
}

.summary-card h3 {
  font-size: 17px;
  font-weight: 700;
  margin-bottom: 14px;
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





/* Overlay */
.login-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.45);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 9999;
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
  top: 14px;
  right: 14px;
  border: none;
  background: none;
  font-size: 20px;
  cursor: pointer;
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




</style>

<div class="checkout-wrap">
  <div class="checkout-grid">

    <!-- LEFT -->
    <div class="checkout-card">
      <h2>Order & Delivery Details</h2>
      <div id="productSection"></div>
      <div class="addons-title">Addons</div>
      <div id="addonsList"></div>
    </div>

    <!-- RIGHT -->
    <div class="right-stack">

      <div class="mini-card">
        <div class="delivery-row">
          <span>📍 Delivery Details</span>
          <a href="#">Login first</a>
        </div>
      </div>

      <div class="coupon-strap">
        <span>🏷 Coupon</span>
        <span>View</span>
      </div>

      <div class="summary-card">
        <h3>🧾 Bill Summary</h3>

        <div class="summary-row">
          <span>Base Total</span>
          <span>₹<span id="baseTotal">0</span></span>
        </div>

        <div class="summary-row">
          <span>Addon Total</span>
          <span>₹<span id="addonsTotal">0</span></span>
        </div>

        <div class="summary-divider"></div>

        <div class="total-wave">
          <span>Total Amount</span>
          <span>₹<span id="grandTotal">0</span></span>
        </div>

        <button class="pay-btn">Login to Proceed</button>
      </div>

      
<div class="mini-card">
  <div class="trust-row">

    <div class="trust-item">
      <img src="../assets/images/icons/no-hidden-charges.svg" alt="No Hidden Charges">
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
          <div class="price">₹${product.price}</div>
          <div class="date-pill">📅 Date & Time after login</div>
          <div style="margin-top:10px;display:flex;justify-content:space-between">
            <div class="qty-box">
              <div class="qty-btn">−</div>
              <strong>1</strong>
              <div class="qty-btn">+</div>
            </div>
            <div class="delete-btn" onclick="removeProduct()">Delete</div>
          </div>
        </div>
      </div>
    `;
  }

  addons.forEach((a, i) => {
    addonsTotal += a.price;
    addonsList.innerHTML += `
      <div class="addon-row">
        <div class="addon-left">
          <img src="${a.image}">
          <span>${a.name}</span>
        </div>
        <div>
          ₹${a.price}
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
  document.getElementById("popupTotal").innerText =
    document.getElementById("grandTotal").innerText || 0;
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

</script>



<!-- DELIVERY + PAYMENT POPUP -->
<div id="deliveryPopup" class="delivery-overlay">
  <div class="delivery-modal">

    <button class="delivery-close" onclick="closeDeliveryPopup()">✕</button>

    <!-- LOGO (UNCHANGED) -->
<div class="delivery-header">
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
        <input type="text" value="Bangalore" required>
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




<?php include '../includes/footer.php'; ?>
