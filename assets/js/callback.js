// document.getElementById("callbackForm").addEventListener("submit", function (e) {
//   e.preventDefault();
//   alert("Thank you! Our team will contact you shortly.");
//   this.reset();
// });

document.addEventListener("DOMContentLoaded", function () {
  const callbackForm = document.getElementById("callbackForm");

  if (callbackForm) {
    callbackForm.addEventListener("submit", function (e) {
      e.preventDefault();
      alert("Thank you! Our team will contact you shortly.");
      this.reset();
    });
  }
});
