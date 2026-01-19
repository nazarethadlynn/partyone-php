<?php include '../includes/header.php'; ?>

<div style="max-width:1100px;margin:50px auto">

  <h2>Order & Delivery Details</h2>

  <div style="display:grid;grid-template-columns:2fr 1fr;gap:30px">

    <!-- LEFT -->
    <div>
      <p><strong>Happy Birthday Balloon Decoration</strong></p>
      <p>₹2349 × 1</p>

      <button
        onclick="openOtp()"
        class="book-btn"
        style="margin-top:30px"
      >
        Proceed To Pay
      </button>
    </div>

    <!-- RIGHT -->
    <div style="border:1px solid #e5e7eb;padding:20px;border-radius:14px">
      <h3>Price Details</h3>
      <p>Total: ₹2408</p>
    </div>

  </div>
</div>

<!-- OTP POPUP -->
<div
  id="otpPopup"
  style="
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.6);
    align-items:center;
    justify-content:center;
    z-index:9999
  "
>
  <div style="background:#fff;padding:30px;border-radius:16px;width:360px">
    <h3>Verify Mobile</h3>

    <input
      type="text"
      placeholder="Enter Mobile Number"
      style="width:100%;padding:12px;margin:16px 0;border-radius:8px;border:1px solid #ddd"
    >

    <button class="book-btn" style="width:100%">
      Send OTP & Verify
    </button>
  </div>
</div>

<script>
  function openOtp() {
    document.getElementById("otpPopup").style.display = "flex";
  }
</script>

<?php include '../includes/footer.php'; ?>
