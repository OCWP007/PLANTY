<?php
/**
 * Custom Header Template
 *
 * This template displays a logo on the left and two menus on the right in a flex container.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Enregistrer les polices personnalisées via wp_head.
add_action('wp_head', function() {
    echo '<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">';
});
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="custom-header">
    <div class="header-container">
        <!-- Logo à gauche -->
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php if ( has_custom_logo() ) {
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo_url = wp_get_attachment_image_url( $custom_logo_id, 'full' );
            echo '<img src="' . esc_url( $logo_url ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            } else {
            bloginfo( 'name' ); // Affiche le nom du site si le logo n'a pas ete défini
            } ?>
            </a>
        </div>


        <!-- Menus à droite -->
        <div class="menus">
    
            <nav class="menu primary-menu">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'menu_class'     => 'menu-items',
                    'fallback_cb'    => false,
                ));
                ?>
            </nav>
          
            <nav class="menu secondary-menu">
                <?php


                wp_nav_menu( array(
                    'theme_location' => 'secondary-menu',
                    'menu_class'     => 'menu-item-sec',
                    'fallback_cb'    => false,
                ));
                ?>
            </nav>
        </div>
    </div>
</header>



