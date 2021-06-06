<?php

// query to DB grab proper posts only ciekawostki

$args_ciekawostki = array(
    'post_type'         => 'post',
    'category_name' => 'ciekawostki',
    'posts_per_page'    => 2
    // 'post_type'         => 'post',
    // 'posts_per_page'    => 2
);

$query_ciekawostki = new WP_Query($args_ciekawostki);
//$query_ciekaw = new WP_Query( array( 'category_name' => 'ciekawostki' ) );
?>

<div class="second-row-grid">
<?php
if($query_ciekawostki->have_posts()){
    while($query_ciekawostki->have_posts()){
        $query_ciekawostki->the_post();
        ?>
        <div class="second-row-grid-post-image">
        <?php
        if(has_post_thumbnail()){
            the_post_thumbnail('bigger_post_image');
        }
        ?>
        </div>
        <div class="second-row-grid-post-title-button">
            <button style=" padding:20px;font-size:20px;background-color:white;
                            border:1px solid black;border-radius:1%;
                            text-transform:uppercase;">Read More</button>
            <h1><?php the_title() ?></h1>
        </div>
    <?php
    }
}else{
    echo "<h5>Sorry no posts here</h5>";
}
// clear WP_QUERY
wp_reset_query();
?>
</div>
