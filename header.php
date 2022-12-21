<!DOCTYPE html>
<html lang="en" class="m-0 p-0">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>

<nav class="navbar navbar-light bg-light fixed-top" id="navbar">
    <a class="navbar-brand" href="/home"><?php dynamic_sidebar('header_logo'); ?></a>
</nav>

<body <?php body_class(); ?> id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">