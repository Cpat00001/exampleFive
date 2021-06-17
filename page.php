<div class="wrapper">
    <div class="header">
        <?php get_header(); ?>
    </div>
    <div class="body">
        <div class="body_subgrid_first_row">
            <div class="page_body">
                    <div class="page_title_picture">
                    <div class="page_title_wrapper">
                        <h1><?php echo the_title(); ?></h1>
                    </div>
                    <?php 
                        if ( has_post_thumbnail() ) { 
                            the_post_thumbnail( 'post_image' ); 
                        }
                    
                    ?>
                    </div>
                    <!-- page individual blog post content -->
                    <div class="page_content">
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
        </div>
    </div>
    <div class="footer">
        <?php get_footer(); ?>
    </div>
</div>