document.addEventListener("DOMContentLoaded", () => {
  const input = document.getElementById("searchInput");
  const dropdown = document.getElementById("searchSuggestions");

  if (!input || !dropdown) return;

  // Show dropdown on focus
  input.addEventListener("focus", () => {
    dropdown.style.display = "block";
  });

  // Filter results while typing
  input.addEventListener("input", () => {
    const value = input.value.toLowerCase();
    let hasMatch = false;

    dropdown.querySelectorAll("li").forEach(item => {
      if (item.textContent.toLowerCase().includes(value)) {
        item.style.display = "block";
        hasMatch = true;
      } else {
        item.style.display = "none";
      }
    });

    dropdown.style.display = hasMatch ? "block" : "none";
  });

  // Click suggestion → fill input
  dropdown.addEventListener("click", (e) => {
    if (e.target.tagName === "LI") {
      input.value = e.target.textContent;
      dropdown.style.display = "none";
    }
  });

  // Hide when clicking outside
  document.addEventListener("click", (e) => {
    if (!e.target.closest(".search-box")) {
      dropdown.style.display = "none";
    }
  });
});
