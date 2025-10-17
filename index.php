 <?php get_header() ?>

 <?php get_template_part("/parts/navbar", "navbar") ?>
 <!-- Content -->
 <section id="home">
     <div class="hero_container">
         <div class="hero_container_slider">
             <div class="hero_container_1 hero_container_image">
                 <div class="hero_carousel_content_1">
                     <div class="hero_carousel__content_container">
                         <div class="hero_slide__content">
                             <div class="hero_carousel__content">
                                 <h1 class="heading--h1">Planning for Abroad Education or Job</h1>
                                 <p>It’s simpler than you think — take the first step toward your dream future today.</p>
                             </div>
                             <a href="https://wa.me/918438150717?text=Hi, Like to know more" target="_blank" class="hero__link">Know More</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="hero_container_2 hero_container_image">
                 <div class="hero_carousel_content_2">
                     <div class="hero_carousel__content_container">
                         <div class="hero_slide__content">
                             <div class="hero_carousel__content">
                                 <h1 class="heading--h1">Looking for an Overseas Job?</h1>
                                 <p>We’re here to help you secure the right job abroad with complete guidance.</p>
                             </div>
                             <a href="https://wa.me/918438150717?text=Hi, Like to know more" target="_blank" class="hero__link">Know More</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="hero_container_3 hero_container_image">
                 <div class="hero_carousel_content_3">
                     <div class="hero_carousel__content_container">
                         <div class="hero_slide__content">
                             <div class="hero_carousel__content">
                                 <h1 class="heading--h1">Dreaming of Life Abroad?</h1>
                                 <p>Your dream destination awaits — let us guide you through every step of your overseas journey.</p>
                             </div>
                             <a href="https://wa.me/918438150717?text=Hi, Like to know more" target="_blank" class="hero__link">Know More</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="hero_container_4 hero_container_image">
                 <div class="hero_carousel_content_4">
                     <div class="hero_carousel__content_container">
                         <div class="hero_slide__content">
                             <div class="hero_carousel__content">
                                 <h1 class="heading--h1">Planning to Pursue a Master’s Abroad?</h1>
                                 <p>We make your international education journey seamless and stress-free.</p>
                             </div>
                             <a href="https://wa.me/918438150717?text=Hi, Like to know more" target="_blank" class="hero__link">Know More</a>
                         </div>
                     </div>
                 </div>
             </div>

         </div>

     </div>
     <div class="indicator_container">
         <p class="indicator active"></p>
         <p class="indicator"></p>
         <p class="indicator"></p>
         <p class="indicator"></p>
     </div>
 </section>

 <!-- About us -->
 <section id="about-us" class="about-us__container">

     <!-- About us content -->
     <?php get_template_part("/parts/about-us/about-us", "about-us") ?>

     <!-- Why to Choose us -->
     <?php get_template_part("/parts/about-us/why-choose-us", "choose-us") ?>

     <!-- Who we are -->
     <?php get_template_part("/parts/about-us/who-we-are", "who-we-are") ?>

     <!-- Process -->
     <?php get_template_part("/parts/about-us/process", "process"); ?>

     <!-- Testimonials -->
     <?php get_template_part("/parts/about-us/testimonials", "testimonials") ?>

 </section>

 <!-- Services -->
 <section id="services">
     <?php get_template_part("/parts/services/services", "services") ?>
 </section>

 <!-- Current Job -->
 <section id="current-job">
     <?php get_template_part("/parts/current-job/current-job", "current-job"); ?>
 </section>

 <!-- Contact us -->
 <section id="contact-us">
     <?php get_template_part("/parts/contact-us/contact-us", "contact-us") ?>
 </section>

 <?php get_footer() ?>