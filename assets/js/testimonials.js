function toggleReadMore() {
  const text = document.getElementById("readMoreText");
  const btn = document.getElementById("readToggle");

  if (text.classList.contains("collapsed")) {
    text.classList.remove("collapsed");
    text.classList.add("expanded");
    btn.textContent = "Read Less <<";
  } else {
    text.classList.remove("expanded");
    text.classList.add("collapsed");
    btn.textContent = "Read More >>";
  }
}
