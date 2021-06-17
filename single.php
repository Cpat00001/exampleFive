<div class="wrapper">
    <div class="header">
        <?php get_header(); ?>
    </div>
    <div class="body">
        <div class="single_individual">
            <div class="single_top_container">
                <div class="single_top_image">
                        <?php 
                        if ( has_post_thumbnail() ) { 
                            // the_post_thumbnail( 'single_post_image',['class' => 'responsive_img'] ); 
                            the_post_thumbnail( 'bigger_post_image' ); 
                        }
                    
                    ?>
                </div>
                <div class="single_image_title">
                        <h1><?php echo the_title(); ?></h1>
                </div>
            </div>
            
            <div class="single_content">
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
    <div class="footer">
        <?php get_footer(); ?>
    </div>
</div>