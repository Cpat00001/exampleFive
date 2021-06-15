<div class="wrapper">
    <div class="header">
        <?php get_header(); ?>
    </div>
    <div class="body">
        <div class="body_subgrid_first_row">

        <?php

        echo "<h2>Moje artykuły,meteriały: Archiwum: </h2>";

        // query to DB
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $show_all_posts = new WP_Query(array(
            'post_type' => 'post', 
            'paged' => $paged,
            'posts_per_page' => 3   
        ));
        ?>
   
        <?php
        if($show_all_posts->have_posts()){
            while($show_all_posts->have_posts()){
                ?>
                <div class="blogpost_card">
                <?php 
                $show_all_posts->the_post();
                $post = get_post();
                // var_dump($post);
                ?>
                <div class="archive_thumbnail">
                    <?php 
                        if(has_post_thumbnail()){
                            the_post_thumbnail('archive_post_image');
                        }
                    ?>
                </div>
                <div class="blogpost_card_right">
                    <div class="blogpost_title_date">
                        <h5><?php the_title(); ?></h5>
                        <p><?php echo $post->post_date; ?></p>
                    </div>
                    <div class="blogpost_exerpt">
                        <p style="color:black;"><?php echo $post->post_excerpt; ?></p>
                        <div class="blogpost_wiecej">
                            <a href="<?php echo get_permalink(); ?>"><h3>wiecej...</h3></a>
                        </div>
                    </div>
                    
                </div>
                
            <!-- div closing BlogPost card -->
            </div>
            <?php
            }
            ?>
            <div class="pagination">
            <p>Jeszcze więcej interesujących informacji...</p>
            <?php 
            //pagination
               $big = 999999999; // need an unlikely integer
               echo paginate_links( array(
                   'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                   'format' => '?paged=%#%',
                   'current' => max( 1, get_query_var('paged') ),
                   'total' => $show_all_posts->max_num_pages
               ) );
               ?>
            <!-- end of pagination -->
            </div>
        <?php
        }
        ?>
    
        <?php 
        // restore $global 
        wp_reset_postdata();
    ?>
        </div>
    </div>
    <div class="footer">
        <?php get_footer(); ?>
    </div>
</div>

