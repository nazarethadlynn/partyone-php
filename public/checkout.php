<?php include '../includes/header.php'; ?>

<style>
.checkout-wrap {
  max-width: 1200px;
  margin: 40px auto;
  padding: 0 20px;
}
.checkout-grid {
  display: grid;
  grid-template-columns: 2fr 1fr;
  gap: 30px;
}
.checkout-card,
.summary-card {
  background: #fff;
  border-radius: 16px;
  padding: 24px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.06);
}
.cart-item {
  display: flex;
  gap: 16px;
  margin-bottom: 20px;
}
.cart-item img {
  width: 90px;
  height: 90px;
  border-radius: 12px;
  object-fit: cover;
}
.delete-btn {
  color: #dc2626;
  cursor: pointer;
  font-size: 13px;
  margin-top: 6px;
}
.addon-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 0;
  border-bottom: 1px dashed #e5e7eb;
}
.addon-left {
  display: flex;
  align-items: center;
  gap: 12px;
}
.addon-left img {
  width: 50px;
  height: 50px;
  border-radius: 10px;
  object-fit: cover;
}
.summary-row {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
}
.summary-total {
  font-weight: 700;
  font-size: 18px;
  color: #e11d48;
}
.pay-btn {
  width: 100%;
  margin-top: 20px;
  background: #e11d48;
  color: #fff;
  border: none;
  padding: 14px;
  border-radius: 999px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
}
#otpPopup {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,.6);
  align-items: center;
  justify-content: center;
  z-index: 9999;
}
#otpPopup .otp-box {
  background: #fff;
  padding: 26px;
  border-radius: 16px;
  width: 360px;
}
.empty-text {
  color: #6b7280;
  font-size: 14px;
}
</style>

<div class="checkout-wrap">
  <div class="checkout-grid">

    <!-- LEFT -->
    <div class="checkout-card">
      <h2>Order & Delivery Details</h2>

      <div id="productSection"></div>

      <h4 style="margin:20px 0 10px">Addons</h4>
      <div id="addonsList"></div>

      <button id="payBtn" class="pay-btn" onclick="openOtp()">Proceed To Pay</button>
    </div>

    <!-- RIGHT -->
    <div class="summary-card">
      <h3>Price Details</h3>

      <div class="summary-row">
        <span>Base Price</span>
        <span>₹<span id="baseTotal">0</span></span>
      </div>

      <div class="summary-row">
        <span>Addons Total</span>
        <span>₹<span id="addonsTotal">0</span></span>
      </div>

      <hr>

      <div class="summary-row summary-total">
        <span>Total Amount</span>
        <span>₹<span id="grandTotal">0</span></span>
      </div>
    </div>

  </div>
</div>

<!-- OTP -->
<div id="otpPopup">
  <div class="otp-box">
    <h3>Verify Mobile</h3>
    <input type="text" placeholder="Enter Mobile Number"
      style="width:100%;padding:12px;margin:16px 0;border-radius:8px;border:1px solid #ddd">
    <button class="pay-btn">Send OTP & Verify</button>
  </div>
</div>

<script>
let product = JSON.parse(localStorage.getItem("mainProduct"));
let addons = JSON.parse(localStorage.getItem("selectedAddons")) || [];

const productSection = document.getElementById("productSection");
const addonsList = document.getElementById("addonsList");
const payBtn = document.getElementById("payBtn");

function renderCheckout() {
  productSection.innerHTML = "";
  addonsList.innerHTML = "";

  let basePrice = 0;
  let addonsTotal = 0;

  if (product) {
    basePrice = product.price;
    productSection.innerHTML = `
      <div class="cart-item">
        <img src="${product.image}">
        <div>
          <strong>${product.name}</strong>
          <div>₹${product.price} × 1</div>
          <div class="delete-btn" onclick="removeProduct()">Delete</div>
        </div>
      </div>
    `;
  } else {
    productSection.innerHTML = `<p class="empty-text">No product selected</p>`;
    payBtn.disabled = true;
    payBtn.style.opacity = "0.6";
  }

  if (addons.length === 0) {
    addonsList.innerHTML = `<p class="empty-text">No addons selected</p>`;
  }

  addons.forEach((addon, index) => {
    addonsTotal += addon.price;
    addonsList.innerHTML += `
      <div class="addon-row">
        <div class="addon-left">
          <img src="${addon.image}">
          <span>${addon.name}</span>
        </div>
        <div>
          ₹${addon.price}
          <span class="delete-btn" onclick="removeAddon(${index})">Delete</span>
        </div>
      </div>
    `;
  });

  document.getElementById("baseTotal").innerText = basePrice;
  document.getElementById("addonsTotal").innerText = addonsTotal;
  document.getElementById("grandTotal").innerText = basePrice + addonsTotal;
}

function removeAddon(index) {
  addons.splice(index, 1);
  localStorage.setItem("selectedAddons", JSON.stringify(addons));
  renderCheckout();
}

function removeProduct() {
  localStorage.removeItem("mainProduct");
  product = null;
  renderCheckout();
}

function openOtp() {
  if (!product) return;
  document.getElementById("otpPopup").style.display = "flex";
}

renderCheckout();
</script>

<?php include '../includes/footer.php'; ?>
