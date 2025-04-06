//nav bar
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const targetSection = document.querySelector(this.getAttribute("href"));

            if (targetSection) {
                // Scroll smoothly to the section
                targetSection.scrollIntoView({ behavior: "smooth", block: "center" });

                // Add animation class for centering effect
                const textElements = targetSection.querySelectorAll("h2, h3, p");
                textElements.forEach(el => {
                    el.classList.add("animate__animated", "animate__zoomIn");

                    // Remove animation after it plays to allow replay on next click
                    setTimeout(() => {
                        el.classList.remove("animate__zoomIn");
                    }, 1500);
                });
            }
        });
    });
});

  // Close the navbar when an anchor tag is clicked (on small screens)
  document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    link.addEventListener('click', () => {
        const navbarCollapse = document.getElementById('navbarNav');
        if (navbarCollapse.classList.contains('show')) {
            navbarCollapse.classList.remove('show');
        }
    });
});


// navlink active state on scroll
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".nav-link");

    window.addEventListener("scroll", () => {
        let scrollPos = window.scrollY;

        links.forEach((link) => {
            let section = document.querySelector(link.getAttribute("href"));

            if (section && section.offsetTop <= scrollPos + 100 && section.offsetTop + section.offsetHeight > scrollPos) {
                links.forEach((l) => l.classList.remove("active"));
                link.classList.add("active");
            }
        });
    });
});

// Scroll to top button
document.addEventListener("DOMContentLoaded", function () {
    let scrollToTopBtn = document.getElementById("scrollToTop");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 200) { // Show when scrolled 200px
            scrollToTopBtn.style.display = "flex";
        } else {
            scrollToTopBtn.style.display = "none";
        }
    });

    scrollToTopBtn.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
});

//toggle button animation
const toggler = document.querySelector('.custom-toggler');
const navbarCollapse = document.getElementById('navbarNav');

toggler.addEventListener('click', () => {
    // Wait a moment to let Bootstrap toggle aria-expanded
    setTimeout(() => {
        const isOpen = toggler.getAttribute('aria-expanded') === 'true';
        toggler.classList.toggle('active', isOpen);
    }, 10);
});

// Optional: remove the active class when nav is closed by clicking a link
document.querySelectorAll('#navbarNav .nav-link').forEach(link => {
    link.addEventListener('click', () => {
        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
        bsCollapse.hide();
        toggler.classList.remove('active');
    });
});
