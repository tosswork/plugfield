<?php

// Registrar JS
function toss_js() {
  // Registrar scripts
  wp_register_script( 'toss_materialize', get_template_directory_uri() . '/js/materialize.js', array(), false, true );
  wp_register_script( 'toss_init', get_template_directory_uri() . '/js/init.js', array( 'toss_materialize' ), false, true );
  wp_enqueue_script( 'toss_init' );
}
add_action( 'wp_enqueue_scripts', 'toss_js' );

// Registrar CSS
function toss_css() {
	wp_register_style( 'toss_style', get_template_directory_uri() . '/style.css', array(), false, false );
	wp_enqueue_style( 'toss_style' );
}
add_action( 'wp_enqueue_scripts', 'toss_css' );


// Expert - Limitar palavras do ver mais
function wpse_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'wpse_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow" class="visualizar"> ...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


// ********* MENU *********
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('mobile-menu',__( 'Mobile Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

// ********* MENU - Descrição *********
function prefix_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );


// ********* BLOG *********
// Imagem Destacada
add_theme_support( 'post-thumbnails' );


// Siderbar
// Sidebars
if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
      'name' => __( 'PlugNews'),
      'id' => 'sidebar-plugnews',
      'description' => __( 'Sidedar dos Artigos.'),
      'before_title' => '<h2>',
      'after_title' => '</h2>',
    ) );
    register_sidebar(array(
      'name' => __( 'Revendas'),
      'id' => 'sidebar-revendas',
      'description' => __( 'Sidedar das Revendas.'),
      'before_title' => '<h2>',
      'after_title' => '</h2>',
    ) );
    register_sidebar(array(
      'name' => __( 'Assistencias'),
      'id' => 'sidebar-assistencias',
      'description' => __( 'Sidedar das Assistencias.'),
      'before_title' => '<h2>',
      'after_title' => '</h2>',
    ) );
}





// ********* IMAGENS *********
// Dimensões
function my_custom_sizes() {
	add_image_size('large', 2200, 900, true);
	add_image_size('medium', 1600, 900, true);
}
add_action('after_setup_theme', 'my_custom_sizes');


// LOGO ADMIN
function custom_login_logo() {
          echo '<style type="text/css">
            h1 a { background-image: url(' .get_bloginfo('template_directory').'/image/plugifield-wpadmin.png) !important;}
          </style>';
}
add_action('login_head', 'custom_login_logo');


// ********* BUSCAS *********
// Search Form - Add HTML5 theme support
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


// ********* PAGINAÇÃO *********
function wp_pagination($pages = '', $range = 3)
{
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('page','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'show_all' => false,
        'type' => 'plain'
    );
    if ( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
    if ( !empty($wp_query->query_vars['s']) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
    echo '<div class="wp_pagination">'.paginate_links( $pagination ).'</div>';
}

function my_post_count_queries( $query ) {
  if (!is_admin() && $query->is_main_query()){
    if(is_home()){
       $query->set('posts_per_page', 10);
    }
  }
}
add_action( 'pre_get_posts', 'my_post_count_queries' );


// ********* Mudar item BLOG para NOTÍCIAS *********
function change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Notícias';
    $submenu['edit.php'][5][0] = 'Notícias';
    $submenu['edit.php'][10][0] = 'Adicionar';
    $submenu['edit.php'][16][0] = 'Tags';
    echo '';
}
function change_post_object() {
    global $wp_post_types;
    $labels = $wp_post_types['post']->labels;
    $labels->name = 'Notícias';
    $labels->singular_name = 'Notícias';
    $labels->add_new = 'Adicionar';
    $labels->add_new_item = 'Adicionar';
    $labels->edit_item = 'Editar';
    $labels->new_item = 'Notícia';
    $labels->view_item = 'Visualizar';
    $labels->search_items = 'Buscar';
    $labels->not_found = 'Não encontrado';
    $labels->not_found_in_trash = 'Não encontrado no Lixo';
    $labels->all_items = 'Todos';
    $labels->menu_name = 'Notícias';
    $labels->name_admin_bar = 'Notícias';
}
add_action( 'admin_menu', 'change_post_label' );
add_action( 'init', 'change_post_object' );
// ********* Mudar item BLOG para NOTÍCIAS *********


// ********* SLIDER HOME *********
function custom_post_type_sliderhome() {
  $labels = array(
    'name'               => _x('Slider Home', 'sliderhome'),
    'singular_name'      => _x('Slider Home', 'sliderhome'),
    'add_new'            => _x('Adicionar novo', 'sliderhome'),
    'add_new_item'       => __('Adicionar'),
    'edit_item'          => __('Editar item'),
    'new_item'           => __('Novo item'),
    'view_item'          => __('Visualizar'),
    'search_items'       => __('Buscar itens'),
    'not_found'          =>  __('Não existem itens'),
    'not_found_in_trash' => __('Não existem itens na lixeira'),
    'parent_item_colon'  => ''
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'hierarchical'       => false,
    'menu_position'      => 20,
    'menu_icon'          => 'dashicons-format-gallery',
    'supports'           => array('title','editor', 'comments', 'post-templates','thumbnail')
  );
  register_post_type('sliderhome',$args);
}
add_action('init', 'custom_post_type_sliderhome');
// ********* SLIDER HOME *********


// ********* ATUAÇÂO *********
function custom_post_type_atuacao() {
  $labels = array(
    'name'               => _x('Atuação', 'atuacao'),
    'singular_name'      => _x('Atuação', 'atuacao'),
    'add_new'            => _x('Adicionar', 'atuacao'),
    'add_new_item'       => __('Adicionar'),
    'edit_item'          => __('Editar item'),
    'new_item'           => __('Novo item'),
    'view_item'          => __('Visualizar'),
    'search_items'       => __('Buscar itens'),
    'not_found'          =>  __('Não existem itens'),
    'not_found_in_trash' => __('Não existem itens na lixeira'),
    'parent_item_colon'  => ''
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'hierarchical'       => false,
    'menu_position'      => 20,
    'menu_icon'          => 'dashicons-networking',
    'supports'           => array('title','editor', 'comments', 'post-templates','thumbnail')
  );
  register_post_type('atuacao',$args);
}
add_action('init', 'custom_post_type_atuacao');
// ********* ATUAÇÂO FECHA *********


// ********* REVENDAS *********
function custom_post_type_revendas() {
  $labels = array(
    'name'               => _x('Revendas', 'revendas'),
    'singular_name'      => _x('Revendas', 'revendas'),
    'add_new'            => _x('Adicionar', 'revendas'),
    'add_new_item'       => __('Adicionar'),
    'edit_item'          => __('Editar item'),
    'new_item'           => __('Novo item'),
    'view_item'          => __('Visualizar'),
    'search_items'       => __('Buscar itens'),
    'not_found'          =>  __('Não existem itens'),
    'not_found_in_trash' => __('Não existem itens na lixeira'),
    'parent_item_colon'  => ''
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'hierarchical'       => false,
    'menu_position'      => 20,
    'menu_icon'          => 'dashicons-networking',
    'supports'           => array('title','editor', 'comments', 'post-templates','thumbnail')
  );
  register_post_type('revendas',$args);
}
add_action('init', 'custom_post_type_revendas');



// Área
add_action( 'init', 'create_revendas_taxonomies', 0 );
function create_revendas_taxonomies() {
  $labels = array(
    'name'              => _x( 'Área', 'area' ),
    'singular_name'     => _x( 'Área', 'area' ),
    'search_items'      => __( 'Buscar', 'textdomain' ),
    'all_items'         => __( 'Todos', 'textdomain' ),
    'parent_item'       => __( 'Parent', 'textdomain' ),
    'parent_item_colon' => __( 'Parent:', 'textdomain' ),
    'edit_item'         => __( 'Editar', 'textdomain' ),
    'update_item'       => __( 'Atualizar', 'textdomain' ),
    'add_new_item'      => __( 'Adicionar novo', 'textdomain' ),
    'new_item_name'     => __( 'Nova categorias', 'textdomain' ),
    'menu_name'         => __( 'Área', 'textdomain' ),
  );
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'public' => true,
    'has_archive' => 'revendas',
    'capability_type' => 'post'
  );
  register_taxonomy( 'area', array( 'revendas' ), $args );
}
function filter_post_type_linkkk($link, $post)
{
  if ($post->post_type != 'revendas')
  return $link;

  if ($cats = get_the_terms($post->ID, 'area'))
  $link = str_replace('%area%', array_pop($cats)->slug, $link);
  return $link;
}
add_filter('post_type_link', 'filter_post_type_link', 10, 2);
// Local Fecha

// ********* REVENDAS FECHA *********


// ********* ASSISTÊNCIA TÉCNICA *********
function custom_post_type_assistencia() {
  $labels = array(
    'name'               => _x('Assistência Técnica', 'assistencia'),
    'singular_name'      => _x('Assistência Técnica', 'assistencia'),
    'add_new'            => _x('Adicionar', 'assistencia'),
    'add_new_item'       => __('Adicionar'),
    'edit_item'          => __('Editar item'),
    'new_item'           => __('Novo item'),
    'view_item'          => __('Visualizar'),
    'search_items'       => __('Buscar itens'),
    'not_found'          =>  __('Não existem itens'),
    'not_found_in_trash' => __('Não existem itens na lixeira'),
    'parent_item_colon'  => ''
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'hierarchical'       => false,
    'menu_position'      => 20,
    'menu_icon'          => 'dashicons-networking',
    'supports'           => array('title','editor', 'comments', 'post-templates','thumbnail')
  );
  register_post_type('assistencia',$args);
}
add_action('init', 'custom_post_type_assistencia');

  // Local
  add_action( 'init', 'create_assistencia_taxonomies', 0 );
  function create_assistencia_taxonomies() {
    $labels = array(
      'name'              => _x( 'Local', 'local' ),
      'singular_name'     => _x( 'Local', 'local' ),
      'search_items'      => __( 'Buscar', 'textdomain' ),
      'all_items'         => __( 'Todos', 'textdomain' ),
      'parent_item'       => __( 'Parent', 'textdomain' ),
      'parent_item_colon' => __( 'Parent:', 'textdomain' ),
      'edit_item'         => __( 'Editar', 'textdomain' ),
      'update_item'       => __( 'Atualizar', 'textdomain' ),
      'add_new_item'      => __( 'Adicionar novo', 'textdomain' ),
      'new_item_name'     => __( 'Nova categorias', 'textdomain' ),
      'menu_name'         => __( 'Local', 'textdomain' ),
    );
    $args = array(
      'hierarchical'      => true,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'public' => true,
      'has_archive' => 'assistencia',
      'capability_type' => 'post'
    );
    register_taxonomy( 'local', array( 'assistencia' ), $args );
  }
  function filter_post_type_link($link, $post)
  {
    if ($post->post_type != 'assistencia')
    return $link;

    if ($cats = get_the_terms($post->ID, 'local'))
    $link = str_replace('%local%', array_pop($cats)->slug, $link);
    return $link;
  }
  add_filter('post_type_link', 'filter_post_type_link', 10, 2);
  // Local Fecha

// ********* ASSISTÊNCIA TÉCNICA FECHA *********


// ********* FAQ *********
function custom_post_type_faq() {
  $labels = array(
    'name'               => _x('FAQ', 'faq'),
    'singular_name'      => _x('FAQ', 'faq'),
    'add_new'            => _x('Adicionar', 'faq'),
    'add_new_item'       => __('Adicionar'),
    'edit_item'          => __('Editar item'),
    'new_item'           => __('Novo item'),
    'view_item'          => __('Visualizar'),
    'search_items'       => __('Buscar itens'),
    'not_found'          =>  __('Não existem itens'),
    'not_found_in_trash' => __('Não existem itens na lixeira'),
    'parent_item_colon'  => ''
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'hierarchical'       => false,
    'menu_position'      => 20,
    'menu_icon'          => 'dashicons-networking',
    'supports'           => array('title','editor', 'comments', 'post-templates','thumbnail')
  );
  register_post_type('faq',$args);
}
add_action('init', 'custom_post_type_faq');
// ********* FAQ FECHA *********



?>
