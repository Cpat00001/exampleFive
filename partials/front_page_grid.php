<!-- front page grid -->
<div class="body_frontpage_first_row">
    <h1><?php the_title(); ?></h1>
    <?php
        if(have_posts()){
            while(have_posts()){
                
                the_post();?>
                <p><?php the_content(); ?></p>
                
            <?php
            }
        }

   ?>
</div>
<div class="body_frontpage_second_row">
    <h1>Hello , Second row fron page</h1>
    <?php get_template_part('partials/sidebar-frontpage') ?>
</div>
<div class="body_frontpage_third_row">
    <h1>third row front page</h1>
</div>