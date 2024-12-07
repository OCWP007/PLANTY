
<?php


add_action( 'wp_enqueue_scripts', 'load_additional_stylesheets' );
function load_additional_stylesheets() {
    // Charger le style du thème parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Charger le style du thème enfant
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );

    
}


// Ajouter un lien "Admin" dans le menu uniquement pour les utilisateurs connectés
//add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );

//function add_admin_link_to_menu( $items, $args ) {
    // Vérifier si l'utilisateur est connecté et si le menu est celui de la navigation principale
//    if ( is_user_logged_in() && $args->theme_location == 'menu_1' ) {
        // Ajouter le lien "Admin" au menu
 //       $admin_link = '<li><a href="' . admin_url() . '">Admin</a></li>';
 //       $items .= $admin_link;
 //   }
 //   return $items;
//}


function add_admin_link_to_menu( $items, $args ) {
    // Vérifier si l'utilisateur est connecté et si le menu est le menu principal
    if ( is_user_logged_in() && $args->theme_location === 'primary-menu' ) {
        // Ajouter le lien "Admin" au menu principal seulement
        $admin_link = '<li><a href="' . admin_url() . '">Admin</a></li>';
        $items .= $admin_link;
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );


// Ajout d'emplacements de menus personalisés
function register_additional_menus() {
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'hello-elementor-child2' ),
        'secondary-menu' => __( 'Secondary Menu', 'hello-elementor-child2' ),
    ));
}
add_action( 'after_setup_theme', 'register_additional_menus' );



function custom_container_shortcode($atts) {
    // Définition des attributs avec des valeurs par défaut
    $atts = shortcode_atts(
        array(
            'background' => '', // Nom du fichier de fond d'écran
            'text'       => '', // Texte à afficher
        ),
        $atts,
        'custom_container'
    );

    // Récupération des attributs
    $background = esc_attr($atts['background']);
    $text = esc_html($atts['text']);

    // Vérification si un fond d'écran est spécifié
    $background_style = $background ? "background-image: url('" . esc_url($background) . "');" : '';

    // Génération du HTML du container avec une classe pour style conditionnel
    $output = '
    <div class="custom-container" style="' . $background_style . '">
        <div class="custom-container-text" data-text-length="' . strlen($text) . '">' . strtoupper($text) . '</div>
    </div>';

    // Ajout du CSS inline
    $output .= '
    <style>
        .custom-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh; /* La hauteur peut être ajustée */
            background-size: cover;
            background-position: center;
        }
        .custom-container-text {
            color: white; /* Couleur du texte */
            text-transform: uppercase; /* Texte en majuscules */
            text-align: center;
            padding: 0 10px; /* Espacement interne */
            word-wrap: break-word;
        }
        /* Texte court (moins de 7 caractères) : taille ajustée à la largeur */
        .custom-container-text[data-text-length="1"],
        .custom-container-text[data-text-length="2"],
        .custom-container-text[data-text-length="3"],
        .custom-container-text[data-text-length="4"],
        .custom-container-text[data-text-length="5"],
        .custom-container-text[data-text-length="6"] {
            font-size: 12vw; /* Adaptation de la taille à la largeur */
            white-space: nowrap; /* Empêche le retour à la ligne */
        }
        /* Texte long (7 caractères ou plus) : ajuste la taille et permet le retour à la ligne */
        .custom-container-text[data-text-length="7"],
        .custom-container-text[data-text-length="8"],
        .custom-container-text[data-text-length="9"],
        .custom-container-text[data-text-length="10"],
        .custom-container-text[data-text-length="11"] {
            font-size: 6vw; /* Réduction pour tenir dans le conteneur */
        }
        .custom-container-text[data-text-length="12"] {
            font-size: 4vw; /* Ajustement pour encore plus de texte */
        }
    </style>';

    return $output;
}
add_shortcode('custom_container', 'custom_container_shortcode');







?>