<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ExampleFifth</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awsome -->
        <script src="https://kit.fontawesome.com/11d4f90b7c.js" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('wlasna_classa');?>>
       
    <div class="brand_name">DagaKa</div>
    <div class="sub_name">English Tutorials</div>
    <div class="menu_items">
        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    </div>
