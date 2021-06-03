<div class="wrapper">
    <div class="header">
        <?php get_header(); ?>
    </div>
    <div class="body">
        <div class="body_subgrid_first_row">
            <h1><?php echo the_title(); ?></h1>
            <?php 
                if ( has_post_thumbnail() ) { 
                    the_post_thumbnail( 'post_image' ); 
                }
            
            ?>
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        ?>
                            <?php the_content(); ?>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="footer">
        <?php get_footer(); ?>
    </div>
</div>