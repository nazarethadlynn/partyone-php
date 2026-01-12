window.onload = function () {
  openCityPopup();
};

function openCityPopup() {
  const popup = document.getElementById("cityPopup");
  if (popup) popup.style.display = "flex";
}

function closePopup() {
  document.getElementById("cityPopup").style.display = "none";
}

function setCity(city) {
  // Update header button
  document.getElementById("cityBtn").innerText = "📍 " + city;

  // 🔥 UPDATE STRAP TEXT
  const strapCity = document.getElementById("currentCityText");
  if (strapCity) {
    strapCity.innerText = city;
  }

  closePopup();
}
