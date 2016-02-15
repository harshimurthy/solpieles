(function($){
	$(function(){
        $('select#inputLang').on('change', function (event) {
            console.log(event);

            event.stopPropagation();

            var form = $('#langForm');
            var formData = form.serializeArray;

            return form.submit();
            
        });
    });
})(jQuery);