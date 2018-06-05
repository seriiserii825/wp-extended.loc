<?php 

add_action( 'wp_enqueue_scripts', 'extended_load_scripts' );
add_action('after_setup_theme', 'extended_setup_theme');
add_action('admin_init', 'create_phone_field');
add_action('init', 'register_slider_type');

function register_slider_type(){
    register_post_type( 'slider', [
        'supports' => ['title', 'editor', 'thumbnail'],
        'public' => true,
        'labels' => [
            'name'               => __( 'Слайдер', 'Слайды' ),
            'singular_name'      => __( 'Слайдер', 'Слайдер' ),
            'add_new'            => 'Добавить новый',
            'add_new_item'       => 'Добавить новый',
            'new_item'           => 'Добавить новый слайд',
            'menu_name'          => 'Слайдер'
        ]

    ] );
}

function create_phone_field(){
    register_setting( 'general', 'phone' );

    add_settings_field( 'phone_id', 'Телефон', 'phone_cb', 'general' );
}

function phone_cb(){
    echo '<input name="phone" id="phone" class="regular-text" value="'.get_option('phone').'" />';
}

function extended_setup_theme(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}

function extended_load_scripts(){
    wp_enqueue_style( 'extended-style', get_stylesheet_uri());
    wp_enqueue_style('extended-flexslider', get_template_directory_uri().'/flexslider.css');
    wp_enqueue_style('extended-jquery-ui-1.9.2', get_template_directory_uri().'/css/jquery-ui-1.9.2.custom.css');

    wp_enqueue_script('extended-jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', [], null, true);
    wp_enqueue_script('extended-jquery.flexslider', get_template_directory_uri().'/js/jquery.flexslider.js', ['extended-jquery'], null, true);
    wp_enqueue_script('extended-custom', get_template_directory_uri().'/js/custom.js', ['extended-jquery'], null, true);
    wp_enqueue_script('extended-jquery.easing', get_template_directory_uri().'/js/jquery.easing.js', ['extended-jquery'], null, true);
    wp_enqueue_script('extended-jquery.mousewheel', get_template_directory_uri().'/js/jquery.mousewheel.js', ['extended-jquery'], null, true);
    wp_enqueue_script('extended-demo', get_template_directory_uri().'/js/demo.js', ['extended-jquery'], null, true);
    wp_enqueue_script('extended-jquery-ui-1.9.2.custom', get_template_directory_uri().'/js/jquery-ui-1.9.2.custom.js', ['extended-jquery'], null, true);
}

/**
 * Creates a sidebar
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */
$args = array(
    'name'          => 'Иконки в шапке',
    'id'            => 'header-icons',
    'description'   => 'Добавьте иконки в шапке через виджет html',
    'before_widget' => '',
    'after_widget'  => ''
);

register_sidebar( $args );

register_sidebar( [
    'name'          => 'Клиенты',
    'id'            => 'clients',
    'description'   => 'Добавьте картинки клиентов через виджет html',
    'before_widget' => '',
    'after_widget'  => ''
] );

register_nav_menus([
    'header-menu' => 'меню в шапке',
    'footer-menu' => 'меню в футере'
]);

function my_list_tags(){
    $tags = get_the_tags();
    $tag_str = null;

    if($tags){
        foreach ($tags as $tag) {
            $tag_str .= $tag->name . ', ';       
        }
    }

    $tag_str = rtrim($tag_str, ', ');

    echo $tag_str;
}

function get_tags_in_cat($cat_id){

    $category_posts = get_posts(['category' => $cat_id, 'numberposts' => -1]);
    $tags_obj = [];
    $tags_list = [];
    
    if(empty($category_posts)){
        return false;
    }

    foreach ($category_posts as $post) {
        $tags_obj[] = get_the_tags($post->ID);
    }

    if(empty($tags_obj)){
        return false;
    }

    foreach ($tags_obj as $value) {
        if($value[0]){
            $tags_list[$value[0]->term_id] = $value[0]->name;
        }
    }

    if(!empty($tags_list)){
        return $tags_list;
    }

    return false;
}

function my_pagenavi() {
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
        'format'  => '',
        'current' => max( 1, get_query_var('paged') ),
        'total'   => $wp_query->max_num_pages,
        'prev_next' => false,
        'prev_text' => '',
        'next_text' => '',
        'end_size' => 2,
        'mid_size' => 2
    );

    $result = paginate_links( $args );

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace( '/page/1/', '', $result );

    echo $result;
}

// Теперь, где нужно вывести пагинацию используем 
// my_pagenavi();



