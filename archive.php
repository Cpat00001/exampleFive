<div class="wrapper">
    <div class="header">
        <?php get_header(); ?>
    </div>
    <div class="body">
        <div class="body_subgrid_first_row">
            
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        ?>
                        <a href="<?php echo get_permalink();?>"><h1><?php echo the_title();?></h1></a>
                        <?php 
                            if ( has_post_thumbnail() ) { 
                                the_post_thumbnail( 'post_image' ); 
                            }
                            the_excerpt(); 
                    }
                }
            ?>
        </div>
    </div>
    <div class="footer">
        <?php get_footer(); ?>
    </div>
</div>