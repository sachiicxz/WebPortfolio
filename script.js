
document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll(".nav-link");
    const toggler = document.querySelector(".custom-toggler");
    const navbarCollapse = document.getElementById("navbarNav");

    // ================= ACTIVE PAGE =================
    const currentPage = window.location.pathname.split("/").pop();

    navLinks.forEach(link => {
        const linkPage = link.getAttribute("href");
        if (linkPage === currentPage) {
            link.classList.add("active");
        }
    });

    // ================= CLOSE MENU ON CLICK =================
    navLinks.forEach(link => {
        link.addEventListener("click", () => {
            if (navbarCollapse.classList.contains("show")) {
                bootstrap.Collapse.getInstance(navbarCollapse)?.hide();
                toggler.classList.remove("active");
            }
        });
    });

    // ================= TOGGLER ANIMATION =================
    toggler.addEventListener("click", () => {
        setTimeout(() => {
            toggler.classList.toggle(
                "active",
                toggler.getAttribute("aria-expanded") === "true"
            );
        }, 10);
    });
});


