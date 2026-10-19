<footer class="bg-secondary">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <a href="index.php">
                    <img src="assets/img/logo-light.png" alt="Muggun Technologies Logo" height="30">
                </a>
                <p class="text-secondary mt-3">We build digital solutions that help businesses grow through technology, innovation and thoughtful design.</p>
                <div class="social-links">
                    <a href="/"target="_blank" class="social-link facebook" aria-label="Facebook">
                        <img src="assets/img/social-icon/facebook.png" alt="Facebook" class="social-img">
                    </a>
                    <a href="/"target="_blank" class="social-link instagram" aria-label="Instagram">
                        <img src="assets/img/social-icon/instagram.png" alt="Instagram" class="social-img">
                    </a>
                    <a href="/"target="_blank" class="social-link linkedin" aria-label="LinkedIn">
                        <img src="assets/img/social-icon/linkedin.png" alt="LinkedIn" class="social-img">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="fw-bold mb-3 text-white">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="index.php" class="footer-link">Home</a>
                    </li>
                    <li class="mb-2">
                        <a href="about.php" class="footer-link">About Us</a>
                    </li>
                    <li class="mb-2">
                        <a href="services.php" class="footer-link">Services</a>
                    </li>
                    <li class="mb-2">
                        <a href="internship.php" class="footer-link">Internship & Live Projects</a>
                    </li>
                    <li class="mb-2">
                        <a href="contact-us.php" class="footer-link">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6" data-aos-delay="200">
                <h5 class="fw-bold mb-3 text-white">Our Services</h5>
                <ul class="list-unstyled text-secondary">
                    <li class="mb-2">Custom Software Development</li>
                    <li class="mb-2">ERP Software Development</li>
                    <li class="mb-2">Web Development</li>
                    <li class="mb-2">Mobile App Development</li>
                    <li class="mb-2">Branding & Digital Marketing</li>
                    <li class="mb-2">UI/UX Design</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6" data-aos-delay="300">
                <h5 class="fw-bold mb-3 text-white">Get in Touch</h5>
                <p class="text-secondary mb-2">Have a project in mind? Let's connect and discuss your ideas.</p>
                <a href="contact-us.php" class="btn btn-primary mt-2">Contact Us</a>
            </div>
        </div>
        <!-- Footer Bottom -->
        <hr class="border-secondary">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <p class="text-secondary mb-0 text-center">
                &copy; <?= date('Y') ?> Muggun Technologies.All rights reserved.
            </p>

        </div>
    </div>
</footer>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS Animation JavaScript -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 700,
        once: true,
        offset: 80
    });
</script>

<script src="assets/js/script.js"></script>

</body>
</html>
