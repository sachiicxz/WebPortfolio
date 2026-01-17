document.addEventListener("DOMContentLoaded", () => {
  const navLinks = document.querySelectorAll(".nav-link");
  const navbar = document.getElementById("navbarNav");
  const toggler = document.querySelector(".custom-toggler, .navbar-toggler");

  const currentPage =
    window.location.pathname.split("/").pop() || "index.html";

  navLinks.forEach(link => {
    const href = link.getAttribute("href");

    /* ================= ACTIVE PAGE ================= */
    if (
      href === currentPage ||
      (href === "/" && currentPage === "index.html") ||
      (href === "#" && currentPage === "index.html")
    ) {
      link.classList.add("active");
    }

    /* ================= FORCE CLOSE ON CLICK ================= */
    link.addEventListener("click", (e) => {
      if (
        href === "#" ||
        href === "/" ||
        href === currentPage
      ) {
        e.preventDefault();
      }

      navLinks.forEach(l => l.classList.remove("clicked"));
      link.classList.add("clicked");

      if (window.innerWidth <= 991 && navbar.classList.contains("show")) {
        bootstrap.Collapse.getInstance(navbar)?.hide();
        toggler?.classList.remove("active");
      }
    });
  });

  /* ================= TOGGLER STATE ================= */
  toggler?.addEventListener("click", () => {
    setTimeout(() => {
      toggler.classList.toggle(
        "active",
        toggler.getAttribute("aria-expanded") === "true"
      );
    }, 10);
  });

  /* ================= CLICK OUTSIDE TO CLOSE ================= */
  document.addEventListener("click", (e) => {
    if (
      window.innerWidth <= 991 &&
      navbar.classList.contains("show") &&
      !navbar.contains(e.target) &&
      !toggler.contains(e.target)
    ) {
      bootstrap.Collapse.getInstance(navbar)?.hide();
      toggler?.classList.remove("active");
    }
  });
});
