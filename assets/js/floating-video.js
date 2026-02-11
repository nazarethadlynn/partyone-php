document.addEventListener("DOMContentLoaded", function () {

  const expandBtn = document.getElementById("expandVideoBtn");
  const modal = document.getElementById("videoModal");
  const closeBtn = document.getElementById("closeVideoModal");
  const modalVideo = document.getElementById("modalVideo");
  const closeFloating = document.getElementById("closeFloatingVideo");
  const floatingWrapper = document.getElementById("floatingVideoWrapper");

  // Expand Video
  expandBtn.addEventListener("click", function (e) {
    e.stopPropagation();
    e.preventDefault();
    modal.style.display = "flex";
    modalVideo.currentTime = 0;
    modalVideo.play();
    document.body.style.overflow = "hidden";
  });

  // Close Modal
  closeBtn.addEventListener("click", function () {
    modal.style.display = "none";
    modalVideo.pause();
    document.body.style.overflow = "auto";
  });

  // Close Floating Video
  closeFloating.addEventListener("click", function (e) {
    e.stopPropagation();
    floatingWrapper.style.display = "none";
  });

});
