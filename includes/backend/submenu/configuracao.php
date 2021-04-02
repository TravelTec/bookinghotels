		<div class="wrap">
			<div id="icon-options-general" class="icon32"><br /></div> 
			<h2><?php _e( 'Formulário de busca de hospedagem' , 'config_ttbooking' ); ?></h2> 
			<form id="config_ttbooking-form" action="options.php" method="post">
				<?php settings_fields( 'config_ttbooking' ); ?>  
				<div id="shortcode">
					<span><input type="text" value="[TTBOOKING_MOTOR_RESERVA_HOTEIS]" id="myInput" style="width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c;" onclick="copy_text_shortcode()" placeholder="<?=$shortcode?>"> <button onclick="copy_text_shortcode()" class="button button-secondary btn_copy_text">Copiar</button> </span>
				</div>
				<table class="form-table">
					<tr valign="top" class="config_ttbooking-smtp">
						<th scope="row">
							<?php _e( 'Texto do motor' , 'config_ttbooking' ); ?>
						</th>
						<td>
							<textarea class="regular-text" name="config_ttbooking[texto_motor]" value="<?php esc_attr_e( $this->get_option( 'texto_motor' ) ); ?>" placeholder="" style="height:125px"><?php esc_attr_e( $this->get_option( 'texto_motor' ) ); ?></textarea> 
							<p class="description"><?php _e( 'A mensagem que será exibida para o bloco do motor.', 'config_ttbooking' ); ?></p>
						</td>
					</tr>
					<tr valign="top" class="config_ttbooking-smtp">
						<th scope="row">
							<?php _e( 'Cor do texto' , 'config_ttbooking' ); ?>
						</th>
						<td>
							<input type="text" class="regular-text" id="cor_texto" name="config_ttbooking[cor_texto]" value="<?php esc_attr_e( $this->get_option( 'cor_texto' ) ); ?>" placeholder="" style="margin-left: 32px;width: 36.4%;"/> 
							<div id="background_cor_texto" style="background-color: <?php esc_attr_e( $this->get_option( 'cor_texto' ) ); ?>;height: 28px;width: 31px;margin: 0 auto;position: absolute;margin-top: -30px;border: 1px solid #7e8993;">
								
							</div>
						</td>
					</tr>   
					<tr valign="top" class="config_ttbooking-smtp">
						<th scope="row">
							<?php _e( 'Cor do fundo do texto' , 'config_ttbooking' ); ?>
						</th>
						<td>
							<input type="text" class="regular-text" id="cor_fundo_texto" name="config_ttbooking[cor_fundo_texto]" value="<?php esc_attr_e( $this->get_option( 'cor_fundo_texto' ) ); ?>" placeholder="" style="margin-left: 32px;width: 36.4%;" /> 
							<div id="background_cor_fundo_texto" style="background-color: <?php esc_attr_e( $this->get_option( 'cor_fundo_texto' ) ); ?>;height: 28px;width: 31px;margin: 0 auto;position: absolute;margin-top: -30px;border: 1px solid #7e8993;">
								
							</div>
						</td>
					</tr>   
					<tr valign="top" class="config_ttbooking-smtp">
						<th scope="row">
							<?php _e( 'Cor das bordas' , 'config_ttbooking' ); ?>
						</th>
						<td>
							<input type="text" class="regular-text" id="cor_bordas" name="config_ttbooking[cor_bordas]" value="<?php esc_attr_e( $this->get_option( 'cor_bordas' ) ); ?>" placeholder="" style="margin-left: 32px;width: 36.4%;" /> 
							<div id="background_cor_bordas" style="background-color: <?php esc_attr_e( $this->get_option( 'cor_bordas' ) ); ?>;height: 28px;width: 31px;margin: 0 auto;position: absolute;margin-top: -30px;border: 1px solid #7e8993;">
								
							</div>
						</td>
					</tr>   
					<tr valign="top" class="config_ttbooking-smtp">
						<th scope="row">
							<?php _e( 'Cor do botão' , 'config_ttbooking' ); ?>
						</th>
						<td>
							<input type="text" class="regular-text" id="cor_botao" name="config_ttbooking[cor_botao]" value="<?php esc_attr_e( $this->get_option( 'cor_botao' ) ); ?>" placeholder="" style="margin-left: 32px;width: 36.4%;" /> 
							<div id="background_cor_botao" style="background-color: <?php esc_attr_e( $this->get_option( 'cor_botao' ) ); ?>;height: 28px;width: 31px;margin: 0 auto;position: absolute;margin-top: -30px;border: 1px solid #7e8993;">
								
							</div>
						</td>
					</tr>   
				</table> 
				<p class="submit">
					<input type="submit" class="button-primary" value="<?php _e( 'Salvar' , 'config_ttbooking' ); ?>" /> 
				</p>
			</form>
		</div>

		<script type="text/javascript">
			jQuery('#cor_texto, #background_cor_texto').ColorPicker({
				color: '#0000ff',
				onShow: function (colpkr) {
					jQuery(colpkr).fadeIn(500);
					return false;
				},
				onHide: function (colpkr) {
					jQuery(colpkr).fadeOut(500);
					return false;
				},
				onChange: function (hsb, hex, rgb) {
					jQuery('#background_cor_texto').css('backgroundColor', '#' + hex);
					jQuery('#cor_texto').val('#' + hex);
				}
			});
			jQuery('#cor_fundo_texto, #background_cor_fundo_texto').ColorPicker({
				color: '#0000ff',
				onShow: function (colpkr) {
					jQuery(colpkr).fadeIn(500);
					return false;
				},
				onHide: function (colpkr) {
					jQuery(colpkr).fadeOut(500);
					return false;
				},
				onChange: function (hsb, hex, rgb) {
					jQuery('#background_cor_fundo_texto').css('backgroundColor', '#' + hex);
					jQuery('#cor_fundo_texto').val('#' + hex);
				}
			});
			jQuery('#cor_bordas, #background_cor_bordas').ColorPicker({
				color: '#0000ff',
				onShow: function (colpkr) {
					jQuery(colpkr).fadeIn(500);
					return false;
				},
				onHide: function (colpkr) {
					jQuery(colpkr).fadeOut(500);
					return false;
				},
				onChange: function (hsb, hex, rgb) {
					jQuery('#background_cor_bordas').css('backgroundColor', '#' + hex);
					jQuery('#cor_bordas').val('#' + hex);
				}
			});
			jQuery('#cor_botao, #background_cor_botao').ColorPicker({
				color: '#0000ff',
				onShow: function (colpkr) {
					jQuery(colpkr).fadeIn(500);
					return false;
				},
				onHide: function (colpkr) {
					jQuery(colpkr).fadeOut(500);
					return false;
				},
				onChange: function (hsb, hex, rgb) {
					jQuery('#background_cor_botao').css('backgroundColor', '#' + hex);
					jQuery('#cor_botao').val('#' + hex);
				}
			});

			function copy_text_shortcode() { 

			  jQuery("#myInput").select();  
			  document.execCommand("copy");

			  /* Alert the copied text */
			  jQuery(".btn_copy_text").html("<i class='fa fa-check'></i> Copiado"); 
			  jQuery("#myInput").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c"); 
			  setTimeout(function(){
			  jQuery(".term-name-wrap").removeClass("form-invalid");
			    }, 10);
			  setTimeout(function(){
			  jQuery(".btn_copy_text").html("Copiar"); 
			  jQuery("#myInput").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c"); 
			    }, 2000);

			} 

			
		</script>
