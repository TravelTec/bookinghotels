
   function show_div_count(){
   jQuery(".dropdown").toggle(500);

  if (jQuery("#destino_pesquisa").val() == '') {
        jQuery("#destino").val(''); 
      }
   remove_drop_destino();
   }

   jQuery(document).ready(function(){ 
    

    jQuery(".daterangepicker").addClass('show-calendar'); 
    jQuery('#select-delivery-date-input').trigger('click')

    jQuery("#div_date").show(); 

   		    jQuery('.count').prop('disabled', true);
      			jQuery(document).on('click','.plus',function(){
   				var valor = parseInt(jQuery('.count').val()) + 1;
   				jQuery('.count').val(valor);
   				jQuery("#count_adultos").html("<strong>"+valor+" adultos</strong>");
       		});
           	jQuery(document).on('click','.minus',function(){
   				var valor = parseInt(jQuery('.count').val()) - 1;
       			jQuery('.count').val(valor);
   			
   				jQuery("#count_adultos").html("<strong>"+valor+" adultos</strong>");
       				if (jQuery('.count').val() == 0 || jQuery('.count').val() == 1) {
   						jQuery('.count').val(1);
   				jQuery("#count_adultos").html("<strong>1 adulto</strong>");
   					}
       	    	});
   
   
   
   		    jQuery('.count_child').prop('disabled', true);
      			jQuery(document).on('click','.plus_child',function(){
   				var valor = parseInt(jQuery('.count_child').val()) + 1;
   				jQuery('.count_child').val(valor);
          jQuery("#crianca"+valor).attr("style", "");
   				jQuery("#count_criancas").html("<strong>"+valor+" crianças</strong>");
   if (jQuery('.count_child').val() == 1) {
   						jQuery('.count_child').val(1);
   				jQuery("#count_criancas").html("<strong>1 criança</strong>");
   					}
       		});
           	jQuery(document).on('click','.minus_child',function(){
   				var valor = parseInt(jQuery('.count_child').val()) - 1;
       			jQuery('.count_child').val(valor);
          jQuery("#crianca"+parseInt(jQuery('.count_child').val())).attr("style", "display:none");
   			
   				jQuery("#count_criancas").html("<strong>"+valor+" crianças</strong>");
       				if (jQuery('.count_child').val() == 0) {
          jQuery("#crianca1").attr("style", "display:none");
          jQuery("#crianca2").attr("style", "display:none");
          jQuery("#crianca3").attr("style", "display:none");
          jQuery("#crianca4").attr("style", "display:none");
          jQuery("#crianca5").attr("style", "display:none");
          jQuery("#crianca6").attr("style", "display:none");
          jQuery("#crianca7").attr("style", "display:none");
          jQuery("#crianca8").attr("style", "display:none");
          jQuery("#crianca9").attr("style", "display:none"); 
   						jQuery('.count_child').val(0);
   				jQuery("#count_criancas").html("<strong>0 criança</strong>");
   					}
   if (jQuery('.count_child').val() == 1) {
   						jQuery('.count_child').val(1);
   				jQuery("#count_criancas").html("<strong>1 criança</strong>");
   					}
       	    	});
   
   		    jQuery('.count_quartos').prop('disabled', true);
      			jQuery(document).on('click','.plus_quartos',function(){
   				var valor = parseInt(jQuery('.count_quartos').val()) + 1;
   				jQuery('.count_quartos').val(valor);
   				jQuery("#count_quartos").html("<strong>"+valor+" quartos</strong>");
       		});
           	jQuery(document).on('click','.minus_quartos',function(){
   				var valor = parseInt(jQuery('.count_quartos').val()) - 1;
       			jQuery('.count_quartos').val(valor);
   			
   				jQuery("#count_quartos").html("<strong>"+valor+" quartos</strong>");
       				if (jQuery('.count_quartos').val() == 0 || jQuery('.count_quartos').val() == 1) {
   						jQuery('.count_quartos').val(1);
   				jQuery("#count_quartos").html("<strong>1 quarto</strong>");
   					}
       	    	});
   
    		});


    var date = new Date();
var currentMonth = date.getMonth();
var currentDate = date.getDate();
var currentYear = date.getFullYear();
  $('#select-delivery-date-input').daterangepicker({
  startDate: $("#inicio_calendario").val(),
  minDate: $("#inicio_calendario").val(),
  endDate: $("#fim_calendario").val(),
  maxDate: $("#fim_calendario").val(),
    autoApply: true,
  singleDatePicker: true,
  opens: "center", 
        locale: {
            format: 'DD/MM/YYYY',
    "applyLabel": "Aplicar",
    "cancelLabel": "Cancelar",
    "fromLabel": "De",
    "toLabel": "Até",
    "customRangeLabel": "Custom",
    "daysOfWeek": [
        "Dom",
        "Seg",
        "Ter",
        "Qua",
        "Qui",
        "Sex",
        "Sáb"
    ],
    "monthNames": [
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
    ],
        }
        }); 

   var date = new Date();
var currentMonth = date.getMonth();
var currentDate = date.getDate();
var currentYear = date.getFullYear();
$('#sandbox-container').daterangepicker({
  startDate: moment(date).add(1,'days'),
  minDate: moment(date).add(1,'days'),
        locale: {
            format: 'DD/MM/YYYY',
    "applyLabel": "Aplicar",
    "cancelLabel": "Cancelar",
    "fromLabel": "De",
    "toLabel": "Até",
    "customRangeLabel": "Custom",
    "daysOfWeek": [
        "Dom",
        "Seg",
        "Ter",
        "Qua",
        "Qui",
        "Sex",
        "Sáb"
    ],
    "monthNames": [
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
    ],
        } 
}).on("input change", function (e) { 
    jQuery('#validar_data').val(e.target.value);
    }).on("input focus", function (e) { 
      if (jQuery("#destino_pesquisa").val() == '') {
        jQuery("#destino").val(''); 
      }
    remove_drop_destino();
    }).val('');

function redirect_hotel(){

      if (jQuery("#destino_pesquisa").val() == '') {
        jQuery("#valida_campo_destino").attr('style', 'display:block;margin: 0 !important;padding: 3px 10px;font-size: 10px;color: #fff;background-color: #ab0808;top: 34px;position: absolute;z-index: 99999;');
      }else if (jQuery("#validar_data").val() == '') {
        jQuery("#valida_campo_data").attr('style', 'display:block;margin: 0 !important;padding: 3px 10px;font-size: 10px;color: #fff;background-color: #ab0808;top: 34px;position: absolute;z-index: 99999;');
      }else{
        jQuery("#valida_campo_destino").attr('style', 'display:none;margin: 0 !important;padding: 3px 10px;font-size: 10px;color: #fff;background-color: #ab0808;top: 34px;position: absolute;z-index: 99999;');
        jQuery("#valida_campo_data").attr('style', 'display:none;margin: 0 !important;padding: 3px 10px;font-size: 10px;color: #fff;background-color: #ab0808;top: 34px;position: absolute;z-index: 99999;');

        var propriedade = jQuery("#propriedade").val();
        var destino = jQuery("#destino_pesquisa").val();
        var data = jQuery("#validar_data").val();
        data = data.split(" - ");
        var data_inicio = data[0].replace("/", "-").replace("/", "-");
        var data_final = data[1].replace("/", "-").replace("/", "-");
        var adt = jQuery(".count").val()
        var chd = jQuery(".count_child").val()
        var qts = jQuery(".count_quartos").val()

        var idade1 = jQuery("#idade_crianca1").val()
        var idade2 = jQuery("#idade_crianca2").val()
        var idade3 = jQuery("#idade_crianca3").val()
        var idade4 = jQuery("#idade_crianca4").val()
        var idade5 = jQuery("#idade_crianca5").val()
        var idade6 = jQuery("#idade_crianca6").val()


      jQuery("#dados").attr("style", "display:none; position: absolute;width: 100%;top: 48px;background-color: #fff;"); 
   jQuery(".dropdown").attr("style", "display:none;position: relative; top:-2px; background-color: #fff; padding: 16px; box-shadow: 0px 0px 5px #868585;z-index: 99999999;width: 100%;");
  window.location.href = '/hoteis?param='+destino+';'+data_inicio+';'+data_final+';'+adt+';'+chd+';'+qts+';'+idade1+'-'+idade2+'-'+idade3+'-'+idade4+'-'+idade5+'-'+idade6+';'+propriedade;
}
}

function seleciona_cidade(destino){
  jQuery("#destino").val(destino);
  jQuery("#destino_pesquisa").val(destino);
  jQuery("#destino_hotel").val('');
      jQuery("#dados").attr("style", "display:none; position: absolute;width: 100%;top: 48px;background-color: #fff;z-index: 999;");
}
function seleciona_hotel(nomehotel, destino){
  jQuery("#destino").val(nomehotel);
  jQuery("#destino_pesquisa").val(destino);
  jQuery("#destino_hotel").val(destino);
      jQuery("#dados").attr("style", "display:none; position: absolute;width: 100%;top: 48px;background-color: #fff;z-index: 999;");
}

function limpar_campo(){
  jQuery("#destino").val('');
  jQuery("#valida_campo_destino").attr('style', 'display:none;margin: 0 !important;padding: 3px 10px;font-size: 10px;color: #fff;background-color: #ab0808;top: 34px;position: absolute;z-index: 99999;');
      jQuery("#dados").attr("style", "display:none; position: absolute;width: 100%;top: 48px;background-color: #fff;z-index: 999;");

}
function replaceSpecialChars(str) {
    str = str.replace(/[Ã€ÃÃ‚ÃƒÃ„Ã…]/, "A");
    str = str.replace(/[Ã Ã¡Ã¢Ã£Ã¤Ã¥]/, "a");
    str = str.replace(/[ÃˆÃ‰ÃŠÃ‹]/, "E");
    str = str.replace(/[Ã‡]/, "C");
    str = str.replace(/[Ã§]/, "c");

    // o resto

    return str.replace(/[^a-z0-9]/gi, "");
}
function strpos (haystack, needle, offset) {
  var i = (haystack+'').indexOf(needle, (offset || 0));
  return i === -1 ? false : true;
}
function exibe_destino(){
  jQuery("#destino_pesquisa").val('');
  if (jQuery("#destino").val().trim().length >= 3){

    var destinos_motor = JSON.parse(jQuery("#destinos_motor").val()); 

    var dados = '';

    jQuery(destinos_motor).each(function (i, item) {
            var codigo_pesquisar = replaceSpecialChars(item.name_local.toUpperCase());

            var valor_pesquisado = replaceSpecialChars(jQuery("#destino").val().toUpperCase());

            if (strpos(codigo_pesquisar, valor_pesquisado) === true) {

              if (item.name_hotel === '') { 

                dados += '<li style="list-style: none;border-bottom: 1px solid #ddd;font-size:13px;cursor:pointer;padding: 6px 15px;color: #495057;" onclick="seleciona_cidade(\''+item.name_local+'\')"><i class="fa fa-map"></i> '+item.name_local+'</li>';

              }else{

                dados += '<li style="list-style: none;border-bottom: 1px solid #ddd;font-size:13px;cursor:pointer;padding: 6px 15px;color: #495057;" onclick="seleciona_hotel(\''+item.name_hotel+'\', \''+item.name_local+'\')"><i class="fa fa-bed"></i> '+item.name_hotel+' - '+item.name_local+'</li>';

              }
            }else if (strpos(replaceSpecialChars(item.name_hotel.toUpperCase()), valor_pesquisado) === true) {

              if (item.name_hotel === '') { 

                dados += '<li style="list-style: none;border-bottom: 1px solid #ddd;font-size:13px;cursor:pointer;padding: 6px 15px;color: #495057;" onclick="seleciona_cidade(\''+item.name_local+'\')"><i class="fa fa-map"></i> '+item.name_local+'</li>';

              }else{

                dados += '<li style="list-style: none;border-bottom: 1px solid #ddd;font-size:13px;cursor:pointer;padding: 6px 15px;color: #495057;" onclick="seleciona_hotel(\''+item.name_hotel+'\', \''+item.name_local+'\')"><i class="fa fa-bed"></i> '+item.name_hotel+' - '+item.name_local+'</li>';

              }
            }

    });

    jQuery("#dados").html(dados);
    jQuery("#dados").attr("style", "display:block; position: absolute;width: 100%;top: 48px;background-color: #fff;z-index: 999;");

  }
}

function remove_drop_destino(){ 
      jQuery("#dados").attr("style", "display:none; position: absolute;width: 100%;top: 48px;background-color: #fff;");
}
function remove_drop_pax(){ 
  jQuery("#valida_campo_destino").attr('style', 'display:none;margin: 0 !important;padding: 3px 10px;font-size: 10px;color: #fff;background-color: #ab0808;top: 34px;position: absolute;z-index: 99999;');
        jQuery("#valida_campo_data").attr('style', 'display:none;margin: 0 !important;padding: 3px 10px;font-size: 10px;color: #fff;background-color: #ab0808;top: 34px;position: absolute;z-index: 99999;');
   jQuery(".dropdown").attr("style", "display:none;position: relative; top:-2px; background-color: #fff; padding: 16px; box-shadow: 0px 0px 5px #868585;z-index: 99999999;width: 100%;");
}
