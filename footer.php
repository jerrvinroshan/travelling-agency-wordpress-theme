<footer class="footer_section">
    <div class="footer_container">
        <div class="footer_content_conatiner">
            <a href="#home" class="footer_link">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg " alt="Anent Consultant Logo" /></a>
            <div class="footer_menu_container">
                <h2 class="footer_heading">Quick link</h2>
                <div class="footer_menu_content_container">
                    <a href="#home" class="footer_link footer_menu--a">Home</a>
                    <a href="#about-us" class="footer_link footer_menu--a">About us</a>
                    <a href="#services" class="footer_link footer_menu--a">Services</a>
                    <a href="#contact-us" class="footer_link footer_menu--a">Contact us</a>
                </div>
            </div>
            <div class="footer_menu_container">
                <h2 class="footer_heading">Follow us on</h2>
                <div class="social-media__content_container">
                    <a href="https://facebook.com" target="_blank" class="footer_link">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/facebook-black.svg" alt="Facebook" />
                    </a>
                    <a href="https://instagram.com" target="_blank" class="footer_link">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/instagram-black.svg" alt="Instagram" />
                    </a>
                    <a href="https://twitter.com" target="_blank" class="footer_link">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/twitter-black.svg" alt="Twitter" />
                    </a>
                </div>
            </div>
        </div>
        <hr />
        <p class="footer_copyright--p"> © 2025 Anent Overseas Consultant Pvt. Ltd. — All Rights Reserved.</p>
    </div>
</footer>
<?php wp_footer() ?>
<!-- Pop up -->
<?php get_template_part("/parts/model-popup/pop-up", "pop-up") ?>

<!-- Recruiter Zone -->
<?php get_template_part("/parts/model-popup/recruiter-zone", "recruiter zone") ?>

<!-- Post Resume -->
<?php get_template_part("/parts/model-popup/post-resume","post resume")?>

<!-- Script -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/script.js"></script>
</body>

</html>