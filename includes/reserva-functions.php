<?php 



/*

 * Add my new menu to the Admin Control Panel

 */ 

function ttbooking_custom_post_type() {
    register_post_type('ttbooking',
        array(
            'labels'      => array(
                'name'               => _x('Propriedades', 'post type general name', 'booking'),

                'singular_name'      => _x('Propriedades', 'post type singular name', 'booking'),

                'menu_name'          => _x('Booking', 'admin menu', 'booking'),

                'name_admin_bar'     => _x('Roomlist', 'add new on admin bar', 'booking'), 

                'add_new'            => _x('Nova propriedade', 'add new on admin bar', 'booking'), 

            'add_new_item'       => __('Nova propriedade', 'booking'),

            'new_item'           => __('Nova propriedade', 'booking'),

                'edit_item'          => __('Editar roomlist', 'booking'),

                'view_item'          => __('', 'booking'),

                'all_items'          => __('Propriedades', 'booking'),

                'search_items'       => __('Buscar roomlist', 'booking'),

                'parent_item_colon'  => __('Propriedades:', 'booking'),

                'not_found'          => __('Nenhum roomlist encontrado.', 'booking'),

                'not_found_in_trash' => __('Nenhum roomlist encontrado.', 'booking')
            ),

            'description'        => __('Description.', 'booking'),

            'public'             => false,

            'publicly_queryable' => false,

            'show_ui'            => true,

            // 'show_in_menu'       => 'edit.php?post_type=trip', 

            'query_var'          => true,

            'rewrite'            => array('slug' => 'ttbooking'),

            'capability_type' => 'post',

            // 'capabilities' => array(

            //  'create_posts' => 'do_not_allow', // false < WP 4.5, credit @Ewout

            // ),

            'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts,



            'has_archive'        => false,

            'hierarchical'       => true,

            'menu_position'      => 55,

            'supports' => array('title','editor','excerpt','thumbnail')
        )
    ); 
}
add_action('init', 'ttbooking_custom_post_type'); 

function scripts_booking_js() {  
    wp_enqueue_style( 'style-bookinghotels', plugins_url( '/assets/css/style.css', __FILE__ )); 
    wp_enqueue_style( 'style-admin', plugins_url( '/assets/css/admin.css', __FILE__ )); 
    wp_enqueue_style( 'style-admin-menu', plugins_url( '/assets/css/admin-menu.css', __FILE__ )); 
    wp_enqueue_style( 'style-admin-skin', plugins_url( '/assets/css/admin-skin.css', __FILE__ )); 
    wp_enqueue_style( 'style-admin-support', plugins_url( '/assets/css/admin-support.css', __FILE__ )); 
    wp_enqueue_style( 'style-admin-toolbar', plugins_url( '/assets/css/admin-toolbar.css', __FILE__ )); 
    wp_enqueue_style( 'style-calendar', plugins_url( '/assets/css/calendar.css', __FILE__ )); 
    wp_enqueue_style( 'style-chosen', plugins_url( '/assets/css/chosen.css', __FILE__ )); 
    wp_enqueue_style( 'style-listing', plugins_url( '/assets/css/listing-table.css', __FILE__ ));
    wp_enqueue_style( 'style-modal', plugins_url( '/assets/css/modal.css', __FILE__ )); 
    wp_enqueue_style( 'style-print', plugins_url( '/assets/css/print.css', __FILE__ ));  
    wp_enqueue_style( 'style-settings', plugins_url( '/assets/css/settings-page.css', __FILE__ )); 
    wp_enqueue_style( 'style-skin', plugins_url( '/assets/css/skin.css', __FILE__ )); 
    wp_enqueue_style( 'style-table', plugins_url( '/assets/css/table.css', __FILE__ )); 
    wp_enqueue_style( 'style-timeline', plugins_url( '/assets/css/timeline.css', __FILE__ )); 
    wp_enqueue_style( 'style-timeline-skin', plugins_url( '/assets/css/timeline-skin.css', __FILE__ )); 
    wp_enqueue_style( 'style-traditional', plugins_url( '/assets/css/traditional.css', __FILE__ )); 
}

add_action('admin_init','scripts_booking_js');  

function ttbooking_create_tipo_propriedade_taxonomies(){ 
    $labels = array(

        'name'              => _x('Tipo de propriedade', 'taxonomy general name', 'booking'),

        'singular_name'     => _x('Tipo de propriedade', 'taxonomy singular name', 'booking'),

        'search_items'      => __('Buscar tipo de propriedade', 'booking'),

        'all_items'         => __('Todos os tipos de propriedades', 'booking'),

        'parent_item'       => __('Tipo de propriedade Pai', 'booking'),

        'parent_item_colon' => __('Tipo de propriedade Pai', 'booking'),

        'edit_item'         => __('Editar tipo de propriedade', 'booking'),

        'update_item'       => __('Editar tipo de propriedade', 'booking'),

        'add_new_item'      => __('Novo tipo de propriedade', 'booking'),

        'new_item_name'     => __('Nome novo tipo de propriedade', 'booking'),

        'menu_name'         => __('Tipo de propriedade', 'booking'),

    );



    $args = array(

        'hierarchical'      => true,

        'labels'            => $labels,

        'show_ui'           => true,

        'show_in_rest'       => false,

        'show_admin_column' => true,

        'rewrite'           => array('slug' => 'tipo_propriedades', 'hierarchical' => true),

    );



    register_taxonomy('tipo_propriedades', array('ttbooking'), $args);

}
add_action('init', 'ttbooking_create_tipo_propriedade_taxonomies');

function ttbooking_create_categoria_taxonomies(){ 
    $labels = array(

        'name'              => _x('Categoria de apartamento', 'taxonomy general name', 'booking'),

        'singular_name'     => _x('Categoria de apartamento', 'taxonomy singular name', 'booking'),

        'search_items'      => __('Buscar categoria', 'booking'),

        'all_items'         => __('Todas as categorias', 'booking'),

        'parent_item'       => __('Categoria Pai', 'booking'),

        'parent_item_colon' => __('Categoria Pai', 'booking'),

        'edit_item'         => __('Editar Categoria', 'booking'),

        'update_item'       => __('Editar Categoria', 'booking'),

        'add_new_item'      => __('Nova categoria', 'booking'),

        'new_item_name'     => __('Nome nova categoria', 'booking'),

        'menu_name'         => __('Categoria de apto.', 'booking'),

    );



    $args = array(

        'hierarchical'      => true,

        'labels'            => $labels,

        'show_ui'           => true,

        'show_in_rest'       => false,

        'show_admin_column' => true,

        'rewrite'           => array('slug' => 'categoria_apto', 'hierarchical' => true),

    );



    register_taxonomy('categoria_apto', array('ttbooking'), $args);

}
add_action('init', 'ttbooking_create_categoria_taxonomies');

function ttbooking_create_servicos_taxonomies(){ 
    $labels = array(

        'name'              => _x('Serviços inclusos', 'taxonomy general name', 'booking'),

        'singular_name'     => _x('Serviços inclusos', 'taxonomy singular name', 'booking'),

        'search_items'      => __('Buscar serviço', 'booking'),

        'all_items'         => __('Todos os serviços', 'booking'),

        'parent_item'       => __('Serviço Pai', 'booking'),

        'parent_item_colon' => __('Serviço Pai', 'booking'),

        'edit_item'         => __('Editar serviço', 'booking'),

        'update_item'       => __('Editar serviço', 'booking'),

        'add_new_item'      => __('Novo serviço', 'booking'),

        'new_item_name'     => __('Nome novo serviço', 'booking'),

        'menu_name'         => __('Serviços inclusos', 'booking'),

    );



    $args = array(

        'hierarchical'      => true,

        'labels'            => $labels,

        'show_ui'           => true,

        'show_in_rest'       => false,

        'show_admin_column' => true,

        'rewrite'           => array('slug' => 'servicos', 'hierarchical' => true),

    );



    register_taxonomy('servicos', array('ttbooking'), $args);

}
add_action('init', 'ttbooking_create_servicos_taxonomies');

function ttbooking_create_localizacao_taxonomies(){ 
    $labels = array(

        'name'              => _x('Localização', 'taxonomy general name', 'booking'),

        'singular_name'     => _x('Localização', 'taxonomy singular name', 'booking'),

        'search_items'      => __('Buscar Localização', 'booking'),

        'all_items'         => __('Todas as localizações', 'booking'),

        'parent_item'       => __('Localização Pai', 'booking'),

        'parent_item_colon' => __('Localização Pai', 'booking'),

        'edit_item'         => __('Editar localização', 'booking'),

        'update_item'       => __('Editar localização', 'booking'),

        'add_new_item'      => __('Nova localização', 'booking'),

        'new_item_name'     => __('Nome nova localização', 'booking'),

        'menu_name'         => __('Localização', 'booking'),

    );



    $args = array(

        'hierarchical'      => true,

        'labels'            => $labels,

        'show_ui'           => true,

        'show_in_rest'       => false,

        'show_admin_column' => true,

            'menu_position'      => 200,

        'rewrite'           => array('slug' => 'localizacao', 'hierarchical' => true),

    );



    register_taxonomy('localizacao', array('ttbooking'), $args);

}
add_action('init', 'ttbooking_create_localizacao_taxonomies', 10, 2);  


function ttbooking_create_termos_taxonomies(){ 
    $labels = array(

        'name'              => _x('Termos de reserva', 'taxonomy general name', 'booking'),

        'singular_name'     => _x('Termos de reserva', 'taxonomy singular name', 'booking'),

        'search_items'      => __('Buscar termos', 'booking'),

        'all_items'         => __('Todos os termos', 'booking'),

        'parent_item'       => __('Termo Pai', 'booking'),

        'parent_item_colon' => __('Termo Pai', 'booking'),

        'edit_item'         => __('Editar termo', 'booking'),

        'update_item'       => __('Editar termo', 'booking'),

        'add_new_item'      => __('Novo termo', 'booking'),

        'new_item_name'     => __('Nome novo termo', 'booking'),

        'menu_name'         => __('Termos de reserva', 'booking'),

    );



    $args = array(

        'hierarchical'      => true,

        'labels'            => $labels,

        'show_ui'           => true,

        'show_in_rest'       => false,

        'show_admin_column' => true,

            'menu_position'      => 200,

        'rewrite'           => array('slug' => 'termos', 'hierarchical' => true),

    );



    register_taxonomy('termos', array('ttbooking'), $args);

}
add_action('init', 'ttbooking_create_termos_taxonomies', 10, 2);   

add_action('admin_menu', 'add_page_termos');

function add_page_termos(){

     add_submenu_page(
                     'edit.php?post_type=ttbooking', //$parent_slug
                     'Roomlist',  //$page_title
                     'Roomlist',        //$menu_title
                     'manage_options',           //$capability
                     'post-new',//$menu_slug
                     'render_add_page_termos',//$function
                     0
     );

}

//add_submenu_page callback function

function render_add_page_termos() {

    require plugin_dir_path(dirname(__FILE__)) . 'includes/backend/submenu/themes.php';

}