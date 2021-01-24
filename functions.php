<?php

function restmdoneit_add_admin_menu() {
    add_menu_page(
        __( 'Demo Data', 'restaurant-theme' ),
        __( 'Restaurant Theme', 'restaurant-theme' ),
        'edit_themes',
        'restaurant_theme_demo_options_page',
        'restmdoneit_demo_options_page',
        'dashicons-desktop',
        '59'
    );
    add_submenu_page(
        'restaurant_theme_demo_options_page',
        __( 'Demo Data', 'restaurant-theme' ),
        __( 'Demo Data', 'restaurant-theme' ),
        'edit_themes',
        'restaurant_theme_demo_options_page',
        'restmdoneit_demo_options_page'
    );
    add_submenu_page(
        'restaurant_theme_demo_options_page',
        __( 'Settings', 'restaurant-theme' ),
        __( 'Settings', 'restaurant-theme' ),
        'edit_themes',
        'restaurant_theme_settings',
        'restmdoneit_settings_page'
    );
}

function restmdoneit_setup() {
    add_theme_support( 'title-tag' );
}

function restmdoneit_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'restmdoneit-style', get_stylesheet_uri() );
}

function restmdoneit_demo_options_page() {

    if ( isset( $_POST['restmdoneit_install_demo_data'] ) ) {

    }

    ?>
    <div class="wrap">
        <h1><?php _e( 'Install Demo Data', 'restaurant-theme' ); ?></h1>
    </div>
    <form action="" method="POST">
        <input class="button" type="submit" name="restmdoneit_install_demo_data" value="<?php _e( 'Install Demo Data', 'restaurant-theme' ); ?>" />
    </form>
<?php }

function restmdoneit_settings_page() {
    echo 'settings';
}

function register_my_widgets() {
    register_sidebar( array( 'name' => 'Text', 'id' => 'text-block' ) );
    register_sidebar( array( 'name' => 'Image', 'id' => 'image-block' ) );
    register_sidebar( array( 'name' => 'Contact', 'id' => 'contact' ) );
    register_sidebar( array( 'name' => 'Contact Form 7', 'id' => 'cf7' ) );
    register_sidebar( array( 'name' => 'Footer', 'id' => 'footer' ) );
}

add_action( 'widgets_init', 'register_my_widgets' );

add_action( 'admin_menu', 'restmdoneit_add_admin_menu' );
add_action( 'after_setup_theme', 'restmdoneit_setup' );
add_action( 'wp_enqueue_scripts', 'restmdoneit_scripts' );
