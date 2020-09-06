 <!-- START dynamic menu and logo
           <?php
            if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom-logo');

                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>
            <img class="logo" src="<?php echo $logo[0] ?>" alt="logo">
            <?php


            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id=" " class="">%3$s</ul>'
                )

            );

            ?> End dynamic menu and logo -->