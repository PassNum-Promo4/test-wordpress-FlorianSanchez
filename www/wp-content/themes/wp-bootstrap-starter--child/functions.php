<?php add_action( 'init', 'create_post_type' );
function create_post_type() {
 register_post_type( 'projet',
   array(
     'labels' => array(
       'name' => __( 'Projet' ),
       'singular_name' => __( 'Projet' )
     ),
     'public' => true,
     'has_archive' => true,
     'rewrite' => array( 'slug' => 'projet', 'with_front' => true ),
   )
 );
}
?>

<?php add_action( 'init', 'create_post_type1' );
function create_post_type1() {
 register_post_type( 'cv',
   array(
     'labels' => array(
       'name' => __( 'Cv' ),
       'singular_name' => __( 'Cv' )
     ),
     'public' => true,
     'has_archive' => true,
     'rewrite' => array( 'slug' => 'cv', 'with_front' => true ),
   )
 );
}
?>

<?php

/* Chargement de la feuille du style du theme parent */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-wp-bootstrap-starter-style', get_template_directory_uri() . '/style.css' );
}
