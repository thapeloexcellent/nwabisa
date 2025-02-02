<!DOCTYPE html>
<html lang="en" class="m-0 p-0">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>

     <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
     <div class="container">
    
       
    
    <a class="navbar-brand" href="#">Nwabisa Plaatjie</a>
        <?php
          wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav ms-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav> 

<body <?php body_class(); ?> id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
