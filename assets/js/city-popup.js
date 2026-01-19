document.addEventListener("DOMContentLoaded", () => {
  const page = document.body.dataset.page;

  // Show popup ONLY on index page & only once
  if (page === "index" && !localStorage.getItem("citySelected")) {
    openCityPopup();
  }
});

function openCityPopup() {
  document.getElementById("cityPopup").style.display = "flex";
}

function closeCityPopup() {
  document.getElementById("cityPopup").style.display = "none";
}

function setCity(city) {
  // Save to PHP session
  fetch("/PARTYONE-PHP/public/set-city.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `city=${encodeURIComponent(city)}`,
  })
    .then((res) => res.json())
    .then(() => {
      // Update header city
      const headerCity = document.getElementById("headerCityText");
      if (headerCity) headerCity.textContent = city;

      // Update strap city
      const strapCity = document.getElementById("currentCityText");
      if (strapCity) strapCity.textContent = city;

      // Mark selected (prevents popup on refresh)
      localStorage.setItem("citySelected", "yes");

      closeCityPopup();
    });
}
