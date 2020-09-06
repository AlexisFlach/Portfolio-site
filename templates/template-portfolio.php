<?php /* Template Name: Portfolio Template */
?>

<?php
get_header();
?>

<div class="container">

    <div class="article">
        <h3 class="section-heading"><?php the_title() ?></h3>
        <div class="portfolio-page-layout">
            <?php
            if (have_rows('portolio_page')) :
                while (have_rows('portolio_page')) : the_row();
            ?>

            <div class="portfolio-item">
                <div class="portfolio-header">

                    <div class="portfolio-header-content">
                        <h4><?php the_sub_field('portfolio_titel') ?></h4>
                        <p><?php the_sub_field('portfolio_tags') ?></p>

                        <div class="portfolio-avatar">

                            <img class="portfolio-image" src="<?php echo get_sub_field('portfolio_image')['url'] ?>"
                                alt="portfolio" />
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-description">
                    <p><?php the_sub_field('portfolio_description') ?></p>

                    <a href="<?php echo get_sub_field('portfolio_link_live')['url'] ?>" class="button">Live</a>
                    <a href="<?php echo get_sub_field('portfolio_link_github')['url'] ?>" class="button">Github</a>
                </div>

            </div>

            <?php
                endwhile;
            endif;

            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>