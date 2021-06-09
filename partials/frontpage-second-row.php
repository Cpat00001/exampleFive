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
            <div class="front-page-row-second-btn-title">
                <h1><?php the_title() ?></h1>
                <a href="<?php echo get_permalink(); ?>">
                    <button class="btn-front-page-second-row">Read More</button>
                </a>
            </div>
        </div>
        
    <?php
    }
}else{
    echo "<h5>Sorry no posts here</h5>";
}
// clear WP_QUERY
wp_reset_query();
?>
<div class="second-row-grid-righ-side">
    <div class="second-row-grid-right-side-header"><h2>Category Posts - Gramatyka</h2></div>
    <div class="second-row-grid-right-side-posts-body">
<?php

// query to DB grab proper posts only ciekawostki

$args_gramatyka = array(
    'post_type'         => 'post',
    'category_name' => 'gramatyka',
    'posts_per_page'    => 5
);

$query_gramatyka = new WP_Query($args_gramatyka);
?>

<div class="second-row-grid">
<?php
if($query_gramatyka->have_posts()){
    while($query_gramatyka->have_posts()){
        $query_gramatyka->the_post();
        ?>
        <div class="second-row-grid-post-image">
        <?php
        if(has_post_thumbnail()){
            the_post_thumbnail('bigger_post_image');
        }
        ?>
        </div>
        <div class="second-row-grid-post-title-button-gramatyka">
            <div class="front-page-row-second-btn-title">
            <a href="<?php echo get_permalink(); ?>" id="gramatyka_title_link"><h2><?php the_title() ?></h2></a>
            </div>
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
</div>
</div>
