jQuery(document).ready(function (){
	jQuery('#mob-find-more, #mob-show-less').on("click", function(){
		jQuery("#mcc-sidebar .widget-area").slideToggle();
	})
});