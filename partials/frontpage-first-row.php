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
                                <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                            </div>

                            <?php
                            // compare post_date with currnet_date 
                            // and if less than 7 days, then show NEW label on post
                            // get current date
                            $current_date = new DateTime('now');
                            // var_dump($current_date);

                            $post_date = new DateTime(get_the_date());
                            // $date_create = date_create($post_date);
                            // var_dump($post_date);
                            
                            $different_days = $post_date->diff($current_date);
                            $x = $different_days->format('%R%a');
                            $integer_different_days = intval($x);                            
                            // var_dump($integer_different_days);
                            $warunek_daty_10dni = 10;
                
                            // div to be displayed if condition met
                            $dynamic_label = "<div class='new_post_label' style='background-color:gold;color:white;width:50%;'>
                                                <h5 style='padding:5%'>Nowy Artykul</h5>
                                              </div>";

                            if($integer_different_days < $warunek_daty_10dni ){
                                echo $dynamic_label;
                            };
                            
                            ?>
                
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