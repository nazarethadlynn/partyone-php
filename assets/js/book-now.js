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
  pincodeInput.addEventListener("input", function () {
    forgotText.style.display = this.value.length >= 3 ? "block" : "none";
  });

    /* ---------------- MOBILE NUMBER ---------------- */
  mobileInput.addEventListener("input", function () {
    this.value = this.value.replace(/\D/g, ""); // only numbers

    if (this.value.length === 10) {
      mobileError.style.display = "none";
    }
  });
    function isValidMobile() {
    return mobileInput.value.length === 10;
  }

  /* DATE PICKER */
  dateTimeDisplay.addEventListener("click", function () {
    hiddenDate.showPicker();
  });

  hiddenDate.addEventListener("change", function () {
    hiddenTime.showPicker();
  });

  /* TIME PICKER */
  hiddenTime.addEventListener("change", function () {
    const date = hiddenDate.value;
    const time = hiddenTime.value;

    if (!date || !time) return;

    const formattedDate = new Date(date).toLocaleDateString("en-IN", {
      day: "2-digit",
      month: "short",
      year: "numeric"
    });

    let [hours, minutes] = time.split(":");
    hours = parseInt(hours, 10);
    const ampm = hours >= 12 ? "PM" : "AM";
    hours = hours % 12 || 12;

    dateTimeDisplay.value =
      `${formattedDate}, ${hours}:${minutes} ${ampm}`;
  });

  if (buyBtn) {
    buyBtn.addEventListener("click", (e) => {
      e.preventDefault(); // stop redirect
      modal.style.display = "flex";
      document.body.style.overflow = "hidden";
    });
  }

  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
    document.body.style.overflow = "";
  });

});




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
  mainImg.src = galleryImages[currentIndex];

  document.querySelectorAll(".thumbnail-strip img").forEach((img, i) => {
    img.classList.toggle("active", i === currentIndex);
  });
}

function changeMainImage(index) {
  currentIndex = index;
  updateMainImage();
}

function nextImage() {
  currentIndex = (currentIndex + 1) % galleryImages.length;
  updateMainImage();
}

function prevImage() {
  currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
  updateMainImage();
}





document.addEventListener("scroll", () => {
  const fixedBar = document.getElementById("fixedBuyBar");
  const marker = document.getElementById("pageEndMarker");
  const bookingBtn = document.getElementById("openAddonsModal");

  if (!fixedBar || !marker || !bookingBtn) return;

  const markerRect = marker.getBoundingClientRect();

  /* Show fixed bar ONLY when footer area is visible */
  if (markerRect.top <= window.innerHeight) {
    fixedBar.style.display = "block";
  } else {
    fixedBar.style.display = "none";
  }
});


  const toggleBtn = document.getElementById("toggleReviews");
  const extraReviews = document.querySelector(".extra-reviews");

  toggleBtn.addEventListener("click", () => {
    const isOpen = extraReviews.style.display === "block";

    extraReviews.style.display = isOpen ? "none" : "block";
    toggleBtn.textContent = isOpen
      ? "Read More Reviews"
      : "Show Less Reviews";
  });









  
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("addonsModal");
  const openBtn = document.getElementById("openAddonsModal");
  const closeBtn = document.getElementById("closeAddons");

  /* OPEN MODAL */
  openBtn?.addEventListener("click", () => {
    modal.style.display = "flex";
  });

  /* CLOSE MODAL */
  closeBtn?.addEventListener("click", () => {
    modal.style.display = "none";
  });

  modal.addEventListener("click", e => {
    if (e.target === modal) modal.style.display = "none";
  });

  /* ADD BUTTON TOGGLE */
  document.querySelectorAll(".add-btn").forEach(btn => {
    btn.addEventListener("click", () => {
      btn.classList.toggle("added");
      btn.textContent = btn.classList.contains("added") ? "ADDED ✓" : "ADD";
    });
  });

  /* TABS FILTER */
  document.querySelectorAll(".tab").forEach(tab => {
    tab.addEventListener("click", () => {
      document.querySelectorAll(".tab").forEach(t => t.classList.remove("active"));
      tab.classList.add("active");

      const category = tab.dataset.tab;

      document.querySelectorAll(".addon-card").forEach(card => {
        card.style.display =
          card.dataset.category.includes(category) || category === "popular"
            ? "block"
            : "none";
      });
    });
  });
});





const mainProduct = {
  name: "Neon Ring Birthday Decoration",
  price: 5499,
  image: "../assets/images/birthday-decor/birthday1.jpg"
};

document.querySelector(".book-btn").addEventListener("click", () => {
  localStorage.setItem("mainProduct", JSON.stringify(mainProduct));

  // reset addons every fresh product selection
  if (!localStorage.getItem("selectedAddons")) {
    localStorage.setItem("selectedAddons", JSON.stringify([]));
  }

  document.getElementById("addonsModal").style.display = "flex";
});


let selectedAddons = JSON.parse(localStorage.getItem("selectedAddons")) || [];

document.querySelectorAll(".addon-card").forEach(card => {
  const btn = card.querySelector(".add-btn");

  btn.addEventListener("click", () => {
    const addon = {
      name: card.querySelector("h4").innerText,
      price: parseInt(card.querySelector("p").innerText.replace("₹","")),
      image: card.querySelector("img").src
    };

    const exists = selectedAddons.find(a => a.name === addon.name);

    if (exists) {
      selectedAddons = selectedAddons.filter(a => a.name !== addon.name);
      btn.innerText = "ADD";
      btn.style.background = "#ff4d6d";
    } else {
      selectedAddons.push(addon);
      btn.innerText = "ADDED ✓";
      btn.style.background = "#22c55e";
    }

    localStorage.setItem("selectedAddons", JSON.stringify(selectedAddons));
  });
});
