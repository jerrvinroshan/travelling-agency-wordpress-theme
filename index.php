 <?php get_header() ?>

 <?php get_template_part("/parts/navbar", "navbar") ?>
 <!-- Content -->
 <section id="home">
     <div class="hero_container">
         <div class="hero_container_slider">
             <div class="hero_container_1 hero_container_image" data-slide="0">
                 <div class="hero_carousel_content_1">
                     <div class="hero_carousel__content_container">
                         <div class="hero_slide__content">
                             <div class="hero_carousel__content">
                                 <h1 class="heading--h1">Planning for Abroad Education or Job</h1>
                                 <p>Its simple as you think it would be</p>
                             </div>
                             <a href="https://wa.me/918438150717?text=Hi, Like to know more" target="_blank" class="hero__link">To know more detail</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="hero_container_2 hero_container_image">
                 <div class="hero_carousel_content_2">
                     <div class="hero_carousel__content_container">
                         <div class="hero_slide__content">
                             <div class="hero_carousel__content">
                                 <h1 class="heading--h1">Looking for Overseas Job</h1>
                                 <p>Here we’re to Help you get your Job in Abroad</p>
                             </div>
                             <a href="https://wa.me/918438150717?text=Hi, Like to know more" target="_blank" class="hero__link">To know more detail</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="hero_container_3 hero_container_image">
                 <div class="hero_carousel_content_3">
                     <div class="hero_carousel__content_container">
                         <div class="hero_slide__content">
                             <div class="hero_carousel__content">
                                 <h1 class="heading--h1">Dream of being in Abroad</h1>
                                 <p>Here we’re to Help you get your Job in Abroad</p>
                             </div>
                             <a href="https://wa.me/918438150717?text=Hi, Like to know more" target="_blank" class="hero__link">To know more detail</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="hero_container_4 hero_container_image">
                 <div class="hero_carousel_content_4">
                     <div class="hero_carousel__content_container">
                         <div class="hero_slide__content">
                             <div class="hero_carousel__content">
                                 <h1 class="heading--h1">Want to Do your Mastering in abroad</h1>
                                 <p>HHere we’re to Help you get your Job in Abroad</p>
                             </div>
                             <a href="https://wa.me/918438150717?text=Hi, Like to know more" target="_blank" class="hero__link">To know more detail</a>
                         </div>
                     </div>
                 </div>
             </div>

         </div>

     </div>
     <div class="indicator_container">
         <p class="indicator active" data-index="0"></p>
         <p class="indicator" data-index="1"></p>
         <p class="indicator" data-index="2"></p>
         <p class="indicator" data-index="3"></p>
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