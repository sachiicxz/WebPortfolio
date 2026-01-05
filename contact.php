<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="about/ID1.png" type="image/x-icon">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mediaquery.css">


    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Animate.css for Smooth Animations -->


</head>

<style>
    body {
        width: 100%;
        height: auto;
        overflow-x: hidden;
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <!-- Logo and Brand -->
            <a class="navbar-brand animate__animated animate__fadeInLeft" href="index.php">
                <h5>MY <span>PORTFOLIO</span></h5>
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="bar top-bar"></span>
                <span class="bar middle-bar"></span>
                <span class="bar bottom-bar"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link animate__animated animate__fadeInRight"
                            href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link animate__animated animate__fadeInLeft"
                            href="works.php">WORKS</a></li>
                    <li class="nav-item"><a class="nav-link animate__animated animate__fadeInRight"
                            href="skills.php">SKILLS</a></li>
                    <li class="nav-item"><a class="nav-link animate__animated animate__fadeInRight"
                            href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- CONTACT SECTION -->
    <section class="contact" id="contact">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-4">
                <h3 class="fw-bold text-white">CONTACT ME</h3>
                <hr class="mx-auto contact-line">
                <p class="contact-desc">
                    Have a question, suggestion, or opportunity in mind?
                    Feel free to reach out — I’d love to connect with you.
                </p>
            </div>

            <form id="contactForm" class="contact-form">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                    <label>Full Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                    <label>Email Address</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" name="message" placeholder="Message" style="height:120px"
                        required></textarea>
                    <label>Message</label>
                </div>

                <button type="submit" class="contact-btn" id="sendBtn">
                    <span class="btn-text"><i class="bi bi-send"></i> Send Message</span>
                    <span class="btn-spinner d-none"></span>
                </button>
            </form>
        </div>
    </section>



    <!-- Footer -->
    <footer class="footer">
        <div class="container">

            <!-- Footer Top -->
            <div class="footer-top">

                <!-- Left: Branding -->
                <div class="footer-brand">
                    <h4>Divina Gracia Corroz</h4>
                    <p>BSIT Student</p>
                </div>

                <div class="footer-links">
                    <h6>Quick Links</h6>
                    <ul>
                        <li><a href="index.php">About</a></li>
                        <li><a href="works.php">Works</a></li>
                        <li><a href="skills.php">Skills</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>



                <div class="footer-contact">
                    <h6>Let's Work Together</h6>
                    <div class="media-icons">
                        <a href="https://facebook.com/riyuuio" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com/sachiiczx" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://twitter.com/sachiicxz" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a href="https://github.com/sachiicxz" target="_blank"><i class="bi bi-github"></i></a>
                        <a href="https://www.linkedin.com/in/divina-gracia-corroz-a0b0732bb/" target="_blank">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=corrozdivina14@gmail.com" target="_blank">
                        <button class="hire-btn">Hire Me</button>
                    </a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Bottom -->
        <div class="footer-bottom text-center">
            <p>&copy; 2025 my_portfolio. All rights reserved.</p>
        </div>
    </footer>

    <!-- CONTACT FORM HTML HERE -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('contactForm');
            const btn = document.getElementById('sendBtn');
            const spinner = btn.querySelector('.btn-spinner');
            const btnText = btn.querySelector('.btn-text');

            form.addEventListener('submit', async (e) => {
                e.preventDefault();

                btn.disabled = true;
                spinner.classList.remove('d-none');
                btnText.textContent = 'Sending...';

                try {
                    const res = await fetch('send_mail.php', {
                        method: 'POST',
                        body: new FormData(form)
                    });

                    const data = await res.json();

                    if (data.status === 'success') {
                        showToast('Message sent successfully!', 'success');
                        form.reset();
                    } else {
                        throw new Error(data.message || 'Send failed');
                    }

                } catch (err) {
                    showToast('Failed to send message', 'error');
                }

                btn.disabled = false;
                spinner.classList.add('d-none');
                btnText.textContent = 'Send Message';
            });
        });

        //  Small aesthetic toast
        function showToast(message, type) {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: type,
                title: message,
                showConfirmButton: false,
                timer: 9500,
                timerProgressBar: true,
                background: 'rgba(192, 192, 192, 0.95)',
                color: 'black',
                iconColor: type === 'success' ? '#22c55e' : '#ef4444',
                customClass: {
                    popup: 'glass-toast'
                }
            });
        }
    </script>
    <script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>