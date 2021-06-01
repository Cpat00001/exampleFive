<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ExampleFifth</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('wlasna_classa');?>>
       
    <div class="brand_name">Daga Ltd</div>
    <div class="sub_name">English Tutorials</div>
    <div class="menu_items">
        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    </div>
