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
