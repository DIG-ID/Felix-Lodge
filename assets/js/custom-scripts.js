document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
    const mobileMenu = document.querySelector(".mobile-menu");
    const menuIconImg = document.getElementById("menu-icon-img");
    const scrollDiv = document.getElementById('scrollDiv');

    mobileMenuToggle.addEventListener("click", function () {
        if (mobileMenu.classList.contains("active")) {
            mobileMenu.style.opacity = "0"; // Hide the menu
            setTimeout(function () {
                mobileMenu.classList.remove("active");
                menuIconImg.src = "/wp-content/themes/Felix-Lodge/assets/images/burger-menu.svg"; // Change image source back to burger-menu.svg
            }, 300); // After the opacity transition duration
        } else {
            mobileMenu.classList.add("active");
            menuIconImg.src = "/wp-content/themes/Felix-Lodge/assets/images/burger-menu-close.svg"; // Change image source to burger-menu-close.svg
            setTimeout(function () {
                mobileMenu.style.opacity = "1"; // Show the menu
            }, 0); // Immediately after adding the "active" class
        }
    });

    const header = document.getElementById('header-main'); // Replace with your actual header ID
    let lastScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

    // Function to handle the scrolling behavior
    function handleScroll() {
        const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        
        if (currentScrollPosition > lastScrollPosition) {
            // Scrolling down
            if (currentScrollPosition > 300) {
                scrollDiv.classList.remove('hide-div');
                header.classList.add('header-with-shadow');
            }
        } else {
            // Scrolling up
            if (currentScrollPosition <= 300) {
                scrollDiv.classList.add('hide-div');
                header.classList.remove('header-with-shadow');
            }
        }

        lastScrollPosition = currentScrollPosition;
    }
    // Attach the scroll event listener
    window.addEventListener('scroll', handleScroll);


    // Tabs control in Store page
    const tabLinks = document.querySelectorAll(".tab-link");

    tabLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault();

            // Find the parent product element
            const productElement = link.closest(".col-span-4");
            if (!productElement) return; // If not found, exit

            // Find the target ID from the data-target attribute
            const targetId = link.getAttribute("data-target");
            const targetContent = productElement.querySelector(`#${targetId}`);

            if (targetContent) {
                // Remove the "active" class from all tab links within the same product
                const tabLinksInProduct = productElement.querySelectorAll(".tab-link");
                tabLinksInProduct.forEach((tabLink) => {
                    tabLink.classList.remove("active");
                });

                // Add the "active" class to the clicked tab link
                link.classList.add("active");
                
                // Hide all tab contents within the same product
                const tabContents = productElement.querySelectorAll(".tab-content");
                tabContents.forEach((content) => {
                    content.style.opacity = 0;
                    content.style.display = "none";
                });

                // Show the selected tab content
                targetContent.style.display = "block";
                // Trigger reflow to apply the initial opacity
                targetContent.offsetHeight;
                targetContent.style.opacity = 1;
            }
        });
    });

});