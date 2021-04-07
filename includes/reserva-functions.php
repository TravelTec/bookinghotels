<?php 

session_start();

/*

 * Add my new menu to the Admin Control Panel

 */ 

function ttbooking_custom_post_type() {
    register_post_type('ttbooking',
        array(
            'labels'      => array(
                'name'               => _x('Propriedades', 'post type general name', 'booking'),

                'singular_name'      => _x('Propriedades', 'post type singular name', 'booking'),

                'menu_name'          => _x('Reserva de hospedagens', 'admin menu', 'booking'),

                'name_admin_bar'     => _x('Roomlist', 'add new on admin bar', 'booking'), 

                'add_new'            => _x('Nova propriedade', 'add new on admin bar', 'booking'), 

                'add_new_item'       => __('Nova propriedade', 'booking'),

                'new_item'           => __('Nova propriedade', 'booking'),

                'edit_item'          => __('Editar propriedade', 'booking'),

                'view_item'          => __('Ver item', 'booking'),

                'all_items'          => __('Propriedades', 'booking'),

                'search_items'       => __('Buscar propriedade', 'booking'),

                'parent_item_colon'  => __('Propriedades:', 'booking'),

                'not_found'          => __('Nenhuma propriedade encontrada.', 'booking'),

                'not_found_in_trash' => __('Nenhuma propriedade encontrada.', 'booking')
            ), 
            'description'        => __('Description.', 'booking'), 
            'public'             => true, 
            'publicly_queryable' => true, 
            'show_ui'            => true,  
            'query_var'          => 'ttbooking', 
            'rewrite'            => array('slug' => 'ttbooking'), 
            'capability_type' => 'post', 
            'map_meta_cap' => true, 
            'has_archive'        => false, 
            'hierarchical'       => true, 
            'menu_position'      => 55, 
            'can_export' => true,
            'supports' => array('title','editor','excerpt','thumbnail')
        )
    ); 
}
add_action('init', 'ttbooking_custom_post_type'); 

function scripts_booking_js() {  
 
    wp_enqueue_style( 'icon-products-wc', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css?ver=5.7');
    wp_enqueue_style( 'style-products-wc', plugins_url( '/assets/css/stylewoocommerce.css', __FILE__ )); 

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
    wp_enqueue_style( 'style-colorpicker', plugins_url( '/assets/css/colorpicker.css', __FILE__ )); 

    wp_enqueue_script( 'jquery-products', plugins_url( '/assets/js/jquery-3.1.1.min.js', __FILE__ )); 
    wp_enqueue_script( 'datetimepicker-products-wc', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js');
    wp_enqueue_script( 'moment-products-wc', plugins_url( '/assets/js/moment.js', __FILE__ ));
    wp_enqueue_script( 'mask-products-wc', plugins_url( '/assets/js/mask.js', __FILE__ ));
    wp_enqueue_script( 'scripts-products-wc', plugins_url( '/assets/js/scriptswoocommerce.js', __FILE__ ));
    wp_enqueue_script( 'scripts-colorpicker', plugins_url( '/assets/js/colorpicker.js', __FILE__ ));
}

add_action('admin_init','scripts_booking_js', 1);   

function ttbooking_recomm_css(){ 
        wp_enqueue_style('style-ttbooking', plugin_dir_url(__FILE__).'assets/css/style_site.css');  
    wp_enqueue_style( 'style-datepicker', 'https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css'); 
    wp_enqueue_style( 'style-fotorama', 'https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css'); 

        wp_enqueue_script('ttbooking-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
        wp_enqueue_script('ttbooking-sweetalert', 'https://unpkg.com/sweetalert/dist/sweetalert.min.js'); 
    wp_enqueue_script( 'scripts-moment', 'https://cdn.jsdelivr.net/momentjs/latest/moment.min.js');
    wp_enqueue_script( 'scripts-datepicker', 'https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js');
        wp_enqueue_script('lttbooking-scripts', plugin_dir_url(__FILE__).'assets/js/scripts_site_ttbooking.js'); 
    wp_enqueue_script( 'scripts-fotorama', 'https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js');

    wp_enqueue_script('woocommerce-ajax-add-to-cart', plugin_dir_url(__FILE__) . 'assets/js/ajax-add-to-cart.js', array('jquery'), '', true); 
    }
add_action('wp_head' , 'ttbooking_recomm_css' ); 

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

function ttbooking_create_regime_taxonomies(){ 
    $labels = array(

        'name'              => _x('Regimes', 'taxonomy general name', 'booking'),

        'singular_name'     => _x('Regimes', 'taxonomy singular name', 'booking'),

        'search_items'      => __('Buscar regime', 'booking'),

        'all_items'         => __('Todos os regimes', 'booking'),

        'parent_item'       => __('Regime Pai', 'booking'),

        'parent_item_colon' => __('Regime Pai', 'booking'),

        'edit_item'         => __('Editar Regime', 'booking'),

        'update_item'       => __('Editar Regime', 'booking'),

        'add_new_item'      => __('Novo regime', 'booking'),

        'new_item_name'     => __('Nome novo regime', 'booking'),

        'menu_name'         => __('Regimes ', 'booking'),

    );



    $args = array(

        'hierarchical'      => true,

        'labels'            => $labels,

        'show_ui'           => true,

        'show_in_rest'       => false,

        'show_admin_column' => true,

        'rewrite'           => array('slug' => 'regime', 'hierarchical' => true),

    );



    register_taxonomy('regime', array('ttbooking'), $args);

}
add_action('init', 'ttbooking_create_regime_taxonomies');

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

//init the meta box
add_action( 'after_setup_theme', 'custom_postimage_setup' );
function custom_postimage_setup(){
    add_action( 'add_meta_boxes', 'custom_postimage_meta_box' );
    add_action( 'save_post', 'custom_postimage_meta_box_save' );
}

function custom_postimage_meta_box(){

    //on which post types should the box appear?
    $post_types = array('ttbooking');
    foreach($post_types as $pt){
        add_meta_box('custom_postimage_meta_box',__( 'Galeria de imagens', 'yourdomain'),'custom_postimage_meta_box_func',$pt,'normal','high');
    }
}

function custom_postimage_meta_box_func($post){ ?>

    <a class="addimage button" onclick="custom_postimage_add_image();" style="margin-bottom: 7px"><?php _e('Adicionar imagens','yourdomain'); ?></a><br>

   <div class="custom_postimage_wrapper" id="custom_postimage_wrapper" style="margin-bottom:20px;">
        <?php  
            //an array with all the images (ba meta key). The same array has to be in custom_postimage_meta_box_save($post_id) as well.
    $meta_keys = array('featured_image0','featured_image1','featured_image2','featured_image3','featured_image4','featured_image5','featured_image6','featured_image7','featured_image8','featured_image9','featured_image10','featured_image11','featured_image12','featured_image13','featured_image14','featured_image15','featured_image16','featured_image17','featured_image18','featured_image19','featured_image20');

    foreach($meta_keys as $meta_key){
        $image_meta_val=get_post_meta( $post->ID, $meta_key, true); ?>
            <img src="<?=wp_get_attachment_image_src( $image_meta_val)[0]?>" style="width:200px;" alt=""> <input type="hidden" name="<?=$meta_key?>" id="<?=$meta_key?>" value="<?=$image_meta_val?>" />
    <?php } ?>
    </div> 

    <script>
    function custom_postimage_add_image(){

        var custom_uploader; 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
          custom_uploader.open();
          return;
        }
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
          title: 'Selecionar imagens',
          button: {
            text: 'Selecionar'
          },
          multiple: true
        });
        custom_uploader.on('select', function() {
          var selection = custom_uploader.state().get('selection');
          var contador = 0;
          var retorno = '';
          selection.map( function( attachment ) {
            attachment = attachment.toJSON();

            retorno += '<img src="'+attachment.url+'" style="width:200px;" alt=""> <input type="hidden" name="featured_image'+contador+'" id="featured_image'+contador+'" value="'+attachment.id+'" /> '; 

            contador++;
          });
          jQuery("#custom_postimage_wrapper").append(retorno);
        });
        custom_uploader.open(); 
    }

    function custom_postimage_remove_image(key){
        var $wrapper = jQuery('#'+key+'_wrapper');
        $wrapper.find('input#'+key).val('');
        $wrapper.find('img').hide();
        $wrapper.find('a.removeimage').hide();
        return false;
    }
    </script>
    <?php
    wp_nonce_field( 'custom_postimage_meta_box', 'custom_postimage_meta_box_nonce' );
}

function custom_postimage_meta_box_save($post_id){

    if ( ! current_user_can( 'edit_posts', $post_id ) ){ return 'not permitted'; } 

    //same array as in custom_postimage_meta_box_func($post)
    $meta_keys = array('featured_image0','featured_image1','featured_image2','featured_image3','featured_image4','featured_image5','featured_image6','featured_image7','featured_image8','featured_image9','featured_image10','featured_image11','featured_image12','featured_image13','featured_image14','featured_image15','featured_image16','featured_image17','featured_image18','featured_image19','featured_image20');
    foreach($meta_keys as $meta_key){
        if(isset($_POST[$meta_key]) && intval($_POST[$meta_key])!=''){
            update_post_meta( $post_id, $meta_key, intval($_POST[$meta_key]));
        }else{
            update_post_meta( $post_id, $meta_key, '');
        }
    }
    
}


/*

 * Add my new menu to the Admin Control Panel

 */
 

add_action( 'init', 'register_demo_product_type' );

function register_demo_product_type() {

  class WC_Product_Demo extends WC_Product {
            
    public function __construct( $product ) {
        $this->product_type = 'demo';
    parent::__construct( $product );
    }
  }
}
 
add_filter( 'product_type_selector', 'add_demo_product_type' );
 
function add_demo_product_type( $types ){
    $types[ 'demo' ] = __( 'Reserva de hospedagem', 'dm_product' );
 
    return $types;  
}

/* TAB ACOMODAÇÃO */

    add_filter( 'woocommerce_product_data_tabs', 'demo_product_tab' );

    function demo_product_tab( $tabs) {
            
        $tabs['demo'] = array(
          'label'    => __( 'Acomodação', 'dm_product' ),
          'target' => 'demo_product_options',
          'class'  => 'show_if_demo_product',
         );
        return $tabs;
    }

    add_action( 'woocommerce_product_data_panels', 'demo_product_tab_product_tab_content' );

    function demo_product_tab_product_tab_content() {

     ?><div id='demo_product_options' class='panel woocommerce_options_panel'><?php

     ?><div class='options_group'><?php
                    
        woocommerce_wp_text_input(
        array(
          'id' => 'demo_product_info',
          'label' => __( 'Acomodação', 'dm_product' ),
          'placeholder' => 'Nome da acomodação',
          'desc_tip' => 'true',
          'description' => __( 'Informe o nome da acomodação.', 'dm_product' ),
          'type' => 'text'
        )
        );
     ?></div>
     <div class='options_group'><?php
                    
        woocommerce_wp_text_input(
        array(
          'id' => 'pessoas_demo_product_info',
          'label' => __( 'Pessoas por acomodação', 'dm_product' ),
          'placeholder' => '1',
          'desc_tip' => 'true',
          'description' => __( 'Informe a quantidade de pessoas para a acomodação.', 'dm_product' ),
          'type' => 'text'
        )
        );
     ?></div>
     <div class='options_group'><?php
                    
        woocommerce_wp_text_input(
        array(
          'id' => 'apto_demo_product_info',
          'label' => __( 'Apartamentos disponíveis', 'dm_product' ),
          'placeholder' => '',
          'desc_tip' => 'true',
          'description' => __( 'Informe a quantidade de apartamentos disponíveis para essa acomodação.', 'dm_product' ),
          'type' => 'text'
        )
        );
     ?></div> 
     <div class='options_group'><?php
                    
        woocommerce_wp_text_input(
        array(
          'id' => 'bloq_demo_product_info',
          'label' => __( 'Limiar de bloqueio', 'dm_product' ),
          'placeholder' => '',
          'desc_tip' => 'true',
          'description' => '',
          'type' => 'text'
        )
        );
     ?></div>
     </div><?php
    }

    add_action( 'woocommerce_process_product_meta', 'save_demo_product_settings' );

/* FIM TAB ACOMODAÇÃO */

/* TAB ESTABELECIMENTO */

    add_filter( 'woocommerce_product_data_tabs', 'est_product_tab' );

    function est_product_tab( $tabs) {
            
        $tabs['est'] = array(
          'label'    => __( 'Estabelecimento', 'est_product' ),
          'target' => 'est_product_options',
          'class'  => 'show_if_demo_product',
          'priority' => 1,
         );
        return $tabs;
    }

    add_action( 'woocommerce_product_data_panels', 'est_product_tab_product_tab_content' );

    function est_product_tab_product_tab_content() {

     ?><div id='est_product_options' class='panel woocommerce_options_panel'><?php
                    
        $query = new WP_Query( array( 'post_type' => 'ttbooking' ) );
        $posts = $query->posts; 

            $options[''] = 'Selecione...';
            foreach($posts as $post) { 
                $options[$post->post_title] = $post->post_title; 

            }   
     ?> 
     <div class='options_group'><?php
                    
        woocommerce_wp_select( 
                array( 
                    'id'          => 'est_product_info', 
                    'label'       => __( 'Estabelecimento', 'est_product' ), 
                    'description' => '',
                    'value'       => '',
                    'options' => $options 
                    )
                ); 
     ?></div> 
     </div><?php
    }

/* FIM TAB ESTABELECIMENTO */

/* TAB TARIFÁRIO */

    add_filter( 'woocommerce_product_data_tabs', 'tar_product_tab' );

    function tar_product_tab( $tabs) {
            
        $tabs['tar'] = array(
          'label'    => __( 'Tarifário', 'tar_product' ),
          'target' => 'tar_product_options',
          'class'  => 'show_if_demo_product',
         );
        return $tabs;
    }

    add_action( 'woocommerce_product_data_panels', 'tar_product_tab_product_tab_content' );

    function tar_product_tab_product_tab_content() {

     ?><div id='tar_product_options' class='panel woocommerce_options_panel'><?php
        $idpost = $_GET['post'];  
        $my_meta1 = get_post_meta( $idpost, 'tar_periodo_product_info1', true ); 
        $my_meta2 = get_post_meta( $idpost, 'tar_periodo_product_info2', true ); 
        $my_meta3 = get_post_meta( $idpost, 'tar_periodo_product_info3', true ); 
        $my_meta4 = get_post_meta( $idpost, 'tar_periodo_product_info4', true ); 
        $my_meta5 = get_post_meta( $idpost, 'tar_periodo_product_info5', true ); 
        $my_meta6 = get_post_meta( $idpost, 'tar_periodo_product_info6', true );  

        $tar_idade_crianca_product_info = get_post_meta( $idpost, 'tar_idade_crianca_product_info', true ); 
        $tar_check_crianca_product_info = get_post_meta( $idpost, 'tar_check_crianca_product_info', true ); 
        $tar_limitar_diarias = get_post_meta( $idpost, 'tar_limitar_diarias', true );  
        $tar_qtd_limite = get_post_meta( $idpost, 'tar_qtd_limite', true );  

        $tar_idade_crianca_product_info1 = get_post_meta( $idpost, 'tar_idade_crianca_product_info1', true ); 
        $tar_check_crianca_product_info1 = get_post_meta( $idpost, 'tar_check_crianca_product_info1', true ); 
        $tar_limitar_diarias1 = get_post_meta( $idpost, 'tar_limitar_diarias1', true );  
        $tar_qtd_limite1 = get_post_meta( $idpost, 'tar_qtd_limite1', true );   

        $tar_idade_crianca_product_info2 = get_post_meta( $idpost, 'tar_idade_crianca_product_info2', true ); 
        $tar_check_crianca_product_info2 = get_post_meta( $idpost, 'tar_check_crianca_product_info2', true ); 
        $tar_limitar_diarias2 = get_post_meta( $idpost, 'tar_limitar_diarias2', true );  
        $tar_qtd_limite2 = get_post_meta( $idpost, 'tar_qtd_limite2', true );  

        $tar_idade_crianca_product_info3 = get_post_meta( $idpost, 'tar_idade_crianca_product_info3', true ); 
        $tar_check_crianca_product_info3 = get_post_meta( $idpost, 'tar_check_crianca_product_info3', true ); 
        $tar_limitar_diarias3 = get_post_meta( $idpost, 'tar_limitar_diarias3', true );  
        $tar_qtd_limite3 = get_post_meta( $idpost, 'tar_qtd_limite3', true );  

        $tar_idade_crianca_product_info4 = get_post_meta( $idpost, 'tar_idade_crianca_product_info4', true ); 
        $tar_check_crianca_product_info4 = get_post_meta( $idpost, 'tar_check_crianca_product_info4', true ); 
        $tar_limitar_diarias4 = get_post_meta( $idpost, 'tar_limitar_diarias4', true );  
        $tar_qtd_limite4 = get_post_meta( $idpost, 'tar_qtd_limite4', true );  

        $tar_idade_crianca_product_info5 = get_post_meta( $idpost, 'tar_idade_crianca_product_info5', true ); 
        $tar_check_crianca_product_info5 = get_post_meta( $idpost, 'tar_check_crianca_product_info5', true ); 
        $tar_limitar_diarias5 = get_post_meta( $idpost, 'tar_limitar_diarias5', true );  
        $tar_qtd_limite5 = get_post_meta( $idpost, 'tar_qtd_limite5', true );  

        $check_taxas = get_post_meta( $idpost, 'check_taxas', true ); 
        $valor_taxas = get_post_meta( $idpost, 'valor_taxas', true ); 

        $check_taxas1 = get_post_meta( $idpost, 'check_taxas1', true ); 
        $valor_taxas1 = get_post_meta( $idpost, 'valor_taxas1', true ); 

        $check_taxas2 = get_post_meta( $idpost, 'check_taxas2', true ); 
        $valor_taxas2 = get_post_meta( $idpost, 'valor_taxas2', true ); 

        $check_taxas3 = get_post_meta( $idpost, 'check_taxas3', true ); 
        $valor_taxas3 = get_post_meta( $idpost, 'valor_taxas3', true ); 

        $check_taxas4 = get_post_meta( $idpost, 'check_taxas4', true ); 
        $valor_taxas4 = get_post_meta( $idpost, 'valor_taxas4', true ); 

        $check_taxas5 = get_post_meta( $idpost, 'check_taxas5', true ); 
        $valor_taxas5 = get_post_meta( $idpost, 'valor_taxas5', true ); 

        $check_taxas6 = get_post_meta( $idpost, 'check_taxas6', true ); 
        $valor_taxas6 = get_post_meta( $idpost, 'valor_taxas6', true ); 

        $regime_product_info = get_post_meta( $idpost, 'regime_product_info', true ); 
     ?> <div id="table_append_repeater" class="dados_tarifario"> <div class="toolbar toolbar-top" style="text-align:right;padding: 9px;border-bottom: 2px solid #eee;"> <button type="button" class="button add_attribute" onclick="adicionar_tarifa()">Adicionar tarifa</button> </div> <?php
                    
        woocommerce_wp_text_input(
        array(
          'id' => 'periodo_product_info',
          'label' => __( 'Período', 'dm_product' ),
          'placeholder' => '',
          'desc_tip' => 'true',
          'description' => __( 'Informe o nome do período.', 'dm_product' ),
          'type' => 'text'
        )
        );
     ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_product_info',
          'label' => 'Data inicial',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_final_product_info',
          'label' => 'Data final',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?> 
<table style="border: 1px solid #b9b9b9;margin: 12px;border-spacing: 15px 10px;border-collapse: collapse;">
    <thead>
        <th style="width:16%;padding: 16px 10px;"></th>
        <th style="width:0%;text-align: left">Valor</th>  
        <th style="width: 26%;text-align: left;">Taxas</th> 
        <th style="width:96%"></th>  
    </thead>
    <tbody>
        <tr style="border: 1px solid #bdbdbd;">
            <td style="padding: 8px 12px;">Valor da diária </td>
            <td style="padding: 8px 12px;">
            <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_valor_final_product_info',
          'label' => '',
          'placeholder' => '0,00',
          'desc_tip' => 'false',
          'description' => '',
          'custom_attributes' => array( 'required' => 'required' ),
          'type' => 'text',
          'class' => 'valor'
        )
        );
    ?> 
</td>  

            <td style="">
                <p style="padding:0"><input type="checkbox" id="check_taxas" name="check_taxas" <?=($check_taxas == 'on' ? 'checked' : '')?> onclick="toggle_input_valor_taxa()"> Taxas inclusas <input type="text" style="width: 6.5%;margin: 0px 5px;position: absolute;<?=($check_taxas == 'on' ? 'display:none' : 'display:block')?>" class="" id="valor_taxas" name="valor_taxas" value="<?=$valor_taxas?>"></p>
            </td>
<td>   
    <?php
                    
        $cat_terms = get_terms(
                   array('regime'),
                   array(
                           'hide_empty'    => false,
                           'orderby'       => 'name',
                           'order'         => 'ASC',
                           'number'        => 6 //specify yours
                       )
               );
           $options[''] = 'Selecione um regime...'; 
   
   if( $cat_terms ){
   
       foreach( $cat_terms as $term ) { 
   
                $options[$term->name] = $term->name;  
}

}
     ?> 
    <p class=""><input type="checkbox" id="tar_check_crianca_product_info" name="tar_check_crianca_product_info" <?=($tar_check_crianca_product_info == 'on' ? 'checked' : '')?>> Criança até <input type="text" style="width: 3.5%;margin: 0px 5px;position: absolute;" class="" id="tar_idade_crianca_product_info" name="tar_idade_crianca_product_info" value="<?=$tar_idade_crianca_product_info?>"> <span style="position: absolute;margin-left: 58px;">anos pode se hospedar junto</span> 

    </p>
</td>
        </tr> 
    </tbody>
</table>
<p class="" style="position: relative;z-index: 999999;"><input type="checkbox"  id="tar_limitar_diarias" name="tar_limitar_diarias" <?=($tar_limitar_diarias == 'on' ? 'checked' : '')?>> Limitar a quantidade de dias em <input type="text" style="width: 4.5%;margin: 0px 5px;position: absolute;" class="" id="tar_qtd_limite" name="tar_qtd_limite" value="<?=$tar_qtd_limite?>"> <span style="position: absolute;margin-left: 58px;">diárias</span> 

        <?php
                    
        woocommerce_wp_select( 
                array( 
                    'id'          => 'regime_product_info', 
                    'label'       => '', 
                    'description' => '',
                    'value'       => $regime_product_info,
                    'options' => $options 
                    )
                ); 
     ?></p>
</div>
<div id="table_append_repeater_holder">
    
    <?php if (!empty($my_meta1)) { ?>
        <div id="table_append_repeater" class="dados_tarifario1">
        <p class="form-field  _field " style="border-top: 2px solid #ddd;padding-top: 19px !important;"> <a style="cursor:pointer" onclick="remove_div('1')"><i class="fa fa-trash-alt" style="float: right;font-size: 24px;color: #d00c0c;"></i></a></p> <?php
                    
        woocommerce_wp_text_input(
        array(
          'id' => 'periodo_product_info1',
          'label' => __( 'Período', 'dm_product' ),
          'placeholder' => '',
          'desc_tip' => 'true',
          'description' => __( 'Informe o nome do período.', 'dm_product' ),
          'type' => 'text'
        )
        );
     ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_product_info1',
          'label' => 'Data inicial',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_final_product_info1',
          'label' => 'Data final',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?> 
<table style="border: 1px solid #b9b9b9;margin: 12px;border-spacing: 15px 10px;border-collapse: collapse;">
    <thead>
        <tr><th style="width: 16%;padding: 16px 10px;"></th>
        <th style="width: 5%;text-align: left;">Valor</th> 
        <th style="width: 26%;text-align: left;">Taxas</th> 
        <th style="width:96%"></th>  
    </tr>
    </thead>
    <tbody>
        <tr style="border: 1px solid #bdbdbd;">
            <td style="padding: 8px 12px;">Valor da diária </td>
            <td style="padding: 8px 12px;">
            <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_valor_final_product_info1',
          'label' => '',
          'placeholder' => '0,00',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text',
          'class' => 'valor'
        )
        );
    ?> 
</td>  

            <td style="">
                <p style="padding:0"><input type="checkbox" id="check_taxas1" name="check_taxas1" <?=($check_taxas1 == 'on' ? 'checked' : '')?> onclick="toggle_input_valor_taxa1()"> Taxas inclusas <input type="text" style="width: 6.5%;margin: 0px 5px;position: absolute;<?=($check_taxas1 == 'on' ? 'display:none' : 'display:block')?>" class="" id="valor_taxas1" name="valor_taxas1" value="<?=$valor_taxas1?>"></p>
            </td>
<td>   
    <p class=""><input type="checkbox" id="tar_check_crianca_product_info1" name="tar_check_crianca_product_info1" <?=($tar_check_crianca_product_info1 == 'on' ? 'checked' : '')?>> Criança até <input type="text" style="width: 3.5%;margin: 0px 5px;position: absolute;" class="" id="tar_idade_crianca_product_info1" name="tar_idade_crianca_product_info1" value="<?=$tar_idade_crianca_product_info1?>"> <span style="position: absolute;margin-left: 58px;">anos pode se hospedar junto</span> </p>
</td>
        </tr> 
    </tbody>
</table>
<p class="" style="position: relative;z-index: 999999;"><input type="checkbox"  id="tar_limitar_diarias2" name="tar_limitar_diarias2" <?=($tar_limitar_diarias2 == 'on' ? 'checked' : '')?>> Limitar a quantidade de dias em <input type="text" style="width: 4.5%;margin: 0px 5px;position: absolute;" class="" id="tar_qtd_limite2" name="tar_qtd_limite2" value="<?=$tar_qtd_limite2?>"> <span style="position: absolute;margin-left: 58px;">diárias</span> 

<?php
                    
        woocommerce_wp_select( 
                array( 
                    'id'          => 'regime_product_info1', 
                    'label'       => '', 
                    'description' => '',
                    'value'       => $regime_product_info,
          'custom_attributes' => array( 'required' => 'required' ),
                    'options' => $options 
                    )
                ); 
     ?></p>
    <?php } ?>
    
    <?php if (!empty($my_meta2)) { ?>
        <div id="table_append_repeater" class="dados_tarifario2">
        <p class="form-field  _field " style="border-top: 2px solid #ddd;padding-top: 19px !important;"> <a style="cursor:pointer" onclick="remove_div('2')"><i class="fa fa-trash-alt" style="float: right;font-size: 24px;color: #d00c0c;"></i></a></p> <?php
                    
        woocommerce_wp_text_input(
        array(
          'id' => 'periodo_product_info2',
          'label' => __( 'Período', 'dm_product' ),
          'placeholder' => '',
          'desc_tip' => 'true',
          'description' => __( 'Informe o nome do período.', 'dm_product' ),
          'type' => 'text'
        )
        );
     ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_product_info2',
          'label' => 'Data inicial',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_final_product_info2',
          'label' => 'Data final',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?> 
<table style="border: 1px solid #b9b9b9;margin: 12px;border-spacing: 15px 10px;border-collapse: collapse;">
    <thead>
        <tr><th style="width: 16%;padding: 16px 10px;"></th>
        <th style="width: 5%;text-align: left;">Valor</th> 
        <th style="width: 26%;text-align: left;">Taxas</th> 
        <th style="width:96%"></th>  
    </tr>
    </thead>
    <tbody>
        <tr style="border: 1px solid #bdbdbd;">
            <td style="padding: 8px 12px;">Valor da diária </td>
            <td style="padding: 8px 12px;">
            <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_valor_final_product_info2',
          'label' => '',
          'placeholder' => '0,00',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text',
          'class' => 'valor'
        )
        );
    ?> 
</td> 

            <td style="">
                <p style="padding:0"><input type="checkbox" id="check_taxas2" name="check_taxas2" <?=($check_taxas2 == 'on' ? 'checked' : '')?> onclick="toggle_input_valor_taxa2()"> Taxas inclusas <input type="text" style="width: 6.5%;margin: 0px 5px;position: absolute;<?=($check_taxas2 == 'on' ? 'display:none' : 'display:block')?>" class="" id="valor_taxas2" name="valor_taxas2" value="<?=$valor_taxas2?>"></p>
            </td> 
<td>   
    <p class=""><input type="checkbox" id="tar_check_crianca_product_info2" name="tar_check_crianca_product_info2" <?=($tar_check_crianca_product_info2 == 'on' ? 'checked' : '')?>> Criança até <input type="text" style="width: 3.5%;margin: 0px 5px;position: absolute;" class="" id="tar_idade_crianca_product_info2" name="tar_idade_crianca_product_info2" value="<?=$tar_idade_crianca_product_info2?>"> <span style="position: absolute;margin-left: 58px;">anos pode se hospedar junto</span> </p>
</td>
        </tr> 
    </tbody>
</table>
<p class="" style="position: relative;z-index: 999999;"><input type="checkbox"  id="tar_limitar_diarias2" name="tar_limitar_diarias2" <?=($tar_limitar_diarias2 == 'on' ? 'checked' : '')?>> Limitar a quantidade de dias em <input type="text" style="width: 4.5%;margin: 0px 5px;position: absolute;" class="" id="tar_qtd_limite2" name="tar_qtd_limite2" value="<?=$tar_qtd_limite2?>"> <span style="position: absolute;margin-left: 58px;">diárias</span> 

<?php
                    
        woocommerce_wp_select( 
                array( 
                    'id'          => 'regime_product_info2', 
                    'label'       => '', 
                    'description' => '',
                    'value'       => $regime_product_info,
          'custom_attributes' => array( 'required' => 'required' ),
                    'options' => $options 
                    )
                ); 
     ?></p>
    <?php } ?>
    
    <?php if (!empty($my_meta3)) { ?>
        <div id="table_append_repeater" class="dados_tarifario3">
        <p class="form-field  _field " style="border-top: 2px solid #ddd;padding-top: 19px !important;"> <a style="cursor:pointer" onclick="remove_div('3')"><i class="fa fa-trash-alt" style="float: right;font-size: 24px;color: #d00c0c;"></i></a></p> <?php
                    
        woocommerce_wp_text_input(
        array(
          'id' => 'periodo_product_info3',
          'label' => __( 'Período', 'dm_product' ),
          'placeholder' => '',
          'desc_tip' => 'true',
          'description' => __( 'Informe o nome do período.', 'dm_product' ),
          'type' => 'text'
        )
        );
     ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_product_info3',
          'label' => 'Data inicial',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_final_product_info3',
          'label' => 'Data final',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?> 
<table style="border: 1px solid #b9b9b9;margin: 12px;border-spacing: 15px 10px;border-collapse: collapse;">
    <thead>
        <tr><th style="width: 16%;padding: 16px 10px;"></th>
        <th style="width: 5%;text-align: left;">Valor</th> 
        <th style="width: 26%;text-align: left;">Taxas</th> 
        <th style="width:96%"></th>  
    </tr>
    </thead>
    <tbody>
        <tr style="border: 1px solid #bdbdbd;">
            <td style="padding: 8px 12px;">Valor da diária </td>
            <td style="padding: 8px 12px;">
            <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_valor_final_product_info3',
          'label' => '',
          'placeholder' => '0,00',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text',
          'class' => 'valor'
        )
        );
    ?> 
</td> 

            <td style="">
                <p style="padding:0"><input type="checkbox" id="check_taxas3" name="check_taxas3" <?=($check_taxas3 == 'on' ? 'checked' : '')?> onclick="toggle_input_valor_taxa3()"> Taxas inclusas <input type="text" style="width: 6.5%;margin: 0px 5px;position: absolute;<?=($check_taxas3 == 'on' ? 'display:none' : 'display:block')?>" class="" id="valor_taxas3" name="valor_taxas3" value="<?=$valor_taxas3?>"></p>
            </td>  
<td>   
    <p class=""><input type="checkbox" id="tar_check_crianca_product_info3" name="tar_check_crianca_product_info3" <?=($tar_check_crianca_product_info3 == 'on' ? 'checked' : '')?>> Criança até <input type="text" style="width: 3.5%;margin: 0px 5px;position: absolute;" class="" id="tar_idade_crianca_product_info3" name="tar_idade_crianca_product_info3" value="<?=$tar_idade_crianca_product_info3?>"> <span style="position: absolute;margin-left: 58px;">anos pode se hospedar junto</span> </p>
</td>
        </tr> 
    </tbody>
</table>
<p class="" style="position: relative;z-index: 999999;"><input type="checkbox"  id="tar_limitar_diarias3" name="tar_limitar_diarias3" <?=($tar_limitar_diarias3 == 'on' ? 'checked' : '')?>> Limitar a quantidade de dias em <input type="text" style="width: 4.5%;margin: 0px 5px;position: absolute;" class="" id="tar_qtd_limite3" name="tar_qtd_limite3" value="<?=$tar_qtd_limite3?>"> <span style="position: absolute;margin-left: 58px;">diárias</span> 

<?php
                    
        woocommerce_wp_select( 
                array( 
                    'id'          => 'regime_product_info3', 
                    'label'       => '', 
                    'description' => '',
                    'value'       => $regime_product_info,
          'custom_attributes' => array( 'required' => 'required' ),
                    'options' => $options 
                    )
                ); 
     ?></p>
    <?php } ?>
    
    <?php if (!empty($my_meta4)) { ?>
        <div id="table_append_repeater" class="dados_tarifario4">
        <p class="form-field  _field " style="border-top: 2px solid #ddd;padding-top: 19px !important;"> <a style="cursor:pointer" onclick="remove_div('4')"><i class="fa fa-trash-alt" style="float: right;font-size: 24px;color: #d00c0c;"></i></a></p> <?php
                    
        woocommerce_wp_text_input(
        array(
          'id' => 'periodo_product_info4',
          'label' => __( 'Período', 'dm_product' ),
          'placeholder' => '',
          'desc_tip' => 'true',
          'description' => __( 'Informe o nome do período.', 'dm_product' ),
          'type' => 'text'
        )
        );
     ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_product_info4',
          'label' => 'Data inicial',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_final_product_info4',
          'label' => 'Data final',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?> 
<table style="border: 1px solid #b9b9b9;margin: 12px;border-spacing: 15px 10px;border-collapse: collapse;">
    <thead>
        <tr><th style="width: 16%;padding: 16px 10px;"></th>
        <th style="width: 5%;text-align: left;">Valor</th> 
        <th style="width: 26%;text-align: left;">Taxas</th> 
        <th style="width:96%"></th>  
    </tr>
    </thead>
    <tbody>
        <tr style="border: 1px solid #bdbdbd;">
            <td style="padding: 8px 12px;">Valor da diária </td>
            <td style="padding: 8px 12px;">
            <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_valor_final_product_info4',
          'label' => '',
          'placeholder' => '0,00',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text',
          'class' => 'valor'
        )
        );
    ?> 
</td>  

            <td style="">
                <p style="padding:0"><input type="checkbox" id="check_taxas4" name="check_taxas2" <?=($check_taxas4 == 'on' ? 'checked' : '')?> onclick="toggle_input_valor_taxa4()"> Taxas inclusas <input type="text" style="width: 6.5%;margin: 0px 5px;position: absolute;<?=($check_taxas4 == 'on' ? 'display:none' : 'display:block')?>" class="" id="valor_taxas4" name="valor_taxas4" value="<?=$valor_taxas4?>"></p>
            </td> 
<td>   
    <p class=""><input type="checkbox" id="tar_check_crianca_product_info4" name="tar_check_crianca_product_info4" <?=($tar_check_crianca_product_info4 == 'on' ? 'checked' : '')?>> Criança até <input type="text" style="width: 3.5%;margin: 0px 5px;position: absolute;" class="" id="tar_idade_crianca_product_info4" name="tar_idade_crianca_product_info4" value="<?=$tar_idade_crianca_product_info4?>"> <span style="position: absolute;margin-left: 58px;">anos pode se hospedar junto</span> </p>
</td>
        </tr> 
    </tbody>
</table>
<p class="" style="position: relative;z-index: 999999;"><input type="checkbox"  id="tar_limitar_diarias4" name="tar_limitar_diarias4" <?=($tar_limitar_diarias4 == 'on' ? 'checked' : '')?>> Limitar a quantidade de dias em <input type="text" style="width: 4.5%;margin: 0px 5px;position: absolute;" class="" id="tar_qtd_limite4" name="tar_qtd_limite4" value="<?=$tar_qtd_limite4?>"> <span style="position: absolute;margin-left: 58px;">diárias</span> 

<?php
                    
        woocommerce_wp_select( 
                array( 
                    'id'          => 'regime_product_info4', 
                    'label'       => '', 
                    'description' => '',
                    'value'       => $regime_product_info,
          'custom_attributes' => array( 'required' => 'required' ),
                    'options' => $options 
                    )
                ); 
     ?></p>
    <?php } ?>
    
    <?php if (!empty($my_meta5)) { ?>
        <div id="table_append_repeater" class="dados_tarifario5">
        <p class="form-field  _field " style="border-top: 2px solid #ddd;padding-top: 19px !important;"> <a style="cursor:pointer" onclick="remove_div('5')"><i class="fa fa-trash-alt" style="float: right;font-size: 24px;color: #d00c0c;"></i></a></p> <?php
                    
        woocommerce_wp_text_input(
        array(
          'id' => 'periodo_product_info5',
          'label' => __( 'Período', 'dm_product' ),
          'placeholder' => '',
          'desc_tip' => 'true',
          'description' => __( 'Informe o nome do período.', 'dm_product' ),
          'type' => 'text'
        )
        );
     ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_product_info5',
          'label' => 'Data inicial',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_final_product_info5',
          'label' => 'Data final',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?> 
<table style="border: 1px solid #b9b9b9;margin: 12px;border-spacing: 15px 10px;border-collapse: collapse;">
    <thead>
        <tr><th style="width: 16%;padding: 16px 10px;"></th>
        <th style="width: 5%;text-align: left;">Valor</th> 
        <th style="width: 26%;text-align: left;">Taxas</th> 
        <th style="width:96%"></th>  
    </tr>
    </thead>
    <tbody>
        <tr style="border: 1px solid #bdbdbd;">
            <td style="padding: 8px 12px;">Valor da diária </td>
            <td style="padding: 8px 12px;">
            <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_valor_final_product_info5',
          'label' => '',
          'placeholder' => '0,00',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text',
          'class' => 'valor'
        )
        );
    ?> 
</td> 

            <td style="">
                <p style="padding:0"><input type="checkbox" id="check_taxas5" name="check_taxas5" <?=($check_taxas5 == 'on' ? 'checked' : '')?> onclick="toggle_input_valor_taxa5()"> Taxas inclusas <input type="text" style="width: 6.5%;margin: 0px 5px;position: absolute;<?=($check_taxas5 == 'on' ? 'display:none' : 'display:block')?>" class="" id="valor_taxas5" name="valor_taxas5" value="<?=$valor_taxas5?>"></p>
            </td>  

<td>   
    <p class=""><input type="checkbox" id="tar_check_crianca_product_info5" name="tar_check_crianca_product_info5" <?=($tar_check_crianca_product_info5 == 'on' ? 'checked' : '')?>> Criança até <input type="text" style="width: 3.5%;margin: 0px 5px;position: absolute;" class="" id="tar_idade_crianca_product_info5" name="tar_idade_crianca_product_info5" value="<?=$tar_idade_crianca_product_info5?>"> <span style="position: absolute;margin-left: 58px;">anos pode se hospedar junto</span> </p>
</td>
        </tr> 
    </tbody>
</table>
<p class=""><input type="checkbox"  id="tar_limitar_diarias5" name="tar_limitar_diarias5" <?=($tar_limitar_diarias5 == 'on' ? 'checked' : '')?>> Limitar a quantidade de dias em <input type="text" style="width: 3.5%;margin: 0px 5px;position: absolute;" class="" id="tar_qtd_limite5" name="tar_qtd_limite5" value="<?=$tar_qtd_limite5?>"> <span style="position: absolute;margin-left: 58px;">diárias</span> 

<?php
                    
        woocommerce_wp_select( 
                array( 
                    'id'          => 'regime_product_info5', 
                    'label'       => '', 
                    'description' => '',
                    'value'       => $regime_product_info,
          'custom_attributes' => array( 'required' => 'required' ),
                    'options' => $options 
                    )
                ); 
     ?></p>
    <?php } ?>

</div>

<input type="hidden" id="contador_div" name="">
<script type="text/html" id="tmpl-wc-add-tarifa-row" >
    <div id="table_append_repeater" class="dados_tarifario{{(data.key)}}"> 
        <p class="form-field  _field " style="border-top: 2px solid #ddd;padding-top: 19px !important;"> <a style="cursor:pointer" onclick="remove_div('{{(data.key)}}')"><i class="fa fa-trash-alt" style="float: right;font-size: 24px;color: #d00c0c;"></i></a></p> <?php
                    
        woocommerce_wp_text_input(
        array(
          'id' => 'periodo_product_info{{(data.key)}}',
          'label' => __( 'Período', 'dm_product' ),
          'placeholder' => '',
          'desc_tip' => 'true',
          'description' => __( 'Informe o nome do período.', 'dm_product' ),
          'type' => 'text'
        )
        );
     ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_product_info{{(data.key)}}',
          'label' => 'Data inicial',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?>
    <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_periodo_final_product_info{{(data.key)}}',
          'label' => 'Data final',
          'placeholder' => 'dd/mm/yyyy',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text'
        )
        );
    ?> 
<table style="border: 1px solid #b9b9b9;margin: 12px;border-spacing: 15px 10px;border-collapse: collapse;">
    <thead>
        <tr><th style="width: 16%;padding: 16px 10px;"></th>
        <th style="width: 5%;text-align: left;">Valor</th> 
        <th style="width: 26%;text-align: left;">Taxas</th> 
        <th style="width:96%"></th>  
    </tr>
    </thead>
    <tbody>
        <tr style="border: 1px solid #bdbdbd;">
            <td style="padding: 8px 12px;">Valor da diária </td>
            <td style="padding: 8px 12px;">
            <?php 
        woocommerce_wp_text_input(
        array(
          'id' => 'tar_valor_final_product_info{{(data.key)}}',
          'label' => '',
          'placeholder' => '0,00',
          'desc_tip' => 'false',
          'custom_attributes' => array( 'required' => 'required' ),
          'description' => '',
          'type' => 'text',
          'class' => 'valor'
        )
        );
    ?> 
</td>  

<td style="">
                <p style="padding:0"><input type="checkbox" id="check_taxas2" name="check_taxas{{(data.key)}}" checked onclick="toggle_input_valor_taxa{{(data.key)}}()"> Taxas inclusas <input type="text" style="width: 6.5%;margin: 0px 5px;position: absolute;display: none" class="" id="valor_taxas{{(data.key)}}" name="valor_taxas{{(data.key)}}" value=""></p>
            </td> 

<td>   
    <p class=""><input type="checkbox" id="tar_check_crianca_product_info{{(data.key)}}" name="tar_check_crianca_product_info{{(data.key)}}"> Criança até <input type="text" style="width: 3.5%;margin: 0px 5px;position: absolute;" class="" id="tar_idade_crianca_product_info{{(data.key)}}" name="tar_idade_crianca_product_info{{(data.key)}}" > <span style="position: absolute;margin-left: 58px;">anos pode se hospedar junto</span> </p>
</td>
        </tr> 
    </tbody>
</table>
<p class="" style="position: relative;z-index: 999999;"><input type="checkbox"  id="tar_limitar_diarias{{(data.key)}}" name="tar_limitar_diarias{{(data.key)}}"> Limitar a quantidade de dias em <input type="text" style="width: 4.5%;margin: 0px 5px;position: absolute;" class="" id="tar_qtd_limite{{(data.key)}}" name="tar_qtd_limite{{(data.key)}}"> <span style="position: absolute;margin-left: 58px;">diárias</span> 

<?php
                    
        woocommerce_wp_select( 
                array( 
                    'id'          => 'regime_product_info{{(data.key)}}', 
                    'label'       => '', 
                    'description' => '', 
          'custom_attributes' => array( 'required' => 'required' ),
                    'options' => $options 
                    )
                ); 
     ?></p>
</script>

     </div><?php
    }

/* FIM TAB TARIFÁRIO */ 

add_action( 'woocommerce_process_product_meta', 'save_demo_product_settings' );
    
function save_demo_product_settings( $post_id ){
        
    $demo_product_info = $_POST['demo_product_info'];
        
    if( !empty( $demo_product_info ) ) {

        update_post_meta( $post_id, 'demo_product_info', esc_attr( $demo_product_info ) );
    }
        
    $pessoas_demo_product_info = $_POST['pessoas_demo_product_info'];
        
    if( !empty( $pessoas_demo_product_info ) ) {

        update_post_meta( $post_id, 'pessoas_demo_product_info', esc_attr( $pessoas_demo_product_info ) );
    }
        
    $apto_demo_product_info = $_POST['apto_demo_product_info'];
        
    if( !empty( $apto_demo_product_info ) ) {

        update_post_meta( $post_id, 'apto_demo_product_info', esc_attr( $apto_demo_product_info ) );
    }
        
    $pre_demo_product_info = $_POST['pre_demo_product_info'];
        
    if( !empty( $pre_demo_product_info ) ) {

        update_post_meta( $post_id, 'pre_demo_product_info', esc_attr( $pre_demo_product_info ) );
    }
        
    $bloq_demo_product_info = $_POST['bloq_demo_product_info'];
        
    if( !empty( $bloq_demo_product_info ) ) {

        update_post_meta( $post_id, 'bloq_demo_product_info', esc_attr( $bloq_demo_product_info ) );
    }
}

/* ************************* */

add_action( 'woocommerce_process_product_meta', 'save_est_product_settings' );
    
function save_est_product_settings( $post_id ){
        
    $est_product_info = $_POST['est_product_info'];
        
    if( !empty( $est_product_info ) ) {

    update_post_meta( $post_id, 'est_product_info', esc_attr( $est_product_info ) );
    }
}

/* ************************* */

add_action( 'woocommerce_process_product_meta', 'save_tar_product_settings' );
    
function save_tar_product_settings( $post_id ){
        
    $periodo_product_info = $_POST['periodo_product_info'];
        
    if( !empty( $periodo_product_info ) ) {

    update_post_meta( $post_id, 'periodo_product_info', esc_attr( $periodo_product_info ) );
    }
        
    $tar_periodo_product_info = $_POST['tar_periodo_product_info'];
        
    if( !empty( $tar_periodo_product_info ) ) {

    update_post_meta( $post_id, 'tar_periodo_product_info', esc_attr( $tar_periodo_product_info ) );
    }
        
    $tar_periodo_final_product_info = $_POST['tar_periodo_final_product_info'];
        
    if( !empty( $tar_periodo_final_product_info ) ) {

    update_post_meta( $post_id, 'tar_periodo_final_product_info', esc_attr( $tar_periodo_final_product_info ) );
    }
        
    $tar_valor_final_product_info = $_POST['tar_valor_final_product_info'];
        
    if( !empty( $tar_valor_final_product_info ) ) {

    update_post_meta( $post_id, 'tar_valor_final_product_info', esc_attr( $tar_valor_final_product_info ) );
    }

    $valor = explode(",", $tar_valor_final_product_info);
    $value = intval(str_replace(".", "", $valor[0]));
 
    update_post_meta($post_id, '_price', $value); 
        
    $tar_check_crianca_product_info = $_POST['tar_check_crianca_product_info'];
        
    if( !empty( $tar_check_crianca_product_info ) ) {

    update_post_meta( $post_id, 'tar_check_crianca_product_info', esc_attr( $tar_check_crianca_product_info ) );
    }
        
    $tar_idade_crianca_product_info = $_POST['tar_idade_crianca_product_info']; 

    update_post_meta( $post_id, 'tar_idade_crianca_product_info', esc_attr( $tar_idade_crianca_product_info ) );
        
    $tar_limitar_diarias = $_POST['tar_limitar_diarias']; 

    update_post_meta( $post_id, 'tar_limitar_diarias', esc_attr( $tar_limitar_diarias ) );
        
    $tar_qtd_limite = $_POST['tar_qtd_limite']; 

    update_post_meta( $post_id, 'tar_qtd_limite', esc_attr( $tar_qtd_limite ) ); 
        
    $check_taxas = $_POST['check_taxas']; 

    update_post_meta( $post_id, 'check_taxas', esc_attr( $check_taxas ) );
        
    $valor_taxas = $_POST['valor_taxas']; 

    update_post_meta( $post_id, 'valor_taxas', esc_attr( $valor_taxas ) ); 
        
    $regime_product_info = $_POST['regime_product_info']; 

    update_post_meta( $post_id, 'regime_product_info', esc_attr( $regime_product_info ) ); 

    /* ********** */  
        
    $periodo_product_info2 = $_POST['periodo_product_info2'];
        
    if( !empty( $periodo_product_info2 ) ) {

    update_post_meta( $post_id, 'periodo_product_info2', esc_attr( $periodo_product_info2 ) );
    }
        
    $tar_periodo_product_info2 = $_POST['tar_periodo_product_info2'];
        
    if( !empty( $tar_periodo_product_info2 ) ) {

    update_post_meta( $post_id, 'tar_periodo_product_info2', esc_attr( $tar_periodo_product_info2 ) );
    }
        
    $tar_periodo_final_product_info2 = $_POST['tar_periodo_final_product_info2'];
        
    if( !empty( $tar_periodo_final_product_info2 ) ) {

    update_post_meta( $post_id, 'tar_periodo_final_product_info2', esc_attr( $tar_periodo_final_product_info2 ) );
    }
        
    $tar_valor_final_product_info2 = $_POST['tar_valor_final_product_info2'];
        
    if( !empty( $tar_valor_final_product_info2 ) ) {

    update_post_meta( $post_id, 'tar_valor_final_product_info2', esc_attr( $tar_valor_final_product_info2 ) );
    }
        
    $tar_check_crianca_product_info2 = $_POST['tar_check_crianca_product_info2'];
        
    if( !empty( $tar_check_crianca_product_info2 ) ) {

    update_post_meta( $post_id, 'tar_check_crianca_product_info2', esc_attr( $tar_check_crianca_product_info2 ) );
    }
        
    $tar_idade_crianca_product_info2 = $_POST['tar_idade_crianca_product_info2']; 

    update_post_meta( $post_id, 'tar_idade_crianca_product_info2', esc_attr( $tar_idade_crianca_product_info ) );
        
    $tar_limitar_diarias2 = $_POST['tar_limitar_diarias2']; 

    update_post_meta( $post_id, 'tar_limitar_diarias2', esc_attr( $tar_limitar_diarias2 ) );
        
    $tar_qtd_limite2 = $_POST['tar_qtd_limite2']; 

    update_post_meta( $post_id, 'tar_qtd_limite2', esc_attr( $tar_qtd_limite2 ) ); 
        
    $check_taxas2 = $_POST['check_taxas2']; 

    update_post_meta( $post_id, 'check_taxas2', esc_attr( $check_taxas2 ) );
        
    $valor_taxas2 = $_POST['valor_taxas2']; 

    update_post_meta( $post_id, 'valor_taxas2', esc_attr( $valor_taxas2 ) ); 
        
    $regime_product_info2 = $_POST['regime_product_info2']; 

    update_post_meta( $post_id, 'regime_product_info2', esc_attr( $regime_product_info2 ) ); 

    /* ********** */ 
        
    $periodo_product_info3 = $_POST['periodo_product_info3'];
        
    if( !empty( $periodo_product_info3 ) ) {

    update_post_meta( $post_id, 'periodo_product_info3', esc_attr( $periodo_product_info3 ) );
    }
        
    $tar_periodo_product_info3 = $_POST['tar_periodo_product_info3'];
        
    if( !empty( $tar_periodo_product_info3 ) ) {

    update_post_meta( $post_id, 'tar_periodo_product_info3', esc_attr( $tar_periodo_product_info3 ) );
    }
        
    $tar_periodo_final_product_info3 = $_POST['tar_periodo_final_product_info3'];
        
    if( !empty( $tar_periodo_final_product_info3 ) ) {

    update_post_meta( $post_id, 'tar_periodo_final_product_info3', esc_attr( $tar_periodo_final_product_info3 ) );
    }
        
    $tar_valor_final_product_info3 = $_POST['tar_valor_final_product_info3'];
        
    if( !empty( $tar_valor_final_product_info3 ) ) {

    update_post_meta( $post_id, 'tar_valor_final_product_info3', esc_attr( $tar_valor_final_product_info3 ) );
    }
        
    $tar_check_crianca_product_info3 = $_POST['tar_check_crianca_product_info3'];
        
    if( !empty( $tar_check_crianca_product_info3 ) ) {

    update_post_meta( $post_id, 'tar_check_crianca_product_info3', esc_attr( $tar_check_crianca_product_info3 ) );
    }
        
    $tar_idade_crianca_product_info3 = $_POST['tar_idade_crianca_product_info3']; 

    update_post_meta( $post_id, 'tar_idade_crianca_product_info3', esc_attr( $tar_idade_crianca_product_info3 ) );
        
    $tar_limitar_diarias3 = $_POST['tar_limitar_diarias3']; 

    update_post_meta( $post_id, 'tar_limitar_diarias3', esc_attr( $tar_limitar_diarias3 ) );
        
    $tar_qtd_limite3 = $_POST['tar_qtd_limite3']; 

    update_post_meta( $post_id, 'tar_qtd_limite3', esc_attr( $tar_qtd_limite3 ) ); 
        
    $check_taxas3 = $_POST['check_taxas3']; 

    update_post_meta( $post_id, 'check_taxas3', esc_attr( $check_taxas3 ) );
        
    $valor_taxa3 = $_POST['valor_taxa3']; 

    update_post_meta( $post_id, 'valor_taxa3', esc_attr( $valor_taxa3 ) ); 
        
    $regime_product_info3 = $_POST['regime_product_info3']; 

    update_post_meta( $post_id, 'regime_product_info3', esc_attr( $regime_product_info3 ) ); 

    /* ********** */ 
        
    $tar_periodo_product_info4 = $_POST['tar_periodo_product_info4'];
        
    if( !empty( $tar_periodo_product_info4 ) ) {

    update_post_meta( $post_id, 'tar_periodo_product_info4', esc_attr( $tar_periodo_product_info4 ) );
    }
        
    $tar_periodo_final_product_info4 = $_POST['tar_periodo_final_product_info4'];
        
    if( !empty( $tar_periodo_final_product_info4 ) ) {

    update_post_meta( $post_id, 'tar_periodo_final_product_info4', esc_attr( $tar_periodo_final_product_info4 ) );
    }
        
    $tar_valor_final_product_info4 = $_POST['tar_valor_final_product_info4'];
        
    if( !empty( $tar_valor_final_product_info4 ) ) {

    update_post_meta( $post_id, 'tar_valor_final_product_info4', esc_attr( $tar_valor_final_product_info4 ) );
    }
        
    $tar_check_crianca_product_info4 = $_POST['tar_check_crianca_product_info4'];
        
    if( !empty( $tar_check_crianca_product_info4 ) ) {

    update_post_meta( $post_id, 'tar_check_crianca_product_info4', esc_attr( $tar_check_crianca_product_info4 ) );
    }
        
    $tar_idade_crianca_product_info4 = $_POST['tar_idade_crianca_product_info4']; 

    update_post_meta( $post_id, 'tar_idade_crianca_product_info4', esc_attr( $tar_idade_crianca_product_info4 ) );
        
    $tar_limitar_diarias4 = $_POST['tar_limitar_diarias4']; 

    update_post_meta( $post_id, 'tar_limitar_diarias4', esc_attr( $tar_limitar_diarias4 ) );
        
    $tar_qtd_limite4 = $_POST['tar_qtd_limite4']; 

    update_post_meta( $post_id, 'tar_qtd_limite4', esc_attr( $tar_qtd_limite4 ) ); 
        
    $check_taxas4 = $_POST['check_taxas4']; 

    update_post_meta( $post_id, 'check_taxas4', esc_attr( $check_taxas4 ) );
        
    $valor_taxa4 = $_POST['valor_taxa4']; 

    update_post_meta( $post_id, 'valor_taxa4', esc_attr( $valor_taxa4 ) ); 
        
    $regime_product_info4 = $_POST['regime_product_info4']; 

    update_post_meta( $post_id, 'regime_product_info4', esc_attr( $regime_product_info4 ) ); 

    /* ********** */ 
        
    $tar_periodo_product_info5 = $_POST['tar_periodo_product_info5'];
        
    if( !empty( $tar_periodo_product_info5 ) ) {

    update_post_meta( $post_id, 'tar_periodo_product_info5', esc_attr( $tar_periodo_product_info5 ) );
    }
        
    $tar_periodo_final_product_info5 = $_POST['tar_periodo_final_product_info5'];
        
    if( !empty( $tar_periodo_final_product_info5 ) ) {

    update_post_meta( $post_id, 'tar_periodo_final_product_info5', esc_attr( $tar_periodo_final_product_info5 ) );
    }
        
    $tar_valor_final_product_info5 = $_POST['tar_valor_final_product_info5'];
        
    if( !empty( $tar_valor_final_product_info5 ) ) {

    update_post_meta( $post_id, 'tar_valor_final_product_info5', esc_attr( $tar_valor_final_product_info5 ) );
    }
        
    $tar_check_crianca_product_info5 = $_POST['tar_check_crianca_product_info5'];
        
    if( !empty( $tar_check_crianca_product_info5 ) ) {

    update_post_meta( $post_id, 'tar_check_crianca_product_info5', esc_attr( $tar_check_crianca_product_info5 ) );
    }
        
    $tar_idade_crianca_product_info5 = $_POST['tar_idade_crianca_product_info5']; 

    update_post_meta( $post_id, 'tar_idade_crianca_product_info5', esc_attr( $tar_idade_crianca_product_info5 ) );
        
    $tar_limitar_diarias5 = $_POST['tar_limitar_diarias5']; 

    update_post_meta( $post_id, 'tar_limitar_diarias5', esc_attr( $tar_limitar_diarias5 ) );
        
    $tar_qtd_limite5 = $_POST['tar_qtd_limite5']; 

    update_post_meta( $post_id, 'tar_qtd_limite5', esc_attr( $tar_qtd_limite5 ) ); 
        
    $check_taxas5 = $_POST['check_taxas5']; 

    update_post_meta( $post_id, 'check_taxas5', esc_attr( $check_taxas5 ) );
        
    $valor_taxa5 = $_POST['valor_taxa5']; 

    update_post_meta( $post_id, 'valor_taxa5', esc_attr( $valor_taxa5 ) );
        
    $regime_product_info5 = $_POST['regime_product_info5']; 

    update_post_meta( $post_id, 'regime_product_info5', esc_attr( $regime_product_info5 ) );  

    /* ********** */  
} 

add_filter('template_include', 'wpse50201_set_template');
function wpse50201_set_template( $template ){

    //Add option for plugin to turn this off? If so just return $template

    //Check if the taxonomy is being viewed 
    //Suggested: check also if the current template is 'suitable'

    if( is_tax('categoria_apto') || is_tax('tipo_propriedades') || is_tax('localizacao') || is_tax('servicos') ){
        require('templates/list-tax.php');
    }else if ( is_singular( 'ttbooking' ) ) {
        require('templates/list-hotel.php');
    }else{
        return $template;
    }

    
}

add_action( 'init', 'init_sopt_38020' );
add_filter( 'query_vars', 'query_vars_sopt_38020' );
add_action( 'parse_request', 'parse_request_sopt_38020');

function init_sopt_38020() {
    add_rewrite_rule( 'hoteis?', 'index.php?hoteis=new', 'top' );
}

function query_vars_sopt_38020( $query_vars ) {
    $query_vars[] = 'hoteis';
    return $query_vars;
}

function parse_request_sopt_38020( $wp ) {
    if ( array_key_exists( 'hoteis', $wp->query_vars ) ) {
        require('templates/hoteis.php');
    }
}


add_action( 'init', 'init_sopt_380202' );
add_filter( 'query_vars', 'query_vars_sopt_380202' );
add_action( 'parse_request', 'parse_request_sopt_380202');

function init_sopt_380202() {
    add_rewrite_rule( 'apto?', 'index.php?apto=new', 'top' );
}

function query_vars_sopt_380202( $query_vars ) {
    $query_vars[] = 'apto';
    return $query_vars;
}

function parse_request_sopt_380202( $wp ) {
    if ( array_key_exists( 'apto', $wp->query_vars ) ) {
        global $woocommerce;
        $woocommerce->cart->empty_cart();
        require('templates/list-apto.php');
    }
}


add_action( 'init', 'init_sopt_380203' );
add_filter( 'query_vars', 'query_vars_sopt_380203' );
add_action( 'parse_request', 'parse_request_sopt_380203');

function init_sopt_380203() {
    add_rewrite_rule( 'checkout?', 'index.php?checkout=new', 'top' );
}

function query_vars_sopt_380203( $query_vars ) {
    $query_vars[] = 'checkout';
    return $query_vars;
}

function parse_request_sopt_380203( $wp ) {
    if ( array_key_exists( 'checkout', $wp->query_vars ) ) {
        require('templates/checkout.php');
    }
}

function prefix_add_discount_line( $cart ) { 
    $valor_taxa5 = floatval(str_replace(",", ".", $_SESSION['valor_taxas']));

  $discount = $cart->subtotal * $valor_taxa5;

  $cart->add_fee( __( 'Taxas', 'yourtext-domain' ) , $_SESSION['valor_taxas'] );

}
add_action( 'woocommerce_cart_calculate_fees', 'prefix_add_discount_line' ); 

function remove_quantity_text( $cart_item, $cart_item_key ) {
   $product_quantity= '';
   return $product_quantity;
}

add_filter ('woocommerce_checkout_cart_item_quantity', 'remove_quantity_text', 10, 2 );

add_action( 'woocommerce_before_calculate_totals', 'custom_cart_items_prices', 10, 1 );
function custom_cart_items_prices( $cart ) {

    if ( is_admin() && ! defined( 'DOING_AJAX' ) )
        return;

    if ( did_action( 'woocommerce_before_calculate_totals' ) >= 2 )
        return;

    // Loop through cart items
    foreach ( $cart->get_cart() as $cart_item ) {

        // Get an instance of the WC_Product object
        $product = $cart_item['data']; 
        $quantity =  $cart_item['quantity']; 

        // Get the product name (Added Woocommerce 3+ compatibility)
        $original_name = method_exists( $product, 'get_name' ) ? $product->get_name() : $product->post->post_title;

        // SET THE NEW NAME
        $new_name = $product->post->post_title.' <br>'.$_SESSION['texto_descritivo'].' '.$quantity.' diárias <br>'.$_SESSION['teste'];

        // Set the new name (WooCommerce versions 2.5.x to 3+)
        if( method_exists( $product, 'set_name' ) )
            $product->set_name( $new_name );
        else
            $product->post->post_title = $new_name;
    }
}