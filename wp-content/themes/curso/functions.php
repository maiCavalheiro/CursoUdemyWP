<?php
// carrega scripts e folhas de estilo
function load_scripts(){
  wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), '4.1.1', true);
  wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), '4.1.1', 'all');
  wp_enqueue_style('template',  get_template_directory_uri().'/css/template.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Função de configuração do tema
function wpcurso_config(){
// Registra menus
register_nav_menus(
  array(
    'my_main_menu' => 'Main menu',
    'my_footer_menu' => 'Menu footer'
  )
);
  $args = array(
    'height' => 225,
    'width' => 1920
   );

  add_theme_support('custom-header', $args);
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', array('video', 'image'));

}

add_action('after_setup_theme', 'wpcurso_config', 0);

add_action('widgets_init', 'wpcurso_sidebars');

function wpcurso_sidebars(){
  register_sidebar(
    array(
        'name' => 'Home page sidebar',
        'id' => 'sidebar-1',
        'description' => 'Sidebar to be used on the homepage',
        'before_widget' => '<div class ="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => "</h2>"
    )
  );

  register_sidebar(
    array(
        'name' => 'Blog page sidebar',
        'id' => 'sidebar-2',
        'description' => 'Sidebar to be used on the blog page',
        'before_widget' => '<div class ="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-blog">',
        'after_title' => "</h2>"
    )
  );

  register_sidebar(
    array(
        'name' => 'Service 1',
        'id' => 'service-1',
        'description' => 'First service area.',
        'before_widget' => '<div class ="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-blog">',
        'after_title' => "</h2>"
    )
  );

  register_sidebar(
    array(
        'name' => 'Service 2',
        'id' => 'service-2',
        'description' => 'Sidebar to be used on the blog page',
        'before_widget' => '<div class ="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-blog">',
        'after_title' => "</h2>"
    )
  );

  register_sidebar(
    array(
        'name' => 'Service 3',
        'id' => 'service-3',
        'description' => 'Sidebar to be used on the blog page',
        'before_widget' => '<div class ="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-blog">',
        'after_title' => "</h2>"
    )
  );
}
