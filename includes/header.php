<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Party One</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>


<body data-page="index">

<header class="site-header">

  <!-- 🔹 TOP HEADER -->
  <div class="top-header">

    <!-- LOGO -->
    <div class="logo">
      <a href="/PARTYONE-PHP/public/index.php">
        <img src="../assets/images/LOGO.svg" alt="Party One">
      </a>
    </div>

    <!-- SEARCH -->
    <div class="search-box">
      <input type="text" placeholder="Search by event, birthday, party..." />
      <button class="search-btn">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
    </div>

    <!-- RIGHT LINKS -->
    <div class="right-links">
      <a href="#">HELP CENTER</a>
      <a href="#">LOG IN</a>

    <button class="city-btn" onclick="openCityPopup()">
  📍 <span id="headerCityText">
    <?= $_SESSION['city'] ?? 'Bangalore' ?>
  </span>
</button>

    </div>

  </div>

<nav class="menu-bar">

  <div class="menu-item">
    Anniversary
    <span class="caret">▾</span>
    <div class="dropdown">
      <a href="#">Room Decor</a>
      <a href="#">Surprise Setup</a>
      <a href="#">Romantic Themes</a>
    </div>
  </div>

  <div class="menu-item">
    Gifts
    <span class="caret">▾</span>
    <div class="dropdown">
      <a href="#">Flowers</a>
      <a href="#">Cakes</a>
      <a href="#">Gift Hampers</a>
    </div>
  </div>

  <div class="menu-item">
    Candlelight Dinners
    <span class="caret">▾</span>
    <div class="dropdown">
      <a href="#">Private Dining</a>
      <a href="#">Rooftop Dinner</a>
      <a href="#">Beachside Dinner</a>
    </div>
  </div>

  <div class="menu-item">
    Decorations
    <span class="caret">▾</span>
    <div class="dropdown">
      <a href="#">Balloon Decor</a>
      <a href="#">Theme Decor</a>
      <a href="#">Room Decor</a>
    </div>
  </div>

  <div class="menu-item">
    Festivals
    <span class="caret">▾</span>
    <div class="dropdown">
      <a href="#">Diwali</a>
      <a href="#">Christmas</a>
      <a href="#">New Year</a>
    </div>
  </div>

  <div class="menu-item">
    Kid's Celebrations
    <span class="caret">▾</span>
    <div class="dropdown">
      <a href="/PARTYONE-PHP/public/kids-cartoon-themes.php">Cartoon Themes</a>
      <a href="/PARTYONE-PHP/public/kids-balloon-parties.php">Balloon Parties</a>
      <a href="/PARTYONE-PHP/public/kids-magic-shows.php">Magic Shows</a>
    </div>
  </div>

  <div class="menu-item">
    Corporate Events
    <span class="caret">▾</span>
    <div class="dropdown">
      <a href="#">Office Decor</a>
      <a href="#">Product Launch</a>
      <a href="#">Team Parties</a>
    </div>
  </div>

</nav>
</header>