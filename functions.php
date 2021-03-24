<?php  



/*



Plugin Name: Voucher Tec - Reserva de hospedagem

Plugin URI: https://github.com/TravelTec/bookinghotels

GitHub Plugin URI: https://github.com/TravelTec/bookinghotels 

Description: Voucher Tec - Reserva de hospedagem é um plugin desenvolvido para agências e operadoras de turismo que precisam tratar diárias de hospedagem de várias propriedades simultaneamente.

Version: 1.0.0

Author: Travel Tec

Author URI: https://traveltec.com.br

License: GPLv2



*/







/*



 * Plugin Update Checker



 * 



 * Note: If you're using the Composer autoloader, you don't need to explicitly require the library.



 * @link https://github.com/YahnisElsts/plugin-update-checker



 */



require_once 'plugin-update-checker-4.10/plugin-update-checker.php'; 

 
require_once plugin_dir_path(__FILE__) . 'includes/reserva-functions.php';








/*



 * Plugin Update Checker Setting



 *



 * @see https://github.com/YahnisElsts/plugin-update-checker for more details.



 */



function reserva_update_checker_setting() {



    if ( ! is_admin() || ! class_exists( 'Puc_v4_Factory' ) ) { 

        return; 

    } 



    $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker( 

        'https://github.com/TravelTec/bookinghotels', 

        __FILE__, 

        'bookinghotels' 

    ); 



    // (Opcional) Set the branch that contains the stable release. 

    $myUpdateChecker->setBranch('main');



}







add_action( 'admin_init', 'reserva_update_checker_setting' );







 