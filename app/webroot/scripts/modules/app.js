var App = {
	init: function(){
		$('form').submit(function(e){
			var params = $(this).serializeArray();
			$.ajax({
				url: 'cryptfy/index.json',
				type: 'post',
				data: params,
				dataType: 'json',
				success: function(resp){
					console.log(resp);
				}
			});
			e.preventDefault();
		});
	}
};

$(document).ready(function(){
	App.init();
});