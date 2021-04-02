<?php

class TTBookingAdmin extends TTBooking {
	/**
	 * Setup backend functionality in WordPress
	 *
	 * @return none
	 * @since 0.1
	 */
	function __construct() {
		TTBooking::__construct();
		// Load localizations if available
		load_plugin_textdomain( 'config_ttbooking' , false , 'config_ttbooking/languages' );

		// Activation hook
		register_activation_hook( $this->plugin_file, array( &$this, 'init' ) );

		// Hook into admin_init and register settings and potentially register an admin_notice
		add_action( 'admin_init', array( &$this, 'admin_init' ) );

		// Activate the options page
		add_filter( 'admin_menu', array( &$this , 'books_register_ref_page' ) ); 

		// Register an AJAX action for testing mail sending capabilities
		add_action( 'wp_ajax_config_ttbooking-test', array( &$this, 'ajax_send_test' ) );
	}

	/**
	 * Initialize the default options during plugin activation
	 *
	 * @return none
	 * @since 0.1
	 */
	function init() {
		$defaults = array(
			'texto_motor' => '',
			'cor_texto' => '',
			'cor_fundo_texto' => '',
			'cor_bordas' => '',
			'cor_botao' => '',
		);
		if ( ! $this->options ) {
			$this->options = $defaults;
			add_option( 'config_ttbooking', $this->options );
		}
	}



	/**
	 * Add the options page
	 *
	 * @return none
	 * @since 0.1
	 */
	public function TESTE() { 
		require plugin_dir_path(dirname(__FILE__)) . 'includes/backend/submenu/configuracao.php';
}
	

	function books_register_ref_page() {
    add_submenu_page('edit.php?post_type=ttbooking', 'WP Travel Engine Admin Settings', 'Configurações', 'manage_options', 'config_ttbooking', array($this, 'TESTE'));
}
  

	/**
	 * Enqueue javascript required for the admin settings page
	 *
	 * @return none
	 * @since 0.1
	 */
	function admin_js() {
		wp_enqueue_script( 'jquery' );
	}

	/**
	 * Output JS to footer for enhanced admin page functionality
	 *
	 * @since 0.1
	 */
	function admin_footer_js() {
		?>
		<script type="text/javascript">
		/* <![CDATA[ */
			var formModified = false;
			jQuery().ready(function() {
				jQuery('#config_ttbooking-test').click(function(e) {
					e.preventDefault();
					if ( formModified ) {
						var doTest = confirm('<?php _e( 'The SmtpLocaweb plugin configuration has changed since you last saved. Do you wish to test anyway?\n\nClick "Cancel" and then "Save Changes" if you wish to save your changes.', 'config_ttbooking'); ?>');
						if ( ! doTest ) {
							return false;
						}
					}
					jQuery(this).val('<?php _e( 'Testing...', 'config_ttbooking' ); ?>');
					jQuery("#config_ttbooking-test-result").text('');
					jQuery.get(
						ajaxurl,
						{
							action: 'config_ttbooking-test',
							_wpnonce: '<?php echo wp_create_nonce(); ?>'
						}
					)
					.complete(function() {
						jQuery("#config_ttbooking-test").val('<?php _e( 'Test Configuration', 'config_ttbooking' ); ?>');
					})
					.success(function(data) {
						alert('SmtpLocaweb ' + data.method + ' Test ' + data.message);
					})
					.error(function() {
						alert('SmtpLocaweb Test <?php _e( 'Failure', 'config_ttbooking' ); ?>');
					});
				});
				jQuery("#config_ttbooking-form").change(function() {
					formModified = true;
				});
			});
		/* ]]> */
		</script>
		<?php
	}

	/**
	 * Output the options page
	 *
	 * @return none
	 * @since 0.1
	 */
	function options_page() {
		if ( ! @include( 'options-page.php' ) ) {
			printf( __( '<div id="message" class="updated fade"><p>The options page for the <strong>SmtpLocaweb</strong>'.
				'plugin cannot be displayed. The file <strong>%s</strong> is missing.  Please reinstall the plugin.'.
				'</p></div>', 'config_ttbooking'), dirname( __FILE__ ) . '/options-page.php' );
		}
	}

	/**
	 * Wrapper function hooked into admin_init to register settings
	 * and potentially register an admin notice if the plugin hasn't
	 * been configured yet
	 *
	 * @return none
	 * @since 0.1
	 */
	function admin_init() {
		$this->register_settings();
		 
	}

	/**
	 * Whitelist the config_ttbooking options
	 *
	 * @since 0.1
	 * @return none
	 */
	function register_settings() {
		register_setting( 'config_ttbooking', 'config_ttbooking', array( &$this, 'validation' ) );
	}

	/**
	 * Data validation callback function for options
	 *
	 * @param array $options An array of options posted from the options page
	 * @return array
	 * @since 0.1
	 */
	function validation( $options ) {
		$id_conta = trim( $options['id_conta'] );

		if ( ! empty( $id_conta ) ) {
			$id_conta = preg_replace( '/@.+$/', '', $id_conta );
			$options['id_conta'] = $id_conta;
		}

		foreach ( $options as $key => $value )
			$options[$key] = trim( $value );

		$this->options = $options;
		return $options;
	}

	/**
	 * Function to output an admin notice when the plugin has not
	 * been configured yet
	 *
	 * @return none
	 * @since 0.1
	 */
	function admin_notices() {
		$screen = get_current_screen();
		if ( $screen->id == $this->hook_suffix )
			return;
?>
		<div id='config_ttbooking-warning' class='updated fade'><p><strong><?php _e( 'SmtpLocaweb is almost ready. ', 'config_ttbooking' ); ?></strong><?php printf( __( 'You must <a href="%1$s">configure SmtpLocaweb</a> for it to work.', 'config_ttbooking' ), menu_page_url( 'config_ttbooking' , false ) ); ?></p></div>
<?php
	}

	/**
	 * Add a settings link to the plugin actions
	 *
	 * @param array $links Array of the plugin action links
	 * @return array
	 * @since 0.1
	 */
	function filter_plugin_actions( $links ) {
		$settings_link = '<a href="' . menu_page_url( 'config_ttbooking', false ) . '">' . __( 'Settings', 'config_ttbooking' ) . '</a>';
		array_unshift( $links, $settings_link );
		return $links;
	}

	/**
	 * AJAX callback function to test mail sending functionality
	 *
	 * @return string
	 * @since 0.1
	 */
	function ajax_send_test() {
		nocache_headers();
		header( 'Content-Type: application/json' );

		if ( ! current_user_can( 'manage_options' ) || ! wp_verify_nonce( $_GET[ '_wpnonce' ] ) ) {
			die(
				json_encode(
					array(
						'message' => __( 'Unauthorized', 'config_ttbooking' ),
						'method' => null
					)
				)
			);
		}

		$secure = ( defined( 'config_ttbooking_SECURE' ) && config_ttbooking_SECURE ) ? config_ttbooking_SECURE : $this->get_option( 'secure' );
		$method = ( (bool) $secure ) ? __( 'Secure SMTP', 'config_ttbooking' ) : __( 'SMTP', 'config_ttbooking' );

		$admin_email = get_option( 'admin_email' );
		ob_start();
		$GLOBALS['smtp_debug'] = true;
		$result = wp_mail(
			$admin_email,
			__( 'SmtpLocaweb WordPress Plugin Test', 'config_ttbooking' ),
			sprintf( __( "This is a test email generated by the SmtpLocaweb WordPress plugin.\n\nIf you have received this message, the requested test has succeeded.\n\nThe method used to send this email was: %s.", 'config_ttbooking' ), $method )
		);
		$GLOBALS['phpmailer']->smtpClose();
		$output = ob_get_clean();

		if ( $result ) {
			die(
				json_encode(
					array(
						'message' => __( 'Success', 'config_ttbooking' ),
						'method'  => $method
					)
				)
			);
		} else {
			die(
				json_encode(
					array(
						'message' => __( 'Failure', 'config_ttbooking' ) .", debug: ".  $output,
						'method'  => $method
					)
				)
			);
		}
	}
}
