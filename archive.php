<div class="container">
    <?php get_header();
    ?>

    <article class="archive">


        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();

                get_template_part('template-parts/content', 'archive');
            }
        }

        ?>
    </article>
</div>
<?php
get_footer();
?>