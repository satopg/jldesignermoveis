<?php

function child_theme_scripts() {
  // O id abaixo deve mudar de acordo com o tema pai.
  wp_enqueue_style( 'jldesignmoveis' );
}
add_action( 'wp_enqueue_scripts', 'child_theme_scripts' );

function m1_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'm1_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
        'label'    => __( 'Marca do Site', 'm1' ),
        'section'  => 'title_tagline',
        'settings' => 'm1_logo',
    ) ) );
}
add_action( 'customize_register', 'm1_customize_register' );

?>s