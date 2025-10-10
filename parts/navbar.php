<nav class="navbar_container desktop">
    <!-- Banner -->
    <div class="nav_banner__bg-color">
        <div class="nav_banner__section">
            <a href="#home" class="navbar_link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Anent Consultant" /></a>
            <div class="nav_banner__contact_container">
                <a href="tel:+91 84381 50717" class="navbar_link nav_banner__contact_content">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/phone.svg" alt="phone" />
                    +91 84381 50717</a>
                <a href="tel:+91 73580 70717" class="navbar_link nav_banner__contact_content">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/phone.svg" alt="phone" />
                    +91 73580 70717</a>
            </div>
        </div>
    </div>
    <!-- Main Menu -->
    <div class="nav_main_menu_bg-color">

        <ul class="nav_main_menu__section">
            <li>
                <a href="#home" class="navbar_link--black">Home</a>
            </li>
            <li>
                <a href="#about-us" class="navbar_link--black">About us</a>
            </li>
            <li>
                <a href="#services" class="navbar_link--black">Services</a>
            </li>
            <li>
                <a href="#current-job" class="navbar_link--black">Current Job</a>
            </li>
            <li>
                <a href="#" class="navbar_link--black navbar_link--black--btn">Recruiter Zone</a>
            </li>
            <li>
                <a href="#contact-us" class="navbar_link--black">Contact us</a>
            </li>
            <!-- CTA button -->
            <li>
                <a href="#" class="navbar_link--black navbar_call-btn">Post Resume</a>
            </li>
        </ul>

    </div>
</nav>

<nav class="navbar_container mobile">
    <div class="navbar__container_menu">
        <a href="#home" class="navbar_link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Anent Consultant" />
        </a>
        <i class="fa-solid fa-bars"></i>
    </div><div class="navbar__content_container">
    <a href="#home">Home</a>
    <a href="#about-us">About us</a>
    <a href="#services">Services</a>
    <a href="#current-job">Current Job</a>
    <a href="#" class="navbar_link--black navbar_link--black--btn">Recruiter Zone</a>
    <a href="#contact-us">Contact us</a>
    <a href="#"  class="navbar_link--black navbar_call-btn">Post Resume</a>
</div>
</nav>
