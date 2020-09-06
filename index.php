<?php get_header();
?>
<div class="container">
    <article class="archive">


        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();

                get_template_part('template-parts/content', 'archive');
            }
        }

        ?>
        <?php the_posts_pagination();
        ?>
    </article>

    <?php
    get_footer();
    ?>