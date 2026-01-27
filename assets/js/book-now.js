document.addEventListener("DOMContentLoaded", function () {

  const pincodeInput = document.getElementById("pincodeInput");
  const forgotText = document.getElementById("forgotPincode");
  const mobileInput = document.getElementById("mobileInput");
  const mobileError = document.getElementById("mobileError");
  const dateTimeDisplay = document.getElementById("dateTimeDisplay");
  const hiddenDate = document.getElementById("hiddenDate");
  const hiddenTime = document.getElementById("hiddenTime");
  const modal = document.getElementById("addonsModal");
  const closeBtn = document.getElementById("closeAddons");
  const buyBtn = document.querySelector(".book-btn");

  /* PINCODE */
  if (pincodeInput && forgotText) {
    pincodeInput.addEventListener("input", function () {
      forgotText.style.display = this.value.length >= 3 ? "block" : "none";
    });
  }

  /* MOBILE */
  if (mobileInput && mobileError) {
    mobileInput.addEventListener("input", function () {
      this.value = this.value.replace(/\D/g, "");
      mobileError.style.display = this.value.length === 10 ? "none" : "block";
    });
  }

  /* DATE PICKER */
  if (dateTimeDisplay && hiddenDate && hiddenTime) {
    dateTimeDisplay.addEventListener("click", () => hiddenDate.showPicker());

    hiddenDate.addEventListener("change", () => hiddenTime.showPicker());

    hiddenTime.addEventListener("change", () => {
      if (!hiddenDate.value || !hiddenTime.value) return;

      const date = new Date(hiddenDate.value).toLocaleDateString("en-IN", {
        day: "2-digit", month: "short", year: "numeric"
      });

      let [h, m] = hiddenTime.value.split(":");
      h = parseInt(h);
      const ampm = h >= 12 ? "PM" : "AM";
      h = h % 12 || 12;

      dateTimeDisplay.value = `${date}, ${h}:${m} ${ampm}`;
    });
  }

  /* OPEN MODAL */
  if (buyBtn && modal) {
    buyBtn.addEventListener("click", e => {
      e.preventDefault();
      modal.style.display = "flex";
      document.body.style.overflow = "hidden";
    });
  }

  /* CLOSE MODAL */
  if (closeBtn && modal) {
    closeBtn.addEventListener("click", () => {
      modal.style.display = "none";
      document.body.style.overflow = "";
    });
  }


   /* ⭐ SKIP FOR NOW → REDIRECT TO CHECKOUT */
  const skipBtn = document.getElementById("skipToCheckout");
  if (skipBtn) {
    skipBtn.addEventListener("click", () => {
      window.location.href = "/PARTYONE-PHP/public/checkout.php";
    });
  }



  /* TOGGLE REVIEWS ✅ FIXED */
  const toggleBtn = document.getElementById("toggleReviews");
  const extraReviews = document.querySelector(".extra-reviews");

  if (toggleBtn && extraReviews) {
    toggleBtn.addEventListener("click", () => {
      const open = extraReviews.style.display === "block";
      extraReviews.style.display = open ? "none" : "block";
      toggleBtn.textContent = open ? "Read More Reviews" : "Show Less Reviews";
    });
  }

});

/* IMAGE GALLERY */
const galleryImages = [
  "../assets/images/birthday-decor/birthday1.jpg",
  "../assets/images/birthday-decor/birthday2.jpg",
  "../assets/images/birthday-decor/birthday3.jpg",
  "../assets/images/birthday-decor/birthday4.webp",
  "../assets/images/birthday-decor/birthday5.jpg"
];

let currentIndex = 0;

function updateMainImage() {
  const mainImg = document.getElementById("mainProductImage");
  if (!mainImg) return;

  mainImg.src = galleryImages[currentIndex];
  document.querySelectorAll(".thumbnail-strip img").forEach((img, i) => {
    img.classList.toggle("active", i === currentIndex);
  });
}

/* FIXED BAR */
document.addEventListener("scroll", () => {
  const fixedBar = document.getElementById("fixedBuyBar");
  const marker = document.getElementById("pageEndMarker");
  if (!fixedBar || !marker) return;

  fixedBar.style.display =
    marker.getBoundingClientRect().top <= window.innerHeight
      ? "block"
      : "none";
});

/* PRODUCT STORAGE */
const mainProduct = {
  name: "Neon Ring Birthday Decoration",
  price: 5499,
  image: "../assets/images/birthday-decor/birthday1.jpg"
};

const bookBtn = document.querySelector(".book-btn");
if (bookBtn) {
  bookBtn.addEventListener("click", () => {
    localStorage.setItem("mainProduct", JSON.stringify(mainProduct));
    if (!localStorage.getItem("selectedAddons")) {
      localStorage.setItem("selectedAddons", JSON.stringify([]));
    }
  });
}

/* ADDONS */
let selectedAddons = JSON.parse(localStorage.getItem("selectedAddons")) || [];

document.querySelectorAll(".addon-card").forEach(card => {
  const btn = card.querySelector(".add-btn");
  if (!btn) return;

  btn.addEventListener("click", () => {
    const addon = {
      name: card.querySelector("h4").innerText,
      price: parseInt(card.querySelector("p").innerText.replace("₹","")),
      image: card.querySelector("img").src
    };

    const exists = selectedAddons.find(a => a.name === addon.name);

    if (exists) {
      selectedAddons = selectedAddons.filter(a => a.name !== addon.name);
      btn.textContent = "ADD";
    } else {
      selectedAddons.push(addon);
      btn.textContent = "ADDED ✓";
    }

    localStorage.setItem("selectedAddons", JSON.stringify(selectedAddons));
  });
});




const productImages = [
  "../assets/images/birthday-decor/birthday1.jpg",
  "../assets/images/birthday-decor/birthday2.jpg",
  "../assets/images/birthday-decor/birthday3.jpg",
  "../assets/images/birthday-decor/birthday4.webp",
  "../assets/images/birthday-decor/birthday5.jpg"
];

let currentImageIndex = 0;

function changeMainImage(el) {
  const mainImg = document.getElementById("mainProductImage");

  // if number is passed (your current HTML)
  if (typeof el === "number") {
    currentImageIndex = el;
    mainImg.src = productImages[el];
    return;
  }

  // if element is passed
  mainImg.src = el.src;
}

function nextImage() {
  currentImageIndex = (currentImageIndex + 1) % productImages.length;
  document.getElementById("mainProductImage").src =
    productImages[currentImageIndex];
}

function prevImage() {
  currentImageIndex =
    (currentImageIndex - 1 + productImages.length) % productImages.length;
  document.getElementById("mainProductImage").src =
    productImages[currentImageIndex];
}




/* Prevent background scroll when modal is open (mobile fix) */
const addonsModal = document.getElementById('addonsModal');
const openAddonsBtn = document.getElementById('openAddonsModal');
const closeAddonsBtn = document.getElementById('closeAddons');

if (openAddonsBtn) {
  openAddonsBtn.addEventListener('click', () => {
    document.body.style.overflow = 'hidden';
  });
}

if (closeAddonsBtn) {
  closeAddonsBtn.addEventListener('click', () => {
    document.body.style.overflow = '';
  });
}










document.getElementById("openAddonsModal")?.addEventListener("click", e => {
  e.preventDefault();
  document.getElementById("addonsModal").style.display = "flex";
});

document.getElementById("closeAddons")?.addEventListener("click", () => {
  document.getElementById("addonsModal").style.display = "none";
});



document.addEventListener("DOMContentLoaded", () => {

  const tabs = document.querySelectorAll(".addons-tabs .tab");
  const cards = document.querySelectorAll(".addon-card");
  

  if (!tabs.length || !cards.length) return;

  // Save original display (important for flex/grid)
  cards.forEach(card => {
    card.dataset.originalDisplay = getComputedStyle(card).display;
  });

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {

      // Active state
      tabs.forEach(t => t.classList.remove("active"));
      tab.classList.add("active");

      const filter = tab.dataset.filter;

      cards.forEach(card => {
        const categories = (card.dataset.category || "").split(" ");

        // Popular = show all
        if (filter === "all") {
          card.style.display = card.dataset.originalDisplay;
        }
        // Match exact category tag
        else if (categories.includes(filter)) {
          card.style.display = card.dataset.originalDisplay;
        }
        // Hide others
        else {
          card.style.display = "none";
        }
      });

    });
  });

  // ✅ Auto-trigger Popular on open
  document.querySelector('.addons-tabs .tab[data-filter="all"]')?.click();

});




document.addEventListener("DOMContentLoaded", function () {

  const categories = [
    { name:"Birthday Decorations", icon:"🎂" },
    { name:"Party Decorations", icon:"🏛️" },
    { name:"Candlelight Dinner", icon:"🕯️" },
    { name:"Personalised Gifts", icon:"🎁" },
    { name:"Party Entertainment", icon:"🎤" },
    { name:"Corporate Events", icon:"🏢" },
    // { name:"Food Catering", icon:"🍽️" },
    { name:"Photography Services", icon:"📸" },
    { name:"Anniversary Decorations", icon:"❤️" },
    { name:"Baby Shower Celebration", icon:"👶" },
    // { name:"Baby Welcome Decorations", icon:"🍼" },
    // { name:"Christmas/Xmas Decorations", icon:"🎄" },
    // { name:"Kids Birthday Celebration", icon:"🧒" },
    // { name:"First Birthday Decoration", icon:"✨" },
    // { name:"Diwali Decorations", icon:"🪔" },
    // { name:"Haldi/Mehndi Decorations", icon:"🎨" },
    // { name:"Halloween Theme Decorations", icon:"🎃" },
    { name:"Show More", icon:"➕" }
  ];

  const partyLinks = document.getElementById("partyLinks");
  const cityTabs = document.querySelectorAll(".party-city-tabs button");

  if (!partyLinks || !cityTabs.length) return;

  function renderLinks(city) {
    partyLinks.innerHTML = "";
    categories.forEach(cat => {
      partyLinks.innerHTML += `
        <a class="party-card" href="/services/${cat.name.toLowerCase().replace(/ /g,'-')}-${city.toLowerCase().replace(/ /g,'-')}">
          
          <div class="party-icon">${cat.icon}</div>

          <div class="party-text">
            <strong>${cat.name}</strong>
            ${cat.name !== "Show More" ? `<span>in ${city}</span>` : ``}
          </div>

        </a>
      `;
    });
  }

  /* Initial */
  renderLinks("Delhi NCR");

  /* Tabs */
  cityTabs.forEach(btn => {
    btn.addEventListener("click", () => {
      cityTabs.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");
      renderLinks(btn.dataset.city);
    });
  });

});
