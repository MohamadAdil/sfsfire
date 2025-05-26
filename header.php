<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Michealmicheal_s_deftsoft_deftsoft
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
	<title>SFS FIRE</title>
    <link rel="icon" href="">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'michealmicheal_s_deftsoft_deftsoft'); ?></a>

		<header class="header">
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="http://49.249.236.30:3131/michael/wp-content/themes/micheal-S/assets/images/header-logo.svg" alt="SFS FIRE">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="fa-solid fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample04">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_class'     => 'navbar-nav mx-auto',
                            'container'      => '',
                        ));
                        ?>
                        <div class="social-icon">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

		<?php
		wp_footer();
		?>
