<?php /* Template Name: Contact Template */
?>

<?php
get_header();
?>

<div class="container">
    <div class="article">
        <h3 class="section-heading"><?php the_title() ?></h3>

        <div class="contact">
            <img class="contact-image" src="/wp-content/themes/alextheme/assets/img/banana-monkey-inverted.png"
                alt="about">

            <div class="buttons">
                <a href="https://github.com/AlexisFlach" class="button">Github</a>
                <a href="https://linkedin.com/in/Alexis-Flach" class="button">Linkedin</a>
            </div>
        </div>

    </div>
</div>

<?php
get_footer();
?>