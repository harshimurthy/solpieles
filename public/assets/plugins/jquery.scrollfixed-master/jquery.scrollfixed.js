
/**
 * Plugin for jQuery to dynamically turn an object fixed on top.
 * Example: jQuery("#lateralMenu").scrollFixed({top: "20px"});
 * @author Yismen Jorge, enhancing Armando Almeida
 */
(function ( $ ) {

	$.fn.scrollFixed = function(options){
	    // Default options
	    var settings = $.extend({
	        // These are the defaults.
	        top: "50px",
	        left: null,
	        right: null,
	        botton: null,
	        backgroundcolor: "#FFFFFF",
	        zindex: 3,
	        currentValues: {}
	    }, options );

		// Object to be fixed
		var objectToFix = this;
		// Limit to scrollTop
		var topLimit = this.offset().top;
		// get objecto current values
		settings.currentValues = getCurrentValues(objectToFix);
		// Window scroll function
		$(window).scroll(function() {
			// If the scrollTop is greater than the topLimit
			if ($(window).scrollTop() >= topLimit){
				// Then, turn the object fixed on top ...
				objectToFix.css("position", "fixed");
				// ... with the top of settings
				objectToFix.css("top", settings.top);
				objectToFix.css("left", settings.left);
				objectToFix.css("right", settings.right);
				objectToFix.css("botton", settings.botton);
				objectToFix.css("z-index", settings.zindex);
				objectToFix.css("background-color", settings.backgroundcolor);
			} else {
				// Return previous values
				setCurrentValues(objectToFix, settings)
			}
		});

		function getCurrentValues(objectToFix)
		{
			var currentValues = {
				top: objectToFix.css("top"),
				left: objectToFix.css("left"),
				right: objectToFix.css("right"),
				botton: objectToFix.css("botton"),
				zindex: objectToFix.css("z-index"),
				backgroundcolor: objectToFix.css("background-color"),
			}
			console.log(currentValues)
			return currentValues;
		}

		function setCurrentValues(objectToFix, settings)
		{
			objectToFix.css("position", "relative");
			objectToFix.css("top", settings.currentValues.top);
			objectToFix.css("left", settings.currentValues.left);
			objectToFix.css("right", settings.currentValues.right);
			objectToFix.css("botton", settings.currentValues.botton);
			objectToFix.css("z-index", settings.currentValues.zindex);
			objectToFix.css("background-color", settings.currentValues.backgroundcolor);
		}

		// Return the jQuery object
		return this;
	};
	
}( jQuery ));
