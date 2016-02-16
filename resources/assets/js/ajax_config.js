(function($){
	$(document).ready(function() {
		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
	        }
	    });
	});
})(jQuery);