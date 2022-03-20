function callAjax(actionHandler, data, successCallback, errorCallback) {
	$.ajax({
		url: ajaxBaseUrl + "/" + actionHandler,
		method: "POST",
		data: data,
		dataType: "json",
		success: function (result) {
			if (result != null) {
				refresh_csrf_data(function () {
					successCallback(result);
				});
			} else {
				refresh_csrf_data(function () {
					errorCallback(result);
				});
			}
		},

		error: function (err) {
			refresh_csrf_data(function () {
				errorCallback(err);
			});
		},
	});
}

function callGetAjax(actionHandler, data, successCallback, errorCallback) {
	$.ajax({
		url: ajaxBaseUrl + "/" + actionHandler,
		method: "GET",
		dataType: "json",
		success: function (result) {
			if (result.status) {
				successCallback(result);
			} else {
				errorCallback(result);
			}
		},

		error: function (err) {
			errorCallback(err);
		},
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
	$(".loader_container").css("display", "table");
}

function notify(title, message, type) {
	$.growl(
		{
			icon: "",
			title: title,
			message: message,
			url: "",
		},
		{
			element: "body",
			type: type,
			allow_dismiss: true,
			placement: {
				from: "bottom",
				align: "right",
			},
			offset: {
				x: 30,
				y: 30,
			},
			spacing: 10,
			z_index: 999999,
			delay: 2500,
			timer: 5000,
			url_target: "_blank",
			mouse_over: false,
			animate: {
				enter: "animated fadeIn",
				exit: "animated fadeOut",
			},
			icon_type: "class",
			template:
				'<div data-growl="container" class="alert" role="alert" style="width:20vw">' +
				'<button type="button" class="close" data-growl="dismiss">' +
				'<span aria-hidden="true">&times;</span>' +
				'<span class="sr-only">Close</span>' +
				"</button>" +
				'<span data-growl="icon"></span>' +
				'<span data-growl="title"></span><br/>' +
				'<span data-growl="message"></span>' +
				'<a href="javascript:" data-growl="url"></a>' +
				"</div>",
		}
	);
}
