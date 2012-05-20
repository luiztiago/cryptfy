var App = {
	init: function(){
		$('form').submit(function(e){
			var params = $(this).serializeArray();
			$('input#FormString').addClass('loading');
			$.ajax({
				url: '/cryptfy/index.json',
				type: 'post',
				data: params,
				dataType: 'json',
				success: function(resp){
					var results = $('ul#results'); 
					results.empty();
					$.each(resp.results, function(key, value){
						results.append('<li><strong>'+key+'</strong>'+value+'</li>');
					});
					$('input#FormString').removeClass('loading');
				}
			});
			e.preventDefault();
		});
	}
};

$(document).ready(function(){
	App.init();
});