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

openAddonsBtn.addEventListener('click', () => {
  document.body.style.overflow = 'hidden';
});

closeAddonsBtn.addEventListener('click', () => {
  document.body.style.overflow = '';
});

