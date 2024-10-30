(function($) {
"use strict";
	jQuery(document).ready(function($){
		setTimeout(function(){ 
			$(".elementor").not(".elementor-location-popup").each(function(e){
				$( "input.elementor-field-input-maks", $(this) ).each(function( index ) {
					elementor_input_masks($(this));
				});
			}) 
		}, 200);
        jQuery( document ).on( 'elementor/popup/show', () => {
            $( "input.elementor-field-input-maks" ).each(function( index ) {
                    elementor_input_masks($(this));
            });
        } );
		$("input").on("done_load_repeater",function(e){
			$( "input.elementor-field-input-maks" ).each(function( index ) {
					elementor_input_masks($(this));
			});
		})
		function elementor_input_masks(input){
			input.inputmask();
		}
		$("body").on("change","input.elementor-field-input-maks",function(e){
			if ($(this).inputmask("isComplete")) {
				$(this).removeClass('input-maks-not-complete');
			}else{
				$(this).addClass('input-maks-not-complete');
			}
		})
	})
})(jQuery);