<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">.
    <?php wp_head(); ?>
</head>

<body>

    <nav>
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/noun_banana_2570546.png"
            alt="banana by Tatyana from the Noun Project" />
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About me</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

    </nav>