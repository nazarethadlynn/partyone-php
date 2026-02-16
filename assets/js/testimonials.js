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








document.addEventListener("DOMContentLoaded", function () {

  const videos = document.querySelectorAll(".story-video video");
  const buttons = document.querySelectorAll(".mute-btn");

  videos.forEach(video => {
    video.muted = true;
    video.play().catch(() => {});
  });

  buttons.forEach((button, index) => {

    button.addEventListener("click", function () {

      const currentVideo = videos[index];

      if (currentVideo.muted) {

        // Mute all videos
        videos.forEach(v => v.muted = true);
        buttons.forEach(b => b.textContent = "🔇");

        // Unmute selected
        currentVideo.muted = false;
        currentVideo.volume = 1;
        currentVideo.play();

        button.textContent = "🔊";

      } else {

        currentVideo.muted = true;
        button.textContent = "🔇";

      }

    });

  });

});
