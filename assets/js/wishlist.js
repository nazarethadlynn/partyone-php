document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".wishlist").forEach((icon) => {
    icon.addEventListener("click", () => {
      icon.classList.toggle("active");
      icon.textContent = icon.classList.contains("active") ? "♥" : "♡";
    });
  });
});
