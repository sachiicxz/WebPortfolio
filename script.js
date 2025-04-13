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

function animateCard(cardId, animation) {
    const card = document.getElementById(cardId);
    if (!card) return;

    card.classList.add('animate__animated', animation);

    // Remove animation class after animation ends
    card.addEventListener('animationend', () => {
        card.classList.remove('animate__animated', animation);
    }, { once: true });
}

//cards anmations
document.getElementById("cisco1-card").addEventListener("click", () => {
    animateCard("cisco1-card", "animate__rubberBand");
});
document.getElementById("cisco2-card").addEventListener("click", () => {
    animateCard("cisco2-card", "animate__rubberBand");
});
document.getElementById("cisco3-card").addEventListener("click", () => {
    animateCard("cisco3-card", "animate__rubberBand");
});
document.getElementById("cisco4-card").addEventListener("click", () => {
    animateCard("cisco4-card", "animate__rubberBand");
});

/// Check for mobile screens and add click event for flipping
if (window.innerWidth <= 768) {
    document.querySelectorAll('.skills-card').forEach(card => {
        const fill = card.querySelector('.xp-fill'); // Get the XP bar
        const finalWidth = fill.getAttribute('data-width');

        // Function to animate the XP bar
        function animateXPBar() {
            fill.style.width = finalWidth;
        }

        card.addEventListener('click', function () {
            // Optionally close other cards
            document.querySelectorAll('.skills-card').forEach(c => {
                if (c !== card) c.classList.remove('flipped');
            });
            // Flip clicked card
            card.classList.toggle('flipped');
            if (card.classList.contains('flipped')) {
                animateXPBar();  // Animate XP bar when flipped
            } else {
                fill.style.width = '0%';  // Reset XP bar when unflipped
            }
        });
    });
} else {
    // Desktop: flip on hover and animate XP bar
    const cards = document.querySelectorAll('.skills-card');
    cards.forEach((card) => {
        const flipInner = card.querySelector('.flip-inner');
        const fill = card.querySelector('.xp-fill'); // Get the XP bar
        const finalWidth = fill.getAttribute('data-width');

        // Function to animate the XP bar
        function animateXPBar() {
            fill.style.width = finalWidth;
        }

        // Desktop: flip on hover and animate XP bar
        card.addEventListener('mouseenter', () => {
            card.classList.add('flipped');
            animateXPBar();
        });

        card.addEventListener('mouseleave', () => {
            card.classList.remove('flipped');
            fill.style.width = '0%';  // Reset XP bar when hover ends
        });
    });
}
