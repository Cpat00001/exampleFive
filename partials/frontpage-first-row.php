<?php
    //show side bar from CMS
    // dynamic_sidebar('Front_page_sidebar');

    // show recent posts -> every category
    $args = array(
        'post_type'         => 'post',
        'posts_per_page'    => 4
    );
    // query DB
    $query = new WP_Query($args);
    ?>

    <div class="first_row_grid">
        
            <?php
            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();
                    ?>

                        <div class="first_row_grid_post">
                            <div class="first_row_grid_post_thumbnail">
                            <?php
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail('post_image');
                                    }
                                ?>
                                
                            </div>
                            <div class="first_row_grid_post_title">
                                <?php the_title(); ?>
                            </div>
                        </div>
                <?php
                }          
            }else{
                ?>
                <h5>Sorry no posts yet in this section,try later.</h5>
                <?php
            }
            ?>
        
    </div>
    <?php 
    // restore the $post global to the current post
    wp_reset_postdata(); 
    ?>