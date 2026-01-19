document.addEventListener("DOMContentLoaded", () => {
  const emailInput = document.getElementById("subscribeEmail");
  const subscribeBtn = document.getElementById("subscribeBtn");
  const hint = document.getElementById("subscribeHint");

  function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  subscribeBtn.addEventListener("click", () => {
    const email = emailInput.value.trim();

    // ❌ INVALID OR EMPTY
    if (!email || !isValidEmail(email)) {
      emailInput.classList.remove("shake");
      subscribeBtn.classList.remove("shake");

      // force reflow so animation restarts
      void emailInput.offsetWidth;

      emailInput.classList.add("shake");
      subscribeBtn.classList.add("shake");

      hint.textContent = "Please enter a valid email address";
      hint.style.color = "#e11d48";
      return;
    }

    // ✅ VALID EMAIL
    hint.textContent = "Subscribed successfully!";
    hint.style.color = "#16a34a";
    emailInput.value = "";

    // later → API call can go here
    // fetch('/subscribe', { method: 'POST', body: email })
  });
});
