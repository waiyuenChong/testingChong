function callAjax(actionHandler, data, successCallback, errorCallback){
	$.ajax({
	    url: ajaxBaseUrl + '/' + actionHandler,
	    method: 'POST',
	    data: data,
	    dataType: 'json',
	    success: function(result){
	        if(result.httpStatus === 200){
	        	refresh_csrf_data(function(){
		            successCallback(result);
	        	});
	        }else{
	        	refresh_csrf_data(function(){
		            errorCallback(result);
	        	});
	        }
	    },

	    error: function(err){
	    	refresh_csrf_data(function(){
		        errorCallback(err);
	    	});
	    }
	});
}


function callGetAjax(actionHandler, data, successCallback, errorCallback){
	$.ajax({
	    url: ajaxBaseUrl + '/' + actionHandler,
	    method: 'GET',
	    dataType: 'json',
	    success: function(result){
	        if(result.status){
	            successCallback(result);
	        }else{
	            errorCallback(result);
	        }
	    },

	    error: function(err){
	        errorCallback(err);
	    }
	});
}

function csrf_ajax_append(data) {

	data[csrf_token_name] = csrf_hash;

	return data;
}   

function goBack() {
    window.history.back();
}

function loader() {
	$(".loader_container").css("display","table");
}