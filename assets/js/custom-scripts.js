document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
    const mobileMenu = document.querySelector(".mobile-menu");

    mobileMenuToggle.addEventListener("click", function () {
        mobileMenu.classList.toggle("active");
    });
});