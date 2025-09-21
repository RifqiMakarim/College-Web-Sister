document.addEventListener("DOMContentLoaded", function () {
  const hamburgerButton = document.getElementById("hamburger-button");
  const mobileMenu = document.getElementById("mobile-menu");

  if (hamburgerButton && mobileMenu) {
    hamburgerButton.addEventListener("click", function () {
      mobileMenu.classList.toggle("hidden");
    });
  }
});
