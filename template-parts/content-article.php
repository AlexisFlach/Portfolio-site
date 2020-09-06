<div class="container">
    <div class="meta">
        <header>
            <h3 class="post-title"><?php the_title() ?></h3>
            <span class="date"><?php the_date(); ?></span>
            <?php
            the_tags('<span class="tags">', '</span><span class="tags">', '</span>');
            ?>
        </header>
    </div>

    <?php
    the_content();