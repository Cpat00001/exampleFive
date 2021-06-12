<div class="wrapper">
    <div class="header">
        <?php get_header(); ?>
    </div>
    <div class="body">
        <div class="body_subgrid_first_row">

        <?php
        // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        // loop categories
        $lup_query = array(
            'orderby' => 'name',
            'order' => 'ASC'
        );

        $lup_result = get_categories($lup_query);
        // var_dump($lup_result);

        foreach($lup_result as $result){
            // var_dump($result);
            ?>
            <h1><?php echo $result->cat_ID; ?></h1><br>
            <h1 style="color:red;"><?php echo $result->name; ?></h1><br>

            <!-- nazwa kategorii -->
            <?php
            $cat_id = $result->cat_ID;

            $lup_posty = array(
                'post_type' => 'post',
                'category' => $cat_id
            );
            $postlist = get_posts($lup_posty);
            // var_dump($postlist);

            foreach($postlist as $post){
                // var_dump($post);
                ?>
                <h5 style="color:green;"><?php echo $post->post_title; ?></h5>
                <p style="color:red;"><?php echo $post->post_date; ?></p><br>
                <p style="color:orange;"><?php echo $post->post_excerpt; ?></p>
            <?php             
            }
            ?>
        <?php    
        }

        // restore $global 
        wp_reset_postdata();
        ?>


        </div>
    </div>
    <div class="footer">
        <?php get_footer(); ?>
    </div>
</div>