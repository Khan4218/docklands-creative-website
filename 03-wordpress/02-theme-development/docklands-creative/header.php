<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main-content">
    <?php esc_html_e('Skip to content', 'docklands-creative'); ?>
</a>

<header class="site-header">
    <div class="container site-header__inner">

        <!-- Brand -->
        <a
            class="site-logo"
            href="<?php echo esc_url(home_url('/')); ?>"
            aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>"
        >
            <span class="site-logo__name">DOCKLANDS</span>
            <span class="site-logo__accent">CREATIVE</span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="site-navigation" aria-label="<?php esc_attr_e('Primary navigation', 'docklands-creative'); ?>">

            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'primary-menu',
                    'fallback_cb'    => false,
                )
            );
            ?>

        </nav>

        <!-- Header CTA -->
        <a class="header-cta" href="#contact">
            Book a Consultation
            <span aria-hidden="true">→</span>
        </a>

        <!-- Mobile Menu Button -->
        <button
            class="mobile-menu-toggle"
            type="button"
            aria-label="<?php esc_attr_e('Open menu', 'docklands-creative'); ?>"
            aria-expanded="false"
            aria-controls="primary-navigation"
        >
            <span></span>
            <span></span>
        </button>

    </div>
</header>

<main id="main-content">