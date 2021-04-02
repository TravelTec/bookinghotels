		<style type="text/css">
			body {
    background: #f1f1f1 !important;
}
		</style>
		<div class="wrap">
			<div id="icon-options-general" class="icon32"><br /></div> 
			<h2><?php _e( 'Formulário de busca de hospedagem' , 'config_ttbooking' ); ?></h2>
			<br>

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

			<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Configuração</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Shortcodes</a>
  </li> 
</ul>
  		<form id="config_ttbooking-form" action="options.php" method="post">
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  		<br> 
				<table class="form-table"> 
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
			 
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  		<br>
				<?php settings_fields( 'config_ttbooking' ); ?>

				<?php  
					$tipo_propriedade = [];
   
           $cat_terms = get_terms(
                   array('tipo_propriedades'),
                   array(
                           'hide_empty'    => false,
                           'orderby'       => 'name',
                           'order'         => 'ASC',
                           'number'        => 50 //specify yours
                       )
               );
   
   if( $cat_terms ){
   
       foreach( $cat_terms as $term ) { 
   
           $propriedades[] = array("tipo_propriedade" => $term->slug);
   
   }
   }   
				?>  

				<?php for ($i=0; $i < count($propriedades); $i++) {  ?>
 
				<div id="shortcode">
					<span><input type="text" value='[TTBOOKING_MOTOR_RESERVA propriedade="<?=$propriedades[$i]['tipo_propriedade']?>"]' id="myInput<?=$i?>" style="width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c;" onclick="copy_text_shortcode<?=$i?>()" placeholder="<?=$shortcode?>"> <button onclick="copy_text_shortcode<?=$i?>()" class="button button-secondary btn_copy_text<?=$i?>">Copiar</button> </span>
				</div> 
				<table class="form-table">
					<tr valign="top" class="config_ttbooking-smtp">
						<th scope="row">
							<?php _e( 'Texto do motor' , 'config_ttbooking' ); ?>
						</th>
						<td>
							<textarea class="regular-text" name="config_ttbooking[texto_motor<?=$i?>]" value="<?php esc_attr_e( $this->get_option( 'texto_motor'.$i ) ); ?>" placeholder="" style="height:125px"><?php esc_attr_e( $this->get_option( 'texto_motor'.$i ) ); ?></textarea> 
							<p class="description"><?php _e( 'A mensagem que será exibida para o bloco do motor.', 'config_ttbooking' ); ?></p>
						</td>
					</tr>  
				</table>
				<hr>
			<?php } ?>
				<p class="submit">
					<input type="submit" class="button-primary" value="<?php _e( 'Salvar' , 'config_ttbooking' ); ?>" /> 
				</p>
  	</div> 
</div> 
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

			function copy_text_shortcode0() { 

			jQuery("form").submit(function(e){ return false; });

			  jQuery("#myInput0").select();  
			  document.execCommand("copy");

			  /* Alert the copied text */
			  jQuery(".btn_copy_text0").html("<i class='fa fa-check'></i> Copiado"); 
			  jQuery("#myInput0").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c");  
			  setTimeout(function(){
			  jQuery(".btn_copy_text0").html("Copiar"); 
			  jQuery("#myInput0").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c"); 
			    }, 2000);

			} 

			function copy_text_shortcode1() { 

			  jQuery("#myInput1").select();  
			  document.execCommand("copy");

			  /* Alert the copied text */
			  jQuery(".btn_copy_text1").html("<i class='fa fa-check'></i> Copiado"); 
			  jQuery("#myInput1").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c");  
			  setTimeout(function(){
			  jQuery(".btn_copy_text1").html("Copiar"); 
			  jQuery("#myInput1").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c"); 
			    }, 2000);

			} 

			function copy_text_shortcode2() { 

			  jQuery("#myInput2").select();  
			  document.execCommand("copy");

			  /* Alert the copied text */
			  jQuery(".btn_copy_text2").html("<i class='fa fa-check'></i> Copiado"); 
			  jQuery("#myInput2").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c");  
			  setTimeout(function(){
			  jQuery(".btn_copy_text2").html("Copiar"); 
			  jQuery("#myInput2").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c"); 
			    }, 2000);

			} 

			function copy_text_shortcode3() { 

			  jQuery("#myInput3").select();  
			  document.execCommand("copy");

			  /* Alert the copied text */
			  jQuery(".btn_copy_text3").html("<i class='fa fa-check'></i> Copiado"); 
			  jQuery("#myInput3").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c");  
			  setTimeout(function(){
			  jQuery(".btn_copy_text3").html("Copiar"); 
			  jQuery("#myInput3").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c"); 
			    }, 2000);

			} 

			function copy_text_shortcode4() { 

			  jQuery("#myInput4").select();  
			  document.execCommand("copy");

			  /* Alert the copied text */
			  jQuery(".btn_copy_text4").html("<i class='fa fa-check'></i> Copiado"); 
			  jQuery("#myInput4").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c");  
			  setTimeout(function(){
			  jQuery(".btn_copy_text4").html("Copiar"); 
			  jQuery("#myInput4").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c"); 
			    }, 2000);

			} 

			function copy_text_shortcode5() { 

			  jQuery("#myInput5").select();  
			  document.execCommand("copy");

			  /* Alert the copied text */
			  jQuery(".btn_copy_text5").html("<i class='fa fa-check'></i> Copiado"); 
			  jQuery("#myInput5").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c");  
			  setTimeout(function(){
			  jQuery(".btn_copy_text5").html("Copiar"); 
			  jQuery("#myInput5").attr("style", "width: 51.2%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c"); 
			    }, 2000);

			} 


		</script>
