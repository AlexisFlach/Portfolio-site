    <div class="post-show">

        <img class="post-archive-img" src="<?php the_post_thumbnail_url('thumbnail'); ?>">


        <h3 class="post-title"><?php the_title() ?></h3>


        <div class="meta"><span class="date"><?php the_date(); ?></span></div>
        <div class="intro">
            <?php
            the_excerpt();
            ?>
        </div>
        <a href="<?php the_permalink() ?>" class="button article-link">Read further</a>



        <hr>

    </div>