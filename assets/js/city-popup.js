/* ================= GLOBAL CITY POPUP SCRIPT ================= */

/* OPEN POPUP */
function openCityPopup() {
  const popup = document.getElementById("cityPopup");
  if (popup) popup.classList.add("active");
}

/* CLOSE POPUP */
function closeCityPopup() {
  const popup = document.getElementById("cityPopup");
  if (popup) popup.classList.remove("active");
}

/* VIEW ALL BUTTON (EVENT DELEGATION – BULLETPROOF) */
document.addEventListener("click", function (e) {

  if (e.target.closest("#viewAllBtn")) {

    const allSection = document.getElementById("allCitiesSection");
    const viewBtn = document.getElementById("viewAllBtn");

    if (!allSection || !viewBtn) return;

    allSection.classList.toggle("show-all");

    const isOpen = allSection.classList.contains("show-all");

    viewBtn.innerHTML = isOpen
      ? 'Hide Cities <i class="fa-solid fa-arrow-up"></i>'
      : 'View All Cities <i class="fa-solid fa-arrow-down"></i>';
  }

});


/* SEARCH */
document.addEventListener("input", function (e) {

  if (e.target.id === "citySearchInput") {

    const value = e.target.value.trim().toLowerCase();
    const items = document.querySelectorAll(".po-city-item");
    const noResult = document.getElementById("noResultText");
    const allSection = document.getElementById("allCitiesSection");

    let visible = 0;

    items.forEach(item => {

      const city = item.dataset.city.toLowerCase();

      if (city.includes(value)) {
        item.style.display = "flex";
        visible++;
      } else {
        item.style.display = "none";
      }

    });

    if (value !== "") {
      allSection?.classList.add("show-all");
    }

    if (noResult) {
      noResult.style.display = visible === 0 ? "block" : "none";
    }

  }

});


/* SET CITY */
function setCity(city) {

  fetch("/PARTYONE-PHP/public/set-city.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: "city=" + encodeURIComponent(city)
  })
  .then(res => res.json())
  .then(() => {
    localStorage.setItem("citySelected", "yes");
    location.reload();
  });

}
