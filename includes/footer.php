<script src="../assets/js/city-popup.js"></script>
<script src="../assets/js/wishlist.js"></script>
<script src="../assets/js/callback.js"></script>
<script src="../assets/js/testimonials.js"></script>





<!-- ================= FOOTER ================= -->
<footer class="site-footer">

  <!-- TOP FOOTER -->
  <div class="footer-top-wrap">
    <div class="footer-top">

      <div class="footer-text">
        <h2>
          <span>PartyOne</span> is India's leading Event planning platform,
          making celebrations seamless and memorable
        </h2>
      </div>

      <div class="footer-subscribe">
        <div class="subscribe-row">
          <input type="email" id="subscribeEmail" placeholder="Enter your email...">
          <button id="subscribeBtn">Subscribe</button>
        </div>
      </div>

    </div>
  </div>

  <hr class="footer-divider">

  <!-- MAIN FOOTER -->
  <div class="footer-content">

    <div class="footer-col brand">
      <h3><span>Party</span>One</h3>
      <p>
        PartyOne is India's leading event planning platform,
        making celebrations seamless and memorable.
      </p>

      <p class="social-text">Get connected with us on the social network!</p>

      <div class="social-icons">
        <a href="https://www.facebook.com/partyone.in" target="_blank">
          <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="https://x.com/PartyOne_India" target="_blank">
          <i class="fa-brands fa-x-twitter"></i>
        </a>
        <a href="https://www.youtube.com/@partyoneindia" target="_blank">
          <i class="fa-brands fa-youtube"></i>
        </a>
        <a href="https://www.instagram.com/partyone_india/" target="_blank">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </div>
    </div>

    <div class="footer-col">
      <h4>Home</h4>
      <a href="/about-us">About Us</a>
      <a href="/contact">Contact Us</a>
      <a href="/blog">Blog</a>
      <a href="/stars-born">Stars Born</a>
    </div>

    <div class="footer-col">
      <h4>Quick Links</h4>
      <a href="/faq">FAQ</a>
      <a href="/terms">Terms & Conditions</a>
      <a href="/refund">Refund & Cancellation</a>
      <a href="/privacy">Privacy Policy</a>
      <a href="/recent-bookings">Recent Bookings</a>
    </div>

    <div class="footer-col">
      <h4>Contact</h4>
      <p>📞 +91 93640 84216</p>
      <p>✉ info@partyone.in</p>
    </div>

  </div>

  <hr class="footer-divider">

  <div class="footer-bottom">
    © 2026 PartyOne. All Rights Reserved.
  </div>

</footer>

<script src="../assets/js/footer.js"></script>
<script src="../assets/js/footer-subscribe.js"></script>
<script src="../assets/js/products.js"></script>
<script src="../assets/js/search.js"></script>
<script src="../assets/js/book-now.js"></script>
<script src="../assets/js/floating-video.js"></script>






<!-- ❤️ FLOATING HEARTS LAYER -->
<div id="floating-hearts"></div>


<script>
(function () {
  const container = document.getElementById("floating-hearts");
  if (!container) return;

  function createHeart() {
    const heart = document.createElement("div");
    heart.className = "heart";

    // Start from top
    heart.style.left = Math.random() * 100 + "vw";
    heart.style.top = "-40px"; // 🔥 start above screen
    heart.style.setProperty("--x", (Math.random() * 100 - 50) + "px");
    heart.style.animationDuration = Math.random() * 3 + 6 + "s";

    container.appendChild(heart);

    setTimeout(() => {
      heart.remove();
    }, 10000);
  }

  setInterval(createHeart, 700);
})();

(function () {

const users = [
  "Rashika", "Ananya", "Priya", "Rahul",
  "Sneha", "Kiran", "Amit", "Divya"
];

const products = [
  "Welcome Baby Girl Decor",
  "Romantic Candlelight Dinner",
  "Birthday Balloon Setup",
  "Corporate Event Decoration",
  "Anniversary Surprise Setup"
];

const images = [
  "../assets/images/sample-users/sample1.jpg",
  "../assets/images/sample-users/sample2.jpg",
  "../assets/images/sample-users/sample3.jpg"
];

function showPurchasePopup() {
  const popup = document.getElementById("purchasePopup");

  document.getElementById("popupUser").innerText =
    users[Math.floor(Math.random() * users.length)];

  document.getElementById("popupProduct").innerText =
    products[Math.floor(Math.random() * products.length)];

  document.getElementById("popupImage").src =
    images[Math.floor(Math.random() * images.length)];

  popup.classList.add("show");

  setTimeout(() => {
    popup.classList.remove("show");
  }, 6000);
}

window.closePurchasePopup = function () {
  document.getElementById("purchasePopup").classList.remove("show");
};

setTimeout(showPurchasePopup, 10000);
setInterval(showPurchasePopup, 35000);

})();

</script>



<!-- ================= PURCHASE POPUP ================= -->
<div id="purchasePopup" class="purchase-popup">
  <button class="popup-close" onclick="closePurchasePopup()">✕</button>

  <div class="popup-content">
    <img id="popupImage" src="../assets/images/sample-users/sample1.jpg" alt="User">

    <div class="popup-text">
      <p class="popup-name">
        <strong id="popupUser">Priya</strong> purchased
      </p>
      <p class="popup-product" id="popupProduct">
        Anniversary Surprise Setup
      </p>
      <p class="popup-time">Just now</p>
    </div>
  </div>
</div>

<!-- ================= FLOATING VIDEO ================= -->

<div id="floatingVideoWrapper">

<!-- Close Button (SMALL VIDEO) -->
  <div id="closeFloatingVideo">&times;</div>


  <a href="https://www.instagram.com/partyone_india/" target="_blank" class="videoLink">
    <video muted autoplay loop playsinline>
      <source src="../assets/videos/promo.mp4" type="video/mp4">
    </video>

    <div class="watchMoreOverlay">
      Watch more on Instagram
    </div>
  </a>

  <!-- Enlarge Icon -->
  <div id="expandVideoBtn">⤢</div>

</div>


<!-- ================= VIDEO MODAL ================= -->

<div id="videoModal">
  <div class="videoModalContent">
    <span id="closeVideoModal">&times;</span>
    <video id="modalVideo" controls autoplay>
      <source src="../assets/videos/promo.mp4" type="video/mp4">
    </video>
  </div>
</div>


<!-- ================= REAL ANIMATED AI ASSISTANT ================= -->

<!-- <div class="ai-assistant-wrapper"> -->

  <!-- Speech Bubble -->
  <!-- <div class="ai-bubble">
    Hi 👋 I'm PartyOne AI Assistant 🎉<br>
    Ask me about decorations!
  </div> -->

  <!-- Lottie Animation Container -->
  <!-- <div id="aiLottieCharacter" class="ai-lottie" onclick="toggleAIChat()"></div>

</div> -->

<!-- ================= PROFESSIONAL CHAT PANEL ================= -->

<!-- <div class="ai-chat-panel" id="aiChatPanel">

  <div class="ai-chat-header">
    <div class="ai-header-left">
      <div class="ai-status-dot"></div>
      <div>
        <div class="ai-title">PartyOne AI Assistant</div>
        <div class="ai-subtitle">Online • Instant replies</div>
      </div>
    </div>

    <button class="ai-close-btn" onclick="toggleAIChat()">✕</button>
  </div>

  <div class="ai-chat-messages" id="aiMessages"></div>

  <div class="ai-chat-input-wrapper">
    <input type="text" id="aiInput" placeholder="Ask about decorations..." />
    <button onclick="sendMessage()">Send</button>
  </div>

</div> -->

<script src="../assets/js/ai-assistant.js"></script>
</body>
</html>
