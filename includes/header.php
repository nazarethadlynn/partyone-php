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

  <!-- Inter Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<!-- ================= FIXED HEADER (SINGLE SECTION) ================= -->
<header class="site-header">

  <!-- TOP ROW -->
  <div class="top-header">
    <div class="logo">
      <a href="/public/index.php">
        <img src="../assets/images/LOGO.svg" alt="Party One Logo">
      </a>
    </div>

    <div class="search-box">
      <input type="text" placeholder="What are you celebrating?">
      <span class="search-icon">🔍</span>
    </div>

    <div class="right-links">
      <a href="#">HELP CENTER</a>
      <a href="#">LOG IN</a>
      <button id="cityBtn" class="city-btn" onclick="openCityPopup()">
        📍 <?= $_SESSION['city'] ?? "Bangalore" ?>
      </button>
    </div>
  </div>

  <!-- MENU ROW -->
  <nav class="menu-bar">

    <div class="menu-item">
      Anniversary ▾
      <div class="dropdown">
        <a href="#">Room Decor</a>
        <a href="#">Surprise Setup</a>
        <a href="#">Romantic Themes</a>
      </div>
    </div>

    <div class="menu-item">
      Gifts ▾
      <div class="dropdown">
        <a href="#">Flowers</a>
        <a href="#">Cakes</a>
        <a href="#">Gift Hampers</a>
      </div>
    </div>

    <div class="menu-item">
      Candlelight Dinners ▾
      <div class="dropdown">
        <a href="#">Private Dining</a>
        <a href="#">Rooftop Dinner</a>
        <a href="#">Beachside Dinner</a>
      </div>
    </div>

    <div class="menu-item">
      Decorations ▾
      <div class="dropdown">
        <a href="#">Balloon Decor</a>
        <a href="#">Theme Decor</a>
        <a href="#">Room Decor</a>
      </div>
    </div>

    <div class="menu-item">
      Festivals ▾
      <div class="dropdown">
        <a href="#">Diwali</a>
        <a href="#">Christmas</a>
        <a href="#">New Year</a>
      </div>
    </div>

    <div class="menu-item">
      Kid's Celebrations ▾
      <div class="dropdown">
        <a href="#">Cartoon Themes</a>
        <a href="#">Balloon Parties</a>
        <a href="#">Magic Shows</a>
      </div>
    </div>

    <div class="menu-item">
      Corporate Events ▾
      <div class="dropdown">
        <a href="#">Office Decor</a>
        <a href="#">Product Launch</a>
        <a href="#">Team Parties</a>
      </div>
    </div>

  </nav>
</header>
<!-- ================= END HEADER ================= -->
