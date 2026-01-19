document.getElementById("subscribeBtn").addEventListener("click", function () {
  const email = document.getElementById("subscribeEmail");
  const wrapper = document.querySelector(".footer-subscribe");

  const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value);

  if (!isValid) {
    wrapper.classList.remove("shake");
    void wrapper.offsetWidth; // reset animation
    wrapper.classList.add("shake");
    email.focus();
  } else {
    alert("Subscribed successfully!");
    email.value = "";
  }
});
