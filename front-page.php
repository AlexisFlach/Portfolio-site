<?php get_header() ?>

<section class="u-max-full-width showcase">
    <div class="container">
        <div class="row">
            <div class="one-half column">
                <div class="show-image">
                    <img class="showcase-image" src="<?php echo get_field('landing_image')['url'] ?>" />
                </div>
            </div>
            <div class="one-half column">
                <h1 class="showcase-heading">
                    <?php the_field('title') ?>
                </h1>
                <h4 class="section-description"><?php the_field('subtitle') ?></h4>
                <div class="buttons">
                    <a href="https://github.com/AlexisFlach" class="button">Github</a>
                    <a href="https://linkedin.com/in/Alexis-Flach" class="button">Linkedin</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-portfolio">

    <h3 class="section-heading">Portfolio</h3>
    <div class="portfolio-layout">
        <?php
        if (have_rows('portfolio_pieces')) :
            while (have_rows('portfolio_pieces')) : the_row();
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
    <div class="read-more">
        <a href="/portfolio">
            <h3 class="section-heading">Go to Portfolio</h3>


        </a>
    </div>
</section>

<section class="section-education">
    <div class="container">
        <h3 class="section-heading">Education</h3>

        <div class="row row-education">
            <div class="one-third column education-item">
                <a href="https://www.ln.edu.hk/" target="_blank">
                    <img class="edu"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/kisspng-lingnan-university-the-university-of-hong-kong-uni-education-postcard-5ad9d578405e41.6817369015242254002637.png"
                        alt="Lingnan university" />

                </a>

            </div>
            <div class="one-third column education-item">
                <a href="https://www.hv.se/" target="_blank">
                    <img class="edu"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/1.-svensk-logotyp-jpg.jpg"
                        alt="University west" />
                </a>
            </div>
            <div class="one-third column education-item">
                <a href="https://www.spiced-academy.com/en/">
                    <img class="edu" src="<?php echo get_template_directory_uri(); ?>/assets/img/Spiced_Logo.png"
                        alt="Spiced Academy" />
                </a>
            </div>
        </div>

</section>





<?php get_footer(); ?>