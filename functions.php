<?php

/*imagens dos posts*/
add_theme_support('post-thumbnails');

/*pegar o aquivo marca header*/
require get_template_directory() . '/inc/marca.php';

/*pegar o aquivo metabox*/
require get_template_directory() . '/inc/metabox.php';

// Registrar o Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');

/*registrar o menu principal dinamico*/
register_nav_menus( array(
    'primary' => __( 'Menu Principal', 'jldesignmoveis' ),
));

/*registrar o menu link úteis*/
register_nav_menus( array(
    'links' => __( 'Link Úteis', 'jldesignmoveis' ),
));

/*registrar o login atraves do wordpress*/
if(function_exists('register_sidebar')){
  register_sidebar( array(
    'name' => __( 'Minha Conta' ),
    'id' => 'sidebar-login',
    'description' => __( 'Formulario de login para acesso ao painel de controle' ),
	'before_title'  => '<h2>',
	'after_title'   => '</h2>',
    ));
  register_sidebar( array(
    'name' => __( 'Regras do Portal' ),
    'id' => 'sidebar-regras',
    'description' => __( 'Informações sobre regras do portal' ),
	'before_title'  => '<h2>',
	'after_title'   => '</h2>',
    ));
  register_sidebar( array(
    'name' => __( 'Sobre nós Rodape' ),
    'id' => 'sidebar-sobrenos',
    'description' => __( 'Um pouco sobre o blog.' ),
	'before_title'  => '<h2>',
	'after_title'   => '</h2>',
    ));
  register_sidebar( array(
    'name' => __( 'Instagram' ),
    'id' => 'sidebar-instagram',
    'description' => __( 'Link para o instagram.' ),
	'before_title'  => '<h2>',
	'after_title'   => '</h2>',
    ));
}

?>