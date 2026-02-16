document.addEventListener("DOMContentLoaded", function () {

  /* ================= VIEW ALL BUTTON ================= */

  const viewBtn = document.getElementById("viewAllBtn");
  const allSection = document.getElementById("allCitiesSection");

  if (viewBtn && allSection) {
    viewBtn.addEventListener("click", function () {

      const isOpen = allSection.style.display === "block";

      if (isOpen) {
        allSection.style.display = "none";
        viewBtn.innerHTML = 'View All Cities <i class="fa-solid fa-arrow-down"></i>';
      } else {
        allSection.style.display = "block";
        viewBtn.innerHTML = 'Hide Cities <i class="fa-solid fa-arrow-up"></i>';
      }

    });
  }


  /* ================= SEARCH ================= */

  const input = document.getElementById("citySearchInput");
  const popularItems = document.querySelectorAll(".po-city-item");
  const allCities = document.querySelectorAll(".po-all-city");
  const noResult = document.getElementById("noResultText");

  if (!input) return;

  input.addEventListener("input", function () {

    const value = this.value.trim().toLowerCase();
    let visibleCount = 0;

    // Popular Cities
    popularItems.forEach(item => {
      const city = item.dataset.city.toLowerCase();

      if (city.includes(value)) {
        item.style.display = "flex";
        visibleCount++;
      } else {
        item.style.display = "none";
      }
    });

    // Extended Cities
    allCities.forEach(city => {
      const name = city.textContent.toLowerCase();

      if (name.includes(value)) {
        city.style.display = "block";
        visibleCount++;
      } else {
        city.style.display = "none";
      }
    });

    // Auto expand when searching
    if (value !== "") {
      allSection.style.display = "block";
    }

    // No Result Message
    if (noResult) {
      noResult.style.display = visibleCount === 0 ? "block" : "none";
    }

  });

});


/* ================= POPUP FUNCTIONS ================= */

function openCityPopup() {
  const popup = document.getElementById("cityPopup");
  if (popup) popup.classList.add("active");
}

function closeCityPopup() {
  const popup = document.getElementById("cityPopup");
  if (popup) popup.classList.remove("active");
}

function setCity(city) {

  fetch("/PARTYONE-PHP/public/set-city.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `city=${encodeURIComponent(city)}`
  })
  .then(res => res.json())
  .then(() => {
    localStorage.setItem("citySelected", "yes");
    closeCityPopup();
    location.reload();
  });

}




// document.addEventListener("DOMContentLoaded", () => {
//   const page = document.body.dataset.page;

//   // Show popup ONLY on index page & only once
//   if (page === "index" && !localStorage.getItem("citySelected")) {
//     openCityPopup();
//   }
// });



// function openCityPopup() {
//   document.getElementById("cityPopup").classList.add("active");
// }

// function closeCityPopup() {
//   document.getElementById("cityPopup").classList.remove("active");
// }



// function setCity(city) {
//   // Save to PHP session
//   fetch("/PARTYONE-PHP/public/set-city.php", {
//     method: "POST",
//     headers: {
//       "Content-Type": "application/x-www-form-urlencoded",
//     },
//     body: `city=${encodeURIComponent(city)}`,
//   })
//     .then((res) => res.json())
//     .then(() => {
//       // Update header city
//       const headerCity = document.getElementById("headerCityText");
//       if (headerCity) headerCity.textContent = city;

//       // Update strap city
//       const strapCity = document.getElementById("currentCityText");
//       if (strapCity) strapCity.textContent = city;

//       // Mark selected (prevents popup on refresh)
//       localStorage.setItem("citySelected", "yes");

//       closeCityPopup();
//     });
// }


















// document.addEventListener("DOMContentLoaded", function () {

//   const input = document.getElementById("citySearchInput");
//   const popularItems = document.querySelectorAll(".po-city-item");
//   const allCities = document.querySelectorAll(".po-all-city");
//   const noResult = document.getElementById("noResultText");
//   const viewBtn = document.getElementById("viewAllBtn");
//   const allSection = document.getElementById("allCitiesSection");

//   if (!input) return;

//   /* ================= VIEW ALL TOGGLE ================= */
//   viewBtn.addEventListener("click", function () {
//     allSection.style.display =
//       allSection.style.display === "block" ? "none" : "block";
//   });

//   /* ================= SEARCH ================= */
//   input.addEventListener("input", function () {

//     const value = this.value.trim().toLowerCase();
//     let visibleCount = 0;

//     // Popular Cities
//     popularItems.forEach(item => {
//       const city = item.dataset.city.toLowerCase();

//       if (city.includes(value)) {
//         item.style.display = "flex";
//         visibleCount++;
//       } else {
//         item.style.display = "none";
//       }
//     });

//     // All Cities
//     allCities.forEach(city => {
//       const name = city.textContent.toLowerCase();

//       if (name.includes(value)) {
//         city.style.display = "block";
//         visibleCount++;
//       } else {
//         city.style.display = "none";
//       }
//     });

//     // Auto expand extended section when searching
//     if (value !== "") {
//       allSection.style.display = "block";
//     }

//     // No result logic
//     noResult.style.display = visibleCount === 0 ? "block" : "none";

//   });

// });





// City Search Filter (Premium Logic)
// document.addEventListener("DOMContentLoaded", function() {

//   const input = document.getElementById("citySearchInput");
//   const items = document.querySelectorAll(".po-city-item");
//   const noResult = document.getElementById("noResultText");

//   if (!input) return;

//   input.addEventListener("input", function() {

//     const value = this.value.trim().toLowerCase();

//     // If input is empty → reset everything
//     if (value === "") {
//       items.forEach(item => {
//         item.style.display = "flex";
//       });
//       noResult.style.display = "none";
//       return;
//     }

//     let visibleCount = 0;

//     items.forEach(item => {
//       const city = item.dataset.city.toLowerCase();

//       if (city.includes(value)) {
//         item.style.display = "flex";
//         visibleCount++;
//       } else {
//         item.style.display = "none";
//       }
//     });

    
//     if (visibleCount === 0) {
//       noResult.style.display = "block";
//     } else {
//       noResult.style.display = "none";
//     }

//   });

// });

