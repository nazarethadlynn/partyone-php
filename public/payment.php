<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Complete Payment</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
*{box-sizing:border-box;font-family:Inter,system-ui,sans-serif}
body{
  margin:0;
  background:radial-gradient(circle at top,#eef2ff,#f8fafc);
  min-height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
}

/* WRAPPER */
.page-wrap{
  display:grid;
  grid-template-columns:1.2fr 1fr;
  gap:22px;
  max-width:960px;
  width:100%;
}

/* LEFT CARD */
.left-card{
  background:#fff;
  border-radius:22px;
  padding:42px;
  box-shadow:0 30px 80px rgba(0,0,0,.12);
}


/* HEADER */
.amount-header{
  background:#2563eb;
  color:#fff;
  padding:36px 28px;
  text-align:center;
}
.amount-header .logo{
  width:56px;height:56px;border-radius:14px;
  background:rgba(255,255,255,.15);
  display:flex;align-items:center;justify-content:center;
  margin:0 auto 14px;font-weight:800;font-size:22px
}
.amount-header .amount{font-size:36px;font-weight:800}



/* SECTION SUBTITLE */
.section-subtitle{
  font-size:14px;
  color:#6b7280;
  font-weight:500;
  margin:4px 0 10px;
}

/* OFFER STRAP */
.offer-row{
  display:flex;
  gap:10px;
  margin-bottom:18px;
}
.offer-chip{
  display:flex;
  align-items:center;
  gap:8px;
  background:#e8f0fe;
  color:#1d4ed8;
  padding:8px 14px;
  border-radius:999px;
  font-size:13px;
}
.offer-chip.secondary{background:#eef2ff}

/* UPI HEADER */
.upi-header{
  display:flex;
  align-items:center;
  justify-content:space-between;
  margin-bottom:10px;
}
.timer{
  background:#eef2ff;
  padding:4px 10px;
  border-radius:999px;
  font-size:12px;
  color:#475569;
}

/* QR BOX */
.qr-box{
  background:#f8fafc;
  border-radius:16px;
  padding:16px;
  display:flex;
  gap:16px;
}
.qr-box img{width:120px;height:120px}

/* ✅ FIXED ICON STYLE (MATCH RAZORPAY) */
.upi-icons{
  display:flex;
  gap:10px;
  margin:8px 0 10px;
}
.upi-icons img{
  height:20px;
  width:auto;
  object-fit:contain;
}

/* BADGE */
.badge{
  background:#e8f7ef;
  color:#059669;
  padding:4px 10px;
  border-radius:999px;
  font-size:12px;
  display:inline-block;
}

/* OPTIONS */
.option{
  border:1px solid #e5e7eb;
  border-radius:14px;
  padding:16px;
  margin-bottom:12px;
  display:flex;
  justify-content:space-between;
  align-items:center;
}



/* FIXED FOOTER */


.footer-info{display:none;font-size:14px}
.footer-info strong{font-size:16px}
.fixed-footer button{
  margin-left:auto;
  height:46px;
  background:#020617;
  color:#fff;
  border:none;
  border-radius:12px;
  font-weight:700;
  padding:0 28px;
  min-width:160px;
}
















/* ========================= */
/* RAZORPAY PAYMENT LIST CSS */
/* ========================= */

.payment-list{
  border:1px solid #e5e7eb;
  border-radius:18px;
  background:#fff;
  overflow:hidden;
}

.payment-item{
  display:flex;
  align-items:flex-start;
  gap:14px;
  padding:18px 18px;
  border-bottom:1px solid #e5e7eb;
}

.payment-item:last-child{
  border-bottom:none;
}

.payment-item.active{
  background:#eaf2ff;
}

/* LEFT ICON */
.pay-icon{
  width:28px;
  height:28px;
  display:flex;
  align-items:center;
  justify-content:center;
  color:#2563eb;
  font-size:18px;
}

/* CONTENT */
.pay-content{
  flex:1;
}

/* TITLE ROW */
.pay-title{
  font-size:15px;
  font-weight:600;
  color:#020617;
  display:flex;
  align-items:center;
  gap:8px;
  line-height:1.2;
}

/* APP ICONS */
.pay-apps{
  display:flex;
  gap:6px;
}

.pay-apps img{
  height:18px;
  width:18px;
  object-fit:contain;
  background:#fff;
  border:1px solid #e5e7eb;
  border-radius:999px;
  padding:3px;
}

/* OFFER PILL */
.pay-pill{
  display:inline-block;
  margin-top:8px;
  background:#e8f7ef;
  color:#059669;
  font-size:13px;
  padding:6px 12px;
  border-radius:999px;
  font-weight:500;
}

/* RIGHT ARROW */
.chevron{
  margin-left:auto;
  color:#6b7280;
  font-size:18px;
  line-height:1;
}

/* ========================= */


















/* ================= FIXED FOOTER - FINAL WORKING ================= */

.right-card{
  background:#fff;
  border-radius:22px;
  display:flex;
  flex-direction:column;
  height:90vh;
  overflow:hidden;
  box-shadow:0 30px 80px rgba(0,0,0,.12);
  position:relative; /* 🔥 REQUIRED */
}


.right-scroll{
  flex:1;
  overflow-y:auto;
  padding:28px;
  padding-bottom:200px; /* 🔥 space for secured + button */
}



.fixed-footer{
  position:absolute;     /* 🔥 KEY FIX */
  bottom:0;
  left:0;
  right:0;

  border-top:1px solid #e5e7eb;
  padding:14px 16px;
  background:#fff;

  display:flex;
  align-items:center;
  gap:14px;
  z-index:10;
}


















/* ================= FIXED FOOTER - FINAL WORKING ================= */

.right-card{
  background:#fff;
  border-radius:22px;
  display:flex;
  flex-direction:column;
  height:90vh;
  overflow:hidden;
  box-shadow:0 30px 80px rgba(0,0,0,.12);
  position:relative; /* REQUIRED */
}

.right-scroll{
  flex:1;
  overflow-y:auto;
  padding:28px;
  padding-bottom:260px; /* space for secured-by + footer */
}


/* CONTINUE BUTTON FOOTER */
.fixed-footer{
  position:absolute;
  bottom:0;
  left:0;
  right:0;

  border-top:1px solid #e5e7eb;
  padding:14px 16px;
  background:#fff;

  display:flex;
  align-items:center;
  gap:14px;
  z-index:10;
}




/* SCROLLABLE SECURED BY (JUST ABOVE FOOTER) */
.rp-footer{
  margin-top:28px;
  padding:16px 0;

  text-align:center;
  font-size:14px;
  color:#6b7280;

  border-top:1px solid #e5e7eb;
  background:#fff;
}

.rp-footer .secured-row{
  display:flex;
  align-items:center;
  justify-content:center;
  gap:6px;
}

.rp-footer img{
  height:60px; /* as requested */
  width:auto;
}

.rp-footer a{
  color:#2563eb;
  text-decoration:none;
  margin:0 6px;
}













/* ================= MOBILE RESPONSIVE FIX ================= */
@media (max-width: 768px){

  body{
    align-items:flex-start;
  }

  .page-wrap{
    grid-template-columns:1fr;
    gap:16px;
    padding:12px;
  }

  .left-card{
    padding:28px;
  }

  .right-card{
    height:calc(100vh - 24px);
    border-radius:18px;
  }

  .amount-header{
    padding:28px 20px;
  }

  .amount-header .amount{
    font-size:30px;
  }

  .right-scroll{
    padding:20px;
    padding-bottom:200px; /* space for footer */
  }

  /* 🔥 FOOTER: SAME LINE (LIKE DESKTOP) */
  .fixed-footer{
    flex-direction:row;          /* ✅ same line */
    align-items:center;
    justify-content:space-between;
    gap:12px;
    padding:12px 14px;
  }

  /* 🔒 Hidden until phone entered (JS controls this) */
  .footer-info{
    display:none;
    font-size:14px;
    line-height:1.2;
  }

  .footer-info strong{
    font-size:16px;
    display:block;
  }

  /* CONTINUE BUTTON – SAME SIZE AS DESKTOP */
  .fixed-footer button{
    height:46px;
    padding:0 28px;
    border-radius:12px;
    font-size:15px;
    width:auto;                  /* ✅ NOT full width */
    min-width:160px;
  }
}


</style>
</head>

<body>

<div class="page-wrap">

<div class="left-card">
  <h2>Payment Request from<br>ANDOR PLATFORMS PRIVATE LIMITED</h2>
  <div style="margin-top:18px">
    <small>PAYMENT FOR</small>
    <div>Service Payment</div>
  </div>
  <div style="margin-top:24px">
    <small>AMOUNT PAYABLE</small>
    <div style="font-size:22px;font-weight:700">
      INR <span id="leftAmount">0</span>.00
    </div>
  </div>
</div>

<div class="right-card">

  <div class="amount-header">
    <div class="logo">A</div>
    <div>Total Amount</div>
    <div class="amount">₹<span id="payAmount">0</span></div>
  </div>

  <div class="right-scroll">

    <div id="contactStep">
      <h3>Contact details</h3>
      <p>Enter mobile number to continue</p>
      <div style="display:flex;border:1px solid #e5e7eb;border-radius:12px;padding:12px 14px;gap:10px">
        <span>🇮🇳 +91</span>
        <input id="mobileInput" maxlength="10" placeholder="Mobile number" style="border:none;outline:none;flex:1">
      </div>
    </div>

    <div id="paymentStep" style="display:none">

      <h3>Payment Options</h3>
      <div class="section-subtitle">Available Offers</div>

      <div class="offer-row">
        <div class="offer-chip">🛡️ upto ₹50 assured</div>
        <div class="offer-chip secondary">🎁 +4 View all</div>
      </div>

      <div class="upi-header">
        <div class="section-subtitle">UPI QR</div>
        <div class="timer">⏱ <span id="timer">10:00</span></div>
      </div>

      <div class="qr-box">
        <img id="upiQr" alt="UPI QR">
        <div>
          <strong>Scan the QR<br>using any UPI App</strong>

          <div class="upi-icons">
            <img src="../assets/images/logos/phonepay-logo.png">
            <img src="../assets/images/logos/googlepay-logo.jpg">
            <img src="../assets/images/logos/cred-logo.png">
            <img src="../assets/images/logos/amazonpay-logo.png">
          </div>

          <span class="badge">3 Offers</span>
        </div>
      </div>

      <div class="section-subtitle">All Payment Options</div>
     
    <!-- ✅ EXACT RAZORPAY STYLE LIST -->
    <div class="payment-list">

      <div class="payment-item active">
        <div class="pay-icon">🔷</div>
        <div class="pay-content">
          <div class="pay-title">
            UPI
            <div class="pay-apps">
              <img src="../assets/images/logos/googlepay-logo.jpg">
              <img src="../assets/images/logos/phonepay-logo.png">
              <img src="../assets/images/logos/cred-logo.png">
            </div>
          </div>
          <span class="pay-pill">3 Offers</span>
        </div>
        <div class="chevron">›</div>
      </div>

      <div class="payment-item">
        <div class="pay-icon">💳</div>
        <div class="pay-content">
          <div class="pay-title">
            Cards
            <div class="pay-apps">
              <img src="../assets/images/logos/visa.png">
              <img src="../assets/images/logos/mastercard.png">
              <img src="../assets/images/logos/rupay.jpg">
            </div>
          </div>
          <span class="pay-pill">Upto 1.5% savings with NeuCard</span>
        </div>
        <div class="chevron">›</div>
      </div>

      <div class="payment-item">
        <div class="pay-icon">📅</div>
        <div class="pay-content">
          <div class="pay-title">EMI</div>
          <span class="pay-pill">Upto 15% savings with NeuCard</span>
        </div>
        <div class="chevron">›</div>
      </div>

      <div class="payment-item">
        <div class="pay-icon">🏦</div>
        <div class="pay-content">
          <div class="pay-title">Netbanking</div>
        </div>
        <div class="chevron">⌄</div>
      </div>

      <div class="payment-item">
        <div class="pay-icon">👛</div>
        <div class="pay-content">
          <div class="pay-title">Wallet</div>
        </div>
        <div class="chevron">⌄</div>
      </div>

    </div>
  
  
    
  </div>



  
  <div class="rp-footer">
  <div class="secured-row">
    <span>Secured by</span>
    <img src="../assets/images/razorpay-logo.png" alt="Razorpay">
  </div>
  <div>
    <a href="#">Account & Terms</a> · <a href="#">About Merchant</a>
  </div>
</div>

<div class="fixed-footer">
  <div class="footer-info" id="footerInfo">
    <strong>₹<span id="barAmount">0</span></strong><br>
    <small>View Details ↑</small>
  </div>
  <!-- <button>Continue</button> -->
   <button onclick="window.location.href='payment-success.php'">Continue</button>


</div>


</div>

</div>

<script>
const amount = localStorage.getItem("payNowAmount") || 7896;
payAmount.innerText = leftAmount.innerText = barAmount.innerText = amount;

mobileInput.addEventListener("input",()=>{
  if(/^[6-9]\d{9}$/.test(mobileInput.value)){
    contactStep.style.display="none";
    paymentStep.style.display="block";
    footerInfo.style.display="block";
    startTimer();
  }
});

let timeLeft = 600;
function startTimer(){
  const el = document.getElementById("timer");
  setInterval(()=>{
    if(timeLeft<=0) return;
    timeLeft--;
    el.innerText =
      String(Math.floor(timeLeft/60)).padStart(2,'0') + ":" +
      String(timeLeft%60).padStart(2,'0');
  },1000);
}

const UPI_ID="merchant@upi", MERCHANT_NAME="ANDOR PLATFORMS";
document.getElementById("upiQr").src =
`https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=${encodeURIComponent(
`upi://pay?pa=${UPI_ID}&pn=${MERCHANT_NAME}&am=${amount}&cu=INR`
)}`;
























</script>

</body>
</html>
