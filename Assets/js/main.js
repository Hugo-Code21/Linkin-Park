(function () {
    "use strict";

    function animateCollection(selector) {
        document.querySelectorAll(selector).forEach(function (item, index) {
            item.style.animation = "rise .55s ease " + (index * 0.06) + "s both";
        });
    }

    function initTiltCards() {
        document.querySelectorAll(".tilt-card").forEach(function (card) {
            card.addEventListener("pointermove", function (event) {
                var bounds = card.getBoundingClientRect();
                var x = (event.clientX - bounds.left) / bounds.width - 0.5;
                var y = (event.clientY - bounds.top) / bounds.height - 0.5;
                card.style.transform =
                    "perspective(700px) rotateX(" + (y * -4) +
                    "deg) rotateY(" + (x * 4) + "deg) translateY(-7px)";
            });
            card.addEventListener("pointerleave", function () {
                card.style.transform = "";
            });
        });
    }

    function initScrollLinks() {
        document.querySelectorAll('a[href^="#"]').forEach(function (link) {
            link.addEventListener("click", function (event) {
                var target = document.querySelector(link.getAttribute("href"));
                if (!target) {
                    return;
                }

                event.preventDefault();
                target.scrollIntoView({ behavior: "smooth", block: "start" });
            });
        });
    }

    function markCurrentPage() {
        var currentPath = window.location.pathname.replace(/\/$/, "") || "/";
        document.querySelectorAll(".site-header nav a").forEach(function (link) {
            var linkPath = new URL(link.href).pathname.replace(/\/$/, "") || "/";
            if (linkPath === currentPath) {
                link.setAttribute("aria-current", "page");
            }
        });
    }

    function initResume() {
        var toggle = document.querySelector("[data-resume-toggle]");
        var content = document.querySelector("[data-resume-content]");
        var label = document.querySelector("[data-resume-label]");
        var printButton = document.querySelector("[data-print-resume]");

        if (!toggle || !content || !label) {
            return;
        }

        toggle.addEventListener("click", function () {
            var isOpen = !content.hidden;
            content.hidden = isOpen;
            toggle.setAttribute("aria-expanded", String(!isOpen));
            label.textContent = isOpen ? "Open resume" : "Close resume";
        });

        if (printButton) {
            printButton.addEventListener("click", function () {
                window.print();
            });
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        animateCollection(".album-card, .album-row, .member-card");
        initTiltCards();
        initScrollLinks();
        markCurrentPage();
        initResume();
    });
}());