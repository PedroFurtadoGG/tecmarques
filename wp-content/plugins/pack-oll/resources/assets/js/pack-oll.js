/*
*
*/
jQuery(document).ready(function(){
	po = jQuery;
	po('#pacote-oll .plugin-title strong').text(packoll);

	if(typeof gravity_form != 'undefined' && gravity_form == 'yes' ){
		po('#toplevel_page_gf_edit_forms').remove();
	}
});