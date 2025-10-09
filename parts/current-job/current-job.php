<div class="current-job__container">
    <h2 class="heading--h2">Current Job</h2>
    <div class="current-job__content_container">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <div class="current-job__content">
                    <h3><?php the_title() ?></h3>
                    <div>
                        <?php the_content() ?>
                        <a href="#" target="_blank" class="current-job__btn">Apply now</a>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</div>