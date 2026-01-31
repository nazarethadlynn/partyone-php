<?php include '../includes/header.php'; ?>

<style>
body {
  background: #f8fafc;
  font-family: Inter, system-ui, sans-serif;
}

/* GLOBAL FIX */
*, *::before, *::after {
  box-sizing: border-box;
}

/* PAGE WRAP */
.delivery-page-wrap {
  max-width: 600px;
  margin: 32px auto 64px;
  padding: 0 16px;
}

/* SINGLE CARD */
.delivery-modal {
  background: #ffffff;
  width: 100%;
  padding: 20px 20px 22px;
  border-radius: 16px;
  box-shadow: 0 12px 32px rgba(0,0,0,.08);
}

/* HEADER */
.delivery-header {
  display: grid;
  grid-template-columns: auto 1fr auto;
  grid-template-rows: auto auto;
  align-items: center;
  row-gap: 10px;
  margin-bottom: 18px;
}

.delivery-back {
  grid-column: 1;
  grid-row: 1;
  font-size: 20px;
  font-weight: 700;
  cursor: pointer;
}

.delivery-header img {
  grid-column: 3;
  grid-row: 1;
  height: 34px;
  justify-self: end;
}

.delivery-header h2 {
  grid-column: 1 / -1;
  grid-row: 2;
  margin: 0;
  font-size: 20px;
  text-align: center;
}

.delivery-header h2 span {
  color: #ef476f;
}

/* FORM GRID */
.delivery-grid {
  display: grid;
  grid-template-columns: minmax(0, 1fr) minmax(0, 1fr); /* 🔑 FIX */
  gap: 10px 12px;
}

/* FIELD */
.delivery-field {
  display: flex;
  flex-direction: column;
  gap: 4px;
  font-size: 12.5px;
  font-weight: 600;
  min-width: 0; /* 🔑 FIX */
}

.delivery-field input,
.delivery-field select,
.delivery-field textarea {
  width: 100%;                  /* 🔑 FIX */
  height: 38px;
  border-radius: 9px;
  border: 1px solid #e5e7eb;
  padding: 0 10px;
  font-size: 13.5px;
  min-width: 0;                 /* 🔑 FIX */
}

.delivery-field textarea {
  height: 74px;
  resize: none;
  padding-top: 8px;
}

.full {
  grid-column: span 2;
}

/* PAY BUTTON */
.popup-pay-btn {
  width: 100%;
  margin-top: 18px;
  background: #9ca3af;
  color: #fff;
  border: none;
  height: 46px;
  border-radius: 11px;
  font-size: 15px;
  font-weight: 700;
  cursor: not-allowed;
}

.popup-pay-btn:not(:disabled) {
  background: #22c55e;
  cursor: pointer;
}

/* SECURE PAYMENTS */
.secure-payment-box {
  margin-top: 18px;
  border: 1px solid #e5e7eb;
  border-radius: 12px;
  padding: 14px;
  text-align: center;
}

.secure-title {
  font-size: 14px;
  font-weight: 700;
  margin-bottom: 10px;
}

.trust-logos,
.payment-methods {
  display: flex;
  justify-content: center;
  gap: 12px;
  flex-wrap: wrap;
}

.trust-logos img { height: 24px; }
.payment-methods img { height: 22px; }

/* TERMS */
.popup-checkbox {
  margin-top: 12px;
  font-size: 12.5px;
  text-align: center;
}

.popup-checkbox label {
  display: flex;
  gap: 8px;
  justify-content: center;
}

/* ================= MOBILE – PROFESSIONAL FIX ================= */
@media (max-width: 640px) {

  .delivery-page-wrap {
    margin: 20px auto 32px;
    padding: 0 12px;
  }

  .delivery-modal {
    padding: 14px 14px 16px;
    border-radius: 14px;
  }

  .delivery-header h2 {
    font-size: 17px;
  }

  .delivery-header img {
    height: 26px;
  }

  .delivery-grid {
    gap: 8px 8px;
  }

  .delivery-field {
    font-size: 11.5px;
  }

  .delivery-field input,
  .delivery-field select {
    height: 32px;
    font-size: 12.5px;
    padding: 0 8px;
  }

  .delivery-field textarea {
    height: 56px;
    font-size: 12.5px;
    padding: 6px 8px;
  }

  .popup-pay-btn {
    height: 40px;
    font-size: 14px;
    margin-top: 14px;
  }

  .secure-payment-box {
    padding: 10px;
  }

  .trust-logos img {
    height: 20px;
  }

  .payment-methods img {
    height: 18px;
  }

  .popup-checkbox {
    font-size: 11.5px;
  }
}

</style>

<div class="delivery-page-wrap">
  <div class="delivery-modal">

    <div class="delivery-header">
      <span class="delivery-back" onclick="history.back()">←</span>
      <img src="../assets/images/LOGO.svg">
      <h2>Delivery <span>Details</span></h2>
    </div>

    <div class="delivery-grid">
      <div class="delivery-field">
        <label>Name *</label>
        <input type="text" id="name" placeholder="Enter name">
      </div>

      <div class="delivery-field">
        <label>Email *</label>
        <input type="email" id="email" placeholder="Enter email">
      </div>

      <div class="delivery-field">
        <label>Mobile *</label>
        <input type="text" id="mobile" placeholder="Enter phone number">
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
        <textarea id="address" placeholder="Enter address"></textarea>
      </div>

      <div class="delivery-field">
        <label>City *</label>
        <select id="city">
          <option value="">Select city</option>
          <option>Bangalore</option>
          <option>Delhi NCR</option>
          <option>Mumbai</option>
          <option>Pune</option>
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

    <button class="popup-pay-btn" id="payBtn" disabled>
      Pay Now ₹<span id="payAmount">0</span>
    </button>

    <div class="secure-payment-box">
      <div class="secure-title">100% Secure Payments</div>

      <div class="trust-logos">
        <img src="../assets/images/payments/norton.png">
        <img src="../assets/images/payments/mcafee.png">
        <img src="../assets/images/payments/truste.png">
      </div>

      <div class="payment-methods">
        <img src="../assets/images/payments/razorpay.webp">
        <img src="../assets/images/payments/gpay.png">
        <img src="../assets/images/payments/phonepe.webp">
        <img src="../assets/images/payments/visa.png">
      </div>
    </div>

    <div class="popup-checkbox">
      <label>
        <input type="checkbox" id="terms">
        <span>I agree to Terms & Privacy Policy</span>
      </label>
    </div>

  </div>
</div>

<script>
const amount = localStorage.getItem("payNowAmount") || 0;
document.getElementById("payAmount").innerText = amount;

const fields = ["name","email","mobile","address","city"];
const payBtn = document.getElementById("payBtn");
const terms = document.getElementById("terms");

function validate() {
  const valid = fields.every(id => document.getElementById(id).value.trim() !== "");
  payBtn.disabled = !(valid && terms.checked);
}

fields.forEach(id => {
  document.getElementById(id).addEventListener("input", validate);
});
terms.addEventListener("change", validate);

payBtn.addEventListener("click", () => {
  window.location.href = "payment.php";
});
</script>

<?php include '../includes/footer.php'; ?>
