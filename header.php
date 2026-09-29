<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inner">

        <div class="site-branding">

            <?php if (is_front_page()) : ?>
                <h1>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        Blog<span>Nova</span>
                    </a>
                </h1>
            <?php else : ?>
                <p style="margin:0;">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        Blog<span style="color:#3f7d5b;">Nova</span>
                    </a>
                </p>
            <?php endif; ?>

            <p class="site-description">
                Ideas &nbsp;•&nbsp; Learn &nbsp;•&nbsp; Grow
            </p>

        </div>

        <nav class="main-navigation" aria-label="Primary Menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => false,
            ));
            ?>
        </nav>

    </div>
</header>
