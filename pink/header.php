<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink</title>
    <?php wp_head(); ?>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>

<header class="pk-header">
    <div class="container-default d-flex align-items-center">
        <div class="pk-logo">
            <?php if (get_field('logo')): ?>
                <?php the_field('logo'); ?>
            <?php endif; ?>
        </div>
        <div class="pk-menu">
            <nav>
                <?php wp_nav_menu(array(
                    'menu_class' => 'menu-list',
                    'menu_id' => 'header_menu',
                    'container' => false,
                )); ?>
            </nav>
        </div>
        <div class="pk-burger-menu">
            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu">
                <?php wp_nav_menu(array(
                    'menu_class' => 'menu-list',
                    'menu_id' => 'header_menu',
                    'container' => false,
                )); ?>
            </div>
        </div>
    </div>
</header>









