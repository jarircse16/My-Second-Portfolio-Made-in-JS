// slideshow.js
document.addEventListener("DOMContentLoaded", function () {
  const imageContainers = document.querySelectorAll(".image-container");

  imageContainers.forEach((container) => {
    const images = container.querySelectorAll("img");
    let currentIndex = 0;

    function showNextImage() {
      images[currentIndex].style.display = "none";
      currentIndex = (currentIndex + 1) % images.length;
      images[currentIndex].style.display = "block";
    }

    // Hide all images except the first one
    for (let i = 1; i < images.length; i++) {
      images[i].style.display = "none";
    }

    setInterval(showNextImage, 5000); // 5000 milliseconds = 5 seconds
  });
});
