let bannerIndex = 0;
const banners = document.querySelectorAll(".banner-slide");
const dots = document.querySelectorAll(".dot");

function showBanner(index) {
  banners.forEach((b, i) => {
    b.classList.toggle("active", i === index);
    dots[i].classList.toggle("active", i === index);
  });
}

function nextBanner() {
  bannerIndex = (bannerIndex + 1) % banners.length;
  showBanner(bannerIndex);
}

function prevBanner() {
  bannerIndex = (bannerIndex - 1 + banners.length) % banners.length;
  showBanner(bannerIndex);
}

function goBanner(index) {
  bannerIndex = index;
  showBanner(bannerIndex);
}

/* Auto slide */
setInterval(nextBanner, 5000);

