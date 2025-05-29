document.addEventListener("DOMContentLoaded", function () {
    const toggleButtons = document.querySelectorAll(".toggle-password");

    toggleButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const passwordInput = this.previousElementSibling;
            const type =
                passwordInput.getAttribute("type") === "password"
                    ? "text"
                    : "password";
            passwordInput.setAttribute("type", type);

            const icon = this.querySelector("i");
            if (type === "text") {
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    if (
        typeof jQuery !== "undefined" &&
        typeof jQuery.fn.owlCarousel !== "undefined"
    ) {
        jQuery(function ($) {
            "use strict";
            $("#customers-testimonials").owlCarousel({
                loop: true,
                center: true,
                items: 3,
                margin: 0,
                autoplay: true,
                dots: true,
                autoplayTimeout: 8500,
                smartSpeed: 450,
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    1170: {
                        items: 3,
                    },
                },
            });
        });
    } else {
        console.error(
            "Owl Carousel не загружен. Проверьте подключение библиотеки."
        );
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var attachBtn = document.getElementById("attachFileBtn");
    var fileInput = document.getElementById("fileInput");
    if (attachBtn && fileInput) {
        attachBtn.addEventListener("click", function () {
            fileInput.click();
        });
    }
});

var owl = $(".owl-carousel");
owl.owlCarousel({
    items: 5,
    loop: true,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: false,
    nav: false,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 5,
        },
    },
});
