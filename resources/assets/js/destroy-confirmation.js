(function($){
	$(document).ready(function() {
		$('button[name="deleteBtn"]').on('click', function(event) {
			event.preventDefault();
			var parentForm = $(this).parents('form').first();
			
			bootbox.confirm({
			    title: 'Peligro, Alerta!!!',
			    message: 'Esto Borrarrá este record de la base de datos. Está seguro de querer continuar?',
			    buttons: {
			        'confirm': {
			            label: 'Favor Confirmar',
			            className: 'btn-danger'
			        }
			    },
			    callback: function(result) 
			    {	       
					if (result == true) {
						
						$(parentForm).submit();	
					} 
			    }
			});	
		});
	});
})(jQuery);