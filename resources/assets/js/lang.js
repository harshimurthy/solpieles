/**
 * submit the language form to update the language in the app
 * @param  {[type]} $ [description]
 * @return {[type]}   [submit the form]
 */
(function($){
	$(document).ready(function() {
		$('select#inputLang').on('change', function (event) {
	        console.log(event);

	        event.stopPropagation();

	        var form = $('#langForm');
	        // var formData = form.serializeArray;

	        return form.submit();
	        
	    });
	});
})(jQuery);