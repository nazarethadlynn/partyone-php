document.getElementById("callbackForm").addEventListener("submit", function (e) {
  e.preventDefault();
  alert("Thank you! Our team will contact you shortly.");
  this.reset();
});

