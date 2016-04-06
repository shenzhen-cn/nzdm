$(function(){

   $(".del_user_btn").click(function (argument) {
		var _element = this.parentNode.parentNode;
        var _parentElement = _element.parentNode;

		var isDel =  confirm("你确定要删除，此用户么？");
		if(isDel == true){
			
			var ajaxUrl = "user/ajax_del_user";

			$.ajax({
				url: ajaxUrl,
				type: 'POST',
				dataType: 'json',
				data: {param1: 'value1'},
			})
			.done(function(data) {
				console.log(data);
		        if(_parentElement){
	               _parentElement.removeChild(_element);
		        }
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});										        
		}		

   });

});