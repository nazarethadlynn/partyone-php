<?php
// payment-success.php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$paymentId = $_GET['payment_id'] ?? 'PAY_' . rand(100000,999999);
$amount    = $_GET['amount'] ?? 7896;
$service   = "Birthday Party Booking";
$date      = date("d M Y");
$time      = "6:00 PM - 9:00 PM";

$address = "Flat 302, Green Valley Apartments,
MG Road, Indiranagar,
Bengaluru, Karnataka - 560038";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Payment Successful</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
*{
  box-sizing:border-box;
  font-family:Inter,system-ui,-apple-system,BlinkMacSystemFont,sans-serif;
}

body{
  margin:0;
  min-height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
  background:radial-gradient(circle at top,#eef2ff,#f8fafc);
}

/* CARD */
.success-card{
  background:#fff;
  width:100%;
  max-width:560px;
  border-radius:26px;
  padding:40px;
  box-shadow:0 40px 90px rgba(2,6,23,.12),0 8px 24px rgba(2,6,23,.06);
  text-align:center;
}

/* ICON */
.success-icon{
  width:84px;
  height:84px;
  margin:0 auto 18px;
  border-radius:50%;
  background:#e6f9ef;
  display:flex;
  align-items:center;
  justify-content:center;
}

.success-icon svg{
  width:38px;
  height:38px;
  stroke:#059669;
  stroke-width:3;
  fill:none;
}

/* TITLES */
.success-card h1{
  font-size:26px;
  margin:0 0 6px;
  color:#020617;
}

.success-card p{
  font-size:15px;
  color:#64748b;
  margin:0 0 30px;
}

/* SUMMARY */
.summary{
  border:1px solid #e5e7eb;
  border-radius:18px;
  padding:22px;
  margin-bottom:28px;
}

/* 🔥 FIXED GRID */
.summary-row{
  display:grid;
  grid-template-columns:140px 1fr;
  gap:14px;
  padding:12px 0;
  font-size:14px;
  text-align:left;
}

.summary-row:not(:last-child){
  border-bottom:1px dashed #e5e7eb;
}

.summary-row span{
  color:#64748b;
}

/* 🔥 VALUE COLUMN */
.summary-row strong{
  color:#020617;
  font-weight:600;
  text-align:left;
  white-space:normal;
  word-break:break-word;
  line-height:1.45;
}

/* ACTIONS */
.actions{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:14px;
  margin-bottom:10px;
}

.actions a,
.actions button{
  height:48px;
  border-radius:14px;
  font-size:15px;
  font-weight:600;
  cursor:pointer;
  border:none;
  display:flex;
  align-items:center;
  justify-content:center;
  transition:.2s ease;
}

/* BACK TO HOME – PROFESSIONAL */
.secondary{
  background:#fff;
  border:1px solid #e5e7eb;
  color:#020617;
}

.secondary:hover{
  background:#f8fafc;
}

/* DOWNLOAD */
.primary{
  background:#020617;
  color:#fff;
  box-shadow:0 12px 24px rgba(2,6,23,.25);
}

.primary:hover{
  transform:translateY(-1px);
}

/* FOOTER */
.footer{
  margin-top:22px;
  font-size:13px;
  color:#64748b;
}

.footer img{
  height:22px;
  vertical-align:middle;
  margin-left:6px;
}

/* MOBILE */
@media (max-width:768px){
  body{padding:14px;align-items:flex-start;}
  .success-card{padding:28px 22px;border-radius:20px;}
  .summary-row{grid-template-columns:120px 1fr;}
  .actions{grid-template-columns:1fr;}
}

/* PRINT */
@media print{
  body{background:#fff;}
  .actions,.footer{display:none;}
  .success-card{box-shadow:none;border-radius:0;}
}
</style>
</head>

<body>

<div class="success-card">

  <div class="success-icon">
    <svg viewBox="0 0 24 24">
      <polyline points="20 6 9 17 4 12"></polyline>
    </svg>
  </div>

  <h1>Payment Successful</h1>
  <p>Your booking has been confirmed</p>

  <div class="summary">
    <div class="summary-row"><span>Amount Paid</span><strong>₹<?php echo number_format($amount); ?></strong></div>
    <div class="summary-row"><span>Payment ID</span><strong><?php echo $paymentId; ?></strong></div>
    <div class="summary-row"><span>Service</span><strong><?php echo $service; ?></strong></div>
    <div class="summary-row"><span>Date</span><strong><?php echo $date; ?></strong></div>
    <div class="summary-row"><span>Time</span><strong><?php echo $time; ?></strong></div>
    <div class="summary-row"><span>Address</span><strong><?php echo nl2br($address); ?></strong></div>
  </div>

  <div class="actions">
    <a href="index.php" class="secondary">Back to Home</a>
    <button class="primary" onclick="window.print()">Download Acknowledgement</button>
  </div>

  <div class="footer">
    Secured by <img src="../assets/images/razorpay-logo.png" alt="Razorpay">
  </div>

</div>

</body>
</html>
